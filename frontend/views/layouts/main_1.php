<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use common\models\CmsOthers;
use common\models\Category;

AppAsset::register($this);
$params = $parameters = \yii::$app->getRequest()->getQueryParams();
$cart_count = common\components\Cartcount::Count();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <link rel="shortcut icon" href="<?= yii::$app->homeUrl; ?>images/fav.png" type="image/png" />
        <meta name='robots' content='noindex,nofollow' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <script>
            var homeUrl = '<?= yii::$app->homeUrl; ?>';
        </script>
        <?php $this->head() ?>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="shortcut icon" href="images/fav.png" />
        <script type="text/javascript">
            document.documentElement.className = document.documentElement.className + ' yes-js js_active js'
        </script>
        <title>Linea De Bella</title>
        <style>
            .wishlist_table .add_to_cart,
            a.add_to_wishlist.button.alt {
                border-radius: 16px;
                -moz-border-radius: 16px;
                -webkit-border-radius: 16px;
            }
        </style>
        <script>
            /* You can add more configuration options to webfontloader by previously defining the WebFontConfig with your options */
            if (typeof WebFontConfig === "undefined") {
                WebFontConfig = new Object();
            }
            WebFontConfig['google'] = {
                families: ['Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic', 'Great+Vibes:400&subset=latin']
            };
            (function () {
                var wf = document.createElement('script');
//                                wf.src = 'ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js';
                wf.type = 'text/javascript';
                wf.async = 'true';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(wf, s);
            })();
        </script>

        <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
        <link rel='dns-prefetch' href='http://s.w.org/' />
        <link rel="alternate" type="application/rss+xml" title="Gelli &raquo; Feed" href="" />
        <link rel="alternate" type="application/rss+xml" title="Gelli &raquo; Comments Feed" href="" />
        <style type="text/css">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 .07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <link rel='stylesheet' id='rs-plugin-settings-css' href='<?= yii::$app->homeUrl; ?>wp-content/plugins/revslider/public/assets/css/settingsad79.css?ver=5.2.5.3' type='text/css' media='all' />
        <style id='rs-plugin-settings-inline-css' type='text/css'>
            #rs-demo-id {}
        </style>
        <link rel='stylesheet' id='woocommerce-smallscreen-css' href='<?= yii::$app->homeUrl; ?>wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen0226.css?ver=3.1.2' type='text/css' media='only screen and (max-width: 768px)' />
        <style id='yith-quick-view-inline-css' type='text/css'>
            #yith-quick-view-modal .yith-wcqv-main {
                background: #ffffff;
            }

            #yith-quick-view-close {
                color: #cdcdcd;
            }

            #yith-quick-view-close:hover {
                color: #ff0000;
            }
        </style>
        <link rel='stylesheet' id='bootstrap-css' href='<?= yii::$app->homeUrl; ?>wp-content/themes/gelli/assets/css/bootstrap1c9b.css?ver=4.6.1' type='text/css' media='all' />
        <link rel='stylesheet' id='font-awesome-css' href='<?= yii::$app->homeUrl; ?>wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min0147.css?ver=4.12' type='text/css' media='all' />
        <link rel='stylesheet' id='gelli-header-css' href='<?= yii::$app->homeUrl; ?>wp-content/themes/gelli/assets/css/header1c9b.css?ver=4.6.1' type='text/css' media='all' />
        <link rel='stylesheet' id='gelli-theme-css' href='<?= yii::$app->homeUrl; ?>wp-content/themes/gelli/assets/css/style1c9b.css?ver=4.6.1' type='text/css' media='all' />
        <link rel='stylesheet' id='gelli-skin-css' href='<?= yii::$app->homeUrl; ?>wp-content/themes/gelli/assets/css/color/di-serria1c9b.css?ver=4.6.1' type='text/css' media='all' />
        <link rel='stylesheet' id='gelli-font-css' href='<?= yii::$app->homeUrl; ?>wp-content/themes/gelli/assets/css/font1c9b.css?ver=4.6.1' type='text/css' media='all' />
        <link rel='stylesheet' id='gelli-config-font-css' href='<?= yii::$app->homeUrl; ?>wp-content/themes/gelli/assets/css/config-fonts1c9b.css?ver=4.6.1' type='text/css' media='all' />
        <link rel='stylesheet' id='gelli-jcarouselskintango-css' href='<?= yii::$app->homeUrl; ?>wp-content/themes/gelli/assets/css/jcarousel-skin-tango1c9b.css?ver=4.6.1' type='text/css' media='all' />
        <link rel='stylesheet' id='gelli-masterslider-css' href='<?= yii::$app->homeUrl; ?>wp-content/themes/gelli/assets/css/masterslider.main1c9b.css?ver=4.6.1' type='text/css' media='all' />
        <link rel='stylesheet' id='jquery-flexslider-css' href='<?= yii::$app->homeUrl; ?>wp-content/themes/gelli/assets/css/flexslider1c9b.css?ver=4.6.1' type='text/css' media='all' />
        <link rel='stylesheet' id='js_composer_front-css' href='<?= yii::$app->homeUrl; ?>wp-content/plugins/js_composer/assets/css/js_composer.min0147.css?ver=4.12' type='text/css' media='all' />
        <script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>-->
        <script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.minad79.js?ver=5.2.5.3'></script>
        <script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.minad79.js?ver=5.2.5.3'></script>
        <script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min0226.js?ver=3.1.2'></script>
        <script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart0147.js?ver=4.12'></script>
        <script type='text/javascript' src='<?= yii::$app->homeUrl; ?>js/custom.js'></script>
        <meta name="generator" content="WordPress 4.6.1" />
        <meta name="generator" content="WooCommerce 3.1.2" />
        <link rel="canonical" href="index.html" />
        <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
        </noscript>
        <meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress." />
        <meta name="generator" content="Powered by Slider Revolution 5.2.5.3 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
        <style type="text/css" data-type="vc_shortcodes-custom-css">
            .vc_custom_1475226909186 {
                background-image: url(wp-content/uploads/2016/07/background-newproduct19c8a.jpg?id=23) !important;
                background-position: center !important;
                background-repeat: no-repeat !important;
                background-size: cover !important;
            }

            .vc_custom_1468919768916 {
                background-position: center !important;
                background-repeat: no-repeat !important;
                background-size: cover !important;
            }

            .vc_custom_1478658938113 {
                background-position: center !important;
                background-repeat: no-repeat !important;
                background-size: cover !important;
            }

            .vc_custom_1474535743366 {
                padding-top: 50px !important;
            }

            .vc_custom_1468815759863 {
                margin-bottom: 0px !important;
            }
        </style>
        <noscript>
        <style type="text/css">
            /*            .{
                            opacity: 1;
                        }*/
        </style>
        </noscript>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Montserrat" rel="stylesheet">
        <link href="<?= yii::$app->homeUrl; ?>css/magiczoom.css" rel="stylesheet" />
        <link href="<?= yii::$app->homeUrl; ?>css/style.css" rel="stylesheet" />
        <link href="<?= yii::$app->homeUrl; ?>css/responsive.css" rel="stylesheet" />
    </head>

    <body class="page page-id-4 page-template-default yith-wcan-free wpb-js-composer js-comp-ver-4.12 vc_responsive">
        <?php $this->beginBody() ?>
        <?php $action = Yii::$app->controller->id . '/' . Yii::$app->controller->action->id; // controller action id ?>
        <!-- Google Code for APR Conversion Page -->
        <script type="text/javascript">
            /* <![CDATA[ */
            var google_conversion_id = 1004719363;
            var google_conversion_language = "en";
            var google_conversion_format = "3";
            var google_conversion_color = "ffffff";
            var google_conversion_label = "u6RBCJqCoHAQg5qL3wM";
            var google_remarketing_only = false;
        </script>
        <!--<script type="text/javascript" src="www.googleadservices.com/pagead/f.txt"></script>-->
        <noscript>
        <div style="display:inline;">
            <!--<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1004719363/?label=u6RBCJqCoHAQg5qL3wM&amp;guid=ON&amp;script=0" />-->
        </div>
        </noscript>
        <div id="page" class="site">
            <!--<div class="loaderWrap"></div>-->
            <div class="site-inner">
                <header id="masthead" class="site-header">
                    <div id="header_v1" class="header_mega_full header-v1 header">
                        <div class="header-main">
                            <div class="container">
                                <div class="row logo lg_middle">
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-lg-hide col-md-6 col-xs-6">
                                                <button class="btn btn-responsive-nav btn-inverse btn-default" data-toggle="collapse" data-target=".nav-main-collapse"> <i class="fa fa-bars"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-nav  header_fixed">
                                <div class="container" style="position: relative">
                                    <div class="row">
                                        <div class="col-md-2 logo align-left left-logo">
                                            <div class="logo-fixed">
                                                <?= Html::a('<img class="img-responsive" src="' . yii::$app->homeUrl . 'images/logo.png" />', ['/site/index'], ['class' => '']) ?>
                                            </div>
                                        </div>

                                        <div class="icon-notfixed-lft">
                                            <div class="gelli_icon align-right">
                                                <div class="gelli-search f_right">
                                                    <div class="dropdown"> <span class="title">Search</span>
                                                        <button class="dropdown-toggle btn btn-default" type="button" data-toggle="dropdown"><i class="fa fa-search"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <?= Html::beginForm(['/product/index'], 'get', ['id' => 'serach-formm', 'class' => 'woocommerce-product-search search-form', 'role' => 'search']) ?>
                                                            <label> <span class="screen-reader-text">Search for:</span>
                                                                <input id="" type="text" class="SearchBar search-field search-keyword" placeholder="Search for products" name="keyword" autocomplete="off" required="" value="<?php
                                                                if (isset($_GET['keyword']) && $_GET['keyword'] != '') {
                                                                    echo $_GET['keyword'];
                                                                }
                                                                ?>">
                                                            </label>
                                                            <div class="search-keyword-dropdown">
                                                            </div>
                                                            <?= Html::submitButton('<span class="screen-reader-text">Search</span>', ['class' => 'search-submit', 'name' => 'search_keyword-send']) ?>
                                                            <?= Html::endForm() ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        $catag = Category::find()->where(['status' => 1, 'main_category' => 1, 'category_code' => 'coral-perfumes'])->one();
                                        ?>
                                        <nav id="site-navigation" class="col-md-10 main-navigation col-nav" aria-label="Primary Menu">
                                            <div class="menu-main-menu-container">
                                                <ul id="menu-main-menu" class="primary-menu nav-menu mega-menu">
                                                    <li id="menu-item-1404" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1404 <?= $action == 'site/index' ? 'active' : '' ?>">
                                                        <?= Html::a('Home', ['/site/index'], ['class' => '']) ?>
                                                    </li>
                                                    <li id="menu-item-941" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children menu-item-941 megamenu image_pos_bottom page_item_has_children <?= $action == 'site/about' ? 'active' : '' ?>">
                                                        <?= Html::a('About', ['/site/about'], ['class' => '']) ?>
                                                    </li>
                                                    <li id="menu-item-997" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-997 megamenu image_pos_left page_item_has_children  <?= $action == 'product/index' ? 'active' : '' ?>">
                                                        <?= Html::a('<span>Shop</span>', ['/' . $catag->category_code], ['class' => '']) ?> 
                                                    </li>
                                                    <li class="logo logo-scrol">
                                                        <div class="logo">
                                                            <?= Html::a('<img class="img-responsive" src="' . yii::$app->homeUrl . 'images/logo.png" />', ['/site/index'], ['class' => '']) ?>
                                                        </div>
                                                    </li>
                                                    <li id="menu-item-785" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-785 page_item_has_children  <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'blog' ? 'active' : '' ?>">
                                                        <?= Html::a('Blog', ['/site/blog'], ['class' => '']) ?>
                                                    </li>
                                                    <li id="menu-item-953" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-953">
                                                        <?= Html::a('Inquire Now', ['/site/index'], ['class' => '']) ?>
                                                    </li>
                                                    <li id="menu-item-952" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-952  <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'contact' ? 'active' : '' ?>">
                                                        <?= Html::a('Contact us', ['/site/contact'], ['class' => '']) ?>
                                                    </li>
                                                </ul>
                                            </div>
                                        </nav>
                                        <div class="icon-notfixed-rit">
                                            <div class=" gelli_top_right myaccount">
                                                <div class="top-links">
                                                    <div class="dropdown"> <span class="title">Account</span>
                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"><span class="fa fa-user"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <?php if (!empty(Yii::$app->user->identity)) { ?>
                                                                <li class="first">
                                                                    <?= Html::a('My Account', ['/myaccounts/user/index'], ['title' => 'My Account']) ?>
                                                                </li>
                                                                <?php
                                                                echo '<li class="first">'
                                                                . Html::beginForm(['/site/logout'], 'post') . '<a>'
                                                                . Html::submitButton(
                                                                        'Logout', ['style' => 'font-size: 15px; padding-left: 11px;']
                                                                ) . '</a>'
                                                                . Html::endForm()
                                                                . '</li>';
                                                                ?>
                                                            <?php } else { ?>
                                                                <li class="last">
                                                                    <?= Html::a('Login', ['/site/login-signup'], ['title' => 'Login']) ?>
                                                                </li>
                                                            <?php } ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gelli_icon align-right">
                                                <div class="gelli-cart f_right">
                                                    <div class="dropdown">
                                                        <button class="dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-shopping-basket"></i>
                                                        </button><span class="cart-num cart_count"><?= $cart_count ?></span>
                                                        <div class="dropdown-menu">
                                                            <div class="widget_shopping_cart_content shop-cart">
                                                                <?= common\components\CartDetailWidget::widget() ?>

                                                            </div>
                                                            <!-- end product list -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .main-navigation -->
                                    <div class="col-md-2 align-right gelli_cart gelli_cart-fixed">
                                        <div class="icon-fixed">
                                            <div class="gelli_icon align-right">
                                                <div class="gelli-cart f_right">
                                                    <div class="dropdown">
                                                        <button class="dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-shopping-basket"></i>
                                                        </button><span class="cart-num cart_count"><?= $cart_count ?></span>
                                                        <div class="dropdown-menu">
                                                            <div class="widget_shopping_cart_content shop-cart">
                                                                <?= common\components\CartDetailWidget::widget() ?>

                                                            </div>
                                                            <!-- end product list -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=" gelli_top_right f_right myaccount">
                                                    <div class="top-links">
                                                        <div class="dropdown"> <span class="title">Account</span>
                                                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"><span class="fa fa-user"></span>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <?php if (!empty(Yii::$app->user->identity)) { ?>
                                                                    <li class="first">
                                                                        <?= Html::a('My Account', ['/myaccounts/user/index'], ['title' => 'My Account']) ?>
                                                                    </li>
                                                                    <?php
                                                                    echo '<li class="first">'
                                                                    . Html::beginForm(['/site/logout'], 'post') . '<a>'
                                                                    . Html::submitButton(
                                                                            'Logout', ['style' => 'font-size: 15px; padding-left: 11px;']
                                                                    ) . '</a>'
                                                                    . Html::endForm()
                                                                    . '</li>';
                                                                    ?>
                                                                <?php } else { ?>
                                                                    <li class="last">
                                                                        <?= Html::a('Login', ['/site/login-signup'], ['title' => 'Login']) ?>
                                                                    </li>
                                                                <?php } ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gelli-search f_right">
                                                    <div class="dropdown"> <span class="title">Search</span>
                                                        <button class="dropdown-toggle btn btn-default" type="button" data-toggle="dropdown"><i class="fa fa-search"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <form role="search" method="post" class="" action="">
                                                                <label> <span class="screen-reader-text">Search for:</span>
                                                                    <input type="search" autocomplete="off" id="" class="search-field" placeholder="Search for products" value="" name="s" title="Search for products">
                                                                </label>
                                                                <button type="submit" class="search-submit"><span class="screen-reader-text">Search</span>
                                                                </button>
                                                                <input type="hidden" name="post_type" value="product">
                                                                <input type="hidden" name="product_cat" value="">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- #header_v1-->
        </header>
        <!-- .site-header -->
        <?= $content ?>
        <div class="page-loading-overlay loaded">
            <div class="loader-2"></div>
        </div>
        <div class="vc_row-full-width vc_clearfix "></div>

        <footer id="colophon " class="site-footer ">
            <div id="foodter_v1 " class="footer footer-v1 ">
                <div class="container ">
                    <div class="footer-top ">
                        <div class="row ">
                            <div class="col-md-4 col-lg-4 col-sm-5 col-xs-12 middle-left ">
                                <aside id="gelli-logo-5 " class="widget gelli_widget_logo ">
                                    <div class="footer-logo logo "><a href=" "><span class="site-title "><img class="img-responsive " src="<?= yii::$app->homeUrl; ?>images/foot-logo.png "/> </span></a></div>
                                </aside>
                                <aside id="gelli-contact-2 " class="widget gelli_widget_contact ">
                                    <div class="footer-info-v1 ">
                                        <div class="links ">
                                            <ul>
                                                <li>
                                                    <em class="fa fa-map-marker "></em>
                                                    <span class="text ">Silkegade 13, 1113 Copenhagen K<br />Denmark</span>
                                                </li>
                                                <li>
                                                    <em class="fa fa-envelope "></em>
                                                    <a href="mailto:youremail@yourdomain.com "><span class="text ">youremail@yourdomain.com</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-7 col-xs-12 middle-right ">
                                <div class="row ">
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 ">
                                        <div class="row ">
                                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 ">
                                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                                    <h3 class="widget-title ">Main menu</h3>
                                                    <div class="menu-footer-main-menu-container ">
                                                        <ul id="menu-footer-main-menu " class="menu ">
                                                            <li id="menu-item-110 " class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-4 current_page_item menu-item-110 "><?= Html::a('Home', ['/site/index'], ['class' => '']) ?></li>
                                                            <li id="menu-item-612 " class="menu-item menu-item-type-post_type menu-item-object-page menu-item-612 "><?= Html::a('About Us', ['/site/about'], ['class' => '']) ?></li>
                                                            <li id="menu-item-119 " class="menu-item menu-item-type-custom menu-item-object-custom menu-item-119 "><?= Html::a('Our Products', ['/site/products'], ['class' => '']) ?></li>
                                                            <li id="menu-item-120 " class="menu-item menu-item-type-custom menu-item-object-custom menu-item-120 "><?= Html::a('Our Brands', ['/site/index'], ['class' => '']) ?></li>
                                                            <li id="menu-item-121 " class="menu-item menu-item-type-custom menu-item-object-custom menu-item-121 "><?= Html::a('Blog', ['/site/blog'], ['class' => '']) ?></li>
                                                            <li id="menu-item-122 " class="menu-item menu-item-type-custom menu-item-object-custom menu-item-122 "><?= Html::a('FAQs', ['/site/index'], ['class' => '']) ?></li>
                                                            <li id="menu-item-613 " class="menu-item menu-item-type-post_type menu-item-object-page menu-item-613 "><?= Html::a('Contact Us', ['/site/contact'], ['class' => '']) ?></li>
                                                        </ul>
                                                    </div>
                                                </aside>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 ">
                                                <aside id="nav_menu-5" class="widget widget_nav_menu">
                                                    <h3 class="widget-title ">Shopping info</h3>
                                                    <div class="menu-shopping-info-container ">
                                                        <ul id="menu-shopping-info " class="menu ">
                                                            <li id="menu-item-124 " class="menu-item menu-item-type-custom menu-item-object-custom menu-item-124 "><a href="# ">Returns</a></li>
                                                            <li id="menu-item-125 " class="menu-item menu-item-type-custom menu-item-object-custom menu-item-125 "><a href="# ">Delivery</a></li>
                                                            <li id="menu-item-126 " class="menu-item menu-item-type-custom menu-item-object-custom menu-item-126 "><a href="# ">Services</a></li>
                                                            <li id="menu-item-127 " class="menu-item menu-item-type-custom menu-item-object-custom menu-item-127 "><a href="# ">Gift Cards</a></li>
                                                            <li id="menu-item-128 " class="menu-item menu-item-type-custom menu-item-object-custom menu-item-128 "><a href="# ">Manufacturers</a></li>
                                                            <li id="menu-item-129 " class="menu-item menu-item-type-custom menu-item-object-custom menu-item-129 "><a href="# ">Discount Code</a></li>
                                                            <li id="menu-item-129 " class="menu-item menu-item-type-custom menu-item-object-custom menu-item-129 "><a href="feedback.php">Feedback</a></li>
                                                        </ul>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 ">
                                        <div class="row ">
                                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 ">
                                                <aside id="nav_menu-6" class="widget widget_nav_menu">
                                                    <h3 class="widget-title ">Userful links</h3>
                                                    <div class="menu-userful-links-container ">
                                                        <ul id="menu-userful-links " class="menu ">
                                                            <li id="menu-item-130 " class="menu-item menu-item-type-custom menu-item-object-custom menu-item-130 "><a href="# ">Site Map</a></li>
                                                            <li id="menu-item-131 " class="menu-item menu-item-type-custom menu-item-object-custom menu-item-131 "><a href="# ">Search Terms</a></li>
                                                            <li id="menu-item-132 " class="menu-item menu-item-type-custom menu-item-object-custom menu-item-132 "><a href="# ">Advanced Search</a></li>
                                                            <li id="menu-item-133 " class="menu-item menu-item-type-custom menu-item-object-custom menu-item-133 "><a href="# ">Mobile</a></li>
                                                            <li id="menu-item-134 " class="menu-item menu-item-type-custom menu-item-object-custom menu-item-134 "><a href="# ">Contact Us</a></li>
                                                            <li id="menu-item-135 " class="menu-item menu-item-type-custom menu-item-object-custom menu-item-135 "><a href="# ">Mobile</a></li>
                                                            <li id="menu-item-136 " class="menu-item menu-item-type-custom menu-item-object-custom menu-item-136 "><a href="# ">Addresses</a></li>
                                                        </ul>
                                                    </div>
                                                </aside>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 ">
                                                <aside id="nav_menu-10 " class="widget widget_nav_menu ">
                                                    <h3 class="widget-title ">Policies</h3>
                                                    <div class="menu-policies-container ">
                                                        <ul id="menu-policies " class="menu ">
                                                            <li id="menu-item-137 " class="menu-item menu-item-type-custom menu-item-object-custom menu-item-137 "><a href="terms&services.php">Terms Of Service</a></li>
                                                            <li id="menu-item-138 " class="menu-item menu-item-type-custom menu-item-object-custom menu-item-138 "><a href="# ">Privacy</a></li>
                                                            <li id="menu-item-139 " class="menu-item menu-item-type-custom menu-item-object-custom menu-item-139 "><a href="# ">Security</a></li>
                                                            <li id="menu-item-140 " class="menu-item menu-item-type-custom menu-item-object-custom menu-item-140 "><a href="# ">Terms Of Use</a></li>
                                                        </ul>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-footer ">
                        <div class="row ">
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 ">
                                <div class="pull-left footercoppyright ">
                                    <aside id="text-4" class="widget widget_text">
                                        <h4 class="widget-title hide ">Copy Right</h4>
                                        <div class="textwidget ">@ 2018 All Rights Reserved</div>
                                    </aside>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 ">
                                <div class="pull-right ">
                                    <aside id="text-25" class="widget widget_text">
                                        <h4 class="widget-title hide ">Footer Payment</h4>
                                        <div class="textwidget "><img src="<?= yii::$app->homeUrl; ?>wp-content/uploads/2016/07/footer_payment_icons.png " alt="bank "></div>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #header_v1-->
        </footer>
        <!-- .site-footer -->

    </div>
    <!-- .site-inner -->
    <a class="scroll-to-top "><i class="fa fa-arrow-up "></i></a>
</div>
<!-- .site-content -->
</div>
<script type="text/javascript">
    function revslider_showDoubleJqueryError(sliderID) {
        var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include. ";
        errorMessage += "<br>This includes make eliminates the revolution slider libraries, and make it not work.";
        errorMessage += "<br><br> To fix it you can:<br > & nbsp; & nbsp; & nbsp;1. In the Slider Settings - > Troubleshooting set option: < strong > < b > Put JS Includes To Body < /b></strong > option to true.";
        errorMessage += "<br> & nbsp; & nbsp; & nbsp;2. Find the double jquery.js include and remove it.";
        errorMessage = " < span style = 'font-size:16px;color:#BC0C06;' > " + errorMessage + " < /span>";
        jQuery(sliderID).show().html(errorMessage);
    }
</script>
<script type="text/template" id="tmpl-variation-template">
    <div class="woocommerce-variation-description">
    {{{ data.variation.variation_description }}}
    </div>

    <div class="woocommerce-variation-price">
    {{{ data.variation.price_html }}}
    </div>

    <div class="woocommerce-variation-availability">
    {{{ data.variation.availability_html }}}
    </div>
</script>
<script type="text/template" id="tmpl-unavailable-variation-template">
    <p>Sorry, this product is unavailable. Please choose a different combination.</p>
</script>
<link rel='stylesheet' id='sgf-google-fonts-1-css' href='http://fonts.googleapis.com/css?family=Dynalight&amp;ver=4.6.1' type='text/css' media='all' />
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/plugins/contact-form-7/includes/js/jquery.form.mind03d.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var _wpcf7 = {
        "loaderUrl": "http:\/\/demo.arrowpress.net\/gelli\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif",
        "recaptcha": {
            "messages": {
                "empty": "Please verify that you are not a robot."
            }
        },
        "sending": "Sending ...",
        "cached": "1"
    };
    /* ]]>    */
</script>
<!--<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'></script>-->
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4'></script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4'></script>
<!--    <script type='text/javascript'>
        /* <![CDATA[ */
        var woocomme
        rce_ params = {
                    "ajax_url": "\/gelli\/wp-admin\/admin-ajax.php",
                    "wc_ajax_url": "\/gelli\/home\/?wc-ajax=%%endpoint%%"
                };
        /* ]]>    */
</script>-->
<!--<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/plugins/woocommerce/asset    s/js/frontend/woocommerce.min0226.js?ver=3.1.2'></script>-->
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {
        "ajax_url": "\/gelli\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/gelli\/home\/?wc-ajax=%%endpoint%%",
        "fragment_name": "wc_fragments_3825306ea025af761ae20db03ec25136"
    };

    /* ]]>    */
</script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min0226.js?ver=3.1.2'></script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/plugins/gelli-swicth-color/assets/js/switch5152.js?ver=1.0'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var yith_woocompare = {
        "ajaxurl": "\/gelli\/home\/?wc-ajax=%%endpoint%%",
        "actionadd": "yith-woocompare-add-product",
        "actionremove": "yith-woocompare-remove-product",
        "actionview": "yith-woocompare-view-table",
        "actionreload": "yith-woocompare-reload-product",
        "added_label": "Added",
        "table_title": "Product Comparison",
        "auto_open": "yes",
        "loader": "http:\/\/demo.arrowpress.net\/gelli\/wp-content\/plugins\/yith-woocommerce-compare\/assets\/images\/loader.gif",
        "button_text": "Compare",
        "cookie_name": "yith_woocompare_list"
    };
</script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/plugins/yith-woocommerce-compare/assets/js/woocompare.min77e6.js?ver=2.2.1'></script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/plugins/yith-woocommerce-compare/assets/js/jquery.colorbox-min13ac.js?ver=1.4.21'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var yith_qv = {
        "ajaxurl": "\/gelli\/wp-admin\/admin-ajax.php",
        "loader": "http:\/\/demo.arrowpress.net\/gelli\/wp-content\/plugins\/yith-woocommerce-quick-view\/assets\/image\/qv-loader.gif", "is2_2": ""};

</script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/plugins/yith-woocommerce-quick-view/assets/js/frontend.min1576.js?ver=1.2.1'></script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min005e.js?ver=3.1.6'></script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min7359.js?ver=1.2.0'></script>
<script type='text/javascript'>
    /* <            ![CDATA[ */
    var yith_wcwl_l10n = {
        "ajax_url": "\/gelli\/wp-admin\/admin-ajax.php",
        "redirect_to_cart": "no",
        "multi_wishlist": "",
        "hide_add_button": "1",
        "is_user_logged_in": "",
        "ajax_loader_url": "http:\/\/demo.arrowpress.net\/gelli\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-l                oader.gif",
        "remove_from_wishlist_after_add_to_cart": "yes",
        "labels": {
            "cookie_disabled": "We are sorry, but this feature is available only if cookies are enabled on your                    browser.",
            "added_to_cart_message": "<div class=\"woocommerce-message\">Product correctly added to cart<\/div>"
        },
        "actions": {
            "add_to_wishlist_action": "add_to_wishlist",
            "remove_from_wishlist_action": "remove_from_wishlist",
            "move_to_another_wishlist_action": "move_to_another_wishlsit",
            "reload_wishlist_and_adding_elem_action": "reload_wishlist_and_adding_elem"
        }
    };
</script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl431f.js?ver=2.1.2'></script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-includes/js/comment-reply.min1c9b.js?ver=4.6.1'></script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/themes/gelli/assets/js/bootstrap.min1c9b.js?ver=4.6.1'></script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/themes/gelli/assets/js/jquery-ui1c9b.js?ver=4.6.1'></script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/themes/gelli/assets/js/isotope.pkgd.min1c9b.js?ver=4.6.1'></script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/themes/gelli/assets/js/imagesloaded.pkgd.min1c9b.js?ver=4.6.1'></script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/themes/gelli/assets/js/jquery.countdown.min1c9b.js?ver=4.6.1'></script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/themes/gelli/assets/js/jquery.countdown.min1c9b.js?ver=4.6.1'></script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/themes/gelli/assets/js/plugins1c9b.js?ver=4.6.1'></script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/themes/gelli/assets/js/jquery.main1c9b.js?ver=4.6.1'></script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/themes/gelli/assets/fancybox/js/jquery.mousewheel-3.0.6.pack1c9b.js?ver=4.6.1'></script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/themes/gelli/assets/fancybox/js/jquery.fancybox.pack1c9b.js?ver=4.6.1'></script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/themes/gelli/assets/fancybox/js/jquery.fancybox-buttons1c9b.js?ver=4.6.1'></script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/themes/gelli/assets/fancybox/js/jquery.fancybox-media1c9b.js?ver=4.6.1'></script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/themes/gelli/assets/fancybox/js/jquery.fancybox-thumbs1c9b.js?ver=4.6.1'></script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/themes/gelli/assets/js/jquery.featureCarousel1c9b.js?ver=4.6.1'></script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/themes/gelli/assets/js/jquery.jcarousel.min1c9b.js?ver=4.6.1'></script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/themes/gelli/assets/js/jquery.countdownTimer.min1c9b.js?ver=4.6.1'></script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/themes/gelli/assets/js/jquery.flexslider1c9b.js?ver=4.6.1'></script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-includes/js/wp-embed.min1c9b.js?ver=4.6.1'></script>
<!--<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min0147.js?ver=4.12'></script>-->
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/plugins/js_composer/assets/lib/waypoints/waypoints.min0147.js?ver=4.12'></script>
<script type='text/javascript'>
    /* <            ![CDATA[ */
    var mc4wp_forms_config = [];
</script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/plugins/mailchimp-for-wp/assets/js/forms-api.min2d73.js?ver=3.1.11'></script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-includes/js/underscore.min4511.js?ver=1.8.3'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var _wpUtilSettings = {
        "ajax": {
            "url": "\/gelli\/wp-admin\/admin-ajax.php"
        }
    };
</script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-includes/js/wp-util.min1c9b.js?ver=4.6.1'></script>
<script type='text/javascript'>
    /* <![CDATA[ */

    var wc_add_to_cart_variation_params = {
        "wc_ajax_url": "\/gelli\/home\/?wc-ajax=%%endpoint%%",
        "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Pleasrent combination.",
        "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.",
        "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination."
    };

</script>
<script type='text/javascript' src='<?= yii::$app->homeUrl; ?>wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min0226.js?ver=3.1.2'></script>
<script type="text/javascript">
    (function () {
        function addEventListener(element, event, handler) {
            if (element.addEventListener) {
                element.addEventListener(event, handler, false);
            } else if (element.attachEvent) {
                element.attachEvent('on' + event, handler);
            }
        }
    })();
</script>
<script>
    jQuery(document).scroll(function () {
        if (jQuery(this).scrollTop() > 10) {
            jQuery('.logo-scrol').css({
                "display": "none"
            });

            jQuery('.icon-notfixed-rit').css({
                "display": "none"
            });
            jQuery('.icon-notfixed-lft').css({

                "display": "none"
            });
        } else {

            jQuery('.logo-scrol').css({

                "display": "inline-block"
            });
            jQuery('.icon-notfixed-rit').css({
                "display": "inline-block"
            });
            jQuery('.icon-notfixed-lft').css({
                "display": "inline-block"
            });
        }
    });
</script>
<script src='<?= yii::$app->homeUrl; ?>js/magiczoom.js'></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="//masonry.desandro.com/masonry.pkgd.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.0.4/jquery.imagesloaded.js"></script>
<script>
    jQuery(function () {

        var $container = jQuery('#container').masonry({
            itemSelector: '.item',
            columnWidth: 200
        });

        // reveal initial images
//        $container.masonryImagesReveal(jQuery('#images').find('.item'));
    });

//        $.fn.masonryImagesReveal = function ($items) {
//                var msnry = this.data('masonry');
//                var itemSelector = msnry.options.itemSelector;
//                // hide by default
//                $items.hide();
//                // append to container
//                this.append($items);
//                $items.imagesLoaded().progress(function (imgLoad, image) {
//                        // get item
//                        // image is imagesLoaded class, not <img>, <img> is image.img
//                        var $item = jQuery(image.img).parents(itemSelector);
//                        // un-hide item
//                        $item.show();
//                        // masonry does its thing
//                        msnry.appended($item);
//                });
//
//                return this;
//        };
</script>
<script>
    jQuery('#agree').click(function () {
        jQuery('#modal-agree').css({
            'display': 'block',
        });
    });
</script>
<script>
    function toggleIcon(e) {
        jQuery(e.target)
                .prev('.panel-heading')
                .find(".more-less")
                .toggleClass('glyphicon-plus glyphicon-minus');
    }
    jQuery('.panel-group').on('hidden.bs.collapse', toggleIcon);
    jQuery('.panel-group').on('shown.bs.collapse', toggleIcon);
</script>
<div id= "modal-agree" class = "modal in" le = "display: none;">
    <div class = "modal-dialog" >
        <div class = "modal-content">
            <div class = "modal-header" >
                <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true"> Ã— </button>
                <h4 class= "modal-title">Privacy Policy </h4>
            </div>
            <div class = "modal-body" >
                <h3>he standard Lorem Ipsum passage </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Morbi accumsan turpis posuere cursus ultricies.Ut nunc justo, faucibus eget elit quis, vehicula rhoncus nulla.Phasellus convallis sem nec facilisis commodo.Fusce ut molestie turpis.Suspendisse aliquet sed massa in vulputate.Quisque gravida suscipit tincidunt. </p>
                <h3> At vero eos et accusamus et iusto odio dignissimos </h3>
                <p>Mauris elementum scelerisque elit non egestas.Cras lacus nibh, pretium quis bibendum nec, dapibus a metus.Morbi eros lectus, aliquam eu aliquam id, fringilla nec eros.Praesent suscipit commodo diam, non viverra turpis dapibus malesuada.Duis cursus metus eu sem eleifend, id rhoncus odio porttitor. </p>
                <h3> Certain circumstances and owing to the claims of duty or the obligations </h3>
                <p> But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master - builder of human happiness.No one rejects, dislikes. </p>
                <h3> Integer ultrices laoreet nunc in gravida </h3>
                <p>Sed lobortis pulvinar viverra.Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.Mauris suscipit dolor scelerisque, bibendum tellus ac, pharetra sapien.Praesent lacinia scelerisque odio et consequat.In a facilisis lacus.Maecenas vel lobortis tellus. </p>
            </div>
        </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>

</html>
<?php $this->beginPage() ?>