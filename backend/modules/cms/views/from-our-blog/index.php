<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DemoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'From Our Blogs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="demo-index">

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                </div>
                <div class="panel-body table-responsive">

                    <?= Html::a('<i class="fa-th-list"></i><span> Create Blog</span>', ['create'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
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
                                [
                                    'header' => 'Image',
                                    'attribute' => 'image',
                                    'format' => 'raw',
                                    'value' => function ($data) {
                                        if (!empty($data->image))
                                            $img = '<img src="' . Yii::$app->homeUrl . '../uploads/cms/from-blog/' . $data->id . '/small.' . $data->image . '"/>';
                                        if (!empty($img))
                                            return $img;
                                        else
                                            return '';
                                    },
                                    'filter' => '',
                                ],
                                'title',
                                'blog_date',
                                [
                                    'attribute' => 'content',
                                    'format' => 'raw',
                                    'value' => function($data) {

                                        if (strlen($data->content) > 50) {
                                            $str = substr($data->content, 0, strpos(wordwrap($data->content, 50), "\n"));
                                            $dot = ' ....';
                                        } else {
                                            $str = $data->content;
                                            $dot = '';
                                        }
                                        return $str . $dot;
                                    },
                                ],
                                [
                                    'class' => 'yii\grid\ActionColumn',
                                    'header' => 'Actions',
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

