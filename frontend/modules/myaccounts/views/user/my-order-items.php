<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use common\models\OrderDetails;
use common\models\Product;
use common\models\Fregrance;
use common\models\Settings;

$order_products = OrderDetails::find()->where(['order_id' => $model->order_id])->all();
?>
<div class="order-box wishlist-box">
    <div class="box-header">
        <div class="col-lg-12">
            <div class="col-xs-2">
                <ul>
                    <li class="header-title">Ordered on</li>
                    <li><?= date('D, M dS y', strtotime($model->order_date)) ?></li>
                </ul>
            </div>
            <div class="col-xs-2">
                <ul>
                    <li class="header-title">total</li>
                    <li>AED <?= sprintf('%0.2f', $model->net_amount) ?></li>
                </ul>
            </div>
            <div class="col-xs-3">
                <ul>
                    <li class="header-title">ship to</li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Customer Name  <b class="fa fa-angle-down"></b></a>
                        <ul class="dropdown-menu">
                            <address>Company name<br>First name Last name<br>House number<br>Apartment<br>Somewhere - 682703<br>Kerala, India</address>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-xs-3 pull-right">
                <ul>
                    <li class="header-title">Order ID  : <span><?= $model->order_id ?></span></li>
                    <li><a href=""></a></li>
                </ul>
            </div>
        </div>
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
        <div class="box-content">
            <div class="col-xs-12">
                <div class="col-xs-2">
                    <img class="img-responsive" src="<?= $image ?>" width="80" alt="1" height="80"/>
                </div>
                <div class="col-xs-6">
                    <?php $name = $order_product->item_type == 1 ? 'Custom Perfume' : $product_detail->product_name; ?>
                    <?= Html::a('<h6 class="product-title">' . $name . '</h6>', $order_product->item_type == 1 ? ['#'] : ['/product-detail/' . $product_detail->canonical_name], ['target' => '_blank']) ?>
                    <?php
                    $label1 = '';
                    $label2 = '';
                    if (isset($product->label_1)) {
                        $label1 = $product->label_1;
                    }
                    if (isset($product->label_2)) {
                        $label2 = $product->label_2;
                    }
                    ?>
                    <?php
                    $fregrance = $order_product->item_type == 1 ? $label1 . ' , ' . $label2 : Fregrance::findOne($product_detail->product_type)->name;
                    ?>
                    <?= Html::a('<p style="margin-bottom: 0px;">' . $fregrance . '</p>', $order_product->item_type == 1 ? ['#'] : ['/product-detail/' . $product_detail->canonical_name], ['target' => '_blank']) ?>
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
                <div class="col-xs-2">
                    <h2 class="price"><span class="price-new">AED <?= $price; ?></span></h2>
                </div>
                <div class="col-xs-2">
                    <h2 class="price"><span class="price-new">Quantity : <?= $order_product->quantity; ?></span></h2>
                </div>
                <?php
                if ($order_product->item_type != '1' && $model->payment_status != '1') {
                    if ($product_detail->stock_availability == '1') {
                        if ($product_detail->stock < $order_product->quantity) {
                            ?>
                            <div class = "col-lg-2 col-md-2 col-sm-2 col-xs-2 price" style="color: red"><?= $product_detail->stock != 0 ? $product_detail->stock . ' Available' : 'Out Of Stock' ?></div>
                            <?php
                        }
                    } else {
                        ?>
                        <div class = "col-lg-2 col-md-2 col-sm-2 col-xs-2 price" style="color: red">Out Of Stock</div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
        <?php
    }
    ?>
    <div>
        <?php
        $promotions = \common\models\OrderPromotions::find()->where(['order_master_id' => $model->id])->sum('promotion_discount');
        if (isset($promotions) && $promotions > 0) {
            ?>

            <div class="col-xs-2"></div>
            <div class="col-xs-6">Promotion Code Added</div>

            <div class="col-xs-2">AED  <?= $promotions; ?></div>
            <div class="col-xs-2"></div>
        <?php } ?>
    </div>
    <div style="clear:both"></div>
    <div>
        <?php
        $shipping_limit = Settings::findOne('1')->value;
        $shipextra = Settings::findOne('2')->value;
        $ship_charge = $model->shipping_charge;
        ?>

        <div class="col-xs-2"></div>
        <div class="col-xs-6 ship-charge"><p>Shipping Charge</p></div>
        <div class="col-xs-2 ship-charge">AED  <?= $model->shipping_charge ?></div>
        <div class="col-xs-2"></div>

    </div>
    <div style="clear:both"></div>
    <div class="horizontal-line"></div>
    <div class="box-footer">
        <div class="col-xs-12">
            <?php if ($model->payment_status != 1) { ?>
                <?= Html::a('Continue', ['/checkout/continue', 'id' => $model->order_id], ['class' => 'btn shadowbtn bt-right'])
                ?>
            <?php } ?>
            <?= Html::a('Cancel', ['/myaccounts/user/cancel-order', 'id' => $model->order_id], ['class' => 'btn shadowbtn bt-right']) ?>
        </div>
    </div>
</div>

