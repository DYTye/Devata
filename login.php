<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<?php
/*
Template Name: Login Page
*/

/*
cek akun kalau kirim pesan eror kalau belum verifikasi, jika sudah verifikasi lanjut login
*/
if ($_POST) {
    $creds = array();
    $creds['user_login'] = $_POST['email'];
    $creds['user_password'] = $_POST['password'];
    $creds['remember'] = true;
    $user = wp_signon($creds, false);

    if (!is_wp_error($user)) {
        $is_verify = get_user_meta($user->ID, 'is_verify', true);
        if ($is_verify == 0) {
            $email = urldecode($_POST['email']);
            wp_redirect(site_url('/resend') . '?email=' . urlencode($email));
            exit;
        } else {
            if (is_wp_error($user)) {
                $error_message = $user->get_error_message();
            } else {
                wp_redirect(home_url());
                exit;
            }
        }
    }

        
}  
$resend_success = isset($_GET['success']) ? sanitize_text_field($_GET['success']) : ''; 
/*
Ketika login kalau akun belum verifikasi, suruh verifikasi
hapus token lama, generate token baru dan kirim email, jika verivikasi sudah oke lanjut login
*/

?>


<body class="d-flex justify-content-center align-items-center vh-100">


    <div class="row w-100 justify-content-center">
        <div class="col col-12 col-md-6 col-lg-5">
            <div class="card pb-4 px-5">
                <div class="text-center py-5">
                    <h1>Welcome Back</h1>
                    <p>Please log in to continue</p>
                    <?php if (!empty($error_message)): ?>
                        <div class="alert alert-danger text-center">
                            <?php echo $error_message; ?>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($resend_success)){
                            echo '<div class="alert alert-success">'.$resend_success.'</div>';
                    }
                    ?>
                </div>
                
                <form action="" method="post">
                    <div class="mb-2">
                        <label for="email" class="form-label" id="email">Email</label>
                        <input type="text" class="form-control gray " id="email" name="email"
                            placeholder="insert your email">
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" class="form-control gray"
                            aria-describedby="passwordHelpBlock" placeholder="insert your password" name="password">
                        <div id="passwordHelpBlock" class="form-text">
                            It must be a combination of minimum 8 letters, numbers, and symbols.
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col col-6 col-md-6 col-lg-6 d-flex  align-items-center">
                            <input type="checkbox" class="form-check" id="rememberme" name="rememberme">
                            <label for="rememberme">Remember me</label>
                        </div>
                        <div class="col col-6 col-md-6 col-lg-6 d-felx text-end align-items-center">
                            <a href="">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="m2-4 d-grid gap-2">
                        <button class="btn btn-dark text-light" type="submit">Log in</button>
                    </div>

                    <hr class="border border-dark border-1 opacity-10">

                    <p class="text-center">Or log in with:</p>

                    <div class="row">
                        <div class="col col-12 col-md-6 col-lg-4 mb-4">
                            <div class="btn btn-outline-dark w-100">
                                <div class="row w-100">
                                    <div class="col-3"><i class="fa-brands fa-google"></i></div>
                                    <div class="col-9">Google</div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-4 mb-4">
                            <div class="btn btn-outline-dark w-100">
                                <div class="row w-100">
                                    <div class="col-3"><i class="fa-brands fa-apple"></i></div>
                                    <div class="col-9">Apple</div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-4 mb-4">
                            <div class="btn btn-outline-dark w-100">
                                <div class="row w-100">
                                    <div class="col-3 text-center"><i class="fa-brands fa-twitter"></i></div>
                                    <div class="col-9">Twitter</div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <hr class="border border-dark border-1 opacity-10">

                    <p class="text-center">
                        No account yet? <a href="<?php echo site_url('/sign-in'); ?>">Sign Up</a></p>
                </form>




            </div>
        </div>
    </div>


</body>

</html>