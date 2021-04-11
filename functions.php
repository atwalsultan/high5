<?php

// Change all instances of THEMENAME to your theme name.
if ( ! function_exists( 'high5_setup' ) ) :
 
   function high5_setup() {
     add_theme_support( 'automatic-feed-links' );
     add_theme_support( 'title-tag' );
     add_theme_support( 'post-thumbnails' );
     add_theme_support( 'custom-logo', array(
      'height'      => 800,
      'width'       => 800,
      'flex-height' => true,
      'flex-width'  => true,
      'header-text' => array( 'site-title', 'site-description' ),
     ) );

     register_nav_menus(array(
      'menu-main'    =>    'Main Menu',
     ));
   }
 
endif;
 
add_action('after_setup_theme', 'high5_setup');
 
function high5_scripts_styles(){
   wp_enqueue_style('high5_style', get_stylesheet_uri(), array(), time());

   wp_enqueue_style('high5_google_fonts', "https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700", array(), null);
}
 
add_action('wp_enqueue_scripts', 'high5_scripts_styles');