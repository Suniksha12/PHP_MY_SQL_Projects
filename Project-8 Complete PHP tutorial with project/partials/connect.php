<?php
$con = new mysqli("localhost", "root", "", "signupforms");

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>