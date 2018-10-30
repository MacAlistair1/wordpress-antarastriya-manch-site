<?php
/**
 * Plugin Premium Offer Page
 *
 * @package Blog Designer Pack
 * @since 1.0.0
 */

if ( !defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<div class="wrap bdp-premium-wrap">
	
	<h2><?php _e( 'Blog Designer Pack Pro', 'blog-designer-pack' ); ?></h2><br/>
	<div class="about-text"><strong>Blog Designer Pack Pro - A beautiful and optimized WordPress plugin to create Blog, News, Magazine and Post website.</strong></div>
	<br/>

	<style>
		.bdpp-cta{margin:30px 0 30px 0;}
		.bdp-premium-wrap .bdpp-buy-btn{font-weight:600; color:#fff; text-decoration:none; text-transform:uppercase; display:inline-block; padding:1em 2em; background:#008ec2; border-radius:0.2em;}
		.bdpp-cta a, .bdpp-cta .button{margin:0 10px; vertical-align:middle;}
		.bdp-text-center{text-align:center;}		
		.bdp-plugin-pricing-tbl thead th h2{font-weight: 400; font-size: 2.4em; line-height:normal; margin:0px; color: #0073aa;}
		.bdp-plugin-pricing-tbl thead th h2 + p{font-size: 1.25em; line-height: 1.4; color: #999; margin:5px 0 5px 0;}

		table.bdp-plugin-pricing-tbl{width:90%; text-align: left; border-spacing: 0; border-collapse: collapse; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;}
		.bdp-plugin-pricing-tbl th, .bdp-plugin-pricing-tbl td{font-size:14px; line-height:normal; color:#444; vertical-align:middle; padding:12px;}

		.bdp-plugin-pricing-tbl colgroup:nth-child(1) { width: 31%; border: 0 none; }
		.bdp-plugin-pricing-tbl colgroup:nth-child(2) { width: 22%; border: 1px solid #ccc; }
		.bdp-plugin-pricing-tbl colgroup:nth-child(3) { width: 25%; border: 10px solid #0073aa; }

		/* Tablehead */
		.bdp-plugin-pricing-tbl thead th {background-color: #fff; background:linear-gradient(to bottom, #ffffff 0%, #ffffff 100%); text-align: center; position: relative; border-bottom: 1px solid #ccc; padding: 1em 0 1em; font-weight:400; color:#999;}
		.bdp-plugin-pricing-tbl thead th:nth-child(1) {background: transparent;}
		.bdp-plugin-pricing-tbl thead th:nth-child(3) {padding:1em 0 3.5em 0;}		
		.bdp-plugin-pricing-tbl thead th p.promo {font-size: 14px; color: #fff; position: absolute; bottom:0; left: -17px; z-index: 1000; width: 100%; margin: 0; padding: .625em 17px .75em; background-color: #ca4a1f; box-shadow: 0 2px 4px rgba(0,0,0,.25); border-bottom: 1px solid #ca4a1f;}
		.bdp-plugin-pricing-tbl thead th p.promo:before {content: ""; position: absolute; display: block; width: 0px; height: 0px; border-style: solid; border-width: 0 7px 7px 0; border-color: transparent #900 transparent transparent; bottom: -7px; left: 0;}
		.bdp-plugin-pricing-tbl thead th p.promo:after {content: ""; position: absolute; display: block; width: 0px; height: 0px; border-style: solid; border-width: 7px 7px 0 0; border-color: #900 transparent transparent transparent; bottom: -7px; right: 0;}

		/* Tablebody */
		.bdp-plugin-pricing-tbl tbody th{background: #fff; border-left: 1px solid #ccc; font-weight: 600;}
		.bdp-plugin-pricing-tbl tbody th span{font-weight: normal; font-size: 87.5%; color: #999; display: block;}

		.bdp-plugin-pricing-tbl tbody td{background: #fff; text-align: center;}
		.bdp-plugin-pricing-tbl tbody td .dashicons{height: auto; width: auto; font-size:30px;}
		.bdp-plugin-pricing-tbl tbody td .dashicons-no-alt{color: #ca4a1f;}
		.bdp-plugin-pricing-tbl tbody td .dashicons-yes{color: #2ECC71;}

		.bdp-plugin-pricing-tbl tbody tr:nth-child(even) th,
		.bdp-plugin-pricing-tbl tbody tr:nth-child(even) td { background: #f5f5f5; border: 1px solid #ccc; border-width: 1px 0 1px 1px; }
		.bdp-plugin-pricing-tbl tbody tr:last-child td {border-bottom: 0 none;}

		/* Table Footer */
		.bdp-plugin-pricing-tbl tfoot th, .bdp-plugin-pricing-tbl tfoot td{text-align: center; border-top: 1px solid #ccc;}
	</style>

	<table class="bdp-plugin-pricing-tbl">
		<colgroup></colgroup>
		<colgroup></colgroup>
		<colgroup></colgroup>	
	    <thead>
	    	<tr>
	    		<th></th>
	    		<th>
	    			<h2>Free</h2>
	    			<p>$0 USD</p>
	    		</th>
	    		<th>
	    			<h2>Premium</h2>
	    			<p>$25 USD</p>
	    			<p class="promo">One Time Payment - Lifetime Upgrade</p>
	    		</th>	    		
	    	</tr>
	    </thead>

	    <tfoot>
	    	<tr>
	    		<th></th>
	    		<td></td>
	    		<td><p><strong>One Time Payment - Lifetime Upgrade</strong></p><a class="bdpp-buy-btn" href="https://1.envato.market/MNM" target="_blank">Upgrade Now</a></td>
	    	</tr>
	    </tfoot>

	    <tbody>
	    	<tr>
	    		<th>Designs <span>Designs that make your website better</span></th>
	    		<td>10</td>
	    		<td>90+</td>
	    	</tr>
	    	<tr>
	    		<th>Custom Post Type Support <span>Works with any custom post type.</span></th>
	    		<td><i class="dashicons dashicons-no-alt"></i></td>
	    		<td><i class="dashicons dashicons-yes"></i></td>
	    	</tr>
			<tr>
	    		<th>Custom Tags Support <span>Works with any custom tags.</span></th>
	    		<td><i class="dashicons dashicons-no-alt"></i></td>
	    		<td><i class="dashicons dashicons-yes"></i></td>
	    	</tr>
			<tr>
	    		<th>Featured & Trending Post Functionality <span>Works with any post type.</span></th>
	    		<td><i class="dashicons dashicons-no-alt"></i></td>
	    		<td><i class="dashicons dashicons-yes"></i></td>
	    	</tr>
			<tr>
		    	<th>Paginations <span>Type of paginations</span></th>
		    	<td>1</td>
	    		<td>4</td>
	    	</tr>
	    	<tr>
		    	<th>Shortcodes <span>Shortcode provide output to the front-end side</span></th>
		    	<td>7</td>
	    		<td>10</td>
	    	</tr>
			<tr>
	    		<th>Shortcode Parameters <span>Add extra power to the shortcode</span></th>
	    		<td>10</td>
	    		<td>30+</td>
	    	</tr>
			<tr>
		    	<th>Social Sharing Options <span>Share posts on social network </span></th>
		    	<td><i class="dashicons dashicons-no-alt"></i></td>
	    		<td><i class="dashicons dashicons-yes"></i></td>
	    	</tr>
			<tr>
		    	<th>Sticky Post Options <span>Enable and display sticky posts </span></th>
		    	<td><i class="dashicons dashicons-no-alt"></i></td>
	    		<td><i class="dashicons dashicons-yes"></i></td>
	    	</tr>
			<tr>
	    		<th>Grid View <span>Display post in a grid view</span></th>
	    		<td><i class="dashicons dashicons-yes"></i></td>
	    		<td><i class="dashicons dashicons-yes"></i></td>
	    	</tr>
			<tr>
	    		<th>Slider View <span>Display post in a slider view</span></th>
	    		<td><i class="dashicons dashicons-yes"></i></td>
	    		<td><i class="dashicons dashicons-yes"></i></td>
	    	</tr>
			<tr>
	    		<th>Carousel  View <span>Display post in a carousel  view</span></th>
	    		<td><i class="dashicons dashicons-yes"></i></td>
	    		<td><i class="dashicons dashicons-yes"></i></td>
	    	</tr>
			<tr>
	    		<th>GridBox and GridBox Slider  View <span>Display post in a gridbox view</span></th>
	    		<td><i class="dashicons dashicons-yes"></i></td>
	    		<td><i class="dashicons dashicons-yes"></i></td>
	    	</tr>
			<tr>
	    		<th>List   View <span>Display post in a list  view</span></th>
	    		<td><i class="dashicons dashicons-yes"></i></td>
	    		<td><i class="dashicons dashicons-yes"></i></td>
	    	</tr>
			<tr>
	    		<th>Masonry View <span>Display post in a masonry view</span></th>
	    		<td><i class="dashicons dashicons-yes"></i></td>
	    		<td><i class="dashicons dashicons-yes"></i></td>
	    	</tr>
	    	<tr>
	    		<th>Ticker View <span>Display post in a Ticker view</span></th>
	    		<td><i class="dashicons dashicons-yes"></i></td>
	    		<td><i class="dashicons dashicons-yes"></i></td>
	    	</tr>
			<tr>
	    		<th>Timeline  View <span>Display post in a timeline  view</span></th>
	    		<td><i class="dashicons dashicons-no-alt"></i></td>
	    		<td><i class="dashicons dashicons-yes"></i></td>
	    	</tr>	
	    	<tr>
	    		<th>Shortcode Generator <span>Play with all shortcode parameters with preview panel. No documentation required!!</span></th>
	    		<td><i class="dashicons dashicons-no-alt"></i></td>
	    		<td><i class="dashicons dashicons-yes"></i></td>
	    	</tr>
			<tr>
	    		<th>Template Functionality <span>Control your shortcode from one place on various location!!</span></th>
	    		<td><i class="dashicons dashicons-no-alt"></i></td>
	    		<td><i class="dashicons dashicons-yes"></i></td>
	    	</tr>
			<tr>
	    		<th>Widgets<span> WordPress Widgets to your sidebars.</span></th>
	    		<td>1 Widget (2 Designs)</td>
	    		<td>2 Widgets (10+ Designs)</td>
	    	</tr>
			<tr>
	    		<th>Drag & Drop Post Order Change <span>Arrange your desired post with your desired order and display</span></th>
	    		<td><i class="dashicons dashicons-no-alt"></i></td>
	    		<td><i class="dashicons dashicons-yes"></i></td>
	    	</tr>	
			<tr>
				<th>Custom Read More link for Post <span>Redirect post to third party destination if any</span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th>Display Desired Post <span>Display only the post you want</span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
	    		<th>Display Post for Particular Categories <span>Display only the posts with particular category</span></th>
	    		<td><i class="dashicons dashicons-yes"></i></td>
	    		<td><i class="dashicons dashicons-yes"></i></td>
	    	</tr>
	    	<tr>
				<th>Exclude Some Posts <span>Do not display the posts you want</span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th>Exclude Some Categories <span>Do not display the posts for particular categories</span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th>Post Order / Order By Parameters <span>Display post according to date, title and etc</span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
	    		<th>Multiple Slider Parameters <span>Slider parameters like autoplay, number of slide, sider dots and etc.</span></th>
	    		<td><i class="dashicons dashicons-yes"></i></td>
	    		<td><i class="dashicons dashicons-yes"></i></td>
	    	</tr>
			<tr>
	    		<th>Slider RTL Support <span>Slider supports for RTL website</span></th>
	    		<td><i class="dashicons dashicons-yes"></i></td>
	    		<td><i class="dashicons dashicons-yes"></i></td>
	    	</tr>
	    	<tr>
	    		<th>Support <span>Get support for plugin</span></th>
	    		<td>Limited</td>
	    		<td>1 Year</td>
	    	</tr>    	
	    </tbody>
	</table>

	<div class="bdp-text-center bdpp-cta">
		<a href="https://1.envato.market/MNM" class="bdpp-buy-btn" target="_blank">Check Blog Designer Pack Pro</a>
	</div>
	<hr/>

	<div class="bdp-features about-wrap">
		<h3>Other More Features &#x1F60A</h3>

		<div class="two-col">
			<div class="col">
				<h3>90+ Various Layouts</h3>
				<p>Plgin has multiple shortcodes to to display posts in various layouts. <a href="http://demo.infornweb.com/pro/" target="_blank">Check out the Pro demo.</a></p>
			</div>

			<div class="col">
				<h3>Create Multiple Layouts</h3>
				<p>Create as many as layout with various designs like Grid, Slider, Carousel, List, Masonry, GridBox, GridBox Slider, Timeline and Ticker. <a href="http://demo.infornweb.com/pro/" target="_blank">Check out the Pro demo.</a></p>
			</div>

			<div class="col">
				<h3>Custom Post Type Support</h3>
				<p>Works with any custom post type like WordPress Page and any other from third party plugin.</p>
			</div>

			<div class="col">
				<h3>Custom Category Support</h3>
				<p>Display posts category wise in your desired layout like Grid, Slider, Carousel and etc with pagination.</p>
			</div>

			<div class="col">
				<h3>Custom Tags Support</h3>
				<p>Display posts tag wise in your desired layout like Grid, Slider, Carousel and etc with pagination.</p>
			</div>

			<div class="col">
				<h3>Featured and Trending Post Functionality</h3>
				<p>Plugin has built-in Featured and Trending post functionality. Display your featured posts or most popular posts in your desired layout.</p>
			</div>

			<div class="col">
				<h3>Social Sharing</h3>
				<p>Visitors can share post on different types of social platform like Facebook, Twitter, LinkedIn, Google Plus, WhatsApp and 12 more!!</p>
			</div>

			<div class="col">
				<h3>WordPress Template Functionality</h3>
				<p>Works with any theme. Modify plugin layout easily from your theme and make it your own.</p>
			</div>

			<div class="col">
				<h3>Display Post on your Desired Order</h3>
				<p>Plugin has different types of order parameters like display post name wise, date wise, modified date wise in your sorting order and etc.</p>
			</div>

			<div class="col">
				<h3>Many More Shortcode Parameters</h3>
				<p>Plugin has 40+ types of different shortcode parameters like display order, sticky post, sharing, pagination and etc.</p>
			</div>

			<div class="col">
				<h3>Light Weight and Fast</h3>
				<p>Speed Maters. Created with ground level with WordPress Coding Standard. Optimized Query Performance.</p>
			</div>

			<div class="col">
				<h3>Fully Responsive</h3>
				<p>Fully Responsive. Cross Browsers Support. RTL support.</p>
			</div>
		</div>
		<p><a href="https://1.envato.market/MNM" target="_blank">Checkout</a> other more features and details.</p>
	</div><!-- end .bdp-features -->

	<div class="bdp-text-center bdpp-cta">
		<a href="https://1.envato.market/MNM" class="bdpp-buy-btn" target="_blank">Buy Blog Designer Pack Pro</a>
		<p>One Time Payment - Lifetime Upgrade</p>
	</div>
</div>