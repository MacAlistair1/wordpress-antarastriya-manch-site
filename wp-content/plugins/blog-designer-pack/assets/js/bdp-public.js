jQuery( document ).ready(function($) {
	
	// Initialize slick slider
	$( '.bdp-post-slider' ).each(function( index ) {

		var slider_id   = $(this).attr('id');
		var slider_conf = $.parseJSON( $(this).closest('.bdp-post-slider-wrp').find('.bdp-slider-conf').text() );

		if( typeof(slider_id) != 'undefined' && slider_id != '' ) {		
            
            jQuery('#'+slider_id).slick({
            	dots            : (slider_conf.dots) == "true" ? true : false,
            	infinite        : (slider_conf.loop) == "true" ? true : false,
            	arrows          : (slider_conf.arrows) == "true" ? true : false,
            	speed           : parseInt(slider_conf.speed),
            	autoplay        : (slider_conf.autoplay) == "true" ? true : false,
            	autoplaySpeed   : parseInt(slider_conf.autoplay_interval),
            	slidesToShow    : 1,
            	slidesToScroll  : 1,
            	rtl             : (Wpbdp.is_rtl == 1) ? true : false, 
            	mobileFirst     : (Wpbdp.is_mobile == 1) ? true : false, 				
            });
        }
    });
	// Initialize slick carousel
	$( '.bdp-post-carousel' ).each(function( index ) {

		var slider_id   = $(this).attr('id');
		var slider_conf = $.parseJSON( $(this).closest('.bdp-post-carousel-wrp').find('.bdp-slider-conf').text() );

		if( typeof(slider_id) != 'undefined' && slider_id != '' ) {		
            
            jQuery('#'+slider_id).slick({
            	dots            : (slider_conf.dots) == "true" ? true : false,
            	infinite        : (slider_conf.loop) == "true" ? true : false,
            	arrows          : (slider_conf.arrows) == "true" ? true : false,
            	speed           : parseInt(slider_conf.speed),
            	autoplay        : (slider_conf.autoplay) == "true" ? true : false,
            	autoplaySpeed   : parseInt(slider_conf.autoplay_interval),
            	slidesToShow    : parseInt(slider_conf.slide_show),
            	slidesToScroll  : parseInt(slider_conf.slide_scroll),
            	rtl             : (Wpbdp.is_rtl == 1) ? true : false, 	
            	mobileFirst     : (Wpbdp.is_mobile == 1) ? true : false,
				responsive: [{
              breakpoint: 1023,
              settings: {
                slidesToShow  : (parseInt(slider_conf.slide_show) > 3) ? 3 : parseInt(slider_conf.slide_show),
                slidesToScroll  : 1
              }
            },{
              breakpoint: 640,
              settings: {
                slidesToShow  : (parseInt(slider_conf.slide_show) > 2) ? 2 : parseInt(slider_conf.slide_show),
                slidesToScroll  : 1
              }
            },{
              breakpoint: 479,
              settings: {
                slidesToShow  : 1,
                slidesToScroll  : 1
              }
            },{
              breakpoint: 319,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }]	
            });
        }
    });
    
	
    // Initialize Post Ticker
    $( '.post-ticker-jcarousellite' ).each(function( index ) {

        var slider_id   = $(this).attr('id');
        var slider_conf = $.parseJSON( $(this).closest('.bdp-widget-wrp').find('.bdp-slider-conf').text() );

        if( typeof(slider_id) != 'undefined' && slider_id != '' ) {

            jQuery('#'+slider_id).vTicker({
                speed     : parseInt(slider_conf.speed),
                height    : parseInt(slider_conf.height),
                padding   : 5,
                pause     : parseInt(slider_conf.pause)
            });
        }
    });

    // Initialize news ticker
    $(window).bind("load", function() {
        $( '.bdp-ticker-wrp' ).each(function( index ) {
            
            var ticker_id   = $(this).attr('id');
            var ticker_conf = $.parseJSON( $(this).find('.bdp-ticker-conf').text() );

            if( typeof(ticker_id) != 'undefined' && ticker_id != '' && ticker_conf != 'undefined' ) {
                $("#"+ticker_id).bdpTicker({
                    effect      : ticker_conf.ticker_effect,
                    autoplay    : (ticker_conf.autoplay == 'false') ? false : true,
                    timer       : parseInt(ticker_conf.speed),
                    border      : true,
                    fontstyle   : ticker_conf.font_style,
                });
            }
        });
    });
});