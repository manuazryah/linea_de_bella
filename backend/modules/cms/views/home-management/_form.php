<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\HomeManagement */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="home-management-form form-inline">

        <?php $form = ActiveForm::begin(); ?>

        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'tittle')->textInput(['maxlength' => true]) ?>

        </div><div class='col-md-5 col-sm-6 col-xs-12 left_padd'>
                <?php
                if (isset($model->product_id) && $model->product_id != '')
                        $model->product_id = explode(',', $model->product_id);
                ?>
                <?= $form->field($model, 'product_id')->dropDownList(ArrayHelper::map(common\models\Product::find()->all(), 'id', 'product_name'), ['prompt' => 'select Product', 'class' => 'form-control', 'multiple' => 'multiple']) ?>

        </div>
        <div class='col-md-3 col-sm-6 col-xs-12' style="float:right;">
                <div class="form-group" style="float: right;">
                        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-success', 'style' => 'margin-top: 18px; height: 36px; width:100px;']) ?>
                </div>
        </div>

        <?php ActiveForm::end(); ?>

</div>

<script>
        $(document).ready(function () {
                $("#homemanagement-product_id").select2({
                        placeholder: 'Select',
                        allowClear: true
                }).on('select2-open', function ()
                {
                        // Adding Custom Scrollbar
                        $(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
                });
        });
</script>