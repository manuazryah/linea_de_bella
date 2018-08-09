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
                <h3 class="head">Forgot Your Password</h3>
                <?= Html::a('Login?', ['/site/login-signup'], ['class' => 'link']) ?>
                <div class="clear"></div>
            </div>
            <div class="main-form-box">
                <?= \common\components\AlertMessageWidget::widget() ?>
                <h6 style="font-family: roboto-medium; font-size: 16px; color: #8c8c8c; margin-top: 25px">No Problem!</h6>
                <p class="sub-discrip">We will send you an email to reset your password. Just enter the same email address you used for registration on coralperfumes.com. We will send you an email with instructions for resetting your password.</p>
                <?php
                $form = ActiveForm::begin(
                                [
                                    'id' => 'forgot-email',
                                    'method' => 'post',
                                    'options' => [
                                        'class' => 'login-form fade-in-effect forgot-form'
                                    ]
                                ]
                );
                ?>
                <div class="form-group">
                    <label>E-Mail Address*</label>
                    <?= $form->field($model, 'email')->textInput(['class' => 'form-control'])->label(FALSE) ?>
                </div>
                <div class="form-group">
                    <?= Html::submitButton('submit', ['class' => 'submit']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</section><!--in-login-section-->

