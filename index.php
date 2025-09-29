<?php
// Panggil header.php (di mana CSS Tailwind sudah di-enqueue melalui wp_head())
get_header();
?>

<main class="max-w-6xl mx-auto my-12 text-white">

    <!-- hero section -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 items-center">
        <div class="mx-6">
            <h1 class="text-5xl md:text-5xl lg:text-7xl font-bold mb-8">Solusi Jual Beli Aset 3D & Render</h1>
            <p class="text-lg font-light md:text-xl lg:text-2xl">Jual, beli, dan temukan aset 3D sesuai kebutuhan Anda.
                layanan
                renderpal Pasar3D untuk menyelesaikan
                rendering dengan efisien. Solusi praktis bagi kreator 3D!</p>
            <div class="my-6">
                <div class="grid grid-cols-1 grid-cols-2 md:grid-cols-2 lg:grid-cols-2">
                    <div>
                        <a href=""
                            class="relative py-4 mr-2 flex w-full items-center justify-center overflow-hidden rounded-xl">

                            <div
                                class="absolute inset-0 bg-gradient-to-r from-[#8000FF] to-[#FF007F] transition-opacity duration-300 hover:opacity-10">
                            </div>

                            <span class="relative text-lg font-semibold text-white"> Cari Asset </span>
                        </a>

                        <div class="font-semibold text-3xl ms-2">
                            <h3 class="pt-6">240K+</h3>
                            <h3>Total Asset</h3>
                        </div>

                    </div>
                    <div>
                        <a href="" class="relative block ml-4 w-full py-4 items-center flex justify-center">
                            <div class="absolute inset-0  rounded-xl bg-gradient-to-r from-[#8000FF] to-[#FF007F]">
                            </div>

                            <div class="absolute inset-[2px]  rounded-xl bg-[#212121] transition hover:opacity-10">
                            </div>

                            <span class=" relative text-lg font-semibold ">Mulai Render</span>
                        </a>
                        <div class="font-semibold text-3xl ms-2">
                            <h3 class="pt-6">120K+</h3>
                            <h3>Kreator</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="w-full mx-auto bg-black rounded-2xl shadow-lg overflow-hidden my-10">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/home.png" alt=""
                    class="w-full h-120 object-cover rounded-t-2xl">
            </div>

            <div class="py-3  bg-[#2E2E2E] px-6 w-full rounded-b-lg">
                <h1 class="text-3xl font-bold mb-3">Steampunk Girl</h1>
                <div class="flex justify-start">
                    <img src="https://placehold.co/30x30" alt="" class="mr-3 rounded-full">
                    <p>Aditya Arrofi</p>
                </div>
            </div>
        </div>
    </div>

    <!-- asset section -->

    <div class="mt-20">
        <div class="my-6">
            <h3 class="font-bold text-3xl">Asset Yang Sedang Tren</h3>
            <p class="font-light">Lihatlah koleksi tren mingguan kami yang diperbarui.</p>
        </div>
    </div>


    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-6">
        <div class="bg-[#2E2E2E] p-4 rounded-2xl">
            <div class=""><img src="<?php echo get_template_directory_uri(); ?>/img/home.png"
                    class="w-full object-cover rounded-2xl h-100" alt="">
            </div>
            <div class="grid grid-cols-3 gap-2 mt-4">
                <div class="">
                    <img src="https://placehold.co/200x200" class="w-full object-cover rounded-xl h-25"
                        alt="Thumbnail 1">
                </div>
                <div class="">
                    <img src="https://placehold.co/200x200" class="w-full object-cover rounded-xl h-25"
                        alt="Thumbnail 1">
                </div>
                <div class="">
                    <img src="https://placehold.co/200x200" class="w-full object-cover rounded-xl h-25"
                        alt="Thumbnail 1">
                </div>

            </div>
            <div class="font-bold mt-4 ms-1">Steampunk Girl</div>
            <div class="mt-4 bg-[#212121] grid-cols-2 p-2 flex text-sm rounded-full">
                <img src="https://placehold.co/30x30" alt="" class="mr-3 rounded-4xl">
                <div class="flex items-center">Aditya Arrofi</div>
            </div>
        </div>

        <div class="bg-[#2E2E2E] p-4 rounded-2xl">
            <div class=""><img src="<?php echo get_template_directory_uri(); ?>/img/home.png"
                    class="w-full object-cover rounded-2xl h-100" alt="">
            </div>
            <div class="grid grid-cols-3 gap-2 mt-4">
                <div class="">
                    <img src="https://placehold.co/200x200" class="w-full object-cover rounded-xl h-25"
                        alt="Thumbnail 1">
                </div>
                <div class="">
                    <img src="https://placehold.co/200x200" class="w-full object-cover rounded-xl h-25"
                        alt="Thumbnail 1">
                </div>
                <div class="">
                    <img src="https://placehold.co/200x200" class="w-full object-cover rounded-xl h-25"
                        alt="Thumbnail 1">
                </div>

            </div>
            <div class="font-bold mt-4 ms-1">Steampunk Girl</div>
            <div class="mt-4 bg-[#212121] grid-cols-2 p-2 flex text-sm rounded-full">
                <img src="https://placehold.co/30x30" alt="" class="mr-3 rounded-4xl">
                <div class="flex items-center">Aditya Arrofi</div>
            </div>
        </div>

        <div class="bg-[#2E2E2E] p-4 rounded-2xl">
            <div class=""><img src="<?php echo get_template_directory_uri(); ?>/img/home.png"
                    class="w-full object-cover rounded-2xl h-100" alt="">
            </div>
            <div class="grid grid-cols-3 gap-2 mt-4">
                <div class="">
                    <img src="https://placehold.co/200x200" class="w-full object-cover rounded-xl h-25"
                        alt="Thumbnail 1">
                </div>
                <div class="">
                    <img src="https://placehold.co/200x200" class="w-full object-cover rounded-xl h-25"
                        alt="Thumbnail 1">
                </div>
                <div class="">
                    <img src="https://placehold.co/200x200" class="w-full object-cover rounded-xl h-25"
                        alt="Thumbnail 1">
                </div>

            </div>
            <div class="font-bold mt-4 ms-1">Steampunk Girl</div>
            <div class="mt-4 bg-[#212121] grid-cols-2 p-2 flex text-sm rounded-full">
                <img src="https://placehold.co/30x30" alt="" class="mr-3 rounded-4xl">
                <div class="flex items-center">Aditya Arrofi</div>
            </div>
        </div>

    </div>

    <!-- kreator section -->

    <div class="mt-20">
        <div class="my-6">
            <h3 class="font-bold text-3xl">Kreator Teratas</h3>
            <p class="font-light">Lihat Kreator Berperingkat Teratas di Marketplace</p>
        </div>
    </div>

    <div class="grid grid-cols-3 gap-6">
        <div class="rounded-xl bg-[#2E2E2E]">
            <div class="flex justify-center">
                <div class="m-5">
                    <img src="https://placehold.co/100x100" alt="" class="rounded-full" />
                </div>
            </div>

            <div class="flex justify-center font-semibold">Kreator</div>
            <div class="flex justify-between p-4">
                <div class="ms-2 font-light">produk :</div>
                <div class="me-2 font-light">200</div>
            </div>
        </div>

        <div class="rounded-xl bg-[#2E2E2E]">
            <div class="flex justify-center">
                <div class="m-5">
                    <img src="https://placehold.co/100x100" alt="" class="rounded-full" />
                </div>
            </div>

            <div class="flex justify-center font-semibold">Kreator</div>
            <div class="flex justify-between p-4">
                <div class="ms-2 font-light">produk :</div>
                <div class="me-2 font-light">200</div>
            </div>
        </div>

        <div class="rounded-xl bg-[#2E2E2E]">
            <div class="flex justify-center">
                <div class="m-5">
                    <img src="https://placehold.co/100x100" alt="" class="rounded-full" />
                </div>
            </div>

            <div class="flex justify-center font-semibold">Kreator</div>
            <div class="flex justify-between p-4">
                <div class="ms-2 font-light">produk :</div>
                <div class="me-2 font-light">200</div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-5 gap-3 mt-5">
        <div class="rounded-xl bg-[#2E2E2E]">
            <div class="flex justify-center">
                <div class="m-5">
                    <img src="https://placehold.co/100x100" alt="" class="rounded-full" />
                </div>
            </div>

            <div class="flex justify-center font-semibold">Kreator</div>
            <div class="flex justify-between p-4">
                <div class="ms-2 font-light">produk :</div>
                <div class="me-2 font-light">200</div>
            </div>
        </div>

        <div class="rounded-xl bg-[#2E2E2E]">
            <div class="flex justify-center">
                <div class="m-5">
                    <img src="https://placehold.co/100x100" alt="" class="rounded-full" />
                </div>
            </div>

            <div class="flex justify-center font-semibold">Kreator</div>
            <div class="flex justify-between p-4">
                <div class="ms-2 font-light">produk :</div>
                <div class="me-2 font-light">200</div>
            </div>
        </div>

        <div class="rounded-xl bg-[#2E2E2E]">
            <div class="flex justify-center">
                <div class="m-5">
                    <img src="https://placehold.co/100x100" alt="" class="rounded-full" />
                </div>
            </div>

            <div class="flex justify-center font-semibold">Kreator</div>
            <div class="flex justify-between p-4">
                <div class="ms-2 font-light">produk :</div>
                <div class="me-2 font-light">200</div>
            </div>
        </div>

        <div class="rounded-xl bg-[#2E2E2E]">
            <div class="flex justify-center">
                <div class="m-5">
                    <img src="https://placehold.co/100x100" alt="" class="rounded-full" />
                </div>
            </div>

            <div class="flex justify-center font-semibold">Kreator</div>
            <div class="flex justify-between p-4">
                <div class="ms-2 font-light">produk :</div>
                <div class="me-2 font-light">200</div>
            </div>
        </div>

        <div class="rounded-xl bg-[#2E2E2E]">
            <div class="flex justify-center">
                <div class="m-5">
                    <img src="https://placehold.co/100x100" alt="" class="rounded-full" />
                </div>
            </div>

            <div class="flex justify-center font-semibold">Kreator</div>
            <div class="flex justify-between p-4">
                <div class="ms-2 font-light">produk :</div>
                <div class="me-2 font-light">200</div>
            </div>
        </div>


        <div class="rounded-xl bg-[#2E2E2E]">
            <div class="flex justify-center">
                <div class="m-5">
                    <img src="https://placehold.co/100x100" alt="" class="rounded-full" />
                </div>
            </div>

            <div class="flex justify-center font-semibold">Kreator</div>
            <div class="flex justify-between p-4">
                <div class="ms-2 font-light">produk :</div>
                <div class="me-2 font-light">200</div>
            </div>
        </div>

        <div class="rounded-xl bg-[#2E2E2E]">
            <div class="flex justify-center">
                <div class="m-5">
                    <img src="https://placehold.co/100x100" alt="" class="rounded-full" />
                </div>
            </div>

            <div class="flex justify-center font-semibold">Kreator</div>
            <div class="flex justify-between p-4">
                <div class="ms-2 font-light">produk :</div>
                <div class="me-2 font-light">200</div>
            </div>
        </div>

        <div class="rounded-xl bg-[#2E2E2E]">
            <div class="flex justify-center">
                <div class="m-5">
                    <img src="https://placehold.co/100x100" alt="" class="rounded-full" />
                </div>
            </div>

            <div class="flex justify-center font-semibold">Kreator</div>
            <div class="flex justify-between p-4">
                <div class="ms-2 font-light">produk :</div>
                <div class="me-2 font-light">200</div>
            </div>
        </div>

        <div class="rounded-xl bg-[#2E2E2E]">
            <div class="flex justify-center">
                <div class="m-5">
                    <img src="https://placehold.co/100x100" alt="" class="rounded-full" />
                </div>
            </div>

            <div class="flex justify-center font-semibold">Kreator</div>
            <div class="flex justify-between p-4">
                <div class="ms-2 font-light">produk :</div>
                <div class="me-2 font-light">200</div>
            </div>
        </div>

        <div class="rounded-xl bg-[#2E2E2E]">
            <div class="flex justify-center">
                <div class="m-5">
                    <img src="https://placehold.co/100x100" alt="" class="rounded-full" />
                </div>
            </div>

            <div class="flex justify-center font-semibold">Kreator</div>
            <div class="flex justify-between p-4">
                <div class="ms-2 font-light">produk :</div>
                <div class="me-2 font-light">200</div>
            </div>
        </div>


    </div>





</main>
<?php
// Panggil footer.php
get_footer();
?>