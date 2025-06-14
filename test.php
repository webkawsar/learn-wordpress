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




// class-16 | Dev-4
// get_template_directory_uri()



// class-17 | Dev-5
// get_header()
// get_footer()
// get_sidebar()
// get_template_part(
// wp_head()
// wp_footer()
// bloginfo()



// class-18 | Dev-6


// class-19 | Dev-7
// register_nav_menu()
// wp_nav_menu()



?>