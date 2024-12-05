<?php
  $con=mysqli_connect("localhost","root","","signupforms");
  // Check connection
  if (!$con) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>