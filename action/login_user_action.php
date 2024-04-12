<?php

session_start();
include '../settings/core.php';
include "../settings/connection.php";

function redirectBasedOnRole($userRoleID)
{
    switch ($userRoleID) {
        case 1:
            // Super Admin
            header("Location: ../admin/view/admin_dashboard.php");
            exit();
        case 2:
            // Admin
            header("Location: ../view/home.php");
            exit();
        case 3:
            // Standard user
            header("Location: ../view/home.php");
            exit();
        default:
            // Unrecognized Role
            exit("Access Denied: Your user role is unrecognized.");
    }
}

if (isset($_POST['login'])) {
    global $conn;
    // Retrieve email and password from form
    $emailName = $_POST['email'];
    $password_ = $_POST['password'];

    // Prepare SQL statement
    $sql = "SELECT * FROM people WHERE EmailAddress = ?";

    // Prepare the statement
    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Bind parameters and execute
        mysqli_stmt_bind_param($stmt, "s", $emailName);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        // Fetch result
        if ($row = mysqli_fetch_assoc($result)) {
            // Verify password
            if (password_verify($password_, $row["Password"])) {
                // Set session variables
                $_SESSION['userID'] = $row['UserID'];
                $_SESSION['roleID'] = $row['RoleID'];

                // Redirect based on role
                redirectBasedOnRole($row['RoleID']);
            } else {
                // Handle incorrect password
                echo 'Login failed - Invalid Credentials!';
            }
        } 
        else {
            // Handle no user found
            echo 'Login failed - User not found';
        }
        // Close statement
        mysqli_stmt_close($stmt);
    } else {
        // Handle query preparation failure
        echo 'Login failed - Error preparing query';
    }
} 
else {
    echo "Login submission failed";
}

?>
