<?php

// Enqueue styles and scripts for the custom theme
function ccscwtf_enqueue_styles() {
    // Enqueue the custom style.css
    wp_enqueue_style('ccscwtf-styles', get_template_directory_uri() . '/style.css');
    
    // Enqueue the custom script.js
    wp_enqueue_script('ccscwtf-scripts', get_template_directory_uri() . '/script.js', array(), null, true);
}

// Hook to enqueue scripts and styles into WordPress
add_action('wp_enqueue_scripts', 'ccscwtf_enqueue_styles');

?>

