<?php
/*
 Template Name: Resend Email page
 * */


 
$email = isset($_GET['email']) ? sanitize_email($_GET['email']) : '';
$user_id = get_user_by('email', $email);
$token = wp_generate_password(10, false);
update_user_meta($user_id,'verify_id',$token);

$verify_link = add_query_arg([
    'verify' => $token,
    'user' => $user_id
], site_url('/verify'));


$resend_success = 'Verification email sent, check your email to verify your account';

$headers = ['Content-Type: text/html; charset=UTF-8'];
wp_mail(
    $email,
    'Verify Your Account',
    'Click the following link to verify your account: <a href="'. esc_url($verify_link) .'">Verify Now</a>',
    $headers
);

$success = 'Verification email sent, check your email to verify your account';
wp_redirect(site_url(('/login')) . '?success=' . urlencode($success));
exit;
?>