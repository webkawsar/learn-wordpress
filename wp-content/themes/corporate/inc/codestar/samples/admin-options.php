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
// Field: Footer Section text
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

// Home Page Section: Fun Facts
CSF::createSection($prefix, array(
  'id' => 'fun_facts',
  'title' => 'Homepage Section',
  'icon' => 'fas fa-plus-circle',
));

//
// Field: Fun Facts repeater field
//
CSF::createSection($prefix, array(
  'parent' => 'fun_facts',
  'title' => 'Fun Facts',
  'fields' => array(
    array(
      'id' => 'fun_facts_count',
      'type' => 'repeater',
      'fields' => array(
        array(
          'id' => 'fun_count',
          'type' => 'text',
          'title' => 'Fun Fact',
        ),
      ),
      'default' => array(
        array(
          'fun_count' => 'Fun fact Name',
        )
      ),
    ),

  )
));