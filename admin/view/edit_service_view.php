<?php
// include "../../Settings/core.php";
include '../../action/get_a_service.php';
;
// is_login_user();

if (isset($_GET['id'])) {
    global $conn;
    $stored_id = $_GET['id'];
    $displayed_output = get_a_service($conn);
} else {
    header('Location: ../view/services.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Service</title>
    <?php require('../inc/links.php') ?>
</head>

<body>

    <?php require('../inc/header.php'); ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3 ">
                <div class="card border-0 shadow" style="max-width: 350px;margin:auto">
                    <div class="card-body">
                        <form action="../../action/edit_service.php?id=<?php echo $stored_id; ?>" method="POST">
                            <h2 class="h-font text-danger">Edit Service</h2>
                            <label for="editedServiceName">Service Name:</label><br>
                            <input type="text" name="editedServiceName" id="editedServiceName" placeholder="Enter your new Service Name:" value="<?php echo isset($displayed_output['ServiceName']) ? htmlspecialchars($displayed_output['ServiceName']) : ''; ?>"><br>
                            <button type="submit" name="edit_service" class="custom-bg text-light">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>