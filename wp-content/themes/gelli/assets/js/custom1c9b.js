(function ($) {
	// Can also be used with $(document).ready()
	if($('.item-product .social-midle .inline').length){
		$('.item-product .social-midle .inline').each(function(){
			var $_parent = $(this).parent('.social-midle');
			$(this).hover(
				function() {
					if(!$( this ).hasClass( "hover" )){
						$_parent.find('.inline').removeClass("hover");
					}
				}, function() {
					$_parent.find('.inline_cart').addClass("hover");
				}
			)
		});
	}
	$(window).load(function() {
		$('.flexslider').flexslider({
			animation: "slide",
			prevText: "",
			nextText: "",
			slideshow:false
		});
	});

	var q = jQuery('.quantity');
	q.on('click','button',function(e){
		e.preventDefault();
		var self = jQuery(this),
		data = self.data('count'),
		i = self.parent().children('input'),
		val = i.val();
		if(data === "plus"){
			i.val(++val);
		}
		else{
			if(val == 1) return false;
			i.val(--val);
		}
		jQuery( document ).on(
		'change input',
		'div.woocommerce > form .cart_item :input',
		jQuery( 'div.woocommerce > form input[name="update_cart"]' ).prop( 'disabled', false ) );
	});
	jQuery( document ).ajaxSuccess(function() { 
		var q = jQuery('.quantity');
		q.on('click','button',function(e){
			e.preventDefault();
			var self = jQuery(this),
			data = self.data('count'),
			i = self.parent().children('input'),
			val = i.val(); 
			if(data === "plus"){
				i.val(++val);
			}
			else{
				if(val == 1) return false;
				i.val(--val);
			}
			jQuery( document ).on(
			'change input',
			'div.woocommerce > form .cart_item :input',
			jQuery( 'div.woocommerce > form input[name="update_cart"]' ).prop( 'disabled', false ) );
		});
	});
	if(jQuery('.dailydeals-product').length){
		jQuery('.dailydeals-product .new-product').each(function(){
			var $_this=jQuery(this);
			var $_product_id = $_this.data('id');
			var $_future_date = $_this.find('#future_date_'+$_product_id);
			var settime = $_future_date .attr('data-endate');
			$_future_date .countdowntimer({
				dateAndTime : settime+" 00:00:00",
				size : "lg",
				regexpMatchFormat: "([0-9]{1,4}):([0-9]{1,4}):([0-9]{1,4}):([0-9]{1,4})",
				regexpReplaceWith: "<span><b>$1</b><br>Days</span> <span><b>$2</b><br>Hours</span> <span><b>$3</b><br>Mins</span><span><b>$4</b><br>Secs</span>"
			});
		});
	}
	/*JQuery lightbox*/
	jQuery(".fancybox").fancybox();

	jQuery('#mycarousel').jcarousel({
		vertical: true,
		scroll: 1
	});
	var carousel = jQuery("#carousel3d").featureCarousel({
		autoPlay:0,
		smallFeatureHeight: 380,
		smallFeatureWidth: 380,
		largeFeatureWidth : 460,
		largeFeatureHeight: 460,
		sidePadding:0,
		trackerSummation: false,
		movedToCenter: function($feature) {
			$feature.addClass('active');
			$feature.find('.box-collection').removeClass('hide');
		},
		leavingCenter: function($feature) {
			$feature.removeClass('active');
			$feature.find('.box-collection').addClass('hide');
		},

	});
	var carousel1 = jQuery(".carousel3d-dailydeal").featureCarousel({
		autoPlay:0,
		smallFeatureHeight: 380,
		smallFeatureWidth: 410,
		largeFeatureWidth : 550,
		largeFeatureHeight: 480,
		sidePadding:0,
		trackerIndividual:false,
		trackerSummation: false,
		movedToCenter: function($feature) {
			$feature.addClass('active_item');
		},
		leavingCenter: function($feature) {
			$feature.removeClass('active_item');
		},
	});
	jQuery('.special-product #mycarousel li').click(function(){
		jQuery(".groupcat").addClass('deactive');
		jQuery(".groupcat").removeClass('active');
		var idclick = jQuery(this).data('id');
		jQuery("#tab-"+idclick).removeClass('deactive');
		jQuery("body").addClass('loader').delay(300).queue(function(){
			jQuery(this).removeClass("loader").dequeue();
		});;
	});
	// slider 3d
	if(jQuery('.slide3d').length){
		var flag = 0;
		 jQuery('.slide3d .groupcat ').each(function(){
			 flag++;
			 var $_staff_info = jQuery(this).find('.ms-staff-info');
			 var slider = new MasterSlider();
			 slider.setup( 'masterslider'+flag , {
				 loop:true,
				 width:240,
				 height:240,
				 speed:20,
				 view:'fadeWave',
				 preload:0,
				 space:0,
				 space:45
			 });
			 slider.control('slideinfo',{insertTo:$_staff_info });
			 slider.control('bullets');
		 });
	}

	var slider_dailydeal = new MasterSlider();
	slider_dailydeal.setup('masterslider-dailydeal' , {
		width:550,
		height:550,
		space:-240,
		loop:true,
		view:'wave',
		filters: {
			opacity: 0.5,
		}
	});
	slider_dailydeal.control('arrows');

	jQuery('.tabs ul li:first-child').addClass('active');
	tab_custom('.gelli-tabproduct');
	tab_custom('.filter-product');
	function tab_custom( element_class ){
		var selector = '.tabs ul li';
		jQuery(selector).on('click', function(){
			jQuery(selector).removeClass('active');
			jQuery(this).addClass('active');
		});

		var selector1 = element_class+' .gelli-tabproduct-content > div';
		jQuery(element_class+' .tabs-0').addClass('active');
		jQuery(selector).each(function() {
			jQuery(this).find('a').on('click', function(e){
				e.preventDefault();
				jQuery(selector).removeClass('active');
				jQuery(this).parent('li').addClass('active');
				var $_tabcontent = jQuery(this). data('id');
				jQuery(selector1).removeClass('active');
				jQuery(element_class+' .gelli-tabproduct-content > .'+$_tabcontent).addClass('active');
			});
		});
	}

	jQuery('.archive ul.products').addClass('grid');
	jQuery('#grid1').click(function(e) {
		e.preventDefault();
		jQuery(this).addClass('active');
		jQuery('#list1').removeClass('active');
		jQuery('ul.products').fadeOut(300, function() {
			jQuery(this).addClass('grid').removeClass('list').fadeIn(300);
		});
	});
	jQuery('#list1').click(function(e) {
		e.preventDefault();
		jQuery(this).addClass('active');
		jQuery('#grid1').removeClass('active');
		jQuery('ul.products').fadeOut(300, function() {
			jQuery(this).removeClass('grid').addClass('list').fadeIn(300);
		});
	});
	if(jQuery('.start_column').length){
		var $_nav_col=0;
		jQuery(".start_column").each(function(){
			 $_nav_col = $_nav_col +1;
		});
		jQuery(".primary-menu .megamenu").each(function(){
			jQuery(this).find('> ul.sub-menu').addClass('container');
		});
		jQuery(".start_column").each(function(){
			 jQuery(this).nextUntil(".start_column").andSelf().wrapAll("<li class='coll' style='width:"+ 100/$_nav_col +"%'><ul class='list-unstyled'></ul></li>");
		});
	}
	jQuery('.select_title').each(function() {
		jQuery(this).click(function(){
			var $_custom_select = jQuery(this).parent('.custom_select');
			$_custom_select.find('.select_list').toggleClass('active');
		});
	});
	function redirectTo(sUrl) {
		window.location = sUrl;
	}
	if(jQuery('.header-v3 .col-search .category_dropdown ul.dropdown-menu li').length){
		jQuery('.header-v3 .col-search .category_dropdown ul.dropdown-menu li').each(function(){
			jQuery(this).click(function(){
				jQuery(this).closest('.category_dropdown').find('.dropdown-toggle').html('<span>'+jQuery(this).text()+'</span><i class="fa fa-angle-down"></i>');
				jQuery(this).closest('form.woocommerce-product-search').find('input[name="product_cat"]').val(jQuery(this).data('val'));
			});
		});
	}
	if($('.dropdown-toggle').length){
		$('.dropdown-toggle').click(function(){
			if($('.main-nav').length){
				$('.main-nav').removeClass('active');
			}
		});
	}
	// Sub menu
	if(jQuery('.main-navigation ul.nav-menu').length){
		$('.main-navigation .nav-menu  li.menu-item-has-children').prepend('<span class="arrow"><i class="fa fa-angle-down"></i></span>');
		if(jQuery( window ).width()<992){
			jQuery('.main-navigation ul.nav-menu').width(jQuery( window ).width()) ;
		}
		jQuery( window ).resize(function() {
			if(jQuery( window ).width()<992){
				jQuery('.main-navigation ul.nav-menu').width(jQuery( window ).width());
			}else{
				jQuery('.main-navigation ul.nav-menu').width('auto');
				jQuery('.main-navigation .menu-item-has-children').removeClass( 'active' );
				jQuery('.main-navigation .sub-menu').removeAttr( 'style' );
			}
		});
	}

	jQuery(".btn-inverse").click(function(e){
		jQuery(".main-nav").toggleClass("active");
	});

	$("li.menu-item-has-children > span.arrow").click(function (e) {
		var $_this = $(this);
		var $_parrent1 = $(this).closest('li.menu-item-has-children');
		var $_parrent2 = $_parrent1.closest('li.menu-item-has-children');
		var $_parrent3 = $_parrent2.closest('li.menu-item-has-children');
		$('.main-navigation li.menu-item-has-children').each(function(){
			if ( $(this).find($_this).length ) {  return true; }
				$(this).removeClass("active");
				$(this).find(' > ul.sub-menu').slideUp('slow');
		});
		$_this.parent().toggleClass('active');
		$_this.parent('li').find(' > ul.sub-menu').slideToggle('slow');
	});
	// go to top scroll init
	if(jQuery('.scroll-to-top').length){
		var linkTop = jQuery('.scroll-to-top');
		var animationSpeed = 600;

		linkTop.click(function(e) {
			e.preventDefault();

			jQuery('body,html').stop(true).animate({
				scrollTop: 0
			}, animationSpeed);
		});

		initGoToTopScroll()
	}

	jQuery(window).scroll(function() {
		initGoToTopScroll();
	});
	function initGoToTopScroll() {
		var linkTop = jQuery('.scroll-to-top'),
			win = jQuery(window);

		if(win.scrollTop() > 0) {
			linkTop.css('bottom','25px');
		} else {
			linkTop.css('bottom','-100px');
		}
	}
	$( document ).ajaxComplete(function( event,request, settings ){
		if($('#cart_number').length){
			$('.gelli-cart .cart-num').html($('#cart_number').val());
		}
		if($('.gelli-cart-v2 .cart-info-wrap').length){
			$('.gelli-cart-v2 .cart-info-wrap').html($('.gelli-cart-v2 .widget_shopping_cart_content .cart-info').html())
		}
		$('body').removeClass('loading');
	});

	$('ul.mega-menu  .menu-bottom').hide();
    $('ul.mega-menu > li.megamenu .menu-bottom').each(function(){
        var className = $(this).parent().parent().attr('id');
            if($(this).hasClass(className)){
                $(this).show();
            }
    });
    $('.main-menu6 .main-navigation li.menu-item-has-children > a').click(function(e){
    	e.preventDefault();
    	$(this).toggleClass('clicked');
    	$(this).parent().find('> .sub-menu').toggle('slow');
    })
    $('.header-v6 .btn-default').click(function(){
    	$('.menu6-box').css({'right':'0'})
    })
    $('.main-menu6 .close6').click(function(){
    	$('.menu6-box').css({'right':'-100%'})
    })
})(jQuery);
