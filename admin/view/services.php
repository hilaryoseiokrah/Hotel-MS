<?php

include '../../Settings/connection.php';
include '../../functions/get_service_fxn.php';



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - ADMIN</title>
    <?php require('../inc/links.php'); ?>
    <?php require('../inc/header.php'); ?>
</head>

<body>
    

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                
                <div class=" mb-lg-1 text-center align-items-center mt-2 p-4">
                    <button type="button" class="btn text-white shadow-none custom-bg" data-bs-toggle="modal" data-bs-target="#add-service">Add Service</button>
                </div>
            </div>
        </div>
        </div>

        <div class="modal fade" id="add-service" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form action="../../action/add_service.php" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title h-font">Add Service</h5>
                        </div>
                        <div class="modal-body">
                           
                            <div class="row">
                               
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Service Name:</label>
                                    <input type="text" min="1" name="ServiceName" class="form-control shadow-none" required>
                                </div>
                                
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                            <button type="submit" name="add_service" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="table-responsive-lg" style="height: 450px; overflow-y: scroll;">
            <table class="table table-hover border">
                <thead>
                    <tr class="bg-dark text-light">
                        <th scope="col">Service ID</th>
                        <th scope="col">Service Name</th>                    
                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody id="booking-data">
                    <?php getServices(); ?>
                </tbody>
            </table>
        </div>




        <?php require('../inc/scripts.php'); ?>
</body>

</html>