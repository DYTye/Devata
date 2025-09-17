<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign-in</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="asstes/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<?php
	/*
	 Template Name: Sign-in page
	 * */
	?>
	
<body class="d-flex justify-content-center align-items-center vh-100">
<div class="row w-100 justify-content-center">
  <div class=" col-12 col-md-6 col-lg-5">
      <div class="card pb-4 px-5 d-flex justify-content-center">
        <div class="text-center py-5">
          <h1>Sign Up Free</h1>
          <p>14 day free access to unlimited resources </p>
        </div>
        <div class="row">
          <div class="col col-6 col-md-6 col-lg-6">
            <div class="mb-2">
              <label for="firsname" class="form-label" id="first Name">First Name</label>
              <input type="text" class="form-control gray " id="first Name" placeholder="insert your First Name">
            </div>
          </div>
          <div class="col col-6 col-md-6 col-lg-6">
            <div class="mb-2">
              <label for="lastname" class="form-label" id="lastname">Last Name</label>
              <input type="text" class="form-control gray " id="lastname" placeholder="insert your Last Name">
            </div>
          </div>
        </div>
        <div class="mb-2">
          <label for="email" class="form-label" id="email">Email</label>
          <input type="text" class="form-control gray " id="email" placeholder="insert your email">
        </div>
        <div class="mb-2">
          <label for="password" class="form-label">Password</label>
          <input type="password" id="password" class="form-control gray" aria-describedby="passwordHelpBlock"
            placeholder="insert your password">
          <div id="passwordHelpBlock" class="form-text">
            It must be a combination of minimum 8 letters, numbers, and symbols.
          </div>
        </div>
        <div class="row d-flex justify-content-center mb-2">
          <div class="col-12 d-flex justify-content-center">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="rememberme" name="rememberme">
              <label class="form-check-label" for="rememberme">
                Remember me
              </label>
            </div>
          </div>
        </div>

        <div class="m2-4 d-grid gap-2">
          <button class="btn btn-dark text-light"> <a href="" class="text-light">Sign-in</a></button></a>
        </div>

        <hr class="border border-dark border-1 opacity-10">

        <p class="text-center">Or log in with:</p>

        <div class="row">
          <div class="col col-12 col-md-6 col-lg-4 mb-3">
            <div class="btn btn-outline-dark w-100">
              <div class="row w-100">
                <div class="col-3"><i class="fa-brands fa-google"></i></div>
                <div class="col-9">Google</div>
              </div>
            </div>
          </div>
          <div class="col col-12 col-md-6 col-lg-4 mb-3">
            <div class="btn btn-outline-dark w-100">
              <div class="row w-100">
                <div class="col-3"><i class="fa-brands fa-apple"></i></div>
                <div class="col-9">Apple</div>
              </div>
            </div>
          </div>
          <div class="col col-12 col-md-6 col-lg-4 mb-3">
            <div class="btn btn-outline-dark w-100">
              <div class="row w-100">
                <div class="col-3 text-center"><i class="fa-brands fa-twitter"></i></div>
                <div class="col-9">Twitter</div>
              </div>
            </div>
          </div>

        </div>
        <hr class="border border-dark border-1 opacity-10">

        <p class="text-center">Alredy have a account? <a href="<?php echo site_url("/login");?>">Log in</a></p>



      </div>
    </div>
  </div>

</body>

</html>