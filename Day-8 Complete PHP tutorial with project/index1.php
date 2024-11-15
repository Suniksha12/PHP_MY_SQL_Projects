<?php

?>
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
    <h1 class="text-center text-primary mb-3">Welcome to our store</h1>
    <h1 class="text-center text-success mb-4">Shop by category</h1>

    <div class="container">
        <div class="row">
            <?php 
               $sql = 'SELECT * FROM `clothes`';
               $result = mysqli_query($con,$sql);
               if($result) {
                // $row = mysqli_fetch_assoc($result);
                // echo $row['category_name'];
                while($row = mysqli_fetch_assoc($result)){
                     $category_id = $row['category_id'];
                     $category_name = $row['category_name'];
                     $category_description = $row['category_desc'];
                     $category_image = $row['category_image'];
                     $category_price = $row['category_price'];

                     echo '<div class="col-md-4 col-sm-6-col-xm-12 mb-5">
                             <div class="card" style="width: 18rem;">
                                 <img src="./images/Cloth1.avif" class="card-img-top" alt="...">
                                 <div class="card-body">
                                     <h5 class="card-title">Card title</h5>
                                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                     <a href="#" class="btn btn-primary">Go somewhere</a>
                                 </div>
                             </div>
                         </div>';

               }
            }
            ?>
        </div>
    </div>
</body>

</html>
