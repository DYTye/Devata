<?php
// Panggil header.php (di mana CSS Tailwind sudah di-enqueue melalui wp_head())
get_header();
?>

<main class="max-w-6xl mx-auto my-12 text-white">
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
                        <button
                            class="mr-2 w-full rounded-xl bg-linear-to-r from-[#8000FF] to-[#FF007F] py-4 font-semibold text-lg">Cari
                            Asset</button>
                        <div class="font-semibold text-3xl ms-2">
                            <h3 class="pt-6">240K+</h3>
                            <h3>Total Asset</h3>
                        </div>

                    </div>
                    <div>
                        <div class="ml-2 w-full rounded-xl bg-gradient-to-r from-[#8000FF] to-[#FF007F] p-[2px]">
                            <button
                                class="h-full w-full rounded-[10px] rounded-xl bg-[#212121] py-3 font-semibold text-lg">Mulai
                                Render</button>
                        </div>
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
                    <img src="https://placehold.co/30x30" alt="" class="mr-3">
                    <p>Aditya Arrofi</p>
                </div>
            </div>
        </div>
    </div>

</main>
<?php
// Panggil footer.php
get_footer();
?>