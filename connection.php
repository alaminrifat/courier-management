<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "courier_management";

    $conn = new mysqli($host,$user,$password,$db);

    if($conn->connect_error){
        die("Connection error: " . $conn->connect_error);
    }

?>