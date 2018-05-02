<?php

use yii\helpers\Html;
?>
<div class="beans-slide">
    <div class="padding-15">
        <li class="post-1108 product type-product status-publish has-post-thumbnail product_cat-bracelets first instock taxable shipping-taxable purchasable product-type-simple">
            <article class="product">
                <div class="item-product">
                    <?php
                    if ($product_details->offer_price != "0" && isset($product_details->offer_price)) {
                        $percentage = round(100 - (($product_details->offer_price / $product_details->price) * 100));
                        ?>
                        <div class="off-tag"><b><?= $percentage ?>%</b><br /><span>off</span></div>
                    <?php }
                    ?>
                    <div class="social-top ">
                        <div class="btn-share ">
                            <div class="quick-view add-to " data-toggle="tooltip">
                                <?= Html::a('<i class="fa fa-eye" aria-hidden="true"></i>', ['product/product-detail', 'product' => $product_details->canonical_name], ['title' => $product_details->product_name, 'class' => '']) ?>
                            </div>
                        </div>
                        <div class="btn-share">
                            <div class="add-to-wishlist yith-wcwl-add-to-wishlist add-to-wishlist-1104">
                                <div class="yith-wcwl-add-button show" style="display:block"> <span class="ajax-loading" style="visibility:hidden"></span>
                                    <a data-toggle="tooltip" title="Buynow" href="" rel="nofollow" data-product-id="1104" data-product-type="simple" class="add_to_wishlist add-cart" pro_id="<?= $product_details->canonical_name ?>"> <i class="fa fa-cart-plus"></i></a>
                                </div>
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
                    <ul class="gp_products_caption_rating">
                        <?php
                        if ($product_details->offer_price != "0" && isset($product_details->offer_price)) {
                            $percentage = round(100 - (($product_details->offer_price / $product_details->price) * 100));
                            ?>
                            <li>AED <?= $product_details->offer_price; ?></li>
                            <li class="center">AED <?= $product_details->price; ?></li>

                            <?php
                        } else {
                            ?>
                            <li class="center">AED <?= $product_details->price; ?></li>
                            <?php } ?>
                    </ul>
                </div>
            </article>
        </li>
    </div>
</div>