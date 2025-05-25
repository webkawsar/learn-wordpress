<?php

// wordpress theme handbook

 // function 2 dhoroner
 // user define
 // build in



 // hook
 // action
 // filter

 function callbackFunction() {
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));

 }

 add_action('after_setup_theme', 'callbackFunction')



 // class-15 dev-3
//  have_posts();
// the_post()
// the_title()
// get_the_title()








?>