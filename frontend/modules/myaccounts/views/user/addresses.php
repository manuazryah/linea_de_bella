<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<div class="information-contact pbtm40">
    <div class="content_breadcum" style="background-position: 50% 0px;"></div>
    <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid  vc_custom_ vc_row-has-fill   vc_hidden" style="position: relative; left: 0px; box-sizing: border-box; width: 1349px; padding-left: 0px; padding-right: 0px; margin: 0 auto; margin-bottom: 35px; margin-top: 15px; background: #1a1a1a; opacity: 1; ">
        <div class="container">
            <!--<h1 class="page-title">Contact Us</h1>-->
            <ul class="breadcrumb">
                <li><a href="<?= yii::$app->homeUrl ?>"><i class="fa fa-home"></i></a></li>
                <li><a href="<?= yii::$app->homeUrl . 'my-account' ?>">My Account</a></li>
                <li class="active"><a>Addresses</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <aside id="column-left" class="col-lg-3 col-md-3 col-sm-12">
                <div class="box">
                    <div class="box-heading"><span>ACCOUNT</span>
                    </div>
                    <div class="list-group">
                        <a class="list-group-item" href="my-account.php">My Account</a>
                        <a class="list-group-item" href="login-up.php">Login</a>
                        <a class="list-group-item" href="register.php">Register</a>
                        <a class="list-group-item" href="forgot-password.php">Forgotten Password</a>
                        <a class="list-group-item active" href="address.php">Address Book</a>
                        <a class="list-group-item" href="wishlist.php">Wish List</a>
                        <a class="list-group-item" href="order-history.php">Order History</a>
                        <a class="list-group-item" href="">Logout</a>
                    </div>
                </div>
                <div class="box hidden-xs" id="latest">
                    <div class="box-heading"><span>Latest</span>
                    </div>
                    <div class="box-content">
                        <div class="box-product productbox-grid" id="latest-grid">
                            <div class="product-items">
                                <div class="product-block product-thumb transition">
                                    <div class="product-block-inner">
                                        <div class="image">
                                            <a href="">
                                                <img src="images/products/1.jpg" alt="White Diamonds" title="White Diamonds" width="60" height="82" class="img-responsive">
                                            </a>
                                            <span class="saleicon sale">Sale</span>
                                        </div>
                                        <div class="caption">
                                            <h4><a href="">Akanthos</a></h4>
                                            <p class="price"> <span class="price-new">$110.00</span>  <span class="price-old">$241.99</span>
                                                <span class="price-tax">Ex Tax: $90.00</span>
                                            </p>
                                            <!--                                            <div class="button_cart">
                                                                                            <button type="button" onclick="cart.add('49');">Add to Cart</button>
                                                                                            <div class="quickview" data-toggle="tooltip" data-original-title="" title=""> <a href=""><i class="fa fa-eye"></i></a>
                                                                                            </div>
                                                                                        </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-items">
                                <div class="product-block product-thumb transition">
                                    <div class="product-block-inner">
                                        <div class="image">
                                            <a href="">
                                                <img src="images/products/2.jpg" alt="White Diamonds" title="White Diamonds" width="60" height="82" class="img-responsive">
                                            </a>
                                            <span class="saleicon sale">Sale</span>
                                        </div>
                                        <div class="caption">
                                            <h4><a href="">Aimer</a></h4>
                                            <p class="price"> <span class="price-new">$110.00</span>  <span class="price-old">$241.99</span>
                                                <span class="price-tax">Ex Tax: $90.00</span>
                                            </p>
                                            <!--                                            <div class="button_cart">
                                                                                            <button type="button" onclick="cart.add('49');">Add to Cart</button>
                                                                                            <div class="quickview" data-toggle="tooltip" data-original-title="" title=""> <a href=""><i class="fa fa-eye"></i></a>
                                                                                            </div>
                                                                                        </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-items">
                                <div class="product-block product-thumb transition">
                                    <div class="product-block-inner">
                                        <div class="image">
                                            <a href="">
                                                <img src="images/products/3.jpg" alt="White Diamonds" title="White Diamonds" width="60" height="82" class="img-responsive">
                                            </a>
                                            <span class="saleicon sale">Sale</span>
                                        </div>
                                        <div class="caption">
                                            <h4><a href="">D'A bruzzo</a></h4>
                                            <p class="price"> <span class="price-new">$110.00</span>  <span class="price-old">$241.99</span>
                                                <span class="price-tax">Ex Tax: $90.00</span>
                                            </p>
                                            <!--                                            <div class="button_cart">
                                                                                            <button type="button" onclick="cart.add('49');">Add to Cart</button>
                                                                                            <div class="quickview" data-toggle="tooltip" data-original-title="" title=""> <a href=""><i class="fa fa-eye"></i></a>
                                                                                            </div>
                                                                                        </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <span class="latest_default_width" style="display:none; visibility:hidden"></span>
            </aside>
            <div id="content" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
               	<h3 class="title2">Addresses</h3>
                <p>The following addresses will be used on the checkout page by default.</p>
                <div class="u-columns woocommerce-Addresses col2-set addresses">
                    <div class="u-column1 col-1 woocommerce-Address">
                        <header class="woocommerce-Address-title title">
                            <h3 class="title2">Billing address</h3>
                            <?= Html::a('Edit', ['/myaccounts/user/billing-address'], ['class' => 'edit']) ?>
                        </header>
                        <address>Company name<br>First name Last name<br>House number<br>Apartment<br>Somewhere - 682703<br>Kerala, India</address>
                    </div>

                    <div class="u-column2 col-2 woocommerce-Address">
                        <header class="woocommerce-Address-title title">
                            <h3 class="title2">Shipping address</h3>
                            <?= Html::a('Edit', ['/myaccounts/user/shipping-address'], ['class' => 'edit']) ?>
                        </header>
                        <address>You have not set up this type of address yet.</address>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>