<?php
include "../settings/connection.php";
if (isset($_POST["edit_service"])) {
    global $conn;
    if (isset($_GET['id'])) {
        $get_id = $_GET['id'];
        $editedServiceName = $_POST['editedServiceName'];
       
        $sql = "UPDATE services SET ServiceName = '$editedServiceName' WHERE ServiceID = '$get_id'";
        // Execute SQL query
        if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully";
            header('Location: ../admin/view/services.php');
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    } else {
        header('Location: ../admin/view/services.php');
    }
}
