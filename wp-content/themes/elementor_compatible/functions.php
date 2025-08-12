<?php
function my_elementor_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('wp-block-styles');
}
add_action('after_setup_theme', 'my_elementor_theme_setup');

function my_elementor_theme_scripts()
{
    wp_enqueue_style('my-elementor-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_elementor_theme_scripts');
