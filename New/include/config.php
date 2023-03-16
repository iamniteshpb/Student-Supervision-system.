<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "supervision system";

// Create connection
$con = mysqli_connect($serverName, $userName, $password, $dbName);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>