<?php
// Calculator
$number1=$_GET["number1"];
$number2=$_GET["number2"];
$op = $_GET["op"];

if(empty($number1)){
    $result = "first number is empty";
}else if(empty($number2)){
    $result = "second number is empty";
}else if (empty($op)){
    $result = "oeratins is empty";
}else {
if($op==="+"){
    $result=$number1+$number2;
}else if ($op==="-"){
    $result=$number1-$number2;
}else if($op==="*"){
    $result=$number1*$number2;
}else if($op==="/"){
    $result=$number1/$number2;
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="calc.php" method="GET" class="form">
            <div>
                <label for="">Enter first number :</label>
                <input type="number" id="num1" name="number1" class="form-control">
            </div>

            <div>
                <label for="">Enter second number :</label>
                <input type="number" id="num2" name="number2" class="form-control">
            </div>
            <br>
            <div>
                <label for="">the opration:</label>
                <input type="text" name="op" class="form-control">
            </div>

            <div class="alert alert-success">
                <?php echo $result; ?>
            </div>
            <br>
            
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
</body>
</html>