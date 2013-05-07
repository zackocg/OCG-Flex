<?php


function theme_styles()  
{ 
  
  wp_register_style( 'custom-style', 
    get_stylesheet_directory_uri() . '/assets/css/master_style.css', 
    array(), 
    '20120208', 
    'all' );

  // enqueing:
  wp_enqueue_style( 'custom-style' );
  
  //Register JS Files
  //wp_register_script( 'less.js', plugins_url( '../lesscompiler/less.js', __FILE__ ) );
  
  wp_register_script('less.js', get_template_directory_uri() . '/ocgflex-core/lesscompiler/less.js');
  
  //Resonsive Text by GroundWork
  //wp_register_script('jquery.responsiveText.js', get_template_directory_uri() . '/ocgflex-core/js/jquery.responsiveText.js');
  //wp_register_script('responsiveText.js', get_template_directory_uri() . '/ocgflex-core/js/responsiveText.js');
  
  //GroundWork All
  wp_register_script('groundwork.all.js', get_template_directory_uri() . '/ocgflex-core/js/groundwork.all.js', array("jquery"), '1.0', true);
  
  //Enqueue JS Files
  wp_enqueue_script( 'less.js' );
  
  //Enqueue Responsive Text Lib
  //wp_enqueue_script( 'jquery.responsiveText.js' );
  //wp_enqueue_script( 'responsiveText.js' );
  
  wp_enqueue_script( 'groundwork.all.js' );
  
}
add_action('wp_enqueue_scripts', 'theme_styles');


?>