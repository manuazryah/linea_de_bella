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
                <li>
                    <?= Html::a('<i class="fa fa-home"></i>', ['/site/index']) ?>
                </li>
                <li class="active"><a>Addresses</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?= Yii::$app->controller->renderPartial('_leftside_menu'); ?>
            <div id="content" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
               	<h3 class="title2">Addresses</h3>
                <p>The following addresses will be used on the checkout page by default.</p>
                <div class="u-columns woocommerce-Addresses col2-set addresses">
                    <div class="u-column1 col-1 woocommerce-Address">
                        <header class="woocommerce-Address-title title">
                            <?php
                            if (!isset($model->id) && $model->id == '') {
                                $name = 'Add Address';
                            } else {
                                $name = 'Edit Address';
                            }
                            ?>
                            <?= Html::a($name, ['/myaccounts/user/address'], ['class' => 'edit']) ?>
                        </header>
                        <?php if (!empty($model)) { ?>
                            <address>
                                <ul class="add-list">
                                    <li><?= $model->name ?></li>
                                    <li><?= $model->address ?></li>
                                    <li><?= $model->location ?></li>
                                    <li><?= $model->emirate != '' ? common\models\Emirates::findOne($model->emirate)->name : '' ?></li>
                                    <li><?= $model->post_code ?></li>
                                    <li><?= $model->country_code ?> <?= $model->mobile_number ?></li>
                                </ul>
                            </address>
                        <?php } else {
                            ?>
                            <address>You have not set up this type of address yet.</address>
                        <?php }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>