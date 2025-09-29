<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    

    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-[#212121] font-sans antialiased'); ?>>
    <nav class="bg-[#212121] text-white  shadow-lg">
        <div class="max-w-full px-5 py-3 lg:px-10 flex items-center justify-between">

            <!-- Logo -->
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Brand Logo" class="">
            </a>

            <!-- Navbar -->
            <div id="navbarNavAltMarkup" class="hidden lg:flex lg:w-full lg:justify-center">
                <div class="flex flex-col lg:flex-row lg:space-x-2 text-sm font-small">
                    <a class="px-3 py-2 rounded hover:bg-gray-700 transition" href="#">Assets</a>
                    <a class="px-3 py-2 rounded hover:bg-gray-700 transition" href="#">RenderPal</a>
                    <a class="px-3 py-2 rounded hover:bg-gray-700 transition" href="#">Tentang Kami</a>
                    <a class="px-3 py-2 rounded hover:bg-gray-700 transition" href="#">Hubungi Kami</a>

                    <!-- Login button (mobile) -->
                    <button class="block lg:hidden mt-2 border border-white text-white py-1 px-3 rounded hover:bg-white hover:text-black transition">
                        Login
                    </button>
                </div>
            </div>

            <!-- Right Side -->
            <div class="flex items-center space-x-3">
                <!-- Search -->
                <form class="flex items-center space-x-2 hidden md:flex">
                    <input
                        class="w-32 py-1 px-3 bg-gray-700 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition"
                        type="search" placeholder="Search" aria-label="Search">
                    <i class="fas fa-search text-gray-400"></i>
                </form>

                <!-- Toggle button (mobile) -->
                <button class="block lg:hidden text-white hover:text-gray-400 transition" type="button"
                    onclick="document.getElementById('navbarNavAltMarkup').classList.toggle('hidden');">
                    <i class="fas fa-bars text-xl"></i>
                </button>

                <!-- Login button (desktop) -->
                <a href="<?php echo site_url('/login/sign-in.php'); ?>">
                    <button
                        class="hidden lg:block border border-white text-white py-1 px-4 rounded hover:bg-white hover:text-black transition">
                        Login
                    </button>
                </a>
            </div>
        </div>
    </nav>

    <?php wp_footer(); ?>
</body>
</html>
