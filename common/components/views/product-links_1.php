<?php

use yii\helpers\Html;
use common\models\Fregrance;

if ($class == 1)
    $class = 'first';
else if ($class = 0)
    $class = 'last';
else
    $class = '';
?>
<div class="shopcol col-lg-3 col-md-4 col-sm-6 col-xs-12 post-111 product type-product status-publish has-post-thumbnail product_cat-men product_cat-shirt product_cat-top featured shipping-taxable product-type-external product-cat-men product-cat-shirt product-cat-top instock <?= $class ?>">
    <div class="product-block product product-grid">
        <?php
        if ($model->offer_price != "0" && isset($model->offer_price)) {
            $percentage = round(100 - (($model->offer_price / $model->price) * 100));
            $main_price = $model->offer_price;
            $price = 'AED '.$model->price;
            ?>
            <!--<div class="product-off"><b><? $percentage ?>%</b><br />off</div>-->
        <?php
        } else {
           $main_price = $model->price;
            $price = ''; 
        }
        ?>
        <div class="product-inner gp_products_inner" id="<?= $div_id ?>">
            <div class="cartlist-popup alert-success alert_<?= $model->canonical_name ?> hide">
                <i class="fa fa-check" aria-hidden="true"></i>Successfully added to cart.
            </div>
            <div class="image">


                <a href="<?= Yii::$app->homeUrl . 'product-detail/' . $model->canonical_name ?>">

                    <?php
                    $product_image = Yii::$app->basePath . '/../uploads/product/' . $model->id . '/profile/' . $model->canonical_name . '.' . $model->profile;
                    $gallery_image = Yii::$app->basePath . '/../uploads/product/' . $model->id . '/gallery_thumb/' . $model->canonical_name . '.' . $model->profile;
                    if (file_exists($product_image)) {
                        ?>
                        <?php if (file_exists($gallery_image)) { ?>
                            <img src="<?= Yii::$app->homeUrl . 'uploads/product/' . $model->id . '/gallery_thumb/' . $model->canonical_name . '.' . $model->profile ?>" class="attachment-shop_catalog image-hover img-responsive" style="height: 100%" alt="product18" />
                        <?php } else { ?>
                            <img src="<?= Yii::$app->homeUrl . 'uploads/product/' . $model->id . '/profile/' . $model->canonical_name . '.' . $model->profile ?>" class="attachment-shop_catalog image-hover img-responsive" style="height: 100%" alt="product18" />
                        <?php } ?>
                        <img src="<?= Yii::$app->homeUrl . 'uploads/product/' . $model->id . '/profile/' . $model->canonical_name . '.' . $model->profile ?>" class="image-effect wp-post-image img-responsive" alt="product16" />
<?php } else { ?>
                        <img src="<?= Yii::$app->homeUrl . 'uploads/product/gallery_dummy.png' ?>" class="attachment-shop_catalog image-hover" alt="product18" />
                        <img src="<?= Yii::$app->homeUrl . 'uploads/product/gallery_dummy.png' ?>" class="image-effect wp-post-image" alt="product16" />
<?php } ?>
                </a>

            </div>

            <div class="product-meta">
                <div class="warp-info">
<?php if ($model->stock_availability != 1 || $model->stock < 1) { ?>
                        <div class="outofstock">
                            <p>OUT OF STOCk</p>
                        </div>
<?php } ?>
                    <h3 class="name">
                        <a href="<?= Yii::$app->homeUrl . 'product-detail/' . $model->canonical_name ?>" title="<?= $model->product_name ?>"><?= strlen($model->product_name) > 43 ? substr(strtoupper($model->product_name), 0, 43) . ".." : strtoupper($model->product_name) ?></a>
                    </h3>

                    <span class="price"><span class="amount">AED <?= $main_price; ?></span>
                        <?php if ($model->offer_price != "0" && isset($model->offer_price)) {?><label class="product_percentage"><?= $percentage?>% OFF</label><?php }?>
                        <br /><small><?= $price?></small></span>

                    <!--quickview-->
                    <div class="product-action">
                        <div class="add-to-cart">
                            <!--                                                <a href="" rel="nofollow" data-product_id="112" data-product_sku="" data-quantity="1" class="btn-cart button add_to_cart_button product_type_simple">
                                                                                <i class="fa-fw fa fa-shopping-cart"></i>Add to cart</a>-->
                            <?php if ($model->stock > 0) { ?>
                                <?= Html::a('<i class="fa-fw fa fa-shopping-cart"></i>Add to cart', 'javascript:void(0)', ['class' => 'btn-cart button add_to_cart_button product_type_simple add-cart', 'id' => $model->canonical_name]) ?>
                                <?php
                            } else {
                                echo '<span class="btn-cart button">Out of Stock</span>';
                            }
                            ?>
                        </div>
                        <div class="wishlist-compare">
                            <?php if (empty(Yii::$app->user->identity)) { ?>
                                <a class="wishlist fa fa-heart call-popup popup1 loginCheckout" id="loginCheckout" title="Add to Wish List"><span>Add to Wish List</span></a>
                            <?php } else {
                                ?>
                                <a class="wishlist fa fa-heart add_to_wish_list" id='<?= $model->canonical_name ?>' title="Add to Wish List"><span>Add to Wish List</span></a>
<?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


</div>