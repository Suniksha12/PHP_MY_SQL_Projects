<?php
include('connect.php');

// Get POST data and sanitize it
$username = htmlspecialchars($_POST['username']);
$mobile = htmlspecialchars($_POST['mobile']);
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$image = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$std = htmlspecialchars($_POST['std']);

// Check if passwords match
if ($password !== $cpassword) {
    echo '<script>alert("Passwords do not match");
        window.location="../Day-11 Voting system using PHP and MYSQL/partials/registrations.php";
        </script>';
    exit; // Stop further execution
}

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Move uploaded file and validate
$targetDir = "../uploads/";
$targetFile = $targetDir . basename($image);
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Check file type (you can add more types as needed)
$allowedTypes = ['jpg', 'png', 'jpeg', 'gif'];
if (!in_array($imageFileType, $allowedTypes)) {
    echo '<script>alert("Only JPG, JPEG, PNG & GIF files are allowed.");
        window.location="../Day-11 Voting system using PHP and MYSQL/partials/registrations.php";
        </script>';
    exit; // Stop further execution
}

// Move the uploaded file
if (!move_uploaded_file($tmp_name, $targetFile)) {
    echo '<script>alert("Sorry, there was an error uploading your file.");
        window.location="../Day-11 Voting system using PHP and MYSQL/partials/registrations.php";
        </script>';
    exit; // Stop further execution
}

// Prepare and execute the SQL statement
$sql = "INSERT INTO `userdata` (username, mobile, password, photo, standard, status, votes) VALUES (?, ?, ?, ?, ?, 0, 0)";
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, "sssss", $username, $mobile, $hashedPassword, $image, $std);

if (mysqli_stmt_execute($stmt)) {
    echo '<script>alert("Registration Successful");
    window.location="../";
    </script>';
} else {
    echo '<script>alert("Registration failed: ' . mysqli_error($con) . '");
    window.location="../Day-11 Voting system using PHP and MYSQL/partials/registrations.php";
    </script>';
}

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($con);
?>
