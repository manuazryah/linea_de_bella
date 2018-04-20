<div class="information-contact pbtm40">
    <div class="content_breadcum" style="background-position: 50% 0px;"></div>
    <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid  vc_custom_ vc_row-has-fill   vc_hidden" style="position: relative; left: 0px; box-sizing: border-box; width: 1349px; padding-left: 0px; padding-right: 0px; margin: 0 auto; margin-bottom: 35px; margin-top: 15px; background: #1a1a1a; opacity: 1; ">
        <div class="container">
            <!--<h1 class="page-title">Contact Us</h1>-->
            <ul class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-home"></i></a></li>
                <li class="active"><a>My Account</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?= Yii::$app->controller->renderPartial('_leftside_menu'); ?>
            <div id="content" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">

                <h3 class="title2">My Account</h3>
                <p>Hello 
                    <strong><?= Yii::$app->user->identity->first_name?></strong> (not 
                    <strong><?= Yii::$app->user->identity->first_name?></strong>? 
                    <a href="<?= yii::$app->homeUrl.'site/logout'?>">Log out</a>)
                </p>
                <p>From your account dashboard you can view your 
                    <a href="<?= yii::$app->homeUrl.'my-orders'?>">recent orders</a>, manage your 
                    <a href="<?= yii::$app->homeUrl.'adresses'?>">shipping and billing addresses</a> and 
                    <a href="account-details.php">edit your password and account details</a>.
                </p>
            </div>
        </div>
    </div>
</div>