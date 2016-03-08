Yii2  Flat Theme 
======================
Theme for Yii2 Web Applicaiton for yii2.0
Fully based on [bootflat](https://bootflat.github.io/)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist squio/yii2-theme-bootflat "*"
```

or add

```
"squio/yii2-theme-bootflat": "*"
```

to the require section of your `composer.json` file.


Usage
-----
```
use squio\theme\bootflat;

bootflat\BootflatAsset::register($this);
```