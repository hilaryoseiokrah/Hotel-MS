<?php
    include '../Settings/core.php';

    is_login_user();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ame Stays- HOME</title>
    <?php require('../include/links.php')?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />




    <style>
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
   <?php require('../include/header_home.php');?>


   

    <!-- Sliding Images(Carousel) -->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="../images/1.png" />
                </div>
                <div class="swiper-slide">
                    <img src="../images/2.png" />
                </div>
                <div class="swiper-slide">
                    <img src="../images/3.png" />
                </div>
                <div class="swiper-slide">
                    <img src="../images/4.png" />
                </div>
            </div>

        </div>

    </div>

    <!-- Check Availability Form -->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4 text-danger">Check Booking Availability</h5>
                <form action="" method="post">
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check In</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check Out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Adult</label>
                            <select class="form-select shadow-none">

                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>

                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Child</label>
                            <select class="form-select shadow-none">

                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>

                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <a href="../view/rooms.php">
                                <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Our Rooms -->
    <h2 class="mt-5 pt-4 mb-4 text-center text-danger fw-bold h-font">OUR ROOMS</h2>
    <div class="container">
        <div class="row">
            <!-- Room 1 -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px;margin:auto">
                    <img src="../images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Single Studio Room</h5>
                        <h6 class="mb-4">₵500 per night</h6>
                        <div class="features mb-4">
                            <h6 class="features mb-1">Features</h6>
                            <span class="badge rounded-pill b-light text-dark text-wrap">
                                1 Bed
                            </span>

                            <span class="badge rounded-pill b-light text-dark text-wrap">
                                1 Bathroom
                            </span>

                            <span class="badge rounded-pill b-light text-dark text-wrap">
                                Private Balcony
                            </span>
                        </div>

                        <div class="facilities mb-4">
                            <h6 class="mb-1">
                                Facilities
                            </h6>
                            <span class="badge rounded-pill b-light text-dark text-wrap">
                                Wifi
                            </span>

                            <span class="badge rounded-pill b-light text-dark text-wrap">
                                Pool
                            </span>

                            <span class="badge rounded-pill b-light text-dark text-wrap">
                                Laundry
                            </span>
                        </div>

                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill b-light text-dark text-wrap">
                                5 Adults
                            </span>

                            <span class="badge rounded-pill b-light text-dark text-wrap">
                                3 Children
                            </span>
                        </div>

                        <div class="rating mb-4">
                            <h6 class="mb-1">Ratings</h6>
                            <span class="badge rounded-pill b-light">
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Room2 -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px;margin:auto">
                    <img src="../images/rooms/2.png" class="card-img-top">
                    <div class="card-body">
                        <h5>Double Studio Room</h5>
                        <h6 class="mb-4">₵850 per night</h6>
                        <div class="features mb-4">
                            <h6 class="features mb-1">Features</h6>
                            <span class="badge rounded-pill b-light text-dark text-wrap">
                                2 Beds
                            </span>

                            <span class="badge rounded-pill b-light text-dark text-wrap">
                                1 Bathroom
                            </span>

                            <span class="badge rounded-pill b-light text-dark text-wrap">
                                Private Pool
                            </span>

                        </div>

                        <div class="facilities mb-4">
                            <h6 class="mb-1">
                                Facilities
                            </h6>
                            <span class="badge rounded-pill b-light text-dark text-wrap">
                                Wifi
                            </span>

                            <span class="badge rounded-pill b-light text-dark text-wrap">
                                AC
                            </span>

                            <span class="badge rounded-pill b-light text-dark text-wrap">
                                Laundry
                            </span>
                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill b-light text-dark text-wrap">
                                5 Adults
                            </span>

                            <span class="badge rounded-pill b-light text-dark text-wrap">
                                3 Children
                            </span>
                        </div>

                        <div class="rating mb-4">
                            <h6 class="mb-1">Ratings</h6>
                            <span class="badge rounded-pill b-light">
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Room3 -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px;margin:auto">
                    <img src="../images/rooms/3.png" class="card-img-top">
                    <div class="card-body">
                        <h5>Bachelor Penthouse</h5>
                        <h6 class="mb-4">₵900 per night</h6>
                        <div class="features mb-4">
                            <h6 class="features mb-1">Features</h6>
                            <span class="badge rounded-pill b-light text-dark text-wrap">
                                2 Bedrooms
                            </span>

                            <span class="badge rounded-pill b-light text-dark text-wrap">
                                2 Bathrooms
                            </span>

                            <span class="badge rounded-pill b-light text-dark text-wrap">
                                Private Balcony
                            </span>
                        </div>

                        <div class="facilities mb-4">
                            <h6 class="mb-1">
                                Facilities
                            </h6>
                            <span class="badge rounded-pill b-light text-dark text-wrap">
                                Wifi
                            </span>

                            <span class="badge rounded-pill b-light text-dark text-wrap">
                                Dining
                            </span>

                            <span class="badge rounded-pill b-light text-dark text-wrap">
                                Laundry
                            </span>
                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill b-light text-dark text-wrap">
                                5 Adults
                            </span>

                            <span class="badge rounded-pill b-light text-dark text-wrap">
                                3 Children
                            </span>
                        </div>

                        <div class="rating mb-4">
                            <h6 class="mb-1">Ratings</h6>
                            <span class="badge rounded-pill b-light">
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="rooms.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms</a>
            </div>

            <!-- Our Services -->
            <h2 class="mt-5 pt-4 mb-4 text-center text-danger fw-bold h-font">OUR SERVICES</h2>
            <div class="container">
                <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                        <img src="../images/services/water.svg" width="80px">
                        <h5>Pool</h5>
                    </div>

                    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                        <img src="../images/services/massage.svg" width="80px">
                        <h5>Spa</h5>
                    </div>

                    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                        <img src="../images/services/wifi.svg" width="80px">
                        <h5>Wifi Available</h5>
                    </div>

                    
                    <div class="col-lg-12 text-center mt-5">
                        <a href="services.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Services</a>

                    </div>

                </div>
            </div>

            <!-- Reach Us -->
            <h2 class="mt-5 pt-4 mb-4 text-center text-danger fw-bold h-font">REACH US</h2>

            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                        <iframe class="w-100 rounded" height="360" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3054.3724915747366!2d-75.38830452502901!3d40.04478757150178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c69520c682a023%3A0x41563ee88af4f1d8!2sAME%20Salon%20%26%20Spa!5e0!3m2!1sen!2sgh!4v1712445026977!5m2!1sen!2sgh" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="bg-white p-4 rounded mb-4">
                            <h5 class="text-danger">Call Us</h5>
                            <a href="tel: +23340404040" class="d-inline-block mb-2 text-decoration-none text-dark">
                                <i class="bi bi-telephone-fill"></i>+23340404040
                            </a>
                            <br>
                            <a href="tel: +23340404040" class="d-inline-block 
                            text-decoration-none text-dark">
                                <i class="bi bi-telephone-fill"></i>+23340404040
                            </a>
                        </div>
                        <div class="bg-white p-4 rounded mb-4">
                            <h5 class="text-danger">Follow Us</h5>
                            <a href="#" class="d-inline-block mb-3">
                                <span class="badge bg-light text-dark">
                                <i class="bi bi-twitter-x me-2"></i>Twitter
                                </span>
                            </a>

                            <a href="#" class="d-inline-block mb-3">
                                <span class="badge bg-light text-dark">
                                <i class="bi bi-instagram me-2"></i>Instagram
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>

    <?php require('../include/footer.php');?>

    <br><br><br>
    <br><br><br>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            }
        });
    </script>
</body>

</html>