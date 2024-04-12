<?php
    include '../settings/connection.php';

    

    if (isset($_POST["register"])) {
      
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $birthdate = $_POST['dob'];
        $phoneNum = $_POST['number'];
        $emailName = $_POST['email']; 
        $Address = $_POST['address'];
        $password_ = $_POST['password'];
        $confirmPassword = $_POST['retype_password'];
        
        $hashed_password = password_hash($password_, PASSWORD_DEFAULT); 

       
        $sql_ = "INSERT INTO People (RoleID, FirstName, LastName, EmailAddress, DOB,Address,PhoneNumber, Password) 
        VALUES (3, '$firstName', '$lastName' ,'$emailName', '$birthdate','$Address','$phoneNum','$hashed_password' )";

        if (mysqli_query($conn, $sql_)) {
            header("Location: ../view/index.php");
            exit();
        } 
        else {
            echo "Error; " . mysqli_error($conn); 
        }


    } else {
        //echo "Form submission error.";
    }
?>
