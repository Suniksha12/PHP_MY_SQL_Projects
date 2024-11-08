<?php 
   include 'connect.php';
   session_start();
   if(!isset($_SESSION['username'])){
    header('location:index.php');
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- styling CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Welcome Page</title>
</head>
<body>
    <div class="conatainer">
        <div class="jumbotron">
            <h1 class="display-4 text-center text-success">Welcome <?php echo $_SESSION['username'] ?> </h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, excepturi.</p>
            <p class="lead">
                <a class="btn btn-danger btn-lg" href="logout.php" role="button">Log Out</a>
            </p>
        </div>
    </div>
</body>
</html>