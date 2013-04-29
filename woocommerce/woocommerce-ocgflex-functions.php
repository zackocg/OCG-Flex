<?php

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section id="contentContainerBorder" class="grid">';
  echo '<div id="contentContainer">';
}

function my_theme_wrapper_end() {
  echo '</div>';
  echo '</section>';
}

add_theme_support( 'woocommerce' );

?>