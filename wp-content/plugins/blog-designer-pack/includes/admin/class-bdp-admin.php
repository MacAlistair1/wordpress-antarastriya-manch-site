<?php
/**
 * Admin Class
 *
 * Handles the Admin side functionality of plugin
 *
 * @package Blog Designer Pack
 * @since 1.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

class Bdp_Admin {

	function __construct() {

		// Action to register admin menu
		add_action( 'admin_menu', array($this, 'bdp_register_menu'), 9 );

		// Filter to add row action in category table
		add_filter( 'category_row_actions', array($this, 'bdp_add_tax_row_data'), 10, 2 );
	}

	/**
	 * Function to register admin menus
	 * 
	 * @package Blog Designer Pack
	 * @since 1.0.4
	 */
	function bdp_register_menu() {
		
		// Getting Started Page
		add_menu_page( __('Blog Designer Pack', 'blog-designer-pack'), __('Blog Designer Pack', 'blog-designer-pack'), 'edit_posts', 'bdp-about', array($this, 'bdp_getting_started_page'), 'dashicons-editor-bold', 6 );
		
		// Register plugin premium page
		add_submenu_page( 'bdp-about', __('Premium - Blog Designer Pack', 'blog-designer-pack'), '<span style="color:#ffd800">'.__('Premium', 'blog-designer-pack').'</span>', 'edit_posts', 'bdp-premium', array($this, 'bdp_premium_page') );
	}	
	
	/**
	 * Getting Started Page Html
	 * 
	 * @package Blog Designer Pack	
	 * @since 1.0
	 */
	function bdp_premium_page() {
		include_once( BDP_DIR . '/includes/admin/premium.php' );
	}

	/**
	 * Function to get 'How It Works' HTML
	 *
	 * @package Blog Designer Pack	
	 * @since 1.0.0
	 */
	function bdp_getting_started_page() {
		include_once( BDP_DIR . '/includes/admin/getting-started.php' );
	}

	/**
	 * Function to add category row action
	 * 
	 * @package Blog Designer Pack
	 * @since 1.0
	 */
	function bdp_add_tax_row_data( $actions, $tag ) {
		return array_merge( array( 'pluginplay_id' => "<span style='color:#555'>ID: {$tag->term_id}</span>" ), $actions );
	}
}

$bdp_admin = new Bdp_Admin();