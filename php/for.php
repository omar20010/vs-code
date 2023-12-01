<?php
    for($i=0;$i<5;$i++){
         echo $i + 1 ."- hello<br>";
    }
    $family = ["father","mother","bother"];

    for($i =0;$i<count($family);$i++){
    echo "<h1>" . $family[$i] . "</h1>";
    }
    foreach($family as $member){
    echo "<h1>" . $member . "</h1>";

    }





?>