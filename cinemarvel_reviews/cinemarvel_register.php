<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "cinemarvel_reviews";

//Creating connection

$link = mysqli_connect($servername, $username, $password, $db);

// Checking connection

if (!$conn){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

