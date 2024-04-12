<?php
include_once '../Settings/connection.php'; // Adjust the path as necessary

if (isset($_POST['add_service'])) {
    global $conn;
    $serviceName = $_POST['ServiceName'];

    // Prepare a statement to avoid SQL injection
    $stmt = $conn->prepare("INSERT INTO Services (ServiceName) VALUES (?)");
    $stmt->bind_param("s", $serviceName);

    if ($stmt->execute()) {
        echo "<script>alert('Service added successfully!');</script>";
        echo "<script>window.location.href = '../action/add_service.php';</script>";
    } else {
        echo "<script>alert('Failed to add service.');</script>";
        echo "<script>window.location.href = '../action/add_service.php';</script>";
    }
    $stmt->close();
}
?>
