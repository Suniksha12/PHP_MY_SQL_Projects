<?php
   include('connect.php');

   $username=$_POST['username'];
   $mobile=$_POST['mobile'];
   $password=$_POST['password'];
   $std=$_POST['std'];

   $sql = "SELECT * FROM `userdata` WHERE username='$username' and mobile='$mobile' and password='$password' and standard='$std'";

   $result = mysqli_query($con,$sql);
   if($mysqli_num_rows($result)>0){
     
   } else{
     echo '<script>
          alert("Invalid Credentials");
          window.location="../";
       </script>';
   }
?>