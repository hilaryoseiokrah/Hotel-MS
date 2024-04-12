<?php
include_once '../../Settings/connection.php'; // Ensure this path is correct

function get_number_of_room_bookings() {
    global $conn;
    $sql = "SELECT COUNT(*) AS total_bookings FROM room_booking";
    $result = $conn->query($sql);
    if ($result) {
        $row = $result->fetch_assoc();
        return $row['total_bookings'];
    } else {
        echo "Error: " . $conn->error;
        return 0;
    }
}

function get_number_of_service_bookings() {
    global $conn;
    $sql = "SELECT COUNT(*) AS total_services FROM servicesbooking"; // Adjust table name as necessary
    $result = $conn->query($sql);
    if ($result) {
        $row = $result->fetch_assoc();
        return $row['total_services'];
    } else {
        echo "Error: " . $conn->error;
        return 0;
    }
}

function get_number_of_rooms() {
    global $conn;
    $sql = "SELECT COUNT(*) AS total_rooms FROM room"; // Adjust table name as necessary
    $result = $conn->query($sql);
    if ($result) {
        $row = $result->fetch_assoc();
        return $row['total_rooms'];
    } else {
        echo "Error: " . $conn->error;
        return 0;
    }
}
function get_guest_bookings_count() {
    global $conn;
    // Adjusted query to count guest bookings
    $guest_bookings_query = "SELECT COUNT(*) AS guest_count FROM People WHERE RoleID = 2";

    $result = $conn->query($guest_bookings_query);

    if ($result) {
        $row = $result->fetch_assoc();
        return $row['guest_count'];
    } else {
        return 0; // Return 0 if query fails or no guests found
    }
}

// Example usage
// echo "Number of Room Bookings: " . get_number_of_room_bookings() . "<br>";
// echo "Number of Service Bookings: " . get_number_of_service_bookings() . "<br>";
// echo "Number of Rooms: " . get_number_of_rooms() . "<br>";
?>
