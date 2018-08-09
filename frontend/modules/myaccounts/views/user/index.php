<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\CountryCode;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;

$this->title = 'My Account';
$this->params['breadcrumbs'][] = $this->title;
//echo '<pre>';
//print_r($model);exit;
?>
<section class="in-my-account-section"><!--in-orders-section-->
    <div class="container">
        <div class="account-top-main-head">
            <h2 class="head">Edit Profile</h2>
            <div class="account-breadcrumb"><?= Html::a('Home', ['/site/index'], ['title' => 'Home']) ?><i>/</i><span>Edit Profile</span> </div>
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
                    <div class="form-group">
                        <label>First Name*</label>
                        <?= $form->field($model, 'first_name')->textInput(['placeholder' => ''])->label(FALSE) ?>
                    </div>
                    <div class="form-group">
                        <label>Last Name*</label>
                        <?= $form->field($model, 'last_name')->textInput(['placeholder' => '', 'id' => 'input-lastname'])->label(FALSE) ?>
                    </div>
                    <div class="form-group">
                        <label>Email*</label>
                        <?= $form->field($model, 'email')->textInput(['placeholder' => ''])->label(FALSE) ?>
                    </div>
                    <?php $countrie_code = ArrayHelper::map(CountryCode::findAll(['status' => 1]), 'id', 'country_code'); ?>
                    <div class="form-group">
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
                                    <?= $form->field($model, 'mobile_no')->textInput(['placeholder' => 'Mobile No', 'style' => ''])->label(FALSE) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <?= $form->field($model, 'gender')->radioList(array('1' => 'Male', 2 => 'Female'))->label(false); ?>
                    </div>
                    <div class="form-group">
                        <label>Date of Birth</label>
                        <?=
                        $form->field($model, 'dob')->widget(DatePicker::classname(), [
                            'type' => DatePicker::TYPE_INPUT,
                            'pluginOptions' => [
                                'autoclose' => true,
                                'format' => 'dd-M-yyyy',
                            ]
                        ])->label(FALSE);
                        ?>
                    </div>

                    <div class="form-group">
                        <?= Html::submitButton('Save Changes', ['class' => 'submit', 'style' => '']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>

            </div>
        </div>	
    </div>
</section><!--in-orders-section-->
