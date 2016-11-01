Respond.js Asset Bundle for Yii2
================================

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Add to the require section of your `composer.json` file:

```
"mimicreative/yii2-respond": "~1.0"
```

And run in terminal

```
composer update
```

Usage
-----

Use as the asset bundle in Yii2 View files.

```
// write this in your view file or layout
\mimicreative\respond\RespondAsset::register($this);
```

Or maybe you prefer to include it in your asset dependency.

```
public $depends = [
  // ...
  'mimicreative\respond\RespondAsset',
  // ...
];
```

By default, this will install respond js file at the head.

