<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "db";

$conn = mysqli_connect($host, $user, $pass, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$department = $_POST['department'];
$phone = $_POST['phone'];

$sql = "INSERT INTO reg (name, email, age, department, phone) 
        VALUES ('$name', '$email', $age, '$department', '$phone')";

if (mysqli_query($conn, $sql)) {
    echo "<h3 style='text-align:center;'>New Record Added Successfully</h3>";
} else {
    echo "Error: " . mysqli_error($conn);
}


mysqli_close($conn);
?>
