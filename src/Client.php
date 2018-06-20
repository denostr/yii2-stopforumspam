<?php

namespace denostr\stopforumspam\yii;

/**
 * Yii2 component for stopforumspam
 *
 * @link https://www.stopforumspam.com
 * @link https://github.com/denostr/yii2-stopforumspam
 * @link https://github.com/denostr/stopforumspam
*/
class Client extends \yii\base\BaseObject
{
    /**
     * @var null|\denostr\stopforumspam\Client
     */
    public $client = null;

    /**
     * @var string Response format
     */
    public $format;

    /**
     * @var string Callback function, used for self::FORMAT_JSONP format type
     */
    public $callback;

    /**
     * @var string API Host
     */
    public $apiHost;

    /**
     * @var bool Switch debug mode
     */
    public $debug = false;

    /**
     * @return \denostr\stopforumspam\Client
     * @throws \Exception
     */
    public function init()
    {
        parent::init();

        if (!class_exists('\\denostr\\stopforumspam\\Client')) {
            throw new \Exception('StopForumSpam not found. Try to install it via composer require denostr\stopforumspam');
        }

        if ($this->client === null) {
            $this->client = new \denostr\stopforumspam\Client();
            $this->client->debug($this->debug);

            if (!empty($this->format)) {
                $this->client->format($this->format);
            }

            if (!empty($this->callback)) {
                $this->client->callback($this->callback);
            }

            if (!empty($this->apiHost)) {
                $this->client->apiHost($this->apiHost);
            }
        }

        return $this->client;
    }

    /**
     * @param $name
     * @param $params
     * @return mixed
     */
    public function __call($name, $params)
    {
        return call_user_func_array([$this->client, $name], $params);
    }
}
