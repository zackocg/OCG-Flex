<?php


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