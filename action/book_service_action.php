<?php
session_start();
include '../settings/connection.php';

if (isset($_POST["book_service"])) {
    $user = $_SESSION['userID'];
    $datebooked = date('Y-m-d');
    $booking_Date = $_POST['date'];
    $time = $_POST['time'];
    $service_booked =  $_POST['selectService']; 

    $booking = "INSERT INTO servicesbooking (userID,date,time,service)
    VALUES ($user, '$booking_Date', ' $time', '$service_booked')";


    if (mysqli_query($conn, $booking)) {
        header("Location: ../view/services.php");
        exit();
    } else {
        echo "Error; " . mysqli_error($conn);
    }
} else {
    echo "Form submission error.";
}
