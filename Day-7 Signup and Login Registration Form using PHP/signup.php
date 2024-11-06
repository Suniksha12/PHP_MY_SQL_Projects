<?php 
  if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';

    if(isset($_POST['signup'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        // $sql = "INSERT INTO `rdata` (username,password) values('$username','$password')";
        // $result = mysqli_query($con,$sql);
        // if($result){
        //     echo "Data inserted successfully";
        // } else {
        //     die(mysqli_error($con));
        // }
       $sql = "SELECT * FROM `data` WHERE username='$username'";
       $result = mysqli_query($con,$sql);
       if($result){
        $num = mysqli_num_rows($result);
        if($num>0){
            echo "User already exist";
        } else {
            if($password === $cpassword){
            $sql = "INSERT INTO `data` (username,password) values('$username','$password')";
            $result = mysqli_query($con,$sql);
            if($result){
                echo "Signup successfully";
            } 
             }else {
                echo "Password did'nt match";
            }
        }
       }
    }
  }
?>
