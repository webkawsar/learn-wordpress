<?php

/*
 * Plugin Name: Course Taxonomy
 * Description: A short example showing how to add a taxonomy called Course.
 * Version: 1.0
 * Author: developer.wordpress.org
 * Author URI: https://codex.wordpress.org/User:Aternus
 */

function employee_cat()
{
    $labels = array(
        'name' => _x('Employee Category', 'taxonomy general name'),
        'singular_name' => _x('Employee Category', 'taxonomy singular name'),
        'search_items' => __('Search Employee Category'),
        'all_items' => __('All Employee Category'),
        'parent_item' => __('Parent Employee Category'),
        'parent_item_colon' => __('Parent Employee Category:'),
        'edit_item' => __('Edit Employee Category'),
        'update_item' => __('Update Employee Category'),
        'add_new_item' => __('Add Employee Category'),
        'new_item_name' => __('New Employee Category Name'),
        'menu_name' => __('Employee Category'),
    );
    $args = array(
        'hierarchical' => true, // make it hierarchical (like categories)
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => ['slug' => 'employees-categories'],
    );
    register_taxonomy('employee_category', ['employee'], $args);
}

add_action('init', 'employee_cat');

?>