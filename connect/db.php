<?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "nolly";

$conn = mysqli_connect($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset to UTF-8 (optional, but recommended)
$conn->set_charset("utf8mb4");

// You can use $conn for executing queries in other parts of your application
?>