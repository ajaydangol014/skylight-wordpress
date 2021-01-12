<?php
//enqueue script and style
function pivot_scripts() {
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), null, 'all');
	wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array(), null, 'all');
	wp_enqueue_style('owl', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), null, 'all');
	// wp_enqueue_style('datepicker', get_template_directory_uri() . '/css/bootstrap-datepicker.css', array(), null, 'all');
	// wp_enqueue_style('timepicker', get_template_directory_uri() . '/css/jquery.timepicker.css', array(), null, 'all');
	wp_enqueue_style('ionicons', get_template_directory_uri() . '/fonts/ionicons/css/ionicons.min.css', array(), null, 'all');
	wp_enqueue_style('fontawesome', get_template_directory_uri() . '/fonts/fontawesome/css/font-awesome.min.css', array(), null, 'all');
	wp_enqueue_style('flaticon', get_template_directory_uri() . '/fonts/flaticon/font/flaticon.css', array(), null, 'all');

	wp_enqueue_style('style', get_stylesheet_uri());

	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), null, true);
	wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js', array(), null, true);
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), null, true);
	wp_enqueue_script('owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), null, true);
	wp_enqueue_script('waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), null, true);
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'pivot_scripts'); //default return

//image upload feature
add_theme_support('post-thumbnails');

register_nav_menus(array(
	'primary' => __('Primary Menu', 'pivot'),
));

//including the customizer file
require get_template_directory() . '/inc/customizer.php';

function wpdocs_codex_book_init() {
	$labels = array(
		'name' => _x('Testimonials', 'Post type general name', 'textdomain'),
		'singular_name' => _x('Testimonials', 'Post type singular name', 'textdomain'),
		'menu_name' => _x('Testimonials', 'Admin Menu text', 'textdomain'),
		'name_admin_bar' => _x('Testimonials', 'Add New on Toolbar', 'textdomain'),
		'add_new' => __('Add New', 'textdomain'),
		'add_new_item' => __('Add New Testimonials', 'textdomain'),
		'new_item' => __('New Testimonials', 'textdomain'),
		'edit_item' => __('Edit Testimonials', 'textdomain'),
		'view_item' => __('View Testimonials', 'textdomain'),
		'all_items' => __('All Testimonials', 'textdomain'),
		'search_items' => __('Search Testimonials', 'textdomain'),
		'parent_item_colon' => __('Parent Testimonials:', 'textdomain'),
		'not_found' => __('No books found.', 'textdomain'),
		'not_found_in_trash' => __('No books found in Trash.', 'textdomain'),
		'featured_image' => _x('Testimonials Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
		'set_featured_image' => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
		'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
		'use_featured_image' => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
		'archives' => _x('Testimonials archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
		'insert_into_item' => _x('Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
		'uploaded_to_this_item' => _x('Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
		'filter_items_list' => _x('Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
		'items_list_navigation' => _x('Testimonials list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
		'items_list' => _x('Testimonials list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'testimonial'),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'menu_icon' => 'dashicons-format-quote',
		'supports' => array('title', 'editor', 'thumbnail'),
	);

	register_post_type('testimonial', $args);
}

add_action('init', 'wpdocs_codex_book_init');

//banner side menu
function banner_slider() {
	$labels = array(
		'name' => _x('Sliders', 'Post type general name', 'pivot'),
		'singular_name' => _x('Sliders', 'Post type singular name', 'pivot'),
		'menu_name' => _x('Sliders', 'Admin Menu text', 'pivot'),
		'name_admin_bar' => _x('Sliders', 'Add New on Toolbar', 'pivot'),
		'add_new' => __('Add New', 'pivot'),
		'add_new_item' => __('Add New Sliders', 'pivot'),
		'new_item' => __('New Sliders', 'pivot'),
		'edit_item' => __('Edit Sliders', 'pivot'),
		'view_item' => __('View Sliders', 'pivot'),
		'all_items' => __('All Sliders', 'pivot'),
		'search_items' => __('Search Sliders', 'pivot'),
		'parent_item_colon' => __('Parent Sliders:', 'pivot'),
		'not_found' => __('No books found.', 'pivot'),
		'not_found_in_trash' => __('No books found in Trash.', 'pivot'),
		'featured_image' => _x('Sliders Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'pivot'),
		'set_featured_image' => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'pivot'),
		'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'pivot'),
		'use_featured_image' => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'pivot'),
		'archives' => _x('Sliders archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'pivot'),
		'insert_into_item' => _x('Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'pivot'),
		'uploaded_to_this_item' => _x('Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'pivot'),
		'filter_items_list' => _x('Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'pivot'),
		'items_list_navigation' => _x('Sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'pivot'),
		'items_list' => _x('Sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'pivot'),
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'slider'),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_icon' => 'dashicons-slides',
		'menu_position' => null,
		'supports' => array('title', 'editor', 'thumbnail'),
	);

	register_post_type('slider', $args);
}

add_action('init', 'banner_slider');

//projects side menu
function projects() {
	$labels = array(
		'name' => _x('Projects', 'Post type general name', 'pivot'),
		'singular_name' => _x('Projects', 'Post type singular name', 'pivot'),
		'menu_name' => _x('Projects', 'Admin Menu text', 'pivot'),
		'name_admin_bar' => _x('Projects', 'Add New on Toolbar', 'pivot'),
		'add_new' => __('Add New', 'pivot'),
		'add_new_item' => __('Add New Projects', 'pivot'),
		'new_item' => __('New Projects', 'pivot'),
		'edit_item' => __('Edit Projects', 'pivot'),
		'view_item' => __('View Projects', 'pivot'),
		'all_items' => __('All Projects', 'pivot'),
		'search_items' => __('Search Projects', 'pivot'),
		'parent_item_colon' => __('Parent Projects:', 'pivot'),
		'not_found' => __('No projects found.', 'pivot'),
		'not_found_in_trash' => __('No projects found in Trash.', 'pivot'),
		'featured_image' => _x('Projects Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'pivot'),
		'set_featured_image' => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'pivot'),
		'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'pivot'),
		'use_featured_image' => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'pivot'),
		'archives' => _x('Projects archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'pivot'),
		'insert_into_item' => _x('Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'pivot'),
		'uploaded_to_this_item' => _x('Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'pivot'),
		'filter_items_list' => _x('Filter projects list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'pivot'),
		'items_list_navigation' => _x('Projects list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'pivot'),
		'items_list' => _x('Projects list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'pivot'),
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'project'),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_icon' => 'dashicons-feedback',
		'menu_position' => null,
		'supports' => array('title', 'editor', 'thumbnail'),
	);

	register_post_type('project', $args);
}

add_action('init', 'projects');

//services side menu
function services() {
	$labels = array(
		'name' => _x('Services', 'Post type general name', 'pivot'),
		'singular_name' => _x('Services', 'Post type singular name', 'pivot'),
		'menu_name' => _x('Services', 'Admin Menu text', 'pivot'),
		'name_admin_bar' => _x('Services', 'Add New on Toolbar', 'pivot'),
		'add_new' => __('Add New', 'pivot'),
		'add_new_item' => __('Add New Services', 'pivot'),
		'new_item' => __('New Services', 'pivot'),
		'edit_item' => __('Edit Services', 'pivot'),
		'view_item' => __('View Services', 'pivot'),
		'all_items' => __('All Services', 'pivot'),
		'search_items' => __('Search Services', 'pivot'),
		'parent_item_colon' => __('Parent Services:', 'pivot'),
		'not_found' => __('No services found.', 'pivot'),
		'not_found_in_trash' => __('No services found in Trash.', 'pivot'),
		'featured_image' => _x('Services Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'pivot'),
		'set_featured_image' => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'pivot'),
		'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'pivot'),
		'use_featured_image' => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'pivot'),
		'archives' => _x('Services archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'pivot'),
		'insert_into_item' => _x('Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'pivot'),
		'uploaded_to_this_item' => _x('Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'pivot'),
		'filter_items_list' => _x('Filter services list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'pivot'),
		'items_list_navigation' => _x('Services list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'pivot'),
		'items_list' => _x('Services list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'pivot'),
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'service'),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'menu_icon' => 'dashicons-products',
		'supports' => array('title', 'editor', 'thumbnail'),
	);

	register_post_type('service', $args);
}

add_action('init', 'services');

//creating project taxonomies
add_action('init', 'create_project_taxonomies', 0);

// create two taxonomies, genres and writers for the post type "project"
function create_project_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name' => _x('Project Category', 'taxonomy general name', 'Project Category'),
		'singular_name' => _x('Genre', 'taxonomy singular name', 'Project Category'),
		'search_items' => __('Search Project Category', 'Project Category'),
		'all_items' => __('All Project Category', 'Project Category'),
		'parent_item' => __('Parent Project Category', 'Project Category'),
		'parent_item_colon' => __('Parent Project Category:', 'Project Category'),
		'edit_item' => __('Edit Project Category', 'Project Category'),
		'update_item' => __('Update Project Category', 'Project Category'),
		'add_new_item' => __('Add New Project Category', 'Project Category'),
		'new_item_name' => __('New Project Category Name', 'Project Category'),
		'menu_name' => __('Project Category', 'Project Category'),
	);

	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'project-category'),
	);

	register_taxonomy('project-category', array('project'), $args);
}

//add li class for primary theme location
function atg_menu_classes($classes, $item, $args) {
	if ($args->theme_location == 'primary') {
		$classes[] = 'nav-item';
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

//add anchor class for primary theme location
function add_specific_menu_location_atts($atts, $item, $args) {
	// check if the item is in the primary menu
	if ($args->theme_location == 'primary') {
		// add the desired attributes:
		$atts['class'] = 'nav-link';
	}
	return $atts;
}
add_filter('nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3);

//generate title tags info
add_filter('pre_get_document_title', 'filter_document_title');
function filter_document_title($title) {

	$title = 'Pivot |' . ' ' . get_post_type();

	return $title;

}

//displays widgets menu in appearance menu
function childtheme_widgets_init() {
	register_sidebar(array(
		'name' => __('Footer Area One', 'pivot'),
		'id' => 'sidebar-3',
		'description' => __('An optional widget area for your site footer', 'pivot'),
		'before_widget' => '<div class="col-md-3">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="text-white">',
		'after_title' => '</h3>',
	));

	register_sidebar(array(
		'name' => __('Footer Area Two', 'pivot'),
		'id' => 'sidebar-4',
		'description' => __('An optional widget area for your site footer', 'pivot'),
		'before_widget' => '<div class="col-md-3">',
		'after_widget' => "</div>",
		'before_title' => '',
		'after_title' => '',
	));

	register_sidebar(array(
		'name' => __('Footer Area Three', 'pivot'),
		'id' => 'sidebar-5',
		'description' => __('An optional widget area for your site footer', 'pivot'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}
add_action('init', 'childtheme_widgets_init');