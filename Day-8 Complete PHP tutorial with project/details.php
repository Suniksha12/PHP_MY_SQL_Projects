<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Ecommerce Website</title>
</head>
<body>
   <?php include './partials/connect.php' ?>
   <?php include './partials/header.php' ?>
   <?php
     $id = $_GET['details_id'];
     $sql = "SELECT * FROM `clothes` WHERE category_id = $id";
     $row
    ?>
</body>
</html>