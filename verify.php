<?php
/*
 Template Name: Verify page
 * */

$user_id   = intval($_GET['user']);
$token_url = sanitize_text_field($_GET['verify']);

// ambil token dari db
$token_db = get_user_meta($user_id, 'verify_id', true);

if ($token_db === $token_url) {
    // update is_verified jadi 1
    update_user_meta($user_id, 'is_verify', 1);

    // optional: hapus token biar ga bisa dipake ulang
    delete_user_meta($user_id, 'verify_id');

    echo "Verifikasi berhasil!";
} else {
    echo "<h2>Link verifikasi tidak valid atau sudah digunakan</h2>";
}

?>