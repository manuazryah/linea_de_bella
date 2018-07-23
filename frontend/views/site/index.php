<?php
/* @var $this yii\web\View */

use common\components\ProductLinksWidget;

if (isset($meta_title) && $meta_title != '')
        $this->title = $meta_title;
else
        $this->title = 'Linea De Bella';
?>

<section class="banner">
        <div id="demo" class="carousel slide" data-ride="carousel">
                <!-- The slideshow -->
                <div class="carousel-inner">
                        <?php
                        if (!empty($sliders)) {
                                $i = 0;
                                foreach ($sliders as $slider) {
                                        $i++;
                                        $link = '';
                                        if (isset($slider->slider_link) && $slider->slider_link != '') {
                                                $link = $slider->slider_link;
                                        }
                                        ?>
                                        <div class="carousel-item <?= $i == 1 ? 'active' : '' ?>"> <img src="<?= Yii::$app->homeUrl ?>uploads/cms/slider/<?= $slider->id ?>/large.<?= $slider->img ?>" alt="<?= $slider->alt_tag_content ?>" class="img-fluid"> </div>
                                        <?php
                                }
                        }
                        ?>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev"> <span class="fa fa-angle-left"></span> </a> <a class="carousel-control-next" href="#demo" data-slide="next"> <span class="fa fa-angle-right"></span> </a> </div>
        <!-- close carousel -->
</section>
<!--banner-->
<section class="home-page-welcome"><!--home-page-welcome-->
        <div class="container">
                <div class="welcom-head">
                        <h1 class="head-text">Welcome to</h1>
                        <small class="small">linea de bella</small> </div>
                <div class="row">
                        <div class="col-lg-4">
                                <div class="left-head">
                                        <h2 class="head-one">You Look for Perfume</h2>
                                        <h3 class="head-two">Linea De Bella</h3>
                                </div>
                        </div>
                        <div class="col-lg-4">
                                <div class="img-box"><img src="<?= Yii::$app->homeUrl ?>images/welcome-img.png" class="img-fluid" alt="" title=""></div>
                        </div>
                        <div class="col-lg-4">
                                <div class="cont-box">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo cons..</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo cons.. </p>
                                </div>
                        </div>
                </div>
                <div class="years-experience">
                        <h4 class="sub-head">10</h4>
                        <h5 class="sub-head2">years experience</h5>
                </div>
        </div>
</section>
<!--home-page-welcome-->
<?php if (isset($home_datas_1->product_id)) { ?>
        <section class="home-prduct-section home-collection"><!--home-prduct-section-->
                <div class="container">
                        <div class="main-heading">
                                <h2 class="head-one"><?= $home_datas_1->tittle ?></h2>
                                <h3 class="head-small">Linea De Belle</h3>
                        </div>
                        <div class="content">
                                <div class="slider lazy-product">
                                        <?php
                                        $products = explode(',', $home_datas_1->product_id);
                                        foreach ($products as $top_categorie) {
                                                ?>
                                                <?= ProductLinksWidget::widget(['id' => $top_categorie]) ?>
                                                <?php
                                        }
                                        ?>


                                </div>
                        </div>
                </div>
        </section>
<?php } ?>
<!--home-prduct-section-->
<section class="home-set-off-products-section"><!--home-set-off-Products-->
        <div class="container">
                <div class="main-heading">
                        <h2 class="head-one color-white">Set Off Products</h2>
                        <h3 class="head-small">New Products</h3>
                </div>
                <div class="row">
                        <div class="col-sm-6">
                                <div class="set-off-products-box">
                                        <div class="img-box"> <a href="#"><img src="<?= Yii::$app->homeUrl ?>images/product/set-product1.jpg" class="img-fluid" alt="" title=""></a>
                                                <div class="border-line-right"></div>
                                                <div class="border-line-left"></div>
                                        </div>
                                        <h3 class="head">MOONLIGHT IN HEAVEN, CROISIERE</h3>
                                        <a href="#" class="link">Shop Now</a> </div>
                        </div>
                        <div class="col-sm-6">
                                <div class="set-off-products-box">
                                        <div class="img-box"> <a href="#"><img src="<?= Yii::$app->homeUrl ?>images/product/set-product2.jpg" class="img-fluid" alt="" title=""></a>
                                                <div class="border-line-right"></div>
                                                <div class="border-line-left"></div>
                                        </div>
                                        <h3 class="head">FROM DUSK TILL DAWN</h3>
                                        <a href="#" class="link">Shop Now</a> </div>
                        </div>
                </div>
        </div>
</section>
<!--home-set-off-Products-->

<?php if (isset($home_datas_2->product_id)) { ?>
        <section class="home-prduct-section"><!--home-prduct-section-->
                <div class="container">
                        <div class="main-heading">
                                <h2 class="head-one"><?= $home_datas_2->tittle ?></h2>
                                <h3 class="head-small">Linea De Belle</h3>
                        </div>
                        <div class="content">
                                <div class="slider lazy-product">
                                        <?php
                                        $products_2 = explode(',', $home_datas_2->product_id);
                                        foreach ($products_2 as $product) {
                                                ?>
                                                <?= ProductLinksWidget::widget(['id' => $product]) ?>
                                                <?php
                                        }
                                        ?>


                                </div>
                        </div>
                </div>
        </section>
<?php } ?>
<!--home-prduct-section-->
<?php if (isset($home_datas_3->product_id)) { ?>
        <section class="home-prduct-section home-coming-soon"><!--home-prduct-section-->
                <div class="container">
                        <div class="main-heading">
                                <h2 class="head-one color-white">Coming Soon</h2>
                                <h3 class="head-small">Linea De Belle</h3>
                        </div>
                        <div class="content">
                                <div class="slider lazy-product">
                                        <?php
                                        $products_3 = explode(',', $home_datas_3->product_id);
                                        foreach ($products_3 as $product3) {
                                                ?>
                                                <?= ProductLinksWidget::widget(['id' => $product3]) ?>
                                                <?php
                                        }
                                        ?>


                                </div>
                        </div>
                </div>
        </section>
<?php } ?>
<!--home-prduct-section-->
<?php if (isset($home_datas_4->product_id)) { ?>
        <section class="home-prduct-section"><!--home-prduct-section-->
                <div class="container">
                        <div class="main-heading">
                                <h2 class="head-one">Travel with Linea De Bella</h2>
                                <h3 class="head-small">Linea De Belle</h3>
                        </div>
                        <div class="content">
                                <div class="slider lazy-product">
                                        <?php
                                        $products_4 = explode(',', $home_datas_4->product_id);
                                        foreach ($products_4 as $product4) {
                                                ?>
                                                <?= ProductLinksWidget::widget(['id' => $product4]) ?>
                                                <?php
                                        }
                                        ?>


                                </div>
                        </div>
                </div>
        </section>
<?php } ?>
<!--home-prduct-section-->
<section class="home-founder-section"><!--home-founder-section-->
        <div class="container">
                <div class="row">
                        <div class="col-lg-5 col-md-4">
                                <div class="img-box"><img src="<?= Yii::$app->homeUrl ?>images/founder-img.png" class="img-fluid"></div>
                        </div>
                        <div class="col-lg-7 col-md-8">
                                <div class="cont-box">
                                        <h3 class="head">Linea De Bella</h3>
                                        <h4 class="sub-head">THE FOUNDER</h4>
                                        <div class="text">
                                                <p>Duis aute irure dolor in reprehenderit in voluptate
                                                        velit esse cillum dolore eu fugiat nulla pariatur</p>
                                        </div>
                                        <a href="#" class="link"> FIND OUT MORE </a> </div>
                        </div>
                </div>
        </div>
</section>
<!--home-founder-section-->
<section class="home-blog-section"><!--home-blog-section-->
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
                                        <a href="#" class="link">Read More</a> </div>
                        </div>
                        <div class="col-lg-4">
                                <div class="blog-box">
                                        <div class="img-box"><img src="<?= Yii::$app->homeUrl ?>images/blog2.png" class="img-fluid"></div>
                                        <h4 class="head">Incredible scents. Great Gifts .</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                        <a href="#" class="link">Read More</a> </div>
                        </div>
                        <div class="col-lg-4">
                                <div class="blog-box">
                                        <div class="img-box"><img src="<?= Yii::$app->homeUrl ?>images/blog3.png" class="img-fluid"></div>
                                        <h4 class="head">Incredible scents. Great Gifts .</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                        <a href="#" class="link">Read More</a> </div>
                        </div>
                </div>
        </div>
</section>
<!--home-blog-section-->
