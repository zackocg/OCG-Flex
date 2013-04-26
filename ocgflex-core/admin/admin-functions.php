<?php
/** Step 2 (from text above). */
add_action( 'admin_menu', 'ocg_flex_admin_menu' );



/** Step 1. */
function ocg_flex_admin_menu() {
	add_options_page( 'My Plugin Options', 'My Plugin', 'manage_options', 'my-unique-identifier', 'my_plugin_options' );
	
	
	add_menu_page( "OCG ))Flex((", "OCG ))FLEX((", "manage_options", "ocg-flex-admin", "my_plugin_options", "null", "3" );
	
	add_submenu_page( "ocg-flex-admin", "General Options", "General Options", "manage_options", "ocg-flex-admin-general", "my_plugin_options");
	
	
	
}

/** Step 3. */
function my_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<p>Here is where the form would go if I actually had options.</p>';
	echo '</div>';
}




?>