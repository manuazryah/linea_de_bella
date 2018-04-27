<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ShopByCategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shop-by-category-form form-inline">

    <?php $form = ActiveForm::begin(); ?>

    <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>    <?= $form->field($model, 'image')->fileInput()->label('Image (File Size : 570x362)') ?>

        <?php
        if (!empty($model->image)) {
            ?>

            <img src="<?= Yii::$app->homeUrl ?>../uploads/cms/our_collections/<?= $model->id ?>/small.<?= $model->image; ?>" />
            <?php
        }
        ?>
    </div>
    <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    </div>
    <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
        <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>
    </div>
    <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
        <?= $form->field($model, 'description')->textArea(['rows' => '6'], ['maxlength' => true]) ?>
    </div>
    <div class='col-md-12 col-sm-6 col-xs-12'>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-success', 'style' => 'float:right;']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
