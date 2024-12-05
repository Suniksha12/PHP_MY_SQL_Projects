<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CSS file-->
     <link rel="stylesheet" href="style.css" class="css">
    <title>Registration Project</title>
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 col-xm-12">
                <h1 class="text-center">Sign up</h1>
                <form action="signup.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label text-white">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username" autocomplete="off" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label text-white">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" autocomplete="off" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="cpassword" class="form-label text-white">Confirm password</label>
                        <input type="password" class="form-control" id="cpassword" placeholder="Enter Confirm password" autocomplete="off" name="cpassword">
                    </div>
                    <button type="submit" class="btn btn-success w-100 my-3" name="signup">Sign up</button>
                </form>
            </div>
            <div class="col-md-6 col-xm-12 my-5">
                <h1 class="text-center">Login</h1>
                <form action="login.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label text-white">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username" autocomplete="off" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label text-white">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" autocomplete="off" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary w-100 my-3" name="login">Login up</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>