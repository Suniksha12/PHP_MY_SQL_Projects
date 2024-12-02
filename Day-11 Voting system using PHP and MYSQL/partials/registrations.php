<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Voting System- Registration page</title>
</head>
<body class="bg-dark">
    <h1 class="text-info text-center p-3">Voting System</h1>
    <div class="bg-info py-4">
        <h2 class="text-center">Register Account</h2>
        <div class="container">
            <form action="">
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" placeholder="Enter your username" required name="username">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" placeholder="Enter your mobile number" required name="mobile">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" placeholder="Enter your password" required name="password">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" placeholder="Enter your Confirm password" required name="cpassword">
                </div>
                <div class="mb-3">
                    <input type="file" class="form-control w-50 m-auto" name="photo">
                </div>
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
            </form>
        </div>
    </div>

    <!-- script js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>