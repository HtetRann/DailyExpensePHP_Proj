<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "expense_management";

// $conn = mysqli_connect($dbhost , $dbuser , $dbpass , $dbname);
$conn = mysqli_connect("localhost", "root", "", "expense_management", "3307");
// $conn = new mysqli($dbhost , $dbuser , $dbpass , $dbname);

if($conn->connect_error){
    die("Connection failed: " . $connection->connect_error);
}
?>