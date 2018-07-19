<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\CountryCode;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;

if (isset($meta_title) && $meta_title != '')
    $this->title = $meta_title;
else
    $this->title = 'Linea De Bella';
?>
<section class="in-login-section"><!--in-login-section-->
    <div class="container">
        <div class="main-login-box">
            <div class="top-head-login">
                <h3 class="head">SIGN UP</h3>
                <a href="#" class="link">Login</a>
                <div class="clear"></div>
            </div>
            <div class="main-form-box">
                <?php
                $form = ActiveForm::begin(['id' => 'sign_up_form', 'options' => [
                                'class' => 'in-main-form'
                ]]);
                ?>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>First Name*</label>
                            <?= $form->field($model, 'first_name')->textInput(['placeholder' => ''])->label(FALSE) ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Last Name*</label>
                            <?= $form->field($model, 'last_name')->textInput(['placeholder' => ''])->label(FALSE) ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Email*</label>
                    <?= $form->field($model, 'email')->textInput(['placeholder' => ''])->label(FALSE) ?>
                </div>
                <label>Mobile*</label>
                <?php $countrie_code = ArrayHelper::map(CountryCode::findAll(['status' => 1]), 'id', 'country_code'); ?>
                <div class="form-no">
                    <div class="row">
                        <div class="col-sm-2 col-3">
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
                        <div class="col-sm-10 col-9">
                            <div class="form-group">
                                <?= $form->field($model, 'mobile_no')->textInput(['placeholder' => 'Mobile No', 'style' => ''])->label(FALSE) ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <?php
                    $model->gender = 1;
                    ?>
                    <?= $form->field($model, 'gender')->radioList(array('1'=>'Male',2=>'Female'))->label(false); ?>
                </div>
                <div class="clear"></div>
                <div class="form-group">
                    <label>Date of Birth</label>
                    <?php
                    $model->dob = date('d-M-Y');
                    ?>
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
                    <label>Password*</label>
                    <?= $form->field($model, 'password')->passwordInput()->label(FALSE) ?>
                </div>
                <div class="form-group">
                    <label>Confirm Password*</label>
                    <?= $form->field($model, 'password_repeat')->passwordInput(['placeholder' => ''])->label(FALSE) ?>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'submit']) ?>
                </div>
                <div class="cont-box">
                    <small>By clicking the 'Sign Up' button, you confirm that you accept our <a href="#">Terms of use and Privacy Policy </a></small>
                    <p>Have an account? <a href="" >Log In</a></p>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</section><!--in-login-section-->
