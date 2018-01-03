<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = 'binance_api';

// Create Database connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check Databaseconnection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
