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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',

        "backentFiles/css/app.min.css",
        "backentFiles/css/vendor.min.css",
        "backentFiles/plugins/jvectormap-next/jquery-jvectormap.css",
        "backentFiles/plugins/bootstrap-daterangepicker/daterangepicker.css",

        "backentFiles/plugins/%40fullcalendar/common/main.min.css",
        "backentFiles/plugins/%40fullcalendar/daygrid/main.min.css",
        "backentFiles/plugins/%40fullcalendar/timegrid/main.min.css",
        "backentFiles/plugins/%40fullcalendar/list/main.min.css",
        "backentFiles/plugins/%40fullcalendar/bootstrap/main.min.css",
        "backentFiles/plugins/tag-it/css/jquery.tagit.css",
        "backentFiles/plugins/summernote/dist/summernote-lite.css",




        "backentFiles/plugins/tag-it/css/jquery.tagit.css" ,
        "backentFiles/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css",
        "backentFiles/plugins/bootstrap-daterangepicker/daterangepicker.css",
        "backentFiles/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css",
        "backentFiles/plugins/bootstrap-slider/dist/css/bootstrap-slider.min.css",
        "backentFiles/plugins/blueimp-file-upload/css/jquery.fileupload.css",
        "backentFiles/plugins/summernote/dist/summernote-lite.css",
        "backentFiles/plugins/spectrum-colorpicker2/dist/spectrum.min.css" ,
        "backentFiles/plugins/select-picker/dist/picker.min.css",
        "backentFiles/plugins/jquery-typeahead/dist/jquery.typeahead.min.css",
    ];
    public $js = [

        "backentFiles/js/app.min.js" ,
        "backentFiles/js/vendor.min.js",
        "../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js",
        "backentFiles/plugins/jvectormap-next/jquery-jvectormap.min.js",
        "backentFiles/plugins/jvectormap-content/world-mill.js",
        "backentFiles/plugins/apexcharts/dist/apexcharts.min.js",
        "backentFiles/js/demo/dashboard.demo.js",
        "../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js",
        "https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
