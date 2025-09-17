    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
		
		<style> a {
                text-decoration: none;
            }

            .brand {
                color: #2E2E2E;
                font-size: 32px;
                font-family: Poppins;
                font-style: bold;
                font-weight: 700;
                word-wrap: break-word;

            }

            .menu {
                color: #2E2E2E;
                font-size: 20px;
                font-family: Poppins;
                font-weight: 500;
                line-height: 24px;
                letter-spacing: 0.40px;
                word-wrap: break-word;
            }

            .gray {
                background-color: rgb(231, 231, 231);
            }


            .text-xs {
                font-size: 0.8rem;
                /* bisa disesuaikan */
            }

            .bor {
                border-radius: 25px;
            }</style>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid px-5">
                <!-- Brand -->
                <a class="navbar-brand brand" href="#">PASAR3D</a>

                <!-- Burger -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menu -->
                <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active menu" aria-current="page" href="#">Explore</a>
                        <a class="nav-link menu" href="#">RenderPal</a>
                        <a class="nav-link menu" href="#">Community</a>
                        <a class="nav-link menu" href="#">About Us</a>
                        <button class="btn btn-outline-dark d-lg-none">Login</button>
                    </div>
                </div>
                <a href="<?php echo site_url('/login'); ?>" class="btn"><button class="btn btn-outline-dark justify-content-end d-none d-lg-block">Login</button></a>
                

            </div>
        </nav>



    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    </html>