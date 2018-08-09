<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Forgot-password';
?>

<section class="in-login-section"><!--in-login-section-->
    <div class="container">
        <div class="main-login-box">
            <div class="top-head-login">
                <h3 class="head">Change Your Password</h3>
                <?= Html::a('Login?', ['/site/login-signup'], ['class' => 'link']) ?>
                <div class="clear"></div>
            </div>
            <div class="main-form-box">
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
                <?= \common\components\AlertMessageWidget::widget() ?>
                <div class="form-group">
                    <div class="form-group field-employee-password">
                        <label>New Password</label>
                        <input type="password" id="new-password" class="form-control input-dark" name="new-password" required>
                        <p class="help-block help-block-error"></p>
                    </div>

                </div>
                <div class="form-group">
                    <div class="form-group field-employee-password confirm_password">
                        <label>Confirm Password</label>
                        <input type="password" id="confirm-password" class="form-control input-dark" name="confirm-password" required>
                        <p class="help-block help-block-error"></p>
                    </div>

                </div>
                <div class="form-group">
                    <?= Html::submitButton('submit', ['class' => 'submit']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</section><!--in-login-section-->
<script>
    $('#confirm-password').on('keyup', function () {
        CheckConfirmPasswordMatch();
    });
    function CheckConfirmPasswordMatch() {
        if (($("#confirm-password").val()) !== ($("#new-password").val())) {
            $(".confirm_password").addClass('has-error');
            if ($(".confirm_password p").text() === "") {
                $(".confirm_password p").prepend("Password Mismatch");
            }


        } else {
            $(".confirm_password").removeClass('has-error');
            $(".confirm_password p").text("");
            $(".confirm_password").addClass('has-success');
        }
    }
</script>

