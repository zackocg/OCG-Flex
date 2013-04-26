<?php

/*
 * This function can be used to compile a less file to css
 */
function ocgflex_phpless( $inputFile, $outputFile ) {
  global $cssminify;
  global $bodyBackgroundColor;
  global $maxGridWidth;
  global $GridPaddingTop;
  global $GridPaddingBottom;
  global $GridPaddingLeft;
  global $GridPaddingRight;
  global $GridFlexPaddingTop;
  global $GridFlexPaddingBottom;
  global $GridFlexPaddingLeft;
  global $GridFlexPaddingRight;
  global $mastheadBrandLogo;
  //echo $mastheadBrandLogo;
  if ( !class_exists( 'lessc' ) ) {
    require_once get_template_directory() . '/ocgflex-core/lesscompiler/lessc.inc.php';
  }
  $less = new lessc;
  
  $less->setVariables(array(
  "bodyBackgroundColor" => $bodyBackgroundColor,
  "maxGridWidth" => $maxGridWidth,
  "GridPaddingTop" => $GridPaddingTop,
  "GridPaddingBottom" => $GridPaddingBottom,
  "GridPaddingLeft" => $GridPaddingLeft,
  "GridPaddingRight" => $GridPaddingRight,
  "GridFlexPaddingTop" => $GridFlexPaddingTop,
  "GridFlexPaddingBottom" => $GridFlexPaddingBottom,
  "GridFlexPaddingLeft" => $GridFlexPaddingLeft,
  "GridFlexPaddingRight" => $GridFlexPaddingRight,
  "mastheadBrandLogo" => $mastheadBrandLogo,
  ));
  
  if ( $cssminify == true ) {
    $less->setFormatter( "compressed" ); 
  }
  
  
  
  // create a new cache object, and compile
  $cache = $less -> cachedCompile( $inputFile );

  file_put_contents( $outputFile, $cache["compiled"] );

  // the next time we run, write only if it has updated
  $last_updated = $cache['updated'];
  $cache = $less -> cachedCompile( $cache );
  if ( $cache['updated'] > $last_updated ) {
    file_put_contents( $outputFile, $cache['compiled'] );
  }
}

/*
 * Runs the compiler function shoestrap_phpless
 * for all files that need compiling
 */
function ocgflex_compile_less() {

//Global Variables From site_config.php
global $dev;
// End Global Variable
  
  //Files to Compile
  
  $master_less = locate_template( '/assets/less/master_style.less' );
  $master_css = locate_template( '/assets/css/master_style.css' );
  
  $kickstart_master_less = locate_template( '/assets/less/kickstart_uikit/kickstart_master.less' );
  $kickstart_master_css = locate_template( '/assets/css/kickstart_master.css' );

  if ( $dev == true ) {
    ocgflex_phpless( $master_less, $master_css );
    ocgflex_phpless( $kickstart_master_less, $kickstart_master_css );
  }
}
add_action('wp', 'ocgflex_compile_less');

?>