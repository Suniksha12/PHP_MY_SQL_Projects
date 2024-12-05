<?php
   session_start();
   include('connect.php');
   $votes = $_POST['groupvotes'];
   $totalvotes=$votes+1;

   $gid=$_POST['groupid'];
   $uid=$_SESSION['id'];

   $updatevotes=mysqli_query($con,"update `userdata` set votes='$totalvotes' where id='$gid' ");

   $updatevotes=mysqli_query($con,"update `userdata` set status = 1 where id='$uid'");

?>