<?php
/**
 * Script Class
 *
 * Handles the script and style functionality of plugin
 *
 * @package Blog Designer Pack
 * @since 1.0.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

class Wpbdp_Script {
	
	function __construct() {
		
		// Action to add style at front side
		add_action( 'wp_enqueue_scripts', array($this, 'bdp_front_style') );
		
		// Action to add script at front side
		add_action( 'wp_enqueue_scripts', array($this, 'bdp_front_script') );
		
	}


	/**
	 * Function to add style at front side
	 * 
	 * @package Blog Designer Pack
	 * @since 1.0.4
	 */
	function bdp_front_style() {

		// Registring and enqueing slick slider css
		if( !wp_style_is( 'slick-style', 'registered' ) ) {
			wp_register_style( 'slick-style', BDP_URL.'assets/css/slick.css', array(), BDP_VERSION );
			wp_enqueue_style( 'slick-style' );
		}

		// Registring and enqueing public css
		wp_register_style( 'bdp-public-style', BDP_URL.'assets/css/bdp-public.css', array(), BDP_VERSION );
		wp_enqueue_style( 'bdp-public-style' );
	}

	/**
	 * Function to add script at front side
	 * 
	 * @package Blog Designer Pack
	 * @since 1.0.0
	 */
	function bdp_front_script() {

		// Registring slick slider script
		if( !wp_script_is( 'jquery-slick', 'registered' ) ) {
			wp_register_script( 'jquery-slick', BDP_URL. 'assets/js/slick.min.js', array('jquery'), BDP_VERSION, true);
		}
		
		// Registring post vertical ticker script
		if( !wp_script_is( 'jquery-vticker', 'registered' ) ) {
			wp_register_script( 'jquery-vticker', BDP_URL. 'assets/js/post-ticker.js', array('jquery'), BDP_VERSION, true);
		}

		// Registring ticker script
		if( !wp_script_is( 'bdp-ticker-script', 'registered' ) ) {
			wp_register_script( 'bdp-ticker-script', BDP_URL . 'assets/js/bdp-ticker.js', array('jquery'), BDP_VERSION, true );
		}
		
		// Registring and enqueing public script
		wp_register_script( 'bdp-public-script', BDP_URL. 'assets/js/bdp-public.js', array('jquery'), BDP_VERSION, true );
		wp_localize_script( 'bdp-public-script', 'Wpbdp', array(
																		'is_mobile' => (wp_is_mobile()) ? 1 : 0,
																		'is_rtl' 	=> (is_rtl()) ? 1 : 0
																	));
		// Registring public style
		wp_register_script( 'bdp-masonry-public-script', BDP_URL.'assets/js/bdp-masonry-public.js', array('jquery'), BDP_VERSION, true );
		wp_localize_script( 'bdp-masonry-public-script', 'Wpbdp', array( 
																	'ajaxurl' 		=> admin_url( 'admin-ajax.php', ( is_ssl() ? 'https' : 'http' ) ),
																	'no_post_msg'	=> __('Sorry, No more post to display.', 'wp-blog-and-widgets')
																));															
	}	

}

$bdp_script = new Wpbdp_Script();