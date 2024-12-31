<?php
   if(isset($_GET['delete_category'])){
      $delete_category=$_GET['delete_category'];
    //   echo $delete_category;
       $delete_query="DELETE FROM `categories` WHERE category_id=$delete_category";
       $result =  mysqli_query($con,$delete_query);
       
   }
?>