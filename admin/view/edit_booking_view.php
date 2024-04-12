<?php
// include "../../Settings/core.php";
include "../../action/get_a_booking.php";

// is_login_user();

if (isset($_GET['id'])) {
    global $conn;
    $stored_id = $_GET['id'];
    $displayed_output = get_a_booking($conn);
} else {
    header('Location: ../view/bookings.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Booking</title>
    <?php require('../inc/links.php') ?>
</head>

<body>

    <?php require('../inc/header.php'); ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3 ">
                <div class="card border-0 shadow" style="max-width: 350px;margin:auto">
                    <div class="card-body">
                        <form action="../../action/edit_booking_action.php?id=<?php echo $stored_id; ?>" method="POST">
                            <h2 class="h-font text-danger">Edit Booking</h2>
                            <label for="editedCheckInDate">Adult:</label><br>
                            <input type="number" name="editedAdult" id="editedAdult" value="<?php echo isset($displayed_output['adult']) ? htmlspecialchars($displayed_output['adult']) : ''; ?>"><br>
                            
                            <label for="editedCheckInDate">Children:</label><br>
                            <input type="number" name="editedChildren" id="editedChildren" value="<?php echo isset($displayed_output['children']) ? htmlspecialchars($displayed_output['children']) : ''; ?>"><br>
                            
                            <label for="editedCheckInDate">Check-In Date:</label><br>
                            <input type="date" name="editedCheckInDate" id="editedCheckInDate" value="<?php echo isset($displayed_output['checkInDate']) ? htmlspecialchars($displayed_output['checkInDate']) : ''; ?>"><br>

                            <label for="editedCheckOutDate">Check-Out Date:</label><br>
                            <input type="date" name="editedCheckOutDate" id="editedCheckOutDate" value="<?php echo isset($displayed_output['checkOutDate']) ? htmlspecialchars($displayed_output['checkOutDate']) : ''; ?>"><br>

                            <button type="submit" name="edit_booking" class="custom-bg text-light">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
