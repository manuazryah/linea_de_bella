<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\CountryCode;
use yii\helpers\ArrayHelper;

$this->title = 'Signup';
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
                <li><a href="index.php"><i class="fa fa-home"></i></a></li>
                <li><a href="my-account.php">Account</a></li>
                <li class="active"><a>Register</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?= Yii::$app->controller->renderPartial('_leftside_menu'); ?>

            <div id="content" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <p>If you already have an account with us, please login at the <a href="<?= yii::$app->homeUrl . 'login-signup' ?>">login page</a>.</p>
                <?php $form = ActiveForm::begin(); ?>
                <fieldset id="account">
                    <h3 class="title2">Your Personal Details</h3>

                    <div class="form-group required" style="display: none;">
                        <label class="col-sm-2 control-label">Customer Group</label>
                        <div class="col-sm-10">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="customer_group_id" value="1" checked="checked">
                                    Default</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-firstname">First Name</label>
                        <div class="col-sm-10">
                            <?= $form->field($model, 'first_name')->textInput(['placeholder' => 'First Name'])->label(FALSE) ?>
                            <!--<input type="text" name="firstname" value="" placeholder="First Name" id="input-firstname" class="form-control">-->
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
                        <div class="col-sm-10">
                            <?= $form->field($model, 'last_name')->textInput(['placeholder' => 'Last Name', 'id' => 'input-lastname'])->label(FALSE) ?>
                            <!--<input type="text" name="lastname" value="" placeholder="Last Name" id="input-lastname" class="form-control">-->
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
                        <div class="col-sm-10">
                            <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email'])->label(FALSE) ?>
                        </div>
                    </div>
                    <?php $countrie_code = ArrayHelper::map(CountryCode::findAll(['status' => 1]), 'id', 'country_code'); ?>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-telephone">Mobile</label>
                        <div class="col-sm-10">
                            <select class="day" id="cntry_code_id"style="position: absolute; border-right: 1px solid #d1d2d0;padding-top: 7px;padding-bottom: 6px;" name="SignupForm[country_code]">
                    <!--<select id="signupform-day" class="day" name="SignupForm[day]">-->
                                <?php
                                foreach ($countrie_code as $key => $countrie_cod) {
                                    ?>
                                    <option value="<?= $key ?>"><?= $countrie_cod ?></option>
                                <?php }
                                ?>
                            </select>
                            <input style="padding-left: 70px;"type="tel" name="SignupForm[mobile_no]" value="" placeholder="Mobile" id="input-telephone" class="form-control mobile">
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <h3 class="title2">Password</h3>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-password">Password</label>
                        <div class="col-sm-10">
                            <?= $form->field($model, 'password')->passwordInput()->label('Password*')->label(FALSE) ?>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-confirm">Confirm</label>
                        <div class="col-sm-10">
                            <?= $form->field($model, 'password_repeat')->passwordInput()->label('Confirm Password*')->label(FALSE) ?>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="form-group required pull-right">
                        <div class="col-sm-12">
                            <div class="g-recaptcha" style="padding-left: 25px; margin-top: 10px;" data-sitekey="6LfASkMUAAAAAKb0YThDF1KSdEFtkltDfiBI9_iI"></div>
                        </div>
                    </div>
                </fieldset>
                <div class="buttons submit-btn">
                    <div class="pull-right">
                        I have read and agree to the <a href="#modal-agree" class="agree" data-toggle="modal" data-target="#modal-agree"><b>Privacy Policy</b></a>                       
                        <input type="checkbox" name="agree" class="signup_checkbox" value="1">
                        &nbsp;
                        <?= Html::submitButton('submit', ['class' => 'btn btn-primary shadowbtn signup_submit']) ?>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
