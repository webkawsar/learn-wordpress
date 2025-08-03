<?php

if (!function_exists('employee_custom_post')) {
    function employee_custom_post()
    {
        register_post_type(
            'employee',
            array(
                'labels' => array(
                    'name' => __('Employees', 'myTranslateId'),
                    'singular_name' => __('Employee', 'myTranslateId'),
                    'all_items' => __('All Employees', 'myTranslateId'),
                    'add_new_item' => __('Add Employee', 'myTranslateId'),
                    'edit_item' => __('Edit Employee', 'myTranslateId'),
                    'search_items' => __('Search Employee', 'myTranslateId'),
                    'not_found' => __('Not found in Employee', 'myTranslateId'),
                    'not_found_in_trash' => __('Not found in Trash', 'myTranslateId'),
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array('slug' => 'employees'), // my custom slug
                "supports" => array("title", "editor", "thumbnail"),
                // 'taxonomies' => array("")
            )
        );


    }

}

add_action("init", "employee_custom_post")


?>