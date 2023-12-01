<?php 
             // Variables
$title = "PHP COurse";
$num = 40;
$float = 3.14;
$bool = true;   // boolean
$nothing = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo $title . "home page" ?></title>
</head>
<body>
    <?php echo "<h1>hello world</h1>";
    echo "<h2>welcom to $title</h2>";
    echo $num;
    echo "<br>";
    echo $float;
    echo "<br>";
    echo $bool;
    ?>

</body>
</html>