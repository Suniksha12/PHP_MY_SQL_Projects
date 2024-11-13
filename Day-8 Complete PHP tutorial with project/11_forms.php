<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <input type="text" name="fname" placeholder="first name" autocomplete="off">
        <br>
        <br>
        <input type="text" name="lname" placeholder="Last name" autocomplete="off">
        <br>
        <br>
        <button type="submit">Submit</button>

        <?php
          if($_SERVER['REQUEST_METHOD']=='POST'){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            echo $fname;
            echo $lname;
          }
        ?>
    </form>
    
</body>
</html>