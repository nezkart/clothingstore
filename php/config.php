<?php
$host = "localhost";
$userName = "root";
$password = "";
$dbName = "clothingstore";
// connect to mysql
$conn = new mysqli($host, $userName, $password, $dbName);
// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
