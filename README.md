# Yii2 StopForumSpam API Extension

## Installation

The preferred way to install this extension is through [composer](https://getcomposer.org/).

```
php composer.phar require denostr/yii2-stopforumspam "~0.1.0"
```


or add

```
"denostr/stopforumspam": "~0.1.0"
```

to the `require` section of your `composer.json` file.

```
'components' => [
	...
	'stopforumspam' => [
		'class' => 'denostr\stopforumspam\yii\Client',
		'format' => 'json',
	],
],
```

## Usage

```
$client = Yii::$app->stopforumspam;
$client->ip(['1.2.3.4', '4.6.7.8', '9.10.11.12']);
$client->email(['first@example.com', 'second@example.com']);

$result = $client->request();
```

## Documentation

API usage [stopforumspam.com/usage](https://stopforumspam.com/usage)

Client [denostr/stopforumspam](https://github.com/denostr/stopforumspam)