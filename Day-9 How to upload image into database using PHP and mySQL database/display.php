<?php
   include ('./connect.php');
   if(isset($_POST['submit'])){
     $username = $_POST['username'];
     $mobile = $_POST['mobile'];
     $image = $_FILES['file'];
     echo $username;
     echo "<br>";
     echo $mobile;
     echo "<br>";
     print_r($image);
     echo "<br>";

     $imagefilename = $image['name'];
     print_r($imagefilename);
     echo "<br>";
     $imagefileerror=$image['error'];
     print_r($imagefileerror);
     echo "<br>";
     $imagefiletemp = $image['temp_name'];
     print_r($imagefiletemp);
     echo "<br>";

     $filename_seperate=explode('.',$imagefilename);
     print_r($filename_seperate);
     $file_extension=strtolower($filename_seperate[1]);
     print_r($file_extension);

     $extension = array('jpeg','jpg','png');
     if(in_array($file_extension,$extension)){
        $uploadimage = 'images/'.$imagefilename;
        move_uploaded_file($imagefiletemp,$uploadimage);
        $sql = "INSERT into `registrations` (name,mobile,image) values ('$username','$mobile','$upload_image')";
        $result = mysqli_query($con,$sql);
        if($result){
            echo "Data inserted successfully";
        } else {
            die(mysqli_error($con));
        }
     }

   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Display data</title>
</head>
<body>
    
</body>
</html>