<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Ecommerce Website</title>
</head>
<body>
   <?php include './partials/connect.php' ?>
   <?php include './partials/header.php' ?>
   <?php
     $id = $_GET['details_id'];
     $sql = "SELECT * FROM `clothes` WHERE category_id = $id";
     $result = mysqli_query($con,$sql);
     $row = mysqli_fetch_assoc($result);
     $category_id = $row['category_id'];
     $category_name = $row['category_name'];
     $category_description = $row['category_desc'];
     $category_image = $row['category_image'];
     $category_price = $row['category_price'];

    ?>
    <div class="jumbotron">
        <div class="container">
        <h1 class="display-4 text-center"><?php echo $category_name ?></h1>
        <p class="lead"><?php echo $category_description ?></p>
        <button class="btn btn-dark"><a class="btn btn-dark" href="index1.php" role="button">Continue Shopping</a></button>
        </div>
    </div>

     <div class="conatiner">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <img src=<?php echo $category_image ?> class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 col-sm-12">
                    <h2 class="text-center text-danger">
                        <?php echo $category_name ?>
                    </h2>
                    <p><?php echo $category_description ?></p>
                    <p><strong>Price: </strong><?php echo $category_price ?>/-</p>
                    <button class="btn btn-success">Add to cart</button>
            </div>
        </div>
     </div>

</body>
</html>