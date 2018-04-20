<?php include './includes/header.php'; ?>
<div class="information-contact pbtm40">
    <div class="content_breadcum" style="background-position: 50% 0px;"></div>
    <div class="container">
        <!--<h1 class="page-title">Contact Us</h1>-->
        <ul class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i></a></li>
            <li><a href="my-account.php">Account</a></li>
            <li class="active"><a>Order History</a></li>
        </ul>
        <div class="row">
            <div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <h3 class="title2">My Order History</h3>
                <div class="acordion-tab">
                    <ul class="nav md-pills nav-justified pills-secondary">
                        <li class="nav-item active">
                            <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab">Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab2" role="tab">Open Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab3" role="tab">Canceled Orders</a>
                        </li>
                    </ul>

                    <!-- Tab panels -->
                    <div class="tab-content">

                        <!--Panel 1-->
                        <div class="tab-pane fade in active" id="tab1" role="tabpanel">
                            <div class="order-box wishlist-box">
                                <div class="box-header">
                                    <div class="col-lg-12">
                                        <div class="col-xs-2">
                                            <ul>
                                                <li class="header-title">order placed</li>
                                                <li>29 January 2017</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-2">
                                            <ul>
                                                <li class="header-title">total</li>
                                                <li>$110.00</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-3">
                                            <ul>
                                                <li class="header-title">ship to</li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Customer Name  <b class="fa fa-angle-down"></b></a>
                                                    <ul class="dropdown-menu">
                                                        <address>Company name<br>First name Last name<br>House number<br>Apartment<br>Somewhere - 682703<br>Kerala, India</address>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-3 pull-right">
                                            <ul>
                                                <li class="header-title">order<span>#406-6879246-0697169</span></li>
                                                <li><a href="">Order Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <div class="col-xs-12">
                                        <h3 class="title2">Delivered 31-Jan-2018</h3>
                                        <p>Package was handed directly to the customer.</p>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="col-xs-2"><img class="img-responsive" src="images/products/1.jpg" width="80" height="80"></div>
                                        <div class="col-xs-7">
                                            <h6 class="product-title">AKANTHOS</h6>
                                            <p style="margin-bottom: 0px;">Sold by: Linea De Bella</p>
                                            <h2 class="price">
                                                <span class="price-new">$110.00</span> 
                                            </h2>
                                        </div>
                                        <div class="col-xs-3">
                                            <a href="" class="btn shadowbtn">Buy it again</a>
                                            <a href="" class="btn shadowbtn">Leave seller feedback</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.Panel 1-->

                        <!--Panel 2-->
                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                            <p class="a-section a-spacing-top-large a-text-center">
                                Looking for an order? All of your orders have been dispatched.
                                <a class="a-link-normal" href="order-history.php">
                                    View all orders
                                </a>

                                <script type="text/javascript">
                                    if (typeof uet == 'function') {
                                        uet('cf');
                                    }
                                </script>

                            </p>

                        </div>
                        <!--/.Panel 2-->

                        <!--Panel 3-->
                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                            <div class="tab-pane fade in active" id="tab1" role="tabpanel">
                            <div class="order-box wishlist-box">
                                <div class="box-header">
                                    <div class="col-lg-12">
                                        <div class="col-xs-2">
                                            <ul>
                                                <li class="header-title">order placed</li>
                                                <li>29 January 2017</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-2">
                                            <ul>
                                                <li class="header-title">total</li>
                                                <li>$0.00</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-3">
                                            <ul>
                                                <li class="header-title">ship to</li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Customer Name  <b class="fa fa-angle-down"></b></a>
                                                    <ul class="dropdown-menu">
                                                        <address>Company name<br>First name Last name<br>House number<br>Apartment<br>Somewhere - 682703<br>Kerala, India</address>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-3 pull-right">
                                            <ul>
                                                <li class="header-title">order<span>#406-6879246-0697169</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <div class="col-xs-12">
                                        <h3 class="title2">Canceled</h3>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="col-xs-2"><img class="img-responsive" src="images/products/1.jpg" width="80" height="80"></div>
                                        <div class="col-xs-7">
                                            <h6 class="product-title">AKANTHOS</h6>
                                            <p style="margin-bottom: 0px;">Sold by: Linea De Bella</p>
                                            <h2 class="price">
                                                <span class="price-new">$0.00</span> 
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </div>
                        <!--/.Panel 3-->


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include './includes/footer.php'; ?>
<script>
    $('ul.nav li.dropdown').hover(function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });
</script>