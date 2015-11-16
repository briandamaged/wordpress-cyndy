<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}


add_action( 'widgets_init', 'cyndy_widgets_init' );

function cyndy_widgets_init() {
  if ( function_exists('siteorigin_panels_activate') ) {
    register_widget( 'Cyndy_Project_List' );
  }
}


function cyndy_setup() {
  add_theme_support( 'post-thumbnails' );
  add_image_size('cyndy-project-thumb', 350);
}
add_action( 'after_setup_theme', 'cyndy_setup' );




if ( function_exists('siteorigin_panels_activate') ) {
  require get_stylesheet_directory() . "/widgets/project-list.php";
}

?>