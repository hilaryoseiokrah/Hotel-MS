<?php

require('../../include/essentials.php');

// include '../../Settings/core.php';
// include '../../functions/get_rooms_fxn.php';

include '../../action/get_all_stats.php';

// is_login_user();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <?php require('../inc/links.php') ?>
</head>

<body class="bg-light">



    <?php require('../inc/header.php'); ?>
    <div class="my-5 px-4">
        <h2 class="fw-bold text-danger h-font text-center">AME STAYS HOTEL MANAGEMENT SYSTEM</h2>
        <div class="h-line bg-danger"></div>
        
        

    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-mg-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-danger">
                    
                    <p class="text-center">
                        <?php echo  get_number_of_room_bookings() ?><br>


                    </p>
                    <div class="d-flex align-items-center mb-2">
                        <h5 class="text-danger m-0 ms-3">
                        <i class="bi bi-house-check-fill"></i> Room Bookings</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-mg-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-danger">
                    
                    <p class="text-center">
                    <?php echo  get_number_of_service_bookings() ?><br>


                    </p>
                    <div class="d-flex align-items-center mb-2">
                        <h5 class="text-danger m-0 ms-3">
                        <i class="bi bi-pc"></i> Service Bookings</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-mg-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-danger">
                    
                    <p class="text-center">
                        <?php echo  get_guest_bookings_count() ?><br>


                    </p>
                    <div class="d-flex align-items-center mb-2">
                        <h5 class="text-danger m-0 ms-3"> 
                        <i class="bi bi-people-fill"></i> Guests</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-mg-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-danger">
                    
                    <p class="text-center">
                    <?php echo  get_number_of_rooms() ?><br>


                    </p>
                    <div class="d-flex align-items-center mb-2">
                        <h5 class="text-danger m-0 ms-3">
                        <i class="bi bi-truck-flatbed"></i> Rooms</h5>
                    </div>
                </div>
            </div>

        </div>
    </div>


   




    <?php require('../inc/scripts.php') ?>
</body>

</html>