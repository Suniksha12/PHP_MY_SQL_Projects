<?php
   $con = new mysqli('localhost','root','','signupforms');
   if($con){
    echo "connection sucessfull";
   } else {
    die(mysqli_error($con));
   }
?>