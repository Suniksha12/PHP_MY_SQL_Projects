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
    <?php
       $username = $_SESSION['username'];
       $get_user="SELECT * FROM `user_table` WHERE username='$username'";
       $result = mysqli_query($con,$get_user);
       $row_fetch=mysqli_fetch_assoc($result);
       $user_id=$row_fetch['user_id'];
       
    ?>
    <h3 class="text-success">All My Orders</h3>
    <table class="table table-bordered mt-5">
        <thead class="bg-info">
            <tr>
                <th>Sl No</th>
                <th>Amount Due</th>
                <th>Total Products</th>
                <th>Invoice Number</th>
                <th>Date</th>
                <th>Complete/Incomplete</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody class="bg-secondary text-light">
            <?php
                $number=1;
                $get_order_details = "SELECT * FROM `user_orders` WHERE user_id=$user_id";
                $result_orders=mysqli_query($con,$get_order_details);
                while($row_orders=mysqli_fetch_assoc($result_orders)){
                    $order_id=$row_orders['order_id'];
                    $amount_due=$row_orders['amount_due'];
                    $total_products=$row_orders['total_products'];
                    $invoice_number=$row_orders['invoice_number'];
                    $order_status=$row_orders['order_status'];
                    if($order_status=='pending'){
                        $order_status='Incomplete';
                    } else {
                        $order_status='Complete';
                    }
                    $order_date=$row_orders['order_date'];
                    echo  "<tr>
                               <td>$number</td>
                               <td>$amount_due</td>
                               <td>$total_products</td>
                               <td>$invoice_number</td>
                               <td>$order_date</td>
                               <td>$order_status</td>
                               <td><a href='confirm_payment.php' class='dark'>Confirm</a></td>
                           </tr>";
                    $number++;
                }
            ?>
        </tbody>
    </table>
    <!--script.js-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>