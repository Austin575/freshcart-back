<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "user_db";



$conn = new mysqli('127.0.0.1', 'root', '', 'user_db', 3307); 


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>