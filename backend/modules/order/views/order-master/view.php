<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use common\models\User;
use common\models\Product;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\OrderMasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Order Details';
$this->params['breadcrumbs'][] = $this->title;

if (isset($orderid))
        $order_master = common\models\OrderMaster::find()->where(['order_id' => $orderid])->one();
?>
<style>
        .summary{
                display: none;
        }
</style>
<div class="order-master-index">

        <div class="row">
                <div class="col-md-12">

                        <div class="panel panel-default">
                                <div class="panel-heading">
                                        <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                                </div>
                                <div class="panel-body">


                                        <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>



                                        <?= Html::a('<i class="fa-th-list"></i><span> Manage Order </span>', ['index'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                                        <div class="table-responsive" style="border: none">
                                                <!--                                                <button class="btn btn-white" id="search-option" style="float: right;">
                                                                                                        <i class="linecons-search"></i>
                                                                                                        <span>Search</span>
                                                                                                </button>-->
                                                <?php
                                                if (!empty($order_master)) {
                                                        $bill_address = \common\models\UserAddress::findOne($order_master->bill_address_id);
                                                        $customer = User::findOne($order_master->user_id);
                                                        ?>
                                                        <div class="row" style="margin-top:10px">
                                                                <div class="col-md-4 col-lg-4 bill-address-div">
                                                                        <b class="bill-address">Order Details :</b>
        <!--                                                                        <p class="first-p"> Order No: 82364</p>
                                                                        <p>Customer : Testing tset</p>
                                                                        <p>Net amount : 191,00</p>-->
                                                                        <table style="margin-top:5px">
                                                                                <tr>
                                                                                        <td>Order No</td>
                                                                                        <td> : </td>
                                                                                        <td><?= $order_master->order_id ?></td>
                                                                                </tr>

                                                                                <tr>
                                                                                        <td>Customer</td>
                                                                                        <td> : </td>
                                                                                        <td><?= $customer->first_name . ' ' . $customer->last_name ?></td>
                                                                                </tr>

                                                                                <tr>
                                                                                        <td>Net Amount</td>
                                                                                        <td> : </td>
                                                                                        <td><?= $order_master->net_amount ?></td>
                                                                                </tr>
                                                                        </table>
                                                                </div>


                                                                <div class="col-md-4 col-lg-4 bill-address-div">
                                                                        <b class="bill-address">Billing Address :</b>
                                                                        <p class="first-p" style=""><?= $bill_address->address ?></p>
                                                                        <p ><?= $bill_address->location ?></p>
                                                                        <p ><?= $bill_address->landmark ?></p>
                                                                        <p >Tel : <?= $bill_address->mobile_number ?></p>
                                                                </div>
                                                                <?php
                                                                $ship_address = \common\models\UserAddress::findOne($order_master->ship_address_id);
                                                                if (!empty($ship_address)) {
                                                                        ?>
                                                                        <div class="col-md-4 col-lg-4 bill-address-div" >
                                                                                <b class="bill-address">Shipping Address :</b>
                                                                                <p class="first-p" style=""><?= $ship_address->address ?></p>
                                                                                <p ><?= $ship_address->location ?></p>
                                                                                <p ><?= $ship_address->landmark ?></p>
                                                                                <p >Tel : <?= $ship_address->mobile_number ?></p>
                                                                        </div>
                                                                <?php } ?>

                                                        </div>
                                                <?php } ?>
                                                <div style="margin-top: 10px">
                                                        <?=
                                                        GridView::widget([
                                                            'dataProvider' => $dataProvider,
                                                            'filterModel' => $searchModel,
                                                            'columns' => [
                                                                    ['class' => 'yii\grid\SerialColumn'],
                                                                'order_id',
                                                                    [
                                                                    'attribute' => 'product_id',
                                                                    'header' => 'Product',
                                                                    'value' => function($data) {
                                                                            if ($data->item_type == 1) {
                                                                                    $name = 'Custom Perfume';
                                                                            } else {
                                                                                    $name = Product::findOne($data->product_id)->product_name;
                                                                            }
                                                                            return $name;
                                                                    }
                                                                ],
                                                                'quantity',
                                                                'amount',
                                                                'rate',
//
                                                                [
                                                                    'attribute' => 'status',
                                                                    'filter' => ['1' => 'Delivered', '0' => 'Not Delivered'],
                                                                    'value' => function($data) {
                                                                            return $data->status == 1 ? 'Delivered' : 'Not Delivered';
                                                                    }
                                                                ],
                                                                'delivered_date',
                                                                    [
                                                                    'class' => 'yii\grid\ActionColumn',
                                                                    'template' => '{view-more}',
                                                                    'buttons' => [
                                                                        'view-more' => function ($url, $model) {
                                                                                if ($model->item_type == 1) {
                                                                                        return Html::a('<span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>', $url, [
                                                                                                    'title' => Yii::t('app', 'view more'),
                                                                                                    'class' => '',
                                                                                        ]);
                                                                                }
                                                                        },
                                                                    ],
                                                                    'urlCreator' => function ($action, $model) {
                                                                            if ($action === 'view-more') {
                                                                                    $url = Url::to(['view-more', 'id' => $model->id]);
                                                                                    return $url;
                                                                            }
                                                                    }
                                                                ],
                                                            ],
                                                        ]);
                                                        ?>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</div>

<script>
        $(document).ready(function () {
                $(".filters").slideToggle();
                $("#search-option").click(function () {
                        $(".filters").slideToggle();
                });
        });
</script>

