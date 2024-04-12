<?php
include "../Settings/connection.php";

function get_guest_bookings($conn)
{
    $guest_bookings_query = "SELECT p.UserID, p.EmailAddress, p.Address, 
    p.PhoneNumber, p.DOB, p.FirstName, p.LastName
     FROM People as p
     WHERE p.RoleID = 2";

    $result = $conn->query($guest_bookings_query);

    if ($result->num_rows > 0) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return [];
    }
}

// print_r(get_guest_bookings($conn));
