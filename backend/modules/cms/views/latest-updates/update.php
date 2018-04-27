<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\LatestUpdates */

$this->title = 'Update Latest Updates: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Latest Updates', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="row">
        <div class="col-md-12">

                <div class="panel panel-default">
                        <div class="panel-heading">
                                <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                        </div>
                        <div class="panel-body">
				<?=  Html::a('<i class="fa-th-list"></i><span> Manage Latest Updates</span>', ['index'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                                <div class="panel-body"><div class="latest-updates-create">
						<?= $this->render('_form', [
                                                'model' => $model,
                                                ]) ?>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</div>
