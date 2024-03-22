<?php

include("config/one.php");

$myId = $_GET['id'];
$sql = "delete from users where id = $myId";
$result = mysqli_query($conn , $sql);

if($result == true){
    echo "<br> Your Record Has Been Deleted";
}
else{
    echo "<br> No Record Has Been Deleted";
}

?>