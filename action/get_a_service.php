<?php
include '../../Settings/connection.php';

function get_a_service($conn)
{
    if (isset($_GET['id'])) {
        global $conn;
        $get_id = $_GET['id'];
        $service_sql = "SELECT * FROM services WHERE ServiceID = '$get_id'";

        $result = $conn->query($service_sql);

        if ($result && $result->num_rows > 0) {
            $service_data = $result->fetch_assoc();
            return $service_data;
        } else {
            return "No service found with ID: $get_id";
        }
    } else {
        return "No ID parameter provided";
    }
}
?>
