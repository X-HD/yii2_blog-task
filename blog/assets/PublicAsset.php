<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

        "public/css/animate.css",
        "public/css/icomoon.css",
        "public/css/bootstrap.css",
        "public/css/magnific-popup.css",
        "public/css/style.css",

    ];
    public $js = [

        "public/js/jquery.min.js",
	    "public/js/jquery.easing.1.3.js",
	    "public/js/bootstrap.min.js",
	    "public/js/jquery.waypoints.min.js",
	    "public/js/jquery.stellar.min.js",
	    "public/js/main.js",

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
