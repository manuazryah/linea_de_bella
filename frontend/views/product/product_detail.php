<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use common\models\Unit;
use common\models\Settings;
use common\components\RecentlyViewedWidget;
use common\components\RelatedProductWidget;
use common\components\ProductLinksWidget;
use common\models\Product;
use kartik\social\TwitterPlugin;
use kartik\social\FacebookPlugin;
use yii\db\Expression;

$this->title = $product_details->canonical_name;
?>

<section class="in-product-details"><!--in-product-details-->
        <div class="container">
                <div class="main-breadcrumb"><a href="<?= Yii::$app->homeUrl ?>">Home</a><i>//</i><span>Products</span> </div>
                <div class="row">
                        <div class="col-lg-6">
                                <div class="products-img-box">
                                        <div class="preview col">
                                                <div class="app-figure" id="zoom-fig">

                                                        <?php
                                                        $product_image = Yii::$app->basePath . '/../uploads/product/' . $product_details->id . '/profile/' . $product_details->canonical_name . '.' . $product_details->profile;
                                                        if (file_exists($product_image)) {
                                                                ?>
                                                                <a id="Zoom-1" class="MagicZoom" title="" href="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/profile/' . $product_details->canonical_name . '_big.' . $product_details->profile ?>">
                                                                        <img src="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/profile/' . $product_details->canonical_name . '_big.' . $product_details->profile ?>" alt=""/>
                                                                </a>

                                                        <?php } else { ?>
                                                                <a id="Zoom-1" class="MagicZoom" title="" href="<?= Yii::$app->homeUrl . 'uploads/product/gallery_dummy.png' ?>">
                                                                        <img src="<?= Yii::$app->homeUrl . 'uploads/product/gallery_dummy.png' ?>" alt=""/>
                                                                </a>

                                                        <?php } ?>
                                                        <div class="selectors">
                                                                <?php
                                                                $k = 0;
                                                                if (file_exists($product_image)) {
                                                                        $k++;
                                                                        ?>
                                                                        <a data-zoom-id="Zoom-1" href="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/profile/' . $product_details->canonical_name . '_big.' . $product_details->profile ?>" data-image="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/profile/' . $product_details->canonical_name . '_big.' . $product_details->profile ?>">
                                                                                <img srcset="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/profile/' . $product_details->canonical_name . '_big.' . $product_details->profile ?>?scale.width=112 2x" src="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/profile/' . $product_details->canonical_name . '_big.' . $product_details->profile ?>?scale.width=56"/>
                                                                        </a>
                                                                <?php }
                                                                ?>
                                                                <?php
                                                                $path = Yii::getAlias('@paths') . '/product/' . $product_details->id . '/gallery_large';
                                                                if (count(glob("{$path}/*")) > 0) {
                                                                        foreach (glob("{$path}/*") as $file) {

                                                                                $arry = explode('/', $file);
                                                                                $img_nmee = end($arry);
                                                                                $img_nmees = explode('.', $img_nmee);
                                                                                if ($img_nmees['1'] != '') {
                                                                                        $k++;
                                                                                        ?>
                                                                                        <a data-zoom-id="Zoom-1" href="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/gallery_large/' . end($arry) ?>" data-image="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/gallery_large/' . end($arry) ?>">
                                                                                                <img srcset="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/gallery_large/' . end($arry) ?>?scale.width=112 2x" src="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/gallery_large/' . end($arry) ?>?scale.width=56"/>
                                                                                        </a>
                                                                                        <?php
                                                                                }
                                                                                if ($k == 3) {
                                                                                        break;
                                                                                }
                                                                        }
                                                                }
                                                                ?>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="col-lg-6">
                                <div class="products-details-box">
                                        <h1 class="head"><?= $product_details->product_name ?></h1>
                                        <ul class="list">
                                                <?php
                                                if (isset($product_details->size) && $product_details->size != '') {
                                                        $size_unit = Unit::findOne($product_details->size_unit);
                                                        if (!empty($size_unit)) {
                                                                ?>
                                                                <li>Sizes:   <?= $product_details->size; ?>  <?= $size_unit->unit_name; ?></li>
                                                                <?php
                                                        }
                                                }
                                                ?>
                                                <?php
                                                if (isset($product_details->product_type) && $product_details->product_type != '') {
                                                        $fregrance = \common\models\Fregrance::findOne($product_details->product_type);
                                                        if (!empty($fregrance)) {
                                                                ?>
                                                                <li>Fragrance Type:   <?= $fregrance->name; ?></li>
                                                                <?php
                                                        }
                                                }
                                                ?>
                                        </ul>
                                        <?php $price = !empty($product_details->offer_price) ? $product_details->offer_price : $product_details->price ?>
                                        <div class="price-box"><?= $price ?> AED</div>
                                        <a href="#" class="product-addto-cart">Add to Bag</a>
                                        <div class="shipping-orders">Complimentary shipping on orders over $150</div>
                                        <?php if (isset($product_details->main_description) && $product_details->main_description != '') { ?>
                                                <div class="product-description">
                                                        <p><?= $product_details->main_description ?></p>
                                                </div>
                                        <?php } ?>
                                </div>
                        </div>
                </div>
        </div>
</section>
<?php if (isset($product_details->related_product)) { ?>
        <!--in-product-details-->
        <section class="home-prduct-section"><!--home-prduct-section-->
                <div class="container">
                        <div class="main-heading">
                                <h2 class="head-one">Related Products</h2>
                                <h3 class="head-small">Linea De Belle</h3>
                        </div>
                        <div class="content">
                                <div class="slider lazy-product">
                                        <?php
                                        $related_products = explode(',', $product_details->related_product);
                                        foreach ($related_products as $val) {
                                                ?>
                                                <?= ProductLinksWidget::widget(['id' => $val]) ?>
                                        <?php } ?>

                                </div>
                        </div>
                </div>
        </section>
<?php } ?>
<script>
        var mzOptions = {
                rightClick: true
        };
</script>