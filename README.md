# Yii2 StopForumSpam API Extension

[![Latest Stable Version](https://poser.pugx.org/denostr/yii2-stopforumspam/v/stable)](https://packagist.org/packages/denostr/yii2-stopforumspam)
[![Total Downloads](https://poser.pugx.org/denostr/yii2-stopforumspam/downloads)](https://packagist.org/packages/denostr/yii2-stopforumspam)
[![Latest Unstable Version](https://poser.pugx.org/denostr/yii2-stopforumspam/v/unstable)](https://packagist.org/packages/denostr/yii2-stopforumspam)
[![License](https://poser.pugx.org/denostr/yii2-stopforumspam/license)](https://packagist.org/packages/denostr/yii2-stopforumspam)

## Installation

The preferred way to install this extension is through [composer](https://getcomposer.org/).

```
composer require denostr/yii2-stopforumspam "~0.1.0"
```


or add

```
"denostr/stopforumspam": "~0.1.0"
```

to the `require` section of your `composer.json` file.

Then add to config:

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