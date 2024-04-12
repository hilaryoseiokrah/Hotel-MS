<?php
    require('../../Settings/connection.php');
    require('../../include/essentials.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <?php require('../inc/links.php') ?>

    <style>
        div.login-form{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            width: 400px;
        }


    </style>
</head>

<body class="bg-light">

    

    <div class="login-form text-center bg-white rounded shadow overflow-none">
        <form action=""method="POST">
            <div class="p-4" >
                <h4 class="custom-bg text-white py-3">ADMIN LOGIN PANEL</h4>
                <div class="mb-3">
                    <input name ="email" required type="email" class="form-control shadow-none text-center" placeholder="Admin's Name">
                </div>
                <div class="mb-3">
                    <input name="password" required type="password" class="form-control shadow-none text-center" placeholder="Password">
                </div>
                <button name="login" class="btn text-white custom-bg shadow-none">LOGIN</button>
            </div>
        </form>
    </div>

    

    <?php require('../inc/scripts.php') ?>
</body>

</html>