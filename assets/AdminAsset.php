<?php

namespace app\assets;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

        "backentFiles/css/app.min.css",
        "backentFiles/css/vendor.min.css",
        "backentFiles/plugins/jvectormap-next/jquery-jvectormap.css",

        "backentFiles/plugins/tag-it/css/jquery.tagit.css",
        "backentFiles/plugins/tag-it/css/jquery.tagit.css" ,
        "backentFiles/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css",
        "backentFiles/plugins/bootstrap-daterangepicker/daterangepicker.css",
        "backentFiles/plugins/%40fullcalendar/common/main.min.css",
        "backentFiles/plugins/%40fullcalendar/daygrid/main.min.css",
        "backentFiles/plugins/%40fullcalendar/timegrid/main.min.css",
        "backentFiles/plugins/%40fullcalendar/list/main.min.css",
        "backentFiles/plugins/%40fullcalendar/bootstrap/main.min.css",
        "backentFiles/plugins/summernote/dist/summernote-lite.css",
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
        "backentFiles/js/vendor.min.js" ,
       "backentFiles/js/app.min.js",
       "backentFiles/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js",
        "backentFiles/js/demo/highlightjs.demo.js",
        "backentFiles/js/demo/sidebar-scrollspy.demo.js",
        "backentFiles/plugins/jvectormap-next/jquery-jvectormap.min.js",
        "backentFiles/plugins/jvectormap-content/world-mill.js",
        "backentFiles/plugins/apexcharts/dist/apexcharts.min.js",
        "backentFiles/js/demo/dashboard.demo.js",
        "backentFiles/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js",
        "https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194",






//        "backentFiles/js/app.min.js" ,
//        "../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js",
//        "backentFiles/js/vendor.min.js",
//        "backentFiles/plugins/jvectormap-next/jquery-jvectormap.min.js",
//        "backentFiles/plugins/jvectormap-content/world-mill.js",
//        "backentFiles/plugins/apexcharts/dist/apexcharts.min.js",
//        "backentFiles/js/demo/dashboard.demo.js",
//        "backentFiles/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js",
//        "https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194",










//        "backentFiles/bootstrap/js/jquery.js",
//"backentFiles/bootstrap/js/bootstrap-transition.js",
//"backentFiles/bootstrap/js/bootstrap-alert.js",
//"backentFiles/bootstrap/js/bootstrap-modal.js",
//"backentFiles/bootstrap/js/bootstrap-dropdown.js",
//"backentFiles/bootstrap/js/bootstrap-scrollspy.js",
//"backentFiles/bootstrap/js/bootstrap-tab.js",
//"backentFiles/bootstrap/js/bootstrap-tooltip.js",
//"backentFiles/bootstrap/js/bootstrap-popover.js",
//"backentFiles/bootstrap/js/bootstrap-button.js",
//"backentFiles/bootstrap/js/bootstrap-collapse.js",
//"backentFiles/bootstrap/js/bootstrap-carousel.js",
//"backentFiles/bootstrap/js/bootstrap-typeahead.js",
//"backentFiles/bootstrap/js/bootstrap-affix.js",
//"backentFiles/bootstrap/js/holder/holder.js",
//"backentFiles/bootstrap/js/google-code-prettify/prettify.js",
//"backentFiles/bootstrap/js/application.js",
//"../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js",
//"https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}