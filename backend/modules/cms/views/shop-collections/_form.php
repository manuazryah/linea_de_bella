<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ShopCollections */
/* @var $form yii\widgets\ActiveForm */
if ($model->id == 1 || $model->id == 2) {
    $label = 'Image (File Size : 800x450)';
} else {
    $label = 'Image (File Size : 900x1130)';
}
?>

<div class="shop-collections-form form-inline">

    <?php $form = ActiveForm::begin(); ?>

    <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>    <?= $form->field($model, 'image')->fileInput()->label($label) ?>

        <?php
        if (!empty($model->image)) {
            ?>

            <img src="<?= Yii::$app->homeUrl ?>../uploads/cms/shop_collections/<?= $model->id ?>/small.<?= $model->image; ?>" />
            <?php
        }
        ?>
    </div>
    <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    </div>
    <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
        <?= $form->field($model, 'sub_title')->textInput(['maxlength' => true]) ?>

    </div>
    <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
        <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    </div>
    <div class='col-md-12 col-sm-12 col-xs-12'>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-success', 'style' => 'float:right;']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
