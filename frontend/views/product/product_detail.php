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
<section class="main-breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><?= Html::a('<i class="fa fa-home"></i>', ['site/index']) ?></li>
            <li class="active"><a><?= $product_details->product_name ?></a></li>
        </ul>

    </div>
</section>
<div class="in-main-page information-contact pbtm40 black-bg">
    <div data-vc-full-width="true " data-vc-full-width-init="true " class="vc_row wpb_row vc_row-fluid  vc_custom_ vc_row-has-fill  " >
        <div class="container">
            <div class="row">
                <div id="content">
                    <div class="alert alert-success alert_<?= $product_details->canonical_name ?> hide">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <a href="<?= yii::$app->homeUrl . 'cart/mycart' ?>" class="button wc-forward">View Cart</a> “<?= $product_details->product_name ?>“ has been added to your cart.
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
                                        </a>

<?php } else { ?>
                                        <a id="Zoom-1" class="MagicZoom" title="" href="<?= Yii::$app->homeUrl . 'uploads/product/gallery_dummy.png' ?>">
                                            <img src="<?= Yii::$app->homeUrl . 'uploads/product/gallery_dummy.png' ?>?scale.height=200" alt=""/>
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
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="summary entry-summary">
                                    <h1 itemprop="name" class="heading_title product_title entry-title product-main-head"><?= $product_details->product_name ?></h1>

                                    <div class="col-xs-12 pad0">
<?php $price = !empty($product_details->offer_price) ? $product_details->offer_price : $product_details->price ?>
                                        <p class="price"><b><span class="amount">AED <?= $price ?></span></b></p>
                                    </div>
                                    <div itemprop="description" class="description">
                                        <p><?= $product_details->main_description != '' ? $product_details->main_description : '' ?></p>
                                    </div>
                                    <div class="product_meta">
                                        <?php $unit = Unit::findOne($product_details->size_unit); ?>
<?php $fregrance = \common\models\Fregrance::findOne($product_details->product_type); ?>
                                        <div class="posted_in">sizes: <a href="" rel="tag"><?= $product_details->size . $unit->unit_name ?></a></div>
                                        <div class="tagged_as">Fragrance Type: <a href="" rel="tag"><?= $fregrance->name; ?></a>.</div>
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

                                                        <option value="<?= $rltd->canonical_name ?>" <?= $rltd->id == $product_details->id ? 'selected="selected"' : '' ?>><?= $rltd->size . ' ' . $unit ?></option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
<?php } ?>
                                    </div>


                                    <div class="col-xs-4 pad0 pull-right">
                                        <?php if ($product_details->stock > 0 && $product_details->stock_availability == 1) { ?>
                                            <?= Html::a('Add to cart', '#', ['class' => 'btn shadowbtn add-cart', 'pro_id' => $product_details->canonical_name]) ?>
                                        <?php }
                                        ?>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> <i class="more-less glyphicon glyphicon-plus"></i> Description </a> </h4>
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
</div>
<section class="in-related-products">
    <?php if ($product_details->related_product) { ?>
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
                                            <a class="btn-prev " href="# "><i class="fa fa-angle-left "></i></a> <a class="btn-next " href="# "><i class="fa fa-angle-right "></i></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                        <a class="btn-prev " href="# "><i class="fa fa-angle-left "></i></a> <a class="btn-next " href="# "><i class="fa fa-angle-right "></i></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
