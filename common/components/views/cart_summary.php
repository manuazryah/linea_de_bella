<?php

use yii\helpers\Html;
use common\models\Product;
use common\models\Fregrance;
use common\models\OrderMaster;
use common\models\Settings;
?>
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
    <div class="list-product">
        <div class="row">
            <div class="col-sm-3 col-3">
                <div alt="<?= $product->product_name ?>" class="img-box"><img src="<?= $image ?>" width="60"></div>
            </div>
            <div class="col-sm-9 col-9">
                <div class="main-poduct-head-box">
                    <h2 class="product-head"><?= substr($product->product_name, 0, 23) ?></h2>
                    <h3 class="price-head">AED <?= sprintf("%0.2f", $cart->rate - $tax) ?></h3>
                    <h4 class="quantity">Quantity : <?= $cart->quantity ?></h4>

                </div>

            </div>
        </div>
    </div>
<?php } ?>
<div class="all-price-box">
    <ul>
        <li>Subtotal</li>
        <li><span>AED <?= sprintf("%0.2f", $subtotal - $tax_amount) ?></span></li>
        <li>Shipping</li>
        <li><span>AED <?= sprintf("%0.2f", $shipping) ?></span></li>
        <li>TAX</li>
        <li><span>AED <?= sprintf("%0.2f", $tax_amount) ?></span></li>
    </ul>
    <div class="clear"></div>
    <div class="total-price-box">
        <ul>
            <li>Total (tax incl)</li>
            <li><b>AED <?= sprintf("%0.2f", $grand_total) ?></b></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>