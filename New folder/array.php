<form action="array.php" class="GET">
    <input type="text" name="xname">
    <input type="submit">
</form>

<?php
$family = array("father", "mother", "me");
$family = ["father", "mother", "me"];

echo "<h2>$family[0]</h2>";
$family[2] = "brother";
$family[3] = "me";
$family[4] = "sister";
for ($i = 0; $i < count($family); $i++) {
    echo "$family[$i] ";
}
echo "<br><br><br>";




$xname = $_GET["xname"];


$score = [
    "omar" => [90, "G"],
    "badr" => [80, "S"],
    "azzam" => [40, "V"]
];
echo "Score: " . $score[$xname][0] . "<br>";
echo "Grade: " . $score[$xname][1] . "<br>";


?>