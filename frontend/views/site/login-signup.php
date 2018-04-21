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
                <li class="active"><a>Login & Signup</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?= Yii::$app->controller->renderPartial('_leftside_menu'); ?>

            <div id="content" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="panel">
                    <div class="row contact-info">

                        <div class="col-sm-6">
                            <div class="well bg-white">
                                <h3 class="title2">New Customer</h3>
                                <p><strong>Register Account</strong></p>
                                <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                                <?= Html::a('Continue', ['site/signup', 'go' => $go], ['class' => 'btn shadowbtn']) ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="well bg-white">
                                <h3 class="title2">Returning Customer</h3>
                                <p><strong>I am a returning customer</strong></p>
                                <?php $form = ActiveForm::begin(['action' => ['site/login', 'go' => $go], 'options' => ['method' => 'post']]) ?>
                                <div class="form-group">
                                    <label class="control-label" for="input-email">E-Mail Address</label>
                                    <?= $form->field($model_login, 'email')->textInput(['placeholder' => 'Email Id'])->label(FALSE) ?>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="input-password">Password</label>
                                    <?= $form->field($model_login, 'password')->passwordInput(['placeholder' => '********'])->label(FALSE) ?>
                                    <?= Html::a('Forgotten Password', ['/forgot-password'], ['class' => 'fblack']) ?>
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