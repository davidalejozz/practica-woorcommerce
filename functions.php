<?php

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
   add_theme_support( 'woocommerce' );
}
//Compatibilidad con galerías a partir de WooCommerce 3.0>
add_action( 'after_setup_theme', 'yourtheme_setup' );
function yourtheme_setup() {
add_theme_support( 'wc-product-gallery-slider' );
}
/**