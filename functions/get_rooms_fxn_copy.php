<?php

include '../Settings/connection.php';
function getRoom() {
    global $conn;
    $roomsql = "SELECT * FROM chores";
    $results = $conn->query($roomsql);
    if ($results->num_rows > 0) {
        return mysqli_fetch_all($results, MYSQLI_ASSOC);
    } else {
        return null;
    }
}


?>