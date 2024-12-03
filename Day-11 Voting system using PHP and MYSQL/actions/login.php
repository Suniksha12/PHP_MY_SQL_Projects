<?php
   session_start();
   include('connect.php');

   $username=$_POST['username'];
   $mobile=$_POST['mobile'];
   $password=$_POST['password'];
   $std=$_POST['std'];

   $sql = "SELECT * FROM `userdata` WHERE username=? and mobile=? and password=? and standard=?";
   $stmt=mysqli_prepare($con,$sql);
   mysqli_stmt_bind_param($stmt,'ssss',$username,$mobile,$password,$std);
   mysqli_stmt_execute($stmt);
   $result = mysqli_stmt_get_result($stmt);
   if(mysqli_num_rows($result)>0){
      $sql = "SELECT username,photo,votes,id from `userdata` WHERE standard='group'";
      $resultgroup = mysqli_query($con,$sql);
      if(mysqli_num_rows($resultgroup)>0){
        $groups=mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);
        $_SESSION['groups']=$groups;

      }
      $data=mysqli_fetch_array($result);
      $_SESSION['id']=$data['id'];
      $_SESSION['status']=$data['status'];
      $_SESSION['data']=$data;

      echo '<script>
      window.location="../partials/dashboard.php";
   </script>';

   } else{
     echo '<script>
          alert("Invalid Credentials");
          window.location="../";
       </script>';
   }

   //closing the statment
   mysqli_stmt_close($stmt);
   mysqli_close($con);
?>