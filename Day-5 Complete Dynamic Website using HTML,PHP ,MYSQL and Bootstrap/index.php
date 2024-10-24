<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/brands.min.css" integrity="sha512-EJp8vMVhYl7tBFE2rgNGb//drnr1+6XKMvTyamMS34YwOEFohhWkGq13tPWnK0FbjSS6D8YoA3n3bZmb3KiUYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css" class="rel">
    <title>Stories website</title>
</head>
<body>
<?php include './partials/connect.php';?>
    <div class="container-fluid slider">
        <?php include './partials/header.php';?>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/img-7.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/img-2.avif" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/img-3.webp" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
    </div>

    <!-- Cards -->
     <div class="container">
        <h1 class="text-center featureTitle mb-5">Featured Stories</h1>
        <div class="row">
          <?php
             $sql = "SELECT * FROM `topics`";
             $result = mysqli_query($con,$sql);
             if($result){
              while($row = mysqli_fetch_assoc($result)){
               $id = $row['topic_id'];
               $topic_image = $row['topic_image'];
               $topic_name = $row['topic_name'];
               $topic_desc = $row['topic_desc'];
               echo '<div class="col-md-4 col-sm-6 mb-5">
                  <div class="card" style="width: 25rem;">
                      <img src='.$topic_image.' class="card-img-top" style="width: 400px; height: 300px;">
                      <div class="card-body">
                        <h5 class="card-title">'.$topic_name.'</h5>
                        <p class="card-text">'.substr($topic_desc,0,50).'........</p>
                        <a href="#" class="btn btn-primary">Continue Reading</a>
                      </div>
                    </div>
                </div>';
              }
             }
          ?>
        </div>
     </div>
    <?php include './partials/footer.php';?>
</body>
</html>