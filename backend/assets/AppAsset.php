<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'vendors/bootstrap/dist/css/bootstrap.min.css',
        'vendors/font-awesome/css/font-awesome.min.css',
        'vendors/nprogress/nprogress.css',
        'vendors/iCheck/skins/flat/green.css',
        'vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css',
        'vendors/jqvmap/dist/jqvmap.min.css',
        'vendors/bootstrap-daterangepicker/daterangepicker.css',
        'build/css/custom.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css',
        'common/css/typography.css',
        'common/css/style.css',
    ];
    public $js = [
        'vendors/jquery/dist/jquery.min.js',
        'vendors/bootstrap/dist/js/bootstrap.bundle.min.js',
        'vendors/fastclick/lib/fastclick.js',
        'vendors/nprogress/nprogress.js',
        'vendors/Chart.js/dist/Chart.min.js',
        'vendors/gauge.js/dist/gauge.min.js',
        'vendors/iCheck/icheck.min.js',
        'vendors/skycons/skycons.js',
        'vendors/Flot/jquery.flot.js',
        'vendors/Flot/jquery.flot.pie.js',
        'vendors/Flot/jquery.flot.time.js',
        'vendors/Flot/jquery.flot.stack.js',
        'vendors/Flot/jquery.flot.resize.js',
        'vendors/flot.orderbars/js/jquery.flot.orderBars.js',
        'vendors/flot-spline/js/jquery.flot.spline.min.js',
        'vendors/flot.curvedlines/curvedLines.js',
        'vendors/DateJS/build/date.js',
        'vendors/jqvmap/dist/jquery.vmap.js',
        'vendors/jqvmap/dist/maps/jquery.vmap.world.js',
        'vendors/jqvmap/examples/js/jquery.vmap.sampledata.js',
        'vendors/moment/min/moment.min.js',
        'vendors/bootstrap-daterangepicker/daterangepicker.js',
        'build/js/custom.min.js',
        'js/tinymce/tinymce.min.js',
        'common/js/popper.min.js',
        'common/js/jquery.appear.js',
        'common/js/waypoints.min.js',
        'common/js/jquery.counterup.min.js',
        'common/js/apexcharts.js',
        'common/js/slick.min.js',
        'common/js/select2.min.js',
        'common/js/jquery.magnific-popup.min.js',
        'common/js/smooth-scrollbar.js',
        'common/js/lottie.js',
        'common/js/charts.js',
        'common/js/chart-custom.js',
        'common/js/custom.js',
        'https://code.highcharts.com/highcharts.js',
        'https://cdn.jsdelivr.net/npm/chart.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
