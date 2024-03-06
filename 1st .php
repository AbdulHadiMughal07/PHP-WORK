<?php

    $name = "ALEX"; // String
    $age = 19;      // Number
    $isCnic = true; // Boolen
    $marks = 85.4;  //Floot

    // Prnit 1st Method
    echo "$name";

    // Prnit 2nd Method
    echo "<br> $age <br> $isCnic <br> $marks";

    // ARITHMATIC OPERATIONS
    $a = 20;
    $b = 10;
    $c = $a + $b ;
    $d = $a - $b ;
    $e = $a * $b ;
    $f = $a / $b ;
    $g = $a % $b ;
    echo "<br> The Sum Of $a + $b is : " .$c;
    echo "<br> The SuB Of $a - $b is : " .$d;
    echo "<br> The Multiply Of $a * $b is : " .$e;
    echo "<br> The Div Of $a / $b is : " .$f;
    echo "<br> The Modolos Of $a % $b is : " .$g;

    // PRE & POST INCREMENTS
    // Post Incremen
    $apple = "40";
    echo "<br> The Increment Of This Number Is : " .$apple++;
    echo "<br>" .$apple;

    echo "<br> The Increment Of This Number Is : " .++$apple;



    // LOGIC TASK
    // initial number = 209
    // 207
    // 215
    // 200
    // 105
    $ball = 209;
    echo "<br> The Increment Of This Number Is : " .$ball--;
    echo "<br>" .--$ball;
    echo "<br> The Increment Of This Number Is : " .$ball++;
    echo "<br>" .$ball+7;
    echo "<br> The Increment Of This Number Is : " .$ball-8;
    echo "<br> The Increment Of This Number Is : " .$ball-103;
?>