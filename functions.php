<?php
function Devata_assets() {
    // Style bawaan tema
    wp_enqueue_style('tema-style', get_stylesheet_uri());

    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',
        array(),
        '5.3.2'
    );

    // Font Awesome 6
    wp_enqueue_style(
        'fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
        array(),
        '6.5.1'
    );

    // Bootstrap JS
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',
        array('jquery'),
        '5.3.2',
        true
    );

    // Custom CSS dengan cache-busting
    $custom_css_path = get_template_directory() . '/assets/style.css';
    if (file_exists($custom_css_path)) {
        wp_enqueue_style(
            'tema-custom',
            get_template_directory_uri() . '/assets/style.css',
            array(),
            filemtime($custom_css_path) // biar cache auto refresh tiap file diubah
        );
    }
}
add_action('wp_enqueue_scripts', 'Devata_assets');
