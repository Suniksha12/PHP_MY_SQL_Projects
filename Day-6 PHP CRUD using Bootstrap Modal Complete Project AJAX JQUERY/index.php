<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD operations Using Bootstrap Modal</title>
    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container my-3">
        <h1 class="text-center">PHP CRUD operations Using Bootstrap Modal</h1>
        <button type="button" class="btn btn-dark my-4" data-bs-toggle="modal" data-bs-target="#completeModal">
            Add New Users
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">New User</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3 form-group">
              <label for="completename" class="form-label">Name</label>
              <input type="text" class="form-control" id="completename" placeholder="Enter your name" autocomplete="off">
            </div>
            <div class="mb-3 form-group">
              <label for="completemail" class="form-label">Email</label>
              <input type="email" class="form-control" id="completemail" placeholder="Enter your email" autocomplete="off">
            </div>
            <div class="mb-3 form-group">
              <label for="completemobile" class="form-label">Mobile</label>
              <input type="text" class="form-control" id="completemobile" placeholder="Enter your mobile Number" autocomplete="off">
            </div>
            <div class="mb-3 form-group">
              <label for="completeplace" class="form-label">Place</label>
              <input type="text" class="form-control" id="completeplace" placeholder="Enter your Place" autocomplete="off">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-bs-dismiss="modal" onclick="adduser()">Submit</button>
            <button type="button" class="btn btn-danger">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap JavsScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script> 

    <script>
        //display function

        function displayData(){

        }
        
        function adduser(){
            var nameAdd = $('#completename').val();
            var emailAdd = $('#completemail').val();
            var mobileAdd = $('#completemobile').val();
            var placeAdd = $('#completeplace').val();

            $.ajax({
                url:"insert.php",
                type:'post',
                data:{
                    nameSend:nameAdd,
                    emailSend:emailAdd,
                    mobileSend:mobileAdd,
                    placeSend:placeAdd
                },
                success:function(data,status){
                    //function to display data
                    //console.log(status);
                    displayData();
                }

            });
        }
    </script>
</body>
</html>


