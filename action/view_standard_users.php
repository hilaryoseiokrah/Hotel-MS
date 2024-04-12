<?php
include "../Settings/connection.php";

function get_standard_users($conn){

        $standard_users_query = "SELECT p.UserID, p.EmailAddress, p.Address, 
                                p.PhoneNumber, p.DOB, p.FirstName, p.LastName
                                 FROM People as p
                                 WHERE p.RoleID = 3";
    
        $result = $conn->query($standard_users_query);
    
        if ($result->num_rows > 0) {
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            return [];
        }
    }
// print_r(get_standard_users($conn));
?>
