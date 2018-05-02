<?php

use yii\helpers\Html;
use common\models\Product;
use common\models\Fregrance;
use common\models\OrderMaster;
use common\models\Settings;
?>
<div class="sidebar__content">
    <button class="btn btn-primary order-summery-toggle hidden-lg hidden-md" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        <i class="fa fa-cart-plus"></i>&nbsp;&nbsp;<span class="text-toggle" data-text="Hide">Show</span><span> order summery<span class="amount">$200</span>
    </button>
    <div class="order-summery-collapse collapse in" id="collapseExample">
        <div id="order-summary" class="order-summary order-summary--is-collapsed" data-order-summary="">
            <h2 class="visually-hidden">Order summary</h2>
            <div class="horizontal-line"></div>
            <div class="order-summary__sections">

                <div class="order-summary__section order-summary__section--product-list">
                    <div class="order-summary__section__content">
                        <table class="product-table">
                                <!--<caption class="visually-hidden">Shopping cart</caption>-->
                            <thead>
                                <tr>
                                    <th scope="col" class="width-25"><span class="visually-hidden">Product</span></th>
                                    <th scope="col" class="width-50"><span class="visually-hidden">Description</span></th>
                                    <th scope="col" class="width-25"><span class="visually-hidden">Price</span></th>
                                </tr>
                            </thead>
                            <tbody data-order-summary-section="line-items">

                                <?php
                                $tax_amount = 0;
                                foreach ($cart_items as $cart) {
                                    $tax = 0;
                                    ?>
                                    <?php
                                    $product = Product::findOne($cart->product_id);
                                    $product_image = Yii::$app->basePath . '/../uploads/product/' . $product->id . '/profile/' . $product->canonical_name . '.' . $product->profile;
                                    if (file_exists($product_image)) {
                                        $image = Yii::$app->homeUrl . 'uploads/product/' . $product->id . '/profile/' . $product->canonical_name . '_thumb.' . $product->profile;
                                    } else {
                                        $image = Yii::$app->homeUrl . 'uploads/product/profile_thumb.png';
                                    }
                                    if ($product->offer_price == '0' || $product->offer_price == '') {
                                        $price = $product->price;
                                    } else {
                                        $price = $product->offer_price;
                                    }
                                    $total = $price * $cart->quantity;
                                    $tax = $cart->tax;
                                    $tax_amount += $tax;
                                    ?>
                                    <tr class="product " data-product-id="8542667909" data-variant-id="35547606917" data-product-type="Sport" data-customer-ready-visible="">
                                        <td class="product__image">
                                            <div class="product-thumbnail">
                                                <div class="product-thumbnail__wrapper">
                                                    <img alt="<?= $product->product_name ?>" class="product-thumbnail__image" src="<?= $image ?>">
                                                </div>
                                            </div>

                                        </td>
                                        <td class="product__description">
                                            <span class="product__description__name order-summary__emphasis"><?= substr($product->product_name, 0, 23) ?></span><br/>
                                            <span class="product__description__variant order-summary__small-text">Quantity : <?= $cart->quantity ?></span>

                                        </td>
                                        <td class="product__price">
                                            <span class="order-summary__emphasis">AED <?= sprintf("%0.2f", $cart->rate - $tax) ?></span>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="horizontal-line"></div>
                <div class="order-summary__section order-summary__section--total-lines" data-order-summary-section="payment-lines">
                    <table class="total-line-table">
                        <tbody class="total-line-table__tbody">
                            <tr class="total-line total-line--subtotal">
                                <th class="total-line__name" scope="row">Subtotal</th>
                                <td class="total-line__price">
                                    <span class="order-summary__emphasis" data-checkout-subtotal-price-target="20000">
                                        <?= sprintf("%0.2f", $subtotal - $tax_amount) ?>
                                    </span>
                                </td>
                            </tr>

                            <tr class="total-line total-line--shipping">
                                <th class="total-line__name" scope="row">Shipping</th>
                                <td class="total-line__price">
                                    <span class="order-summary__emphasis" data-checkout-total-shipping-target="0">
                                        <?= sprintf("%0.2f", $shipping) ?>
                                    </span>
                                </td>
                            </tr>
                            <?php
                            $promotion_disvount = 0;
                            if (isset($promotions) && $promotions > 0) {
                                $promotion_disvount = $promotions;
                                ?>
                                <tr class="total-line total-line--shipping">
                                    <th class="total-line__name" scope="row">Coupon Code</th>
                                    <td class="total-line__price">
                                        <span class="order-summary__emphasis" data-checkout-total-shipping-target="0">
                                            <?= sprintf("%0.2f", $promotions) ?>
                                        </span>
                                    </td>
                                </tr>
                            <?php } ?>
                            <tr class="total-line total-line--tax">
                                <th class="total-line__name" scope="row">Tax</th>
                                <td class="total-line__price">
                                    <span class="order-summary__emphasis" data-checkout-total-shipping-target="0">

                                        <?= sprintf("%0.2f", $tax_amount) ?>
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="horizontal-line"></div>
                <div class="order-summary__section order-summary__section--total-lines" data-order-summary-section="payment-lines">
                    <table class="total-line-table">
                        <tbody class="total-line-table__tbody">
                            <tr class="total-line">
                                <th class="total-line__name payment-due-label" scope="row">
                                    <span class="payment-due-label__total">Total  ( tax incl )</span>
                                </th>
                                <td class="total-line__price payment-due">
                                    <span class="payment-due__price" data-checkout-payment-due-target="20000">
                                        AED <?= sprintf("%0.2f", $grand_total) ?>
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>