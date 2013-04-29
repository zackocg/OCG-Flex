<?php

$args_footer_area_1 = array(
	'name'          => sprintf( __( 'Footer Area 1' ), $i ),
	'id'            => "footer-area-1",
	'description'   => '',
	'class'         => '',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => "</h2>",
);

$args_footer_area_2 = array(
	'name'          => sprintf( __( 'Footer Area 2' ), $i ),
	'id'            => "footer-area-2",
	'description'   => '',
	'class'         => '',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => "</h2>",
);

$args_footer_area_3 = array(
	'name'          => sprintf( __( 'Footer Area 3' ), $i ),
	'id'            => "footer-area-3",
	'description'   => '',
	'class'         => '',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => "</h2>",
);

$args_footer_area_4 = array(
	'name'          => sprintf( __( 'Footer Area 4' ), $i ),
	'id'            => "footer-area-4",
	'description'   => '',
	'class'         => '',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => "</h2>",
);

$args_footer_area_5 = array(
	'name'          => sprintf( __( 'Footer Area 5' ), $i ),
	'id'            => "footer-area-5",
	'description'   => '',
	'class'         => '',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => "</h2>",
);

$args_footer_area_6 = array(
	'name'          => sprintf( __( 'Footer Area 6' ), $i ),
	'id'            => "footer-area-6",
	'description'   => '',
	'class'         => '',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => "</h2>",
);

//Register Footer Widget Area Left
register_sidebar( $args_footer_area_1 );

//Register Footer Widget Area Center
register_sidebar( $args_footer_area_2 );

//Register Footer Widget Area Right
register_sidebar( $args_footer_area_3 );

//Register Footer Widget Area Right
register_sidebar( $args_footer_area_4 );

//Register Footer Widget Area Right
register_sidebar( $args_footer_area_5 );

//Register Footer Widget Area Right
register_sidebar( $args_footer_area_6 );

?>