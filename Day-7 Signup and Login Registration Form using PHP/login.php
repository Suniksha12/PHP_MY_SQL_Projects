<?php 
   if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `rdata` WHERE username='$username' and password='$password'";
        $result = mysqli_query($con, $sql);
        if($result){
            $num = mysqli_num_rows($result);
            if($num>0){
                echo "login Successfull";
            } else {
                echo " invalid credentials ";
            }
        }
    }
   }
?>