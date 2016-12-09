<?php

define("THEME_DIR", get_template_directory_uri());

remove_action('wp_head', 'wp_generator');
     
function enqueue_styles() {
    wp_register_style( 'main-styles', THEME_DIR . '/main-styles.min.css', array(), '1', 'all' );
    wp_enqueue_style( 'main-styles' );  

    $thing = is_page('andyet');
    if($thing){
    	wp_register_style( 'andyet-styles', THEME_DIR . '/andyet.min.css', array(), '1', 'all' );
    	wp_enqueue_style( 'andyet-styles' );  
    }
}

function register_jquery() {
  if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', true, '3.1.1');
    wp_enqueue_script('jquery');

    wp_deregister_script('jquery-migrate');
  }
}

add_action( 'wp_enqueue_scripts', 'register_jquery' );

add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

?>