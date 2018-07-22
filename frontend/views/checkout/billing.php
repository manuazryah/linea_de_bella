<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\components\CartSummaryWidget;
use common\models\Emirates;
use yii\helpers\ArrayHelper;

$this->title = 'Checkout';
?>
<!--banner-->
<section class="in-breadcrumb-section"><!--in-breadcrumb-section-->
    <div class="container">
        <div class="main-breadcrumb"><a href="index.html">Home</a><i>//</i><span>Check Out</span> </div>
    </div>
</section>
<!--in-breadcrumb-section-->
<section class="in-check-out-section"><!--in-orders-section-->
    <div class="container">

        <div class="row">

            <div class="col-lg-7">

                <div class="check-out-box-left">
                    <?php
                    $form = ActiveForm::begin(['options' => [
                                    'class' => 'in-main-form'
                    ]]);
                    ?>
                    <h2 class="head">Billing address</h2>
                    <div class="form-group">
                        <label>Billing Address*</label>
                        <select class="form-control" id="billing" name="UserAddress[billing]">
                            <option value=''>Select</option>
                            <?php foreach ($addresses as $address) { ?>
                                <option value="<?= $address->id ?>" ><?= $address->address . ', ' . $address->landmark . ', ' . $address->location ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="new-adders">OR ADD A NEW ADDRESS</div>
                    <h2 class="head">Address</h2>
                    <div class="form-group">
                        <label>Name</label>
                        <?= $form->field($model, 'name')->textInput(['class' => 'form-control billing'])->label(FALSE) ?>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <?= $form->field($model, 'address')->textInput(['class' => 'form-control billing'])->label(FALSE) ?>
                    </div>
                    <div class="form-group">
                        <label>Landmark</label>
                        <?= $form->field($model, 'landmark')->textInput(['class' => 'form-control billing'])->label(FALSE) ?>
                    </div>
                    <div class="form-group">
                        <label>Location</label>
                        <?= $form->field($model, 'location')->textInput(['class' => 'form-control billing'])->label(FALSE) ?>
                    </div>
                    <div class="form-group">
                        <label>Emirate</label>
                        <?= $form->field($model, 'emirate')->dropDownList(ArrayHelper::map(Emirates::find()->all(), 'id', 'name'), ['prompt' => 'select'])->label(FALSE); ?>
                    </div>
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <div class="row">
                            <div class="col-md-1">
                                <select class="day" style="position: absolute;border-right: 1px solid #d1d2d0;height: 33px;" id="useraddress-country_code" name="UserAddress[country_code]">
                                    <?php foreach ($country_codes as $country_code) { ?>
                                        <option value="<?= $country_code ?>" <?= $country_code == $model->country_code ? ' selected' : '' ?>><?= $country_code ?></option>
                                    <?php }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-11">
                                <?= $form->field($model, 'mobile_number')->textInput(['class' => 'form-control billing mobile', 'style' => 'padding-left: 70px'])->label(FALSE) ?>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <?= Html::submitButton('continue', ['class' => 'submit']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>

            </div>
            <div class="col-lg-5">
                <div class="check-out-list-produuct-right">
                    <?= CartSummaryWidget::widget(); ?>
                </div>
            </div>
        </div>
    </div>
</section><!--in-orders-section-->
<script>
    jQuery('#billing').on('change', function () {
        var id = jQuery(this).val();
        if (id === '') {
            jQuery('.billing').prop('readonly', false);
            jQuery('#useraddress-emirate').prop('disabled', false);
            jQuery('#useraddress-country_code').prop('disabled', false);
        } else {
            jQuery('.billing').prop('readonly', true);
            jQuery('#useraddress-emirate').prop('disabled', true);
            jQuery('#useraddress-country_code').prop('disabled', true);
        }
        changeaddress('useraddress', id);
    });

    function changeaddress(formclass, id) {
        jQuery.ajax({
            type: "POST",
            cache: 'false',
            async: false,
            url: homeUrl + 'checkout/getadress',
            data: {id: id}
        }).done(function (data) {
            var $data = JSON.parse(data);
            if ($data.rslt === "success") {
                jQuery('#' + formclass + '-name').val($data.name);
                jQuery('#' + formclass + '-address').val($data.address);
                jQuery('#' + formclass + '-landmark').val($data.landmark);
                jQuery('#' + formclass + '-location').val($data.location);
                jQuery('#' + formclass + '-emirate').val($data.emirate);
                jQuery('#' + formclass + '-mobile_number').val($data.mobile_number);
                jQuery('#' + formclass + '-country_code').val($data.country_code);

            } else {
                jQuery('#' + formclass + '-name').val('');
                jQuery('#' + formclass + '-address').val('');
                jQuery('#' + formclass + '-landmark').val('');
                jQuery('#' + formclass + '-location').val('');
                jQuery('#' + formclass + '-emirate').val('1');
                jQuery('#' + formclass + '-mobile_number').val('');
            }
        });
    }
</script>