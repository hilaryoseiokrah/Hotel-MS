<?php
session_start();

include '../Settings/core.php';
include '../settings/connection.php';

// Make sure the user is logged in
is_login_user();

// Check if the booking form was submitted
if (isset($_POST["book_room"])) {
    global $conn;
    $roomName = $_POST['selectRoom'];
    $InDate = $_POST['InDate'];
    $OutDate = $_POST['OutDate'];
    
    // Assuming you're storing the user ID in the session when they log in
    $userID = $_SESSION['userID'];

    // Retrieve roomID based on the selected room name
    $roomQuery = "SELECT RoomID FROM Room WHERE RoomName = ?";
    $roomStmt = mysqli_prepare($conn, $roomQuery);
    mysqli_stmt_bind_param($roomStmt, 's', $roomName);
    mysqli_stmt_execute($roomStmt);
    $result = mysqli_stmt_get_result($roomStmt);
    $roomData = mysqli_fetch_assoc($result);
    $roomID = $roomData['RoomID'];
    mysqli_stmt_close($roomStmt);
    
    $adults = $_POST['adult'];
    $children = $_POST['children'];

    // Insert the booking into the room_booking table
    $insertBookingQuery = "INSERT INTO room_booking (userID, roomID, adult, children, checkInDate, checkOutDate) VALUES (?, ?, ?, ?, ?, ?)";
    $insertBookingStmt = mysqli_prepare($conn, $insertBookingQuery);
    mysqli_stmt_bind_param($insertBookingStmt, 'iiissi', $userID, $roomID, $adults, $children, $InDate, $OutDate);
    
    if (mysqli_stmt_execute($insertBookingStmt)) {
        // Get the last inserted booking ID if you need it
        $last_booking_id = mysqli_insert_id($conn);

        // Update the user's role ID to 2 (Guest)
        $update_role_query = "UPDATE People SET RoleID = 2 WHERE UserID = ?";
        $updateRoleStmt = mysqli_prepare($conn, $update_role_query);
        mysqli_stmt_bind_param($updateRoleStmt, 'i', $userID);
        
        if (mysqli_stmt_execute($updateRoleStmt)) {
            // If both queries were successful, redirect the user
            header("Location: ../admin/view/bookings.php");
            exit();
        } else {
            // If updating the role failed
            echo "Error updating user role: " . mysqli_error($conn);
        }
    } else {
        // If inserting the booking failed
        echo "Error booking room: " . mysqli_error($conn);
    }
    
    mysqli_stmt_close($insertBookingStmt);
    mysqli_stmt_close($updateRoleStmt);
    
} else {
    echo "Form submission error.";
}
?>
