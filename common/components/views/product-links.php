<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="products-box <?= isset($class) && $class != '' ? 'blur' : '' ?>">
        <?php
        $product_image = Yii::$app->basePath . '/../uploads/product/' . $product_details->id . '/profile/' . $product_details->canonical_name . '_big.' . $product_details->profile;
        if (file_exists($product_image)) {
                $image_src = Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/profile/' . $product_details->canonical_name . '_big.' . $product_details->profile;
        } else {
                $image_src = Yii::$app->homeUrl . 'uploads/product/gallery_dummy.png';
        }
        ?>
        <div class="image-box"> <img src="<?= $image_src ?>" class="img-fluid" alt="" title="">
                <div class="add-to-cart">
                        <a href="" data-product-id="<?= $product_details->id ?>"  class="button add-cart" pro_id="<?= $product_details->canonical_name ?>">add to cart</a>
                        <!--<a href="#" class="button">add to cart</a>-->
                </div>
        </div>
        <div class="cont-box">
                <a href="<?= Url::to(['/product/product-detail', 'product' => $product_details->canonical_name]) ?>">
                        <div class="head-text">
                                <h2 class="sub-link"><?= $product_details->product_name ?> </h2>
                                <small class="small">Linea De Bella</small>
                        </div>
                </a>
                <div class="price-box">
                        <?php
                        if ($product_details->offer_price != "0" && isset($product_details->offer_price)) {
                                $percentage = round(100 - (($product_details->offer_price / $product_details->price) * 100));
                                ?>
                                <h3 class="head">AED <?= $product_details->offer_price; ?></h3>
                                <h4 class="off-price">AED <?= $product_details->price; ?></h4>
                        <?php } else { ?>
                                <h3 class="head">AED <?= $product_details->price; ?></h3>
                        <?php } ?>
                </div>
        </div>
</div>