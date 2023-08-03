<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'common/css/bootstrap.min.css',
        'common/css/typography.css',
        'common/css/style.css',
        'common/css/responsive.css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css',

    ];
    public $js = [
        'common/js/jquery.min.js',
        'common/js/popper.min.js',
        'common/js/bootstrap.min.js',
        'common/js/jquery.appear.js',
        'common/js/countdown.min.js',
        'common/js/waypoints.min.js',
        'common/js/jquery.counterup.min.js',
        'common/js/wow.min.js',
        'common/js/apexcharts.js',
        'common/js/slick.min.js',
        'common/js/select2.min.js',
        'common/js/owl.carousel.min.js',
        'common/js/jquery.magnific-popup.min.js',
        'common/js/smooth-scrollbar.js',
        'common/js/lottie.js',
        'common/js/core.js',
        'common/js/charts.js',
        'common/js/animated.js',
        'common/js/kelly.js',
        'common/js/worldLow.js',
        'common/js/raphael-min.js',
        'common/js/morris.js',
        'common/js/morris.min.js',
        'common/js/flatpickr.js',
        'common/js/style-customizer.js',
        'common/js/chart-custom.js',
        'common/js/custom.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
