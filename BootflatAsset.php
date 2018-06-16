<?php

namespace jamesdow\theme\bootflat;

use yii\web\AssetBundle;
class BootflatAsset extends AssetBundle
{
    // public $sourcePath='@vendor/james-dow/yii2-theme-bootflat/assets';
    public $baseUrl = '@web';
    
    public $css = [
        'css/bootflat.min.css',
    ];
    
    public $js = [
        'js/icheck.min.js',
        'js/jquery.fs.selecter.min.js',
        'js/jquery.fs.stepper.min.js',
    ];
    
    public $img = [
    	'img/check_flat/default.png',
    ]; 
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        parent::init();
    }
}
