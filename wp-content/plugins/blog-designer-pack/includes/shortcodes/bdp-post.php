<?php
/**
 * 'bdp_post' Shortcode
 * 
 * @package Blog Designer Pack
 * @since 1.0.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * Function to handle the `bdp_post` shortcode
 * 
 * @package Blog Designer Pack
 * @since 1.0.0
 */
function bdp_get_posts( $atts, $content = null ) {
    
    // Shortcode Parameters
	extract(shortcode_atts(array(
		'limit' 				=> '20',
		'category' 				=> '',		
		'grid' 					=> '1',
		'design' 				=> 'design-1',
		'show_author' 			=> 'true',
		'show_tags'				=> 'true',
		'show_comments'			=> 'true',
		'show_category' 		=> 'true',		
		'show_content' 			=> 'true',
		'show_date' 			=> 'true',
		'pagination' 			=> 'true',		
		'media_size' 			=> 'large',		
		'content_words_limit' 	=> '20',
		'show_read_more' 		=> 'true',
		'order'					=> 'DESC',
		'orderby'				=> 'date',		
		), $atts));
	
	$shortcode_designs 	= bdp_post_designs();	
	$posts_per_page 	= !empty($limit) 					? $limit 						: '20';
	$cat 				= (!empty($category))				? explode(',',$category) 		: '';	
	$gridcol			= !empty($grid) 					? $grid 						: '1';	
	$design 			= ($design && (array_key_exists(trim($design), $shortcode_designs))) ? trim($design) 	: 'design-1';
	$showAuthor 		= ($show_author == 'false')			? 'false'						: 'true';
	$show_tags 			= ( $show_tags == 'false' ) 		? 'false'						: 'true';
	$show_comments 		= ( $show_comments == 'false' ) 	? 'false'						: 'true';
	$showDate 			= ( $show_date == 'false' ) 		? 'false'						: 'true';
	$showCategory 		= ( $show_category == 'false' )? 'false' 						: 'true';
	$showContent 		= ( $show_content == 'false' ) 		? 'false' 						: 'true';	
	$pagination 		= ($pagination == 'false')			? 'false'						: 'true';	
	$media_size 		= (!empty($media_size))				? $media_size 					: 'large'; //thumbnail, medium, large, full	
	$words_limit 		= !empty( $content_words_limit ) 	? $content_words_limit 			: 20;
	$showreadmore 		= ( $show_read_more == 'false' )	? 'false' 						: 'true';
	$order 				= ( strtolower($order) == 'asc' ) 	? 'ASC' 						: 'DESC';
	$orderby 			= !empty($orderby)					? $orderby 						: 'date';	
	
	// Shortcode file
	$post_design_file_path 	= BDP_DIR . '/templates/grid/' . $design . '.php';
	$design_file 			= (file_exists($post_design_file_path)) ? $post_design_file_path : '';
	
	// Taking some globals
	global $post, $paged;

	// Taking some variables
	$count 			= 0; 
	$bdpcount 		= 0;
	$grid_count		= 1;
	

	// Pagination parameter
	if(is_home() || is_front_page()) {
		$paged = get_query_var('page');
	} else {
		$paged = get_query_var('paged');
	}
	
	// WP Query Parameters
	$args = array ( 
		'post_type'      		=> BDP_POST_TYPE,
		'post_status' 			=> array('publish'),
		'order'          		=> $order,
		'orderby'        		=> $orderby, 
		'posts_per_page' 		=> $posts_per_page, 
		'paged'          		=> $paged,		
		'ignore_sticky_posts'	=> true,
	);

    // Category Parameter
	if($cat != "") {
		
		$args['tax_query'] = array(
								array( 
									'taxonomy' 			=> BDP_CAT,
									'field' 			=> 'term_id',
									'terms' 			=> $cat,									
								));

	}

	// WP Query
	$query 		= new WP_Query($args);
	$post_count = $query->post_count;

	ob_start();
	
	// If post is there
	if ( $query->have_posts() ) { ?>		

		<div class="bdp-post-grid-main <?php echo 'bdp-'.$design; ?> bdpgrid-<?php echo $gridcol; ?> bdp-clearfix">			
			<?php
			while ( $query->have_posts() ) : $query->the_post();
				
				$count++;
				$cat_links 		= array();
				$css_class 		= '';
				$post_featured_image 	= bdp_get_post_featured_image( $post->ID, $media_size );
				$post_link 		= bdp_get_post_link( $post->ID );
				$terms 			= get_the_terms( $post->ID, BDP_CAT );
				$tags 			= get_the_tag_list(' ',', ');
				$comments 		= get_comments_number( $post->ID );
				$reply			= ($comments <= 1)  ? 'Reply' : 'Replies';
				
				if($terms) {
					foreach ( $terms as $term ) {
						$term_link = get_term_link( $term );
						$cat_links[] = '<a href="' . esc_url( $term_link ) . '">'.$term->name.'</a>';
					}
				}
				$cate_name = join( " ", $cat_links );
				
				if ( ( is_numeric( $grid ) && ( $grid > 0 ) && ( 0 == ($count - 1) % $grid ) ) || 1 == $count ) { $css_class .= ' bdp-first'; }
				if ( ( is_numeric( $grid ) && ( $grid > 0 ) && ( 0 == $count % $grid ) ) || $post_count == $count ) { $css_class .= ' bdp-last'; }
	            
	            // Include shortcode html file
				if( $design_file ) {
					include( $design_file );
				}

				$bdpcount++;
				$grid_count++;

			endwhile; ?>
		</div>

		<?php if($pagination == "true") { ?>
			<div class="bdp-post-pagination bdp-clearfix">
				<?php 				
					echo bdp_pagination( array( 'paged' => $paged , 'total' => $query->max_num_pages ) );
				 ?>				
			</div>
		<?php }
	} // end of have_post()

	wp_reset_query(); // Reset WP Query

    $content .= ob_get_clean();
    return $content;
}

// 'bdp_post' Shortcode
add_shortcode('bdp_post', 'bdp_get_posts');