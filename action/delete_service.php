<?php
include "../settings/connection.php";

if (isset($_GET['id'])) {
    $get_id = $_GET['id'];
    $sql = "DELETE FROM services WHERE  ServiceID= '$get_id' ";

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
        header('Location: ../admin/view/services.php');
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    

} else {
    header('Location: ../admin/view/services.php');
}
