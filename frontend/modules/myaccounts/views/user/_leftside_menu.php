<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

$action = Yii::$app->controller->id . '/' . Yii::$app->controller->action->id;
?>
<div class="orders-list-box">
    <h3 class="list-head">My Account</h3>
    <ul class="list">
        <li><?= Html::a('Edit Profile', ['/myaccounts/user/index'], ['class' => '' . $action == 'user/index' ? 'active' : '']) ?></li>
        <li><?= Html::a('Change Password', ['/myaccounts/user/change-password'], ['class' => '' . $action == 'user/change-password' ? 'active' : '']) ?></li>
        <li><?= Html::a('Address Book', ['/myaccounts/user/user-address'], ['class' => '' . $action == 'user/user-address' ? 'active' : '']) ?></li>
        <li><?= Html::a('My Orders', ['/myaccounts/user/my-orders'], ['class' => '' . $action == 'user/my-orders' ? 'active' : '']) ?></li>
        <?php
        echo '<li>'
        . Html::beginForm(['/site/logout'], 'post') . '<a>'
        . Html::submitButton(
                'Logout', ['style' => 'background: transparent;border: none;color: #717171;padding: 0px;','class'=>'log-out']
        ) . '</a>'
        . Html::endForm()
        . '</li>';
        ?>
    </ul>
</div>