<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\CountryCode;
?>
<?php
$country_codes = ArrayHelper::map(\common\models\CountryCode::find()->where(['status' => 1])->orderBy(['id' => SORT_ASC])->all(), 'id', 'country_code');
?>
<div class="information-contact pbtm40">
    <div class="content_breadcum" style="background-position: 50% 0px;"></div>
    <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid  vc_custom_ vc_row-has-fill   vc_hidden" style="position: relative; left: 0px; box-sizing: border-box; width: 1349px; padding-left: 0px; padding-right: 0px; margin: 0 auto; margin-bottom: 35px; margin-top: 15px; background: #1a1a1a; opacity: 1; ">
        <div class="container">
            <!--<h1 class="page-title">Contact Us</h1>-->
            <ul class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-home"></i></a></li>
                <li><a href="my-account.php">Account</a></li>
                <li class="active"><a>Forgot Password</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?= Yii::$app->controller->renderPartial('_leftside_menu'); ?>

            <div id="content" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <?php if (Yii::$app->session->hasFlash('error')): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= Yii::$app->session->getFlash('error') ?>
                    </div>
                <?php endif; ?>
                <?php if (Yii::$app->session->hasFlash('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?= Yii::$app->session->getFlash('success') ?>
                    </div>
                <?php endif; ?>
                <p>Enter the e-mail address associated with your account. Click submit to have a password reset link e-mailed to you.</p>
                <?php $form = ActiveForm::begin(['id' => 'forgot-form', 'class' => 'form-horizontal']); ?>
                <fieldset>
                    <h3 class="title2">Your E-Mail Address</h3>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-email">E-Mail Address</label>
                        <div class="col-sm-10">
                            <?= $form->field($model, 'email')->textInput(['class' => 'form-control', 'id' => 'forgot-email', 'placeholder' => "E-Mail Address", 'autocomplete' => 'off', 'autofocus' => true, 'required' => 'required'])->label(false) ?>
                            <!--<input type="text" name="email" value="" placeholder="E-Mail Address" id="input-email" class="form-control">-->
                        </div>
                    </div>
                </fieldset>
                <div class="buttons clearfix submit-btn">
                    <!--                        <div class="pull-left">
                                                <a href="" class="btn shadowbtn">Back</a>
                                            </div>-->
                    <div class="pull-right">
                        <input class="btn btn-primary shadowbtn" type="submit" value="CONTINUE">
                    </div>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>