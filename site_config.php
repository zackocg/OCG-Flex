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
$maxGridWidth1024 = '960px';

//RESPONSIVE - Max Grid Width > 480px - 768px
$maxGridWidth768 = '700px';

//RESPONSIVE - Max Grid Width > 480px
$maxGridWidth480 = '100%';


/* ------- B O X E D   L A Y O U T ----------------*/

//Set if site requires boxed layout look, this will put everthing into a grid.
$boxedLayout = false;

//This will only show when Boxed Layout Is Turned On (true)
//EX: #ffffff url(\'../images/background_textures/escheresque_ste.png\') fixed
$bodyBackground = 'none';

/* ------- G R I D   S E T T I N G S ----------------*/

//Grid Padding Global Setting
$GridPadding = '0px';

//Grid-Flex Padding Global Setting
$GridFlexPadding = '0px';





/* ------- P R I M A R Y   C O N T A I N E R ----------------*/

//Primary Container Border Size (Use CSS Padding Atts. eg '20px' or '0 20px')
$primaryContainerBorderSize = '0px'; 

//Primary Container Border Color (HEX, RGB, RGBA, and URL for images)
$primaryContainerBorderColor = 'rgba(255,255,255,.5)';

//Set Corner Radius for Boxed Layout Primary Container
$primaryContainerBorder_RoundedCorners_topLeft = '5px'; 
$primaryContainerBorder_RoundedCorners_topRight = '5px';
$primaryContainerBorder_RoundedCorners_bottomLeft = '5px';
$primaryContainerBorder_RoundedCorners_bottomRight = '5px';

// Primary Container Background ( #ffffff url(\'../images/background_textures/retina_wood.png\') )
$primaryContainerBackground = '#FFFFFF';


//Boxed Layout Shadow ( 2px 2px 10px 1px rgba(0, 0, 0, .3) )
$primaryContainerBoxShadow = '2px 2px 10px 1px rgba(0, 0, 0, .3)';

//Set Corner Radius for Boxed Layout Primary Container
$primaryContainer_RoundedCorners_topLeft = '5px'; 
$primaryContainer_RoundedCorners_topRight = '5px';
$primaryContainer_RoundedCorners_bottomLeft = '5px';
$primaryContainer_RoundedCorners_bottomRight = '5px';

//Inner Padding of Main Container
$primaryContainerPadding = '0px';

//Set Body Content Container Margin
$primaryContainerMarginTop = '0px';
$primaryContainerMarginBottom = '0px';
$primaryContainerMarginLeft = 'auto'; //set to auto for centering
$primaryContainerMarginRight = 'auto'; //set to auto for centering


//Set Body Content Container Margin for Mobile (Max Width 480px)
$primaryContainerMarginMobile = '15px 15px';


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

$mastHeadInGrid = true; //Set if you want the header inside a grid that is centered.

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
$mastHeadLayout = '3';

//Masthead Background ( #ffffff url(\'../images/background_textures/retina_wood.png\') )
$mastHeadBackground = '#ffffff'; 

//Masthead Padding
$mastHeadPadding = '20px 0 0 0';

//Show Logo
$showMastHeadBrandLogo = true; //true or false

//Company Logo
$mastHeadBrandLogo = 'ocg_flex_logo.png';

//Align Logo to Link Container (Left, Center, Right)
$mastHeadBrandLogoAlign = 'left';




/* ------- N A V I G A T I O N ----------------*/

/*
Navigation Above or Below Mast Head Container
0 - Above
1 - Below
2 - Fixed to Top ( Set $stickyNav below to "true" )
*/
$navPositionAroundMasthead = '1';


$navInGrid = false; //Set if you want the navigation inside a grid that is centered.

$stickyNav = false; //Fix Header to Top of Page
$stickyNavPrimaryContainerMarginTop = "null"; //When Menu is Fixed, Push Primary Content Container Down So It Doesn't 


$useKickstartNav = false; // This is the main fallback navigation styled with Kickstart UIKit
$useUberMenu = true; // Set to 'true' if UberMenu Plugin is installed NOTE: Turn on 'Easy Integration' in the ubermenu admin panel under 'Theme Integration'

$navBaseBackgroundColor = 'black';
$navGradientColorTop = '#FFFFFF';
$navGradientColorBottom = '#EFEFEF';


/* ------- C O N T E N T   C O N T A I N E R ----------------*/

$contentContainerInGrid = true; //Set if you want the loop body inside a grid that is centered.

//Content Container Border Size (Use CSS Padding Atts. eg '20px' or '0 20px')
$contentContainerBorderSize = '0px'; 

$contentContainerBorderColor = 'none';

$contentContainerBackground = 'white';

$contentContainerPadding = '';


/* ------- F O O T E R ------------*/

$footerInGrid = true; //Set if you want the footer inside a grid that is centered.

/*
Footer Layouts
0 - Custom Layout, Code is in /content/custom_sections/cusom_footer.php
1 - 1 Column, Footer Area 1 Col 12
2 - 2 Columns, Footer Area 1 Col 9, Footer Area 2 Col 3
3 - 2 Columns, Footer Area 1 Col 8, Footer Area 2 Col 4
4 - 2 Columns, Footer Area 1 Col 7, Footer Area 2 Col 5
5 - 2 Columns, Footer Area 1 Col 6, Footer Area 2 Col 6
6 - 2 Columns, Footer Area 1 Col 5, Footer Area 2 Col 7
7 - 2 Columns, Footer Area 1 Col 4, Footer Area 2 Col 8
8 - 2 Columns, Footer Area 1 Col 3, Footer Area 2 Col 9
9 - 3 Columns, Footer Area 1 Col 4, Footer Area 2 Col 4, Footer Area 3 Col 4
10 - 4 Columns, Footer Area 1 Col 3, Footer Area 2 Col 3, Footer Area 3 Col 3
11 - 6 Columns, Footer Area 1 Col 2, Footer Area 2 Col 2, Footer Area 3 Col 2, Footer Area 4 Col 2, Footer Area 5 Col 2, Footer Area 6 Col 2

*/

$footerLayout = '9';

//Footer Background
$footerBackground = '#999999';

$footerPadding = '20px 0';


/* ------- W O O C O M M E R C E ------------*/


//Pass These Varibles to Less Compiler and Layout Function Handler.
require_once get_template_directory() . '/ocgflex-core/functions/site_config_functions.php' ;
require_once get_stylesheet_directory() . '/assets/less/less.php' ;


?>