<?php
include '../Settings/connection.php';

if (isset($_POST["add-room"])) {
    global $conn;
    $roomname = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $adults = $_POST['adult'];
    $children = $_POST['children'];

    $room = "INSERT INTO room(roomName, price, quantity, adult, children) VALUES 
    ('$roomname', '$price', '$quantity', '$adults', '$children')";

    if (mysqli_query($conn, $room)) {
        // Return JSON response
        // echo json_encode(array("success" => true, "room" => array("name" => $roomname, "price" => $price, "quantity" => $quantity, "adult" => $adults, "children" => $children)));
        exit();
    } else {
        // Return JSON response
        // echo json_encode(array("success" => false, "error" => mysqli_error($conn)));
        exit();
    }
} else {
    // Return JSON response
    echo json_encode(array("success" => false, "error" => "Form submission error."));
    exit();
}
?>
