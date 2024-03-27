<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbName = "form";

    $conn = new mysqli($server , $username , $password , $dbName);

    if($conn == true){
        echo "<br> Connection Successful !";
    }
    else{
        echo "Failed";
    }
?>