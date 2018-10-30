<?php
/**
 * Plugin Name: Blog Designer Pack
 * Plugin URI: http://www.infornweb.com
 * Version: 1.0.4
 * Description: Display Posts on your website with 6 layouts (2 designs for each layout) plus 1 Ticker and 2 Widgets
 * Text Domain: blog-designer-pack
 * Domain Path: /languages/
 * Author: InfornWeb
 * Author URI: http://www.infornweb.com
*/

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * Basic plugin definitions
 * 
 * @package Blog Designer Pack
 * @since 1.0.0
 */
if( !defined( 'BDP_VERSION' ) ) {
    define( 'BDP_VERSION', '1.0.4' ); // Version of plugin
}
if( !defined( 'BDP_DIR' ) ) {
    define( 'BDP_DIR', dirname( __FILE__ ) ); // Plugin dir
}
if( !defined( 'BDP_URL' ) ) {
    define( 'BDP_URL', plugin_dir_url( __FILE__ ) ); // Plugin url
}
if( !defined( 'BDP_PLUGIN_BASENAME' ) ) {
    define( 'BDP_PLUGIN_BASENAME', plugin_basename( __FILE__ ) ); // Plugin base name
}
if( !defined('BDP_POST_TYPE') ) {
    define('BDP_POST_TYPE', 'post'); // Post type name
}
if( !defined('BDP_CAT') ) {
    define('BDP_CAT', 'category'); // Plugin category name
}

/**
 * Load Text Domain
 * This gets the plugin ready for translation
 * 
 * @package Blog Designer Pack
 * @since 1.0.0
 */
function bdp_load_textdomain() {
    load_plugin_textdomain( 'blog-designer-pack', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );
}

// Action to load plugin text domain
add_action('plugins_loaded', 'bdp_load_textdomain');

// Functions file
require_once( BDP_DIR . '/includes/bdp-functions.php' );
require_once( BDP_DIR . '/includes/bdp-ajax-functions.php' );

// Script Class
require_once( BDP_DIR . '/includes/class-bdp-script.php' );

// Admin file
require_once( BDP_DIR . '/includes/admin/class-bdp-admin.php' );

// Shortcode files
require_once( BDP_DIR . '/includes/shortcodes/bdp-post.php' );
require_once( BDP_DIR . '/includes/shortcodes/bdp-post-list.php' );
require_once( BDP_DIR . '/includes/shortcodes/bdp-post-gridbox.php' );
require_once( BDP_DIR . '/includes/shortcodes/bdp-recent-post-slider.php' ); 
require_once( BDP_DIR . '/includes/shortcodes/bdp-recent-post-carousel.php' );
require_once( BDP_DIR . '/includes/shortcodes/bdp-post-masonry.php' );
require_once( BDP_DIR . '/includes/shortcodes/bdp-post-ticker.php' );

// Widgets Files
require_once( BDP_DIR . '/includes/widgets/class-bdp-latest-post.php' );
require_once( BDP_DIR . '/includes/widgets/class-bdp-latest-post-scrolling-widget.php' );