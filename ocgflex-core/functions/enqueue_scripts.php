<?php


function theme_styles()  
{ 
  
  wp_register_style( 'custom-style', 
    get_template_directory_uri() . '/assets/css/master_style.css', 
    array(), 
    '20120208', 
    'all' );

  // enqueing:
  wp_enqueue_style( 'custom-style' );
  
  //Register JS Files
  //wp_register_script( 'less.js', plugins_url( '../lesscompiler/less.js', __FILE__ ) );
  
  wp_register_script('less.js', get_stylesheet_directory_uri() . '/ocgflex-core/lesscompiler/less.js');
  
  
  //Enqueue JS Files
  wp_enqueue_script( 'less.js' );
  
}
add_action('wp_enqueue_scripts', 'theme_styles');


?>