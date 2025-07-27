<?php // Silence is golden

// EMP custom Post Type
if (!function_exists('emp_custom_post')) {
    function emp_custom_post()
    {
        register_post_type(
            'emp',
            array(
                'labels' => array(
                    'name' => __('EMP', 'myTranslateId'),
                    'singular_name' => __('EMP', 'myTranslateId'),
                    'all_items' => __('All EMP', 'myTranslateId'),
                    'add_new_item' => __('Add EMP', 'myTranslateId'),
                    'edit_item' => __('Edit EMP', 'myTranslateId'),
                    'search_items' => __('Search EMP', 'myTranslateId'),
                    'not_found' => __('Not found in EMP', 'myTranslateId'),
                    'not_found_in_trash' => __('Not found in Trash', 'myTranslateId'),
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array('slug' => 'emp'), // my custom slug
                "supports" => array("title", "editor", "thumbnail"),
                // 'taxonomies' => array("")
            )
        );


    }

}

add_action("init", "emp_custom_post");



if (!function_exists('emp_add_custom_box')) {
    function emp_metabox_html_func()
    {
        ?>
        <label for="phone_number">Phone Number</label> 
        <input type="text" name="phone_number" id="phone_number">
        <?php
    }

    function emp_add_custom_box()
    {

        add_meta_box(
            'phone_number',                 // Unique ID
            'Others Information',      // Box title
            'emp_metabox_html_func',  // Content callback, must be of type callable
        );
    }
}


add_action('add_meta_boxes', 'emp_add_custom_box');
