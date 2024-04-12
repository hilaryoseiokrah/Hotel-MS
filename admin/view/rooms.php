<?php

include '../../Settings/connection.php';
include '../../functions/get_rooms_fxn.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms - ADMIN</title>
    <?php require('../inc/links.php'); ?>
    <?php require('../inc/header.php'); ?>
</head>

<body>
    

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                
                <div class=" mb-lg-1 text-center align-items-center mt-2 p-4">
                    <button type="button" class="btn text-white shadow-none custom-bg" data-bs-toggle="modal" data-bs-target="#add-room">Add Room</button>
                </div>
            </div>
        </div>
        </div>

        <div class="modal fade" id="add-room" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form action="../../action/add_room.php" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Room</h5>
                        </div>
                        <div class="modal-body">
                            <!-- Form inputs for adding rooms -->
                            <div class="row">
                                <!-- Inputs for room details -->
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Name</label>
                                    <input type="text" name="name" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Price</label>
                                    <input type="number" min="1" name="price" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Quantity</label>
                                    <input type="number" min="1" name="quantity" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Adult (Max.)</label>
                                    <input type="number" min="1" name="adult" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Children (Max.)</label>
                                    <input type="number" min="1" name="children" class="form-control shadow-none" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                            <button type="submit" name="add-room" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="table-responsive-lg" style="height: 450px; overflow-y: scroll;">
            <table class="table table-hover border">
                <thead>
                    <tr class="bg-dark text-light">
                        <th scope="col">*</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Adults</th>
                        <th scope="col">Children</th>
                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody id="room-data">
                    <?php getRooms(); ?>
                </tbody>
            </table>
        </div>

        <script>
    $(document).ready(function() {
        $(".delete-btn").click(function() {
            var id = $(this).data('id');
            if (confirm("Are you sure you want to delete this room?")) {
                $.ajax({
                    url: 'delete_room.php',
                    type: 'GET',
                    data: {
                        id: id
                    },
                    success: function(response) {
                        alert(response);
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
        });

        // Add functionality for edit button here
        $(".edit-btn").click(function() {
            var id = $(this).data('id');
            // Redirect or open a modal for editing the room with this id
        });
    });
</script>



        <?php require('../inc/scripts.php'); ?>
</body>

</html>