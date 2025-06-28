<?php


function callbackFunction() {
    add_theme_support("post-thumbnails");
    add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));
}

add_action("after_setup_theme", "callbackFunction")

?>