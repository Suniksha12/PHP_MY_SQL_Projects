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
   <?php include './partials/header.php';?>

   <!--php code-->
   <?php
      $id = $_GET['story_id'];
      $sql = "SELECT * FROM `topics` WHERE topic_id=$id";
      $result = mysqli_query($con, $sql);
      while($row=mysqli_fetch_assoc($result)){
        $topic_name = $row['topic_name'];
        $topic_desc = $row['topic_desc'];
        $topic_image = $row['topic_image'];
      }

   ?>

   <!--jumbotron-->
    <div class="container-fluid">
      <div class="jumbotron bg-warning rounded">
        <div class="container">
        <h1 class="display-4"><?php echo $topic_name?></h1>
        <p class="lead"><?php echo $topic_desc?></p>
            <button class="btn btn-dark"><a class="text-light" href="#reading" role="button">Continue Reading</a></button>
        </div>
      </div>
    </div>

   <div class="container-fluid slider">
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

    <!--Reading-->
    <div class="container" id="reading">
    <div class="jumbotron jumbotron-fluid bg-warning rounded p-0">
        <div class="container">
        <h1 class="display-4 text-center">Enjoy Reading!</h1>
        <img src=<?php echo $topic_image; ?> class="img-fluid img-center">
        <p class="lead" pb-3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus esse nisi incidunt doloremque delectus nesciunt nostrum eaque debitis, 
            architecto nam a molestias veniam, ullam dolor ducimus maiores. Architecto, nostrum maiores?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis vero veniam cumque quaerat amet facere vel commodi! Quod dicta quam inventore veniam dolorem iure quidem natus, quaerat nihil nostrum, aut minus libero sequi non necessitatibus eius fugit, error fugiat veritatis placeat cumque consequuntur. Error harum voluptatibus, inventore illo aliquam incidunt nostrum eius consectetur, quae neque exercitationem explicabo dolor sit repellat quo architecto? Praesentium impedit commodi tempore nulla, animi voluptatibus amet magnam necessitatibus! Tenetur hic dolorem veniam? Dolorem nulla natus nisi rem, eligendi illum nobis sapiente eveniet laborum consectetur? Animi, vitae ullam debitis ab doloribus dolor accusamus voluptates neque atque modi libero iusto vero voluptas repudiandae facilis nostrum molestias labore! Voluptates eum iste id, ducimus ipsum quod minima suscipit! Molestias, necessitatibus ullam accusantium similique harum culpa ipsam quas pariatur nisi dignissimos ex reiciendis alias id architecto aliquam eligendi esse ad odio et? Amet eius facilis laborum nemo! Quibusdam eum, quaerat ex facere ab libero voluptates iusto reprehenderit minus cum enim. Esse adipisci provident, omnis officiis voluptates accusantium ipsa quam hic doloribus voluptatibus debitis, commodi vero tempore laudantium deleniti sint quae ullam ex? Quaerat tempore quas rem architecto soluta! Aut eveniet sint iure dolores doloremque non vitae placeat nemo officia. Quod, soluta.</p>
        
        </div>
      </div>
    </div>

    <!-- Thank you Text-->
    <div class="container-fluid mb-4">
    <h2 class="text-center display-4">Thank you for your time 😊</h2>
    </div>
  
   <?php include './partials/footer.php';?>
</body>
</html>