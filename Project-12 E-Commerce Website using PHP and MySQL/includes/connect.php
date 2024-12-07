<?php
   $host = 'localhost';
   $username = 'root';
   $password = '';
   $database = 'signupforms';

   $con = mysqli_connect($host, $username, $password, $database);

   if (!$con) {
       die('Could not connect: ' . mysqli_connect_error());
   }
?>