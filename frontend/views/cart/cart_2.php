<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Product;
use common\models\User;

$this->title = 'Shopping Cart';
?>
<!--banner-->
<section class="in-breadcrumb-section"><!--in-breadcrumb-section-->
    <div class="container">
        <div class="main-breadcrumb"><?= Html::a('<span>Home</span>', ['/site/index'], ['class' => '']) ?><i>//</i><span>My Cart</span> </div>
    </div>
</section>
<!--in-breadcrumb-section-->

<section class="in-cart-page"><!--in-cart-page-->
    <div class="container">
        <input type="hidden" id="cart_count" value="<?= count($cart_items); ?>">
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
                $i = 0;
                foreach ($cart_items as $cart_item) {
                    $i++;
                    $prod_details = Product::find()->where(['id' => $cart_item->product_id, 'status' => '1'])->one();
                    if ($prod_details->offer_price == '0' || $prod_details->offer_price == '') {
                        $price = $prod_details->price;
                    } else {
                        $price = $prod_details->offer_price;
                    }
                    $product_image = Yii::$app->basePath . '/../uploads/product/' . $prod_details->id . '/profile/' . $prod_details->canonical_name . '.' . $prod_details->profile;
                    if (file_exists($product_image)) {
                        $image = '<img src="' . Yii::$app->homeUrl . 'uploads/product/' . $prod_details->id . '/profile/' . $prod_details->canonical_name . '_thumb.' . $prod_details->profile . '" alt="' . $prod_details->canonical_name . '" class="" width="90"/>';
                    } else {
                        $image = '<img src="' . Yii::$app->homeUrl . 'uploads/product/profile_thumb.png" alt="" class="" width="90"/>';
                    }
                    ?>
                    <tr class="cart_item tr_<?= yii::$app->EncryptDecrypt->Encrypt('encrypt', $cart_item->id); ?>">
                        <td class="td">
                            <div class="row">
                                <div class="col-sm-4"> <a href="<?= Yii::$app->homeUrl . 'product-detail/' . $product_details->canonical_name ?>"><?= $image ?></a> </div>
                                <div class="col-sm-8">
                                    <a href="<?= Yii::$app->homeUrl . 'product-detail/' . $product_details->canonical_name ?>"><h2 class="product-head"><?= ucwords($prod_details->product_name) ?> </h2></a>
                                </div>
                            </div>
                        </td>
                        <td><span class="price-head amount">AED <span class="price-head" id="amount-<?= $i ?>"><?= sprintf("%0.2f", $price) ?></span></span></td>
                        <td>
                            <div class="input-group number-spinner"> <span class="input-group-btn">
                                    <button class="btn" data-dir="dwn"><span class="fas fa-minus"></span></button>
                                </span>
                                <input id="quantity-<?= $i ?>" type="text" class="form-control text-center" value="<?= $cart_item->quantity ?>" min="1" max="<?= $prod_details->stock ?>">
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
                            <span class=" price-head amount">AED <span class=" price-head amount" id="total_price-<?= $i ?>"><?= sprintf("%0.2f", $total) ?></span></span>
                        </td>
                        <td>
                            <a class="remove-button remove_cart" title="Remove this item" data-product_id="<?= yii::$app->EncryptDecrypt->Encrypt('encrypt', $cart_item->id); ?>"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
        <div class="mobile-view-cart-section">
            <?php
            $k = 0;
            foreach ($cart_items as $cart_item) {
                $k++;
                $prod_details = Product::find()->where(['id' => $cart_item->product_id, 'status' => '1'])->one();
                if ($prod_details->offer_price == '0' || $prod_details->offer_price == '') {
                    $price = $prod_details->price;
                } else {
                    $price = $prod_details->offer_price;
                }
                $product_image = Yii::$app->basePath . '/../uploads/product/' . $prod_details->id . '/profile/' . $prod_details->canonical_name . '.' . $prod_details->profile;
                if (file_exists($product_image)) {
                    $image = '<img src="' . Yii::$app->homeUrl . 'uploads/product/' . $prod_details->id . '/profile/' . $prod_details->canonical_name . '_thumb.' . $prod_details->profile . '" alt="' . $prod_details->canonical_name . '" class="attachment-shop_thumbnail wp-post-image"/>';
                } else {
                    $image = '<img src="' . Yii::$app->homeUrl . 'uploads/product/profile_thumb.png" alt="" class="attachment-shop_thumbnail wp-post-image"/>';
                }
                ?>
                <div class="close-button">
                    <a class="remove_cart" title="Remove this item" data-product_id="<?= yii::$app->EncryptDecrypt->Encrypt('encrypt', $cart_item->id); ?>"><i class="fas fa-times" aria-hidden="true"></i></a>
                    <div class="clear"></div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="img-box"><a href="<?= Yii::$app->homeUrl . 'product-detail/' . $product_details->canonical_name ?>"><?= $image ?></a></div>
                    </div>
                    <div class="col-8">
                        <h2 class="product-head"><a href="<?= Yii::$app->homeUrl . 'product-detail/' . $product_details->canonical_name ?>"><?= ucwords($prod_details->product_name) ?> </a></h2>
                        <!--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>-->
                        <div class="cart-price-section">
                            <div class="row">
                                <div class="col-4">
                                    <h4 class="sub-head">Price:</h4>
                                </div>
                                <div class="col-8">
                                    <h4 class="sub-head2">AED <span class="sub-head2" id="amount-<?= $k ?>"><?= sprintf("%0.2f", $price) ?></span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="cart-price-section">
                            <h4 class="sub-head3">Quantity</h4>
                            <div class="input-group number-spinner"> <span class="input-group-btn">
                                    <button class="btn" data-dir="dwn"><span class="fas fa-minus"></span></button>
                                </span>
                                <input id="quantity-<?= $k ?>" type="text" class="form-control text-center" value="<?= $cart_item->quantity ?>" min="1" max="<?= $prod_details->stock ?>">
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
                            <h6 class="item-right-head">AED <span class="item-right-head" id="total_price-<?= $k ?>"><?= sprintf("%0.2f", $total) ?></span></h6>
                        </div>
                    </div>
                </div>
            <?php }
            ?>
        </div>
        <div class="total-price-section">
            <h4 class="price-head">Subtotal:AED 200</h4>
            <p>SHIPPING, TAXES, AND DISCOUNTS WILL BE CALCULATED AT CHECKOUT.</p>
            <div class="button-section"> <a href="#" class="check-utton">check out</a> <a href="#" class="check-utton">Continue shopping</a> </div>
        </div>
    </div>
</section>
<!--in-cart-page-->
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
        calculateTotal(current_row_id);
    });
    function calculateTotal(current_row_id) {
        var qty = $('#quantity-' + current_row_id).val();
        var rate = $('#amount-' + current_row_id).text();
        alert(qty);
        alert(rate);
        if (qty != "" && rate != '') {
            var grand_total = parseFloat(qty) * parseFloat(rate);
            alert(grand_total);
            $('#total_price-' + current_row_id).text(grand_total.toFixed(2));
        }
    }

</script>