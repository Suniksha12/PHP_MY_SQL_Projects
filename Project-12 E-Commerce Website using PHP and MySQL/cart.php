<!-- connect file -->
<?php
    include("includes/connect.php");
    include("functions/common_function.php");
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
    <link rel="stylesheet" href="../Project-12 E-Commerce Website using PHP and MySQL/css/style.css" class="css">
    <title>Ecommerce Website-Cart Details</title>
</head>

<body>
    <!--navbar-->
    <div class="container-fluid p-0">
        <!--first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="./images/logo.png" alt="" class="logo">
                <a class="navbar-brand" href="#">Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="display_all.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php"><i class="bi bi-cart-fill"></i><sup><?php cart_item(); ?></sup>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!--Third child-->
        <div class="bg-light">
            <h3 class="text-center">
                Hidden Store
            </h3>
            <p class="text-center">Communications is at the heart of E-commerce and Community</p>
        </div>

        <!-- Fourth Child-->
         <div class="container">
            <div class="row">
                <form action="" method="post">
                <table class="table table-bordered text-center">
                    
                        <!-- php code to display dynamic data -->
                        <?php
                             $get_ip_add = getIPAddress();
                             $total_price=0;
                             $cart_query="SELECT * FROM `card_details` WHERE ip_address='get_ip_add'";
                             $result = mysqli_query($con,$cart_query);
                             $result_count = mysqli_num_rows($result);
                             if($result_count>0){
                                echo "<thead>
                                          <tr>
                                              <th>Product Title</th>
                                              <th>Product Image</th>
                                              <th>Quantity</th>
                                              <th>Total Price</th>
                                              <th>Remove</th>
                                              <th colspan='2'>Operations</th>
                                          </tr>
                                      </thead>
                                      <tbody>";
                                while($row=mysqli_fetch_array($result)){
                                   $product_id=$row['product_id'];
                                   $select_products="SELECT * FROM `products` WHERE product_id='$product_id'";
                                   $result_products=mysqli_query($con,$select_products);
                                   while($row_product_price=mysqli_fetch_array($result_products)){
                                       $product_price=array($row_product_price['product_price']);
                                       $price_table=$row_product_price['product_price'];
                                       $product_title=$row_product_price['product_title'];
                                       $product_image1=$row_product_price['product_image1'];
                                       $product_values=array_sum($product_price);
                                       $total_price+=$product_values;

                        ?>
                        <tr>
                            <td><?php echo $product_title ?></td>
                            <td><img src="./admin_area/product_images/<?php echo $product_image1?>" alt="" class="cart_img"></td>
                            <td><input type="text" name="qty" id="" class="form-input w-50"></td>
                            <?php
                                $get_ip_add = getIPAddress();
                                if(isset($_POST['update_cart'])){
                                    $quantities = $_POST['qty'];
                                    $update_cart="UPDATE `cart_details` set quantity=$quantities WHERE ip_address='$get_ip_add'";
                                    $result_products_quantity=mysqli_query($con,$update_cart);
                                    $total_price=$total_price*$quantities;
                                }
                            ?>
                            <td><?php echo $price_table?>/-</td>
                            <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id ?>"></td>
                            <td>
                                <!-- <button class="bg-info px-3 py-2 border-0 mx-3">Update</button> -->
                                 <input type="submit" value="Update Cart" class="bg-info px-3 py-2 border-0 mx-3" name="update_cart">
                                <!-- <button class="bg-info px-3 py-2 border-0 mx-3">Remove</button> -->
                                <input type="submit" value="Remove Cart" class="bg-info px-3 py-2 border-0 mx-3" name="remove_cart">
                            </td>
                        </tr>
            <?php  }}} else {
                echo "<h2 class='text-center text-danger'>Cart is Empty</h2>";
                
            }?> 
                    </tbody>
                </table>
                <!-- subtotal-->
                 <div class="d-flex mb-5">
                    <?php
                        $get_ip_add = getIPAddress();
                        $cart_query="SELECT * FROM `card_details` WHERE ip_address='get_ip_add'";
                        $result = mysqli_query($con,$cart_query);
                        $result_count = mysqli_num_rows($result);
                        if($result_count>0){
                            echo "<h4 class='px-3'>
                                    Subtotal: <strong class='text-info'>$total_price/-</strong>
                                  </h4>
                                  <input type='submit' value='Continue Shopping' class='bg-info px-3 py-2 border-0 mx-3' name='continue_shopping'>
                                  <input type='submit' value='Checkout' class='bg-secondary p-3  py-2 border-0 text-light text-decoration-none' name='checkout'>";
                        } else{
                            echo "<input type='submit' value='Continue Shopping' class='bg-info px-3 py-2 border-0 mx-3' name='continue_shopping'>";
                            echo "<input type='submit' value='Checkout' class='bg-secondary p-3  py-2 border-0 text-light text-decoration-none' name='checkout'>";

                        }

                        if(isset($_POST['continue_shopping'])){
                            echo "<script>window.open('index.php','_self')</script>";
                        }

                        if(isset($_POST['checkout'])){
                            echo "<script>window.open('./users_area/checkout.php','_self')</script>";
                        }
                    ?>
                 </div>
            </div>
         </div>
        </form>

        <!-- function to remove items -->

        <?php 
             function remove_cart_item(){
                 global $con;
                 if(isset($_POST['remove_cart'])){
                    foreach($_POST['removeitem'] as $remove_id){
                        echo $remove_id;
                        $delete_query="DELETE FROM `card_details` WHERE product_id = $remove_id";
                        $run_delete=mysqli_query($con,$delete_query);
                        if($run_delete){
                            echo "<script>window.opne('cart.php','_self')</script>";
                        }
                    }
                 }
             }
             echo $remove_item = remove_cart_item();
        ?>

        <!-- last child -->
        <?php
             include ('./includes/footer.php');
        ?>

    </div>

    <!--script.js-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>