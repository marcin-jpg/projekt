<?php

function aiagents_enqueue_assets() {
    wp_enqueue_style(
        'aiagents-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'aiagents_enqueue_assets');
