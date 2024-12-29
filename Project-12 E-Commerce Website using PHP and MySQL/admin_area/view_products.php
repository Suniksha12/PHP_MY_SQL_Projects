<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3 class="text-center text-success">All Products</h3>
    <table class="table table-bordered mt-5 table-hover">
        <thead class="table-primary">
            <tr class="text-center">
                <th>Product ID</th>
                <th>Product Title</th>
                <th>Product Image</th>
                <th>Product Price</th>
                <th>Total Sold</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="table-secondary table-light">
            <?php
               $get_products="SELECT * FROM `products`";
               $result = mysqli_query($con,$get_products);
               $number=0;
               while($row=mysqli_fetch_assoc($result)){
                  $product_id=$row['product_id'];
                  $product_title=$row['product_title'];
                  $product_image1=$row['product_image1'];
                  $product_price=$row['product_price'];
                  $status=$row['status'];
                  $number++;
                  ?>
                  echo "<tr class='text-center'>
                            <td><?php echo $number; ?></td>
                            <td><?php echo $product_title; ?></td>
                            <td><img src='./product_images/$product_image1' class='product_img'></td>
                            <td>$product_price</td>
                            <td>0</td>
                            <td>$status</td>
                            <td><a href='' class='table-light'><i class='bi bi-pencil-square'></i></a></td>
                            <td><a href='' class='table-light'><i class='bi bi-trash-fill'></i></a></td>
                        </tr>";
            <?php
               }
            ?>
            ?>
        </tbody>
    </table>
</body>
</html>