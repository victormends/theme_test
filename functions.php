<?php

function load_scripts(){
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
   
    wp_enqueue_script('script', get_template_directory_uri() . '/script.js', array('jquery-two'), null, true);
  
}
add_action('wp_enqueue_scripts','load_scripts');


function theme_menus() {
    $locations = array(
        'primary' => 'Primary Menu test',
    );
    register_nav_menus($locations);
}

add_action('init','theme_menus');