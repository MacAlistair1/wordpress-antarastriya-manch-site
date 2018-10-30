<?php
/**
 * Shortcodes Class
 *
 * Handles shortcodes functionality of plugin
 *
 * @package WP Blog and Widget - Masonry Layout
 * @since 1.0.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

function bdp_post_masonry( $atts, $content = null ) {
		
		// Shortcode Parameters
		extract(shortcode_atts(array(
			"limit" 				=> '4',
			"category" 				=> '',			
			"design"	 			=> 'design-1',
			"grid" 					=> '2',
			"pagination" 			=> 'false',
			"show_date" 			=> 'true',
			"show_category"			=> 'true',
			"show_content" 			=> 'true',
			"show_read_more" 		=> 'true',
			"content_words_limit" 	=> '20',			
			'order'					=> 'DESC',
			'orderby'				=> 'post_date',			
			'effect'				=> 'effect-2',
			'load_more_text'		=> '',
			'show_author' 			=> 'true',
			'media_size' 			=> 'large',			
			'show_tags'				=> 'true',
			'show_comments'			=> 'true',	
		), $atts));

		$shortcode_designs 	= bdp_post_masonry_designs();
		$msonry_effects 	= bdp_post_masonry_effects();
	   
	    $posts_per_page		= (!empty($limit)) 		? $limit 			: '4';
	    $cat 				= (!empty($category))	? explode(',',$category) : '';		
		$design 			= ($design && (array_key_exists(trim($design), $shortcode_designs))) ? trim($design) 	: 'design-1';
		$pagination 		= ($pagination == 'true')			? 'true'		: 'false';
		$gridcol 			= (!empty($grid))					? $grid 		: '2';
		$showDate 			= ( $show_date == 'true' ) 			? 'true' 		: 'false';
		$showCategory 		= ( $show_category == 'true')		? 'true' 		: 'false';
		$showContent 		= ( $show_content == 'true' ) 		? 'true' 		: 'false';
	    $words_limit 		= !empty($content_words_limit) 		? $content_words_limit : '20';
		$showreadmore 		= ( $show_read_more == 'true' ) 	? 'true' 		: 'false';
		$order 				= ( strtolower($order) == 'asc' ) 	? 'ASC' 		: 'DESC';
		$orderby 			= (!empty($orderby))				? $orderby		: 'post_date';		
		$load_more_text 	= !empty($load_more_text) 			? $load_more_text : __('Load More Posts', 'wp-blog-and-widgets');
		$effect 			= (!empty($effect) && array_key_exists(trim($effect), $msonry_effects))	? trim($effect) : 'effect-1';		
		$showAuthor 		= ($show_author == 'false')			? 'false'			: 'true';
		$media_size 		= (!empty($media_size))				? $media_size 	: 'large'; //thumbnail, medium, large, full		
		$show_tags 			= ( $show_tags == 'false' ) 			? 'false'						: 'true';
		$show_comments 		= ( $show_comments == 'false' ) 		? 'false'						: 'true';	
		$unique 			= bdp_get_unique();		
		
		// Shortcode file
		$design_file_path 	= BDP_DIR . '/templates/masonry/' . $design . '.php';
		$design_file 		= (file_exists($design_file_path)) ? $design_file_path : '';
		
		// Shortcode Parameters
		$shortcode_atts = compact('posts_per_page', 'cat', 'design', 'pagination', 'gridcol', 'showDate', 'showCategory', 'showContent', 'words_limit', 'showreadmore', 'order', 'orderby', 'showAuthor','read_more_text', 'media_size', 'show_tags','show_comments');
		
		global $paged, $post, $wpbawm_in_shrtcode;
		
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
		$query 			= new WP_Query($args);
		$post_count 	= $query->post_count;
		$total_post 	= $query->found_posts;
		$count 			= 0;
		$grid_count		= 1;

		ob_start();

		// If Blog post is there
		if ( $query->have_posts() ) :

			// Enqueue required script
			wp_enqueue_script( 'bdp-public-script' );
			wp_enqueue_script('masonry', 'jquery');
			wp_enqueue_script('bdp-masonry-public-script');			
		
		 ?>
			
		<div class="bdp-post-masonry-wrp bdp-clearfix" id="bdp-post-masonry-wrp-<?php echo $unique; ?>">			

			<div class="bdp-post-masonry bdp-<?php echo $effect; ?> bdp-<?php echo $design; ?> bdpgrid-<?php echo $gridcol; ?>" id="bdp-post-masonry-<?php echo $unique; ?>">

	            <?php while ( $query->have_posts() ) : $query->the_post();
	            		
	            	$count++;
	            	$cat_links 			= array();
	               	$terms 					= get_the_terms( $post->ID, BDP_CAT );
					$post_link 				= bdp_get_post_link( $post->ID );					
					$post_featured_image 	= bdp_get_post_featured_image( $post->ID, $media_size );	                
					$tags 			        = get_the_tag_list(' ',', ');
					$comments 		        = get_comments_number( $post->ID );
					$reply			        = ($comments <= 1)  ? 'Reply' : 'Replies';

					if($terms) {
						foreach ( $terms as $term ) {
							$term_link = get_term_link( $term );
							$cat_links[] = '<a href="' . esc_url( $term_link ) . '">'.$term->name.'</a>';
						}
	                }
	                $cate_name = join( " ", $cat_links );
	              	
	              	if( $design_file ) {
	              		include( $design_file );
	              	}
					
					$grid_count++;
	            	endwhile;
					
	           	?>
			</div><!-- end .bdp-blog-masonry -->
			
			<?php if( ($posts_per_page != -1) && ($posts_per_page < $total_post) && ($pagination != 'true') ) { ?>
			<div class="bdp-ajax-btn-wrap">
				<button class="bdp-load-more-btn more" data-ajax="1" data-paged="1" data-count="<?php echo $count; ?>">
					<i class="bdp-ajax-loader"><img src="<?php echo BDP_URL . 'assets/images/ajax-loader.gif'; ?>" alt="<?php _e('Loading', 'blog-designer-pack'); ?>" /></i> 
					<?php echo $load_more_text; ?>
				</button>
				<div class="bdp-hide bdp-shortcode-param"><?php echo bdp_esc_attr( json_encode($shortcode_atts)); ?></div>
			</div><!-- end .bdp-ajax-btn-wrap -->
			<?php } ?>

			<?php if($pagination == "true") { ?>
				<div class="bdp-post-pagination bdp-clearfix">
				<?php 				
					echo bdp_pagination( array( 'paged' => $paged , 'total' => $query->max_num_pages ) );
				 ?>				
			</div>
			<?php } ?>

		</div><!-- end .bdp-blog-masonry -->

	<?php
			
		endif;
		wp_reset_query(); // Reset wp query
		$content .= ob_get_clean();
		return $content;
	}
add_shortcode( 'bdp_masonry', 'bdp_post_masonry');