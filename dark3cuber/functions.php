<?php
/* Calling Stylesheets */
function get_files(){
	wp_enqueue_style('bootstrap','//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css','','4.0');
	wp_enqueue_style('fontawesome','//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.1/css/all.min.css','','5.7.1');
	
	wp_enqueue_script('jquery','//code.jquery.com/jquery-3.2.1.slim.min.js','','5.7.1');
	wp_enqueue_script('popper','//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js','','5.7.1');
	wp_enqueue_script('bootstrapJs','//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js','','5.7.1');
	
	wp_enqueue_style('style',get_stylesheet_uri());
	wp_enqueue_style('responsive',get_template_directory_uri().'/css/responsive.css','','1.0');
	
}
add_action('wp_enqueue_scripts','get_files');


/* Registering Menu */
register_nav_menus(array(
	'primary'=>__('Main Menu'),
));


/* Add Featured Image */
add_theme_support('post-thumbnails');

/* Adding new post type slider */

function custom_bootstrap_slider() {
	$labels = array(
		'name'               => _x( 'Slider', 'post type general name'),
		'singular_name'      => _x( 'Slide', 'post type singular name'),
		'menu_name'          => _x( 'Bootstrap Slider', 'admin menu'),
		'name_admin_bar'     => _x( 'Slide', 'add new on admin bar'),
		'add_new'            => _x( 'Add New', 'Slide'),
		'add_new_item'       => __( 'Name'),
		'new_item'           => __( 'New Slide'),
		'edit_item'          => __( 'Edit Slide'),
		'view_item'          => __( 'View Slide'),
		'all_items'          => __( 'All Slide'),
		'featured_image'     => __( 'Featured Image', 'text_domain' ),
		'search_items'       => __( 'Search Slide'),
		'parent_item_colon'  => __( 'Parent Slide:'),
		'not_found'          => __( 'No Slide found.'),
		'not_found_in_trash' => __( 'No Slide found in Trash.'),
	);

	$args = array(
		'labels'             => $labels,
		'menu_icon'	     => 'dashicons-star-half',
    	'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail')
	);
	register_post_type('slider',$args);
}
function team(){
$teamNames = array(
	'name'               => _x( 'Team', 'post type general name'),
	'singular_name'      => _x( 'Team Member', 'post type singular name'),
	'menu_name'          => _x( 'Team Member', 'admin menu'),
	'name_admin_bar'     => _x( 'Team', 'add new on admin bar'),
	'add_new'            => _x( 'Add New', 'Member'),
	'add_new_item'       => __( 'Name'),
	'new_item'           => __( 'New Member'),
	'edit_item'          => __( 'Edit Team'),
	'view_item'          => __( 'View Team Members'),
	'all_items'          => __( 'All Members'),
	'featured_image'     => __( 'Member Photo', 'text_domain' ),
	'search_items'       => __( 'Search Member'),
	'parent_item_colon'  => __( 'Parent Member:'),
	'not_found'          => __( 'No Member found.'),
	'not_found_in_trash' => __( 'No Member found in Trash.'),
);

register_post_type('team',array(
		'labels'             => $teamNames,
		'menu_icon'	     => 'dashicons-groups',
    	'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail')
));
}

add_action('after_setup_theme','custom_bootstrap_slider');
add_action('after_setup_theme','team');
/* Sidebar Registration */
function WidgetInit(){
	register_sidebar(array(
		'name' => 'Footer 1',
		'id' => 'sidebar1',
		'before_widget' => '<div class="footer-block newsletter">',
		'after_widget' => '</div>'
	));
	register_sidebar(array(
		'name' => 'Footer 2',
		'id' => 'sidebar2',
		'before_widget' => '<div class="footer-block services">',
		'after_widget' => '</div>'
	));
	register_sidebar(array(
		'name' => 'Footer 3',
		'id' => 'sidebar3',
		'before_widget' => '<div class="footer-block services">',
		'after_widget' => '</div>'
	));
	register_sidebar(array(
		'name' => 'Footer 4',
		'id' => 'sidebar4',
		'before_widget' => '<div class="footer-block services">',
		'after_widget' => '</div>'
	));
}
add_action('widgets_init','WidgetInit');
?>