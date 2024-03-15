<?php

include("config/connection.php");

$sql = "delete From user_data where id = 2";
$result = $conn->query($sql);


if($result == true){
    echo "Your Recorad Has Been Update !";
}
else{
    echo "No Recorad Has Been Update !";
}
?>