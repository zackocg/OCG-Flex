<?php
/*
------------------------------------------------------
O C G - F L E X    S I T E   C O N F I G U R A T I O N
------------------------------------------------------

In order for the following variables to work, 
set $dev to "true", to turn on developer mode.
*/


/* ------------------------------------
	D E V E L O P M E N T    M O D E   (LESS)
---------------------------------------*/
$dev = true; //Set to compile less files into master_style.css
$cssminify = false; // Set to true is CSS should be minified during compile.
/* ------------------------------------*/

/* ------- L A Y O U T ----------------*/
$boxedLayout = false; //Set if site requires boxed layout look, this will put everthing into a grid.
$mastHeadInGrid = true; //Set if you want the header inside a grid that is centered.
$navInGrid = false; //Set if you want the navigation inside a grid that is centered.
$bodyInGrid = true; //Set if you want the loop body inside a grid that is centered.
$footerInGrid = true; //Set if you want the footer inside a grid that is centered.

/* ------- N A V I G A T I O N ----------------*/

$useKickstartNav = true; // This is the main fallback navigation styled with Kickstart UIKit
$useUberMenu = false; // Set to 'true' if UberMenu Plugin is installed NOTE: Turn on "Easy Integration" in the ubermenu admin panel under "Theme Integration"

/* ------- G R I D   W I D T H ----------------*/
//Max Grid Width
$maxGridWidth = "960px"; //Max Width of the Grid.


/* ------- P A D D I N G ----------------*/

//Inner Padding of Main Container
$bodyContentContainerPadding = "0px";

//Grid Padding
$GridPadding = "10px";

//Grid-Flex Padding
$GridFlexPadding = "0";



/* ------- M A R G I N S ----------------*/

//Set Body Content Container Margin
$bodyContentContainerMargin = "0 auto"; // (top, right, bottom, left) for center page (0 auto)

//Set Body Content Container Margin for Mobile (Max Width 480px)
$bodyContentContainerMarginMobile = "0";

/*---------B R A N D I N G------------*/

$mastheadBrandLogo = "/assets/images/ocgflex-logo.png";


/* ------- C O L O R S ----------------*/

//Body Background Color (Boxed Layout Visible)
$bodyBackgroundColor = '#666666';

$mastHeadBackgroundColor = "blue"; //Masthead Background Color
$mastHeadBackgroundImage = "none"; //Masthead Background Image

$footerBackgroundColor = "blue"; //Masthead Background Color


/* ------- T Y P O G R A P H Y ----------------*/
$H1_size = "";
$H2_size = "";
$H3_size = "";
$H4_size = "";
$H5_size = "";
$H6_size = "";


/* ------- B A C K G R O U N D   I M A G E S ------------*/



/* ------- L A Y O U T   S E T T I N G S ----------------*/


require_once locate_template( '/assets/less/less.php' );

function boxedLayout() {
global $boxedLayout;

if ($boxedLayout == true) {
	echo "grid";
} elseif ($boxedLayout == false) {
	echo "grid flex";
}

}

function mastHeadInGrid() {
	global $mastHeadInGrid;
	
	if ($mastHeadInGrid == true) {
		echo "grid";
	} elseif ($mastHeadInGrid == false) {
		echo "grid flex";
	}
	
}

function navInGrid() {
	global $navInGrid;
	
	if ($navInGrid == true) {
		return "grid";
	} elseif ($navInGrid == false) {
		return "grid flex";
	}
	
}

function bodyInGrid() {
	global $bodyInGrid;
	
	if ($bodyInGrid == true) {
		echo "grid";
	} elseif ($bodyInGrid == false) {
		echo "grid flex";
	}
	
}

function footerInGrid() {
	global $footerInGrid;
	
	if ($footerInGrid == true) {
		echo "grid";
	} elseif ($footerInGrid == false) {
		echo "grid flex";
	}
	
}

function useKickstartNav() {
	global $useKickstartNav;
	if ($useKickstartNav == true) {
		echo '<nav class="'.navInGrid().'">';
	    wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'my_extra_menu_class' ) );
	    echo '</nav><div class="clearfix"></div>';
	} elseif ($useKickstartNav == false) {
		
	}
}

function useUberMenu() {
	global $useUberMenu;
	if ($useUberMenu == true) {
		echo '<nav class="'.navInGrid().'">';
	       uberMenu_easyIntegrate();
	    echo '</nav><div class="clearfix"></div>';
	} elseif ($useUberMenu == false) {
		
	}
}










?>