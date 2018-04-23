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
                <div class="panel">
                    <div class="row contact-info">

                        <div class="col-sm-12">
                            <div class="well bg-white">
                                <h3 class="title2">New User Registration</h3>
                                <p>If you already have an account with us, please login at the <a href="<?= yii::$app->homeUrl . 'login-signup' ?>">login page</a>.</p>
                                <?php $form = ActiveForm::begin(['id' => 'sign_up_form']); ?>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label" for="input-email">First Name  <span class="astrik">*</span></label>
                                        <?= $form->field($model, 'first_name')->textInput(['placeholder' => 'First Name'])->label(FALSE) ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label" for="input-email">Last Name <span class="astrik">*</span> </label>
                                        <?= $form->field($model, 'last_name')->textInput(['placeholder' => 'Last Name'])->label(FALSE) ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label" for="input-email">E-Mail  <span class="astrik">*</span></label>
                                        <?= $form->field($model, 'email')->textInput(['placeholder' => 'E-Mail'])->label(FALSE) ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <?php $countrie_code = ArrayHelper::map(CountryCode::findAll(['status' => 1]), 'id', 'country_code'); ?>
                                        <label class="control-label" for="input-email">Mobile <span class="astrik">*</span> </label>
                                        <select class="day" id="cntry_code_id"style="position: absolute;border-right: 1px solid #d1d2d0;padding-top: 8px;padding-bottom: 6px;left: 16px;top: 26px;border-bottom-left-radius: 5px;border-top-left-radius: 5px;" name="SignupForm[country_code]">
                                <!--<select id="signupform-day" class="day" name="SignupForm[day]">-->
                                            <?php
                                            foreach ($countrie_code as $key => $countrie_cod) {
                                                ?>
                                                <option value="<?= $key ?>"><?= $countrie_cod ?></option>
                                            <?php }
                                            ?>
                                        </select>
                                        <?= $form->field($model, 'mobile_no')->textInput(['placeholder' => 'Mobile No', 'style' => 'padding-left: 70px;'])->label(FALSE) ?>
                                    </div>
                                </div>
                                <div class="buttons submit-btn">
                                    <div class="pull-left">
                                        <input class="btn btn-primary shadowbtn" type="submit" value="Login">
                                    </div>
                                </div>
                                <?php ActiveForm::end(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
