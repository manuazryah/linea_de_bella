<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Product;
use common\models\User;

$this->title = 'Shopping Cart';
?>
<div id="wpo-mainbody" class="container wpo-mainbody">
        <nav class="woocommerce-breadcrumb" itemprop="breadcrumb"><a class="home" href="index.php">Home</a>&nbsp;/&nbsp;Cart</nav>

        <div class="row">
                <!-- MAIN CONTENT -->
                <div id="wpo-content" class="wpo-content col-xs-12 no-sidebar">
                        <article id="post-8" class="post-8 page type-page status-publish hentry">
                                <div class="content">
                                        <div class="woocommerce">
                                                <form action="" method="post">

                                                        <input type="hidden" id="cart_count" value="<?= count($cart_items); ?>">
                                                        <table class="shop_table cart" cellspacing="0">
                                                                <thead>
                                                                        <tr>
                                                                                <th class="product-thumbnail">&nbsp;</th>
                                                                                <th class="product-name">Product</th>
                                                                                <th class="product-price">Price</th>
                                                                                <th class="product-quantity">Quantity</th>
                                                                                <!--<th class="product-quantity"></th>-->
                                                                                <th class="product-subtotal">Total</th>
                                                                                <th class="product-remove">&nbsp;</th>
                                                                                
                                                                        </tr>
                                                                </thead>
                                                                <tbody>
                                                                        <?php
                                                                        foreach ($cart_items as $cart_item) {
                                                                                $prod_details = Product::find()->where(['id' => $cart_item->product_id, 'status' => '1'])->one();
                                                                                if ($prod_details->offer_price == '0' || $prod_details->offer_price == '') {
                                                                                        $price = $prod_details->price;
                                                                                } else {
                                                                                        $price = $prod_details->offer_price;
                                                                                }
                                                                                $product_image = Yii::$app->basePath . '/../uploads/product/' . $prod_details->id . '/profile/' . $prod_details->canonical_name . '.' . $prod_details->profile;
                                                                                if (file_exists($product_image)) {
                                                                                        $image = '<img src="' . Yii::$app->homeUrl . 'uploads/product/' . $prod_details->id . '/profile/' . $prod_details->canonical_name . '_thumb.' . $prod_details->profile . '" alt="' . $prod_details->canonical_name . '" />';
                                                                                } else {
                                                                                        $image = '<img src="' . Yii::$app->homeUrl . 'uploads/product/profile_thumb.png" alt=""/>';
                                                                                }
                                                                                ?>
                                                                                <tr class="cart_item tr_<?= yii::$app->EncryptDecrypt->Encrypt('encrypt', $cart_item->id); ?>">

                                                                                        
                                                                                        <td class="product-thumbnail">
                                                                                                <a href=""><?= $image ?></a> </td>

                                                                                        <td class="product-name">
                                                                                                <a href=""><?= $prod_details->product_name ?></a> </td>

                                                                                        <td class="product-price">
                                                                                                <span class="amount">AED <?= sprintf("%0.2f", $price) ?></span> </td>

                                                                                        <td class="product-quantity">
                                                                                                <div class="quantity-adder">
                                                                                                        <div class="quantity buttons_added"><input type="button" value="-" class="minus">
                                                                                                                <input type="number" step="1" min="1" max="<?= $prod_details->stock ?>"name="cart[qty]" value="<?= $cart_item->quantity ?>" title="Qty" class="input-text qty cart_quantity text" size="4" id="quantity_<?= yii::$app->EncryptDecrypt->Encrypt('encrypt', $cart_item->id); ?>">
                                                                                                                <input type="button" value="+" class="plus">
                                                                                                        </div>
                                                                                                    <label><?= $prod_details->stock?> available</label>
                                                                                                   
                                                                                                </div>
                                                                                            
                                                                                        </td>
<!--                                                                                        <td class="product-quantity">
                                                                                            <span><?= $prod_details->stock?> available</span>
                                                                                        </td>-->

                                                                                        <td class="product-subtotal">
                                                                                                <?php $total = $price * $cart_item->quantity; ?>
                                                                                                <span class="amount" id="total_<?= yii::$app->EncryptDecrypt->Encrypt('encrypt', $cart_item->id) ?>">AED <?= sprintf("%0.2f", $total) ?></span> </td>
                                                                                        <td class="product-remove">
                                                                                                <a class="remove remove_cart" title="Remove this item" data-product_id="<?= yii::$app->EncryptDecrypt->Encrypt('encrypt', $cart_item->id); ?>">×</a> </td>
                                                                                </tr>
                                                                        <?php } ?>
                                                                        <tr>
                                                                                <td colspan="6" class="actions">

                                                                                        <div class="coupon">

                                                                                                <label for="coupon_code">Coupon:</label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code"> <input type="submit" class="btn btn-default apply-coupen" name="apply_coupon"
                                                                                                                                                                                                        value="Apply Coupon">

                                                                                        </div>

                                                                                        <!--<? Html::a('Update Cart', ['/site/index'], ['class' => 'btn btn-default update-cart']); ?>-->
                                                                                        <p id="coupon-code-error" style="text-align:left;margin-top:5px;"></p>

                                                                                        <input type="hidden" id="_wpnonce" name="_wpnonce" value="e5604b90fe"><input type="hidden" name="_wp_http_referer" value=""> </td>
                                                                <input type="hidden" id="promotion-codes" name="promotion_codes" value="">
                                                                <input type="hidden" id="promotion-code-amount" name="promotion-code-amount" value="">

                                                                </tr>

                                                                </tbody>
                                                        </table>


                                                </form>

                                                <div class="cart-collaterals">
                                                        <div class="promtions" style="float:left">
                                                                <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12" id="promotions-listing">
                                                                        </div>
                                                                </div>

                                                        </div>


                                                        <div class="cart_totals ">


                                                                <div class="box-heading"><span>Cart Totals</span></div>

                                                                <table cellspacing="0" class="table-cart">

                                                                        <tbody>
                                                                                <tr class="cart-subtotal">
                                                                                        <th>Subtotal</th>
                                                                                        <td><span class="amount cart_subtotal">AED <?= sprintf("%0.2f", $subtotal) ?></span></td>
                                                                                </tr>




                                                                                <tr class="shipping">
                                                                                        <th>Shipping</th>
                                                                                        <td>


                                                                                                <ul id="shipping_method">
                                                                                                        <?php
                                                                                                        if ($shipping == '0') {
                                                                                                                $free = '';
                                                                                                                $charge = 'hide';
                                                                                                        } else {
                                                                                                                $charge = '';
                                                                                                                $free = 'hide';
                                                                                                        }
                                                                                                        ?>
                                                                                                        <li class="free_shipping <?= $free ?>">
                                                                                                                <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_free_shipping" value="free_shipping"  class="shipping_method" checked="checked" disabled="disabled">
                                                                                                                <label for="shipping_method_0_free_shipping">Free Shipping</label>
                                                                                                        </li>
                                                                                                        <?php // } else {   ?>
                                                                                                        <li class="shipping_ <?= $charge ?>">
                                                                                                                <!--<input type="radio" name="shipping_method_[0]" data-index="0" id="shipping_method_0_international_delivery" value="international_delivery" class="shipping_method" checked="checked" disabled="disabled">-->
                                                                                                                <label for="shipping_method_0_international_delivery"> <span class="amount shipping-cost">AED <?= sprintf("%0.2f", $ship_charge) ?></span></label>
                                                                                                        </li>
                                                                                                        <?php // }   ?>
                                                                                                </ul>

                                                                                        </td>
                                                                                </tr>

                                                                                <tr class="cart-promotion" style="display: none">
                                                                                        <th>Coupon Code</th>
                                                                                        <td data-title="Subtotal" style="border-top:none"><span class="woocommerce-Price-amount amount"><span class=""> AED </span><spn class="promotion_discount"></spn></span></td>
                                                                                </tr>







                                                                                <tr class="order-total">
                                                                                        <th>Total</th>
                                                                                        <td><strong><span class="amount grand_total">AED <?= sprintf("%0.2f", $grand_total) ?></span></strong> </td>
                                                                                </tr>


                                                                        </tbody>
                                                                </table>


                                                                <div class="wc-proceed-to-checkout">
                                                                        <?php if (empty(Yii::$app->user->identity)) { ?>
                                                                                <a href="javascript:void(0)" class="checkout-button button alt wc-forward loginCheckout" id="loginCheckout">Login to Checkout</a>
                                                                        <?php } else { ?>
                                                                                <a href="<?= Yii::$app->homeUrl . 'cart/proceed' ?>" class="checkout-button button alt wc-forward">Proceed to Checkout</a>
                                                                        <?php } ?>
                                                                </div>


                                                        </div>
                                                </div>

                                        </div>
                                </div>
                                <!-- .entry-content -->
                        </article>
                        <!-- #post -->
                </div>
                <!-- //MAIN CONTENT -->

        </div>
</div>
<script>
//    var modal = document.getElementById('myModal');
//    var btn = document.getElementById("loginCheckout");
//    var span = document.getElementsByClassName("close")[0];
//    btn.onclick = function () {
//        console.log('adas');
//        modal.style.display = "block";
//    }
//    span.onclick = function () {
//        modal.style.display = "none";
//    }
//    window.onclick = function (event) {
//        if (event.target == modal) {
//            modal.style.display = "none";
//        }
//    }
</script>