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
   <!--jumbotron-->
    <div class="container-fluid">
      <div class="jumbotron bg-warning rounded">
        <div class="container">
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus esse nisi incidunt doloremque delectus nesciunt nostrum eaque debitis, 
            architecto nam a molestias veniam, ullam dolor ducimus maiores. Architecto, nostrum maiores?</p>
            <button class="btn btn-dark"><a class="text-light" href="#" role="button">Continue Reading</a></button>
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
   <?php include './partials/footer.php';?>
</body>
</html>