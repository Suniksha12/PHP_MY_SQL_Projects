<?php 
  if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';

    if(isset($_POST['signup'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        $sql = "INSERT INTO `rdata` (username,password) values('$username','$password')";
        $result = mysqli_query($con,$sql);
        if($result){
            echo "Data inserted successfully";
        } else {
            die(mysqli_error($con));
        }
    }
  }
?>
