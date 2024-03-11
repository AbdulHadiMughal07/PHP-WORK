<?php

for($i=1; $i<=10; $i++)
    echo "<br> 10 x $i = " .$i*10;

    echo"<br>";
    // 2nd Method
    $number = 18;
    for ($x=1; $x<=10 ; $x++) { 
        echo "<br> 18 x $x = " .$x*$number;
    };

    // echo"<br> ";
    // echo"<br> *";
    // echo"<br> **";
    // echo"<br> ***";
    // echo"<br> ****";
    // echo"<br> *****";
    // echo"<br> ******";
    // echo"<br> *******";
    echo "<br>";
    for($e=0; $e<=10; $e++){
        for($n=0; $n<=$e; $n++){
            echo "*";
        }
        echo "<br>";
    };

    // WHILE LOOP
    $tree = 10;
    while($tree<=15){
        echo "<br> This Is While Loop ! " .$tree;
        $tree++;
    }

    echo "<br>";

    //DO WHILE LOOP
    $file = 90;
    do{
        echo "<br> This Is Do While Loop ! " .$file;
        $file++;
    }while($file<=93);

    // Even & Odd
    for($myNumber=0; $myNumber<=50; $myNumber++){
        if($myNumber%2==0){
            echo "<br> This Number Is Even" .$myNumber;
        }
        else{
            echo "This Number Is Odd" .$myNumber;
        }
    }
    

?>