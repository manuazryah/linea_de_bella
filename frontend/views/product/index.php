<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
//use yii\grid\GridView;
use yii\widgets\ListView;
use yii\helpers\ArrayHelper;
use common\models\Category;
use common\models\SubCategory;
use yii\helpers\Url;
use common\components\ProductLinksWidget;

if (isset($meta_title) && $meta_title != '')
        $this->title = $meta_title;
else
        $this->title = 'Linea De Bella';
        
if (!empty($id) && $id != null) {
        $collection = common\models\Brand::find()->where(['canonical_name' => $id])->one();
       
        $banner = Yii::$app->basePath . '/../uploads/cms/brand/' . $collection->id . '/large.' . $collection->banner_image;
        
        if (!file_exists($banner)) {
                $banner = Yii::$app->homeUrl . 'images/banner/in-banner.jpg';
        } else {
                $banner = Yii::$app->homeUrl . 'uploads/cms/brand/' . $collection->id . '/large.' . $collection->banner_image;
        }
} else {
        $banner = Yii::$app->homeUrl . 'images/banner/in-banner.jpg';
}        
?>

<section class="in-banner"><img src="<?= $banner ?>" class="img-fluid"></section>
<!--banner-->
<section class="in-breadcrumb-section"><!--in-breadcrumb-section-->
        <div class="container">
                <div class="main-breadcrumb"><a href="<?= Yii::$app->homeUrl ?>">Home</a><i>//</i><span>Products</span> </div>
        </div>
</section><!--in-breadcrumb-section-->

<section class="in-prduct-section"><!--home-prduct-section-->
        <div class="container">
                <div class="main-heading">
                        <h2 class="head-one">Our Collection</h2>
                        <h3 class="head-small">Linea De Bella</h3>
                </div>
                


                        <?=
                $dataProvider->totalcount > 0 ? ListView::widget([
                            'dataProvider' => $dataProvider,
                            'itemView' => '_view2',
                            'options' => [
                                'tag' => 'div',
                                'class' => 'row',
                                'id' => false
                            ],
                            'itemOptions' => [
                                'tag' => 'div',
                                'class' => 'col-lg-4 col-md-6'
                            ],
                            'pager' => [
                                'options' => ['class' => 'pagination'],
                                'prevPageLabel' => '<', // Set the label for the "previous" page button
                                'nextPageLabel' => '>', // Set the label for the "next" page button
                                'firstPageLabel' => '<<', // Set the label for the "first" page button
                                'lastPageLabel' => '>>', // Set the label for the "last" page button
                                'nextPageCssClass' => '>', // Set CSS class for the "next" page button
                                'prevPageCssClass' => '<', // Set CSS class for the "previous" page button
                                'firstPageCssClass' => '<<', // Set CSS class for the "first" page button
                                'lastPageCssClass' => '>>', // Set CSS class for the "last" page button
                                'maxButtonCount' => 5, // Set maximum number of page buttons that can be displayed
                            ],
                        ]) : $this->render('no_product');
                ?>



                
        </div>
</section>

<style>
        .summary{
                display:none;
        }
</style>