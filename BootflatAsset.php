<?php
/*
 * 2016-03-08
 * @author Squio <info@squio.nl>
 * https://bootflat.github.io/
 */
namespace squio\theme\flat;

use yii\web\AssetBundle;
class FlatAsset extends AssetBundle
{
    public $sourcePath='@vendor/squio/yii2-theme-bootflat/assets';
    public $baseUrl = '@web';
    
    public $css=[
        'css/bootflat.min.css',
    ];
    
    public $js=[
        'js/icheck.min.js',
        'js/jquery.fs.selecter.min.js',
        'js/jquery.fs.stepper.min.js',
    ];
    
    public $img=[
    	'img/check_flat/default.png',
    ]; 
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
    
    public function init() {
        parent::init();
    }
}
