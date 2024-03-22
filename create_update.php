<?php

include("config/one.php");

$myId = $_GET['id'];
$sql = "update users set name = 'Nadir' where id = $myId";
$result = mysqli_query($conn , $sql);

if($result == true){
    echo "<br> Your Record Has Been Updated";
}
else{
    echo "<br> No Record Has Been Updated";
}

?>