//function to get users from database
function getuserrow(user){
    var userRow="";
    if(user){
        userRow=`<tr>
            <td scope="row"><img src=${user.photo}></td>
            <td>${user.name}</td>
            <td>${user.email}</td>
            <td>${user.mobile}</td>
            <td>
                <a href="#" class="mr-6 profile" data-bs-target="#userViewModal" data-bs-toggle="modal" title="View Profile" data-id=${user.id}>
                    <i class="bi bi-eye text-success"></i>
                </a>
                <a href="#" class="mr-3 edituser" title="Edit" data-bs-target="#userModal" data-bs-toggle="modal" data-id=${user.id}>
                   <i class="bi bi-pencil-square text-info"></i>
                </a>
                <a href="#" class="mr-3 deleteuser" title="Delete" data-bs-target="#userViewModal" data-bs-toggle="modal" data-id=${user.id}>
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
    success: function (rows) {
      console.log(rows);
      if(rows.players){
        var userslist="";
        $.each(rows.players,function(index,user){
           userslist += getuserrow(user);
        });
        $("#usertable tbody").html(userslist);
      }
    },
    error: function () {
      console.log("Oops! Something Went Wrong!");
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
          getusers();
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
