<?php
 
 // Arrays
  $fruits = ["Apple" , "Mango" , "Banana", "PineApple"];
  echo "$fruits[3]";

  echo "<br>";

  echo "<br> 👇All Array Data Print";
  //All Array Data Print
  foreach($fruits as $key){
    echo "<br>$key";
  };

  echo "<br>";

  echo "<br> 👇Associate Array";
  // Associate Array
  $employee = [
    "Dexter" => "Web-Developer",
    "Max" => "Graphic Desingner",
    "Alex" => "UI/UX Desingner"
  ];

  foreach($employee as $key => $value){
    echo "<br>$key : $value";
  };

  $number = [
    "*" => "*",
  ];

  foreach($number as $key => $value){
    for($e=0; $e<=25; $e++){
            for($num=0; $num<=$e; $num++){
                echo "*";
            }
            echo "<br>";
        };
  };


// //   for($e=0; $e<=10; $e++){
// //     for($n=0; $n<=$e; $n++){
// //         echo "*";
// //     }
// //     echo "<br>";
// // };

?>