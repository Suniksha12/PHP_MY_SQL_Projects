<h3 class="text-center text-success">
    All Orders
</h3>
<table class="table table-bordered mt-5">
    <thead class="table-info text-center">

    <?php 
        $get_orders="SELECT * FROM `user_orders`";
        $result=mysqli_query($con,$get_orders);
        $row_count=mysqli_num_rows($result);
        echo "<tr>
                <th>Sl no</th>
                <th>Due Amount</th>
                <th>Invoice number</th>
                <th>Total Products</th>
                <th>Order Date</th>
                <th>Status</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody class='table-secondary text-light text-center'>";

        if($row_count==0){
            echo "<h2 class='bg-danger text-center mt-5'>No Orders Yet</h2>";
        } else {
            $number=0;
            while($row_data = mysqli_fetch_assoc($result)){
                $order_id=$row_data['order_id'];
                $user_id=$row_data['user_id'];
                $amount_due=$row_data['amount_due'];
                $invoice_number=$row_data['invoice_number'];
                $total_products=$row_data['total_products'];
                $order_date=$row_data['order_date'];
                $order_status=$row_data['order_status'];
            }
        }
    ?>
        
        <tr>
            <td>1</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
        </tr>
    </tbody>
</table>