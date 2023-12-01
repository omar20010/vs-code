<?php
    $number1 =20;
    $number2 =1;

    if($number1 > $number2){
        echo "the frist number is grater";
        if ($number1==20){
            echo "<br>";
            echo "the frist number $number1";
        }
    }else if ($number1 == $number2){
        echo "the frist number is equal the secound";
    }else{
        echo "the second number is greater";
    }

    echo "<br><br>";
    $username = "omar";
    $email = "omar.azzam@gmail.com";
 // == compares the value 
      // === Compares value and type together
      // !== isnt equal
    if($username === "omar" && $email==="omar.azzam@gmail.com"){
        echo "Welcome admin";
        echo  "<br>";
    }else if($username === "omar" || $email==="omar.azzam@gmail.com"){
        echo  "one of them";
        echo "<br<";
    }

?>