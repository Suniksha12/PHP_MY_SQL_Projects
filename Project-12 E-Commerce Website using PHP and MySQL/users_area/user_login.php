<!-- connect file -->
<?php
    include_once("../includes/connect.php");
    include_once("../functions/common_function.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap css Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--FonT awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/brands.min.css" integrity="sha512-7rXIvd/xj1FnI2zKQjjXzDFxC4twqBByp8yxOgEQJs4C/aNzNyoQsOO7VxH0RgYNhbAYLJLwzqslaP50KTTHIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Css link -->
    <link rel="stylesheet" href="../css/style.css" class="css">
    <title>Ecommerece Website-User Login</title>
</head>

<body>
    <div class="container-fluid my-3">
        <h2 class="text-center">
            New Login
        </h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post">
                    <!--username Field-->
                    <div class="form-outline md-4">
                        <label for="user_username" class="form-label">Username</label>
                        <input type="text" id="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required name="user_username">
                    </div>

                    <!--password Field-->
                    <div class="form-outline md-4">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" id="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required name="user_password">
                    </div>

                    <div class="mt-4 pt-2">
                        <input type="submit" value="Login" class="bg-info py-2 px-3 border-0" name="user_login">
                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account ?<a href="user_registration.php" class="text-danger"> Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!--script.js-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>

<?php
    if(isset($_POST['user_login'])){
        $user_username = $_POST['user_username'];
        $user_password = $_POST['user_password'];
        $select_query = "SELECT * FROM `user_table` WHERE username='$user_username'";
        $result=mysqli_query($con,$select_query);
        $row_count = mysqli_num_rows($result);
        $row_data=mysqli_fetch_assoc($result);
        $user_ip = getIPAddress();
        //cart items
        $select_query_cart="SELECT * FROM `card_details` WHERE ip_address='$user_ip'";
        $select_cart = mysqli_query($con,$select_query_cart);
        $row_count_cart = mysqli_num_rows($select_cart);
        if($row_count>0){
            $_SESSION['username']=$user_username; 
            if(password_verify($user_password,$row_data['user_password'])){
            //    echo "<script>alert('You have login successfully')</script>";
            if($row_count==1 && $row_count_cart==0){
                $_SESSION['username']=$user_username; 
                echo "<script>alert('Login successful')</script>";
                echo "<script>window.open('profile.php','_self')</script>";
            } else {
                $_SESSION['username']=$user_username; 
                echo "<script>alert('Login successful')</script>";
                echo "<script>window.open('payment.php','_self')</script>";
            }
            } else {
               echo "<script>alert('Invalid Credentials!!')</script>";
            }
        } else {
            echo "<script>alert('Invalid Credentials!!')</script>";
        }
    }
?>