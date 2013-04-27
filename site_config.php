<?php
/*
------------------------------------------------------
O C G - F L E X    S I T E   C O N F I G U R A T I O N
------------------------------------------------------

In order for the following variables to work, 
set $dev to "true", to turn on developer mode.
*/


/* -----D E V E L O P M E N T    M O D E   (LESS)---------*/
$dev = true; //Set to compile less files into master_style.css
$cssminify = true; // Set to true is CSS should be minified during compile.




/* ------- G R I D   W I D T H ----------------*/

//Max Grid Width > 1280px+
$maxGridWidth = "960px"; //Max Width of the Grid.

//RESPONSIVE - Max Grid Width > 1024px - 1280px
$maxGridWidth1280 = "960px";

//RESPONSIVE - Max Grid Width > 768px - 1024px
$maxGridWidth1024 = "768px";

//RESPONSIVE - Max Grid Width > 480px - 768px
$maxGridWidth768 = "90%";

//RESPONSIVE - Max Grid Width > 480px
$maxGridWidth480 = "100%";




/* --------B O D Y   S E T T I N G S --------------*/

$bodyBackground = '#ffffff url(\'../images/background_textures/grey_wash_wall.png\') fixed';




/* ------- B O X E D   L A Y O U T ----------------*/

//Set if site requires boxed layout look, this will put everthing into a grid.
$boxedLayout = true;

//Boxed Layout Shadow ( 2px 2px 10px 1px rgba(0, 0, 0, .3) )
$boxedLayoutBoxShadow = "2px 2px 10px 1px rgba(0, 0, 0, .3)";

//Set Corner Radius for Boxed Layout Primary Container
$boxedLayout_RoundedCorners_topLeft = "10px"; 
$boxedLayout_RoundedCorners_topRight = "10px";
$boxedLayout_RoundedCorners_bottomLeft = "10px";
$boxedLayout_RoundedCorners_bottomRight = "10px";





/* ------- G R I D   S E C T I O N S ----------------*/

$mastHeadInGrid = true; //Set if you want the header inside a grid that is centered.
$navInGrid = false; //Set if you want the navigation inside a grid that is centered.
$bodyInGrid = true; //Set if you want the loop body inside a grid that is centered.
$footerInGrid = true; //Set if you want the footer inside a grid that is centered.

//Grid Padding Global Setting
$GridPadding = "0px";

//Grid-Flex Padding Global Setting
$GridFlexPadding = "0";





/* ------- P R I M A R Y   C O N T A I N E R ----------------*/

// Primary Container Background
$primaryContentContainerBackground = '#ffffff url(\'../images/background_textures/fabric_of_squares_gray.png\')';

//Inner Padding of Main Container
$bodyContentContainerPadding = "20px";





/* ------- M A R G I N S ----------------*/

//Set Body Content Container Margin
$bodyContentContainerMargin = "20px auto"; // (top, right, bottom, left) for center page (0 auto)

//Set Body Content Container Margin for Mobile (Max Width 480px)
$bodyContentContainerMarginMobile = "15px 15px";




/* ------- T Y P O G R A P H Y ----------------*/

$googleWebFonts = "";

$webFonts = "";

$H1_size = "";
$H2_size = "";
$H3_size = "";
$H4_size = "";
$H5_size = "";
$H6_size = "";




/*---------M A S T H E A D------------*/

//Choose MastHead Layout
/*
1 - Logo Align Left With Widget Area Right
2 - Centered Logo, No Widget Area
3 - Logo Align Right With Widget Area Left
4 - 
5 - 
6 - 
*/
$mastHeadLayout = "";

//Company Logo
$mastheadBrandLogo = "ocg_flex_logo.png";

//Masthead Background ( background:#ffffff url('img_tree.png') no-repeat right top; )
$mastHeadBackground = "none"; 





/* ------- N A V I G A T I O N ----------------*/

$useKickstartNav = false; // This is the main fallback navigation styled with Kickstart UIKit
$useUberMenu = true; // Set to 'true' if UberMenu Plugin is installed NOTE: Turn on "Easy Integration" in the ubermenu admin panel under "Theme Integration"





/* ------- C O N T E N T ------------*/



/* ------- F O O T E R ------------*/
$footerBackgroundColor = "none"; //Masthead Background Color

/* ------- L A Y O U T   S E T T I N G S ----------------*/


require_once get_stylesheet_directory() . '/assets/less/less.php' ;

require_once get_template_directory() . '/ocgflex-core/functions/site_config_functions.php' ;










?>