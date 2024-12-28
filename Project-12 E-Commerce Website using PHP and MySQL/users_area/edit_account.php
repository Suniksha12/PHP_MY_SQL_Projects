<?php
   if(isset($_GET['edit_account'])){
      $user_session_name = $_SESSION['username'];
      $select_query="SELECT * FROM `user_table` WHERE username='$user_session_name'";
      $result_query=mysqli_query($con,$select_query);
      $row_fetch=mysqli_fetch_assoc($result_query);
      $user_id=$row_fetch['user_id'];
      $username=$row_fetch['username'];
      $user_email=$row_fetch['user_email'];
      $user_address=$row_fetch['user_address'];
      $user_mobile=$row_fetch['user_mobile'];
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit account</title>
</head>
<body>
    <h3 class="text-center text-success mb-4">Edit Account</h3>
    <form action="" method="post" enctype="multipart/form-data" class="text-center">
        <div class="form-outline mb-4">
            <input type="text" class="form-control w-50 m-auto" name="user_username">
        </div>
        <div class="form-outline mb-4">
            <input type="email" class="form-control w-50 m-auto" name="user_email">
        </div>
        <div class="form-outline mb-4 d-flex  w-50 m-auto">
            <input type="file" class="form-control" name="user_image">
            <img src="./user_images/<?php echo $user_image ?>" alt="" class="edit_image">
        </div>
        <div class="form-outline mb-4">
            <input type="text" class="form-control w-50 m-auto" name="user_address">
        </div>
        <div class="form-outline mb-4">
            <input type="text" class="form-control w-50 m-auto" name="user_mobile">
        </div>
        <input type="submit" value="Update" class="bg-info py-2 px-3 border-0" name="user_update">
    </form>
</body>
</html>