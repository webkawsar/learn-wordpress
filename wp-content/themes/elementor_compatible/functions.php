<?php
// Theme supports

function mytheme_setup() {
    // Title & Thumbnail Support
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );

    // Navigation Menus
    register_nav_menus( [
        'menu-1' => __( 'Primary Menu', 'mytheme' ),
        'menu-2' => __( 'Footer Menu', 'mytheme' ),
    ] );
}
add_action( 'after_setup_theme', 'mytheme_setup' );



// Elementor Theme Builder Locations Register

function mytheme_register_elementor_locations( $elementor_theme_manager ) {
    $elementor_theme_manager->register_all_core_location();
}
add_action( 'elementor/theme/register_locations', 'mytheme_register_elementor_locations' );

// Respect Elementor "Hide Title" Setting
function mytheme_check_hide_title( $val ) {
    if ( defined( 'ELEMENTOR_VERSION' ) ) {
        $current_doc = \Elementor\Plugin::instance()->documents->get( get_the_ID() );
        if ( $current_doc && 'yes' === $current_doc->get_settings( 'hide_title' ) ) {
            $val = false;
        }
    }
    return $val;
}
add_filter( 'mytheme_page_title', 'mytheme_check_hide_title' );


function mytheme_enqueue_scripts() {
    wp_enqueue_style( 'mytheme-style', get_stylesheet_uri(), [], '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_scripts' );
