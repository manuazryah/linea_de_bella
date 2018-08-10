<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\CountryCode;

if (isset($meta_title) && $meta_title != '')
    $this->title = $meta_title;
else
    $this->title = 'Linea De Bella';
?>

<section class="in-login-section"><!--in-login-section-->
    <div class="container">
        <div class="main-login-box">
            <div class="top-head-login">
                <h3 class="head">Login</h3>
                <?= Html::a('New to linea de bella?', ['/site/signup'], ['class' => 'link']) ?>
                <div class="clear"></div>
            </div>
            <div class="main-form-box">
                <!--<form class="in-main-form">-->
                <?php $form = ActiveForm::begin(['action' => ['site/login', 'go' => $go], 'options' => ['method' => 'post', 'class' => 'in-main-form']]) ?>
                <div class="form-group">
                    <label>Email</label>
                    <?= $form->field($model_login, 'email')->textInput(['class' => 'form-control'])->label(FALSE) ?>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <?= $form->field($model_login, 'password')->passwordInput(['class' => 'form-control'])->label(FALSE) ?>
                </div>

                <!--                                <div class="form-group">
                                                        <div class="checkbox">
                                                                <input type="checkbox"  value="" checked=""> <label >Remember Me</label>

                                                        </div>
                                                </div>-->

                <div class="form-group">
                    <input name="" type="submit" value="Login" class="submit">
                </div>
                <?= Html::a('Forgot Password?', ['/forgot-password'], ['class' => 'forgot-link']) ?>
                <!--</form>-->
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</section><!--in-login-section-->

