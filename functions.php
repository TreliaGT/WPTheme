<?php


/** Menus */
function register_my_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' ),
            'secondary-menu' => __( 'Secondary Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

/** Adding scripts */
function enqueue_custom_scripts() {
    wp_enqueue_style(
        'main-styles', // Handle name for the stylesheet
        get_stylesheet_uri(), // Automatically points to style.css
        array(), // Dependencies (if any)
        null // Version (null for no version)
    );


    // Enqueue Lucide script
    wp_enqueue_script(
        'lucide-script', // Handle name for the script
        'https://unpkg.com/lucide@latest', // Script URL
        array(), // Dependencies (if any)
        null, // Version (null for no version)
        true // Load in footer
    );

    // Enqueue custom.js
    wp_enqueue_script(
        'custom-js', // Handle name for the custom script
        get_template_directory_uri() . '/js/custom.js', // Path to your custom.js file
        array(), // Dependencies (if any)
        null, // Version (null for no version)
        true // Load in footer
    );
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');



/** Import PHP Files */
$includes_dir = get_template_directory() . '/functions';

// Include additional PHP files
require $includes_dir . '/addition_fields.php';
require $includes_dir . '/post_type.php';