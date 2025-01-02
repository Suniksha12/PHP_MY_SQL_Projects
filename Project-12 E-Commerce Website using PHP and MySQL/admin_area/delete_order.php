<?php
   if(isset($_GET['delete_order'])){
      $delete_order=$_GET['delete_order'];
    //   echo $delete_brand;
       $delete_query="DELETE FROM `user_orders` WHERE order_id=$delete_order";
       $result =  mysqli_query($con,$delete_query);
       if($result){
          echo "<script>alert('Order is deleted sucessfully')</script>";
          echo "<script>window.open('./index.php?list_orders','_self')</script>";
       }
   }
?>