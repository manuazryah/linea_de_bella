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
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="information-contact pbtm40 black-bg">
    <div class="content_breadcum" style="background-position: 50% 0px;"></div>
    <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid  vc_custom_ vc_row-has-fill  " style="position: relative; left: 0px; box-sizing: border-box; width: 1349px; padding-left: 0px; padding-right: 0px; margin: 0 auto; margin-bottom: 35px; margin-top: 15px; background: #1a1a1a; opacity: 1; ">
        <div class="container">
            <!--<h1 class="page-title">Contact Us</h1>-->
            <ul class="breadcrumb" style="margin-top: 0px; margin-bottom: 0px;">
                <li><a href="<?= yii::$app->homeUrl ?>"><i class="fa fa-home"></i></a></li>
                <li class="active"><a><?= $product_details->product_name ?></a></li>
            </ul>
        </div>
    </div>
    <div data-vc-full-width="true " data-vc-full-width-init="true " class="vc_row wpb_row vc_row-fluid  vc_custom_ vc_row-has-fill  " style="position: relative; left: 0px; box-sizing: border-box; width: 1349px; padding-left: 0px; padding-right: 0px; margin: 0 auto; ">
        <div class="container">
            <div class="row">
                <div id="content">
                    <section id="product" class="col-xs-12 col-sm-8 col-md-12 no-sidebar-right">



                        <div class="alert alert-success alert_<?= $product_details->canonical_name ?> hide">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <a href="<?= yii::$app->homeUrl.'cart/mycart'?>" class="button wc-forward">View Cart</a> “<?= $product_details->product_name ?>“ has been added to your cart. 
                        </div>

                        <div itemscope="" itemtype="h" id="product-113" class="product-info post-113 product type-product status-publish has-post-thumbnail product_cat-men product_cat-shirt product_cat-top product_tag-dummy featured shipping-taxable product-type-external product-cat-men product-cat-shirt product-cat-top product-tag-dummy instock">
                            <div id="single-product" class="row">
                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 product-img-view-box">

                                    <div class="app-figure" id="zoom-fig">
                                        <?php
                                        $product_image = Yii::$app->basePath . '/../uploads/product/' . $product_details->id . '/profile/' . $product_details->canonical_name . '.' . $product_details->profile;
                                        if (file_exists($product_image)) {
                                            ?>
                                            <a id="Zoom-1" class="MagicZoom" title="" href="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/profile/' . $product_details->canonical_name . '_big.' . $product_details->profile ?>">
                                                <img src="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/profile/' . $product_details->canonical_name . '_big.' . $product_details->profile ?>?scale.height=200" alt=""/>
                                                <!--                                    <div class="offer-tag">
                                                                                        <img src="images/off-tag-bg.png"/><span>10% OFF</span>
                                                                                    </div>-->
                                            </a>

                                        <?php } else { ?>
                                            <a id="Zoom-1" class="MagicZoom" title="" href="<?= Yii::$app->homeUrl . 'uploads/product/gallery_dummy.png' ?>">
                                                <img src="<?= Yii::$app->homeUrl . 'uploads/product/gallery_dummy.png' ?>?scale.height=200" alt=""/>
                                                <!--                                    <div class="offer-tag">
                                                                                        <img src="images/off-tag-bg.png"/><span>10% OFF</span>
                                                                                    </div>-->
                                            </a>

                                        <?php } ?>
                                        <!--                                        <a id="Zoom-1" class="MagicZoom" title=""
                                                                                   href="<?= yii::$app->homeUrl ?>images/products/1.png"
                                                                                   >
                                                                                    <img src="<?= yii::$app->homeUrl ?>images/products/1.png?scale.height=200" alt=""/>
                                                                                                                        <div class="offer-tag">
                                                                                                                            <img src="images/off-tag-bg.png"/><span>10% OFF</span>
                                                                                                                        </div>
                                                                                </a>-->
                                        <div class="selectors">
                                            <?php if (file_exists($product_image)) { ?>
                                                <a
                                                    data-zoom-id="Zoom-1"
                                                    href="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/profile/' . $product_details->canonical_name . '_big.' . $product_details->profile ?>"
                                                    <!--data-image="images/products/1.png?scale.height=400"-->
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
                                                        ?>
                                                        <a
                                                            data-zoom-id="Zoom-1"
                                                            href="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/gallery_large/' . end($arry) ?>"
                                                            data-image="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/gallery_large/' . end($arry) ?>?scale.height=400"
                                                            >
                                                            <img srcset="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/gallery_large/' . end($arry) ?>?scale.width=112 2x" src="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/gallery/' . end($arry) ?>?scale.width=56"/>
                                                        </a>
                                                        <?php
                                                    }
                                                }
                                            }
                                            ?>
                                            <!--                                            <a
                                                                                            data-zoom-id="Zoom-1"
                                                                                            href="<?= yii::$app->homeUrl ?>images/products/1.png"
                                                                                            data-image="<?= yii::$app->homeUrl ?>images/products/1.png?scale.height=400"
                                                                                            >
                                                                                            <img srcset="<?= yii::$app->homeUrl ?>images/products/1.png?scale.width=112 2x" src="<?= yii::$app->homeUrl ?>images/products/1.png?scale.width=56"/>
                                                                                        </a>-->

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="summary entry-summary">
                                        <h1 itemprop="name" class="heading_title product_title entry-title product-main-head"><?= $product_details->product_name ?></h1>

                                        <!--                                <div class="add-to-wishlist">
                                                                            <div class="add-button show" style="display:block">
                                                                                <a href="" rel="nofollow" data-product-id="113" data-product-type="external" class="add_to_wishlist">
                                                                                    Add to Wishlist</a>
                                                                                <img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                                                            </div>
                                                                        </div>-->
                                        <div class="col-xs-12 pad0">
                                            <?php $price = !empty($product_details->offer_price) ? $product_details->offer_price : $product_details->price ?>
                                            <p class="price"><b><span class="amount">AED <?= $price ?></span></b></p>
                                        </div>
                                        <div itemprop="description" class="description">
                                            <p><?= $product_details->main_description ?>.</p>
                                        </div>
                                        <div class="product_meta">

                                            <div class="posted_in">Categories: <a href="" rel="tag">Men</a>, <a href="" rel="tag">Top</a>, <a href="" rel="tag">Fragrance</a>.</div>
                                            <div class="tagged_as">Tag: <a href="" rel="tag">Dummy</a>.</div>
                                        </div>

                                        <div class="clear"></div>
                                        <div class="col-xs-6 pad0 pull-left">
                                            <?php
                                            $related_mapped = common\models\ProductMapping::find()->where(new Expression('FIND_IN_SET(:product_id, product_id)'))->addParams([':product_id' => $product_details->id])->asArray()->one();
                                            if ($related_mapped) {
                                                ?>
                                                <select class="selectpicker size product_size">
                                                    <?php
                                                    $products = explode(',', $related_mapped['product_id']);
                                                    foreach ($products as $prdct) {
                                                        $rltd = Product::findOne($prdct);
                                                        if ($rltd) {
                                                            $unit = Unit::findOne($rltd->size_unit)->unit_name;
                                                            ?>

                                                            <option value="<?= $rltd->canonical_name ?>" <?= $rltd->id == $product_details->id ? 'selected="selected"' : '' ?>><?= $rltd->size.' '.$unit ?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            <?php } ?>
                                        </div>

                                        <div class="col-xs-4 pad0 pull-right">
                                            <?= Html::a('Add to cart', '#', ['class' => 'btn shadowbtn add-cart', 'pro_id' => $product_details->canonical_name]) ?>
                                            <!--<a href="" class="btn shadowbtn">Add to cart</a>-->
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            <i class="more-less glyphicon glyphicon-plus"></i>
                                                            Discreption
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="panel-body">
                                                        <?= $product_details->product_detail ?>
                                                    </div>
                                                </div>
                                            </div>


                                        </div> 

                                    </div>
                                    <!-- .summary -->

                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

    </div>
    <div class="clearfix"></div>
    <br/>

    <div class="vc_row-full-width vc_clearfix "></div>
    <?php if($product_details->related_product){?>
    <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid padding-bottom-50 vc_row-has-fill vc_vissible ptop-50">
        <div class="container">
            <div class="row">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="gelli-headingtitle  wpb_right-to-left">
                                <div class="layout1 text-center">
                                    <h2>Related Products</h2>
                                </div>
                            </div>
                            <div class="gelli-product  show_navbt">
                                <div class="slide-product layout1" data-columns="4">
                                    <div class="beans-stepslider" data-rotate="true">
                                        <div class="beans-mask">
                                            <div class="beans-slideset">
                                                <?php
                                                $related_products = explode(',', $product_details->related_product);
                                                foreach ($related_products as $val) {
                                                    $class = '';
                                                    ?>
                                                    <?= ProductLinksWidget::widget(['id' => $val, 'div_id' => $class]) ?> 
                                                <?php } ?>


                                            </div>
                                        </div>
                                        <div class="beans-pagination ">
                                            <!-- pagination generated here -->
                                        </div>
                                        <a class="btn-prev " href="# "><i class="fa fa-angle-left "></i></a>
                                        <a class="btn-next " href="# "><i class="fa fa-angle-right "></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </section>
            </div>
        </div>
    </div>
    <?php } ?>
    <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid padding-bottom-50 vc_row-has-fill vc_vissible ptop-50">
        <div class="container">
            <div class="row">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="gelli-headingtitle  wpb_right-to-left">
                                <div class="layout1 text-center">
                                    <h2>Recently Viewed</h2>
                                </div>
                            </div>
                            <div class="gelli-product  show_navbt">
                                <div class="slide-product layout1" data-columns="4">
                                    <div class="beans-stepslider" data-rotate="true">
                                        <div class="beans-mask">
                                            <div class="beans-slideset">
                                                <?= RecentlyViewedWidget::widget(['id' => $user_id]) ?>


                                            </div>
                                        </div>
                                        <div class="beans-pagination ">
                                            <!-- pagination generated here -->
                                        </div>
                                        <a class="btn-prev " href="# "><i class="fa fa-angle-left "></i></a>
                                        <a class="btn-next " href="# "><i class="fa fa-angle-right "></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </section>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery(document).ready(function () {
        jQuery(".product_size").on("change", function () {
            var name = jQuery(this).val();
            window.location.href = homeUrl + "product-detail/" + name;
        });
    });
</script>
