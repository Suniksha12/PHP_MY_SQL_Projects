<?php 
  $user =0;
  $success =0;
  $match = 0;
  if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';

    if(isset($_POST['signup'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $cpassword = md5($_POST['cpassword']);

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
            // echo "User already exist";
            $user = 1;
        } else {
            if($password === $cpassword){
            $sql = "INSERT INTO `data` (username,password) values('$username','$password')";
            $result = mysqli_query($con,$sql);
            if($result){
                // echo "Signup successfully";
                $success=1;
            } 
             }else {
                // echo "Password did'nt match";
                $match = 1;
            }
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
    <title>Sign up Page</title>
</head>
<body>
    <?php 
      if($user){
        echo "<div class='alert alert-danger' role='alert'> User Already Exist!! </div>";  
      } else {
        if($success){
            echo "<div class='alert alert-success' role='alert'> Signup Successfully!! </div>";
        } else {
        if($match){
            echo "<div class='alert alert-info' role='alert'> Password did'nt match!! </div>";
        }
    }  
      }
    ?>
</body>
</html>
