<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font text-danger" href="../view/home.php">Ame Stays</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="../view/home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="../view/room_home.php">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="../view/services_home.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="../view/reachus_home.php">Contact Us</a>
                </li>


            </ul>

            <div class="d-flex">
                <a href="../view/index.php">
                    <button type="button" class="btn btn-outline-light shadow-none me-lg-2 me-3 custom-bg">Logout</button>
                </a>
            </div>


        </div>
    </div>
</nav>

<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="../action/login_user_action.php" method="post">
                <div class="modal-header">
                    <h1 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-circle fs-3 me-2"></i>User Login
                    </h1>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control shadow-none">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control shadow-none">
                    </div>

                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button type="submit" name="login" class="btn btn-danger shadow-none">LOGIN</button>
                        <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>

<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="../action/register_user_action.php" method="post">
                <div class="modal-header">
                    <h1 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-circle fs-3 me-2"></i>User Registration
                    </h1>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" name="fname" class="form-control shadow-none">
                            </div>

                            <div class="col-md-6 p-0">
                                <label class="form-label">Last Name</label>
                                <input type="text" name="lname" class="form-control shadow-none">
                            </div>

                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control shadow-none">
                            </div>

                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Date of Birth</label>
                                <input type="date" name="dob" class="form-control shadow-none">
                            </div>

                            <div class="col-md-12 p-0 mb-3">
                                <label class="form-label">Address</label>
                                <textarea name="address" class="form-control shadow-none" rows="1"></textarea>
                            </div>

                            <div class="col-md-12 p-0 mb-3">
                                <label class="form-label">Phone Number</label>
                                <input name="number"  type="tel" class="form-control shadow-none" ></textarea>
                            </div>

                            <div class="col-md-12 p-0 mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control shadow-none" rows="1"></input>
                            </div>

                            <div class="col-md-12 p-0 mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" name="retype_password" class="form-control shadow-none" rows="1"></input>
                            </div>
                        </div>
                        <div class="text-center my-1">
                            <button type="submit" name="register" class="btn btn-danger shadow-none">Register</button>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>