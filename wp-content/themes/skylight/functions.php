<?php
//enqueue script and style
function skylight_scripts() {
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/vendor.css', array(), null, 'all');
	wp_enqueue_style('maincss', get_template_directory_uri() . '/css/main.css', array(), null, 'all');
	// wp_enqueue_style('animate', get_template_directory_uri() . '/style.css', array(), null, 'all');
	// wp_enqueue_style('ionicons', get_template_directory_uri() . '/fonts/ionicons/css/ionicons.min.css', array(), null, 'all');
	// wp_enqueue_style('fontawesome', get_template_directory_uri() . '/fonts/fontawesome/css/font-awesome.min.css', array(), null, 'all');
	// wp_enqueue_style('flaticon', get_template_directory_uri() . '/fonts/flaticon/font/flaticon.css', array(), null, 'all');

	wp_enqueue_style('style', get_stylesheet_uri());

	wp_enqueue_script('jquerymin', get_template_directory_uri() . '/js/jquery.min.js', array(), null, true);
	wp_enqueue_script('bundle', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), null, true);
	wp_enqueue_script('owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), null, true);
	wp_enqueue_script('scrollReveal', get_template_directory_uri() . '/js/scrollReveal.js', array(), null, true);
	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.min.js', array(), null, true);
	wp_enqueue_script('navjs', get_template_directory_uri() . '/js/nav.js', array(), null, true);
	// wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'skylight_scripts'); //default return

//image upload feature
add_theme_support('post-thumbnails');
// add_theme_support('title-tag');
//Registering Multiple Menu type
register_nav_menus(array(
	'primary' => __('Primary Menu', 'skylight'),
));

register_nav_menus(array(
	'secondary' => __('Secondary Menu', 'skylight'),
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
	$supports = array('title', 'editor', 'revisions');
	register_post_type('testimonial', $args);
}

add_action('init', 'wpdocs_codex_book_init');

//banner side menu
function banner_slider() {
	$labels = array(
		'name' => _x('Sliders', 'Post type general name', 'skylight'),
		'singular_name' => _x('Sliders', 'Post type singular name', 'skylight'),
		'menu_name' => _x('Sliders', 'Admin Menu text', 'skylight'),
		'name_admin_bar' => _x('Sliders', 'Add New on Toolbar', 'skylight'),
		'add_new' => __('Add New', 'skylight'),
		'add_new_item' => __('Add New Sliders', 'skylight'),
		'new_item' => __('New Sliders', 'skylight'),
		'edit_item' => __('Edit Sliders', 'skylight'),
		'view_item' => __('View Sliders', 'skylight'),
		'all_items' => __('All Sliders', 'skylight'),
		'search_items' => __('Search Sliders', 'skylight'),
		'parent_item_colon' => __('Parent Sliders:', 'skylight'),
		'not_found' => __('No books found.', 'skylight'),
		'not_found_in_trash' => __('No books found in Trash.', 'skylight'),
		'featured_image' => _x('Sliders Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'skylight'),
		'set_featured_image' => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'skylight'),
		'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'skylight'),
		'use_featured_image' => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'skylight'),
		'archives' => _x('Sliders archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'skylight'),
		'insert_into_item' => _x('Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'skylight'),
		'uploaded_to_this_item' => _x('Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'skylight'),
		'filter_items_list' => _x('Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'skylight'),
		'items_list_navigation' => _x('Sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'skylight'),
		'items_list' => _x('Sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'skylight'),
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
	$supports = array('title', 'editor', 'revisions');
	register_post_type('slider', $args);
}

add_action('init', 'banner_slider');

//projects side menu
function projects() {
	$labels = array(
		'name' => _x('Projects', 'Post type general name', 'skylight'),
		'singular_name' => _x('Projects', 'Post type singular name', 'skylight'),
		'menu_name' => _x('Projects', 'Admin Menu text', 'skylight'),
		'name_admin_bar' => _x('Projects', 'Add New on Toolbar', 'skylight'),
		'add_new' => __('Add New', 'skylight'),
		'add_new_item' => __('Add New Projects', 'skylight'),
		'new_item' => __('New Projects', 'skylight'),
		'edit_item' => __('Edit Projects', 'skylight'),
		'view_item' => __('View Projects', 'skylight'),
		'all_items' => __('All Projects', 'skylight'),
		'search_items' => __('Search Projects', 'skylight'),
		'parent_item_colon' => __('Parent Projects:', 'skylight'),
		'not_found' => __('No projects found.', 'skylight'),
		'not_found_in_trash' => __('No projects found in Trash.', 'skylight'),
		'featured_image' => _x('Projects Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'skylight'),
		'set_featured_image' => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'skylight'),
		'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'skylight'),
		'use_featured_image' => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'skylight'),
		'archives' => _x('Projects archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'skylight'),
		'insert_into_item' => _x('Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'skylight'),
		'uploaded_to_this_item' => _x('Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'skylight'),
		'filter_items_list' => _x('Filter projects list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'skylight'),
		'items_list_navigation' => _x('Projects list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'skylight'),
		'items_list' => _x('Projects list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'skylight'),
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
	$supports = array('title', 'editor', 'revisions');
	register_post_type('project', $args);
}

add_action('init', 'projects');

//careers side menu
function careers() {
	$labels = array(
		'name' => _x('Careers', 'Post type general name', 'skylight'),
		'singular_name' => _x('Careers', 'Post type singular name', 'skylight'),
		'menu_name' => _x('Careers', 'Admin Menu text', 'skylight'),
		'name_admin_bar' => _x('Careers', 'Add New on Toolbar', 'skylight'),
		'add_new' => __('Add New', 'skylight'),
		'add_new_item' => __('Add New Careers', 'skylight'),
		'new_item' => __('New Careers', 'skylight'),
		'edit_item' => __('Edit Careers', 'skylight'),
		'view_item' => __('View Careers', 'skylight'),
		'all_items' => __('All Careers', 'skylight'),
		'search_items' => __('Search Careers', 'skylight'),
		'parent_item_colon' => __('Parent Careers:', 'skylight'),
		'not_found' => __('No careers found.', 'skylight'),
		'not_found_in_trash' => __('No careers found in Trash.', 'skylight'),
		'featured_image' => _x('Careers Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'skylight'),
		'set_featured_image' => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'skylight'),
		'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'skylight'),
		'use_featured_image' => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'skylight'),
		'archives' => _x('Careers archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'skylight'),
		'insert_into_item' => _x('Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'skylight'),
		'uploaded_to_this_item' => _x('Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'skylight'),
		'filter_items_list' => _x('Filter careers list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'skylight'),
		'items_list_navigation' => _x('Careers list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'skylight'),
		'items_list' => _x('Careers list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'skylight'),
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'careers'),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_icon' => 'dashicons-feedback',
		'menu_position' => null,
		'supports' => array('title', 'editor'),
	);
	$supports = array('title', 'editor', 'revisions');
	register_post_type('careers', $args);
}

add_action('init', 'careers');

//services side menu
function services() {
	$labels = array(
		'name' => _x('Services', 'Post type general name', 'skylight'),
		'singular_name' => _x('Services', 'Post type singular name', 'skylight'),
		'menu_name' => _x('Services', 'Admin Menu text', 'skylight'),
		'name_admin_bar' => _x('Services', 'Add New on Toolbar', 'skylight'),
		'add_new' => __('Add New', 'skylight'),
		'add_new_item' => __('Add New Services', 'skylight'),
		'new_item' => __('New Services', 'skylight'),
		'edit_item' => __('Edit Services', 'skylight'),
		'view_item' => __('View Services', 'skylight'),
		'all_items' => __('All Services', 'skylight'),
		'search_items' => __('Search Services', 'skylight'),
		'parent_item_colon' => __('Parent Services:', 'skylight'),
		'not_found' => __('No services found.', 'skylight'),
		'not_found_in_trash' => __('No services found in Trash.', 'skylight'),
		'featured_image' => _x('Services Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'skylight'),
		'set_featured_image' => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'skylight'),
		'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'skylight'),
		'use_featured_image' => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'skylight'),
		'archives' => _x('Services archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'skylight'),
		'insert_into_item' => _x('Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'skylight'),
		'uploaded_to_this_item' => _x('Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'skylight'),
		'filter_items_list' => _x('Filter services list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'skylight'),
		'items_list_navigation' => _x('Services list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'skylight'),
		'items_list' => _x('Services list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'skylight'),
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
	$supports = array('title', 'editor', 'revisions');
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
		'name' => __('Footer Area One', 'skylight'),
		'id' => 'footer-1',
		'description' => __('An optional widget area for your site footer', 'skylight'),
		'before_widget' => '<div class="col-md-4">',
		'after_widget' => "</div>",
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));

	register_sidebar(array(
		'name' => __('Footer Area Two', 'skylight'),
		'id' => 'footer-2',
		'description' => __('An optional widget area for your site footer', 'skylight'),
		'before_widget' => '<div class="col-md-4">',
		'after_widget' => "</div>",
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));

	register_sidebar(array(
		'name' => __('Footer Area Three', 'skylight'),
		'description' => __('An optional widget area for your site footer', 'skylight'),
		'id' => 'footer-3',
		'before_widget' => '<div class="col-md-4">',
		'after_widget' => "</div>",
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
}
add_action('init', 'childtheme_widgets_init');

//remove menu from backend
function remove_menu() {
	// remove_menu_page( 'index.php' );                  //Dashboard
	//  remove_menu_page( 'edit.php' );                   //Posts
	//  remove_menu_page( 'upload.php' );                 //Media
	//  remove_menu_page( 'edit.php?post_type=page' );    //Pages
	remove_menu_page('edit-comments.php'); //Comments
	// remove_menu_page( 'themes.php' );                 //Appearance
	// remove_menu_page( 'plugins.php' );                //Plugins
	// remove_menu_page( 'users.php' );                  //Users
	// remove_menu_page( 'tools.php' );                  //Tools
	// remove_menu_page( 'options-general.php' );        //Settings
}
add_action('admin_menu', 'remove_menu');

function prePrint($arrayData, $exit = TRUE) {
	echo "<pre>";
	print_r($arrayData);
	if ($exit === TRUE) {
		die();
	}
}

// Get the current category id if we are on an archive/category page
function getCurrentCatID() {
	global $wp_query;
	if (is_category() || is_single()) {
		$cat_ID = get_query_var('cat');
	}
	return $cat_ID;
}