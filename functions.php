<?php

/* ADDS THEMES SUPPORT IN ADMIN BAR */

function lili_admin_bar_menu() {
	global $wp_admin_bar;
	if ( current_user_can( 'manage_options' ) ) {
		$theme_options = array(
			'id' => '1',
			'title' => __('Theme Options'),
			'href' => admin_url('/customize.php'),
		);
		$wp_admin_bar->add_menu($theme_options);
	}		
}
add_action('admin_bar_menu', 'lili_admin_bar_menu', 99);


/* REMOVES ADMIN TOOLBAR */

add_filter('show_admin_bar', '__return_false');


/* LOADS THEME STYLES */

function liliripe_styles() {
	// Bootstrap CSS
	wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '');
	wp_enqueue_style('bootstrap-css');
	
	// CSS Reset
	wp_register_style('reset', get_template_directory_uri() . '/assets/css/reset.css', array(), '');
	wp_enqueue_style('reset');
	
	// Font CSS
	wp_register_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css', array(), '');
	wp_enqueue_style('fonts');
	
	// Icons CSS
	wp_register_style('icons', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array(), '');
	wp_enqueue_style('icons');
	
	// Main Stylesheet
	wp_register_style('stylesheet', get_stylesheet_uri(), array(), '');
	wp_enqueue_style('stylesheet');
	
	// Responsive CSS
	wp_register_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '');
	wp_enqueue_style('responsive');
}
add_action( 'wp_enqueue_scripts', 'liliripe_styles' );  


/* LOADS THEME SCRIPTS */

function liliripe_scripts() {
	// jQuery
	wp_register_script('jquery-min', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '', true);
	wp_enqueue_script('jquery-min');
	
	// jQuery UI
	wp_register_script('jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array(), '', true);
	wp_enqueue_script('jquery-ui');
	
	// Bootstrap JS
	wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '', true);
	wp_enqueue_script('bootstrap-js');
	
	// Slicknav JS
	wp_register_script('slicknav-js', get_template_directory_uri() . '/assets/js/jquery.slicknav.js', array(), '', true);
	wp_enqueue_script('slicknav-js');
	
	// Theme JS
	wp_register_script('theme-js', get_template_directory_uri() . '/assets/js/theme.js', array(), '', true);
	wp_enqueue_script('theme-js');
}
add_action( 'wp_enqueue_scripts', 'liliripe_scripts' );


/* REMOVES VERSION NUMBERS FROM STYLES & SCRIPTS */

function remove_cssjs_ver( $src ) {
	if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );


/* ADDS SUPPORT FOR POST THUMBNAILS */

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 271, 99999, false );


/* ADDS SUPPORT FOR NAVIGATION MENUS */

function register_my_menus() {
  register_nav_menus(
    array(
      'left'      => __('Left Menu'),
      'center'    => __('Center Menu'),
      'right'     => __('Right Menu'),
      'footer1'   => __('Footer Left Menu'),
      'footer2'   => __('Footer Right Menu'),
    )
  );
}
add_action( 'init', 'register_my_menus' );


/* ADDS SUPPORT FOR SIDEBARS */

function arphabet_widgets_init() {
	register_sidebar( array(
		'name' => 'Twitter Feed',
		'id' => 'twitter',
		'before_widget' => '<div class="twitter-feed">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="align-center">',
		'after_title' => '</h3>',
	));
	register_sidebar( array(
		'name' => 'Product Sidebar',
		'id' => 'product-sidebar',
		'before_widget' => '<div class="product-sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="align-center">',
		'after_title' => '</h4>',
	));
	register_sidebar( array(
		'name' => 'Services Sidebar',
		'id' => 'services-sidebar',
		'before_widget' => '<div class="product-sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="align-center">',
		'after_title' => '</h4>',
	));
	register_sidebar( array(
		'name' => 'Supply Market Sidebar',
		'id' => 'supply-market-sidebar',
		'before_widget' => '<div class="product-sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="align-center">',
		'after_title' => '</h4>',
	));
	register_sidebar( array(
		'name' => 'Sales & Marketing Sidebar',
		'id' => 'sales-marketing-sidebar',
		'before_widget' => '<div class="product-sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="align-center">',
		'after_title' => '</h4>',
	));
	register_sidebar( array(
		'name' => 'Customer Success Sidebar',
		'id' => 'customer-success-sidebar',
		'before_widget' => '<div class="product-sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="align-center">',
		'after_title' => '</h4>',
	));
	register_sidebar( array(
		'name' => 'Information Technology Sidebar',
		'id' => 'information-technology-sidebar',
		'before_widget' => '<div class="product-sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="align-center">',
		'after_title' => '</h4>',
	));
	register_sidebar( array(
		'name' => 'Talent Development Sidebar',
		'id' => 'human-resources-sidebar',
		'before_widget' => '<div class="product-sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="align-center">',
		'after_title' => '</h4>',
	));
	register_sidebar( array(
		'name' => 'Supplier Management Sidebar',
		'id' => 'supplier-management-sidebar',
		'before_widget' => '<div class="product-sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="align-center">',
		'after_title' => '</h4>',
	));
	register_sidebar( array(
		'name' => 'Learning Development Sidebar',
		'id' => 'learning-development-sidebar',
		'before_widget' => '<div class="product-sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="align-center">',
		'after_title' => '</h4>',
	));
	register_sidebar( array(
		'name' => 'Footer - Google Maps',
		'id' => 'footer1',
		'before_widget' => '<div class="footer1">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar( array(
		'name' => 'Footer - Contact Us',
		'id' => 'footer2',
		'before_widget' => '<div class="footer2">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar( array(
		'name' => 'Footer - Social Media',
		'id' => 'footer3',
		'before_widget' => '<div class="footer3">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar( array(
		'name' => 'Header - Social Media',
		'id' => 'headersocial',
		'before_widget' => '<ul class="header-social">',
		'after_widget' => '</ul>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}
add_action( 'widgets_init', 'arphabet_widgets_init' );


/* CHANGES LENGTH OF EXCERPTS */

function get_excerpt($count){
	$permalink = get_permalink($post->ID);
	$excerpt = get_the_content();
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, $count);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	return '<p class="excerpt">' . $excerpt . ' ...</p>';
}


/* REGISTERS FULL-WIDTH CONTENT IN GUTENBERG */

function wide_img() {
	add_theme_support('align-wide');
}
add_action('after_setup_theme', 'wide_img');


/* CREATES A NICELY FORMATTED TITLE ELEMENT */

function may_wp_title( $title, $sep ) {
	global $paged, $page;
	if ( is_feed() )
		return $title;

	$title .= get_bloginfo( 'name' );

	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'may' ), max( $paged, $page ) );
	return $title;
}
add_filter( 'wp_title', 'may_wp_title', 10, 2 );


/* MAKES ARCHIVE TITLES SHORTER */

function the_titlesmall($before = '', $after = '', $echo = true, $length = false) {
	$title = get_the_title();
	if ( $length && is_numeric($length) ) {
		$title = substr( $title, 0, $length );
	}
	if ( strlen($title)> 0 ) {
		$title = apply_filters('the_titlesmall', $before . $title . $after, $before, $after);
		if ( $echo )
			echo $title;
		else
			return $title;
	}
}
	

/* ADDS SUPPORT FOR CUSTOM POST TYPES */

function custom_post_news() {
	$labels = array(
		'name'               => __( 'News', 'post type general name' ),
		'singular_name'      => __( 'News', 'post type singular name' ),
		'add_new'            => __( 'Add New', 'book' ),
		'add_new_item'       => __( 'Add New Entry' ),
		'edit_item'          => __( 'Edit Entry' ),
		'new_item'           => __( 'New Entry' ),
		'all_items'          => __( 'All Entries' ),
		'view_item'          => __( 'View Entry' ),
		'search_items'       => __( 'Search Entries' ),
		'not_found'          => __( 'No entries found' ),
		'not_found_in_trash' => __( 'No entries found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'News'
	);
	register_post_type( 'news', array(
		'labels'        => $labels,
		'public'        => true,
		'menu_icon'     => 'dashicons-format-aside',
		'menu_position' => 7,
		'supports'      => array( 'title', 'editor' ),
		'has_archive'   => true,
	) );
	flush_rewrite_rules();
}
add_action( 'init', 'custom_post_news' );

function custom_post_resources() {
	$labels = array(
		'name'               => __( 'Resources', 'post type general name' ),
		'singular_name'      => __( 'Resources', 'post type singular name' ),
		'add_new'            => __( 'Add New', 'book' ),
		'add_new_item'       => __( 'Add New Entry' ),
		'edit_item'          => __( 'Edit Entry' ),
		'new_item'           => __( 'New Entry' ),
		'all_items'          => __( 'All Entries' ),
		'view_item'          => __( 'View Entry' ),
		'search_items'       => __( 'Search Entries' ),
		'not_found'          => __( 'No entries found' ),
		'not_found_in_trash' => __( 'No entries found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Resources'
	);
	register_post_type( 'resources', array(
		'labels'        => $labels,
		'public'        => true,
		'menu_icon'     => 'dashicons-chart-area',
		'menu_position' => 8,
		'supports'      => array( 'title', 'editor' ),
		'has_archive'   => true,
	) );
	flush_rewrite_rules();
}
add_action( 'init', 'custom_post_resources' );

function custom_post_events() {
	$labels = array(
		'name'               => __( 'Events', 'post type general name' ),
		'singular_name'      => __( 'Events', 'post type singular name' ),
		'add_new'            => __( 'Add New', 'book' ),
		'add_new_item'       => __( 'Add New Entry' ),
		'edit_item'          => __( 'Edit Entry' ),
		'new_item'           => __( 'New Entry' ),
		'all_items'          => __( 'All Entries' ),
		'view_item'          => __( 'View Entry' ),
		'search_items'       => __( 'Search Entries' ),
		'not_found'          => __( 'No entries found' ),
		'not_found_in_trash' => __( 'No entries found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Events'
	);
	register_post_type( 'events', array(
		'labels'        => $labels,
		'public'        => true,
		'menu_icon'     => 'dashicons-calendar-alt',
		'menu_position' => 9,
		'supports'      => array( 'title', 'editor' ),
		'has_archive'   => true,
	) );
	flush_rewrite_rules();
}
add_action( 'init', 'custom_post_events' );


/* ADDS SUPPORT FOR CUSTOM SHORTCODES */

function featuredContent_shortcode() {
     return 'shortcode test';
}
add_shortcode('featuredContent', 'featuredContent_shortcode');
