<?php
    $login = 0; 
    $invalid = 0;
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
                // echo "login Successfull";
                $login = 1;
            } else {
                // echo " invalid credentials ";
                $invalid = 1;
            }
        }
    }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- styling CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login Page</title>
</head>
<body>
    <?php 
      if($login){
        echo "<div class='alert alert-success' role='alert'> Login Successfull </div>";  
      } else {
        if($invalid){
            echo "<div class='alert alert-danger' role='alert'> Invalid Credentials </div>";
        }
      }
    ?>
</body>
</html>