<?php
   include 'connect.php';
   if(isset($_POST['displaySend'])){
    $table='<table class="table">
        <thead class="thead-dark">
        <tr>
           <th scope="col">Sl no</th>
           <th scope="col">Name</th>
           <th scope="col">Email</th>
           <th scope="col">Mobile</th>
           <th scope="col">Operations</th>
        </tr>
        </thead>';

        $sql = "SELECT * FROM `crud`";

        $result = mysqli_query($con,$sql);

        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $table.= '<tr>
               <td scope="row">1</td>
               <td></td>
               <td></td>
               <td></td>
            </tr>';
        }
   }
?>