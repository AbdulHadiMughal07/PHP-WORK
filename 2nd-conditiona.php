<?php

$age = 30;
 if($age >=18){
    echo "<br> You Can Drive A Car !";
 }
 else{
    echo "You Can Not Drive A Car !";
 };

 $age = 30;
 $isCnic = true;
 if($age >=18){
    echo "<br> You Can Drive A Car !";
    if($isCnic === true){
        echo "<br> You Can Take My Car !";
    }
    else{
        echo "<br> Just Parchase Your Car !";
    }
 }
 else{
    echo "You Can Not Drive A Car !";
 }

?>