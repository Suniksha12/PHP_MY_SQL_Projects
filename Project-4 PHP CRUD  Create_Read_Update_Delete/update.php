<?php
include('connect.php');
$id = $_GET['updateid'];
$sql = "SELECT * FROM `crud` where id=$id";
$result = mysqli_query($con, $sql);
$row=mysqli_fetch_assoc($result);

$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];
if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql = "UPDATE `crud` SET id='$id',name='$name' , email='$email',mobile='$mobile', password='$password' WHERE id=$id";
    $result = mysqli_query($con, $sql);
    if($result){
        header('location:display.php');
    }else {
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style link="" rel="stylesheet"></style>

    <title>Crud Operation</title>
  </head>
  <body>
    <div class="container my-5">
       <form method="post">
        <div class="mb-3">
           <label>Name</label>
           <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value=<?php echo $name;?>>
        </div>
        <div class="mb-3">
           <label>Email</label>
           <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value=<?php echo $email;?>>
        </div>
        <div class="mb-3">
           <label>Mobile</label>
           <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off" value=<?php echo $mobile;?>>
        </div>
        <div class="mb-3">
           <label>Password</label>
           <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off" value=<?php echo $password;?>>
        </div>

      <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
    </div>

  </body>
</html>