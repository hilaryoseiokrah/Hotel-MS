<?php

include '../Settings/connection.php';

if (isset($_POST["edit_booking"])) {
    if (isset($_GET['id'])) {
        $get_id = $_GET['id'];
        
        // Retrieve form data
        $editedAdult = $_POST['editedAdult'];
        $editedChildren = $_POST['editedChildren'];
        $editedCheckInDate = $_POST['editedCheckInDate'];
        $editedCheckOutDate = $_POST['editedCheckOutDate'];
        
        // Ensure $conn is initialized properly
        if ($conn) {
            // Construct SQL query to update booking
            $sql_update_booking = "UPDATE room_booking SET adult = '$editedAdult', children = '$editedChildren', checkInDate = '$editedCheckInDate', checkOutDate = '$editedCheckOutDate' WHERE bookingID = '$get_id'";
            
            // Execute SQL query
            if (mysqli_query($conn, $sql_update_booking)) {
                echo "Record updated successfully";
                header("Location: ../admin/view/bookings.php");
                exit(); // Add exit() after header to stop further execution
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        } else {
            echo "Failed to connect to the database.";
        }
    } else {
        echo "ID parameter is missing.";
    }
} else {
    echo "Form submission error.";
}

?>
