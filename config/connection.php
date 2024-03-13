<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbName = "f2_1";

    $conn = new mysqli($server , $username , $password , $dbName);

    if($conn == true){
        echo "<br> Connection Successful";
    }
    else{
        echo "Failed";
    }
?>