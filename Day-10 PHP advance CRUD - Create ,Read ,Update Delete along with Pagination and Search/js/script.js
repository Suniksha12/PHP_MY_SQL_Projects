//function for  pagination
function pagination(totalpages, currentpages) {
    var pagelist = "";
    if (totalpages > 1) {
        currentpages = parseInt(currentpages);
        pagelist += `<ul class="pagination justify-content-center">`;
        const prevClass = currentpages == 1 ? "disabled" : "";
        pagelist += `<li class="page-item ${prevClass}"><a class="page-link" href="#" data-page="${currentpages - 1}">Previous</a></li>`;
        
        for (let p = 1; p <= totalpages; p++) {
            const activeClass = currentpages == p ? "active" : "";
            pagelist += `<li class="page-item ${activeClass}"><a class="page-link" href="#" data-page="${p}">${p}</a></li>`;
        }
        
        const nextClass = currentpages == totalpages ? "disabled" : "";
        pagelist += `<li class="page-item ${nextClass}"><a class="page-link" href="#" data-page="${currentpages + 1}">Next</a></li>`;
        pagelist += `</ul>`;
    }
    $("#pagination").html(pagelist);
}

//function to get users from database
function getuserrow(user) {
    var userRow = "";
    if (user) {
      userRow = `<tr>
          <td scope="row"><img src=uploads/${user.photo} alt="User  Photo"></td>
          <td>${user.pname}</td>
          <td>${user.email}</td>
          <td>${user.mobile}</td>
          <td>
              <a href="#" class="mr-6 profile" data-bs-target="#userViewModal" data-bs-toggle="modal" title="View Profile" data-id="${user.id}">
                  <i class="bi bi-eye text-success"></i>
              </a>
              <a href="#" class="mr-3 edituser" title="Edit" data-bs-target="#userModal" data-bs-toggle="modal" data-id="${user.id}">
                 <i class="bi bi-pencil-square text-info"></i>
              </a>
              <a href="#" class="mr-3 deleteuser" title="Delete" data-bs-target="#userViewModal" data-bs-toggle="modal" data-id="${user.id}">
                 <i class="bi bi-trash text-danger"></i>
              </a>
          </td>
      </tr>`;
    }
    console.log("Generated user row:", userRow); // Log the generated row
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
        //calling for pagination
        let totaluser = rows.count;
        // console.log(totaluser);
        let totalpages = Math.ceil(totaluser/4);
        const currentpages = $("#currentpage").val();
        pagination(totalpages,currentpages);
      }
    },
    error: function () {
      console.log("Oops! Something Went Wrong!");
    },
  });
}

//loading document
$(document).ready(function() {
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

  //onclick event for pagination
  $(document).on("click","ul.pagination li a",function(event){
    event.preventDefault();
    const pagenum = $(this).data("page");
    $("#currentpage").val(pagenum);
    getusers();
    $(this).parent().siblings().removeClass("active");
    $(this).parent().siblings().addClass("active");
  })

  //calling get Users Function
  getusers();
});
