<?php

use yii\helpers\Html;
?>
<div class="beans-slide">
    <div class="padding-15">
        <li class="post-1108 product type-product status-publish has-post-thumbnail product_cat-bracelets first instock taxable shipping-taxable purchasable product-type-simple">
            <article class="product">
                <div class="item-product">
                    <div class="social-top ">
                        <div class="btn-share ">
                            <div class="quick-view add-to " data-toggle="tooltip"><a onclick="" href="#" class="yith-wcqv-button" data-product_id="1104" title="Quick View"><i class="fa fa-eye" aria-hidden="true"></i></a> </div>
                        </div>
                        <div class="btn-share">
                            <div class="add-to-wishlist yith-wcwl-add-to-wishlist add-to-wishlist-1104">
                                <div class="yith-wcwl-add-button show" style="display:block"> <span class="ajax-loading" style="visibility:hidden"></span> <a data-toggle="tooltip" title="Buynow" href="" rel="nofollow" data-product-id="1104" data-product-type="simple" class="add_to_wishlist"> <i class="fa fa-cart-plus"></i> </a> </div>
                                <div style="clear:both"></div>
                                <div class="yith-wcwl-wishlistaddresponse"></div>
                            </div>
                        </div>
                    </div>
                    <div class="product-img ">
                        <?php
                        $product_image = Yii::$app->basePath . '/../uploads/product/' . $product_details->id . '/profile/' . $product_details->canonical_name . '.' . $product_details->profile;
                        if (file_exists($product_image)) {
                            $image_src = Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/profile/' . $product_details->canonical_name . '.' . $product_details->profile;
                        } else {
                            $image_src = Yii::$app->homeUrl . 'uploads/product/gallery_dummy.png';
                        }
                        ?>
                        <?= Html::a('<img  src="' . $image_src . '" alt="' . $product_details->canonical_name . '" />', ['product/product-detail', 'product' => $product_details->canonical_name], ['title' => $product_details->product_name]) ?>
                    </div>
                    <h2>
                        <?= Html::a(strlen($product_details->product_name) > 22 ? substr(strtoupper($product_details->product_name), 0, 22) . ".." : strtoupper($product_details->product_name), ['product/product-detail', 'product' => $product_details->canonical_name], ['title' => $product_details->product_name]) ?>
                    </h2>
                    <?php $fragrance = \common\models\Fregrance::findOne($product_details->product_type)->name ?>
                    <p><?= $fragrance ?></p>
                </div>
            </article>
        </li>
    </div>
</div>