<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Brand */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="brand-form form-inline">

        <?php $form = ActiveForm::begin(); ?>

        <div class='col-md-12 col-sm-6 col-xs-12 left_padd'>
                <?= $form->field($model, 'brand')->textInput(['maxlength' => true]) ?>

        </div>

        <div class='col-md-12 col-sm-6 col-xs-12 left_padd'>
                <?= $form->field($model, 'canonical_name')->textInput(['maxlength' => true, 'readonly' => true]) ?>

        </div>
        <div class='col-md-12 col-sm-6 col-xs-12 left_padd'>
                <?= $form->field($model, 'banner_image')->fileInput()->label('Image (File Size : 1920x903)') ?>
                <?php if (isset($model->banner_image)) { ?>
                        <img src="<?= Yii::$app->homeUrl ?>../uploads/cms/brand/<?= $model->id ?>/small.<?= $model->banner_image; ?>?<?= rand() ?>" width="300" height="110"/>

                        <?php
                } elseif (!empty($model->banner_image)) {
                        echo "";
                }
                ?>
        </div>

        <div class='col-md-12 col-sm-6 col-xs-12 left_padd'>
                <?= $form->field($model, 'status')->dropDownList(['1' => 'Enable', '0' => 'Disable']) ?>
        </div>
        <div class='col-md-12 col-sm-6 col-xs-12' >
                <div class="form-group" >
                        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-success', 'style' => 'margin-top: 18px; height: 36px; width:100px;']) ?>
                </div>
        </div>

        <?php ActiveForm::end(); ?>

</div>


<script>
        $(document).ready(function () {
                $('#brand-brand').keyup(function () {
                        var name = slug($(this).val());
                        $('#brand-canonical_name').val(slug($(this).val()));
                });
        });
        var slug = function (str) {
                var $slug = '';
                var trimmed = $.trim(str);
                $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
                        replace(/-+/g, '-').
                        replace(/^-|-$/g, '');
                return $slug.toLowerCase();
        }
</script>