<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Product;
use common\models\User;

$this->title = 'Shopping Cart';
?>
<style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                margin: 0;
        }
</style>
<!--banner-->
<section class="in-breadcrumb-section"><!--in-breadcrumb-section-->
        <div class="container">
                <div class="main-breadcrumb"><a href="index.html">Home</a><i>//</i><span>My Cart</span> </div>
        </div>
</section>
<!--in-breadcrumb-section-->

<section class="in-cart-page"><!--in-cart-page-->
        <div class="container">
                <table class="table table-mobile-view-hidden">
                        <thead>
                                <tr>
                                        <th><div class="head-text">Product</div></th>
                                        <th><div class="head-text">Price</div></th>
                                        <th><div class="head-text">QTY</div></th>
                                        <th><div class="head-text">Total</div></th>
                                        <th><div class="head-text">Remove</div></th>
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
                                                $image = '<img src="' . Yii::$app->homeUrl . 'uploads/product/' . $prod_details->id . '/profile/' . $prod_details->canonical_name . '_thumb.' . $prod_details->profile . '" alt="' . $prod_details->canonical_name . '" width="90"/>';
                                        } else {
                                                $image = '<img src="' . Yii::$app->homeUrl . 'uploads/product/profile_thumb.png" alt=""  width="90"/>';
                                        }
                                        ?>
                                        <tr>
                                                <td class="td"><div class="row">
                                                                <div class="col-sm-4">
                                                                        <a href="<?= Yii::$app->homeUrl . 'product-detail/' . $prod_details->canonical_name ?>"><?= $image ?></a>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                        <a href="<?= Yii::$app->homeUrl . 'product-detail/' . $prod_details->canonical_name ?>"><h2 class="product-head"><?= ucwords($prod_details->product_name) ?></h2> </a>
                                                                        <!--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>-->
                                                                </div>
                                                        </div></td>
                                                <td>
                                                        <span class=" price-head amount">AED <?= sprintf("%0.2f", $price) ?></span>
                                                </td>
                                                <td>
                                                        <div class="input-group number-spinner"> <span class="input-group-btn">
                                                                        <button class="btn" data-dir="dwn"><span class="fas fa-minus"></span></button>
                                                                </span>
                                                                <input type="number" min="1" max="<?= $prod_details->stock ?>" step="1" value="<?= $cart_item->quantity ?>" id="quantity_<?= yii::$app->EncryptDecrypt->Encrypt('encrypt', $cart_item->id); ?>" class="cart_quantity text-center">
                                                                <span class="input-group-btn">
                                                                        <button class="btn" data-dir="up"><span class="fas fa-plus"></span></button>
                                                                </span>
                                                        </div>
                                                        <div class="avail-qty">
                                                                <span><?= $prod_details->stock ?> available</span>
                                                        </div>
                                                </td>
                                                <td>
                                                        <?php $total = $price * $cart_item->quantity; ?>
                                                        <span class="price-head amount" id="total_<?= yii::$app->EncryptDecrypt->Encrypt('encrypt', $cart_item->id) ?>">AED <?= sprintf("%0.2f", $total) ?></span>
                                                </td>
                                                <td><a href="#" class="remove-button"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                        <?php
                                }
                                ?>
                        </tbody>
                </table>
                <div class="mobile-view-cart-section">
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
                                        $image = '<img src="' . Yii::$app->homeUrl . 'uploads/product/' . $prod_details->id . '/profile/' . $prod_details->canonical_name . '_thumb.' . $prod_details->profile . '" alt="' . $prod_details->canonical_name . '" width="90"/>';
                                } else {
                                        $image = '<img src="' . Yii::$app->homeUrl . 'uploads/product/profile_thumb.png" alt=""  width="90"/>';
                                }
                                ?>
                                <div class="close-button">
                                        <button title="Remove From Cart" class="remove-cart"><i class="fas fa-times" aria-hidden="true"></i></button>
                                        <div class="clear"></div>
                                </div>
                                <div class="row">
                                        <div class="col-4">
                                                <div class="img-box">
                                                        <a href="<?= Yii::$app->homeUrl . 'product-detail/' . $prod_details->canonical_name ?>"><?= $image ?></a>
                                                </div>
                                        </div>
                                        <div class="col-8">
                                                <a href="<?= Yii::$app->homeUrl . 'product-detail/' . $prod_details->canonical_name ?>"><h2 class="product-head"><?= ucwords($prod_details->product_name) ?> </h2></a>
                                                <!--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>-->
                                                <div class="cart-price-section">
                                                        <div class="row">
                                                                <div class="col-4">
                                                                        <h4 class="sub-head">Price:</h4>
                                                                </div>
                                                                <div class="col-8">
                                                                        <span class="sub-head2 amount">AED <?= sprintf("%0.2f", $price) ?></span>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="cart-price-section">
                                                        <h4 class="sub-head3">Quantity</h4>
                                                        <div class="input-group number-spinner"> <span class="input-group-btn">
                                                                        <button class="btn" data-dir="dwn"><span class="fas fa-minus"></span></button>
                                                                </span>
                                                                <input type="number" min="1" max="<?= $prod_details->stock ?>" step="1" value="<?= $cart_item->quantity ?>" id="quantity_<?= yii::$app->EncryptDecrypt->Encrypt('encrypt', $cart_item->id); ?>" class="cart_quantity">
                                                                <span class="input-group-btn">
                                                                        <button class="btn" data-dir="up"><span class="fas fa-plus"></span></button>
                                                                </span>
                                                        </div>
                                                        <div class="avail-qty">
                                                                <span><?= $prod_details->stock ?> available</span>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="bottom-item-total">
                                        <div class="row">
                                                <div class="col-6">
                                                        <h5 class="item-left-head">Item Total</h5>
                                                </div>
                                                <div class="col-6">
                                                        <?php $total = $price * $cart_item->quantity; ?>
                                                        <span class="amount" id="total_<?= yii::$app->EncryptDecrypt->Encrypt('encrypt', $cart_item->id) ?>"><h6 class="item-right-head">AED <?= sprintf("%0.2f", $total) ?></h6></span>
                                                </div>
                                        </div>
                                </div>
                                <?php
                        }
                        ?>
                </div>
                <div class="total-price-section">
                        <h4 class="price-head">Subtotal : AED <?= sprintf("%0.2f", $subtotal) ?></h4>
                        <p>SHIPPING, TAXES, AND DISCOUNTS WILL BE CALCULATED AT CHECKOUT.</p>
                        <div class="button-section">
                                <?php
                                if (empty(Yii::$app->user->identity)) {
                                        ?>
                                        <a href="<?= Yii::$app->homeUrl . 'site/login-signup?go=' . Yii::$app->request->hostInfo . Yii::$app->homeUrl . Yii::$app->controller->id . '/' . Yii::$app->controller->action->id ?>" class="check-utton">Login to Checkout</a>
                                <?php } else { ?>
                                        <a href="<?= Yii::$app->homeUrl . 'cart/proceed' ?>" class="check-utton">Proceed to Checkout</a>
                                <?php } ?>
                                <?= Html::a('Continue shopping', ['/site/index'], ['class' => 'check-utton']) ?>
                        </div>
                </div>
        </div>
</section>
<script>
        $(document).on('click', '.number-spinner button', function () {
                var btn = $(this),
                        oldValue = btn.closest('.number-spinner').find('input').val().trim(),
                        maxValue = btn.closest('.number-spinner').find('input').attr('max').trim(),
                        current_row_id = btn.closest('.number-spinner').find('input').attr('id').match(/\d+/),
                        newVal = 0;

                if (btn.attr('data-dir') == 'up') {
                        newVal = parseInt(oldValue) + 1;
                        if (newVal > parseInt(maxValue)) {
                                newVal = parseInt(maxValue);
                        }
                } else {
                        if (oldValue > 1) {
                                newVal = parseInt(oldValue) - 1;
                        } else {
                                newVal = 1;
                        }
                }
                btn.closest('.number-spinner').find('input').val(newVal);
                btn.closest('.number-spinner').find('input').trigger("change");
        });


</script>