<!-- connect file -->
<?php
    session_start(); // Start the session
    include_once("../includes/connect.php");
    include_once("../functions/common_function.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap css Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--Font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/brands.min.css" integrity="sha512-7rXIvd/xj1FnI2zKQjjXzDFxC4twqBByp8yxOgEQJs4C/aNzNyoQsOO7VxH0RgYNhbAYLJLwzqslaP50KTTHIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Css link -->
    <link rel="stylesheet" href="../css/style.css" class="css">
    <title>Ecommerce Website - Check Out Page</title>
</head>

<body>
    <!--navbar-->
    <div class="container-fluid p-0">
        <!--first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/logo.png" alt="" class="logo">
                <a class="navbar-brand" href="#">Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../display_all.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user_registration.php">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php"><i class="bi bi-cart-fill"></i><sup><?php cart_item(); ?></sup>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Total Price: <?php total_cart_price(); ?>/-</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search" action="search_product.php" method="get">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
                        <input type="submit" value="search" class="btn btn-outline-light" name="search_data_product">
                    </form>
                </div>
            </div>
        </nav>

        <!-- second child-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <ul class="navbar-nav me-auto">
            <?php
                      if(!isset($_SESSION['username'])){
                         echo "<li class='nav-item'>
                                 <a class='nav-link' href='#'>Welcome Guest</a>
                              </li>";
                      }  else {
                         echo "<li class='nav-item'>
                                 <a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a>
                              </li>";
                      }

                     if(!isset($_SESSION['username'])){
                        echo "<li class='nav-item'>
                                <a class='nav-link' href='./users_area/user_login.php'>Login</a>
                             </li>";
                     }  else {
                        echo "<li class='nav-item'>
                                <a class='nav-link' href='./users_area/logout.php'>Logout</a>
                             </li>";
                     }
                ?>
            </ul>
        </nav>

        <!--Third child-->
        <div class="bg-light">
            <h3 class="text-center">
                Hidden Store
            </h3>
            <p class="text-center">Communications is at the heart of E-commerce and Community</p>
        </div>

        <!--fourth child-->
        <div class="row px-1">
            <div class="col-md-12">
                <!-- Products -->
                <div class="row">
                  <?php
                    if(!isset($_SESSION['username'])){
                        include_once("../users_area/user_login.php");
                    }else {
                        include('payment.php');
                    }
                  ?>
                </div>
            <!--col end-->
            </div>

        </div>

        <!-- last child -->
        <?php
             include ("../includes/footer.php");
        ?>

    </div>

    <!--script.js-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>