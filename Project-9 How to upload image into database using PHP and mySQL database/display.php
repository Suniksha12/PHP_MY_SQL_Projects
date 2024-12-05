<?php
include ('./connect.php');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];
    
    // Check if file is uploaded
    if(isset($_FILES['file'])) {
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
        $imagefileerror = $image['error'];
        print_r($imagefileerror);
        echo "<br>";
        $imagefiletemp = $image['tmp_name']; // Corrected here
        print_r($imagefiletemp);
        echo "<br>";

        $filename_separate = explode('.', $imagefilename);
        print_r($filename_separate);
        $file_extension = strtolower(end($filename_separate)); // Better way to get the last element
        print_r($file_extension);

        $extension = array('jpeg','jpg','png');
        if(in_array($file_extension, $extension)){
            $uploadimage = 'images/'.$imagefilename;
            if(move_uploaded_file($imagefiletemp, $uploadimage)) {
                $sql = "INSERT into `registrations` (name, mobile, image) values ('$username', '$mobile', '$uploadimage')";
                $result = mysqli_query($con, $sql);
                if($result){
                    echo '<div class="alert alert-success" role="alert">
                        <strong>Success</strong> Data inserted successfully
                        </div>';
                } else {
                    die(mysqli_error($con));
                }
            } else {
                echo '<div class="alert alert-danger" role="alert">
                    <strong>Error</strong> Failed to upload image
                    </div>';
            }
        } else {
            echo '<div class="alert alert-danger" role="alert">
                <strong>Error</strong> Invalid file type
                </div>';
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">
            <strong>Error</strong> No file uploaded
            </div>';
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
    <style>
        img {
            width: 100px;
        }
    </style>
</head>
<body>
    <h1 class="text-center my-4">User  Data</h1>
    <div class="container mt-5 flex justify-content-center">
    <table class="table table-bordered w-50">
        <thead class="table-dark">
            <tr>
                <th scope="col">Sl No</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM `registrations`";
            $result = mysqli_query($con, $sql);
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $name = $row['name'];
                $image = $row['image'];
                echo '<tr>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td><img src="'.$image.'"/></td>
                </tr>';
            }
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>