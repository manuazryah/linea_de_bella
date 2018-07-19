<?php

use yii\helpers\Html;
use common\models\Cart;
use common\models\Product;
use common\models\Unit;
if (!empty($cart_contents)) {
    $cart_total = Cart::total($cart_contents);
    ?>
    <ul class="dropdown-menu  animated2 fadeInUp">
        <?php
        $content = '';
        $i = 0;
        foreach ($cart_contents as $cart_content) {
            $i++;
            $prod_details = Product::find()->where(['id' => $cart_content->product_id, 'status' => '1'])->one();
            $unit = Unit::findOne($prod_details->size_unit)->unit_name;
            if ($prod_details->offer_price == '0' || $prod_details->offer_price == '') {
                $price = $prod_details->price;
            } else {
                $price = $prod_details->offer_price;
            }
            $product_image = Yii::$app->basePath . '/../uploads/product/' . $prod_details->id . '/profile/' . $prod_details->canonical_name . '.' . $prod_details->profile;
            if (file_exists($product_image)) {
                $image = '<img class="product-image img-responsive" src="' . yii::$app->homeUrl . 'uploads/product/' . $prod_details->id . '/profile/' . $prod_details->canonical_name . '_thumb.' . $prod_details->profile . '" alt="" title="" width="100" height="100">';
//                $image = '<img src="' . Yii::$app->homeUrl . 'uploads/product/' . $prod_details->id . '/profile/' . $prod_details->canonical_name . '_thumb.' . $prod_details->profile . '" alt="' . $prod_details->canonical_name . '" />';
            } else {
                $image = '<img src="' . Yii::$app->homeUrl . 'uploads/product/profile_thumb.png" alt=""/>';
            }
            $product_name = $prod_details->product_name;
            if (strlen($product_name) > 25) {
                $str = substr($product_name, 0, 25) . '...';
            } else {
                $str = $product_name;
            }
            ?>
            <li>
                <div class="cart-box">
                    <div class="row">
                        <div class="col-4">
                            <div class="img-box">
                                <?= Html::a($image, ['product/product-detail', 'product' => $prod_details->canonical_name], ['title' => $product_name]) ?>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="cont-box">
                                <h4 class="head">
                                    <?= Html::a($str, ['product/product-detail', 'product' => $prod_details->canonical_name], ['title' => $product_name, 'class' => '']) ?>
                                </h4>
                                <h5 class="price">AED <?= sprintf("%0.2f", $price) ?></h5>
                                <h6 class="Quantity">Size: <?= $prod_details->size ?> <?= $unit ?></h6>
                                <a class="remove-from-cart remove_cart_product close" rel="nofollow" href="" data-product_id="<?= yii::$app->EncryptDecrypt->Encrypt('encrypt', $cart_content->id) ?>" data-link-action="remove-from-cart" title="Remove from cart">
                                    <i class="far fa-times-circle"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <?php
        }
        ?>
        <li>
            <?= Html::a('check out', ['cart/proceed'], ['class' => 'check-out']) ?>
        </li>
    </ul>   
    <?php
}
?>