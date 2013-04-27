<?php

$args_footer_area_left = array(
	'name'          => sprintf( __( 'Footer Left' ), $i ),
	'id'            => "footer-area-left",
	'description'   => '',
	'class'         => '',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => "</h2>",
);

$args_footer_area_center = array(
	'name'          => sprintf( __( 'Footer Center' ), $i ),
	'id'            => "footer-area-center",
	'description'   => '',
	'class'         => '',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => "</h2>",
);

$args_footer_area_right = array(
	'name'          => sprintf( __( 'Footer Right' ), $i ),
	'id'            => "footer-area-right",
	'description'   => '',
	'class'         => '',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => "</h2>",
);

//Register Footer Widget Area Left
register_sidebar( $args_footer_area_left );

//Register Footer Widget Area Center
register_sidebar( $args_footer_area_center );

//Register Footer Widget Area Right
register_sidebar( $args_footer_area_right );

?>