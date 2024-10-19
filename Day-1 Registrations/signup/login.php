<!--Registration Form - 1) Signup 
                        2) Login 
                        3) Welcome
                        4) Log Out
                        
    1) Username , password , Signup
       Condition : if user already exist dont insert data 
                   if user doent exist then signup successfully
                   
    2) Username , password , Login Button
       Condition : if username and password match the login successfully and land to welcome page
                   if username and passowrd doesnt match then according to the data return invalid credentials.-->

<?php

   $login =0;
   $invalid=0;
  if($_SERVER['REQUEST_METHOD']=='POST'){
   include 'connect.php';
   $username = $_POST['username'];
   $password = $_POST['password'];

      $sql = "select * from `registration` where username='$username' and password='$password'";

      $result = mysqli_query($con,$sql);
      if($result){
         $num = mysqli_num_rows($result);
         if($num>0){
            $login=1;
            session_start();
            $_SESSION['username']=$username;
            header('location:home.php');
         } else {
            $invalid=1;
         }
      }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login up Page</title>
  </head>
  <body>
  <?php 
    if($login){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
         <strong>Success </strong>You are successfully logged in!
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';
    }
   ?>
   <?php 
    if($invalid){
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>OH no sorry</strong>Enter your credentials correctly!
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';
    }
   ?>
   <h1 class="text-center">Login to our Website</h1>
    <div class="container mt-5">
      <form action="login.php" method="post">
      <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Name</label>
         <input type="text" class="form-control" placeholder="Enter Your Username" name="username">
      </div>
      <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Password</label>
         <input type="password" class="form-control" placeholder="Enter your Password" name="password">
      </div>
      <button type="submit" class="btn btn-primary w-100">Login</button>
      </form>
    </div>

    
  </body>
</html>