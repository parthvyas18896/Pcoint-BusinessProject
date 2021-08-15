<?php 
/**
 * Enqueue scripts and styles
 */
function your_theme_enqueue_scripts() {
    // all styles
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'theme-style', '/css/style.css' );
    // all scripts
    wp_enqueue_script( 'bootstrap', '/js/bootstrap.min.js', array('jquery') );
    wp_enqueue_script( 'theme-script', '/js/scripts.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'your_theme_enqueue_scripts' );
