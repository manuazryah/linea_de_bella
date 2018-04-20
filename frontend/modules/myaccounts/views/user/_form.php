<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Emirates;
?>

<!--<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">-->
<?php
$form = ActiveForm::begin(
                [
                    'id' => 'change-address',
                    'method' => 'post',
                    'options' => [
                        'class' => 'form-horizontal'
                    ]
                ]
);
?>


<fieldset id="address">
    <div class="form-group required">
        <!--<label class="col-sm-2 control-label" for="input-firstname">Old Password</label>-->
        <div class="col-sm-10">
            <!--<input type="password" name="old-password" class="form-control"  placeholder="********" id="change-old-password">-->
            <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => 'First Name'])->label(FALSE) ?>
        </div>
    </div>
    <div class="form-group required">
        <!--<label class="col-sm-2 control-label" for="input-lastname">New Password</label>-->
        <div class="col-sm-10">
            <?= $form->field($model, 'address')->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => 'Address'])->label(FALSE) ?>
            <!--<input type="password" class="form-control" name="new-password"  placeholder="********" id="change-new-password">-->
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label" for="input-company">Confirm Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control"  name="confirm-password" placeholder="********" id="change-confirm-password">
        </div>
    </div>

    <div class="buttons submit-btn">
        <div class="pull-right">
            <input class="btn btn-primary shadowbtn" type="submit" value="Change Passwoord">
        </div>
    </div>

</fieldset>

<?php ActiveForm::end(); ?>

