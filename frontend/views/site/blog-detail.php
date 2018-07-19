<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

if (isset($meta_title) && $meta_title != '')
        $this->title = $meta_title;
else
        $this->title = 'Linea De Bella';
?>

<section class="in-banner"><img src="<?= Yii::$app->homeUrl ?>images/banner/in-banner.jpg" class="img-fluid"></section>
<!--banner-->
<section class="in-breadcrumb-section"><!--in-breadcrumb-section-->
        <div class="container">
                <div class="main-breadcrumb"><a href="<?= Yii::$app->homeUrl ?>">Home</a><i>//</i><span>Blog</span> </div>
        </div>
</section><!--in-breadcrumb-section-->

<section class="in-blog-section"><!--in-blog-section-->
        <div class="container">

                <div class="blog-details-box">
                        <div class="row">
                                <div class="col-lg-8"><!--col-md-8-->
                                        <h2>Incredible scents. Great Gifts </h2>
                                        <div class="date">Post By: admin <span>| </span> February 19, 2018<span>| </span> No Comments</div>
                                        <div class="img-box"><img src="<?= Yii::$app->homeUrl ?>images/blog.png" class="img-fluid"></div>

                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ILorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <h2>Blog Heading</h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ILorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <h2>Blog Heading</h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ILorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="share-box">
                                                <h3>Share This Article:</h3>
                                                <div class="follows-Share">
                                                        <ul>
                                                                <li> <a href="#" target="_blank"> <i class="fab fa-facebook-f"></i> </a></li>
                                                                <li> <a href="#" target="_blank"> <i class="fab fa-twitter"></i> </a></li>
                                                                <li> <a href="#" target="_blank"> <i class="fab fa-linkedin-in"></i> </a></li>
                                                                <li> <a href="#" target="_blank"> <i class="fab fa-youtube"></i> </a></li>
                                                        </ul>
                                                </div>

                                                <div class="clear"></div>
                                        </div>

                                </div>
                                <!--col-md-8-->
                                <div class="col-lg-4">


                                        <div class="blog-category-box">

                                                <h2>Recent Posts</h2>
                                                <div class=" blog-recent-posts">
                                                        <div class="posts"><!--posts-->
                                                                <div class="row">
                                                                        <div class="col-sm-5"><img src="<?= Yii::$app->homeUrl ?>images/blog.png" class="img-fluid"> </div>
                                                                        <div class="col-sm-7">
                                                                                <a href="#"><h3>Totam Rem Aperiam Eaque Ipsa Quae ab Illo.</h3></a>
                                                                                <small>February 19, 2018</small>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                </div>
                                                        </div>
                                                        <!--posts-->
                                                        <div class="posts"><!--posts-->
                                                                <div class="row">
                                                                        <div class="col-sm-5"><img src="<?= Yii::$app->homeUrl ?>images/blog2.png" class="img-fluid"> </div>
                                                                        <div class="col-sm-7">
                                                                                <a href="#"><h3>Totam Rem Aperiam Eaque Ipsa Quae ab Illo.</h3></a>
                                                                                <small>February 19, 2018</small>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                </div>
                                                        </div>
                                                        <!--posts-->
                                                        <div class="posts"><!--posts-->
                                                                <div class="row">
                                                                        <div class="col-sm-5"><img src="<?= Yii::$app->homeUrl ?>images/blog3.png" class="img-fluid"> </div>
                                                                        <div class="col-sm-7">
                                                                                <a href="#"><h3>Totam Rem Aperiam Eaque Ipsa Quae ab Illo.</h3></a>
                                                                                <small>February 19, 2018</small>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                </div>
                                                        </div>
                                                        <!--posts-->
                                                        <div class="posts"><!--posts-->
                                                                <div class="row">
                                                                        <div class="col-sm-5"><img src="<?= Yii::$app->homeUrl ?>images/blog.png" class="img-fluid"> </div>
                                                                        <div class="col-sm-7">
                                                                                <a href="#"><h3>Totam Rem Aperiam Eaque Ipsa Quae ab Illo.</h3></a>
                                                                                <small>February 19, 2018</small>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                </div>
                                                        </div>
                                                        <!--posts-->
                                                        <div class="posts"><!--posts-->
                                                                <div class="row">
                                                                        <div class="col-sm-5"><img src="<?= Yii::$app->homeUrl ?>images/blog2.png" class="img-fluid"> </div>
                                                                        <div class="col-sm-7">
                                                                                <a href="#"><h3>Totam Rem Aperiam Eaque Ipsa Quae ab Illo.</h3></a>
                                                                                <small>February 19, 2018</small>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                </div>
                                                        </div>
                                                        <!--posts-->
                                                </div>
                                        </div>
                                </div>
                                <div class="clear"></div>
                        </div>
                </div>


        </div>
</section><!--in-blog-section-->