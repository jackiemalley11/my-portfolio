<?php

function twentytwentytwo_child_enqueue_styles()
{
    wp_enqueue_style(
        'twentytwentytwo-style',
        get_template_directory_uri() . '/style.css'
    );
    
    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
        ['twentytwentytwo-style']
    );
}
add_action('wp_enqueue_scripts', 'twentytwentytwo_child_enqueue_styles');