<?php 
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
    <!--FonT awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/brands.min.css" integrity="sha512-7rXIvd/xj1FnI2zKQjjXzDFxC4twqBByp8yxOgEQJs4C/aNzNyoQsOO7VxH0RgYNhbAYLJLwzqslaP50KTTHIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Css link -->
    <link rel="stylesheet" href="../css/style.css" class="css">
    <title>Admin Dashboard</title>
</head>

<body>
    <!--navbar-->
    <div class="container-fluid">
        <!--First child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/logo.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome guest</a>
                        </li>
                    </ul>

                </nav>
            </div>
        </nav>

        <!--second child-->
        <div class="bg-light">
            <h3 class="text-center p-2">
                Manage Details
            </h3>
        </div>

        <!--third Child-->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex algin-items-center">
                <div class="p-3">
                    <a href="#"><img src="../images/pineapple.jpg" class="admin_image" alt=""></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <!-- button*10>a.nav-link.text-light.bg-info.my-1 -->
                <div class="button text-center m-auto">
                    <button class="my-5 mb-5">
                        <a href="insert_product.php" class="nav-link text-light bg-info my-1 mx-3">Insert Products</a>
                    </button>
                    <button>
                        <a href="index.php?view_products" class="nav-link text-light bg-info my-1 mx-3">View Products</a>
                    </button>
                    <button>
                        <a href="index.php?insert_category" class="nav-link text-light bg-info my-1 mx-3">Insert Categories</a>
                    </button>
                    <button>
                        <a href="index.php?view_categories" class="nav-link text-light bg-info my-1 mx-3">View Categories</a>
                    </button>
                    <button>
                        <a href="index.php?insert_brand" class="nav-link text-light bg-info my-1 mx-3">Insert Brands</a>
                    </button>
                    <button>
                        <a href="index.php?view_brands" class="nav-link text-light bg-info my-1 mx-3">View Brands</a>
                    </button>
                    <button>
                        <a href="" class="nav-link text-light bg-info my-1 mx-3">All Orders</a>
                    </button>
                    <button>
                        <a href="" class="nav-link text-light bg-info my-1 mx-3">All Payments</a>
                    </button>
                    <button>
                        <a href="" class="nav-link text-light bg-info my-1 mx-3">List Users</a>
                    </button>
                    <button>
                        <a href="" class="nav-link text-light bg-info my-1 mx-3">LogOut</a>
                    </button>
                </div>
            </div>
        </div>

        <!-- Fourth child-->
         <div class="container my-3">
            <?php
               if(isset($_GET['insert_category'])){
                  include('insert_categories.php');
               }
               if(isset($_GET['insert_brand'])){
                  include('insert_brands.php');
               }
               if(isset($_GET['view_products'])){
                include('view_products.php');
             }
             if(isset($_GET['edit_products'])){
                include('edit_products.php');
             }
             if(isset($_GET['delete_product'])){
                include('delete_product.php');
             }
             if(isset($_GET['view_categories'])){
                include('view_categories.php');
             }

             if(isset($_GET['view_brands'])){
                include('view_brands.php');
             }
            ?>
         </div>

         <!-- last child -->
        <?php
             include ('../includes/footer.php');
        ?>
    </div>
    <!--script.js-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>