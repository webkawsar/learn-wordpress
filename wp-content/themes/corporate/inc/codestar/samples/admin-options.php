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
  'menu_title' => 'Code Star Option',
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
    // array(
    //   'id' => 'opt-text',
    //   'type' => 'text',
    //   'title' => 'Text',
    // )
  )
));

//
// Footer Section
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
  'fields' => array(

    array(
      'id' => 'copyright_name',
      'type' => 'text',
      'title' => 'Copyright Name',
    ),

  )
));


