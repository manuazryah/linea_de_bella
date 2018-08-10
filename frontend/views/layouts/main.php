<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
$action = Yii::$app->controller->id . '/' . Yii::$app->controller->action->id;
$params = $parameters = \yii::$app->getRequest()->getQueryParams();
$cart_count = common\components\Cartcount::Count();
$home_page_common = \common\models\HomePageContent::findOne(1);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex,nofollow">
        <link rel="shortcut icon" href="<?= Yii::$app->homeUrl ?>favicon/icon.png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <?= Html::csrfMetaTags() ?>
        <script>
            var homeUrl = '<?= yii::$app->homeUrl; ?>';
        </script>
        <title><?= Html::encode($this->title) ?></title>
        <script src="<?= yii::$app->homeUrl; ?>js/jquery-min.js"></script>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <header class="header header-mobile-hidden main_head"><!--header-->
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="top-Search">
                            <?= Html::beginForm(['/product/index'], 'get', ['id' => 'serach-formm']) ?>
                            <div class="input-group">
                                <div class="input-group-addon search-form-add-on">
                                    <input name="search_keyword-send" type="submit" class="send" id="search-keyword-submit">
                                </div>
                                <input type="text" class="form-control search-keyword"  placeholder="Search Products"  autocomplete="off" name="keyword" required value="<?php
                                if (isset($_GET['keyword']) && $_GET['keyword'] != '') {
                                    echo $_GET['keyword'];
                                }
                                ?>">
                                <div class="search-keyword-dropdown"></div>
                            </div>
                            <?= Html::endForm() ?>
                        </div>
                    </div>
                    <div class="col-4">
                        <h1 class="logo"><a href="<?= Yii::$app->homeUrl ?>"><img src="<?= Yii::$app->homeUrl ?>images/logo.png" class="img-fluid" alt="" title=""></a></h1>
                    </div>
                    <div class="col-4">
                        <div class="top-login-cart-section">
                            <div class="top-cart"><!--top-cart-->
                                <div class="dropdown">
                                    <button  type="button" class="cart-bag" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="cart-num cart_count"><?= $cart_count != '' ? sprintf("%02d", $cart_count) : '00' ?></span> </button>
                                    <div class="widget_shopping_cart_content shop-cart">
                                        <?= common\components\CartDetailWidget::widget() ?>
                                    </div>
                                </div>
                            </div>
                            <!--top-cart-->

                            <div class="top-myaccount"><!--top-myaccount-->
                                <div class="dropdown">
                                    <button  type="button" class="login-top" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php if (!empty(Yii::$app->user->identity)) { ?>
                                            <small>Welcome</small><span><?= Yii::$app->user->identity->first_name ?> </span>
                                        <?php } else { ?>
                                            <small>Select</small><span>Login </span>
                                        <?php } ?>
                                    </button>
                                    <ul class="dropdown-menu  animated2 fadeInUp">
                                        <?php if (!empty(Yii::$app->user->identity)) { ?>
                                            <li><?= Html::a('My Account', ['/myaccounts/user/my-orders'], ['class' => 'dropdown-item']) ?></li>
                                            <?php
                                            echo '<li>'
                                            . Html::beginForm(['/site/logout'], 'post') . '<a class="dropdown-item">'
                                            . Html::submitButton(
                                                    'Logout', ['style' => 'background: transparent;border: none;color: #CCC;padding: 0px;']
                                            ) . '</a>'
                                            . Html::endForm()
                                            . '</li>';
                                            ?>
                                        <?php } else { ?>
                                            <li><?= Html::a('Register', ['/site/signup'], ['class' => 'dropdown-item']) ?></li>
                                            <li><?= Html::a('Login', ['/site/login-signup'], ['class' => 'dropdown-item']) ?></li>
                                        <?php } ?>

                                    </ul>
                                </div>
                            </div>
                            <!--top-myaccount-->

                        </div>
                    </div>
                </div>
            </div>
        </header>

        <header class="header header-mobile-show"><!--header-mobile-show-->
            <div class="mobile-view-top-section">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="top-Search">
                                <form>
                                    <div class="input-group">
                                        <?= Html::beginForm(['/product/index'], 'get', ['id' => 'serach-formm']) ?>
                                        <div class="input-group">
                                            <div class="input-group-addon search-form-add-on">
                                                <input name="search_keyword-send" type="submit" class="send" id="search-keyword-submit">
                                            </div>
                                            <input type="text" class="form-control search-keyword"  placeholder="Search Products"  autocomplete="off" name="keyword" required value="<?php
                                            if (isset($_GET['keyword']) && $_GET['keyword'] != '') {
                                                echo $_GET['keyword'];
                                            }
                                            ?>">
                                            <div class="search-keyword-dropdown"></div>
                                        </div>
                                        <?= Html::endForm() ?>

                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="top-login-cart-section">
                                <div class="top-cart"><!--top-cart-->
                                    <div class="dropdown">
                                        <button  type="button" class="cart-bag" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="cart-num cart_count"><?= $cart_count != '' ? sprintf("%02d", $cart_count) : '00' ?></span> </button>
                                        <div class="widget_shopping_cart_content shop-cart">
                                            <?= common\components\CartDetailWidget::widget() ?>
                                        </div>
                                    </div>
                                </div>
                                <!--top-cart-->

                                <div class="top-myaccount"><!--top-myaccount-->
                                    <div class="dropdown">
                                        <button  type="button" class="login-top" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <?php if (!empty(Yii::$app->user->identity)) { ?>
                                                <small>Welcome</small><span><?= Yii::$app->user->identity->first_name ?> </span>
                                            <?php } else { ?>
                                                <small>Select</small><span>Login </span>
                                            <?php } ?>
                                        </button>
                                        <ul class="dropdown-menu animated2 fadeInUp" >
                                            <?php if (!empty(Yii::$app->user->identity)) { ?>
                                                <li><?= Html::a('My Account', ['/myaccounts/user/my-orders'], ['class' => 'dropdown-item']) ?></li>
                                                <?php
                                                echo '<li>'
                                                . Html::beginForm(['/site/logout'], 'post') . '<a class="dropdown-item">'
                                                . Html::submitButton(
                                                        'Logout', ['style' => 'background: transparent;border: none;color: #CCC;padding: 0px;']
                                                ) . '</a>'
                                                . Html::endForm()
                                                . '</li>';
                                                ?>
                                            <?php } else { ?>
                                                <li><?= Html::a('Register', ['/site/signup'], ['class' => 'dropdown-item']) ?></li>
                                                <li><?= Html::a('Login', ['/site/login-signup'], ['class' => 'dropdown-item']) ?></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                                <!--top-myaccount-->

                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        <h1 class="logo"><a href="<?= Yii::$app->homeUrl ?>"><img src="<?= Yii::$app->homeUrl ?>images/logo.png" class="img-fluid" alt="" title=""></a></h1>
                    </div>
                    <div class="col-2"><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <div class="main-icon-bar"> <i class="fa fa-bars"></i></div>
                        </button></div>
                </div>
            </div>
        </header>


        <section class="nav-section"><!--nav-section-->
            <div class="container">
                <div class="main-nav-section">
                    <nav class="navbar navbar-toggleable-md navbar-light bg-faded navbar-expand-md">

                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li><?= Html::a('Home', ['/site/index'], ['class' => $action == 'site/index' ? 'active' : '']) ?></li>
                                <li><?= Html::a('About the brand', ['/site/about'], ['class' => $action == 'site/about' ? 'active' : '']) ?></li>
                                <?php
                                $aclass = '';
                                if ((isset($params['id']))) {
                                    $aclass = 'active';
                                }
                                ?>
                                <li class="dropdown"> <a href="#" class="<?= $aclass ?>"  data-toggle="dropdown">COLLECTIONS</a>
                                    <ul class="dropdown-menu main-maenu-dropdown animated2 fadeInUp">
                                        <div class="col-lg-12"><?= Html::a('All COLLECTIONS', ['product/index/'], ['class' => 'all-link-menu']) ?></div>
                                        <div class="row">
                                            <div class="col-md-9 image-collection">
                                                <?php
                                                $collections = \common\models\Brand::find()->where(['status' => 1])->orderBy(['brand' => SORT_ASC])->all();
                                                $c = 0;
                                                foreach ($collections as $collection) {
                                                    $c++;
                                                    if ($collection->collection_image != '') {
                                                        $link = Yii::$app->homeUrl . 'uploads/cms/collections/' . $collection->id . '/large.' . $collection->collection_image;
                                                    } else {
                                                        $link = '';
                                                    }
                                                    ?>
                                                    <li class="collection_images" id="<?= $collection->id ?>" data-val="<?= $link ?>"><?= Html::a($collection->brand, ['product/index/', 'id' => $collection->canonical_name], ['class' => 'dropdown-item']) ?></li>
                                                <?php } ?>

                                            </div>
                                            <?php
                                            $useragent = $_SERVER['HTTP_USER_AGENT'];
                                            if (!preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4))) {
                                                ?>
                                                <div class="col-md-3">
                                                    <div class="img-box">
                                                        <img id="collection-image" src="<?= Yii::$app->homeUrl ?>images/product/product1.jpg" class="img-fluid" alt="" title="">
                                                        <?php foreach ($collections as $collection_img) { ?>
                                                            <img id="img_<?= $collection_img->id ?>" src="<?= Yii::$app->homeUrl ?>uploads/cms/collections/<?= $collection_img->id ?>/large.<?= $collection_img->collection_image ?>" class="img-fluid" alt="" title="" style="display:none">
                                                        <?php } ?>
                                                    </div>

                                                </div>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </ul>
                                </li>
                                <li><?= Html::a('Products', ['/product/index', 'category' => 'products'], ['class' => isset($params['category']) && $params['category'] == 'products' ? 'active' : '']) ?></li>
                                <li><?= Html::a('Travel Collections', ['/product/index', 'category' => 'travel-collections'], ['class' => isset($params['category']) && $params['category'] == 'travel-collections' ? 'active' : '']) ?></li>
                                <li><?= Html::a('Gift Sets', ['/product/index', 'category' => 'gift-sets'], ['class' => isset($params['category']) && $params['category'] == 'gift-sets' ? 'active' : '']) ?></li>
                                <li><?= Html::a('Our Stories', ['/site/blog'], ['class' => $action == 'site/blog' ? 'active' : '']) ?></li>
                                <li><?= Html::a('Feedback', ['/site/contact'], ['class' => $action == 'site/contact' ? 'active' : '']) ?></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </section>

        <?= $content ?>

        <section class="footer-top-newsletter"><!--footer-top-newsletter-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="text-box">
                            <h5 class="head">Sign up for Newsletter</h5>
                            <p>Subscribe to our newsletter and stay updated on the
                                exclusive deals and special offers!</p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="newsletter-form">
                            <form id="email-subscription">
                                <div class="input-group"> <i class="mail-icon far fa-envelope"></i>
                                    <input type="text" class="form-control"  placeholder="Enter your Email Address" required id="newsletter-email">
                                    <div class="input-group-addon">
                                        <input  type="submit" class="send" value="Subscribe">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer"><!--footer-->
            <section class="footer-top"><!--footer-top-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-3  col-sm-12">
                            <div class="f-logo"><img src="<?= Yii::$app->homeUrl ?>images/top-fixed-logo.png" class="img-fluid"></div>
                        </div>
                        <div class="col-md-3  col-sm-4">
                            <div class="f-location"> <i class="fa fa-map-marker-alt"></i>
                                <h4 class="head"><?= $home_page_common->address ?></h4>
                            </div>
                        </div>
                        <div class="col-md-3  col-sm-4">
                            <div class="f-location"> <i class="fas fa-phone-volume"></i>
                                <h4 class="head"><?= $home_page_common->phone ?></h4>
                            </div>
                        </div>
                        <div class="col-md-3  col-sm-4">
                            <div class="f-location"> <i class="fas fa-envelope"></i>
                                <h4 class="head"><?= $home_page_common->email ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--footer-top-->
            <section class="footer-top-middle"><!--footer-top-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-6">
                            <h5 class="f-head">Main menu</h5>
                            <ul class="f-list">
                                <li><?= Html::a('Home', ['/site/index']) ?></li>
                                <li><?= Html::a('About the Brand', ['/site/about']) ?></li>
                                <li><?= Html::a('Products', ['/product/index', 'category' => 'products']) ?></li>
                                <li><?= Html::a('Travel Collections', ['/product/index', 'category' => 'travel-collections']) ?></li>
                                <li><?= Html::a('Gift Sets', ['/product/index', 'category' => 'gift-sets']) ?></li>
                                <li><?= Html::a('Our Stories', ['/site/blog']) ?></li>
                                <li><?= Html::a('Feedback', ['/site/contact']) ?></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-3 col-6">
                            <h5 class="f-head">Shopping info</h5>
                            <ul class="f-list">
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Delivery</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Gift Cards</a></li>
                                <li><a href="#">Manufacturers</a></li>
                                <li><a href="#">Discount Code</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-3 col-6">
                            <h5 class="f-head">Userful links</h5>
                            <ul class="f-list">
                                <li><a href="#">Site Map</a></li>
                                <li><a href="#">Search Terms</a></li>
                                <li><a href="#">Advanced Search</a></li>
                                <li><a href="#">Mobile</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Mobile</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-3 col-6">
                            <h5 class="f-head">Policies</h5>
                            <ul class="f-list">
                                <li><a href="#">Terms Of Service</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Security</a></li>
                                <li><a href="#">Terms Of Use</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--footer-top-middle-->
        </footer>
        <!--footer-->
        <section class="Copyright-section">
            <div class="container">
                <h6 class="text">Copyright © <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script> </span> <b>Linea De Bella.</b> All Rights Reserved.</h6>
            </div>
        </section>
        <a href="#" class="scrollup" >Scroll</a> <!--Scroll-->


        <?php $this->endBody() ?>

        <script type="text/javascript">
            $(document).ready(function () {
                $(window).scroll(function () {

                    if ($(this).scrollTop() > 100) {

                        $('.scrollup').fadeIn();
                    } else {
                        $('.scrollup').fadeOut();
                    }
                });
                $('.scrollup').click(function () {
                    $("html, body").animate({scrollTop: 0}, 1000);
                    return false;
                });
                $(document).on('submit', '#email-subscription', function (e) {
                    e.preventDefault();

                    $.ajax({
                        type: "POST",
                        url: '<?= Yii::$app->homeUrl; ?>site/subscribe-mail',
                        data: {email: $('#newsletter-email').val()},
                        success: function (data)
                        {
                            if (data == 0) {
                                $('#newsletter-email').after('<div id="email-alert">This Email is Already Subscribed</div>');
                            } else {
                                $('#newsletter-email').after('<div id="email-alert">Your Email Subscription Send Successfully</div>');
                            }
                            $('#newsletter-email').val('');
                            $('#email-alert').delay(000).fadeOut('slow');
                        }
                    });
                });

                $(".image-collection li").hover(function () {
                    var src_value = $(this).attr('data-val');
                    var id = $(this).attr('id');
                    if (src_value == '') {

                        $(".img-box img").hide();
                        $('#collection-image').show();
                    } else {
                        $(".img-box img").hide();
                        $('#img_' + id).show();
                    }



                });

            });
        </script>
    </body>
</html>
<?php $this->endPage() ?>
