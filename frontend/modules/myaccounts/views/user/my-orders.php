<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\ListView;
use common\components\EmptyDataWidget;
?>
<section class="in-my-account-section"><!--in-orders-section-->
    <div class="container">
        <div class="account-top-main-head">
            <h2 class="head">My orders</h2>
            <div class="account-breadcrumb"><?= Html::a('Home', ['/site/index'], ['title' => 'Home']) ?><i>/</i><span>My Orders</span> </div>
            <div class="clear"></div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <?= Yii::$app->controller->renderPartial('_leftside_menu'); ?>
            </div>
            <div class="col-lg-8">
                <?php
                if ($dataProvider->totalCount > 0) {
                    ?>
                    <?=
                    ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemView' => 'my-order-items',
                        'pager' => [
                            'firstPageLabel' => 'first',
                            'lastPageLabel' => 'last',
                            'prevPageLabel' => '<',
                            'nextPageLabel' => '>',
                            'maxButtonCount' => 3,
                        ],
                    ]);
                    ?>
                    <?php
                } else {
                    ?>
                    <div class="orders-main-box empty-data">
                        <?= EmptyDataWidget::widget(['path' => Yii::$app->homeUrl . 'images/empty-cart.png', 'msg' => 'Your Orders is Empty']) ?>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>	
    </div>
</section><!--in-orders-section-->