<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\components\ProductLinksWidget;
?>

<div class="vc_row wpb_row vc_row-fluid ">
        <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                                <div class="wpb_revslider_element wpb_content_element mbtm0">
                                        <link href="http://fonts.googleapis.com/css?family=Montserrat%3A700%2C400" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
                                        <link href="http://fonts.googleapis.com/css?family=Alex+Brush%3A400" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
                                        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                                                <!-- START REVOLUTION SLIDER 5.2.5.3 fullwidth mode -->
                                                <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.2.5.3">
                                                        <ul>
                                                                <!-- SLIDE  -->
                                                                <li data-index="rs-1" data-transition="slotzoom-horizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Linear.easeNone" data-easeout="Linear.easeNone" data-masterspeed="default" data-thumb="" data-rotate="8" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                                        <!-- MAIN IMAGE -->
                                                                        <img src="<?= yii::$app->homeUrl; ?>images/slider/slide1.jpg" alt="" title="home1_slide1" width="1920" height="972" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina> </li>
                                                                <!-- SLIDE  -->
                                                                <li data-index="rs-2" data-transition="3dcurtain-vertical" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Linear.easeNone" data-easeout="Linear.easeNone" data-masterspeed="default" data-thumb="" data-rotate="8" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                                        <!-- MAIN IMAGE -->
                                                                        <img src="<?= yii::$app->homeUrl; ?>images/slider/slide3.jpg" alt="" title="home1_slide2" width="1920" height="972" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina> </li>
                                                                <!-- SLIDE  -->
                                                                <li data-index="rs-2" data-transition="3dcurtain-vertical" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Linear.easeNone" data-easeout="Linear.easeNone" data-masterspeed="default" data-thumb="" data-rotate="8" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                                        <!-- MAIN IMAGE -->
                                                                        <img src="<?= yii::$app->homeUrl; ?>images/slider/slide2.jpg" alt="" title="home1_slide3" width="1920" height="972" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina> </li>
                                                                <!-- SLIDE  -->

                                                                <!-- SLIDE  -->

                                                        </ul>
                                                        <script>
                                                                var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                                                                var htmlDivCss = "";
                                                                if (htmlDiv) {
                                                                        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                                } else {
                                                                        var htmlDiv = document.createElement("div");
                                                                        htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                                                        document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                                                }
                                                        </script>
                                                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                                                </div>
                                                <script>
                                                        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                                                        var htmlDivCss = "";
                                                        if (htmlDiv) {
                                                                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                        } else {
                                                                var htmlDiv = document.createElement("div");
                                                                htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                                                document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                                        }
                                                </script>
                                                <script type="text/javascript">
                                                        /******************************************
                                                         -	PREPARE PLACEHOLDER FOR SLIDER	-
                                                         ******************************************/

                                                        var setREVStartSize = function () {
                                                                try {
                                                                        var e = new Object,
                                                                                i = jQuery(window).width(),
                                                                                t = 9999,
                                                                                r = 0,
                                                                                n = 0,
                                                                                l = 0,
                                                                                f = 0,
                                                                                s = 0,
                                                                                h = 0;
                                                                        e.c = jQuery('#rev_slider_1_1');
                                                                        e.gridwidth = [1920];
                                                                        e.gridheight = [1000];
                                                                        e.sliderLayout = "fullwidth";
                                                                        if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function (e, f) {
                                                                                f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                                                                        }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                                                                                var u = (e.c.width(), jQuery(window).height());
                                                                                if (void 0 != e.fullScreenOffsetContainer) {
                                                                                        var c = e.fullScreenOffsetContainer.split(",");
                                                                                        if (c)
                                                                                                jQuery.each(c, function (e, i) {
                                                                                                        u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                                                                                                }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                                                                                }
                                                                                f = u
                                                                        } else
                                                                                void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                                                                        e.c.closest(".rev_slider_wrapper").css({
                                                                                height: f
                                                                        })

                                                                } catch (d) {
                                                                        console.log("Failure at Presize of Slider:" + d)
                                                                }
                                                        };
                                                        setREVStartSize();
                                                        var tpj = jQuery;
                                                        var revapi1;
                                                        tpj(document).ready(function () {
                                                                if (tpj("#rev_slider_1_1").revolution == undefined) {
                                                                        revslider_showDoubleJqueryError("#rev_slider_1_1");
                                                                } else {
                                                                        revapi1 = tpj("#rev_slider_1_1").show().revolution({
                                                                                sliderType: "standard",
                                                                                jsFileLocation: "//demo.arrowpress.net/gelli/wp-content/plugins/revslider/public/assets/js/",
                                                                                sliderLayout: "fullwidth",
                                                                                dottedOverlay: "none",
                                                                                delay: 9000,
                                                                                navigation: {
                                                                                        keyboardNavigation: "off",
                                                                                        keyboard_direction: "horizontal",
                                                                                        mouseScrollNavigation: "off",
                                                                                        mouseScrollReverse: "default",
                                                                                        onHoverStop: "off",
                                                                                        touch: {
                                                                                                touchenabled: "on",
                                                                                                swipe_threshold: 75,
                                                                                                swipe_min_touches: 1,
                                                                                                swipe_direction: "horizontal",
                                                                                                drag_block_vertical: false
                                                                                        },
                                                                                        arrows: {
                                                                                                style: "gelli_rev",
                                                                                                enable: true,
                                                                                                hide_onmobile: false,
                                                                                                hide_onleave: true,
                                                                                                hide_delay: 200,
                                                                                                hide_delay_mobile: 1200,
                                                                                                tmp: '',
                                                                                                left: {
                                                                                                        h_align: "left",
                                                                                                        v_align: "center",
                                                                                                        h_offset: 20,
                                                                                                        v_offset: 0
                                                                                                },
                                                                                                right: {
                                                                                                        h_align: "right",
                                                                                                        v_align: "center",
                                                                                                        h_offset: 20,
                                                                                                        v_offset: 0
                                                                                                }
                                                                                        },
                                                                                        bullets: {
                                                                                                enable: true,
                                                                                                hide_onmobile: false,
                                                                                                style: "gelli_rev",
                                                                                                hide_onleave: true,
                                                                                                hide_delay: 200,
                                                                                                hide_delay_mobile: 1200,
                                                                                                direction: "horizontal",
                                                                                                h_align: "center",
                                                                                                v_align: "bottom",
                                                                                                h_offset: 0,
                                                                                                v_offset: -5,
                                                                                                space: 10,
                                                                                                tmp: ''
                                                                                        }
                                                                                },
                                                                                visibilityLevels: [1240, 1024, 778, 480],
                                                                                gridwidth: 1920,
                                                                                gridheight: 972,
                                                                                lazyType: "none",
                                                                                shadow: 0,
                                                                                spinner: "spinner0",
                                                                                stopLoop: "off",
                                                                                stopAfterLoops: -1,
                                                                                stopAtSlide: -1,
                                                                                shuffle: "off",
                                                                                autoHeight: "off",
                                                                                disableProgressBar: "on",
                                                                                hideThumbsOnMobile: "off",
                                                                                hideSliderAtLimit: 0,
                                                                                hideCaptionAtLimit: 0,
                                                                                hideAllCaptionAtLilmit: 0,
                                                                                debugMode: false,
                                                                                fallbacks: {
                                                                                        simplifyAll: "off",
                                                                                        nextSlideOnWindowFocus: "off",
                                                                                        disableFocusListener: false,
                                                                                }
                                                                        });
                                                                }
                                                        }); /*ready*/
                                                </script>
                                                <script>
                                                        var htmlDivCss = unescape(".gelli_rev.tparrows%20%7B%0A%09cursor%3Apointer%3B%0A%09border-width%3A%201px%3B%0A%20%20%20%20border-style%3A%20solid%3B%0A%20%20%20%20border-radius%3A%204px%3B%0A%20%20%20%20-webkit-border-radius%3A%204px%3B%0A%20%20%20%20-moz-border-radius%3A%204px%3B%0A%20%20%20%20-ms-border-radius%3A%204px%3B%0A%20%20%20%20-o-border-radius%3A%204px%3B%0A%20%20%20%20-o-transform%3A%20rotate%2845deg%29%3B%0A%20%20%20%20-moz-transform%3A%20rotate%2845deg%29%3B%0A%20%20%20%20-ms-transform%3A%20rotate%2845deg%29%3B%0A%20%20%20%20-webkit-transform%3A%20rotate%2845deg%29%3B%0A%20%20%20%20transform%3A%20rotate%2845deg%29%3B%0A%20%20%20%20-webkit-transition%3A%20all%200.3s%3B%0A%20%20%20%20-moz-transition%3A%20all%200.3s%3B%0A%20%20%20%20-ms-transition%3A%20all%200.3s%3B%0A%20%20%20%20-o-transition%3A%20all%200.3s%3B%0A%20%20%20%20transition%3A%20all%200.3s%3B%0A%20%20%20%20border%3A%201px%20solid%3B%0A%20%20%20%20background%3A%20%23fff%3B%0A%7D%0A.gelli_rev.tparrows%3Ahover%20%7B%0A%09border-color%3A%23fff%3B%0A%20%20%20%20color%3A%23fff%3B%0A%7D%0A.gelli_rev.tparrows%3Abefore%20%7B%0A%09font-family%3A%20%22revicons%22%3B%0A%20%20%20%20line-height%3A%2038px%3B%0A%20%20%20%20font-size%3A%2022px%3B%0A%09display%3A%20inline-block%3B%0A%20%20%20%20font-size%3A%20inherit%3B%0A%20%20%20%20text-rendering%3A%20auto%3B%0A%20%20%20%20-webkit-font-smoothing%3A%20antialiased%3B%0A%20%20%20%20-moz-osx-font-smoothing%3A%20grayscale%3B%0A%20%20%20%20-moz-transform%3A%20rotate%28-45deg%29%3B%0A%20%20%20%20-o-transform%3A%20rotate%28-45deg%29%3B%0A%20%20%20%20-ms-transform%3A%20rotate%28-45deg%29%3B%0A%20%20%20%20-webkit-transform%3A%20rotate%28-45deg%29%3B%0A%20%20%20%20transform%3A%20rotate%28-45deg%29%3B%0A%20%20%20%20width%3A%2040px%3B%0A%20%20%20%20height%3A%2040px%3B%0A%7D%0A.gelli_rev.tparrows%3Ahover%3Abefore%7B%0A%09color%3A%20%23fff%3B%0A%7D%0A.gelli_rev.tparrows.tp-leftarrow%3Abefore%20%7B%0A%09content%3A%20%22%5Ce824%22%3B%0A%20%20%20%20%0A%7D%0A.gelli_rev.tparrows.tp-rightarrow%3Abefore%20%7B%0A%09content%3A%20%22%5Ce825%22%3B%0A%7D%0A%0A%40media%20screen%20and%20%28max-width%3A%20767px%29%20%7B%0A%09.gelli_rev.tparrows%3Abefore%7B%0A%20%20%20%20%09width%3A30px%3B%0A%20%20%20%20%20%20%20%20height%3A30px%3B%0A%20%20%20%20%20%20%20%20font-size%3A15px%3B%0A%20%20%20%20%20%20%20%20line-height%3A%2030px%0A%20%20%20%20%7D%0A%20%20%20%20.gelli_rev.tparrows%7B%0A%20%20%20%20%09width%3A30px%3B%0A%20%20%20%20%20%20%20%20height%3A30px%3B%0A%20%20%20%20%7D%0A%7D%0A%0A.gelli_rev.tp-bullets%3Abefore%20%7B%0A%09content%3A%22%20%22%3B%0A%09position%3Aabsolute%3B%0A%09width%3A100%25%3B%0A%09height%3A100%25%3B%0A%09background%3Atransparent%3B%0A%09padding%3A10px%3B%0A%09margin-left%3A-10px%3B%0A%20%20%20%20margin-top%3A-10px%3B%0A%09box-sizing%3Acontent-box%3B%0A%7D%0A.gelli_rev%20.tp-bullet%20%7B%0A%09background-color%3A%20%23d7d7d7%3B%0A%20%20%20%20background-image%3A%20none%3B%0A%20%20%20%20width%3A%2013px%3B%0A%20%20%20%20height%3A%2013px%3B%0A%20%20%20%20-ms-transform%3A%20rotate%2845deg%29%3B%0A%20%20%20%20-webkit-transform%3A%20rotate%2845deg%29%3B%0A%20%20%20%20transform%3A%20rotate%2845deg%29%3B%0A%20%20%20%20margin%3A%200%205px%3B%0A%20%20%20%20display%3A%20inline-block%3B%0A%20%20%20%20vertical-align%3A%20top%3B%0A%20%20%20%20cursor%3A%20pointer%3B%0A%20%20%20%20-webkit-border-radius%3A%202px%3B%0A%20%20%20%20-moz-border-radius%3A%202px%3B%0A%20%20%20%20-ms-border-radius%3A%202px%3B%0A%20%20%20%20-o-border-radius%3A%202px%3B%0A%20%20%20%20border-radius%3A%202px%3B%0A%7D%0A.gelli_rev%20.tp-bullet.selected%3Abefore%20%7B%0A%09content%3A%20%22%22%3B%0A%20%20%20%20width%3A%2019px%3B%0A%20%20%20%20height%3A%2019px%3B%0A%20%20%20%20position%3A%20absolute%3B%0A%20%20%20%20left%3A%20-3px%3B%0A%20%20%20%20top%3A%20-3px%3B%0A%20%20%20%20border-width%3A%201px%3B%0A%20%20%20%20border-style%3A%20solid%3B%0A%20%20%20%20-webkit-border-radius%3A%203px%3B%0A%20%20%20%20-moz-border-radius%3A%203px%3B%0A%20%20%20%20-ms-border-radius%3A%203px%3B%0A%20%20%20%20-o-border-radius%3A%203px%3B%0A%20%20%20%20border-radius%3A%203px%3B%0A%20%20%20%20box-sizing%3Aborder-box%0A%7D%0A%40media%20screen%20and%20%28max-width%3A%201300px%29%7B%0A%09.gelli_rev%20.tp-bullet.selected%3Abefore%20%7B%0A%20%20%20%20%09width%3A%2015px%3B%0A%20%20%20%20%09height%3A%2016px%3B%0A%20%20%20%20%7D%0A%20%20%20%20.gelli_rev%20.tp-bullet%7B%0A%20%20%20%09%09width%3A%209px%3B%0A%20%20%20%20%09height%3A%209px%3B%0A%20%20%20%20%7D%0A%7D%0A%0A%0A");
                                                        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                                        if (htmlDiv) {
                                                                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                        } else {
                                                                var htmlDiv = document.createElement('div');
                                                                htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                                                document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                                        }
                                                </script>
                                        </div>
                                        <!-- END REVOLUTION SLIDER -->
                                </div>
                        </div>
                </div>
        </div>
</div>
<section class="home-sub-banner-section"><!--home-sub-banner-section-->
        <div class="container ">
                <div class="gelli-headingtitle  wpb_right-to-left golden">
                        <div class="layout1 text-center">
                                <h2>Our Collection</h2>
                        </div>

                </div>
                <div id="shopify-section-1498732074544" class="shopify-section bingoFramework ">
                        <div class="maxFullHTML">
                                <div class="maxHTMLContent layout-one">
                                        <div class="maxCaption">
                                                <div class="content">
                                                        <h3 class="title">Men Collection</h3>
                                                        <div class="desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
                                                </div>
                                                <div class="more"> <a class="htmlMore" href="mens-product.php" title="Men Collection">M<br>
                                                                o<br>
                                                                r<br>
                                                                e</a> </div>
                                        </div>
                                        <div class="maxBanner">
                                                <div class="bingoBanner">
                                                        <div class="effectThree"> <a href="#" title="Line De Bella Men"> <img class="img-responsive" alt="Line De Bella Men" src="<?= yii::$app->homeUrl; ?>images/men.jpg"> </a> </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
                <div id="shopify-section-1498732198176" class="shopify-section  bingoFramework ">
                        <div class="maxFullHTML">
                                <div class="maxHTMLContent layout-two">
                                        <div class="maxCaption">
                                                <div class="content">
                                                        <h3 class="title">WoMen Collection</h3>
                                                        <div class="desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
                                                </div>
                                                <div class="more"> <a class="htmlMore" href="" title="WoMen Collection">M<br>
                                                                o<br>
                                                                r<br>
                                                                e</a> </div>
                                        </div>
                                        <div class="maxBanner">
                                                <div class="bingoBanner">
                                                        <div class="effectThree"> <a href="#" title="Line De Bella Women"> <img class="img-responsive" alt="Line De Bella Women" src="<?= yii::$app->homeUrl; ?>images/women.jpg"> </a> </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
        <div style="clear:both"></div>
</section>
<!--home-sub-banner-section-->

<div class="vc_row-full-width vc_clearfix "></div>
<section class="home-new-products">
        <div class="container ">
                <div class="row">
                        <div class="vc_row-full-width vc_clearfix "></div>
                        <div data-vc-full-width="true" data-vc-full-width-init="false" >
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                        <div class="gelli-headingtitle  wpb_right-to-left golden">
                                                                <div class="layout1 text-center">
                                                                        <h2>New products</h2>
                                                                </div>
                                                        </div>
                                                        <div class="gelli-product  show_navbt">
                                                                <div class="slide-product layout1" data-columns="4">
                                                                        <div class="beans-stepslider" data-rotate="true">
                                                                                <div class="beans-mask">
                                                                                        <div class="beans-slideset">
                                                                                                <?php
                                                                                                $products = common\models\Product::find()->all();
//                                                                    echo '<pre>';                                                                    print_r($products);exit;
                                                                                                $class = '';
                                                                                                foreach ($products as $prdct) {
                                                                                                        ?>
                                                                                                        <?= ProductLinksWidget::widget(['id' => $prdct->id, 'div_id' => $class]) ?>
                                                                                                <?php } ?>
                                                                                        </div>
                                                                                </div>
                                                                                <div class="beans-pagination ">
                                                                                        <!-- pagination generated here -->
                                                                                </div>
                                                                                <a class="btn-prev " href="# "><i class="fa fa-angle-left "></i></a> <a class="btn-next " href="# "><i class="fa fa-angle-right "></i></a> </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix "></div>
                </div>
                </article>
        </div>
</section>
<div class="vc_row-full-width vc_clearfix "></div>
<section class="home-blog-section vc_custom_1468919768916 vc_row-has-fill bg_fixed special-pro-sec ">
        <div class="container ">
                <div class="row">
                        <div data-vc-full-width="true " data-vc-full-width-init="true ">
                                <div data-vc-full-width="true " data-vc-full-width-init="true "  class="vc_row wpb_row vc_row-fluid padding-bottom-100 vc_row-has-fill " ></div>
                                <div data-vc-full-width="true " data-vc-full-width-init="false " >
                                        <div class="wpb_column vc_column_container vc_col-sm-4 ">
                                                <center>
                                                        <img src="images/home-blog-top.png" class="img-responsvie" />
                                                </center>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-8 ">
                                                <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper ">
                                                                <div class="gelli-headingtitle  wpb_bottom-to-top ">
                                                                        <div class="default text-left ">
                                                                                <h2>Latest updates</h2>
                                                                        </div>
                                                                </div>
                                                                <div class="gelli-blog ">
                                                                        <article class="item-post ">
                                                                                <div class="time-post ">
                                                                                        <p>14<span>Dec</span></p>
                                                                                </div>
                                                                                <a href=" " title="Thread Wrapped Bracelet ">
                                                                                        <h2>Thread Wrapped Bracelet</h2>
                                                                                </a>
                                                                                <div class="content ">
                                                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#8217;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                                                </div>
                                                                        </article>
                                                                        <article class="item-post ">
                                                                                <div class="time-post ">
                                                                                        <p>14<span>Dec</span></p>
                                                                                </div>
                                                                                <a href=" " title="Tips ">
                                                                                        <h2>Tips</h2>
                                                                                </a>
                                                                                <div class="content ">
                                                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#8217;s standard dummy text ever since the 1500s, when an unknown printer</p>
                                                                                </div>
                                                                        </article>
                                                                        <div class="clear "></div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                <div  data-vc-full-width="true " data-vc-full-width-init="true " class="vc_row wpb_row vc_row-fluid vc_row-has-fill bg_fixed special-pro-sec gelli-news wpb_bottom-to-top " >
                                        <div class="container">
                                                <div class="gelli-headingtitle vc_custom_1474535743366 wpb_bottom-to-top ">
                                                        <div class="main-head-section"> <small>Our Blog</small>
                                                                <h2 >Our Blog</h2>
                                                        </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <a href="" class="testiImg "> <img src="<?= yii::$app->homeUrl; ?>images/blog/4.jpg" class="attachment-full size-full wp-post-image img-responsive" alt="testimonial " />
                                                                <div class="info ">
                                                                        <h3>FRAGRANCES</h3>
                                                                        <p>Incredible scents. Great Gifts.</p>
                                                                </div>
                                                        </a> <span class="link-area"> <a href="">FRAGRANCES FOR HIM</a> <a href="#">FRAGRANCES FOR HER</a> </span> </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <a href="" class="testiImg "> <img src="<?= yii::$app->homeUrl; ?>images/blog/2.jpg" class="attachment-full size-full wp-post-image img-responsive" alt="testimonial " />
                                                                <div class="info ">
                                                                        <h3>FRAGRANCES</h3>
                                                                        <p>Incredible scents. Great Gifts.</p>
                                                                </div>
                                                        </a> <span class="link-area"> <a href="#">FRAGRANCES FOR HIM</a> <a href="#">FRAGRANCES FOR HER</a> </span> </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <a href="" class="testiImg "> <img src="<?= yii::$app->homeUrl; ?>images/blog/3.jpg" class="attachment-full size-full wp-post-image img-responsive" alt="testimonial " />
                                                                <div class="info ">
                                                                        <h3>FRAGRANCES</h3>
                                                                        <p>Incredible scents. Great Gifts.</p>
                                                                </div>
                                                        </a> <span class="link-area"> <a href="#">FRAGRANCES FOR HIM</a> <a href="#">FRAGRANCES FOR HER</a> </span> </div>
                                        </div>
                                        <span class="anchor-icon"></span> </div>
                        </div>
                </div>
        </div>
        <div class="vc_row-full-width vc_clearfix "></div>
</section>
<section class="home-sub-main-product-section">
        <div class="container">
                <div class="gelli-headingtitle  wpb_right-to-left golden">
                        <div class="layout1 text-center">
                                <h2>Shop Collection</h2>
                        </div>
                </div>
                <div class="axisTiles">
                        <div class="axis-tile-frame S-S-D">
                                <div class="axis-tile-box-s L-2">
                                        <div class="axis_tile_image">  <a href="mens-product.php" data-wt-events="mousedown" class="">
                                                        <div class="image_layer" style="border-color: #D7D7D7;">
                                                                <div class="headlines_container right">
                                                                        <div class="sub_headline_2" style="color: #b78d2e;">BLEU DE CHANEL</div>
                                                                        <div class="headline_2" style="color: #FFFFFF;">DYNAMIC DUO</div>
                                                                        <div role="button" class="promo_btn notpropagate" data-wt-events="mousedown">SHOP NOW</div>
                                                                </div>
                                                                <img style="height: 100%;" src="<?= yii::$app->homeUrl; ?>images/Bleu_de_Chanel_LP_single.jpg" alt="BACKGROUND IMAGE CTA LINK"> </div>
                                                </a> </div>
                                </div>
                                <div class="axis-tile-box-s L-3">
                                        <div class="axis_tile_image">  <a href="" data-wt-events="mousedown">
                                                        <div class="image_layer" style="border-color: #D7D7D7;">
                                                                <div class="headlines_container right">
                                                                        <div class="sub_headline_2" style="color: #b78d2e;">CHANCE EAU FRAÃŽCHE</div>
                                                                        <div class="headline_2" style="color: #FFFFFF;">LET'S CHANCE</div>
                                                                        <div role="button" class="promo_btn notpropagate" data-wt-events="mousedown">SHOP NOW</div>
                                                                </div>
                                                                <img src="<?= yii::$app->homeUrl; ?>images/Chance_Chanel_LP_SMALL.jpg" alt="BACKGROUND IMAGE CTA LINK"> </div>
                                                </a> </div>
                                </div>
                                <div class="axis-tile-box-d R-2-3">
                                        <div class="axis_tile_image">  <a href="" data-wt-events="mousedown">
                                                        <div class="image_layer" style="border-color: #D7D7D7;">
                                                                <div class="headlines_container right">
                                                                        <div class="sub_headline_2" style="color: #b78d2e;">LES EXCLUSIFS</div>
                                                                        <div class="headline_2" style="color: #FFFFFF;">SPLASH SET</div>
                                                                        <div role="button" class="promo_btn notpropagate" data-wt-events="mousedown">SHOP NOW</div>
                                                                </div>
                                                                <img src="<?= yii::$app->homeUrl; ?>images/Les-Exclusifs_de_Chanel_LP_Medium.jpg" alt="BACKGROUND IMAGE CTA LINK"> </div>
                                                </a> </div>
                                </div>
                        </div>
                </div >
        </div>
</section>
<section class="home-special-offers">
        <div class="block double-parallax">
                <div class="parallax-container"><div data-speed="1" data-bleed="12" class="parallax parallax1"><img src="/linea-de-bella/" alt="" style="display: block; transform: translate3d(-50%, 0px, 0px);"></div></div>
                <div class="parallax-container"><div data-speed="0.4" class="parallax parallax2"><img src="/linea-de-bella/" alt="" style="display: block; transform: translate3d(-50%, 0px, 0px);"></div></div>
                <div class="container">
                        <div class="row">
                                <div class="col s12 m12 l12">
                                        <div class="special-offers">
                                                <div class="col s12 m12 l3">
                                                        <div class="offer">
                                                                <i>Linea De Bella</i>
                                                                <h5>Aimer</h5>
                                                                <span>PERFUME FOR WOMEN</span>
                                                                <div class="offer-img"><img src="<?= yii::$app->homeUrl; ?>images/resource/offer1.png" alt=""></div>
                                                        </div><!-- Offer -->
                                                </div>
                                                <div class="col s12 m12 l6">
                                                        <div class="offers-details">
                                                                <span class="cart-icon"><i class="fa fa-shopping-bag"></i></span>
                                                                <h3>Special Offers</h3>
                                                                <i>Aimer &amp; Bianchi ~ Get it now</i>
                                                                <p>Magically evocative notes immediately awaken your deepest senses, giving you the impression of living life away from reality.</p>
                                                                <span class="price">50%</span>
                                                                <img src="<?= yii::$app->homeUrl; ?>images/resource/offer-sign.png" alt="">
                                                        </div><!-- Offers Details -->
                                                </div>
                                                <div class="col s12 m12 l3">
                                                        <div class="offer offer2">
                                                                <i>Linea De Bella</i>
                                                                <h5>Bianchi</h5>
                                                                <span>PERFUME FOR WOMEN</span>
                                                                <div class="offer-img"><img src="<?= yii::$app->homeUrl; ?>images/resource/offer2.png" alt=""></div>
                                                        </div><!-- Offer -->
                                                </div>
                                        </div><!-- Special Offer -->
                                </div>
                        </div>
                </div>
        </div>
</section>

<section class="home-new-products2">
        <div class="container">
                <div class="row">
                        <div class="vc_row-full-width vc_clearfix "></div>
                        <div data-vc-full-width="true" data-vc-full-width-init="false" >
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                        <div class="gelli-headingtitle  wpb_right-to-left golden">
                                                                <div class="layout1 text-center">
                                                                        <h2>Premium Products</h2>
                                                                </div>
                                                        </div>
                                                        <div class="gelli-product  show_navbt">
                                                                <div class="slide-product layout1" data-columns="4">
                                                                        <div class="beans-stepslider" data-rotate="true">
                                                                                <div class="beans-mask">
                                                                                        <div class="beans-slideset">
                                                                                                <?php
                                                                                                $products = common\models\Product::find()->all();
                                                                                                $class = '';
                                                                                                foreach ($products as $prdct) {
                                                                                                        ?>
                                                                                                        <?= ProductLinksWidget::widget(['id' => $prdct->id, 'div_id' => $class]) ?>
                                                                                                <?php } ?>
                                                                                        </div>
                                                                                </div>
                                                                                <div class="beans-pagination ">
                                                                                        <!-- pagination generated here -->
                                                                                </div>
                                                                                <a class="btn-prev " href="# "><i class="fa fa-angle-left "></i></a> <a class="btn-next " href="# "><i class="fa fa-angle-right "></i></a> </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix "></div>
                </div>
                </article>
        </div>
</section>
<div class="vc_row-full-width vc_clearfix "></div>
<section class="home-coming-soon ">
        <div class="container ">
                <div class="row">
                        <div class="vc_row-full-width vc_clearfix "></div>
                        <div data-vc-full-width="true" data-vc-full-width-init="false" id="coming-soon" class="vc_row wpb_row vc_row-fluid padding-top-100 padding-bottom-50 vc_custom_1475226909186 vc_row-has-fill exclusive">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                        <div class="gelli-headingtitle  wpb_right-to-left golden">
                                                                <div class="layout1 text-center">
                                                                        <h2>Coming-Soon</h2>
                                                                </div>
                                                        </div>
                                                        <div class="gelli-product  show_navbt">
                                                                <div class="slide-product layout1" data-columns="4">
                                                                        <div class="beans-stepslider" data-rotate="true">
                                                                                <div class="beans-mask">
                                                                                        <div class="beans-slideset">
                                                                                                <div class="beans-slide">
                                                                                                        <div class="padding-15">
                                                                                                                <li class="post-1108 product type-product status-publish has-post-thumbnail product_cat-bracelets first instock taxable shipping-taxable purchasable product-type-simple">
                                                                                                                        <article class="product">
                                                                                                                                <div class="item-product">
                                                                                                                                        <div class="social-top ">
                                                                                                                                                <div class="btn-share ">
                                                                                                                                                        <div class="quick-view add-to " data-toggle="tooltip"><a onclick="" href="#" class="yith-wcqv-button" data-product_id="1104" title="Quick View"><i class="fa fa-eye" aria-hidden="true"></i></a> </div>
                                                                                                                                                </div>
                                                                                                                                                <div class="btn-share">
                                                                                                                                                        <div class="add-to-wishlist yith-wcwl-add-to-wishlist add-to-wishlist-1104">
                                                                                                                                                                <div class="yith-wcwl-add-button show" style="display:block"> <span class="ajax-loading" style="visibility:hidden"></span> <a data-toggle="tooltip" title="Buynow" href="" rel="nofollow" data-product-id="1104" data-product-type="simple" class="add_to_wishlist"> <i class="fa fa-cart-plus"></i> </a> </div>
                                                                                                                                                                <div style="clear:both"></div>
                                                                                                                                                                <div class="yith-wcwl-wishlistaddresponse"></div>
                                                                                                                                                        </div>
                                                                                                                                                </div>
                                                                                                                                        </div>
                                                                                                                                        <div class="product-img "> <a href="product-detail.php" title="Akanthos "><img  src="images/products/1.jpg" class="attachment-gelli-slide-product size-gelli-slide-product wp-post-image " alt="bracelets_large " /></a> </div>
                                                                                                                                        <h2><a href="">AKANTHOS</a></h2>
                                                                                                                                        <p>EAU DE PERFUME</p>
                                                                                                                                </div>
                                                                                                                        </article>
                                                                                                                </li>
                                                                                                        </div>
                                                                                                </div>
                                                                                                <div class="beans-slide ">
                                                                                                        <div class="padding-15 ">
                                                                                                                <li class="post-1104 product type-product status-publish has-post-thumbnail product_cat-bracelets instock taxable shipping-taxable purchasable product-type-simple ">
                                                                                                                        <article class="product ">
                                                                                                                                <div class="item-product ">
                                                                                                                                        <div class="social-top ">
                                                                                                                                                <div class="btn-share ">
                                                                                                                                                        <div class="quick-view add-to " data-toggle="tooltip"><a onclick="" href="#" class="yith-wcqv-button" data-product_id="1104" title="Quick View"><i class="fa fa-eye" aria-hidden="true"></i></a> </div>
                                                                                                                                                </div>
                                                                                                                                                <div class="btn-share">
                                                                                                                                                        <div class="add-to-wishlist yith-wcwl-add-to-wishlist add-to-wishlist-1104">
                                                                                                                                                                <div class="yith-wcwl-add-button show" style="display:block"> <span class="ajax-loading" style="visibility:hidden"></span> <a data-toggle="tooltip" title="Buynow" href="" rel="nofollow" data-product-id="1104" data-product-type="simple" class="add_to_wishlist"> <i class="fa fa-cart-plus"></i> </a> </div>
                                                                                                                                                                <div style="clear:both"></div>
                                                                                                                                                                <div class="yith-wcwl-wishlistaddresponse"></div>
                                                                                                                                                        </div>
                                                                                                                                                </div>
                                                                                                                                        </div>
                                                                                                                                        <div class="product-img"> <a href="" title="AIMER"> <img  src="images/products/2.jpg" class="attachment-gelli-slide-product size-gelli-slide-product wp-post-image" alt="bracelets-2"  sizes="(max-width: 200px) 100vw, 200px" /> </a> </div>
                                                                                                                                        <h2><a href="">AIMER</a></h2>
                                                                                                                                        <p>EAU DE PERFUME</p>
                                                                                                                                        </span> </div>
                                                                                                                        </article>
                                                                                                                </li>
                                                                                                        </div>
                                                                                                </div>
                                                                                                <div class="beans-slide">
                                                                                                        <div class="padding-15">
                                                                                                                <li class="post-1102 product type-product status-publish has-post-thumbnail product_cat-earrings  instock taxable shipping-taxable purchasable product-type-simple">
                                                                                                                        <article class="product">
                                                                                                                                <div class="item-product">
                                                                                                                                        <div class="social-top ">
                                                                                                                                                <div class="btn-share ">
                                                                                                                                                        <div class="quick-view add-to " data-toggle="tooltip"><a onclick="" href="#" class="yith-wcqv-button" data-product_id="1104" title="Quick View"><i class="fa fa-eye" aria-hidden="true"></i></a> </div>
                                                                                                                                                </div>
                                                                                                                                                <div class="btn-share">
                                                                                                                                                        <div class="add-to-wishlist yith-wcwl-add-to-wishlist add-to-wishlist-1104">
                                                                                                                                                                <div class="yith-wcwl-add-button show" style="display:block"> <span class="ajax-loading" style="visibility:hidden"></span> <a data-toggle="tooltip" title="Buynow" href="" rel="nofollow" data-product-id="1104" data-product-type="simple" class="add_to_wishlist"> <i class="fa fa-cart-plus"></i> </a> </div>
                                                                                                                                                                <div style="clear:both"></div>
                                                                                                                                                                <div class="yith-wcwl-wishlistaddresponse"></div>
                                                                                                                                                        </div>
                                                                                                                                                </div>
                                                                                                                                        </div>
                                                                                                                                        <div class="product-img "> <a href="" title="D'A BRUZZO"><img  src="images/products/3.jpg" class="attachment-gelli-slide-product size-gelli-slide-product wp-post-image " alt="earrings_large "  sizes="(max-width: 200px) 100vw, 200px " /></a> </div>
                                                                                                                                        <h2><a href=" ">D'A BRUZZO</a></h2>
                                                                                                                                        <p>EAU DE PERFUME</p>
                                                                                                                                </div>
                                                                                                                        </article>
                                                                                                                </li>
                                                                                                        </div>
                                                                                                </div>
                                                                                                <div class="beans-slide ">
                                                                                                        <div class="padding-15 ">
                                                                                                                <li class="post-1097 product type-product status-publish has-post-thumbnail product_cat-earrings last instock taxable shipping-taxable purchasable product-type-simple">
                                                                                                                        <article class="product ">
                                                                                                                                <div class="item-product ">
                                                                                                                                        <div class="social-top ">
                                                                                                                                                <div class="btn-share ">
                                                                                                                                                        <div class="quick-view add-to " data-toggle="tooltip"><a onclick="" href="#" class="yith-wcqv-button" data-product_id="1104" title="Quick View"><i class="fa fa-eye" aria-hidden="true"></i></a> </div>
                                                                                                                                                </div>
                                                                                                                                                <div class="btn-share">
                                                                                                                                                        <div class="add-to-wishlist yith-wcwl-add-to-wishlist add-to-wishlist-1104">
                                                                                                                                                                <div class="yith-wcwl-add-button show" style="display:block"> <span class="ajax-loading" style="visibility:hidden"></span> <a data-toggle="tooltip" title="Buynow" href="" rel="nofollow" data-product-id="1104" data-product-type="simple" class="add_to_wishlist"> <i class="fa fa-cart-plus"></i> </a> </div>
                                                                                                                                                                <div style="clear:both"></div>
                                                                                                                                                                <div class="yith-wcwl-wishlistaddresponse"></div>
                                                                                                                                                        </div>
                                                                                                                                                </div>
                                                                                                                                        </div>
                                                                                                                                        <div class="product-img"> <a href="" title="AZURE"> <img  src="images/products/4.jpg" class="attachment-gelli-slide-product size-gelli-slide-product wp-post-image" alt="12" sizes="(max-width: 200px) 100vw, 200px" /> </a> </div>
                                                                                                                                        <h2><a href="">AZURE</a></h2>
                                                                                                                                        <p>VELVET COLLECTION</p>
                                                                                                                                </div>
                                                                                                                        </article>
                                                                                                                </li>
                                                                                                        </div>
                                                                                                </div>
                                                                                                <div class="beans-slide">
                                                                                                        <div class="padding-15">
                                                                                                                <li class="post-1093 product type-product status-publish has-post-thumbnail product_filter-acessories product_filter-flower product_filter-home-living product_filter-jewerly product_filter-knitting product_filter-prints-pictures product_cat-rings first instock taxable shipping-taxable purchasable product-type-simple">
                                                                                                                        <article class="product">
                                                                                                                                <div class="item-product">
                                                                                                                                        <div class="social-top ">
                                                                                                                                                <div class="btn-share ">
                                                                                                                                                        <div class="quick-view add-to " data-toggle="tooltip"><a onclick="" href="#" class="yith-wcqv-button" data-product_id="1104" title="Quick View"><i class="fa fa-eye" aria-hidden="true"></i></a> </div>
                                                                                                                                                </div>
                                                                                                                                                <div class="btn-share">
                                                                                                                                                        <div class="add-to-wishlist yith-wcwl-add-to-wishlist add-to-wishlist-1104">
                                                                                                                                                                <div class="yith-wcwl-add-button show" style="display:block"> <span class="ajax-loading" style="visibility:hidden"></span> <a data-toggle="tooltip" title="Buynow" href="" rel="nofollow" data-product-id="1104" data-product-type="simple" class="add_to_wishlist"> <i class="fa fa-cart-plus"></i> </a> </div>
                                                                                                                                                                <div style="clear:both"></div>
                                                                                                                                                                <div class="yith-wcwl-wishlistaddresponse"></div>
                                                                                                                                                        </div>
                                                                                                                                                </div>
                                                                                                                                        </div>
                                                                                                                                        <div class="product-img "> <a href="" title="BIANCHI"> <img  src="images/products/5.jpg" class="attachment-gelli-slide-product size-gelli-slide-product wp-post-image " alt="1 " sizes="(max-width: 200px) 100vw, 200px " /></a> </div>
                                                                                                                                        <h2><a href="">BIANCHI</a></h2>
                                                                                                                                        <p>LUXURY EAU DE PERFUME</p>
                                                                                                                                </div>
                                                                                                                        </article>
                                                                                                                </li>
                                                                                                        </div>
                                                                                                </div>
                                                                                        </div>

                                                                                </div>
                                                                                <div class="beans-pagination ">
                                                                                        <!-- pagination generated here -->
                                                                                </div>
                                                                                <a class="btn-prev " href="# "><i class="fa fa-angle-left "></i></a> <a class="btn-next " href="# "><i class="fa fa-angle-right "></i></a> </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix "></div>
                </div>
                </article>
        </div>
</section>
<section class="vc_row wpb_row vc_row-fluid padding-bottom-100 vc_custom_1468919768916 vc_row-has-fill bg_fixed founder home-founder-setion">
        <div data-vc-full-width="true " data-vc-full-width-init="true overlay-blk">
                <div data-vc-full-width="true " data-vc-full-width-init="true "></div>
                <div style="z-index: 9; position: inherit;">
                        <div class="container">
                                <div class="gelli-headingtitle vc_custom_1474535743366 wpb_bottom-to-top ">
                                        <div class="default text-center ">
                                                <h2 style="color: white;">Linea De Bella</h2>
                                        </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <a href="" class="testiImg ">
                                            <!--<img src="/linea-de-bella/images/blog/ASOM_845x687.jpg" class="attachment-full size-full wp-post-image img-responsive" alt="testimonial " />                                <div class="info ">-->
                                        </a><div class="content"><a href="" class="testiImg ">
                                                        <div class="gelli-headingtitle">
                                                                <div class="layout1">
                                                                        <h4 class="sub-heading">THE FOUNDER</h4>
                                                                </div>
                                                        </div>
                                                        <h4>â€œDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturâ€�</h4>
                                                </a><a class="more" href=""> FIND OUT MORE </a>
                                        </div>
                                </div>

                                <span class="link-area">
                                        <!--                        <a href="">FRAGRANCES FOR HIM</a>
                                                                <a href="#">FRAGRANCES FOR HER</a>-->
                                </span>
                        </div>
                </div>
                <!--<span class="anchor-icon"></span>-->
        </div>
</section>
<div class="vc_row-full-width vc_clearfix "></div>

<div class="vc_row wpb_row vc_row-fluid section-newletter ">
        <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                                <div class="wpb_widgetised_column wpb_content_element">
                                        <div class="wpb_wrapper">
                                                <aside id="mc4wp_form_widget-2" class="widget widget_mc4wp_form_widget"><script type="text/javascript">(function () {
                                                                if (!window.mc4wp) {
                                                                        window.mc4wp = {
                                                                                listeners: [],
                                                                                forms: {
                                                                                        on: function (event, callback) {
                                                                                                window.mc4wp.listeners.push({
                                                                                                        event: event,
                                                                                                        callback: callback
                                                                                                });
                                                                                        }
                                                                                }
                                                                        }
                                                                }
                                                        })();
                                                        </script>
                                                        <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-61" method="post" data-id="61" data-name="Home 1">
                                                                <div class="mc4wp-form-fields">
                                                                        <div class="form-newlt">
                                                                                <div class="container">
                                                                                        <div class="row">
                                                                                                <div class="col-md-6 col-sm-6 col-xs-12 first">
                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1468815759863  img">
                                                                                                                <figure class="wpb_wrapper vc_figure">
                                                                                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="117" height="102" src="<?= yii::$app->homeUrl; ?>images/news.png" class="vc_single_image-img attachment-full" alt="img-newletter"></div>
                                                                                                                </figure>
                                                                                                        </div>
                                                                                                        <p>Sign up for newsletter</p>
                                                                                                </div>
                                                                                                <div class="col-md-6 col-sm-6 col-xs-12"> <i class="fa fa-envelope" aria-hidden="true"></i>
                                                                                                        <input type="email" name="email" placeholder="Enter your Email Address" required="">
                                                                                                        <input class="for-home5" type="submit" value="Subscribe">
                                                                                                        <i class="fa fa-long-arrow-right gelli_transition"></i> </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <div style="display: none;">
                                                                                <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off">
                                                                        </div>
                                                                        <input type="hidden" name="_mc4wp_timestamp" value="1515562940">
                                                                        <input type="hidden" name="_mc4wp_form_id" value="61">
                                                                        <input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1">
                                                                </div>
                                                                <div class="mc4wp-response"></div>
                                                        </form>
                                                        <!-- / MailChimp for WordPress Plugin --></aside>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</div>

