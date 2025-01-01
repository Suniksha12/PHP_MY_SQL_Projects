<h3 class="text-center text-success">All Brands</h3>

<table class="table table-bordered mt-5">
    <thead class="table-info">
        <tr class="text-center">
            <th>SlNO</th>
            <th>Brand Title</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody class="table-secondary text-light">
        <?php
           $select_cat="SELECT * FROM `brands`";
           $result=mysqli_query($con,$select_cat);
           $number=0;
           while($row=mysqli_fetch_assoc($result)){
              $brand_id=$row['brand_id'];
              $brand_title=$row['brand_title'];
              $number++;

        ?>
        <tr class="text-center">
            <th><?php echo $number; ?></th>
            <th><?php echo $brand_title; ?></th>
            <td><a href='index.php?edit_brands=<?php echo $brand_id; ?>' class='table-light'><i class='bi bi-pencil-square'></i></a></td>
            <td><a href='index.php?delete_brand=<?php echo $brand_id; ?>'   
                     type="button" class="table-light" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class='bi bi-trash-fill'></i></a></td>
        </tr>
    <?php
     } ?>
    </tbody>
</table>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h4>Are your sure you want to delete this?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary">Yes</button>
      </div>
    </div>
  </div>
</div>
