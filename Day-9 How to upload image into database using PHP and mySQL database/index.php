<?php

   require_once('./operations.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Image Upload</title>
</head>
<body>
    <h1 class="text-center my-3">Registration form</h1>
    <div class="container d-flex justify-content-center">
        <form action="" class="w-50">
            <!-- <div class="form-group my-4">
                <input type = "text" name="username" placeholder="Username" autocomplete="off" class="form-control">
            </div>
            <div class="form-group my-4">
                <input type = "text" name="mobile" placeholder="Mobile" autocomplete="off" class="form-control">
            </div> -->
            <?php inputFields("Username","username","","text") ?>
            <?php inputFields("Mobile","mobile","","text") ?>
            <?php inputFields("","File","","file") ?>

        </form>
    </div>
</body>
</html>