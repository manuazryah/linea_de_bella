<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Brand;

/* @var $this yii\web\View */
/* @var $model common\models\OurTopCollection */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="our-top-collection-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class='col-md-3 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'image')->fileInput()->label('Image<i> (400*450)</i>') ?>
        <?php
        if ($model->isNewRecord)
            echo "";
        else {
            if (!empty($model->image)) {
                ?>

                <img src="<?= Yii::$app->homeUrl ?>../uploads/cms/our_top_collection/<?= $model->id ?>/small.<?= $model->image; ?>" />
                <?php
            }
        }
        ?>
    </div>
    <div class='col-md-3 col-sm-6 col-xs-12 left_padd'> 
        <?= $form->field($model, 'collection')->dropDownList(ArrayHelper::map(Brand::find()->all(), 'id', 'brand'), ['prompt' => 'select']) ?>

    </div>
    <div class='col-md-3 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'alt_tag')->textInput(['maxlength' => true]) ?>

    </div>
    <div class='col-md-3 col-sm-6 col-xs-12 left_padd'>   <?= $form->field($model, 'status')->dropDownList(['1' => 'Enabled', '0' => 'Disabled']) ?>

    </div>
    <div class="clear-fix"></div>
    <div class='col-md-12 col-sm-12 col-xs-12'>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-success', 'style' => 'float:right;']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
