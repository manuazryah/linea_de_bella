<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Product;
use common\models\User;

$this->title = 'Shopping Cart';
?>
<section class="main-breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><?= Html::a('<span>Home</span>', ['/site/index'], ['class' => '']) ?></li>
                <li class="active">My Cart</li>
        </ul>
    </div>
</section>

<!--banner-->
<section class="in-breadcrumb-section"><!--in-breadcrumb-section-->
  <div class="container">
    <div class="main-breadcrumb"><a href="index.html">Home</a><i>//</i><span>Products</span> </div>
  </div>
</section>
<!--in-breadcrumb-section-->

<section class="in-cart-page"><!--in-cart-page-->
  <div class="container">
    <table class="table table-mobile-view-hidden">
      <thead>
        <tr>
          <th><div class="head-text">Product</div></th>
          <th><div class="head-text">Price</div></th>
          <th><div class="head-text">QTY</div></th>
          <th><div class="head-text">Total</div></th>
          <th><div class="head-text">Remove</div></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="td"><div class="row">
              <div class="col-sm-4"> <img src="images/product/product1.jpg" width="90" > </div>
              <div class="col-sm-8">
                <h2 class="product-head">WAVES David of coolwater</h2>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
              </div>
            </div></td>
          <td><h3 class="price-head">AED 200</h3></td>
          <td>
              <div class="input-group number-spinner"> <span class="input-group-btn">
              <button class="btn" data-dir="dwn"><span class="fas fa-minus"></span></button>
              </span>
              <input type="number" class="form-control text-center" value="1">
              <span class="input-group-btn">
              <button class="btn" data-dir="up"><span class="fas fa-plus"></span></button>
              </span> 
              </div>
          </td>
          <td><h3 class="price-head">AED 200</h3></td>
          <td><a href="#" class="remove-button"><i class="fas fa-trash-alt"></i></a></td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td class="td"><div class="row">
              <div class="col-sm-4"> <img src="images/product/product1.jpg" width="90" > </div>
              <div class="col-sm-8">
                <h2 class="product-head">WAVES David of coolwater</h2>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
              </div>
            </div></td>
          <td><h3 class="price-head">AED 200</h3></td>
          <td><div class="input-group number-spinner"> <span class="input-group-btn">
              <button class="btn" data-dir="dwn"><span class="fas fa-minus"></span></button>
              </span>
              <input type="text" class="form-control text-center" value="1">
              <span class="input-group-btn">
              <button class="btn" data-dir="up"><span class="fas fa-plus"></span></button>
              </span> </div></td>
          <td><h3 class="price-head">AED 200</h3></td>
          <td><a href="#" class="remove-button"><i class="fas fa-trash-alt"></i></a></td>
        </tr>
      </tbody>
    </table>
    <div class="mobile-view-cart-section">
      <div class="close-button">
        <button title="Remove From Cart" class="remove-cart"><i class="fas fa-times" aria-hidden="true"></i></button>
        <div class="clear"></div>
      </div>
      <div class="row">
        <div class="col-4">
          <div class="img-box"><a href="#"> <img src="images/product/product1.jpg" width="90" > </a></div>
        </div>
        <div class="col-8">
          <h2 class="product-head">WAVES David of coolwater</h2>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
          <div class="cart-price-section">
            <div class="row">
              <div class="col-4">
                <h4 class="sub-head">Price:</h4>
              </div>
              <div class="col-8">
                <h4 class="sub-head2">AED 200</h4>
              </div>
            </div>
          </div>
          <div class="cart-price-section">
            <h4 class="sub-head3">Quantity</h4>
            <div class="input-group number-spinner"> <span class="input-group-btn">
              <button class="btn" data-dir="dwn"><span class="fas fa-minus"></span></button>
              </span>
              <input type="text" class="form-control text-center" value="1">
              <span class="input-group-btn">
              <button class="btn" data-dir="up"><span class="fas fa-plus"></span></button>
              </span> </div>
          </div>
        </div>
      </div>
      <div class="bottom-item-total">
        <div class="row">
          <div class="col-6">
            <h5 class="item-left-head">Item Total</h5>
          </div>
          <div class="col-6">
            <h6 class="item-right-head">AED 200</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="total-price-section">
      <h4 class="price-head">Subtotal:AED 200</h4>
      <p>SHIPPING, TAXES, AND DISCOUNTS WILL BE CALCULATED AT CHECKOUT.</p>
      <div class="button-section"> <a href="#" class="check-utton">check out</a> <a href="#" class="check-utton">Continue shopping</a> </div>
    </div>
  </div>
</section>
<script>
$(document).on('click', '.number-spinner button', function () {    
	var btn = $(this),
		oldValue = btn.closest('.number-spinner').find('input').val().trim(),
		newVal = 0;
	
	if (btn.attr('data-dir') == 'up') {
		newVal = parseInt(oldValue) + 1;
	} else {
		if (oldValue > 1) {
			newVal = parseInt(oldValue) - 1;
		} else {
			newVal = 1;
		}
	}
	btn.closest('.number-spinner').find('input').val(newVal);
});


</script>