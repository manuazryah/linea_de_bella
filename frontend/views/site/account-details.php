<?php include './includes/header.php'; ?>
<div class="information-contact pbtm40">
    <div class="content_breadcum" style="background-position: 50% 0px;"></div>
    <div class="container">
        <!--<h1 class="page-title">Contact Us</h1>-->
        <ul class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i></a></li>
            <li><a href="my-account.php">Account</a></li>
            <li class="active"><a>Account Details</a></li>
        </ul>
        <div class="row">
            <aside id="column-left" class="col-lg-3 col-md-3 col-sm-12">
                <div class="box">
                    <div class="box-heading"><span>ACCOUNT</span>
                    </div>
                    <div class="list-group"> 
                        <a class="list-group-item active" href="my-account.php">My Account</a>
                        <a class="list-group-item" href="login-up.php">Login</a>
                        <a class="list-group-item" href="register.php">Register</a>
                        <a class="list-group-item" href="forgot-password.php">Forgotten Password</a>
                        <a class="list-group-item" href="address.php">Address Book</a>
                        <a class="list-group-item" href="wishlist.php">Wish List</a>
                        <a class="list-group-item" href="order-history.php">Order History</a>
                        <a class="list-group-item" href="">Logout</a>
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
                                                <img src="images/products/1.jpg" alt="White Diamonds" title="White Diamonds" width="60" height="82" class="img-responsive">
                                            </a> 
                                            <span class="saleicon sale">Sale</span> 
                                        </div>
                                        <div class="caption">
                                            <h4><a href="">Akanthos</a></h4>
                                            <p class="price"> <span class="price-new">$110.00</span>  <span class="price-old">$241.99</span>
                                                <span class="price-tax">Ex Tax: $90.00</span>
                                            </p>
                                            <!--                                            <div class="button_cart">
                                                                                            <button type="button" onclick="cart.add('49');">Add to Cart</button>
                                                                                            <div class="quickview" data-toggle="tooltip" data-original-title="" title=""> <a href=""><i class="fa fa-eye"></i></a>
                                                                                            </div>
                                                                                        </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-items">
                                <div class="product-block product-thumb transition">
                                    <div class="product-block-inner">
                                        <div class="image">
                                            <a href="">
                                                <img src="images/products/2.jpg" alt="White Diamonds" title="White Diamonds" width="60" height="82" class="img-responsive">
                                            </a> 
                                            <span class="saleicon sale">Sale</span> 
                                        </div>
                                        <div class="caption">
                                            <h4><a href="">Aimer</a></h4>
                                            <p class="price"> <span class="price-new">$110.00</span>  <span class="price-old">$241.99</span>
                                                <span class="price-tax">Ex Tax: $90.00</span>
                                            </p>
                                            <!--                                            <div class="button_cart">
                                                                                            <button type="button" onclick="cart.add('49');">Add to Cart</button>
                                                                                            <div class="quickview" data-toggle="tooltip" data-original-title="" title=""> <a href=""><i class="fa fa-eye"></i></a>
                                                                                            </div>
                                                                                        </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-items">
                                <div class="product-block product-thumb transition">
                                    <div class="product-block-inner">
                                        <div class="image">
                                            <a href="">
                                                <img src="images/products/3.jpg" alt="White Diamonds" title="White Diamonds" width="60" height="82" class="img-responsive">
                                            </a> 
                                            <span class="saleicon sale">Sale</span> 
                                        </div>
                                        <div class="caption">
                                            <h4><a href="">D'A bruzzo</a></h4>
                                            <p class="price"> <span class="price-new">$110.00</span>  <span class="price-old">$241.99</span>
                                                <span class="price-tax">Ex Tax: $90.00</span>
                                            </p>
                                            <!--                                            <div class="button_cart">
                                                                                            <button type="button" onclick="cart.add('49');">Add to Cart</button>
                                                                                            <div class="quickview" data-toggle="tooltip" data-original-title="" title=""> <a href=""><i class="fa fa-eye"></i></a>
                                                                                            </div>
                                                                                        </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <span class="latest_default_width" style="display:none; visibility:hidden"></span>
            </aside>
            <div id="content" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="u-columns woocommerce-Addresses col2-set addresses">
                    <div class="u-column1 col-1 woocommerce-Address">
                        <header class="woocommerce-Address-title title">
                            <h3 class="title2">Account details</h3>
                        </header>
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <fieldset id="address">
                                <div class="form-group required">
                                    <label class="col-sm-2 control-label" for="input-firstname">First Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="firstname" value="" placeholder="First Name" id="input-firstname" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="lastname" value="" placeholder="Last Name" id="input-lastname" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control">
                                    </div>
                                </div>
                                <fieldset>
                                    <h3 class="title2">Password change</h3>
                                    <div class="col-xs-12 pad-rit0">
                                        <label for="password_current">Current password (leave blank to leave unchanged)</label>
                                    </div>
                                    <div class="col-sm-12 pad-rit0">
                                        <input type="password" class="Input--password form-control input-text" name="password_current" id="password_current">
                                    </div>
                                    <div class="col-sm-12 pad-rit0">
                                        <label for="password_1">New password (leave blank to leave unchanged)</label>
                                    </div>
                                    <div class="col-sm-12 pad-rit0">
                                        <input type="password" class="Input--password form-control input-text" name="password_1" id="password_1">
                                    </div>
                                    <div class="col-sm-12 pad-rit0">
                                        <label for="password_2">Confirm new password</label>
                                    </div>
                                    <div class="col-sm-12 pad-rit0">
                                        <input type="password" class="Input--password form-control input-text" name="password_2" id="password_2">
                                    </div>
                                </fieldset>
                                <div class="buttons submit-btn">
                                    <div class="pull-right">
                                        <input class="btn btn-primary shadowbtn" type="submit" value="Save Address">
                                    </div>
                                </div>

                            </fieldset>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<?php include './includes/footer.php'; ?>