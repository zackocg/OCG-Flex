<?php

/*
 * This function can be used to compile a less file to css
 */
function ocgflex_phpless( $inputFile, $outputFile ) {
  global $cssminify;
  
  //Grid Widths
  global $maxGridWidth;
  global $maxGridWidth1280;
  global $maxGridWidth1024;
  global $maxGridWidth768;
  global $maxGridWidth480;
  global $boxedLayoutBoxShadow;
  global $boxedLayout_RoundedCorners_topLeft; 
  global $boxedLayout_RoundedCorners_topRight;
  global $boxedLayout_RoundedCorners_bottomLeft;
  global $boxedLayout_RoundedCorners_bottomRight;
 
  global $GridPadding;
  global $GridFlexPadding;
  global $bodyContentContainerMargin;
  global $bodyContentContainerMarginMobile;
  global $mastheadBrandLogo;
  global $bodyContentContainerPadding;
  global $bodyBackgroundColor;
  global $bodyContentContainerBackgroundColor;
  global $mastHeadBackground;
  global $footerBackgroundColor;
  
  //Render Image URLs Correctly
  $mastheadBrandLogo = "'" . get_stylesheet_directory_uri() . "/assets/images/" . $mastheadBrandLogo . "'";
  
  if ( !class_exists( 'lessc' ) ) {
    require_once get_template_directory() . '/ocgflex-core/lesscompiler/lessc.inc.php';
  }
  $less = new lessc;
  
  $less->setVariables(array(
  "maxGridWidth" => $maxGridWidth,
  "maxGridWidth1280" => $maxGridWidth1280,
  "maxGridWidth1024" => $maxGridWidth1024,
  "maxGridWidth768" => $maxGridWidth768,
  "maxGridWidth480" => $maxGridWidth480,
  "boxedLayoutBoxShadow" => $boxedLayoutBoxShadow,
  "boxedLayout_RoundedCorners_topLeft" => $boxedLayout_RoundedCorners_topLeft,
  "boxedLayout_RoundedCorners_topRight" => $boxedLayout_RoundedCorners_topRight,
  "boxedLayout_RoundedCorners_bottomLeft" => $boxedLayout_RoundedCorners_bottomLeft,
  "boxedLayout_RoundedCorners_bottomRight" => $boxedLayout_RoundedCorners_bottomRight,
  
  "GridPadding" => $GridPadding,
  "GridFlexPadding" => $GridFlexPadding,
  "bodyContentContainerPadding" => $bodyContentContainerPadding,
  "bodyContentContainerMargin" => $bodyContentContainerMargin,
  "bodyContentContainerMarginMobile" => $bodyContentContainerMarginMobile,
  "mastheadBrandLogo" => $mastheadBrandLogo,
  "bodyBackgroundColor" => $bodyBackgroundColor,
  "bodyContentContainerBackgroundColor" => $bodyContentContainerBackgroundColor,
  "mastHeadBackground" => $mastHeadBackground,
  "footerBackgroundColor" => $footerBackgroundColor,
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