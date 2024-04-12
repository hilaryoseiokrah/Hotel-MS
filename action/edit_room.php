<?php
include '../settings/connection.php';

if (isset($_POST["edit_submit"])) {
    if (isset($_GET['id'])) {
        $get_id = $_GET['id'];
        
        // Retrieve form data
        $roomNameUpdated = $_POST['editedCRoomName'];
        $roomPrice = $_POST['editedPrice'];
        $roomQuantity = $_POST['editedquantity'];
        $roomAdult = $_POST['editedAdult'];
        $ChildrenUpdated = $_POST['editedChild'];

        // Ensure $conn is initialized properly
        if ($conn) {
            // Construct SQL query for updating room
            $sql_ = "UPDATE room 
                     SET roomName = '$roomNameUpdated',
                         price = '$roomPrice',
                         quantity = '$roomQuantity',
                         adult = '$roomAdult',
                         children = '$ChildrenUpdated'
                     WHERE roomID = '$get_id'";

            // Execute SQL query
            if (mysqli_query($conn, $sql_)) {
                echo "Record updated successfully";
                header("Location: ../admin/view/rooms.php");
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
