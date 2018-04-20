// page init
jQuery(function($){
    "use strict";
    initCountDown();
    initCarousel();
    initSlickSlider();
    initStickyHeader();
    initProductSlide('.slide-product',4);
    initProductSlide('.slide-product-filter',2);
    initProductSlide('.slide-dailydeals-product',3);
    initProductSlide('.gelli-client',4);
    initProductSlide_thumb('.slide-product-thumb');
    initProductSlide('.instagram-slide',8); 
    gelli_initloader();
    productMasonryLoadMore();
	gelli_initmegamenu();
});
jQuery(window).on('load', function() {
    "use strict";
    initIsotopControl(); 
});

function gelli_initmegamenu() {
	if(jQuery( window ).width() > 991){
		jQuery('.header_mega_full li.megamenu').each(function(){
			if(jQuery(this).find('> ul.sub-menu').length){
				var container = jQuery(this).find('> ul.sub-menu');
				container.wrap( "<div class='menu_fullwidth' style='width:"+jQuery( window ).width()+"px'></div>" );
			}
		});
	}else{
		jQuery('.header-over').each(function(){
			jQuery(this).addClass('header-over-rm');
			jQuery(this).removeClass('header-over');
		});
	}
	jQuery(window).resize(function() {
       if(jQuery( window ).width() > 991){
			jQuery('.header_mega_full li.megamenu').each(function(){
				if(jQuery(this).find('> ul.sub-menu').length){
					var container = jQuery(this).find('> ul.sub-menu');
					container.wrap( "<div class='menu_fullwidth' style='width:"+jQuery( window ).width()+"px'></div>" );
				}
			});
			jQuery('.header-over-rm').each(function(){
				jQuery(this).addClass('header-over');
				jQuery(this).removeClass('header-over-rm');
			});
		}else{
			jQuery('.header_mega_full li.megamenu').each(function(){
				if(jQuery(this).find('> .menu_fullwidth > ul.sub-menu').length){
					var container = jQuery(this).find(' > .menu_fullwidth > ul.sub-menu');
					container.unwrap();
				}
			});
			jQuery('.header-over').each(function(){
				jQuery(this).addClass('header-over-rm');
				jQuery(this).removeClass('header-over');
			});
		}
    });
}
function gelli_initloader() {
    jQuery(window).load(function () {
        if (jQuery(".loaderWrap").length > 0)
        {
            jQuery(".loaderWrap").delay(300).fadeOut("slow");
        }
        initIsotopControl();
        productMasonryLoadMore();
    });
}
//  Custom variables for isotop
function initIsotopControl() {
    var isotopeHolder = jQuery('.work'),
        win = jQuery(window);

    isotopeHolder.isotope({transitionDuration: '0.75s'});

    setTimeout(function() {
        isotopeHolder.isotope('layout');
    }, 100);

    jQuery('#work-filter a').click(function(e){
        e.preventDefault();

        jQuery('#work-filter li').removeClass('active');
        jQuery(this).parent('li').addClass('active');
        var selector = jQuery(this).attr('data-filter');
        isotopeHolder.isotope({ filter: selector });
    });

    jQuery('#work-shuffle').click(function() {
        isotopeHolder.isotope('updateSortData').isotope({
            sortBy: 'random'
        });
    });

    win.resize(function() {
        isotopeHolder.isotope('layout');
    });
}

// sticky header init
function initStickyHeader() {
    var win = jQuery(window),
        stickyClass = 'fixed-position';

    jQuery('.header_fixed').each(function() {
        var header = jQuery(this);
        var headerOffset = header.offset().top || 0;
        var flag = true;

        function scrollHandler() {
            if (win.scrollTop() > headerOffset) {
                if (flag){
                    flag = false;
                    header.addClass(stickyClass);
                }
            } else {
                if (!flag) {
                    flag = true;
                    header.removeClass(stickyClass);
                }
            }

            ResponsiveHelper.addRange({
                '..991': {
                    on: function() {
                        header.removeClass(stickyClass);
                    }
                }
            });
        }

        scrollHandler();
        win.on('scroll resize orientationchange', scrollHandler);
    });
}
// count down init
function initCountDown() {
    var newYear = new Date(jQuery('.countdowns').html());
    var server_time = function(){
      return new Date(jQuery('.countdowns').data('time-now'));
    }
    jQuery('#countdown').countdown({until: newYear});
}
// scroll galleries init
function initCarousel() {
    jQuery('.gelli-client .beans-stepslider').scrollGallery({
        mask: '.gelli-client .beans-stepslider .beans-mask',
        slider: '.gelli-client .beans-stepslider .beans-slideset',
        slides: '.gelli-client .beans-stepslider .beans-slide',
        btnPrev: 'a.btn-prev',
        btnNext: 'a.btn-next',
        generatePagination: '.beans-pagination',
        stretchSlideToMask: true,
        maskAutoSize: true,
        autoRotation: false,
        switchTime: 3000,
        animSpeed: 1000,
        step: 1,
        useTranslate3D:true,
    });
}
function initProductSlide( element, index ){
    jQuery( element+' .beans-stepslider').each(function() {
        if ( jQuery(this).parent().data( 'columns' ) != '' ) {
            index = jQuery(this).parent().data( 'columns' );
        }else{
            index = index;
        }
        var item = jQuery(this);
        var btnPrev = item.find('.btn-prev');
        var btnNext = item.find('.btn-next');
        var slider = item.find('.beans-slideset');
        var pagination = item.find('.beans-pagination');

        slider.slick({
            arrows: (btnPrev.length > 0) && (btnNext.length > 0) ? true : false,
            dots: pagination.length > 0 ? true : false,
            slidesToShow: 1,
            mobileFirst: true,
            autoplay: false,
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 3
                    }
                }, {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: index
                    }
                },
                , {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1
                    }
                }
                , {
                    breakpoint: 320,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
        pagination.remove();
        btnPrev.remove();
        btnNext.remove();
    });
}
function initProductSlide_thumb( element ){
    jQuery( element+' .beans-stepslider').each(function() {
        var item = jQuery(this);
        var btnPrev = item.find('.btn-prev');
        var btnNext = item.find('.btn-next');
        var slider = item.find('.beans-slideset');
        var pagination = item.find('.beans-pagination');

        slider.slick({
            arrows: (btnPrev.length > 0) && (btnNext.length > 0) ? true : false,
            dots: pagination.length > 0 ? true : false,
            slidesToShow: 1,
            mobileFirst: true,
            autoplay: false,
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4
                    }
                }
                , {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 4
                    }
                }
                , {
                    breakpoint: 320,
                    settings: {
                        slidesToShow: 2
                    }
                }
            ]
        });
        pagination.remove();
        btnPrev.remove();
        btnNext.remove();
    });
}
// cycle scroll galleries init
function initSlickSlider() {
    jQuery('.slide-product .beans-slider').each(function() {
        var item = jQuery(this);
        var btnPrev = item.find('.btn-prev');
        var btnNext = item.find('.btn-next');
        var slider = item.find('.beans-slideset');
        var pagination = item.find('.beans-pagination');

        slider.slick({
            arrows: (btnPrev.length > 0) && (btnNext.length > 0) ? true : false,
            dots: pagination.length > 0 ? true : false,
            pauseOnHover: false,
            autoplay: false,
            speed: 800
        });

        pagination.remove();
        btnPrev.remove();
        btnNext.remove();
    });
}
//-- Blog masonry load more function
function productMasonryCallback(){
var container = container_wrap.find('.work');
	 container.isotope('layout');
}
function productMasonryLoadMore() {
    if(jQuery('.filter-products').length){
        jQuery('.filter-products').each(function(){
            var container_wrap = jQuery(this);
            var container = container_wrap.find('.work');
            var items = container.find('.items');
            var load_more_btn   = container_wrap.find('.masonry_loadmore');

            load_more_btn.on( 'click', function(e) {
                var _this = jQuery(this),
                btn_html = jQuery(this).html();
                if( _this.attr('data-col')!== 'undefined'){
                    var gelli_col = _this.attr('data-col')
                }else { var gelli_col =''; }

                var current_page = parseInt( _this.attr('data-current-page'), 10 );
                if ( NaN == current_page ) return false;
                var _data_action= "masonry_load_more_product";

                if( _this.attr('data-maxpage')!== 'undefined'){
                    var _data_max_pages = _this.attr('data-maxpage');
                } else {
                    var _data_max_pages = gelli_ajax_product_masonry.max_pages;
                }
                var _data_page = current_page + 1;
                var _data_perpage = _this.attr('data-perpage')
                jQuery.ajax({
                    url: gelli_ajax_product_masonry.url,
                    type: 'post',
                    data:"&action="+_data_action+"&max_pages="+_data_max_pages+"&page="+_data_page+"&perpage="+_data_perpage+"&gelli_col="+gelli_col,
                    beforeSend: function() {
                        _this.html('<i class="no-margin-left fa fa-spinner fa-spin fa-3x fa-fw" aria-hidden="true" style="display: inline-block;"></i>');
                    },
                    success: function( html ) {
                        if ( html != '' ) {
                            container.isotope().append( jQuery(html) ).isotope('appended', container.find('.items:not([style])'));
                            setTimeout(function(){
                                container.isotope('layout');
                            }, 1000);
                        }
                        if ( current_page + 1 == _data_max_pages ) {
                            _this.remove();
                        }
                        else {
                            _this.attr('data-current-page', current_page + 1 );
                            _this.html(btn_html);
                        }
                    },
                    complete: function() {
                        _this.html(btn_html);
                    },
                    error: function( request, status, error ) {
                        console.log( request.responseText );
                    }
                });
            });

        })


    }

}
/*
 * jQuery Carousel plugin
 */
;(function($){function ScrollGallery(options) {this.options = $.extend({mask: 'div.mask',slider: '>*',slides: '>*',activeClass:'active',disabledClass:'disabled',btnPrev: 'a.btn-prev',btnNext: 'a.btn-next',generatePagination: false,pagerList: '<ul>',pagerListItem: '<li><a href="#"></a></li>',pagerListItemText: 'a',pagerLinks: '.pagination li',currentNumber: 'span.current-num',totalNumber: 'span.total-num',btnPlay: '.btn-play',btnPause: '.btn-pause',btnPlayPause: '.btn-play-pause',galleryReadyClass: 'gallery-js-ready',autorotationActiveClass: 'autorotation-active',autorotationDisabledClass: 'autorotation-disabled',stretchSlideToMask: false,circularRotation: true,disableWhileAnimating: false,autoRotation: false,pauseOnHover: false,maskAutoSize: false,switchTime: 4000,animSpeed: 600,event:'click',swipeThreshold: 15,handleTouch: true,vertical: false,useTranslate3D: false,step: false}, options);this.init();}ScrollGallery.prototype = {init: function() {if(this.options.holder) {this.findElements();this.attachEvents();this.refreshPosition();this.refreshState(true);this.resumeRotation();this.makeCallback('onInit', this);}},findElements: function() {this.fullSizeFunction = this.options.vertical ? 'outerHeight' : 'outerWidth';this.innerSizeFunction = this.options.vertical ? 'height' : 'width';this.slideSizeFunction = 'outerHeight';this.maskSizeProperty = 'height';this.animProperty = this.options.vertical ? 'marginTop' : 'marginLeft';this.gallery = $(this.options.holder).addClass(this.options.galleryReadyClass);this.mask = this.gallery.find(this.options.mask);this.slider = this.mask.find(this.options.slider);this.slides = this.slider.find(this.options.slides);this.btnPrev = this.gallery.find(this.options.btnPrev);this.btnNext = this.gallery.find(this.options.btnNext);this.currentStep = 0; this.stepsCount = 0;if(this.options.step === false) {var activeSlide = this.slides.filter('.'+this.options.activeClass);if(activeSlide.length) {this.currentStep = this.slides.index(activeSlide);}}this.calculateOffsets();if(typeof this.options.generatePagination === 'string') {this.pagerLinks = $();this.buildPagination();} else {this.pagerLinks = this.gallery.find(this.options.pagerLinks);this.attachPaginationEvents();}this.btnPlay = this.gallery.find(this.options.btnPlay);this.btnPause = this.gallery.find(this.options.btnPause);this.btnPlayPause = this.gallery.find(this.options.btnPlayPause);this.curNum = this.gallery.find(this.options.currentNumber);this.allNum = this.gallery.find(this.options.totalNumber);},attachEvents: function() {var self = this;this.bindHandlers(['onWindowResize']);$(window).bind('load resize orientationchange', this.onWindowResize);if(this.btnPrev.length) {this.prevSlideHandler = function(e) {e.preventDefault();self.prevSlide();};this.btnPrev.bind(this.options.event, this.prevSlideHandler);}if(this.btnNext.length) {this.nextSlideHandler = function(e) {e.preventDefault();self.nextSlide();};this.btnNext.bind(this.options.event, this.nextSlideHandler);}if(this.options.pauseOnHover && !isTouchDevice) {this.hoverHandler = function() {if(self.options.autoRotation) {self.galleryHover = true;self.pauseRotation();}};this.leaveHandler = function() {if(self.options.autoRotation) {self.galleryHover = false;self.resumeRotation();}};this.gallery.bind({mouseenter: this.hoverHandler, mouseleave: this.leaveHandler});}if(this.btnPlay.length) {this.btnPlayHandler = function(e) {e.preventDefault();self.startRotation();};this.btnPlay.bind(this.options.event, this.btnPlayHandler);}if(this.btnPause.length) {this.btnPauseHandler = function(e) {e.preventDefault();self.stopRotation();};this.btnPause.bind(this.options.event, this.btnPauseHandler);}if(this.btnPlayPause.length) {this.btnPlayPauseHandler = function(e) {e.preventDefault();if(!self.gallery.hasClass(self.options.autorotationActiveClass)) {self.startRotation();} else {self.stopRotation();}};this.btnPlayPause.bind(this.options.event, this.btnPlayPauseHandler);}if(isTouchDevice && this.options.useTranslate3D) {this.slider.css({'-webkit-transform': 'translate3d(0px, 0px, 0px)'});}if(isTouchDevice && this.options.handleTouch && window.Hammer && this.mask.length) {this.swipeHandler = new Hammer.Manager(this.mask[0]);this.swipeHandler.add(new Hammer.Pan({direction: self.options.vertical ? Hammer.DIRECTION_VERTICAL : Hammer.DIRECTION_HORIZONTAL,threshold: self.options.swipeThreshold}));this.swipeHandler.on('panstart', function() {if(self.galleryAnimating) {self.swipeHandler.stop();} else {self.pauseRotation();self.originalOffset = parseFloat(self.slider.css(self.animProperty));}}).on('panmove', function(e) {var tmpOffset = self.originalOffset + e[self.options.vertical ? 'deltaY' : 'deltaX'];tmpOffset = Math.max(Math.min(0, tmpOffset), self.maxOffset);self.slider.css(self.animProperty, tmpOffset);}).on('panend', function(e) {self.resumeRotation();if(e.distance > self.options.swipeThreshold) {if(e.offsetDirection === Hammer.DIRECTION_RIGHT || e.offsetDirection === Hammer.DIRECTION_DOWN) {self.nextSlide();} else {self.prevSlide();}} else {self.switchSlide();}});}},onWindowResize: function() {if(!this.galleryAnimating) {this.calculateOffsets();this.refreshPosition();this.buildPagination();this.refreshState();this.resizeQueue = false;} else {this.resizeQueue = true;}},refreshPosition: function() {this.currentStep = Math.min(this.currentStep, this.stepsCount - 1);this.tmpProps = {};this.tmpProps[this.animProperty] = this.getStepOffset();this.slider.stop().css(this.tmpProps);},calculateOffsets: function() {var self = this, tmpOffset, tmpStep;if(this.options.stretchSlideToMask) {var tmpObj = {};tmpObj[this.innerSizeFunction] = this.mask[this.innerSizeFunction]();this.slides.css(tmpObj);}this.maskSize = this.mask[this.innerSizeFunction]();this.sumSize = this.getSumSize();this.maxOffset = this.maskSize - this.sumSize;if(this.options.vertical && this.options.maskAutoSize) {this.options.step = 1;this.stepsCount = this.slides.length;this.stepOffsets = [0];tmpOffset = 0;for(var i = 0; i < this.slides.length; i++) {tmpOffset -= $(this.slides[i])[this.fullSizeFunction](true);this.stepOffsets.push(tmpOffset);}this.maxOffset = tmpOffset;return;}if(typeof this.options.step === 'number' && this.options.step > 0) {this.slideDimensions = [];this.slides.each($.proxy(function(ind, obj){self.slideDimensions.push( $(obj)[self.fullSizeFunction](true) );},this));this.stepOffsets = [0];this.stepsCount = 1;tmpOffset = tmpStep = 0;while(tmpOffset > this.maxOffset) {tmpOffset -= this.getSlideSize(tmpStep, tmpStep + this.options.step);tmpStep += this.options.step;this.stepOffsets.push(Math.max(tmpOffset, this.maxOffset));this.stepsCount++;}}else {this.stepSize = this.maskSize;this.stepsCount = 1;tmpOffset = 0;while(tmpOffset > this.maxOffset) {tmpOffset -= this.stepSize;this.stepsCount++;}}},getSumSize: function() {var sum = 0;this.slides.each($.proxy(function(ind, obj){sum += $(obj)[this.fullSizeFunction](true);},this));this.slider.css(this.innerSizeFunction, sum);return sum;},getStepOffset: function(step) {step = step || this.currentStep;if(typeof this.options.step === 'number') {return this.stepOffsets[this.currentStep];} else {return Math.min(0, Math.max(-this.currentStep * this.stepSize, this.maxOffset));}},getSlideSize: function(i1, i2) {var sum = 0;for(var i = i1; i < Math.min(i2, this.slideDimensions.length); i++) {sum += this.slideDimensions[i];}return sum;},buildPagination: function() {if(typeof this.options.generatePagination === 'string') {if(!this.pagerHolder) {this.pagerHolder = this.gallery.find(this.options.generatePagination);}if(this.pagerHolder.length && this.oldStepsCount != this.stepsCount) {this.oldStepsCount = this.stepsCount;this.pagerHolder.empty();this.pagerList = $(this.options.pagerList).appendTo(this.pagerHolder);for(var i = 0; i < this.stepsCount; i++) {$(this.options.pagerListItem).appendTo(this.pagerList).find(this.options.pagerListItemText).text(i+1);}this.pagerLinks = this.pagerList.children();this.attachPaginationEvents();}}},attachPaginationEvents: function() {var self = this;this.pagerLinksHandler = function(e) {e.preventDefault();self.numSlide(self.pagerLinks.index(e.currentTarget));};this.pagerLinks.bind(this.options.event, this.pagerLinksHandler);},prevSlide: function() {if(!(this.options.disableWhileAnimating && this.galleryAnimating)) {if(this.currentStep > 0) {this.currentStep--;this.switchSlide();} else if(this.options.circularRotation) {this.currentStep = this.stepsCount - 1;this.switchSlide();}}},nextSlide: function(fromAutoRotation) {if(!(this.options.disableWhileAnimating && this.galleryAnimating)) {if(this.currentStep < this.stepsCount - 1) {this.currentStep++;this.switchSlide();} else if(this.options.circularRotation || fromAutoRotation === true) {this.currentStep = 0;this.switchSlide();}}},numSlide: function(c) {if(this.currentStep != c) {this.currentStep = c;this.switchSlide();}},switchSlide: function() {var self = this;this.galleryAnimating = true;this.tmpProps = {};this.tmpProps[this.animProperty] = this.getStepOffset();this.slider.stop().animate(this.tmpProps, {duration: this.options.animSpeed, complete: function(){self.galleryAnimating = false;if(self.resizeQueue) {self.onWindowResize();}self.makeCallback('onChange', self);self.autoRotate();}});this.refreshState();this.makeCallback('onBeforeChange', this);},refreshState: function(initial) {if(this.options.step === 1 || this.stepsCount === this.slides.length) {this.slides.removeClass(this.options.activeClass).eq(this.currentStep).addClass(this.options.activeClass);}this.pagerLinks.removeClass(this.options.activeClass).eq(this.currentStep).addClass(this.options.activeClass);this.curNum.html(this.currentStep+1);this.allNum.html(this.stepsCount);if(this.options.maskAutoSize && typeof this.options.step === 'number') {this.tmpProps = {};this.tmpProps[this.maskSizeProperty] = this.slides.eq(Math.min(this.currentStep,this.slides.length-1))[this.slideSizeFunction](true);this.mask.stop()[initial ? 'css' : 'animate'](this.tmpProps);}if(!this.options.circularRotation) {this.btnPrev.add(this.btnNext).removeClass(this.options.disabledClass);if(this.currentStep === 0) this.btnPrev.addClass(this.options.disabledClass);if(this.currentStep === this.stepsCount - 1) this.btnNext.addClass(this.options.disabledClass);}this.gallery.toggleClass('not-enough-slides', this.sumSize <= this.maskSize);},startRotation: function() {this.options.autoRotation = true;this.galleryHover = false;this.autoRotationStopped = false;this.resumeRotation();},stopRotation: function() {this.galleryHover = true;this.autoRotationStopped = true;this.pauseRotation();},pauseRotation: function() {this.gallery.addClass(this.options.autorotationDisabledClass);this.gallery.removeClass(this.options.autorotationActiveClass);clearTimeout(this.timer);},resumeRotation: function() {if(!this.autoRotationStopped) {this.gallery.addClass(this.options.autorotationActiveClass);this.gallery.removeClass(this.options.autorotationDisabledClass);this.autoRotate();}},autoRotate: function() {var self = this;clearTimeout(this.timer);if(this.options.autoRotation && !this.galleryHover && !this.autoRotationStopped) {this.timer = setTimeout(function(){self.nextSlide(true);}, this.options.switchTime);} else {this.pauseRotation();}},bindHandlers: function(handlersList) {var self = this;$.each(handlersList, function(index, handler) {var origHandler = self[handler];self[handler] = function() {return origHandler.apply(self, arguments);};});},makeCallback: function(name) {if(typeof this.options[name] === 'function') {var args = Array.prototype.slice.call(arguments);args.shift();this.options[name].apply(this, args);}}};var isTouchDevice = /Windows Phone/.test(navigator.userAgent) || ('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch;$.fn.scrollGallery = function(opt){return this.each(function(){$(this).data('ScrollGallery', new ScrollGallery($.extend(opt,{holder:this})));});};}(jQuery));

ResponsiveHelper = (function($){
    // init variables
    var handlers = [],
        prevWinWidth,
        win = $(window),
        nativeMatchMedia = false;

    // detect match media support
    if(window.matchMedia) {
        if(window.Window && window.matchMedia === Window.prototype.matchMedia) {
            nativeMatchMedia = true;
        } else if(window.matchMedia.toString().indexOf('native') > -1) {
            nativeMatchMedia = true;
        }
    }

    // prepare resize handler
    function resizeHandler() {
        var winWidth = win.width();
        if(winWidth !== prevWinWidth) {
            prevWinWidth = winWidth;

            // loop through range groups
            $.each(handlers, function(index, rangeObject){
                // disable current active area if needed
                $.each(rangeObject.data, function(property, item) {
                    if(item.currentActive && !matchRange(item.range[0], item.range[1])) {
                        item.currentActive = false;
                        if(typeof item.disableCallback === 'function') {
                            item.disableCallback();
                        }
                    }
                });

                // enable areas that match current width
                $.each(rangeObject.data, function(property, item) {
                    if(!item.currentActive && matchRange(item.range[0], item.range[1])) {
                        // make callback
                        item.currentActive = true;
                        if(typeof item.enableCallback === 'function') {
                            item.enableCallback();
                        }
                    }
                });
            });
        }
    }
    win.bind('load resize orientationchange', resizeHandler);

    // test range
    function matchRange(r1, r2) {
        var mediaQueryString = '';
        if(r1 > 0) {
            mediaQueryString += '(min-width: ' + r1 + 'px)';
        }
        if(r2 < Infinity) {
            mediaQueryString += (mediaQueryString ? ' and ' : '') + '(max-width: ' + r2 + 'px)';
        }
        return matchQuery(mediaQueryString, r1, r2);
    }

    // media query function
    function matchQuery(query, r1, r2) {
        if(window.matchMedia && nativeMatchMedia) {
            return matchMedia(query).matches;
        } else if(window.styleMedia) {
            return styleMedia.matchMedium(query);
        } else if(window.media) {
            return media.matchMedium(query);
        } else {
            return prevWinWidth >= r1 && prevWinWidth <= r2;
        }
    }

    // range parser
    function parseRange(rangeStr) {
        var rangeData = rangeStr.split('..');
        var x1 = parseInt(rangeData[0], 10) || -Infinity;
        var x2 = parseInt(rangeData[1], 10) || Infinity;
        return [x1, x2].sort(function(a, b){
            return a - b;
        });
    }

    // export public functions
    return {
        addRange: function(ranges) {
            // parse data and add items to collection
            var result = {data:{}};
            $.each(ranges, function(property, data){
                result.data[property] = {
                    range: parseRange(property),
                    enableCallback: data.on,
                    disableCallback: data.off
                };
            });
            handlers.push(result);

            // call resizeHandler to recalculate all events
            prevWinWidth = null;
            resizeHandler();
        }
    };
}(jQuery));

