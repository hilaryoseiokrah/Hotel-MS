
<?php
    include '../functions/get_rooms_fxn_copy.php';

    $rooms = getRoom();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ame Stays- Rooms</title>
    <?php require('../include/links.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>

    </style>
</head>

<body class="bg-light">
    <?php require('../include/header_home.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold text-danger h-font text-center">OUR ROOMS</h2>
        <div class="h-line bg-danger"></div>


    </div>

    <div class="container">
        <div class="row">


            <div class="col-lg-3 col-md-12 mb-4 mb-lg-0 px-lg-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column alighn-items-stretch">
                        <H4 class="mt-2 text-danger">FILTERS</H4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size:18px;">CHECK AVAILABILITY</h5>
                                <label class="form-label" style="font-weight: 500;">Check In</label>
                                <input type="date" class="form-control shadow-none mb-3">

                                <label class="form-label" style="font-weight: 500;">Check In</label>
                                <input type="date" class="form-control shadow-none">

                            </div>

                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size:18px;">FACILITIES</h5>
                                <DIV class="MB-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none mb-3">

                                    <label class="form-check-label" for="f1" style="font-weight: 500;">Facility One</label>

                                </DIV>

                                <DIV class="MB-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none mb-3">

                                    <label class="form-check-label" for="f2" style="font-weight: 500;">Facility Two</label>

                                </DIV>

                                <DIV class="MB-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none mb-3">

                                    <label class="form-check-label" for="f3" style="font-weight: 500;">Facility 3</label>

                                </DIV>


                            </div>

                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size:18px;">GUESTS</h5>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <label class="form-check-label" style="font-weight: 500;">Adults</label>
                                        <input type="number" class="form-control shadow-none mb-3">
                                    </div>

                                    <div>
                                        <label class="form-check-label" style="font-weight: 500;">Children</label>
                                        <input type="number" class="form-control shadow-none mb-3">
                                    </div>

                                </div>






                            </div>

                        </div>
                    </div>
                </nav>
            </div>


            <div class="col-lg-9 col-md-12 px-4">
                <div class="card mb-4 shadow border-0">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="../images/rooms/1.jpg" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Single Studio Room</h5>
                            <div class="features mb-4">
                                <h6 class=" mb-1">Features</h6>
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

                            <div class="facilities mb-3">
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

                            <div class="guests ">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill b-light text-dark text-wrap">
                                    5 Adults
                                </span>

                                <span class="badge rounded-pill b-light text-dark text-wrap">
                                    3 Children
                                </span>
                            </div>

                        </div>
                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">

                            <h6 class="mb-4">₵500 per night</h6>
                            <button type="submit" class="btn text-white shadow-none custom-bg" data-bs-toggle="modal" data-bs-target="#bookRoom">Book Room</button>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>

                        </div>
                    </div>
                </div>

            </div>

            <div class="modal fade" id="bookRoom" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form action="../action/book_room_action.php" method="post">
                            <div class="modal-header">
                                <h1 class="modal-title d-flex align-items-center">
                                    <i class="bi bi-person-circle fs-3 me-2"></i>Book Room
                                </h1>
                                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">


                                        <div class="col-md-6 ps-0 mb-3 ">
                                            <label class="form-label">Select the Room</label><br>

                                            <select name="selectRoom" id="room">
                                                <?php
                                                foreach ($rooms as $room) {
                                                    echo '<option value="' . $room["roomID"] . '">' . $room["roomName"] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ps-0 mb-3">
                                        <label class="form-label">Adult</label>
                                        <select name="adult" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 ps-0 mb-3">
                                        <label class="form-label">Children</label>
                                        <select name="children" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>



                                    <div class="col-md-6 ps-0 mb-3">
                                        <label class="form-label"> Check-In Date</label>
                                        <input type="date" name="InDate" class="form-control shadow-none">
                                    </div>
                                    <div class="col-md-6 ps-0 mb-3">
                                        <label class="form-label"> Check-Out Date</label>
                                        <input type="date" name="OutDate" class="form-control shadow-none">
                                    </div>




                                </div>
                                <div class="text-center my-1">
                                    <button type="submit" name="book_room" class="btn btn-danger shadow-none">Submit</button>
                                </div>
                            </div>
                    </div>

                    </form>


                </div>
            </div>




            <?php require('../include/footer.php'); ?>



            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


            
</body>

</html>