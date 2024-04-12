<?php
include '../functions/get_service_fxn_copy.php';
include '../Settings/connection.php';
include '../Settings/core.php';

is_login_user();

global $conn;
$services = getService($conn);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ame Stays- SERVICES</title>
    <?php require('../include/links.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .pop {
            border-top-color: red !important;
            transform: scale(1.03);
            transition: all 0.3s;

        }

        .availability-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen and(max-width: 575px) {
            .availability-form {
                margin-top: 25px;
                padding: 0 35px;

            }
        }
    </style>
</head>

<body class="bg-light">
    <?php require('../include/header_home.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold text-danger h-font text-center">OUR SERVICES</h2>
        <div class="h-line bg-danger"></div>
        <p class="text-center mt-3">
            Get a wide variety of services from our experienced team at AME STAYS!
        </p>
        <div class=" mb-lg-1 text-center align-items-center mt-2 p-4">
            <button type="submit" class="btn text-white shadow-none custom-bg" data-bs-toggle="modal" data-bs-target="#bookService">Book Service</button>

        </div>

    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-mg-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-danger">
                    <div class="d-flex align-items-center mb-2">
                        <img src="../images/services/wifi.svg" width="40px">
                        <h5 class="text-danger m-0 ms-3">Wifi</h5>
                    </div>
                    <p>
                        Access to fast and reliable internet service<br>


                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-mg-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-danger">
                    <div class="d-flex align-items-center mb-2">
                        <img src="../images/services/massage.svg" width="40px">
                        <h5 class="text-danger m-0 ms-3">Massage</h5>
                    </div>
                    <p>
                        Enjoy a reliving massage at the pool side.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-mg-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-danger">
                    <div class="d-flex align-items-center mb-2">
                        <img src="../images/services/water.svg" width="40px">
                        <h5 class="text-danger m-0 ms-3">Water</h5>
                    </div>
                    <p>
                        A refreshing pool to calm your nerves
                    </p>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="bookService" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="../action/book_service_action.php" method="post">
                    <div class="modal-header">
                        <h1 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-circle fs-3 me-2"></i>Book Service
                        </h1>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">

                                <div >
                                    <label class="form-label">Select the service</label><br>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <select  name="selectService" id="service">
                                        <?php
                                        foreach ($services as $service) {
                                            echo '
                                                    <option value = ' . $service["ServiceID"] . '>' . $service["ServiceName"] . '</option>
                                    ';
                                        }
                                        ?>
                                    </select>

                                </div>

                            </div>

                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Date</label>
                                <input type="date" name="date" class="form-control shadow-none">
                            </div>

                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Time</label>
                                <input name="time" type="time" class="form-control shadow-none"></input>
                            </div>


                        </div>
                        <div class="text-center my-1">
                            <button type="submit" name="book_service" class="btn btn-danger shadow-none">Submit</button>
                        </div>
                    </div>
            </div>

            </form>

        </div>
    </div>
    </div>


    <?php require('../include/footer.php'); ?>



    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    </script>
</body>

</html>