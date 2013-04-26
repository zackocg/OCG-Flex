<?php

$args_masthead_widget_area = array(
	'name'          => sprintf( __( 'Mast Head Widget Area' ), $i ),
	'id'            => "masthead-widget-area",
	'description'   => '',
	'class'         => '',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => "</h2>n",
);

//Register Primary Sidebar
register_sidebar( $args_masthead_widget_area );

?>