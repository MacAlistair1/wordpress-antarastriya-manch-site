jQuery( document ).ready(function($) {

	// Initialize masonry
	jQuery('.bdp-post-masonry').each(function( index ) {
		
		var obj_id = jQuery(this).attr('id');
		
		// Creating object
		var masonry_param_obj = {itemSelector: '.bdp-post-grid'};
		
		if( !$(this).hasClass('bdp-effect-1') ) {
			masonry_param_obj['transitionDuration'] = 0;
		}
		
		// jQuery
		jQuery('#'+obj_id).imagesLoaded(function() {
			$('#'+obj_id).masonry(masonry_param_obj);
		});
	});

	$(document).on('click', '.bdp-load-more-btn', function(){

		var current_obj = $(this);
		var site_html 	= $('body');
		var masonry_obj = current_obj.closest('.bdp-post-masonry-wrp').find('.bdp-post-masonry').attr('id');
		var paged 		= (parseInt(current_obj.attr('data-paged')) + 1);
		var count 		= parseInt(current_obj.attr('data-count'));
		var shortcode_param = $.parseJSON(current_obj.parent().find('.bdp-shortcode-param').text());

		$('.bdp-info').remove();
		current_obj.addClass('bdp-btn-active');
		current_obj.attr('disabled', 'disabled');

		// Creating object
		var shortcode_obj = {};

		// Creating object
		$.each(shortcode_param, function (key,val) {
			shortcode_obj[key] = val;
		});

		var data = {
                        action     	: 'bdp_get_more_post',
                        paged 		: paged,
                        count 		: count,
                        shrt_param 	: shortcode_obj
                    };

        $.post(Wpbdp.ajaxurl,data,function(response) {
			
			var result = $.parseJSON(response);

			if( result.sucess = 1 && (result.data != '') ) {

				current_obj.attr('data-paged', paged);
				current_obj.attr('data-count', result.count);

				var $content = $( result.data );
				$content.hide();
				$('#'+masonry_obj).append($content).imagesLoaded(function(){
					$content.show();
					$('#'+masonry_obj).append( $content ).masonry( 'appended', $content );

					current_obj.removeAttr('disabled', 'disabled');
					current_obj.removeClass('bdp-btn-active');
				});				

			} else if(result.data == '') {
				
				current_obj.parent('.bdp-ajax-btn-wrap').hide();
				var info_html = '<div class="bdp-info">'+Wpbdp.no_post_msg+'</div>';

				current_obj.parent().after(info_html);
				setTimeout(function() {
					$(".bdp-info").fadeOut("normal", function() {
						$(this).remove();
				    });
				}, 2000 );

				current_obj.removeAttr('disabled', 'disabled');
				current_obj.removeClass('bdp-btn-active');
			}
		});
	});	

});