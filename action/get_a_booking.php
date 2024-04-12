<?php

include '../../Settings/connection.php'; // Include the database connection file

function get_a_booking($conn){ // Pass $conn as a parameter
    $id = $_GET['id'];
    $sql_booking = "SELECT *FROM room_booking WHERE bookingID = '$id'";
    
    if ($result_booking = mysqli_query($conn, $sql_booking)) {
        if ($result_booking->num_rows > 0){
            $conn_results = mysqli_fetch_assoc($result_booking);
            return $conn_results; // Return the fetched row
        } else {
            return "No results";
        }
    } else {
        return "Failed to execute query: " . mysqli_error($conn);
    }
}

?>
