<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\CountryCode;
use yii\helpers\ArrayHelper;

$this->title = 'Change Your password';
$this->params['breadcrumbs'][] = $this->title;
//echo '<pre>';
//print_r($model);exit;
?>
<div class="information-contact pbtm40">
    <div class="content_breadcum" style="background-position: 50% 0px;"></div>
    <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid  vc_custom_ vc_row-has-fill   vc_hidden" style="position: relative; left: 0px; box-sizing: border-box; width: 1349px; padding-left: 0px; padding-right: 0px; margin: 0 auto; margin-bottom: 35px; margin-top: 15px; background: #1a1a1a; opacity: 1; ">
        <div class="container">
            <!--<h1 class="page-title">Contact Us</h1>-->
            <ul class="breadcrumb">
                <li>
                    <?= Html::a('<i class="fa fa-home"></i>', ['/site/index'], ['title' => 'Home']) ?>
                </li>
                <li class="active"><a href="">Forgot Password</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?= Yii::$app->controller->renderPartial('_leftside_menu'); ?>

            <div id="content" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <?php $form = ActiveForm::begin(['id' => 'forgot-email',]); ?>
                <fieldset id="">
                    <div style="font-size: 17px;
                         color: hsla(0, 100%, 50%, 0.81);">

                        <?= Yii::$app->session->getFlash('error'); ?>
                        <?= Yii::$app->session->getFlash('success'); ?>
                    </div>
                    <h3 class="title2">Change Your password</h3>

                    <div class="form-group required">
                        <label class="col-sm-3 control-label" for="input-firstname">New Password</label>
                        <div class="col-sm-9">
                            <input type="password" id="new-password" class="form-control input-dark" name="new-password" required>
                            <p class="help-block help-block-error"></p>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-3 control-label" for="input-firstname">Confirm Password</label>
                        <div class="col-sm-9">
                            <input type="password" id="new-password" class="form-control input-dark" name="new-password" required>
                            <p class="help-block help-block-error"></p>
                        </div>
                    </div>
                    <div class="form-group required">
                        <div class="col-sm-12">
                            <?= Html::submitButton('Reset Password', ['class' => 'btn btn-primary shadowbtn signup_submit', 'style' => 'float:right']) ?>
                        </div>
                    </div>
                </fieldset>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
