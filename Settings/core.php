<?php
session_start();

function is_login_user(){
    if (!isset($_SESSION['userID'])) 
    {
        header( "Location: ../view/index.php" );
        die();
    }
}

function getUserRoleID() {
    if (isset($_SESSION['RoleID'])) {
        return $_SESSION['RoleID'];
    } 
    else {
        // Redirect to login page if role ID is not set
        header("Location: ../view/index.php");
        exit();
    }
}
?>