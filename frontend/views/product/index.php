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

if (isset($meta_title) && $meta_title != '')
    $this->title = $meta_title;
else
    $this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php
$current_action = Yii::$app->controller->action->id; // controller action id
$gender_params = \yii::$app->getRequest()->getQueryParams();

$exclusive_brands_sub = Category::find()->where(['status' => 1, 'main_category' => 1])->all();
$brands_sub = Category::find()->where(['status' => 1, 'main_category' => 2])->all();
?>
<style>
    .summary{
        display: none;
    }
    .glyphicon {
        margin-right: 5px;
    }
    .thumbnail {
        margin-bottom: 20px;
        padding: 0px;
        -webkit-border-radius: 0px;
        -moz-border-radius: 0px;
        border-radius: 0px;
    }
    .item.list-group-item {
        float: none;
        width: 100%;
        background-color: #fff;
        margin-bottom: 10px;
    }
    .item.list-group-item:nth-of-type(odd):hover, .item.list-group-item:hover {
        background: #428bca;
    }
    .item.list-group-item .list-group-image {
        margin-right: 10px;
    }
    .item.list-group-item .thumbnail {
        margin-bottom: 0px;
    }
    .item.list-group-item .caption {
        padding: 9px 9px 0px 9px;
    }
    .item.list-group-item:nth-of-type(odd) {
        background: #eeeeee;
    }
    .item.list-group-item:before, .item.list-group-item:after {
        display: table;
        content: " ";
    }
    .item.list-group-item img {
        float: left;
    }
    .item.list-group-item:after {
        clear: both;
    }
    .list-group-item-text {
        margin: 0 0 11px;
    }
</style>
<div class="in-banner"> <img class="img-responsive" src="<?= yii::$app->homeUrl; ?>images/banner/banner4men.jpg"/> </div>
<section class="main-breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i></a></li>
            <li class="active"><a>Shop</a></li>
        </ul>
    </div>
</section>
<div id="products" class="in-main-page in-products-page ">
    <div class="container">
        <div class="content">
            <div class="axisTiles" style="display: inline-block">
                <div class="axis-tile-box-s L-12">
                    <div class="axis_tile_image">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12 hidden-xs left-accordation panel-body">
                                <div class="panel panel-default">
                                    <?php // if (isset($featured_status) || isset($main_categry) || isset($keyword)) {
                                    ?>
                                    <div class="panel-body lit-blue">
                                        <div class="slide-container">
                                            <div class="list-group" id="mg-multisidetabs">
                                                <a data-toggle="collapse" href="#collapse4" class="list-group-item active-head "><span>Exclusive Brands</span><i class="fa fa-chevron-down pull-right"></i></a>
                                                <div class="panel list-sub" style="display: block">

                                                    <div id="collapse4" class="panel-body panel-collapse collapse <?= ($main_categry == '' || $main_categry == 1) ? 'in' : '' ?>" >
                                                        <div class="list-group">
                                                            <?php
                                                            foreach ($exclusive_brands_sub as $exclusive_brands) {

                                                                if (isset($catag->id)) {
                                                                    if ($exclusive_brands->id == $catag->id) {
                                                                        $active_class = 'list-group-item active';
                                                                    } else {
                                                                        $active_class = 'list-group-item';
                                                                    }
                                                                } else {
                                                                    $active_class = 'list-group-item';
                                                                }
                                                                if (isset($featured_status) || isset($keyword)) {
                                                                    if (isset($featured_status)) {
                                                                        ?>

                                                                        <?= Html::a('<span>' . $exclusive_brands->category . '</span><span class="fa fa-caret-right pull-left">', ['product/index', 'id' => $exclusive_brands->category_code, 'featured' => 'featured'], ['class' => $active_class])
                                                                        ?>
                                                                    <?php } else {
                                                                        ?>
                                                                        <?= Html::a('<span>' . $exclusive_brands->category . '</span><span class="fa fa-caret-right pull-left">', ['product/index', 'id' => $exclusive_brands->category_code, 'keyword' => $keyword], ['class' => $active_class])
                                                                        ?>
                                                                    <?php }
                                                                    ?>
                                                                <?php } else {
                                                                    ?>
                                                                    <?= Html::a('<span>' . $exclusive_brands->category . '</span><span class="fa fa-caret-right pull-left">', ['product/index', 'id' => $exclusive_brands->category_code], ['class' => $active_class])
                                                                    ?>
                                                                    <?php
                                                                }
                                                                ?>

                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- ./ end list-group -->
                                        </div><!-- ./ end slide-container -->
                                    </div>
                                    <?php //}
                                    ?>
                                    <?php //if (isset($featured_status) || isset($main_categry) || isset($keyword)) { ?><!-- ./ end panel-body -->
                                    <div class="panel-body lit-blue">
                                        <div class="slide-container">
                                            <div class="list-group" id="mg-multisidetabs">
                                                <a data-toggle="collapse" href="#collapse5" class="list-group-item active-head "><span>Brands</span><i class="fa fa-chevron-down pull-right"></i></a>
                                                <div class="panel list-sub" style="display: block">
                                                    <div id="collapse5" class="panel-body panel-collapse collapse <?= ($main_categry == 2) ? 'in' : '' ?>" >
                                                        <div class="list-group">
                                                            <?php
                                                            foreach ($brands_sub as $brands) {
                                                                if (isset($catag->id)) {
                                                                    if ($brands->id == $catag->id) {
                                                                        $active_class = 'list-group-item active';
                                                                    } else {
                                                                        $active_class = 'list-group-item';
                                                                    }
                                                                } else {
                                                                    $active_class = 'list-group-item';
                                                                }
                                                                ?>
                                                                <?php
                                                                if (isset($featured_status) || isset($keyword)) {
                                                                    ?>
                                                                    <?= Html::a('<span>' . $brands->category . '</span><span class="fa fa-caret-right pull-left">', ['product/index', 'id' => $brands->category_code, 'featured' => $featured_status, 'keyword' => $keyword], ['class' => $active_class])
                                                                    ?>
                                                                <?php } else {
                                                                    ?>
                                                                    <?= Html::a('<span>' . $brands->category . '</span><span class="fa fa-caret-right pull-left">', ['product/index', 'id' => $brands->category_code], ['class' => $active_class])
                                                                    ?>
                                                                    <?php
                                                                }
                                                                ?>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- ./ end list-group -->
                                        </div><!-- ./ end slide-container -->
                                    </div>
                                    <?php //}
                                    ?><!-- ./ end panel-body -->
                                </div><!-- ./ end panel panel-default-->
                            </div>
                            <div class="col-md-9 product-list">
                                <div class="international-brands">
                                    <?=
                                    $dataProvider->totalcount > 0 ? ListView::widget([
                                                'dataProvider' => $dataProvider,
                                                'itemView' => '_view2',
                                                'pager' => [
                                                    'firstPageLabel' => 'first',
                                                    'lastPageLabel' => 'last',
                                                    'prevPageLabel' => '<',
                                                    'nextPageLabel' => '>',
                                                    'maxButtonCount' => 5,
                                                ],
                                            ]) : $this->render('no_product');
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery(document).ready(function () {
        jQuery('#list').click(function (event) {
            event.preventDefault();
            jQuery('#products .item').addClass('list-group-item');
        });
        jQuery('#grid').click(function (event) {
            event.preventDefault();
            jQuery('#products .item').removeClass('list-group-item');
            jQuery('#products .item').addClass('grid-group-item');
        });
    });
</script>