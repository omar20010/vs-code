<form action="array.php" class="GET">
    <input type="text" name="xname">
    <input type="submit">
</form>

<?php 
$family = array("father","mother","me");
$family = ["father","mother","me"]; //thet or that

echo "<h1>$family[0]</h1>";
$family[2]="ove";
$family[3]="sister";

echo "<br><br>";




// $family = [
//     "Designer" => "omar",
//     "Programmer" => "anas",
//     "Gamer" => "ali"
// ];
// echo $family["Gamer"];

$xname = $_GET["xname"];
// echo $family[$xname]; 


$score = [
    "omar" => [90,"A"],
    "anas" => [80,"B"],
    "ali" =>[40,"D"]
];
echo "Score: ".$score[$xname][0]."<br>";
echo "Grade: ".$score[$xname][1]."<br>";


?>