<h3 class="text-center text-success">
    All Users
</h3>
<table class="table table-bordered mt-5">
    <thead class="table-info text-center">

    <?php 
        $get_payments="SELECT * FROM `user_table`";
        $result=mysqli_query($con,$get_payments);
        $row_count=mysqli_num_rows($result);
        echo "<tr>
                <th>Sl no</th>
                <th>Username</th>
                <th>User email</th>
                <th>User Image</th>
                <th>User address</th>
                <th>User mobile</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody class='table-secondary text-light text-center'>";

        if($row_count==0){
            echo "<h2 class='text-danger text-center mt-5'>No Users Yet</h2>";
        } else {
            $number=0;
            while($row_data = mysqli_fetch_assoc($result)){
                $user_id=$row_data['user_id'];
                $username=$row_data['username'];
                $user_email=$row_data['user_email'];
                $user_image=$row_data['user_image'];
                $user_address=$row_data['user_address'];
                $user_mobile=$row_data['user_mobile'];
                $number++;
                echo "<tr>
                        <td>$number</td>
                        <td>$invoice_number</td>
                        <td>$amount</td>
                        <td>$payment_mode</td>
                        <td>$date</td>
                        <td><a href='./index.php?delete_order' class='text-dark'><i class='bi bi-trash-fill'></i></a></td>
                     </tr>";
            }
        }
    ?>
    </tbody>
</table>