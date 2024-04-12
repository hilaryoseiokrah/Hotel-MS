<?php
define("myserver","localhost");
define("username","root");
define("password","");
define("database","hotel");

$conn = new mysqli(myserver, username, password,database);

if($conn ->connect_errno){
    echo "Could not connect to my SQL" .$conn -> connect_error;
    die();
}




?>