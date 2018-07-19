$(document).ready(function() {
    $('.lazy-product').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 3,
        slidesToScroll:1,
        autoplay: true,
        autoplaySpeed: 4000,
		responsive: [{
            breakpoint: 1199,
            settings: {
                slidesToShow: 3,
                infinite: false,
                dots: true
            }
        },
		 {
            breakpoint: 1199,
            settings: {
                slidesToShow: 3,
            }
        },
		{
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
            }
        },
		{
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
            }
        },
		{
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
            }
        },
		
		
		
		]
    });
	
	
});

	
