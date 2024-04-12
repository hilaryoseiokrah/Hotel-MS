<?php
// include "../../Settings/core.php";
include "../../action/get_a_room.php";

// is_login_user();

if (isset($_GET['id'])) {
    global $conn;
    $stored_id = $_GET['id'];
    $displayed_output = get_a_room($conn);
} else {
    header('Location: ../view/rooms.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Room</title>
    <?php require('../inc/links.php') ?>
</head>

<body>

    <?php require('../inc/header.php'); ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3 ">
                <div class="card border-0 shadow" style="max-width: 350px;margin:auto">
                    <div class="card-body">
                        <form action="../../action/edit_room.php?id=<?php echo $stored_id; ?>" method="POST">
                            <h2 class="h-font text-danger">Edit Room</h2>
                            <label for="editedCRoomName">Room Name:</label><br>
                            <input type="text" name="editedCRoomName" id="editedCRoomName" placeholder="Enter your new Room Name" value="<?php echo isset($displayed_output['name']) ? htmlspecialchars($displayed_output['name']) : ''; ?>"><br>

                            <label for="editedPrice">Price:</label><br>
                            <input type="number" name="editedPrice" id="editedPrice" placeholder="Enter your new Price" value="<?php echo isset($displayed_output['price']) ? htmlspecialchars($displayed_output['price']) : ''; ?>"><br>

                            <label for="editedquantity">Quantity:</label><br>
                            <input type="number" name="editedquantity" id="editedquantity" placeholder="Enter your new quantity" value="<?php echo isset($displayed_output['quantity']) ? htmlspecialchars($displayed_output['quantity']) : ''; ?>"><br>

                            <label for="editedAdult">Adult:</label><br>
                            <input type="number" name="editedAdult" id="editedAdult" placeholder="Enter your new adult number" value="<?php echo isset($displayed_output['adult']) ? htmlspecialchars($displayed_output['adult']) : ''; ?>"><br>

                            <label for="editedChild">Children:</label><br>
                            <input type="number" name="editedChild" id="editedChild" placeholder="Enter your new children number" value="<?php echo isset($displayed_output['children']) ? htmlspecialchars($displayed_output['children']) : ''; ?>"><br>

                            <button type="submit" name="edit_submit" class="custom-bg text-light">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>





</body>

</html>

<!-- <script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('editChoreForm');
    form.addEventListener('submit', function (event) {
        const choreNameInput = document.getElementById('editedChoreName');
        if (choreNameInput.value.trim() === '') {
            event.preventDefault(); // Prevent the form from submitting
            alert('Please enter a new Chore name.');
            choreNameInput.focus(); // Optionally, bring focus to the input field
        }
    });
});

</script> -->