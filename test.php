<?php

// wordpress theme handbook

 // function 2 dhoroner
 // user define
 // build in



  // class-14 | Dev-2
 // restapi>themes>corporate
 
 // hook
 // action
 // filter

 function callbackFunction() {
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));

 }

 add_action('after_setup_theme', 'callbackFunction')


 


 // class-15 | dev-3
//  have_posts();
// the_post()
// the_title()
// get_the_title()

// wordpress posts er modde joto posts ase sobgulo tan diye niye asar jonno have_posts() use kora hoy




// class-16 | Dev-4
// get_template_directory_uri() diye image/js/css link up kore dekhanu hoyese



// class-17 | Dev-5
// get_header()
// get_footer()
// get_sidebar()
// get_template_part(
// wp_head()
// wp_footer()
// bloginfo()



// class-18 | Dev-6
// header file theke css file function.php ene kivabe load korte hobe seta dekhanu hoyese 


// class-19 | Dev-7
// register_nav_menu()
// wp_nav_menu()



// class-20 | Dev-8
// have_posts()
// the_title()
// the_content()


// class-21 | Dev-9
// class WP_Query
// new WP_Query()
// array(
//    // "post_type" => "post",
//    "post_type" => "page",
//    "post_per_page" => 1,
//    "author" => 1 // mane author dore data niye asa jabe

// )


// class-22
// posts er details page e kivabe jete hoy and kivabe details page connect korte hoy
// page er details page create korte hoy


// class-23
// hierarchy somporke ektu porashuna korte hobe
// custom post type




// Register Custom Post Type
function custom_post_type() {

	$labels = array(
	
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Post Type', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => false,
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'post_type', $args );

}
add_action( 'init', 'custom_post_type', 0 );










?>