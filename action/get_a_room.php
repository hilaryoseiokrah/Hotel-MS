<?php

include '../../Settings/connection.php'; // Include the database connection file

function get_a_room($conn){ // Pass $conn as a parameter
    $id = $_GET['id'];
    $sql_chore = "SELECT roomName,price,quantity,adult,children FROM room WHERE RoomID = '$id'";
    
    if ($result_chore = mysqli_query($conn, $sql_chore)) {
        if ($result_chore->num_rows > 0){
            $conn_results = mysqli_fetch_assoc($result_chore);
            return $conn_results; // Return the fetched row
        } else {
            return "No results";
        }
    } else {
        return "Failed to execute query: " . mysqli_error($conn);
    }
}

?>
