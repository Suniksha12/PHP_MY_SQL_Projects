<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection parameters
$host = 'localhost';
$username = 'root'; // Change to your MySQL username
$password = ''; // Change to your MySQL password
$database = 'signupforms';

// Establishing the connection
$con = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$con) {
    die('Connection failed: ' . mysqli_connect_error());
}
?>