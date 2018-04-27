<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LatestUpdates */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="latest-updates-form form-inline">

    <?php $form = ActiveForm::begin(); ?>

    <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    </div>
    <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
        <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
        <input type="hidden" id="latestupdates-date" class="form-control" name="LatestUpdates[date]" value="<?= date('Y-m-d') ?>">
    </div>
    <div class='col-md-12 col-sm-12 col-xs-12'>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-success', 'style' => 'float:right;']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
