<?php
// include '../Settings/connection.php';

function getRooms()
{
    global $conn;

    // Check if $conn is null or not an instance of mysqli
    if (!$conn instanceof mysqli) {
        echo "Database connection is not properly initialized.";
        return;
    }

    $rooms_sql = "SELECT roomID, roomName, price, quantity, adult, children FROM room";

    $result = $conn->query($rooms_sql);

    if ($result) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                            <td>*</td>
                            <td>" . htmlspecialchars($row['roomName']) . "</td>
                            <td>" . $row['price'] . "</td>
                            <td>" . $row['quantity'] . "</td>
                            <td>" . $row['adult'] . "</td>
                            <td>" . $row['children'] . "</td>
                            <td>
                                <a href='edit_room_view.php?id=" . $row['roomID'] . "'>
                                    <button class='btn btn-sm btn-primary'>
                                    <i class='bi bi-pencil-fill'></i>Edit</button>
                                </a>
                            </td>
                            <td>
                               <a href ='../../action/delete_room.php?id=".$row['roomID']."'>
                                    <button class='btn btn-danger btn-sm delete-btn'>
                                        <i class='bi bi-trash3-fill'></i>Delete
                                    </button>
                                </a>
                            </td>

                    </tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No rooms found</td></tr>";
        }
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
