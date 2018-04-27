<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

$action = Yii::$app->controller->id . '/' . Yii::$app->controller->action->id;
?>

<aside id="column-left" class="col-lg-3 col-md-3 col-sm-3">
    <div class="box">
        <div class="box-heading"><span>ACCOUNT</span>
        </div>
        <div class="list-group">
            <?= Html::a('My Account', ['/myaccounts/user/index'], ['class' => '' . $action == 'user/index' ? 'list-group-item active' : 'list-group-item']) ?>
            <?= Html::a('Change Password', ['/myaccounts/user/change-password'], ['class' => '' . $action == 'user/change-password' ? 'list-group-item active' : 'list-group-item']) ?>
            <?= Html::a('Address Book', ['/myaccounts/user/user-address'], ['class' => '' . $action == 'user/user-address' ? 'list-group-item active' : 'list-group-item']) ?>
            <?= Html::a('My Orders', ['/myaccounts/user/my-orders'], ['class' => '' . $action == 'user/my-orders' ? 'list-group-item active' : 'list-group-item']) ?>
            <a class="list-group-item" href="">Logout</a>
        </div>
    </div>
    <span class="latest_default_width" style="display:none; visibility:hidden"></span>
</aside>