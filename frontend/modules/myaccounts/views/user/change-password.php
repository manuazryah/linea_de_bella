<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<section class="in-my-account-section"><!--in-orders-section-->
    <div class="container">
        <div class="account-top-main-head">
            <h2 class="head">Change Password</h2>
            <div class="account-breadcrumb"><?= Html::a('Home', ['/site/index'], ['title' => 'Home']) ?><i>/</i><span>Change Password</span> </div>
            <div class="clear"></div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <?= Yii::$app->controller->renderPartial('_leftside_menu'); ?>
            </div>
            <div class="col-lg-8">

                <div class="account-main-box">
                    <?php
                    $form = ActiveForm::begin(['id' => 'change-password', 'options' => [
                                    'class' => 'in-main-form'
                    ]]);
                    ?>
                    <?= \common\components\AlertMessageWidget::widget() ?>
                    <div class="form-group">
                        <label>Old Password*</label>
                        <input type="password" name="old-password" class="form-control"  placeholder="********" id="change-old-password">
                    </div>
                    <div class="form-group">
                        <label>New Password*</label>
                        <input type="password" class="form-control" name="new-password"  placeholder="********" id="change-new-password">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password*</label>
                        <input type="password" class="form-control"  name="confirm-password" placeholder="********" id="change-confirm-password">
                    </div>
                    <div class="form-group">
                        <?= Html::submitButton('Reset Password', ['class' => 'submit', 'style' => '']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>

            </div>
        </div>	
    </div>
</section><!--in-orders-section-->
<script>

    jQuery(document).ready(function () {

        jQuery('#change-old-password').on('blur', function () {
            var old_pwd = jQuery('#change-old-password').val();
            if (old_pwd) {
                jQuery.ajax({
                    type: 'POST',
                    cache: false,
                    data: {old_pwd: old_pwd},
                    url: homeUrl + 'myaccounts/user/check-password',
                    success: function (data) {
                        if (data == 0) {
                            if (!jQuery(".help-block3")[0]) {
                                jQuery("#change-old-password").after('<div class="help-block3" style="color:#a94442"> Incorrect Password.</div>');
                            } else {
                                jQuery('.help-block3').empty();
                                jQuery('.help-block3').append('Incorrect Password.');
                            }
                        } else {
                            jQuery('.help-block3').empty();
                        }
                    }
                });
            }
        });



        jQuery('#change-new-password').on('blur', function () {
            var pass_length = PasswordLength();

        });
        jQuery('#change-confirm-password').on('blur', function () {
            var confirm = ConfirmPassword();

        });


        jQuery(document).on('submit', '#change-password', function (e) {
//            e.preventDefault();
            var pass_length = PasswordLength();
            var confirm = ConfirmPassword();
            var old_pwd = jQuery('#change-old-password').val();
            var validation = CheckValidation();


            if (validation === 1 && pass_length === 1 && confirm === 1) {
                jQuery.ajax({
                    url: homeUrl + 'myaccounts/user/check-password',
                    'async': false,
                    'type': "POST",
                    'global': false,
                    data: {old_pwd: old_pwd},

                })
                        .done(function (data) {
                            if (data === '1') {
                                console.log('hi');
//                                jQuery('#change-password').submit();
                                return true;

                            } else {
                                console.log(data);
                                e.preventDefault();
                                return false;
                            }
                        });
//                jQuery('#change-password').submit();
                return true;
            } else {
                e.preventDefault();
            }
        });




        function PasswordLength() {
            var length = jQuery('#change-new-password').val().length;
            if (length) {
                if (length >= 6) {
                    jQuery('.help-block1').empty();
                    return 1;
                } else {

                    if (!jQuery(".help-block1")[0]) {
                        jQuery("#change-new-password").after('<div class="help-block1" style="color:#a94442"> Password should contain at least 6 characters.</div>');
                    } else {
                        jQuery('.help-block1').empty();
                        jQuery('.help-block1').append('Password should contain at least 6 characters.');
                    }
                    return 0;

                }
            }
        }

        function ConfirmPassword() {
            var password = jQuery('#change-new-password').val();
            var confirm_password = jQuery('#change-confirm-password').val();
            if (confirm_password !== password) {
                if (!jQuery(".help-block2")[0]) {
                    jQuery("#change-confirm-password").after('<div class="help-block2" style="color:#a94442"> Password mismatch.</div>');
                } else {
                    jQuery('.help-block2').empty();
                    jQuery('.help-block2').append('Password mismatch.');
                }
                return 0;
            } else {
                jQuery('.help-block2').empty();
                return 1;
            }
        }


        function CheckValidation() {
            var valid = 1;
            var pass_length = jQuery('#change-new-password').val();
            var confirm = jQuery('#change-confirm-password').val();
            var old_pwd = jQuery('#change-old-password').val();
            if (!old_pwd) {
                valid = 0;
                if (!jQuery(".help-block3")[0]) {
                    jQuery("#change-old-password").after('<div class="help-block3" style="color:#a94442"> Old Password cannot be blank</div>');
                } else {
                    jQuery('.help-block3').empty();
                    jQuery('.help-block3').append('Old Password cannot be blank.');
                }
            }

            if (!pass_length) {
                valid = 0;
                if (!jQuery(".help-block1")[0]) {
                    jQuery("#change-new-password").after('<div class="help-block1" style="color:#a94442"> New Password cannot be blank.</div>');
                } else {
                    jQuery('.help-block1').empty();
                    jQuery('.help-block1').append('New Password cannot be blank.');
                }
            }

            if (!confirm) {
                valid = 0;
                if (!jQuery(".help-block2")[0]) {
                    jQuery("#change-confirm-password").after('<div class="help-block2" style="color:#a94442"> Confirm Password cannot be blank.</div>');
                } else {
                    jQuery('.help-block2').empty();
                    jQuery('.help-block2').append('Confirm Password cannot be blank.');
                }
            }
            return valid;

        }


    });

</script>