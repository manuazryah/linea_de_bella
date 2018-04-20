<?php

use yii\helpers\Html;
?>
<div class="information-contact pbtm40">
    <div class="content_breadcum" style="background-position: 50% 0px;"></div>
    <div class="container">
        <!--<h1 class="page-title">Contact Us</h1>-->
        <ul class="breadcrumb">
            <li><?= Html::a('<i class="fa fa-home"></i>', ['/site/index'], ['class' => '']) ?></a>
            </li>
            <li class="active"><a href="">Contact Us</a>
            </li>
        </ul>
        <div class="row">
            <aside id="column-left" class="col-lg-3 col-md-3 col-sm-3">
                <div class="box">
                    <div class="box-heading"><span>Information</span>
                    </div>
                    <div class="list-group"> <a class="list-group-item" href="about.php">About Us</a>
                        <a class="list-group-item" href="">Delivery Information</a>
                        <a class="list-group-item" href="">Privacy Policy</a>
                        <a class="list-group-item" href="terms&services.php">Terms &amp; Conditions</a>
                        <a class="list-group-item active" href="contact.php">Contact Us</a>
                        <a class="list-group-item" href="">Site Map</a>
                    </div>
                </div>
                <div class="box hidden-xs" id="latest">
                    <div class="box-heading"><span>Latest</span>
                    </div>
                    <div class="box-content">
                        <div class="box-product productbox-grid" id="latest-grid">
                            <div class="product-items">
                                <div class="product-block product-thumb transition">
                                    <div class="product-block-inner">
                                        <div class="image">
                                            <a href="">
                                                <img src="<?= yii::$app->homeUrl; ?>images/products/1.jpg" alt="White Diamonds" title="White Diamonds" width="60" height="82" class="img-responsive">
                                            </a>
                                            <span class="saleicon sale">Sale</span>
                                        </div>
                                        <div class="caption">
                                            <h4><a href="">Akanthos</a></h4>
                                            <p class="price"> <span class="price-new">$110.00</span>  <span class="price-old">$241.99</span>
                                                <span class="price-tax">Ex Tax: $90.00</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-items">
                                <div class="product-block product-thumb transition">
                                    <div class="product-block-inner">
                                        <div class="image">
                                            <a href="">
                                                <img src="<?= yii::$app->homeUrl; ?>images/products/2.jpg" alt="White Diamonds" title="White Diamonds" width="60" height="82" class="img-responsive">
                                            </a>
                                            <span class="saleicon sale">Sale</span>
                                        </div>
                                        <div class="caption">
                                            <h4><a href="">Aimer</a></h4>
                                            <p class="price"> <span class="price-new">$110.00</span>  <span class="price-old">$241.99</span>
                                                <span class="price-tax">Ex Tax: $90.00</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-items">
                                <div class="product-block product-thumb transition">
                                    <div class="product-block-inner">
                                        <div class="image">
                                            <a href="">
                                                <img src="<?= yii::$app->homeUrl; ?>images/products/3.jpg" alt="White Diamonds" title="White Diamonds" width="60" height="82" class="img-responsive">
                                            </a>
                                            <span class="saleicon sale">Sale</span>
                                        </div>
                                        <div class="caption">
                                            <h4><a href="">D'A bruzzo</a></h4>
                                            <p class="price"> <span class="price-new">$110.00</span>  <span class="price-old">$241.99</span>
                                                <span class="price-tax">Ex Tax: $90.00</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <span class="latest_default_width" style="display:none; visibility:hidden"></span>
                <div class="box hidden-xs" id="special">
                    <div class="box-heading"><span>Specials</span>
                    </div>
                    <div class="box-content">
                        <div class="box-product productbox-grid" id="special-grid">
                            <div class="product-items">
                                <div class="product-block product-thumb transition">
                                    <div class="product-block-inner">
                                        <div class="image">
                                            <a href="">
                                                <img src="<?= yii::$app->homeUrl; ?>images/products/1.jpg" alt="White Diamonds" title="White Diamonds" width="60" height="82" class="img-responsive">
                                            </a>
                                            <span class="saleicon sale">Sale</span>
                                        </div>
                                        <div class="caption">
                                            <h4><a href="">Akanthos</a></h4>
                                            <p class="price"> <span class="price-new">$110.00</span>  <span class="price-old">$241.99</span>
                                                <span class="price-tax">Ex Tax: $90.00</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-items">
                                <div class="product-block product-thumb transition">
                                    <div class="product-block-inner">
                                        <div class="image">
                                            <a href="">
                                                <img src="<?= yii::$app->homeUrl; ?>images/products/2.jpg" alt="White Diamonds" title="White Diamonds" width="60" height="82" class="img-responsive">
                                            </a>
                                            <span class="saleicon sale">Sale</span>
                                        </div>
                                        <div class="caption">
                                            <h4><a href="">Aimer</a></h4>
                                            <p class="price"> <span class="price-new">$110.00</span>  <span class="price-old">$241.99</span>
                                                <span class="price-tax">Ex Tax: $90.00</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-items">
                                <div class="product-block product-thumb transition">
                                    <div class="product-block-inner">
                                        <div class="image">
                                            <a href="">
                                                <img src="<?= yii::$app->homeUrl; ?>images/products/3.jpg" alt="White Diamonds" title="White Diamonds" width="60" height="82" class="img-responsive">
                                            </a>
                                            <span class="saleicon sale">Sale</span>
                                        </div>
                                        <div class="caption">
                                            <h4><a href="">D'A Bruzzo</a></h4>
                                            <p class="price"> <span class="price-new">$110.00</span>  <span class="price-old">$241.99</span>
                                                <span class="price-tax">Ex Tax: $90.00</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <span class="special_default_width" style="display:none; visibility:hidden"></span>
            </aside>
            <div id="content" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <h3 class="title2">Our Location</h3>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row contact-info">
                            <div class="left col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="address-detail"><strong>Your Store</strong>
                                    <address>
                                        Address 1
                                    </address>
                                </div>
                                <div class="telephone"> <strong>Telephone</strong>
                                    <address>123456789 </address>
                                </div>
                                <div class="fax"></div>
                            </div>
                            <div class="right col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="map">
                                    <script type="text/javascript" src=""></script>
                                    <!--<iframe style="margin:0px;padding:0px;border:0px;width:350px;height:200px;display:inline-block;" frameborder="0" src="http://services.webestools.com/google_map/map.php?phase=2&amp;lati=21.182785&amp;long=72.831834&amp;zoom=4&amp;width=350&amp;height=200&amp;mapType=normal&amp;map_btn_normal=yes&amp;map_btn_satelite=yes&amp;map_btn_mixte=yes&amp;map_small=yes&amp;marqueur=yes&amp;info_bulle=&amp;" width="350px" height="200px"></iframe>-->
                                    <iframe style="margin:0px;padding:0px;border:0px;width:350px;height:200px;display:inline-block;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26373460.591859914!2d-113.75791976386162!3d36.20506839588284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1517306734114" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                    </div>
                </div>
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <fieldset>
                        <h3 class="title2">Contact Form</h3>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-name">Your Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" value="" id="input-name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-email">E-Mail Address</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" value="" id="input-email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-enquiry">Enquiry</label>
                            <div class="col-sm-10">
                                <textarea name="enquiry" rows="10" id="input-enquiry" class="form-control"></textarea>
                            </div>
                        </div>
                        <fieldset>
                            <div class="form-group required">
                                <div class="col-sm-12">
                                    <div class="g-recaptcha" data-sitekey="6LfASkMUAAAAAKb0YThDF1KSdEFtkltDfiBI9_iI"></div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="clearfix"></div>
                    </fieldset>
                    <div class="buttons submit-btn">
                        <div class="pull-right">
                            <input class="btn btn-primary" type="submit" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>