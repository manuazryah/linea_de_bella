<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
?>
<div id="wpo-mainbody" class="container wpo-mainbody">

    <nav class="woocommerce-breadcrumb"><a class="home" href="">Home</a>&nbsp;/&nbsp;My Account</nav>

    <div id="my-aacount">
        <section class="wrapper sec-space my-account">                  
            <div class="container">
                <!-- My Account Starts -->
                <div class="row">  
                    <div class="col-md-3">
                        <?= Yii::$app->controller->renderPartial('_leftside_menu'); ?>
                    </div>

                    <!-- Product Details Starts--> 
                    <aside class="col-md-9 col-sm-8">
                        <div class="panel-group account-panel" id="accordion">
                            <div class="panel"> 
                                <div class="accordion-heading">                              
                                    <a class="widget-title" data-toggle="collapse" data-parent="#accordion" href="#accordion-1" aria-expanded="true"> 01. My Account </a>                              
                                </div>
                                <div id="accordion-1" class="panel-collapse collapse in" aria-expanded="true" style="">
                                    <div class="account-body">
                                        <ul class="acnt-list list-unstyled">
                                            <li> 
                                                <i class="fa fa-arrow-circle-o-right"></i>  
                                                <a href="<?= yii::$app->homeUrl.'change-password'?>"> Change your password</a>
                                            </li>
                                            <li>          
                                                <i class="fa fa-arrow-circle-o-right"></i> 
                                                <a href="<?= yii::$app->homeUrl.'adresses'?>"> Modify your address book entries</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel"> 
                                <div class="accordion-heading">                              
                                    <a class="widget-title collapsed" data-toggle="collapse" data-parent="#accordion" href="#accordion-2" aria-expanded="false">  02. Order and Review  </a>                              
                                </div>
                                <div id="accordion-2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="account-body">
                                        <ul class="acnt-list list-unstyled">
                                            <li>
                                                <i class="fa fa-arrow-circle-o-right"></i> 
                                                <a href="<?= yii::$app->homeUrl.'my-orders'?>"> View your order history</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-arrow-circle-o-right"></i>  
                                                <a href="<?= yii::$app->homeUrl.'my-reviews'?>"> Your reviews and ratings</a>
                                            </li>
<!--                                            <li>
                                                <i class="fa fa-arrow-circle-o-right"></i> 
                                                <a href=""> View your retun requests</a>
                                            </li>-->
                                        </ul>
                                    </div>
                                </div>
                            </div>

<!--                            <div class="panel"> 
                                <div class="accordion-heading">                              
                                    <a class="widget-title collapsed" data-toggle="collapse" data-parent="#accordion" href="#accordion-3" aria-expanded="false">  03. Newsletter </a>                              
                                </div>
                                <div id="accordion-3" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="account-body">
                                        <ul class="acnt-list list-unstyled">
                                            <li>
                                                <i class="fa fa-arrow-circle-o-right"></i>
                                                <a href=""> Subscribe / unsubscribe to newsletter</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </aside>
                    <!-- Product Details Ends --> 
                </div>
                <!-- / My Account Ends -->
            </div>

        </section>
    </div>

</div>
