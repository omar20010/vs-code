<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission and database interaction here


// Insert user data into the database
$sql = "INSERT INTO Users (first_name, last_name, username, birthdate, password) VALUES ('$fname', '$lname', '$username', '$birthdate', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




$conn->close();
?>
?>