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
        // Google Fonts
        wp_enqueue_style(
            'google_fonts',
            'https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap',
            array(),
            null
        );
        
        // <!-- Bootstrap CSS -->
        wp_enqueue_style('bootstrap', get_template_directory_uri()."/assets/css/bootstrap.min.css");

        // <!-- Nice Select CSS -->
        wp_enqueue_style('nice_select', get_template_directory_uri()."/assets/css/nice-select.css");

		// <!-- Font Awesome CSS -->
        wp_enqueue_style('font_awesome', get_template_directory_uri()."/assets/css/font-awesome.min.css");

		// <!-- icofont CSS -->
        wp_enqueue_style('icofont', get_template_directory_uri()."/assets/css/icofont.css");

		// <!-- Slicknav -->
        wp_enqueue_style('slicknav', get_template_directory_uri()."/assets/css/slicknav.min.css");

		// <!-- Owl Carousel CSS -->
        wp_enqueue_style('carousel', get_template_directory_uri()."/assets/css/owl-carousel.css");

		// <!-- Datepicker CSS -->
        wp_enqueue_style('datepicker', get_template_directory_uri()."/assets/css/datepicker.css");

		// <!-- Animate CSS -->
        wp_enqueue_style('animate', get_template_directory_uri()."/assets/css/animate.min.css");
		
		// <!-- Magnific Popup CSS -->
        wp_enqueue_style('magnific', get_template_directory_uri()."/assets/css/magnific-popup.css");
		
		// <!-- Medipro CSS -->
        wp_enqueue_style('normalize', get_template_directory_uri()."/assets/css/normalize.css");
        wp_enqueue_style('style', get_template_directory_uri()."/assets/style.css");
        wp_enqueue_style('responsive', get_template_directory_uri()."/assets/css/responsive.css");

    }
}

add_action('wp_enqueue_scripts', 'myCustomCSSAndJSS')

?>