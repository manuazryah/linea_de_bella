(function($){
	$( window ).load(function() {
		$('.changer-opener').click(function(e){
			e.preventDefault(); 
			$('body').toggleClass('changer-active'); 
		});
		$('.list-color li').each(function(){
			$(this).find('.controls').click(function(){
				if($(this).is(":disabled")){
					return;
				}else{
					$('.list-color li .controls').prop('disabled',false);
					$(this).prop('disabled',true);
					sheetName = $(this).data('theme'); 
					/* var tinos_action = 'tinos_style_changer';
					var tinos_data = "&action="+tinos_action+ "&tinos_style="+sheetName; */
					var sheet = jQuery('link#gelli-skin-css');
					sheet.attr('href', 'http://demo.arrowpress.net/gelli/wp-content/themes/gelli/assets/css/color/'+sheetName+'.css');
					/* jQuery.ajax({
						url: tinos_ajax_switch.ajaxurl,
						type: 'post',
						data:tinos_data,
						success: function( html ) {
							sheet.attr('href', html);
						}
					}); */
				}
			}); 
		}); 
	});
}(jQuery));