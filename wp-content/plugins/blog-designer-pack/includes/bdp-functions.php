<?php
/**
 * Plugin generic functions file
 *
 * @package Blog Designer Pack
 * @since 1.0.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;


/**
 * Function to get limit word of post
 * 
 * @package Blog Designer Pack
 * @since 1.0.0
 */
function bdp_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
		array_pop($words);
	return implode(' ', $words);
}

/**
 * Escape Tags & Slashes
 *
 * Handles escapping the slashes and tags
 *
 * @package Blog Designer Pack
 * @since 1.0.0
 */
function bdp_esc_attr($data) {
	return esc_attr( stripslashes($data) );
}

/**
 * Strip Slashes From Array
 * If $flag is passed then it will allow HTML
 *
 * @package Blog Designer Pack
 * @since 1.0.0
 */
function bdp_slashes_deep($data = array(), $flag = false){
	
	if($flag != true) {
		$data = bdp_nohtml_kses($data);
	}

	$data = stripslashes_deep($data);
	return $data;
}

/**
 * Strip Html Tags 
 * 
 * It will sanitize text input fields. Strip html tags and escape characters)
 * 
 * @package Blog Designer Pack
 * @since 1.0.0
 */
function bdp_nohtml_kses($data = array()){
	
	if ( is_array($data) ) {
		
		$data = array_map('wtwp_nohtml_kses', $data);
		
	} elseif ( is_string( $data ) ) {
		
		$data = wp_filter_nohtml_kses($data);
	}
	
	return $data;
}

/**
 * Function to unique number value
 * 
 * @package Blog Designer Pack
 * @since 1.0.0
 */
function bdp_get_unique() {
	static $unique = 0;
	$unique++;

	return $unique;
}

/**
 * Function to add array after specific key
 * 
 * @package Blog Designer Pack
 * @since 1.0.0
 */
function bdp_add_array(&$array, $value, $index, $from_last = false) {
    
    if( is_array($array) && is_array($value) ) {

        if( $from_last ) {
            $total_count    = count($array);
            $index          = (!empty($total_count) && ($total_count > $index)) ? ($total_count-$index): $index;
        }
        
        $split_arr  = array_splice($array, max(0, $index));
        $array      = array_merge( $array, $value, $split_arr);
    }
    
    return $array;
}

/**
 * Function to get post excerpt
 * 
 * @package Blog Designer Pack
 * @since 1.0.0
 */
function bdp_get_post_excerpt( $post_id = null, $content = '', $word_length = '55', $more = '...' ) {
	
	$has_excerpt 	= false;
	$word_length 	= !empty($word_length) ? $word_length : '55';
	
	// If post id is passed
	if( !empty($post_id) ) {
		if (has_excerpt($post_id)) {

			$has_excerpt 	= true;
			$content 		= get_the_excerpt();

		} else {
			$content = !empty($content) ? $content : get_the_content();
		}
	}

	if( !empty($content) && (!$has_excerpt) ) {
		$content = strip_shortcodes( $content ); // Strip shortcodes
		$content = wp_trim_words( $content, $word_length, $more );
	}
	
	return $content;
}

/**
 * Function to get post featured image
 * 
 * @package Blog Designer Pack
 * @since 1.0.0
 */
function bdp_get_post_featured_image( $post_id = '', $size = 'full' ) {
    
    $size   = !empty($size) ? $size : 'full';
    $image  = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), $size );
    $image 	= isset($image[0]) ? $image[0] : '';

    return $image;
}

/**
 * Function to get post external link or permalink
 * 
 * @package Blog Designer Pack
 * @since 1.0.0
 */
function bdp_get_post_link( $post_id = '' ) {

	$post_link = '';

	if( !empty($post_id) ) {

		if( empty($post_link) ) {
			$post_link = get_permalink( $post_id );	
		}
	}
	return $post_link;
}

/**
 * Pagination function for grid
 * 
 * @package Blog Designer Pack
 * @since 1.0.0
 */
function bdp_pagination($args = array()){
	
	$big = 999999999; // need an unlikely integer
	
	$paging = array(
					'base' 		=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' 	=> '?paged=%#%',
					'current' 	=> max( 1, $args['paged'] ),
					'total'		=> $args['total'],
					'prev_next'	=> true,
					'prev_text'	=> __('« Previous', 'blog-designer-pack'),
					'next_text'	=> __('Next »', 'blog-designer-pack'),
				);

	return paginate_links($paging);
}

/**
 * Function to get 'bdp_recent_post_slider' shortcode designs
 * 
 * @package Blog Designer Pack
 * @since 1.0.0
 */
function bdp_recent_post_slider_designs() {
	$design_arr = array(
		'design-1'	=> __('Design 1', 'blog-designer-pack'),
		'design-2'	=> __('Design 2', 'blog-designer-pack'),		
	);
	return $design_arr;
}

/**
 * Function to get 'bdp_recent_post_carousel' shortcode designs
 * 
 * @package Blog Designer Pack
 * @since 1.0.0
 */
function bdp_recent_post_carousel_designs() {
	$design_arr = array(
		'design-1'	=> __('Design 1', 'blog-designer-pack'),
		'design-2'	=> __('Design 2', 'blog-designer-pack'),		
	);
	return $design_arr;
}


/**
 * Function to get 'bdp_post' shortcode design
 * 
 * @package Blog Designer Pack
 * @since 1.0.0
 */
function bdp_post_designs() {
	$design_arr = array(
		'design-1'	=> __('Design 1', 'blog-designer-pack'),
		'design-2'	=> __('Design 2', 'blog-designer-pack'),		
		);	
	return $design_arr;
}
/**
 * Function to get 'bdp_post_list' shortcode designs
 * 
 * @package Blog Designer Pack
 * @since 1.0.0
 */
function bdp_recent_post_list_designs() {
	$design_arr = array(
		'design-1'	=> __('Design 1', 'blog-designer-pack'),
		'design-2'	=> __('Design 2', 'blog-designer-pack'),		
	);
	return $design_arr;
}
/**
 * Function to get 'bdp_post_gridbox' shortcode designs
 * 
 * @package Blog Designer Pack
 * @since 1.0.0
 */
function bdp_recent_post_gridbox_designs() {
	$design_arr = array(
		'design-1'	=> __('Design 1', 'blog-designer-pack'),			
	);
	return $design_arr;
}


/**
 * Function to get `sp_blog_masonry` shortcode designs
 * 
 * @package WP Blog and Widget - Masonry Layout
 * @since 1.0.0
 */
function bdp_post_masonry_designs() {
	$design_arr = array(
						'design-1'	=> __('Design 1', 'blog-designer-pack'),
						'design-2'	=> __('Design 2', 'blog-designer-pack'),
						
					);
	return $design_arr;
}

/**
 * Function to get masonry effect
 * 
 * @package WP Blog and Widget - Masonry Layout
 * @since 1.0.0
 */
function bdp_post_masonry_effects() {
	$effects_arr = array(
						'effect-1'	=> __('Effect 1', 'blog-designer-pack'),
						'effect-2'	=> __('Effect 2', 'blog-designer-pack'),	
					);
	return $effects_arr;
}