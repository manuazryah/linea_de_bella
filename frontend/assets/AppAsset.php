<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle {

        public $basePath = '@webroot';
        public $baseUrl = '@web';
        public $css = [
//            'css/site.css',
            'css/bootstrap.min.css',
            'css/stylesheet.css',
            'css/responsive.css',
            'css/animate.css',
            'css/slick.css',
            'css/slick-theme.css',
            'css/magiczoom.css',
        ];
        public $js = [
//            'js/jquery-min.js',
            'js/popper.min.js',
            'js/bootstrap.min.js',
            'js/grayscale.js',
            'js/slick.js',
            'js/scripts.js',
            'js/magiczoom.js',
        ];
        public $depends = [
            'yii\web\YiiAsset',
            'yii\bootstrap\BootstrapAsset',
        ];

}
