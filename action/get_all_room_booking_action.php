<?php
    include "../Settings/connection.php";
    

    function get_all_room_bookings($conn){
        $room_bookings = "SELECT bookingID, userID,roomID,adult,children,checkInDate,checkOutDate FROM room_booking";
        $result = $conn->query($room_bookings);

        if ($result->num_rows > 0) {
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
          
    }

  

?>
