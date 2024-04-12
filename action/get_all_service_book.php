  
  
<?php
    include "../Settings/connection.php";
    

    function get_all_service_bookings($conn){
        $service_bookings = "SELECT bookingID, userID,date,time,service FROM servicesbooking";
        $result = $conn->query($service_bookings);

        if ($result->num_rows > 0) {
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
          
    }

  
// print_r(get_all_service_bookings( $conn))
?>
