<?php if (!defined('ABSPATH')) {
  die;
} // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = '_prefix_my_options';

//
// Create options
//
CSF::createOptions($prefix, array(
  'menu_title' => 'Theme Option',
  'menu_slug' => 'theme-option',
));

//
// Create a section
//
CSF::createSection($prefix, array(
  'title' => 'Overview',
  'icon' => 'fas fa-rocket',
  'fields' => array(

    //
    // A text field
    //
    array(
      'id' => 'opt-text',
      'type' => 'text',
      'title' => 'Text',
    )
  )
));

//
// Basic Fields
//
CSF::createSection($prefix, array(
  'id' => 'basic_fields',
  'title' => 'Footer Section',
  'icon' => 'fas fa-plus-circle',
));

//
// Field: text
//
CSF::createSection($prefix, array(
  'parent' => 'basic_fields',
  'title' => 'Copyright',
  'icon' => 'far fa-square',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=text" target="_blank">Field: text</a>',
  'fields' => array(

    array(
      'id' => 'copyright_name',
      'type' => 'text',
      'title' => 'Copyright Name',
    ),

  )
));


