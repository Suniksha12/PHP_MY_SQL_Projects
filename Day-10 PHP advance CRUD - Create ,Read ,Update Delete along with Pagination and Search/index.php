<?php
   require_once 'partials/connect.php';
   $dbobj = new Database();
   var_dump($dbobj);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Advance Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css" class="css">
    <!-- font awesome bootstrap Link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

    <h1 class="bg-dark text-light text-center py-2">PHP Advance Crud</h1>

    <div class="container">
        <!--Input search and button modal -->
        <div class="row mb-3">
            <div class="col-10">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-dark"><i class="bi bi-search text-light"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search user..">
                </div>
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#usermodal">
                    Add New User
                </button>
            </div>
        </div>

        <!--table-->
        <table class="table" id="usertable">
            <thead class="table-dark">
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Operations</th>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Picture 1</th>
                    <td>Suniksha</td>
                    <td>suniksha@gmail.com</td>
                    <td>2907917825</td>
                    <td>
                        <span>Edit</span>
                        <span>Profile</span>
                        <span>Delete</span>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- pagination-->
        <nav aria-label="Page navigation example" id="pagination">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>

    <!-- Form Modal -->
    <div class="modal fade" id="usermodal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Adding or Updating Users</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="addform" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <!--username-->
                            <label>Name: </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-dark"><i class="bi bi-person text-light"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Enter Your Username" autocomplete="off" required="required" id="username" name="username">
                            </div>
                        </div>

                        <!--email-->
                        <div class="form-group">
                            <label>Email: </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-dark"><i class="bi bi-envelope text-light"></i></i></span>
                                </div>
                                <input type="email" class="form-control" placeholder="Enter Your Email" autocomplete="off" required="required" id="email" name="email">
                            </div>
                        </div>

                        <!--mobile-->
                        <div class="form-group">
                            <label>Mobile: </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-dark"><i class="bi bi-telephone text-light"></i></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Enter Your Phone no" autocomplete="off" required="required" id="mobile" name="mobile" maxlength="10" minlength="10">
                            </div>
                        </div>

                        <!--photo-->
                        <div class="form-group">
                            <label>Photo:</label>
                            <div class="input-group">
                                <label class="custom-file-label" for="userphoto">Choose File</label>
                                <input type="file" class="custom-file-input" name="photo" id="userphoto" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark">Submit</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <!-- bootstrap Js and popper-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>