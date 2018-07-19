<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<div class="information-contact pbtm40">
    <div class="content_breadcum" style="background-position: 50% 0px;"></div>
    <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid  vc_custom_ vc_row-has-fill   vc_hidden" style="position: relative; left: 0px; box-sizing: border-box; width: 1349px; padding-left: 0px; padding-right: 0px; margin: 0 auto; margin-bottom: 35px; margin-top: 15px; background: #1a1a1a; opacity: 1; ">
        <div class="container">
            <!--<h1 class="page-title">Contact Us</h1>-->
            <ul class="breadcrumb">
                <li><a href="<?= yii::$app->homeUrl ?>"><i class="fa fa-home"></i></a></li>
                <li><a href="<?= yii::$app->homeUrl . 'my-account' ?>">My Account</a></li>
                <li class="active"><a>Change Addres</a></li>
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
                            <h3 class="title2">Change Address</h3>
                        </header>
                        <!--<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">-->
                        <?=
                        Yii::$app->controller->renderPartial('_form', [
                            'model' => $model,
                            'country_codes' => $country_codes,
                        ]);
                        ?>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
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