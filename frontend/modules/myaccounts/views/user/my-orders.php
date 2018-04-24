<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\ListView;
use common\components\EmptyDataWidget;
?>
<div class="information-contact pbtm40">
    <div class="content_breadcum" style="background-position: 50% 0px;"></div>
    <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid  vc_custom_ vc_row-has-fill   vc_hidden" style="position: relative; left: 0px; box-sizing: border-box; width: 1349px; padding-left: 0px; padding-right: 0px; margin: 0 auto; margin-bottom: 35px; margin-top: 15px; background: #1a1a1a; opacity: 1; ">
        <div class="container">
            <!--<h1 class="page-title">Contact Us</h1>-->
            <ul class="breadcrumb">
                <li>
                    <?= Html::a('<i class="fa fa-home"></i>', ['/site/index']) ?>
                </li>
                <li>
                    <?= Html::a('Address', ['/myaccounts/user/user-address']) ?>
                </li>
                <li class="active"><a>Billing Address</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?= Yii::$app->controller->renderPartial('_leftside_menu'); ?>
            <div id="content" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <h3 class="title2">My Order History</h3>
                <div class="acordion-tab">
                    <ul class="nav md-pills nav-justified pills-secondary">
                        <li class="nav-item active">
                            <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab">Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab2" role="tab">Open Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab3" role="tab">Canceled Orders</a>
                        </li>
                    </ul>

                    <!-- Tab panels -->
                    <div class="tab-content">

                        <!--Panel 1-->
                        <div class="tab-pane fade in active" id="tab1" role="tabpanel">
                            <?php
                            if ($dataProvider->totalCount > 0) {
                                ?>
                                <?=
                                ListView::widget([
                                    'dataProvider' => $dataProvider,
                                    'itemView' => 'my-order-items',
                                    'pager' => [
                                        'firstPageLabel' => 'first',
                                        'lastPageLabel' => 'last',
                                        'prevPageLabel' => '<',
                                        'nextPageLabel' => '>',
                                        'maxButtonCount' => 3,
                                    ],
                                ]);
                                ?>
                                <?php
                            } else {
                                ?>
                                <div class="settings">
                                    <div class="col-lg-8 col-md-8 col-sm-12 hidden-xs my-account-cntnt empty-data right-box" style="width: 98%;">
                                        <?= EmptyDataWidget::widget(['path' => Yii::$app->homeUrl . 'images/empty-cart.png', 'msg' => 'Your Orders is Empty']) ?>
                                    </div>
                                    <div class="hidden-lg hidden-md hidden-sm col-xs-12 my-account-cntnt empty-data right-box" style="width: 98%;">
                                        <?= EmptyDataWidget::widget(['path' => Yii::$app->homeUrl . 'images/empty-cart.png', 'msg' => 'Your Orders is Empty']) ?>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                            <?php
                            if ($dataProvider1->totalCount > 0) {
                                ?>
                                <?=
                                ListView::widget([
                                    'dataProvider' => $dataProvider1,
                                    'itemView' => 'my-order-items',
                                    'pager' => [
                                        'firstPageLabel' => 'first',
                                        'lastPageLabel' => 'last',
                                        'prevPageLabel' => '<',
                                        'nextPageLabel' => '>',
                                        'maxButtonCount' => 3,
                                    ],
                                ]);
                                ?>
                                <?php
                            } else {
                                ?>
                                <div class="settings">
                                    <div class="col-lg-8 col-md-8 col-sm-12 hidden-xs my-account-cntnt empty-data right-box" style="width: 98%;">
                                        <?= EmptyDataWidget::widget(['path' => Yii::$app->homeUrl . 'images/empty-cart.png', 'msg' => 'Your Orders is Empty']) ?>
                                    </div>
                                    <div class="hidden-lg hidden-md hidden-sm col-xs-12 my-account-cntnt empty-data right-box" style="width: 98%;">
                                        <?= EmptyDataWidget::widget(['path' => Yii::$app->homeUrl . 'images/empty-cart.png', 'msg' => 'Your Orders is Empty']) ?>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                            <?php
                            if ($dataProvider2->totalCount > 0) {
                                ?>
                                <?=
                                ListView::widget([
                                    'dataProvider' => $dataProvider2,
                                    'itemView' => 'my-order-items',
                                    'pager' => [
                                        'firstPageLabel' => 'first',
                                        'lastPageLabel' => 'last',
                                        'prevPageLabel' => '<',
                                        'nextPageLabel' => '>',
                                        'maxButtonCount' => 3,
                                    ],
                                ]);
                                ?>
                                <?php
                            } else {
                                ?>
                                <div class="settings">
                                    <div class="col-lg-8 col-md-8 col-sm-12 hidden-xs my-account-cntnt empty-data right-box" style="width: 98%;">
                                        <?= EmptyDataWidget::widget(['path' => Yii::$app->homeUrl . 'images/empty-cart.png', 'msg' => 'Your Orders is Empty']) ?>
                                    </div>
                                    <div class="hidden-lg hidden-md hidden-sm col-xs-12 my-account-cntnt empty-data right-box" style="width: 98%;">
                                        <?= EmptyDataWidget::widget(['path' => Yii::$app->homeUrl . 'images/empty-cart.png', 'msg' => 'Your Orders is Empty']) ?>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>