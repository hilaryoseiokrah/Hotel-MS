<?php


function getService() {
    global $conn;
    $servicesql = "SELECT * FROM services";
    $results = $conn->query($servicesql);
    if ($results->num_rows > 0) {
        return mysqli_fetch_all($results, MYSQLI_ASSOC);
    } else {
        return null;
    }
}


?>