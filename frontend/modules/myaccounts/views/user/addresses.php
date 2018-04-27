<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Emirates;
use common\models\CountryCode;
?>
<div class="information-contact pbtm40">
    <div class="content_breadcum" style="background-position: 50% 0px;"></div>
    <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid  vc_custom_ vc_row-has-fill   vc_hidden" style="position: relative; left: 0px; box-sizing: border-box; width: 1349px; padding-left: 0px; padding-right: 0px; margin: 0 auto; margin-bottom: 35px; margin-top: 15px; background: #1a1a1a; opacity: 1; ">
        <div class="container">
            <!--<h1 class="page-title">Contact Us</h1>-->
            <ul class="breadcrumb">
                <li>
                    <?= Html::a('<i class="fa fa-home"></i>', ['/site/index']) ?>
                </li>
                <li class="active"><a>Addresses</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?= Yii::$app->controller->renderPartial('_leftside_menu'); ?>
            <div id="content" class="col-lg-9 col-md-9 col-sm-9 col-xs-12 content-myaccount">
               	<h3 class="title2">Addresses</h3>
                <p>The following addresses will be used on the checkout page by default.</p>
                <div class="u-columns woocommerce-Addresses col2-set addresses">
                    <div class="u-column1 col-1 woocommerce-Address">
                        <header class="woocommerce-Address-title title">
                        </header>
                        <?php $form = ActiveForm::begin(); ?>
                        <fieldset id="address">
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-firstname">Name</label>
                                <div class="col-sm-10">
                                    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label(FALSE) ?>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-lastname">Address</label>
                                <div class="col-sm-10">
                                    <?= $form->field($model, 'address')->textInput(['maxlength' => true])->label(FALSE) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-email">Landmark</label>
                                <div class="col-sm-10">
                                    <?= $form->field($model, 'landmark')->textInput(['maxlength' => true])->label(FALSE) ?>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-telephone">Location</label>
                                <div class="col-sm-10">
                                    <?= $form->field($model, 'location')->textInput(['maxlength' => true])->label(FALSE) ?>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-telephone">Emirate</label>
                                <div class="col-sm-10">
                                    <?= $form->field($model, 'emirate')->dropDownList(ArrayHelper::map(Emirates::find()->all(), 'id', 'name'), ['prompt' => 'select'])->label(FALSE); ?>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-telephone">Post Code</label>
                                <div class="col-sm-10">
                                    <?= $form->field($model, 'post_code')->textInput(['maxlength' => true])->label(FALSE) ?>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-telephone">Mobile</label>
                                <div class="col-sm-10">
                                    <?php $countrie_code = ArrayHelper::map(CountryCode::findAll(['status' => 1]), 'id', 'country_code'); ?>
                                    <select class="day" id="cntry_code_id"style="position: absolute; border-right: 1px solid #d1d2d0;padding-top: 7px;padding-bottom: 6px;" name="SignupForm[country_code]">
                                        <?php
                                        foreach ($countrie_code as $key => $countrie_cod) {
                                            ?>
                                            <option value="<?= $key ?>"><?= $countrie_cod ?></option>
                                        <?php }
                                        ?>
                                    </select>
                                    <?= $form->field($model, 'mobile_number')->textInput(['placeholder' => 'Mobile No', 'style' => 'padding-left: 70px;'])->label(FALSE) ?>
                                </div>
                            </div>
                            <div class="form-group required">
                                <div class="col-sm-12">
                                    <div class="pull-right">
                                        <?= Html::submitButton('Save Address', ['class' => 'btn btn-primary shadowbtn']) ?>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 user-addresses">
                    <?php
                    if (!empty($user_address)) {
                        ?>
                        <h6>Your Saved Addresses:</h6>
                        <?php
                        foreach ($user_address as $value) {
                            ?>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 lit-blue" id="useraddress-<?= $value->id ?>">
                                <div class="user-adddress">
                                    <div class="user-address-hei">
                                        <p><strong><?= $value->name ?></strong></p>
                                        <p><?= $value->address ?></p>
                                        <p><?= $value->landmark ?></p>
                                        <p><?= $value->location ?></p>
                                        <p><?= $value->post_code ?></p>
                                        <p><?= $value->mobile_number ?></p>
                                    </div>
                                    <label id="Radio0">
                                        <input type="radio" name="default-address" value="<?= $value->id ?>" <?php
                                        if ($value->status == 1) {
                                            echo ' checked';
                                        }
                                        ?> data-waschecked="true" />
                                        Default address
                                    </label>
                                    <a href="" class="delete-address" data-val="<?= $value->id ?>"><i class="fa fa-trash" aria-hidden="true"></i>Delete address</a>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        ?>
                        <h6 style="text-transform: none;">You have no saved addresses:</h6>
                    <?php }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery(document).ready(function () {
        jQuery('input[type=radio][name=default-address]').change(function () {
            var idd = jQuery(this).val();
            jQuery.ajax({
                url: '<?= Yii::$app->homeUrl; ?>myaccounts/user/change-status',
                type: "POST",
                data: {id: idd},
                success: function (data) {
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