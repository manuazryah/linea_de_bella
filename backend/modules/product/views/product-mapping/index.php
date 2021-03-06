<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Category;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProductMappingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Product Mappings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-mapping-index">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                </div>
                <div class="panel-body">


                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



                    <?= Html::a('<i class="fa-th-list"></i><span> Create Product Mapping</span>', ['create'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                    <button class="btn btn-white" id="search-option" style="float: right;">
                        <i class="linecons-search"></i>
                        <span>Search</span>
                    </button>
                    <div class="table-responsive" style="border: none">
                        <?=
                        GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],
//                                'id',
                                [
                                    'attribute' => 'category',
                                    'filter' => ArrayHelper::map(Category::find()->all(), 'id', 'category'),
                                     'value' => function($data) {
                                        return Category::findOne($data->category)->category;
                                    }
                                ],
//                                'subcategory',
                                [
                                    'attribute' => 'product_id',
                                    'value' => function($model, $key, $index, $column) {
                                        return $model->getProducts($model->product_id);
                                    },
                                    'filter' => ArrayHelper::map(common\models\Product::find()->asArray()->orderBy(['product_name'=>ASC])->all(), 'id', 'product_name'),
                                ],
//                                'variants',
                                // 'status',
                                // 'CB',
                                // 'UB',
                                // 'DOC',
                                // 'DOU',
                                ['class' => 'yii\grid\ActionColumn',
                                    'template' => '{update}{delete}',
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

<script>
    $(document).ready(function () {
        $(".filters").slideToggle();
        $("#search-option").click(function () {
            $(".filters").slideToggle();
        });
    });
</script>

