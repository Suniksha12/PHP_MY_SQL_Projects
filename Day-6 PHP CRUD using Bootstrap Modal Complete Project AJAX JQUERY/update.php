<?php
   include 'connect.php';

   if(isset($_POST['updateid'])){
       $user_id = $_POST['updateid'];
       $sql = "SELECT * FROM `crud` WHERE id=$user_id";

       $result = mysqli_query($con,$sql);
   }
?>