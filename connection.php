<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "database";  
    $conn = new mysqli($servername, $username, $password, $db_name, 8111);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo "";
?>