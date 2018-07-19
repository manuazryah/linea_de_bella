<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use common\models\OrderDetails;
use common\models\Product;
use common\models\Fregrance;
use common\models\Settings;
use common\models\UserAddress;
use common\models\Emirates;

$order_products = OrderDetails::find()->where(['order_id' => $model->order_id])->all();
?>
<div class="orders-main-box">
    <div class="orders-top-head">
        <ul>
            <li><div class="cont-div"><span class="span">Ordered on </span><?= date('D, M dS y', strtotime($model->order_date)) ?></div></li>
            <li><div class="price-div"><span class="span">Order Total:</span> <b>AED <?= sprintf('%0.2f', $model->net_amount) ?></b></div></li>
            <li><div class="product-id"><?= $model->order_id ?></div></li>
        </ul>
        <div class="clear"></div>
    </div>
    <?php
    foreach ($order_products as $order_product) {
        if ($order_product->item_type == 1) {
            $product_detail = \common\models\CreateYourOwn::findOne($order_product->product_id);
            $bottles = common\models\Bottle::findOne($product_detail->bottle);
            $product_image = Yii::$app->basePath . '/../uploads/create_your_own/bottle/' . $bottles->id . '/small.' . $bottles->bottle_img;
            if (file_exists($product_image)) {
                $image = Yii::$app->homeUrl . 'uploads/create_your_own/bottle/' . $bottles->id . '/small.' . $bottles->bottle_img;
            }
        } else {
            $product_detail = Product::find()->where(['id' => $order_product->product_id])->one();
            $product_image = Yii::$app->basePath . '/../uploads/product/' . $product_detail->id . '/profile/' . $product_detail->canonical_name . '.' . $product_detail->profile;
            if (file_exists($product_image)) {
                $image = Yii::$app->homeUrl . 'uploads/product/' . $product_detail->id . '/profile/' . $product_detail->canonical_name . '_thumb.' . $product_detail->profile;
            } else {
                $image = Yii::$app->homeUrl . 'uploads/product/profile_thumb.png';
            }
        }
        ?>
        <div class="cont-product-box">
            <div class="row">
                <div class="col-sm-2 col-3">
                    <div class="img-box"><img src="<?= $image ?>" width="85" ></div>
                </div>
                <div class="col-sm-10 col-9">
                    <div class="main-poduct-head-box">
                        <div class="row">
                            <div class="col-sm-6">
                                <?php $name = $order_product->item_type == 1 ? 'Custom Perfume' : $product_detail->product_name; ?>
                                 <?= Html::a('<h2 class="product-head">'.$name.'</h2>', $order_product->item_type == 1 ? ['#'] : ['/product-detail/' . $product_detail->canonical_name], ['target' => '_blank']) ?>
                            </div>
                            <?php
                            if ($order_product->item_type == 1) {
                                $price = \common\models\CreateYourOwn::findOne($order_product->product_id)->tot_amount;
                            } else {
                                if ($product_detail->offer_price == '0' || $product_detail->offer_price == '') {
                                    $price = $product_detail->price;
                                } else {
                                    $price = $product_detail->offer_price;
                                }
                            }
                            ?>
                            <div class="col-sm-3"><h3 class="price-head">AED <?= $price; ?></h3></div>
                            <div class="col-sm-3"><h4 class="quantity">Quantity : <?= $order_product->quantity; ?></h4></div>
                            <?php if ($order_product->status == 1) { ?>
                                <div class="col-sm-12 delivered-date">Delivered on <?= date('D, M dS y', strtotime($order_product->delivered_date)) ?>
                                    <span>Your item has been delivered</span>
                                </div>
                            <?php } else { ?>
                                <div class="col-sm-12 delivered-date" style="min-width: 300px;
                                     max-width: 300px;">
                                    <span></span>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php
    }
    ?>
    <?php
    $shipping_limit = Settings::findOne('1')->value;
    $shipextra = Settings::findOne('2')->value;
    $ship_charge = $model->shipping_charge;
    ?>
    <div class="shipping-charge">Shipping Charge: AED <?= $model->shipping_charge ?></div>
    <div class="continue-button-box">
        <?php if ($model->payment_status != '1' && $model->payment_status != '3') { ?>
            <?= Html::a('Continue', ['/checkout/continue', 'id' => yii::$app->EncryptDecrypt->Encrypt('encrypt', $model->order_id)], ['class' => 'button'])
            ?>
        <?php } ?>
        <?php if ($model->status != 5) { ?>
            <?= Html::a('Cancel', ['/myaccounts/my-orders/cancel-order', 'id' => yii::$app->EncryptDecrypt->Encrypt('encrypt', $model->order_id)], ['class' => 'button', 'onclick' => "return confirm('Are you sure want to cancel the Order?');"]) ?>
        <?php } ?> 
        <div class="clear"></div>
    </div>
</div>

