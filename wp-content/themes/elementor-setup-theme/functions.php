<?php
/**
 * MyTheme functions and definitions
 *
 * @package Elementor Compatible
 */


/**
 * Theme Setup
 */
function mytheme_setup() {
    // Let WordPress manage the document title
    // add_theme_support( 'title-tag' );

    // Post thumbnails
    // add_theme_support( 'post-thumbnails' );

    // Wide & Full alignment (Elementor, Gutenberg)
    // add_theme_support( 'align-wide' );
    // add_theme_support( 'responsive-embeds' );

}
add_action( 'after_setup_theme', 'mytheme_setup' );

/**
 * Enqueue Styles
 */
// function mytheme_enqueue_scripts() {
//     wp_enqueue_style( 'mytheme-style', get_stylesheet_uri(), [], '1.0' );
// }
// add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_scripts' );



