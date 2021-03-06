<?php
class Footer_Putter_Copyright_Widget extends Footer_Putter_Widget {

    private $credits;
    private	$defaults = array( 
    	'nav_menu' => 0, 'center' => true, 'two_lines' => true,  
		'show_copyright' => true, 'show_address' => true, 'show_telephone' => true, 'show_email' => false,
		'show_return' => true, 'return_class' => '', 'footer_class' => '', 'visibility' => '');

	private $tips = array(
		'nav_menu' => array('heading' => 'Footer Menu', 'tip' => 'Choose the menu to display in the footer'),
		'center' => array('heading' => 'Center Menu', 'tip' => 'Center the footer horizontally'),
		'layout' => array('heading' => 'Layout', 'tip' => 'Choose order and layout in which menu, copyright and contact are placed, + means same line, | means new line'),
		'show_copyright' => array('heading' => 'Show Copyright', 'tip' => 'Show copyright holder an year range'),
		'show_address' => array('heading' => 'Show Address', 'tip' => 'Show contact address'),
		'show_telephone' => array('heading' => 'Show Telephone Number', 'tip' => 'Show telephone number(s)'),
		'show_email' => array('heading' => 'Show Email Address', 'tip' => 'Show email'),
		'use_microdata' => array('heading' => 'Use HTML5 Microdata', 'tip' => 'Express organization, contact and any geo-coordinates using HTML5 microdata'),
		'show_return' => array('heading' => 'Show Return To Top Links', 'tip' => 'Show link to return to the top of the page'),
		'return_class' => array('heading' => 'Return To Top', 'tip' => 'Add custom classes to apply to the return to top links'),
		'footer_class' => array('heading' => 'Footer Credits', 'tip' => 'Add custom classes to apply to the footer menu, copyright and contact information'),
		'visibility' => array('heading' => 'Show or Hide', 'tip' => 'Determine on which pages the footer widget is displayed'),
	);

	function get_tips() {
		return $this->tips;
	}
	
	function get_defaults() {
		return $this->defaults;
	}

	function __construct() {
		$widget_ops = array( 'description' => __( "A widget displaying menu links, copyright and company details" ) );
		parent::__construct('footer_copyright', __('Footer Copyright Widget'), $widget_ops);
		$this->credits = $this->plugin->get_credits(); 
	}
	
	function widget( $args, $instance ) {
		extract( $args );		
		$instance = wp_parse_args( (array) $instance, $this->defaults );
		if ($this->hide_widget($instance['visibility'])) return; //check visibility requirements

		if ($footer = $this->credits->footer($instance)) 
			printf ('%1$s%2$s%3$s', $before_widget, $footer, $after_widget);
	}

	function update( $new_instance, $old_instance ) {
		$instance = wp_parse_args( (array) $old_instance, $this->defaults );
		$instance['nav_menu'] = !empty($new_instance['nav_menu']) ? $new_instance['nav_menu'] : 0;
		$instance['show_copyright'] = !empty($new_instance['show_copyright']) ? 1 : 0;
		$instance['show_telephone'] = !empty($new_instance['show_telephone']) ? 1 : 0;	
		$instance['show_email'] = !empty($new_instance['show_email']) ? 1 : 0;	
		$instance['show_address'] = !empty($new_instance['show_address']) ? 1 : 0;	
		$instance['use_microdata'] = !empty($new_instance['use_microdata']);
		$instance['center'] = !empty($new_instance['center']) ? 1 : 0;
		$instance['layout'] = $new_instance['layout'];
		$instance['show_return'] = !empty($new_instance['show_return']) ? 1 : 0;
		$instance['return_class'] = trim($new_instance['return_class']);
		$instance['footer_class'] = trim($new_instance['footer_class']);
		$instance['visibility'] = trim($new_instance['visibility']);
		return $instance;
	}

	function form( $instance ) {
		$this->form_init ($instance, $this->tips);
		$menu_terms = get_terms( 'nav_menu', array( 'hide_empty' => false ) );
		if ( !$menu_terms ) {
			echo '<p>'. sprintf( __('No menus have been created yet. <a href="%s">Create some</a>.' ), admin_url('nav-menus.php') ) .'</p>';
			return;
		}
		$menus = array();
		$menus[0] = 'No menu';
		foreach ( $menu_terms as $term ) $menus[ $term->term_id ] = $term->name;
        print '<div class="diy-wrap">';
		$this->print_form_field('nav_menu',  'select', $menus);
        print ('<hr/><h4>Options</h4>');
		$this->print_form_field('center',  'checkbox');
		$this->print_form_field('show_copyright', 'checkbox');
		$this->print_form_field('show_address', 'checkbox');
		$this->print_form_field('show_telephone', 'checkbox');
		$this->print_form_field('show_email', 'checkbox');
		$this->print_form_field('show_return', 'checkbox');
		if ($this->utils->is_html5()) $this->print_form_field('use_microdata', 'checkbox');
		$this->print_form_field('layout', 'select', $this->credits->get_layouts());
		print <<< CUSTOM_CLASSES
<hr/><h4>Custom Classes</h4>
<p>Add any custom CSS classes you want apply to the footer section content to change the font color and size.</p>
<p>For your convenience we have defined 3 color classes <i>dark</i>, <i>light</i> and <i>white</i>, and 2 size classes, 
<i>small</i> and <i>tiny</i>. Feel free to use these alongside your own custom CSS classes.</p>
CUSTOM_CLASSES;

		$this->print_form_field('return_class', 'text', array(), array('size' => 10));
		$this->print_form_field('footer_class', 'text', array(), array('size' => 10));
      print ('<hr/><h4>Widget Presence</h4>');
		$this->print_form_field('visibility',  'radio', $this->get_visibility_options(), array('separator' => '<br />'));
      print '</div>';
	}  
	
}
