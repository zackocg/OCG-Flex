<?php
/*
------------------------------------------------------
O C G - F L E X    S I T E   C O N F I G U R A T I O N
------------------------------------------------------

In order for the following variables to work, 
set $dev to 'true', to turn on developer mode.
*/


/* -----D E V E L O P M E N T    M O D E   (LESS)---------*/
$dev = true; //Set to compile less files into master_style.css
$cssminify = false; // Set to true is CSS should be minified during compile.




/* ------- G R I D   W I D T H ----------------*/

/*

*NOTE* - Do not use percentages under 100% 
as everything with class 'grid' will be that 
percentage in the media query.

*/

//Max Grid Width > 1280px+
$maxGridWidth = '960px'; //Max Width of the Grid.

//RESPONSIVE - Max Grid Width > 1024px - 1280px
$maxGridWidth1280 = '960px';

//RESPONSIVE - Max Grid Width > 768px - 1024px
$maxGridWidth1024 = '768px';

//RESPONSIVE - Max Grid Width > 480px - 768px
$maxGridWidth768 = '700px';

//RESPONSIVE - Max Grid Width > 480px
$maxGridWidth480 = '100%';




/* --------B O D Y   S E T T I N G S --------------*/

$bodyBackground = '#ffffff url(\'../images/background_textures/grey_wash_wall.png\') fixed';


/* ------- B O X E D   L A Y O U T ----------------*/

//Set if site requires boxed layout look, this will put everthing into a grid.
$boxedLayout = false;


/* ------- G R I D   S E C T I O N S ----------------*/

$mastHeadInGrid = true; //Set if you want the header inside a grid that is centered.
$navInGrid = false; //Set if you want the navigation inside a grid that is centered.
$bodyInGrid = true; //Set if you want the loop body inside a grid that is centered.
$footerInGrid = true; //Set if you want the footer inside a grid that is centered.


/* ------- G R I D   S E T T I N G S ----------------*/

//Grid Padding Global Setting
$GridPadding = '0px';

//Grid-Flex Padding Global Setting
$GridFlexPadding = '0';





/* ------- P R I M A R Y   C O N T A I N E R ----------------*/

//Primary Container Border Size (Use CSS Padding Atts. eg '20px' or '0 20px')
$primaryContainerBorderSize = '0px'; 

//Primary Container Border Color (HEX, RGB, RGBA, and URL for images)
$primaryContainerBorderColor = 'rgba(0,0,0,.1)';

//Set Corner Radius for Boxed Layout Primary Container
$primaryContainerBorder_RoundedCorners_topLeft = '0'; 
$primaryContainerBorder_RoundedCorners_topRight = '0';
$primaryContainerBorder_RoundedCorners_bottomLeft = '0';
$primaryContainerBorder_RoundedCorners_bottomRight = '0';

// Primary Container Background ( #ffffff url(\'../images/background_textures/retina_wood.png\') )
$primaryContainerBackground = '#ffffff url(\'../images/background_textures/retina_wood.png\')';

$primaryContainer = '';

//Boxed Layout Shadow ( 2px 2px 10px 1px rgba(0, 0, 0, .3) )
$primaryContainerBoxShadow = '2px 2px 10px 1px rgba(0, 0, 0, .3)';

//Set Corner Radius for Boxed Layout Primary Container
$primaryContainer_RoundedCorners_topLeft = '0'; 
$primaryContainer_RoundedCorners_topRight = '0';
$primaryContainer_RoundedCorners_bottomLeft = '0';
$primaryContainer_RoundedCorners_bottomRight = '0';

//Inner Padding of Main Container
$primaryContainerPadding = '0px';

//Set Body Content Container Margin
$primaryContainerMargin = '0px auto'; // (top, right, bottom, left) for center page (0 auto)

//Set Body Content Container Margin for Mobile (Max Width 480px)
$primaryContainerMarginMobile = '0 0';


/* ------- T Y P O G R A P H Y ----------------*/

/*
GOOGLE WEB FONTS IMPORTANT INFORMATION
You need to add your @import web fonts from google
in (template_root)/assets/less/main_structure/typography.less
at the top of the file.

You may then put the font-family in the fields below.
*/

$H1_size = '';
$H2_size = '';
$H3_size = '';
$H4_size = '';
$H5_size = '';
$H6_size = '';




/*---------M A S T H E A D------------*/

//Choose MastHead Layout
/*
0 - Custom Header ( /content/sections/custom_masthead.php )
1 - Logo Left (col_3), Widget Area Right (col_9) Max Logo Size = 00px X 00px
2 - Logo Left (col_4), Widget Area Right (col_8) Max Logo Size = 00px X 00px
3 - Logo Left (col_5), Widget Area Right (col_7) Max Logo Size = 00px X 00px
4 - Logo Left (col_6), Widget Area Right (col_6) Max Logo Size = 00px X 00px
5 - Logo Left (col_7), Widget Area Right (col_5) Max Logo Size = 00px X 00px
6 - Logo Left (col_8), Widget Area Right (col_4) Max Logo Size = 00px X 00px
7 - Logo Left (col_9), Widget Area Right (col_3) Max Logo Size = 00px X 00px
8 - Logo Center No Widget Area, Link Full Width & Height
*/
$mastHeadLayout = '2';

//Masthead Background ( #ffffff url(\'../images/background_textures/retina_wood.png\') )
$mastHeadBackground = '#ffffff url(\'../images/background_textures/random_grey_variations.png\')'; 

//Masthead Padding
$mastHeadPadding = '20px 0';

//Show Logo *****CREATE FUNCTION FOR THIS*********
$showMastHeadBrandLogo = true; //true or false

//Company Logo
$mastHeadBrandLogo = 'ocg_flex_logo.png';

//Align Logo to Link Container (Left, Center, Right)
$mastHeadBrandLogoAlign = 'center';







/* ------- N A V I G A T I O N ----------------*/

$useKickstartNav = false; // This is the main fallback navigation styled with Kickstart UIKit
$useUberMenu = true; // Set to 'true' if UberMenu Plugin is installed NOTE: Turn on 'Easy Integration' in the ubermenu admin panel under 'Theme Integration'


/* ------- C O N T E N T   C O N T A I N E R ----------------*/

//Content Container Border Size (Use CSS Padding Atts. eg '20px' or '0 20px')
$contentContainerBorderSize = '0px'; 

$contentContainerBorderColor = 'none';

$contentContainerBackground = 'none';


/* ------- F O O T E R ------------*/

$footerLayout = '2';

$footerBackgroundColor = 'blue'; //Masthead Background Color

$footerPadding = '10px';

/* ------- L A Y O U T   S E T T I N G S ----------------*/


require_once get_stylesheet_directory() . '/assets/less/less.php' ;

require_once get_template_directory() . '/ocgflex-core/functions/site_config_functions.php' ;










?>