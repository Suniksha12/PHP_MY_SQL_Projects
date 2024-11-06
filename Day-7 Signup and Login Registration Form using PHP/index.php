<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Registration Project</title>
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 col-xm-12">
                
                <form>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="cpassword" class="form-label">Confirm password</label>
                        <input type="password" class="form-control" id="cpassword" placeholder="Enter Confirm password" autocomplete="off">
                    </div>
                    <button type="submit" class="btn btn-success w-100">Sign up</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>