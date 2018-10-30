<div class="bdp-post-carousel-slide">		
	<div class="bdp-post-carousel-content <?php if ( !has_post_thumbnail() ) { echo 'bdp-no-thumb-image'; } ?>">
		<?php		
		if ( has_post_thumbnail() ) { ?>
		<div class="bdp-post-image-bg">
			<a href="<?php echo $post_link; ?>">
				<img src="<?php echo $post_featured_image; ?>" alt="<?php _e('Post Image', 'blog-designer-pack'); ?>" />
			</a>
		</div>
		<?php } ?>
		<div class="bdp-post-margin-content">
			<?php if($showCategory == "true" && $cate_name !='') { ?>
			<div class="bdp-post-categories">
				<?php echo $cate_name; ?>
			</div>
			<?php } ?>	
			<h2 class="bdp-post-title">
				<a href="<?php echo $post_link; ?>"><?php the_title(); ?></a>
			</h2>
			
			<?php
			  if($showDate == "true" || $showAuthor == 'true' || $show_comments =="true") { ?>
					<div class="bdp-post-date">
						<?php if($showAuthor == 'true') { ?>
							<span class="bdp-user-img"><?php the_author(); ?></span>
						<?php } ?>
						<?php echo ($showAuthor == 'true' && $showDate == 'true') ? '/' : '' ?>
						<?php if($showDate == "true") { ?>
							<span class="bdp-time"> <?php echo get_the_date(); ?> </span>
						<?php } ?>
						<?php echo ($showAuthor == 'true' && $showDate == 'true' && $show_comments == 'true' && !empty($comments)) ? '/' : '' ?>
						<?php if(!empty($comments) && $show_comments == 'true') { ?>
							<span class="bdp-post-comments">							
								<a href="<?php the_permalink(); ?>#comments"><?php echo $comments.' '.$reply;  ?></a>
							</span>
						<?php } ?>	
					</div><!-- end .bdp-post-date -->
				<?php } 
			if($showContent == "true") { ?>
				<div class="bdp-post-content">				
						<div class="bdp-post-short-content"><?php echo bdp_get_post_excerpt( $post->ID, get_the_content(), $words_limit ); ?></div>
						<?php if($showreadmore == 'true') { ?>
							<a href="<?php echo $post_link; ?>"  class="bdp-readmorebtn"><?php echo _e('Read More', 'blog-designer-pack'); ?></a>
						<?php } ?>				
				</div>
			<?php } 
			 if(!empty($tags) && $show_tags == 'true') { ?>
					<div class="bdp-post-tags">					
						<?php echo $tags;  ?>
					</div><!-- end .wpswp-post-tags -->
				<?php } ?>	
		</div>		
	</div>
</div>