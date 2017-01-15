<?php

define("THEME_DIR", get_template_directory_uri());

remove_action('wp_head', 'wp_generator');
     
function enqueue_styles() {
    wp_register_style( 'style', THEME_DIR . '/style.css' );
    wp_enqueue_style( 'style' );  

  	wp_register_style( 'lato-font', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,900' );
  	wp_enqueue_style( 'lato-font' );

    if(is_single()){
      wp_register_style( 'code-highlight-style', THEME_DIR . '/css/paraiso-dark.css' );
        wp_enqueue_style( 'code-highlight-style' ); 
    }  
}

function enqueue_highlighter_script() {
  if(is_single()){
    wp_register_script('code-highlight-script', THEME_DIR . '/js/highlight.pack.js');
      wp_enqueue_script('code-highlight-script');
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

add_action( 'wp_enqueue_scripts', 'enqueue_highlighter_script' );

add_action( 'wp_enqueue_scripts', 'register_jquery' );

add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

?>