<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

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
<section class="in-contact-section"><!--in-about-section-->
        <div class="container">
                <h1 class="head">Contact information</h1>
                <div class="row">
                        <div class="col-lg-7 col-md-6 col-sm-6">
                                <div class="cont-box">
                                        <address class="address">
                                                <h2 class="sub-head">ADDRESS</h2>
                                                <h3 class="sub-head2">P.O. Box 89327, Dubai, UAE</h3>
                                        </address>
                                        <address class="address">
                                                <h2 class="sub-head">PHONE OFFICE</h2>
                                                <h3 class="sub-head2">+971 42659229</h3>
                                        </address>
                                        <address class="address">
                                                <h2 class="sub-head">FAX</h2>
                                                <h3 class="sub-head2">+971 42659229</h3>
                                        </address>
                                        <address class="address">
                                                <h2 class="sub-head">MAIL</h2>
                                                <h3 class="sub-head2"> info@coralblue.ae</h3>
                                        </address>
                                </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-6">
                                <div class="img-box">
                                        <img src="<?= Yii::$app->homeUrl ?>images/contact.jpg" class="img-fluid">
                                </div>
                        </div>
                </div>
        </div>
</section><!--in-about-section-->

<section class="in-contact-form"><!--in-contact-form-->
        <div class="container">
                <div class="main-heading">
                        <h2 class="head-one color-white">Get in touch</h2>
                        <h3 class="head-small">your inquiry</h3>
                </div>
                <p class="text-box">Fill in the form below, and we'll get back to you within 24 hours.</p>
                <form class="form-box">
                        <div class="row">
                                <div class="col-sm-6">
                                        <div class="form-group">
                                                <input name="" type="text" class="form-control" placeholder="Name" required>
                                        </div>
                                        <div class="form-group">
                                                <input name="" type="text" class="form-control" placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                                <input name="" type="text" class="form-control" placeholder="Phone Number" required>
                                        </div>
                                        <div class="form-group">
                                                <input name="" type="text" class="form-control" placeholder="Select Service" required>
                                        </div>
                                </div>
                                <div class="col-sm-6">
                                        <div class="form-group">
                                                <textarea name="" cols="" rows="" class="form-control" placeholder="Massage"></textarea>
                                        </div>
                                        <div class="form-group">
                                                <input name="" type="submit" value="Send Request!" class="submit">
                                        </div>
                                </div>
                        </div>
                </form>
        </div>
</section><!--in-contact-form-->