<?php
$string = "PHP COURSE";

echo "<h1>$string</h1>";
echo "<br>";
echo strtolower($string);
echo "<br>";
echo strtoupper($string);
echo "<br>";
echo strlen($string);
echo "<br>";// pring a letter
echo $string[0];
echo "<br>";// print the letter 0
echo str_replace("php","PHPHPHP",$string);
echo "<br>";// sub string
echo substr($string,9);

?>