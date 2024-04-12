
<?php
   
   

    function getServices()
    {
        global $conn;

        // Check if $conn is null or not an instance of mysqli
        if (!$conn instanceof mysqli) {
            echo "Database connection is not properly initialized.";
            return;
        }

        $services_sql = "SELECT ServiceID, ServiceName FROM services";

        $result = $conn->query($services_sql);

        if ($result) {
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            
                            <td>" . htmlspecialchars($row['ServiceID']) . "</td>
                            <td>" . htmlspecialchars($row['ServiceName']) . "</td>
                    
                            <td>
                                <a href='../view/edit_service_view.php?id=" . $row['ServiceID'] . "'>
                                    <button class='btn btn-sm btn-primary'>
                                        <i class='bi bi-pencil-fill'></i>Edit
                                    </button>
                                </a>
                            </td>
                            <td>
                                <a href='../../action/delete_service.php?id=" . $row['ServiceID'] . "'>
                                    <button class='btn btn-danger btn-sm delete-btn'>
                                        <i class='bi bi-trash3-fill'></i>Delete
                                    </button>
                                </a>
                            </td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No services found</td></tr>";
            }
        } else {
            echo "Error: " . $conn->error;
        }
    }
?>

