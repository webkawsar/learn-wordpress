<?php

if (!function_exists("callbackFunction")) {
    function callbackFunction()
    {
        add_theme_support("post-thumbnails");
        add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));
    }
}

add_action("after_setup_theme", "callbackFunction");



if( !function_exists('myCustomCSSAndJSS')){
    function myCustomCSSAndJSS() {
        // wp_enqueue_style('style', get_template_directory_uri()."/assets/img/favicon.png");
        wp_enqueue_style('style', get_template_directory_uri()."/assets/css/bootstrap.min.css");
    }
}

add_action('wp_enqueue_scripts', 'myCustomCSSAndJSS')

?>