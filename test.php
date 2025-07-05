<?php

// wordpress theme handbook

 // function 2 dhoroner
 // user define
 // build in



  // class-14 | Dev-2
 // restapi>themes>corporate
 
 // hook
 // action
 // filter

 function callbackFunction() {
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));

 }

 add_action('after_setup_theme', 'callbackFunction')


 


 // class-15 | dev-3
//  have_posts();
// the_post()
// the_title()
// get_the_title()

// wordpress posts er modde joto posts ase sobgulo tan diye niye asar jonno have_posts() use kora hoy




// class-16 | Dev-4
// get_template_directory_uri() diye image/js/css link up kore dekhanu hoyese



// class-17 | Dev-5
// get_header()
// get_footer()
// get_sidebar()
// get_template_part(
// wp_head()
// wp_footer()
// bloginfo()



// class-18 | Dev-6
// header file theke css file function.php ene kivabe load korte hobe seta dekhanu hoyese 


// class-19 | Dev-7
// register_nav_menu()
// wp_nav_menu()



// class-20 | Dev-8
// have_posts()
// the_title()
// the_content()


// class-21 | Dev-9
// class WP_Query
// new WP_Query()
// array(
//    // "post_type" => "post",
//    "post_type" => "page",
//    "post_per_page" => 1,
//    "author" => 1 // mane author dore data niye asa jabe

// )



?>