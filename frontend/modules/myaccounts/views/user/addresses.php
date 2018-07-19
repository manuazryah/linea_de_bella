<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Emirates;
use common\models\CountryCode;
?>
<section class="in-my-account-section"><!--in-orders-section-->
    <div class="container">
        <div class="account-top-main-head">
            <h2 class="head">Addresses</h2>
            <div class="account-breadcrumb"><?= Html::a('Home', ['/site/index'], ['title' => 'Home']) ?><i>/</i><span>Addresses</span> </div>
            <div class="clear"></div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <?= Yii::$app->controller->renderPartial('_leftside_menu'); ?>
            </div>
            <div class="col-lg-8">

                <div class="account-main-box">
                    <?php
                    $form = ActiveForm::begin(['options' => [
                                    'class' => 'in-main-form'
                    ]]);
                    ?>
                    <?= \common\components\AlertMessageWidget::widget() ?>
                    <div class="form-group">
                        <label>Name*</label>
                        <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label(FALSE) ?>
                    </div>
                    <div class="form-group">
                        <label>Address*</label>
                        <?= $form->field($model, 'address')->textInput(['maxlength' => true])->label(FALSE) ?>
                    </div>
                    <div class="form-group">
                        <label>Landmark</label>
                        <?= $form->field($model, 'landmark')->textInput(['maxlength' => true])->label(FALSE) ?>
                    </div>
                    <div class="form-group">
                        <label>Location*</label>
                        <?= $form->field($model, 'location')->textInput(['maxlength' => true])->label(FALSE) ?>
                    </div>
                    <div class="form-group">
                        <label>Emirates*</label>
                        <?= $form->field($model, 'emirate')->dropDownList(ArrayHelper::map(Emirates::find()->all(), 'id', 'name'), ['prompt' => 'select'])->label(FALSE); ?>
                    </div>
                    <div class="form-group">
                        <label>Post Code*</label>
                        <?= $form->field($model, 'post_code')->textInput(['maxlength' => true])->label(FALSE) ?>
                    </div>
                    <div class="form-group">
                        <?php $countrie_code = ArrayHelper::map(CountryCode::findAll(['status' => 1]), 'id', 'country_code'); ?>
                        <label>Mobile*</label>
                        <div class="row">
                            <div class="col-sm-1 col-2">
                                <div class="form-group">
                                    <select id="cntry_code_id" name="SignupForm[country_code]">
                                        <?php
                                        foreach ($countrie_code as $key => $countrie_cod) {
                                            ?>
                                            <option value="<?= $key ?>"><?= $countrie_cod ?></option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-11 col-10">
                                <div class="form-group">
                                    <?= $form->field($model, 'mobile_number')->textInput(['placeholder' => 'Mobile No', 'style' => ''])->label(FALSE) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <?= Html::submitButton('Save Address', ['class' => 'submit', 'style' => '']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                    <?php
                    if (!empty($user_address)) {
                        ?>
                    <h6 class="address-head">Your Saved Addresses:</h6>
                        <div class="clear-fix"></div>
                        <?php
                    }
                    ?>
                    <div class="row user-addresses">
                        <?php
                        if (!empty($user_address)) {
                            ?>
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
                            <h6 class="address-head">You have no saved addresses:</h6>
                        <?php }
                        ?>

                    </div>
                </div>

            </div>
        </div>	
    </div>
</section><!--in-orders-section-->
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