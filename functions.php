<?php
// functions.php

function tema_dit_enqueue_styles() {
    // 1. Definisikan Handle (nama unik untuk style Anda)
    $handle = 'tailwind-css';
    
    // 2. Tentukan Lokasi File CSS hasil kompilasi
    $style_url = get_template_directory_uri() . '/src/output.css';
    
    // 3. Tentukan dependensi (tidak ada untuk Tailwind)
    $deps = array();
    
    // 4. Tentukan Versi (Penting untuk Cache!)
    // filemtime() memastikan versi CSS berubah setiap kali Anda mengompilasi ulang.
    $version = filemtime( get_template_directory() . '/src/output.css' );

    // Enqueue Stylesheet ke WordPress
    wp_enqueue_style( $handle, $style_url, $deps, $version );
}
// Kaitkan fungsi Anda ke hook WordPress
add_action( 'wp_enqueue_scripts', 'tema_dit_enqueue_styles' );

// ... (Kode functions.php lainnya)


?>