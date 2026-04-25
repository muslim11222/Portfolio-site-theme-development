<?php 


function muslim_theme_styles() {

    // CSS
    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/css/style.css'
    );

    // Typed JS (must load first)
    wp_enqueue_script(
        'typed-js',
        'https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.js',
        array(),
        null,
        true
    );

    // Custom JS (depends on typed-js)
    wp_enqueue_script(
        'custom-js',
        get_template_directory_uri() . '/js/script.js',
        array('typed-js'), // 🔥 IMPORTANT FIX
        null,
        true
    );
}

add_action('wp_enqueue_scripts', 'muslim_theme_styles');