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
                <div class="main-breadcrumb"><a href="<?= Yii::$app->homeUrl ?>">Home</a><i>//</i><span>Blog</span> </div>
        </div>
</section><!--in-breadcrumb-section-->

<section class="in-blog-section"><!--in-blog-section-->
        <div class="container">
                <div class="main-heading">
                        <h2 class="head-one">Our Blog</h2>
                        <h3 class="head-small">Linea De Belle</h3>
                </div>
                <div class="row">
                        <div class="col-lg-4">
                                <div class="blog-box">
                                        <div class="img-box"><img src="<?= Yii::$app->homeUrl ?>images/blog.png" class="img-fluid"></div>
                                        <h4 class="head">Incredible scents. Great Gifts .</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                        <?= Html::a('Read More', ['/site/blog-detail'], ['class' => 'link']) ?>
                                </div>
                        </div>
                        <div class="col-lg-4">
                                <div class="blog-box">
                                        <div class="img-box"><img src="<?= Yii::$app->homeUrl ?>images/blog2.png" class="img-fluid"></div>
                                        <h4 class="head">Incredible scents. Great Gifts .</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                         <?= Html::a('Read More', ['/site/blog-detail'], ['class' => 'link']) ?> </div>
                        </div>
                        <div class="col-lg-4">
                                <div class="blog-box">
                                        <div class="img-box"><img src="<?= Yii::$app->homeUrl ?>images/blog3.png" class="img-fluid"></div>
                                        <h4 class="head">Incredible scents. Great Gifts .</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                         <?= Html::a('Read More', ['/site/blog-detail'], ['class' => 'link']) ?></div>
                        </div>
                </div>
                <div class="row">
                        <div class="col-lg-4">
                                <div class="blog-box">
                                        <div class="img-box"><img src="<?= Yii::$app->homeUrl ?>images/blog.png" class="img-fluid"></div>
                                        <h4 class="head">Incredible scents. Great Gifts .</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                         <?= Html::a('Read More', ['/site/blog-detail'], ['class' => 'link']) ?> </div>
                        </div>
                        <div class="col-lg-4">
                                <div class="blog-box">
                                        <div class="img-box"><img src="<?= Yii::$app->homeUrl ?>images/blog2.png" class="img-fluid"></div>
                                        <h4 class="head">Incredible scents. Great Gifts .</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                         <?= Html::a('Read More', ['/site/blog-detail'], ['class' => 'link']) ?> </div>
                        </div>
                        <div class="col-lg-4">
                                <div class="blog-box">
                                        <div class="img-box"><img src="<?= Yii::$app->homeUrl ?>images/blog3.png" class="img-fluid"></div>
                                        <h4 class="head">Incredible scents. Great Gifts .</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                         <?= Html::a('Read More', ['/site/blog-detail'], ['class' => 'link']) ?> </div>
                        </div>
                </div>
        </div>
</section><!--in-blog-section-->

