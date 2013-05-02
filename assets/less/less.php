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
  
  //Body Settings
  global $bodyBackground;
  
  //Grid Padding - Global
  global $GridPadding;
  global $GridFlexPadding;
  
  //Primary Container
  global $primaryContainerBorderSize;
  global $primaryContainerBorderColor;
  global $primaryContainerBorder_RoundedCorners_topLeft;
  global $primaryContainerBorder_RoundedCorners_topRight;
  global $primaryContainerBorder_RoundedCorners_bottomLeft;
  global $primaryContainerBorder_RoundedCorners_bottomRight;
  global $primaryContainerBackground;
  global $primaryContainerMarginTop;
  global $primaryContainerMarginBottom;
  global $primaryContainerMarginLeft;
  global $primaryContainerMarginRight;
  global $primaryContainerMarginMobile;
  global $primaryContainerPadding;
  global $primaryContainerBoxShadow;
  global $primaryContainer_RoundedCorners_topLeft; 
  global $primaryContainer_RoundedCorners_topRight;
  global $primaryContainer_RoundedCorners_bottomLeft;
  global $primaryContainer_RoundedCorners_bottomRight;
  
  //Content Container
  global $contentContainerBorderSize;
  global $contentContainerBorderColor;
  global $contentContainerBackground;
  
  //Typography
  
  //Masthead
  global $mastHeadPadding;
  global $mastHeadBrandLogo;
  global $mastHeadBrandLogoAlign;
  
  //Navigation
  global $stickyNavFixed;
  global $stickyNavPrimaryContainerMarginTop;
  global $navBaseBackgroundColor;
  global $navGradientColorTop;
  global $navGradientColorBottom;
  
  global $mastHeadBackground;
  
  global $footerBackground;
  global $footerPadding;
  
  //Render Image URLs Correctly
  $mastHeadBrandLogo = "'" . get_stylesheet_directory_uri() . "/assets/images/" . $mastHeadBrandLogo . "'";
  
  if ( !class_exists( 'lessc' ) ) {
    require_once get_template_directory() . '/ocgflex-core/lesscompiler/lessc.inc.php';
  }
  $less = new lessc;
  
  $less->setVariables(array(
  "bodyBackground" => $bodyBackground,
  
  "maxGridWidth" => $maxGridWidth,
  "maxGridWidth1280" => $maxGridWidth1280,
  "maxGridWidth1024" => $maxGridWidth1024,
  "maxGridWidth768" => $maxGridWidth768,
  "maxGridWidth480" => $maxGridWidth480,
  "GridPadding" => $GridPadding,
  "GridFlexPadding" => $GridFlexPadding,
  
  //Primary Container
  "primaryContainerBorderSize" => $primaryContainerBorderSize,
  "primaryContainerBorderColor" => $primaryContainerBorderColor,
  "primaryContainerBorder_RoundedCorners_topLeft" => $primaryContainerBorder_RoundedCorners_topLeft,
  "primaryContainerBorder_RoundedCorners_topRight" => $primaryContainerBorder_RoundedCorners_topRight,
  "primaryContainerBorder_RoundedCorners_bottomLeft" => $primaryContainerBorder_RoundedCorners_bottomLeft,
  "primaryContainerBorder_RoundedCorners_bottomRight" => $primaryContainerBorder_RoundedCorners_bottomRight,
  "primaryContainerBackground" => $primaryContainerBackground,
  "primaryContainerPadding" => $primaryContainerPadding,
  "primaryContainerMarginTop" => $primaryContainerMarginTop,
  "primaryContainerMarginBottom" => $primaryContainerMarginBottom,
  "primaryContainerMarginLeft" => $primaryContainerMarginLeft,
  "primaryContainerMarginRight" => $primaryContainerMarginRight,
  "primaryContainerMarginMobile" => $primaryContainerMarginMobile,
  "primaryContainerBoxShadow" => $primaryContainerBoxShadow,
  "primaryContainer_RoundedCorners_topLeft" => $primaryContainer_RoundedCorners_topLeft,
  "primaryContainer_RoundedCorners_topRight" => $primaryContainer_RoundedCorners_topRight,
  "primaryContainer_RoundedCorners_bottomLeft" => $primaryContainer_RoundedCorners_bottomLeft,
  "primaryContainer_RoundedCorners_bottomRight" => $primaryContainer_RoundedCorners_bottomRight,
  
  
  //Content Container
  "contentContainerBorderSize" => $contentContainerBorderSize,
  "contentContainerBorderColor" => $contentContainerBorderColor,
  "contentContainerBackground" => $contentContainerBackground,
  
  
  //Typography
  
  //Mast Head
  "mastHeadPadding" => $mastHeadPadding,
  "mastHeadBrandLogo" => $mastHeadBrandLogo,
  "mastHeadBrandLogoAlign" => $mastHeadBrandLogoAlign,
  "mastHeadBackground" => $mastHeadBackground,
  
  //Navigation
  "stickyNavFixed" => $stickyNavFixed,
  "stickyNavPrimaryContainerMarginTop" => $stickyNavPrimaryContainerMarginTop,
  "navBaseBackgroundColor" => $navBaseBackgroundColor,
  "navGradientColorTop" => $navGradientColorTop,
  "navGradientColorBottom" => $navGradientColorBottom,
  
  //Footer  
  "footerBackground" => $footerBackground,
  "footerPadding" => $footerPadding,
  
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