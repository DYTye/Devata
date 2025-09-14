<?php 
include 'layouts/header.php';?>

<div class="container-fluid">
    <div class="row my-5">
        <div class="col py-5 mx-5 d-flex flex-column justify-content-center">
            <h1 class="mb-5">The All-In-One Wireframing Kit</h1>
            <p>Nec massa viverra eget feugiat pellentesque. Feugiat adipiscing massa vitae auctor mi massa. Sodales
                libero viverra cursus sed duis luctus nulla. In malesuada vulputate pharetra ipsum orci.</p>

            <div class="d-felx">
                <button class="btn btn-dark text-light">Primary Action</button>
                <button class="btn btn-outline-dark">Secondary Action</button>
            </div>
        </div>
        <div class="col-md-6 mx-5 my-5 position-relative" style="min-height: 550px;">
            <div style="width: 100%; height: 100%; padding-left: 80px; padding-right: 80px; position: relative;">

                <!-- Desktop -->
                <div
                    style="width: 745px; height: 521px; position: absolute; top: -16px; left: 96px; background: white; border-radius: 20px; border: 1px solid #C1C7CD; overflow: hidden;">
                    <img style="width:100%; height:100%; object-fit: cover;" src="https://placehold.co/745x473">
                </div>

                <!-- Smartphone -->
                <div
                    style="position: absolute; top: 78px; left: 0; background: #DDE1E6; border-radius: 35px; border: 1px solid #C1C7CD; padding: 5px;">
                    <img style="width:210px; height:449px; border-radius: 32px; border: 1px solid #C1C7CD;"
                        src="https://placehold.co/210x449">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid my-5">
        <div class="text-center">
            <h1 class="my-5">Bibendum amet at molestie mattis.</h1>
            <p class="my-5">Rhoncus morbi et augue nec, in id ullamcorper at sit. Condimentum sit nunc in eros
                scelerisque sed. Commodo in viverra nunc, ullamcorper ut. Non, amet, aliquet scelerisque nullam
                sagittis, pulvinar. Fermentum scelerisque sit consectetur hac mi. Mollis leo eleifend ultricies purus
                iaculis.</p>
        </div>

        <div class="row d-flex text-start my-5">
            <div class="col">
                <div class="border border-1 border-dark px-5">
                    <div class="row">
                        <div class="col">halo</div>
                        <div class="col">
                            <h1>250+</h1>
                            <p>Happy Customer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="border border-1 border-dark px-5">
                    <div class="row">
                        <div class="col">halo</div>
                        <div class="col">
                            <h1>600+</h1>
                            <p>Completed Project</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="border border-1 border-dark px-5">
                    <div class="row">
                        <div class="col">halo</div>
                        <div class="col">
                            <h1>1.8K</h1>
                            <p>Avabile Resource</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="border border-1 border-dark px-5">
                    <div class="row">
                        <div class="col">halo</div>
                        <div class="col">
                            <h1>11K</h1>
                            <p>Subscribers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
include 'layouts/footer.php'; 
?>