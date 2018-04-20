<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();
$nameAttribute = $generator->getNameAttribute();

echo "<?php\n";
?>

use yii\helpers\Html;
use <?= $generator->indexWidgetType === 'grid' ? "yii\\grid\\GridView" : "yii\\widgets\\ListView" ?>;
<?= $generator->enablePjax ? 'use yii\widgets\Pjax;' : '' ?>

/* @var $this yii\web\View */
<?= !empty($generator->searchModelClass) ? "/* @var \$searchModel " . ltrim($generator->searchModelClass, '\\') . " */\n" : '' ?>
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-index">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= "<?= " ?>Html::encode($this->title) ?></h3>


                </div>
                <div class="panel-body">

                    
                    <?php if (!empty($generator->searchModelClass)): ?>
                        <?= "    <?php " . ($generator->indexWidgetType === 'grid' ? "// " : "") ?>echo $this->render('_search', ['model' => $searchModel]); ?>
                    <?php endif; ?>



                    <?= "<?= " ?> Html::a('<i class="fa-th-list"></i><span> Create <?= Inflector::camel2words(StringHelper::basename($generator->modelClass)); ?></span>', ['create'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                    <button class="btn btn-white" id="search-option" style="float: right;">
                        <i class="linecons-search"></i>
                        <span>Search</span>
                    </button>
                    <div class="table-responsive" style="border: none">
                        <?= $generator->enablePjax ? '<?php Pjax::begin(); ?>' : '' ?>
                        <?php if ($generator->indexWidgetType === 'grid'): ?>
                            <?= "<?= " ?>GridView::widget([
                            'dataProvider' => $dataProvider,
                            <?= !empty($generator->searchModelClass) ? "'filterModel' => \$searchModel,\n        'columns' => [\n" : "'columns' => [\n"; ?>
                            ['class' => 'yii\grid\SerialColumn'],

                            <?php
                            $count = 0;
                            if (($tableSchema = $generator->getTableSchema()) === false) {
                                foreach ($generator->getColumnNames() as $name) {
                                    if (++$count < 6) {
                                        echo "            '" . $name . "',\n";
                                    } else {
                                        echo "            // '" . $name . "',\n";
                                    }
                                }
                            } else {
                                foreach ($tableSchema->columns as $column) {
                                    $format = $generator->generateColumnFormat($column);
                                    if (++$count < 6) {
                                        echo "            '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
                                    } else {
                                        echo "            // '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
                                    }
                                }
                            }
                            ?>

                            ['class' => 'yii\grid\ActionColumn'],
                            ],
                            ]); ?>
                        <?php else: ?>
                            <?= "<?= " ?>ListView::widget([
                            'dataProvider' => $dataProvider,
                            'itemOptions' => ['class' => 'item'],
                            'itemView' => function ($model, $key, $index, $widget) {
                            return Html::a(Html::encode($model-><?= $nameAttribute ?>), ['view', <?= $urlParams ?>]);
                            },
                            ]) ?>
                        <?php endif; ?>
                        <?= $generator->enablePjax ? '<?php Pjax::end(); ?>' : '' ?>
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

