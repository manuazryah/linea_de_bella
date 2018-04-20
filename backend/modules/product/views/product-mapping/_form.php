<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\ProductMapping;

/* @var $this yii\web\View */
/* @var $model common\models\ProductMapping */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-mapping-form form-inline">

    <?php $form = ActiveForm::begin(); ?>

    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'> 
        <?= $form->field($model, 'category')->dropDownList(ArrayHelper::map(common\models\Category::find()->all(), 'id', 'category'), ['prompt' => 'select category', 'class' => 'form-control']) ?>

    </div>
    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>  
        <?php
        $array = array();
        if (!$model->isNewRecord) {
            if (isset($model->product_id)) {
                $model->product_id = explode(',', $model->product_id);
            }
            $filter = ProductMapping::mapped_edit($model->id);
            $array = common\models\Product::find()->where(['status' => 1, 'category' => $model->category])->andWhere(['not in', 'id', $filter])->all();
        }
        ?>
        <?= $form->field($model, 'product_id')->dropDownList(ArrayHelper::map($array, 'id', 'product_name'), ['prompt' => 'select Product', 'class' => 'form-control', 'multiple' => 'multiple']) ?>

    </div>
    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>   
        <?= $form->field($model, 'status')->dropDownList(['1' => 'Enable', '0' => 'Disable']) ?>
    </div>
    <div class='col-md-4 col-sm-6 col-xs-12' style="float:right;">
        <div class="form-group" style="float: right;">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-success', 'style' => 'margin-top: 18px; height: 36px; width:100px;']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script>
    jQuery(document).ready(function ()
    {
        jQuery("#productmapping-category").select2({
            placeholder: 'Choose Category',
            allowClear: true
        }).on('select2-open', function ()
        {
            // Adding Custom Scrollbar
            $(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
        });
        jQuery("#productmapping-product_id").select2({
            placeholder: 'Choose product',
            allowClear: true
        }).on('select2-open', function ()
        {
            // Adding Custom Scrollbar
            $(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
        });
        $('#productmapping-category').change(function () {
            var cat = $(this).val();
            if (cat) {
                $.ajax({
                    url: homeUrl + 'product/product-mapping/ajaxproduct',
                    type: "post",
                    data: {cat: cat},
                    success: function (data) {
                        var $data = JSON.parse(data);
                        if ($data.msg === "success") {
                            $('#productmapping-product_id').html("").html($data.result);
//                            $('#product-prcat').append($('<option value="' + $data.id + '" selected="selected">' + $data.category + '</option>'));
//                    $('#'+form).val('');
//                    $('#subcategory-category_id').append($('<option value="' + $data.id + '" selected="selected">' + $data.category + '</option>'));
//                    $('#subcategory-category').val('');
//                            $('#modal-1').modal('toggle');
                        } else {
//                            alert($data.msg['category'] + ' or ' + $data.msg['category_code']);
                        }

                    }, error: function () {

                    }
                });
            } else {
                $('#productmapping-product_id').html("");
            }
        });
    });
</script>
