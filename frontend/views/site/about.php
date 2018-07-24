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
                                        <p>Our company was established in………… We have successfully served customers from diverse backgrounds and spread smiles sans delay. Our meritorious track-record has been driven by positive reviews of customers. The journey has allowed us to fill fragrances in the lives of people from all walks of lives. We have always derived strength from our unique perfumes that fit all fabrics, suit all occasions, come in attractive colors and instill sturdy self-belief in you. Enjoy the aromatic journey with us. </p>
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


