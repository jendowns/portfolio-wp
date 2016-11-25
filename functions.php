<?php

define("THEME_DIR", get_template_directory_uri());

remove_action('wp_head', 'wp_generator');
     
function enqueue_styles() {
    wp_register_style( 'main-styles', THEME_DIR . '/main.min.css', array(), '1', 'all' );
    wp_enqueue_style( 'main-styles' );  
}

add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

?>