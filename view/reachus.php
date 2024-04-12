<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ame Stays- SReach Us</title>
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
    <?php require('../include/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold text-danger h-font text-center">CONTACT US</h2>
        <div class="h-line bg-danger"></div>
        <p class="text-center mt-3">
            Want to leave a message? Reach Us.
        </p>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-mg-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    
                        <iframe class="w-100 rounded" height="320" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3054.3724915747366!2d-75.38830452502901!3d40.04478757150178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c69520c682a023%3A0x41563ee88af4f1d8!2sAME%20Salon%20%26%20Spa!5e0!3m2!1sen!2sgh!4v1712445026977!5m2!1sen!2sgh" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"
                        <h5 class="text-danger">Address</h5>
                        <a href="" target="_blank" class="d-inline-block  text-decoration-none text-dark mb-2">
                            <i class="bi bi-geo-alt-fill" ></i>Ame Stays
                        </a>
                        <h5 class="text-danger mt-4">Call Us</h5>
                        <a href="tel: +23340404040" class="d-inline-block mb-2 text-decoration-none text-dark">
                            <i class="bi bi-telephone-fill"></i>+23340404040
                        </a>
                        <br>
                        <a href="tel: +23340404040" class="d-inline-block text-decoration-none text-dark">
                            <i class="bi bi-telephone-fill"></i>+23340404040
                        </a>
                        <h5 class="text-danger mt-4">Email</h5>
                        <a href="" class="d-inline-block text-decoration-none text-dark ">
                            amestays@gmail.com
                        </a>

                
                            <h5 class="text-danger mt-4">Follow Us</h5>
                            <a href="#" class="d-inline-block  fs-5 me-2">
                                <span class="badge bg-light text-dark">
                                <i class="bi bi-twitter-x me-2"></i>
                                </span>
                            </a>

                            <a href="#" class="d-inline-block fs-5 me-2">
                                <span class="badge bg-light text-dark">
                                <i class="bi bi-instagram me-2"></i>
                                </span>
                            </a>
                
                 </div>
            </div>
            <div class="col-lg-6 col-mg-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form action="">
                        <h5>Send a message</h5>
                        <div class="mb-3">
                          <label class="form-label" style="font-weight: 500;">Name</label>
                        </div>
                        <input type="text" class="form-control shadow-none">

                        <div class="mb-3">
                          <label class="form-label" style="font-weight: 500;">Email</label>
                        </div>
                        <input type="email" class="form-control shadow-none">

                        <div class="mb-3">
                          <label class="form-label" style="font-weight: 500;">Subject</label>
                        </div>
                        <input type="text" class="form-control shadow-none">

                        <div class="mb-3">
                          <label class="form-label" style="font-weight: 500;">Message</label>
                        </div>
                        <textarea class="form-control shadow-none" rows="1" style="resize:none"></textarea>
                        <button type="submit" class="btn text-white mt-3 shadow-none custom-bg">SEND</button>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <?php require('../include/footer.php'); ?>



    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    </script>
</body>

</html>