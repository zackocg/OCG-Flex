<?php

require_once 'masthead_layouts.php';
require_once 'footer_layouts.php';


function showNavigationTopFixed() {
	global $navPositionAroundMasthead;
	if ($navPositionAroundMasthead == '2') {
		echo '<div class="fixed_navigation">';
		useKickstartNav();
		useUberMenu();
		echo '<span style="text-indent:-9999px;">.</span>';
		echo '</div>';
	} else {
		
	}
}

global $stickyNav;
if ($stickyNav == true) {
	$stickyNavFixed = "fixed";
} elseif ($stickyNav == false) {
	$stickyNavFixed = "none";
}

function showNavigationTop() {
	global $navPositionAroundMasthead;
	if ($navPositionAroundMasthead == '0') {
		useKickstartNav();
		useUberMenu();
	} else {
		
	}
}

function showNavigationBottom() {
	global $navPositionAroundMasthead;
	if ($navPositionAroundMasthead == '1') {
		useKickstartNav();
		useUberMenu();
	} else {
		
	}
}


function showBrandLogo() {
	global $showMastHeadBrandLogo;
	if ($showMastHeadBrandLogo == true) {
		echo "masthead-branding-logo";
	} elseif ($showMastHeadBrandLogo == false) {
		echo "masthead-branding-link";
	}
}


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

function contentContainerInGrid() {
	global $contentContainerInGrid;
	
	if ($contentContainerInGrid == true) {
		echo "grid";
	} elseif ($contentContainerInGrid == false) {
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