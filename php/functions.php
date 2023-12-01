<?php 

    function hello($user){
        if (!empty($user))
        echo "<h1>Hello ".$user."</h1>";
        else{
        echo "<h1>Good Bye</h1>";

        }
    }
    hello("azzam");
    hello("omar");
    function add($x,$y){
        return $x+$y;
    }
    echo "<h1>".add(100,200)."</h1>";

?>