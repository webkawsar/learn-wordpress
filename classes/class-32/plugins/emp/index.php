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