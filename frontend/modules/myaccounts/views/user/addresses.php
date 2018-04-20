<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Emirates;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>
<style>
    .field-useraddress-address,.field-useraddress-landmark,.field-useraddress-location,.field-useraddress-emirate,.field-useraddress-post_code,.field-useraddress-mobile_number{
        padding-left: 0px !important;
        margin-bottom: 0px;
    }
    .user-adddress p {
        line-height: 15px;
    }
</style>
<div class="information-contact pbtm40">
    <div class="content_breadcum" style="background-position: 50% 0px;"></div>
    <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid  vc_custom_ vc_row-has-fill   vc_hidden" style="position: relative; left: 0px; box-sizing: border-box; width: 1349px; padding-left: 0px; padding-right: 0px; margin: 0 auto; margin-bottom: 35px; margin-top: 15px; background: #1a1a1a; opacity: 1; ">
        <div class="container">
            <!--<h1 class="page-title">Contact Us</h1>-->
            <ul class="breadcrumb">
                <li><a href="<?= yii::$app->homeUrl ?>"><i class="fa fa-home"></i></a></li>
                <li><a href="<?= yii::$app->homeUrl . 'my-account' ?>">My Account</a></li>
                <li class="active"><a>Address</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?= Yii::$app->controller->renderPartial('_leftside_menu'); ?>
            <div id="content" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
               	<h3 class="title2">Addresses</h3>
                <p>The following addresses will be used on the checkout page by default.</p>

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 f-right">
                    <a href="<?= yii::$app->homeUrl . 'new-address' ?>" class="button alt wc-forward checkout">Add Address</a>
                </div>
                <div class="u-columns woocommerce-Addresses col2-set addresses">
                    <?php
                    if (!empty($user_address)) {
                        ?>
                        <?php
                        $i = 1;
                        foreach ($user_address as $value) {
                            ?>
                            <div class="u-column1 col-1 woocommerce-Address">
                                <header class="woocommerce-Address-title title">
                                    <h3 class="title2">Your Saved Address:<?= $i ?> </h3>
                                    <a href="<?= yii::$app->homeUrl . 'change-address/' . yii::$app->EncryptDecrypt->Encrypt('encrypt', $value->id); ?>" class="edit">Edit</a>
                                </header>
                                <address>
                                    <?= $value->address ?><br>
                                    <?= $value->landmark ?><br>
                                    <?= $value->location ?><br>
                                   <?= $value->post_code ?><br>
                                    <?= $value->mobile_number ?><br>
                                    <label id="Radio0">
                                                        <input type="radio" name="default-address" value="<?= $value->id ?>" <?php
                                                        if ($value->status == 1) {
                                                            echo ' checked';
                                                        }
                                                        ?> data-waschecked="true" />
                                                        Default address
                                                    </label>
                                                    <a href="" class="delete-address" data-val="<?= $value->id ?>"><i class="fa fa-trash" aria-hidden="true"></i>Delete address</a></address><br>
                                </address>
                            </div>
                            <?php $i++;
                        }
                        ?> 
<?php } ?>

                    <!--                    <div class="u-column2 col-2 woocommerce-Address">
                                            <header class="woocommerce-Address-title title">
                                                <h3 class="title2">Shipping address</h3>
                                                <a href="shipping-address.php" class="edit">Edit</a>
                                            </header>
                                            <address>You have not set up this type of address yet.</address>
                                        </div>-->


                </div>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery(document).ready(function () {
        jQuery('input[type=radio][name=default-address]').change(function () {
            showLoader();
            var idd = jQuery(this).val();
            jQuery.ajax({
                url: '<?= Yii::$app->homeUrl; ?>myaccounts/user/change-status',
                type: "POST",
                data: {id: idd},
                success: function (data) {
                    if (data == 1) {
//                            $("#useraddress-" + idd).remove();
//                            location.reload();
                    }
                    hideLoader();
                }
            });
        });
        jQuery('.delete-address').on('click', function () {
            if (confirm("Are you sure you want to delete this?"))
            {
                var idd = jQuery(this).attr('data-val');
                jQuery.ajax({
                    url: '<?= Yii::$app->homeUrl; ?>myaccounts/user/remove-address',
                    type: "POST",
                    data: {id: idd},
                    success: function (data) {
                        if (data == 1) {
                            jQuery("#useraddress-" + idd).remove();
                            location.reload();
                        }
                    }
                });
            }
        });
    });
</script>

