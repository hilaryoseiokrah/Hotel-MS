<?php
// Include the connection file
// include '../Settings/connection.php';

// Function to get bookings
function getBookings()
{
    global $conn;

    // Check if $conn is null or not an instance of mysqli
    if (!$conn instanceof mysqli) {
        echo "Database connection is not properly initialized.";
        return;
    }

    // SQL query to retrieve bookings
    $bookings_sql = "SELECT * FROM room_booking";

    // Execute the query
    $result = $conn->query($bookings_sql);

    // Check if the query was successful
    if ($result) {
        // Check if there are any bookings
        if ($result->num_rows > 0) {
            // Loop through the results and display each booking
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . htmlspecialchars($row['bookingID']) . "</td>
                        <td>" . htmlspecialchars($row['userID']) . "</td>
                        <td>" . htmlspecialchars($row['roomID']) . "</td>
                        <td>" . htmlspecialchars($row['adult']) . "</td>
                        <td>" . htmlspecialchars($row['children']) . "</td>
                        <td>" . htmlspecialchars($row['checkInDate']) . "</td>
                        <td>" . htmlspecialchars($row['checkOutDate']) . "</td>
                        <td>
                                <a href='edit_booking_view.php?id=" . $row['bookingID'] . "'>
                                    <button class='btn btn-sm btn-primary'>
                                    <i class='bi bi-pencil-fill'></i>Edit</button>
                                </a>
                            </td>
                            <td>
                               <a href ='../../action/delete_booking_action.php?id=".$row['bookingID']."'>
                                    <button class='btn btn-danger btn-sm delete-btn'>
                                        <i class='bi bi-trash3-fill'></i>Delete
                                    </button>
                                </a>
                            </td>
                        
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No bookings found</td></tr>";
        }
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
