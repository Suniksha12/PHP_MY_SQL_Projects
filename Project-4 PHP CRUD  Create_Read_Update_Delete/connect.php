<?php

$con = new mysqli('localhost','root','','signupforms');

if(!$con){
    die(mysqli_error($con));
}

?>