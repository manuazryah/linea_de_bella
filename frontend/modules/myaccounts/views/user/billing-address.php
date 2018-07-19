<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Emirates;
use yii\helpers\ArrayHelper;
use common\models\CountryCode;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
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
                <div class="u-columns woocommerce-Addresses col2-set addresses">
                    <div class="u-column1 col-1 woocommerce-Address">
                        <header class="woocommerce-Address-title title">
                            <h3 class="title2">Billing address</h3>
                        </header>
                        <?php $form = ActiveForm::begin(); ?>
                        <fieldset id="address">
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-firstname">Name</label>
                                <div class="col-sm-10">
                                    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label(FALSE) ?>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-lastname">Address</label>
                                <div class="col-sm-10">
                                    <?= $form->field($model, 'address')->textInput(['maxlength' => true])->label(FALSE) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-email">Landmark</label>
                                <div class="col-sm-10">
                                    <?= $form->field($model, 'landmark')->textInput(['maxlength' => true])->label(FALSE) ?>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-telephone">Location</label>
                                <div class="col-sm-10">
                                    <?= $form->field($model, 'location')->textInput(['maxlength' => true])->label(FALSE) ?>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-telephone">Emirate</label>
                                <div class="col-sm-10">
                                    <?= $form->field($model, 'emirate')->dropDownList(ArrayHelper::map(Emirates::find()->all(), 'id', 'name'), ['prompt' => 'select'])->label(FALSE); ?>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-telephone">Post Code</label>
                                <div class="col-sm-10">
                                    <?= $form->field($model, 'post_code')->textInput(['maxlength' => true])->label(FALSE) ?>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-telephone">Mobile</label>
                                <div class="col-sm-10">
                                    <?php $countrie_code = ArrayHelper::map(CountryCode::findAll(['status' => 1]), 'id', 'country_code'); ?>
                                    <select class="day" id="cntry_code_id"style="position: absolute; border-right: 1px solid #d1d2d0;padding-top: 7px;padding-bottom: 6px;" name="SignupForm[country_code]">
                                        <?php
                                        foreach ($countrie_code as $key => $countrie_cod) {
                                            ?>
                                            <option value="<?= $key ?>"><?= $countrie_cod ?></option>
                                        <?php }
                                        ?>
                                    </select>
                                    <?= $form->field($model, 'mobile_number')->textInput(['placeholder' => 'Mobile No', 'style' => 'padding-left: 70px;'])->label(FALSE) ?>
                                </div>
                            </div>
                            <div class="form-group required">
                                <div class="col-sm-12">
                                    <div class="pull-right">
                                        <?= Html::submitButton('Save Address', ['class' => 'btn btn-primary shadowbtn']) ?>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <?php ActiveForm::end(); ?>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>