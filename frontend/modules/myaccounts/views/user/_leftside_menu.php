<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

$action = Yii::$app->controller->id . '/' . Yii::$app->controller->action->id;
//echo $action;
//exit;
?>

<aside id="column-left" class="col-lg-3 col-md-3 col-sm-3">
    <div class="box">
        <div class="box-heading"><span>ACCOUNT</span>
        </div>
        <div class="list-group">
            <?= Html::a('My Account', ['/myaccounts/user/index'], ['class' => '' . $action == 'user/index' ? 'list-group-item active' : 'list-group-item']) ?>
            <?= Html::a('Change Password', ['/myaccounts/user/change-password'], ['class' => '' . $action == 'user/change-password' ? 'list-group-item active' : 'list-group-item']) ?>
            <?= Html::a('Address Book', ['/myaccounts/user/user-address'], ['class' => '' . $action == 'user/user-address' ? 'list-group-item active' : 'list-group-item']) ?>
            <?= Html::a('Wish List', ['/myaccounts/user/wish-list'], ['class' => '' . $action == 'user/wish-list' ? 'list-group-item active' : 'list-group-item']) ?>
            <?= Html::a('My Orders', ['/myaccounts/user/my-orders'], ['class' => '' . $action == 'user/my-orders' ? 'list-group-item active' : 'list-group-item']) ?>
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