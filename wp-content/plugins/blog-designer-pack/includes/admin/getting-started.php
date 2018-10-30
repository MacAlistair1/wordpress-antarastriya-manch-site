<?php
/**
 * Getting Started Page
 *
 * @package Blog Designer Pack
 * @since 1.0
 */

if ( !defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<style type="text/css">
	.bdp-pro-box .hndle{background-color:#0073AA; color:#fff;}
	.bdp-pro-box.postbox{background:#dbf0fa none repeat scroll 0 0; border:1px solid #0073aa; color:#191e23;}
	.postbox-container .bdp-list li{list-style:square inside;}
	.bdp-wrap .bdp-button-full{display:block; text-align:center; box-shadow:none; border-radius:0;}
	.bdp-shortcode-preview{background-color: #e7e7e7; font-weight: bold; padding: 2px 5px; display: inline-block; margin:0 0 2px 0;}
</style>

<div class="wrap bdp-wrap">
	<div id="poststuff">
		<div id="post-body" class="metabox-holder columns-2">
			<div id="post-body-content">
				<div class="meta-box-sortables">
					
					<div class="postbox">
						<h3 class="hndle">
							<span><?php _e( 'Getting Started - Blog Designer Pack', 'blog-designer-pack' ); ?></span>
						</h3>

						<div class="inside">
							<table class="form-table">
								<tbody>
									<tr>
										<th>
											<label><?php _e('Getting Started', 'blog-designer-pack'); ?></label>
										</th>
										<td>
											<ul>
												<li><?php _e('Step-1. Go to "Post -- Add New".', 'blog-designer-pack'); ?></li>
												<li><?php _e('Step-2. Add post title, description and featured image and relevant fields.', 'blog-designer-pack'); ?></li>
												<li><?php _e('Step-3. Select post category and tag (Optional)', 'blog-designer-pack'); ?></li>
											</ul>
										</td>
									</tr>

									<tr>
										<th>
											<label><?php _e('Shortcode Page', 'blog-designer-pack'); ?></label>
										</th>
										<td>
											<ul>
												<li><?php _e('Step-1. Create a page like Blog', 'blog-designer-pack'); ?></li>
												<li><?php _e('Step-2. Put below shortcode as per your need.', 'blog-designer-pack'); ?></li>
											</ul>
										</td>
									</tr>

									<tr>
										<th>
											<label><?php _e('All Shortcodes', 'blog-designer-pack'); ?></label>
										</th>
										<td>														
											<span class="bdp-shortcode-preview">[bdp_post]</span> – <?php _e('Post Grid Shortcode', 'blog-designer-pack'); ?> <br />
											<span class="bdp-shortcode-preview">[bdp_post_list]</span> – <?php _e('Post List Shortcode', 'blog-designer-pack'); ?> <br />
											<span class="bdp-shortcode-preview">[bdp_masonry]</span> – <?php _e('Post Masonry Shortcode', 'blog-designer-pack'); ?> <br />
											<span class="bdp-shortcode-preview">[bdp_post_slider]</span> – <?php _e('Post Slider Shortcode', 'blog-designer-pack'); ?> <br />
											<span class="bdp-shortcode-preview">[bdp_post_carousel]</span> – <?php _e('Post Carousel Shortcode', 'blog-designer-pack'); ?> <br />
											<span class="bdp-shortcode-preview">[bdp_post_gridbox]</span> – <?php _e('Post gridbox Shortcode', 'blog-designer-pack'); ?> <br />
											<span class="bdp-shortcode-preview">[bdp_ticker]</span> – <?php _e('Post Ticker Shortcode', 'blog-designer-pack'); ?><br />
											<p>You can find all shortcode parameters on <a href="https://wordpress.org/plugins/blog-designer-pack/" target="_blank">WordPress Page</a></p>
										</td>
									</tr>												
								</tbody>
							</table>
						</div><!-- .inside -->
					</div><!-- .postbox -->

				</div><!-- .meta-box-sortables -->
			</div><!-- #post-body-content -->

			<div id="postbox-container-1" class="postbox-container">
				<div class="postbox bdp-pro-box">
					<h3 class="hndle">
						<span><?php _e( 'Blog Designer Pack Pro', 'blog-designer-pack' ); ?></span>
					</h3>

					<div class="inside">
						<ul class="bdp-list">
							<li>90+ Designs</li>
							<li>Works with any Custom Post Type</li>
							<li>Custom Tags Support</li>
							<li>Featured & Trending Post Functionality</li>
							<li>4 types of paginations</li>
							<li>Social Sharing Options</li>
							<li>Timeline View</li>
							<li>Shortcode Builder</li>
							<li>Template Functionality - Override designs from your theme</li>
							<li>And Many More...</li>
						</ul>

						<a href="https://1.envato.market/MNM" class="button button-primary bdp-button-full" target="_blank">Checkout More Features</a>
					</div><!-- end .inside -->
			</div>

		</div><!-- #post-body -->
	</div><!-- #poststuff -->
</div><!-- end .wrap -->