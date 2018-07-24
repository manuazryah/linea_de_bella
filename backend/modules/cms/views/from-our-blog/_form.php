<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\FromOurBlog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="from-our-blog-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-3 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-3 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'canonical_name')->textInput(['maxlength' => true, 'readOnly' => true]) ?>

        </div>
        <div class='col-md-3 col-sm-6 col-xs-12 left_padd'>    <?=
            $form->field($model, 'blog_date')->widget(DatePicker::className(), [
                'dateFormat' => 'dd-MM-yyyy',
                'options' => ['class' => 'form-control']
            ])
            ?>
        </div>
        <div class='col-md-3 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?>

        </div>
    </div>
    <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>   
            <?= $form->field($model, 'meta_description')->textarea(['rows' =>4]) ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>   
            <?= $form->field($model, 'meta_keyword')->textarea(['rows' => 4]) ?>

        </div>
    </div>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
             <?= $form->field($model, 'content_for_home_page')->textarea(['rows' => 2]) ?>

        </div>
    </div>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
            <?=
            $form->field($model, 'content')->widget(CKEditor::className(), [
                'options' => ['rows' => 6],
                'preset' => 'custom'
            ])
            ?>

        </div>
    </div>
    <div class="row">
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>   
            <?= $form->field($model, 'image')->fileInput() ?>

            <?php
            if (!empty($model->image)) {
                ?>

                <img src="<?= Yii::$app->homeUrl ?>../uploads/cms/from-blog/<?= $model->id ?>/small.<?= $model->image; ?>" />
                <?php
            }
            ?>

        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'status')->dropDownList(['1' => 'Enable', '0' => 'Disable']) ?>

        </div>
    </div>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12'>
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-success', 'style' => 'float:right;']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
<script>
    $(document).ready(function () {
        $('#fromourblog-title').keyup(function () {
            var name = slug($(this).val());
//            var size= slug($('#product-size').val());
//            var canonical= name+-+size;
//            $('#product-canonical_name').val(canonical);
            $('#fromourblog-canonical_name').val(slug($(this).val()));
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
