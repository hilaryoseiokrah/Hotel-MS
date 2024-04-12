<?php
session_start();
include_once '../settings/connection.php'; // Adjust the path as necessary

// Assuming the user's ID is stored in $_SESSION['userID'] after login
$userID = $_SESSION['userID'] ?? 0; // 0 as default if not logged in

// Fetch user details
$userDetails = getUserDetails($conn, $userID);
$roomBookings = getUserRoomBookings($conn, $userID);
$serviceBookings = getUserServiceBookings($conn, $userID);

function getUserDetails($conn, $userID) {
    $stmt = $conn->prepare("SELECT FirstName, LastName FROM People WHERE UserID = ?");
    $stmt->bind_param("i", $userID);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc(); // Fetch one row
}

function getUserRoomBookings($conn, $userID) {
    $stmt = $conn->prepare("SELECT * FROM room_booking WHERE userID = ?");
    $stmt->bind_param("i", $userID);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_all(MYSQLI_ASSOC); // Fetch all bookings
}

function getUserServiceBookings($conn, $userID) {
    $stmt = $conn->prepare("SELECT * FROM servicesbooking WHERE userID = ?");
    $stmt->bind_param("i", $userID);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_all(MYSQLI_ASSOC); // Fetch all services
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <?php include '../include/links.php'; ?>
    <!-- Include additional CSS if needed -->
</head>
<body>
    <?php
    session_start();
    include '../include/header_home.php';
    include '../settings/connection.php'; // Your connection script

    $userID = $_SESSION['userID']; // or your user identification mechanism
    $query = "SELECT FirstName, LastName, ProfilePicture FROM People WHERE UserID = ?";
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("i", $userID);
        $stmt->execute();
        $result = $stmt->get_result();
        $userDetails = $result->fetch_assoc();
        $stmt->close();
    }
    ?>

    <div class="user-profile">
        <h2>User Profile</h2>
        <div class="user-image">
            <img src="<?php echo $userDetails['ProfilePicture'] ? 'path/to/uploads/'.$userDetails['ProfilePicture'] : 'path/to/default_image.jpg'; ?>" alt="Profile">
        </div>
        <p>Name: <?php echo htmlspecialchars($userDetails['FirstName'] . ' ' . $userDetails['LastName']); ?></p>

        <!-- Image Upload Form -->
        <!-- <form action="upload_profile_picture.php" method="post" enctype="multipart/form-data">
            <input type="file" name="profile_picture">
            <button type="submit" name="upload_profile_picture">Upload</button>
        </form> -->
    </div>

    <!-- Rest of your HTML code for bookings and services -->
</body>
</html>
