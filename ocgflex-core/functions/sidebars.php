<?php

$args_primary = array(
	'name'          => sprintf( __( 'Primary Sidebar' ), $i ),
	'id'            => "primary-sidebar",
	'description'   => '',
	'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => "</li>n",
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => "</h2>n",
);

$args_secondary = array(
	'name'          => sprintf( __( 'Secondary Sidebar' ), $i ),
	'id'            => "secondary-sidebar",
	'description'   => '',
	'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => "</li>n",
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => "</h2>n",
);

//Register Primary Sidebar
register_sidebar( $args_primary );

//Register Secondary Sidebar
register_sidebar( $args_secondary );

?>