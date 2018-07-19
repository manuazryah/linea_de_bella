<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

if (isset($meta_title) && $meta_title != '')
        $this->title = $meta_title;
else
        $this->title = 'Linea De Bella';
?>
<section class="in-banner"><img src="<?= Yii::$app->homeUrl ?>images/banner/in-banner.jpg" class="img-fluid"></section>
<!--banner-->
<section class="in-breadcrumb-section"><!--in-breadcrumb-section-->
        <div class="container">
                <div class="main-breadcrumb"><a href="<?= Yii::$app->homeUrl ?>">Home</a><i>//</i><span>About</span> </div>
        </div>
</section><!--in-breadcrumb-section-->
<section class="in-about-section"><!--in-about-section-->
        <div class="container">
                <div class="row">
                        <div class="col-lg-7">
                                <div class="cont-box">
                                        <h1 class="head">Linea De Bella</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Est lorem ipsum dolor sit amet consectetur. Quam vulputate dignissim suspendisse in est ante. Proin fermentum leo vel orci porta non pulvinar neque. Accumsan tortor posuere ac ut consequat semper viverra. Est lorem ipsum dolor sit amet consectetur. Ac felis donec et odio pellentesque diam volutpat commodo sed. Quam pellentesque nec nam aliquam sem et tortor consequat id. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Ullamcorper eget nulla facilisi etiam dignissim diam quis enim. In cursus turpis massa tincidunt dui. Platea dictumst quisque sagittis purus sit amet volutpat.</p>
                                        <h2 class="head-sub">You Look for Perfume</h2>
                                        <h3 class="head-sub2">Linea De Bella</h3>
                                        <h4 class="head-sub3">good quality perfume</h4>
                                </div>
                        </div>
                        <div class="col-lg-5">
                                <div class="img-box">
                                        <img src="<?= Yii::$app->homeUrl ?>images/about.jpg" class="img-fluid">
                                </div>
                        </div>
                </div>
        </div>
</section><!--in-about-section-->
<section class="in-history-section"><!--in-history-->
        <div class="container">
                <div class="img"><img src="<?= Yii::$app->homeUrl ?>images/icon/exp-history.png" class="img-fluid"></div>
                <h3 class="head">Linea De Bella History</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi accumsan turpis posuere cursus ultricies. Ut nunc justo, faucibus eget elit quis, vehicula rhoncus nulla. Phasellus convallis sem nec facilisis commodo. Fusce ut molestie turpis. Suspendisse aliquet sed massa in vulputate. Quisque gravida suscipit tincidunt.Lorem ipsum dolor sit amet,</p>
        </div>
</section><!--in-history-->
<section class="in-vision-section"><!--in-vision-section-->
        <div class="container">
                <div class="row">
                        <div class="col-md-6">
                                <div class="vision-box">
                                        <h3 class="head">Our Vision</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi accumsan turpis posuere cursus ultricies. Ut nunc justo, faucibus eget elit quis, vehicula rhoncus nulla. Phasellus convallis sem nec facilisis commodo. Fusce ut molestie turpis. Suspendisse aliquet sed massa in vulputate. Quisque gravida suscipit tincidunt.Lorem ipsum dolor sit amet,</p>
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="vision-box">
                                        <h3 class="head">Our Mission</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi accumsan turpis posuere cursus ultricies. Ut nunc justo, faucibus eget elit quis, vehicula rhoncus nulla. Phasellus convallis sem nec facilisis commodo. Fusce ut molestie turpis. Suspendisse aliquet sed massa in vulputate. Quisque gravida suscipit tincidunt.Lorem ipsum dolor sit amet,</p>
                                </div>
                        </div>
                </div>
        </div>
</section><!--in-vision-section-->


