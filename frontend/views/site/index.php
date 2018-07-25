<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
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
                    <?= $home_page_contents->welcome_content ?>
                </div>
            </div>
        </div>
        <div class="years-experience">
            <h4 class="sub-head"><?= $home_page_contents->year_of_experience ?></h4>
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
            <?php foreach ($set_off_products as $set_off_product) { ?>
                <div class="col-sm-6">
                    <div class="set-off-products-box">
                        <div class="img-box"> <a href="/<?= $set_off_product->link ?>"><img src="<?= Yii::$app->homeUrl ?>uploads/cms/our_collections/<?= $set_off_product->id ?>/large.<?= $set_off_product->image ?>" class="img-fluid" alt="" title=""></a>
                            <div class="border-line-right"></div>
                            <div class="border-line-left"></div>
                        </div>
                        <h3 class="head"><?= $set_off_product->title ?></h3>
                        <a href="<?= $set_off_product->link ?>" class="link">Shop Now</a> </div>
                </div>
            <?php } ?>
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
                <h2 class="head-one color-white"><?= $home_datas_3->tittle ?></h2>
                <h3 class="head-small">Linea De Belle</h3>
            </div>
            <div class="content">
                <div class="slider lazy-product">
                    <?php
                    $products_3 = explode(',', $home_datas_3->product_id);
                    foreach ($products_3 as $product3) {
                        ?>
                        <?= ProductLinksWidget::widget(['id' => $product3, 'first' => 2]) ?>
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
                <h2 class="head-one"><?= $home_datas_4->tittle ?></h2>
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
                        <p><?= $home_page_contents->founder_message ?></p>
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
            <?php
            if (!empty($blog_datas)) {
                foreach ($blog_datas as $blog_data) {
                    if (!empty($blog_data)) {
                        ?>
                        <div class="col-lg-4">
                            <div class="blog-box">
                                <div class="img-box"><img src="<?= Yii::$app->homeUrl ?>uploads/cms/from-blog/<?= $blog_data->id ?>/large.<?= $blog_data->image ?>" alt="<?= $blog_data->title ?>" class="img-fluid"></div>
                                <?php
                                if (strlen($blog_data->title) > 24) {
                                    $blog_title = substr($blog_data->title, 0, 28) . '..';
                                } else {
                                    $blog_title = $blog_data->title;
                                }
                                ?>
                                <h4 class="head" title="<?= $blog_data->title ?>"><?= $blog_title ?></h4>
                                <p><?= $blog_data->content_for_home_page ?></p>
                                <?= Html::a('Read More', ['/site/blog-detail', 'id' => yii::$app->EncryptDecrypt->Encrypt('encrypt', $blog_data->id)], ['class' => 'link']) ?>
                            </div>
                        </div>
                        <?php
                    }
                }
            }
            ?>
        </div>
    </div>
</section>
<!--home-blog-section-->
