<?php

    include("config/connection.php");

    $sql = "update users set name = 'Zeeshan' where id = 7";
    $result = mysqli_query($conn , $sql);


?>