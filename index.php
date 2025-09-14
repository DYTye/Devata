<?php 
include 'layouts/header.php';?>

<div class="container-fluid">
    <div class="row">
        <div class="col py-5 mx-5 d-flex flex-column justify-content-center">
            <h1 class="mb-5">The All-In-One Wireframing Kit</h1>
            <p>Nec massa viverra eget feugiat pellentesque. Feugiat adipiscing massa vitae auctor mi massa. Sodales
                libero viverra cursus sed duis luctus nulla. In malesuada vulputate pharetra ipsum orci.</p>
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
</div>

<?php
include 'layouts/footer.php'; 
?>