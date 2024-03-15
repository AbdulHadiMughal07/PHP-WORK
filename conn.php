<?php

    include("config/connection.php");

    $sql = "insert into user_data (name , email , password) values
    ('zaid', 'zaid@gmail.com', 'abc5252')"; 
    $result = $conn->query($sql);

    if($result == true){
        echo "SucssesFULLY !";
    }
    else{
        echo "Not SucssesFULLY !";
    }

?>