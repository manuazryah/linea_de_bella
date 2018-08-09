<?php

use yii\helpers\Html;
?>

<html>

    <head>
        <title>Forgot Password</title>
        <link href="<?= Yii::$app->homeUrl; ?>css/email.css" rel="stylesheet">
        <style>
            .content{
                margin-left: 0px;
                background: #101010;
                color: #c5c2c2;
                padding: 35px 15px;
            }
            .content img{
                margin-left: auto;
                margin-right: auto;
                text-align: center;
                display: table-cell;
                vertical-align: middle
            }
            .content a{
                display: inline-block;cursor: pointer;
                padding: 6px 12px;
                font-size: 13px;
                line-height: 1.42857143;
                text-decoration: none;
                color: #fff;
                border: 1px solid transparent;
                border-color: #b8933d;
                background-color: #b8933d;
            }
            .content h2{
                text-align: center;
                font-size: 16px;
            }
            .content p{
                text-align: center;
                font-size: 12px;
            }
        </style>
    </head>

    <body>
        <div class="mail-body" style="margin: auto;width: 50%;border: 1px solid #9e9e9e;">
            <div class="content">
                <?php echo Html::img('http://' . Yii::$app->request->serverName . '/' . Yii::$app->homeUrl . 'images/logo.png', $options = ['width' => '200px']) ?>
                <h2>FORGOT YOUR PASSWORD ?</h2>
                <p>You are requested to reset your password for your Linea De Bella User Login. Click the below button to reset it</p>
                <p style="margin-bottom: 0px;"><a href="http://<?= Yii::$app->request->serverName ?><?= Yii::$app->homeUrl ?>site/new-password?token=<?= $val ?>">Reset Password</a></p>
            </div>
        </div>



    </body>
</html>