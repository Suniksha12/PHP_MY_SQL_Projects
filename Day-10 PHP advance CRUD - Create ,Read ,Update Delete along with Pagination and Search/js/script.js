//function to get users from database
function getuserrow(user){
    var userRow="";
    if(user){
        userRow=`<tr>
            <td scope="row">Picture 1</td>
            <td>Suniksha</td>
            <td>suniksha@gmail.com</td>
            <td>2907917825</td>
            <td>
                <a href="#" class="mr-6 profile" data-bs-target="#userViewModal" data-bs-toggle="modal" title="View Profile">
                    <i class="bi bi-eye text-success"></i>
                </a>
                <a href="#" class="mr-3 edituser" title="Edit" data-bs-target="#userModal" data-bs-toggle="modal">
                   <i class="bi bi-pencil-square text-info"></i>
                </a>
                <a href="#" class="mr-3 deleteuser" title="Delete" data-bs-target="#userViewModal" data-bs-toggle="modal">
                   <i class="bi bi-trash text-danger"></i>
                </a>
            </td>
        </tr>`;
        
    }
    return userRow;
}

//get users function
function getusers() {
  var pageno = $("#currentpage").val();
  $.ajax({
    url: "/PHP_My_SQL_Projects/Day-10 PHP advance CRUD - Create ,Read ,Update Delete along with Pagination and Search/ajax.php",
    type: "GET",
    dataType: "json",
    data: { page: pageno, action: "getallusers" },
    beforeSend: function () {
      console.log("Wait...Data is loading");
    },
    success: function (row) {
      console.log(row);
      if(row.players){
        var userslist="";
        $.each(row.players,function(index,user){

        })
      }
    },
    error: function (request, error) {
      console.log(arguments);
      console.log("Error" + error);
    },
  });
}

//loading document
$(document).ready(function () {
  //addding users

  $(document).on("submit", "#addform", function (event) {
    event.preventDefault();
    //ajax
    $.ajax({
      url: "/PHP_My_SQL_Projects/Day-10 PHP advance CRUD - Create ,Read ,Update Delete along with Pagination and Search/ajax.php",
      type: "POST",
      dataType: "json",
      data: new FormData(this),
      processData: false,
      contentType: false,
      beforeSend: function () {
        console.log("Wait...Data is loading");
      },
      success: function (response) {
        console.log(response);
        if (response) {
          $("#usermodal").modal("hide");
          $("#addform")[0].reset();
        }
      },
      error: function (request, error) {
        console.log(arguments);
        console.log("Error" + error);
      },
    });
  });

  //calling get Users Function
  getusers();
});
