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
class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'theme/css/animate.css',
        'theme/css/bootstrap.min.css',
        'theme/css/font-awesome.min.css',
        'theme/css/owl.carousel.css',
        'theme/css/magnific-popup.css',
        'theme/css/owl.theme.default.css',
        'theme/css/flaticon.css',
        'theme/css/fonts.css',
        'theme/css/style.css',
        'theme/css/responsive.css',
    ];
    public $js = [
        'theme/js/jquery-3.3.1.min.js',
        'theme/js/bootstrap.min.js',
        'theme/js/jquery.countTo.js',
        'theme/js/jquery.inview.min.js',
        'theme/js/wow.min.js',
        'theme/js/owl.carousel.js',
        'theme/js/jquery.magnific-popup.js',
        'theme/js/imagesloaded.pkgd.min.js',
        'theme/js/isotope.pkgd.min.js',
        'theme/js/custom.js',
        'js/main.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
