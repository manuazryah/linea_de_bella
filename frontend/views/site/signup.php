<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

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
                                <form class="in-main-form">
                                        <div class="row">
                                                <div class="col-sm-6">
                                                        <div class="form-group">
                                                                <label>First Name*</label>
                                                                <input name="" type="text" class="form-control" >
                                                        </div>
                                                </div>
                                                <div class="col-sm-6">
                                                        <div class="form-group">
                                                                <label>Last Name*</label>
                                                                <input name="" type="text" class="form-control" >
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label>Email*</label>
                                                <input name="" type="text" class="form-control" >
                                        </div>
                                        <label>Mobile*</label>
                                        <div class="form-no">
                                                <div class="row">
                                                        <div class="col-sm-2 col-3">
                                                                <div class="form-group">

                                                                        <input name="" type="text" class="form-control" placeholder="-91">
                                                                </div>
                                                        </div>
                                                        <div class="col-sm-10 col-9">
                                                                <div class="form-group">

                                                                        <input name="" type="text" class="form-control" >
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label class="sub-label2">
                                                        <input name="" type="radio" value="1" checked="checked">
                                                        <span>Male</span></label>
                                                <label class="sub-label2">
                                                        <input name="" type="radio" value="2">
                                                        <span> Female</span></label>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="form-group">
                                                <label>Date of Birth</label>
                                                <input name="" type="text" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                                <label>Password*</label>
                                                <input name="" type="text" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                                <label>Confirm Password*</label>
                                                <input name="" type="text" class="form-control" >
                                        </div>

                                        <div class="form-group">
                                                <input name="" type="submit" value="Sign Up" class="submit">
                                        </div>
                                        <div class="cont-box">
                                                <small>By clicking the 'Sign Up' button, you confirm that you accept our <a href="#">Terms of use and Privacy Policy </a></small>
                                                <p>Have an account? <a href="" >Log In</a></p>
                                        </div>
                                </form>
                        </div>
                </div>
        </div>
</section><!--in-login-section-->
