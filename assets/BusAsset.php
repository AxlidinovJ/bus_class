<?php
namespace app\assets;

use yii\web\AssetBundle;

class BusAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
      "vendor/css/bundle.min.css",
      "vendor/css/jquery.fancybox.min.css",
      "vendor/css/owl.carousel.min.css",
      "vendor/css/swiper.min.css",
      "vendor/css/cubeportfolio.min.css",
      "vendor/css/wow.css",
      "vendor/css/LineIcons.min.css",
      "classic-business/css/settings.css",
      "classic-business/css/style.css",
      'css/jk.css',
    ];
    public $js = [
      "vendor/js/bundle.min.js",
      "vendor/js/jquery.fancybox.min.js",
      "vendor/js/owl.carousel.min.js",
      "vendor/js/swiper.min.js",
      "vendor/js/jquery.cubeportfolio.min.js",
      "vendor/js/wow.min.js",
      "vendor/js/jquery.themepunch.tools.min.js",
      "vendor/js/jquery.themepunch.revolution.min.js",
      "vendor/js/extensions/revolution.extension.actions.min.js",
      "vendor/js/extensions/revolution.extension.carousel.min.js",
      "vendor/js/extensions/revolution.extension.kenburn.min.js",
      "vendor/js/extensions/revolution.extension.layeranimation.min.js",
      "vendor/js/extensions/revolution.extension.migration.min.js",
      "vendor/js/extensions/revolution.extension.navigation.min.js",
      "vendor/js/extensions/revolution.extension.parallax.min.js",
      "vendor/js/extensions/revolution.extension.slideanims.min.js",
      "vendor/js/extensions/revolution.extension.video.min.js",
      "vendor/js/contact_us.js",
      "classic-business/js/script.js",
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap4\BootstrapAsset',
    ];
}
