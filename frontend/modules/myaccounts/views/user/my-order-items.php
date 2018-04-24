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
                    <li class="header-title">order placed</li>
                    <li>29 January 2017</li>
                </ul>
            </div>
            <div class="col-xs-2">
                <ul>
                    <li class="header-title">total</li>
                    <li>$110.00</li>
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
                    <li class="header-title">order<span>#406-6879246-0697169</span></li>
                    <li><a href="">Order Details</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="box-content">
        <div class="col-xs-12">
            <h3 class="title2">Delivered 31-Jan-2018</h3>
            <p>Package was handed directly to the customer.</p>
        </div>
        <div class="col-xs-12">
            <div class="col-xs-2"><img class="img-responsive" src="images/products/1.jpg" width="80" height="80"></div>
            <div class="col-xs-7">
                <h6 class="product-title">AKANTHOS</h6>
                <p style="margin-bottom: 0px;">Sold by: Linea De Bella</p>
                <h2 class="price">
                    <span class="price-new">$110.00</span>
                </h2>
            </div>
            <div class="col-xs-3">
                <a href="" class="btn shadowbtn">Buy it again</a>
                <a href="" class="btn shadowbtn">Leave seller feedback</a>
            </div>
        </div>
    </div>
</div>

