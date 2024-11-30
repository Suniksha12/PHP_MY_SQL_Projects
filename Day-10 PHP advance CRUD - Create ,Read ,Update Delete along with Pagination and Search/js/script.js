//function for  pagination
function pagination(totalPages, currentPage) {
    let pageList = "";
    if (totalPages > 1) {
        currentPage = parseInt(currentPage);
        pageList += `<ul class="pagination justify-content-center">`;
        const prevClass = currentPage === 1 ? "disabled" : "";
        pageList += `<li class="page-item ${prevClass}"><a class="page-link" href="#" data-page="${currentPage - 1}">Previous</a></li>`;

        for (let p = 1; p <= totalPages; p++) {
            const activeClass = currentPage === p ? "active" : "";
            pageList += `<li class="page-item ${activeClass}"><a class="page-link" href="#" data-page="${p}">${p}</a></li>`;
        }

        const nextClass = currentPage === totalPages ? "disabled" : "";
        pageList += `<li class="page-item ${nextClass}"><a class="page-link" href="#" data-page="${currentPage + 1}">Next</a></li>`;
        pageList += `</ul>`;
    }
    $("#pagination").html(pageList);
}

//function to get users from database
function getUserRow(user) {
    let userRow = "";
    if (user) {
        userRow = `<tr>
            <td scope="row"><img src="uploads/${user.photo}" alt="User Photo"></td>
            <td>${user.pname}</td>
            <td>${user.email}</td>
            <td>${user.mobile}</td>
            <td>
                <a href="#" class="mr-6 profile" data-bs-target="#userViewModal" data-bs-toggle="modal" title="View Profile" data-id="${user.id}">
                    <i class="bi bi-eye text-success"></i>
                </a>
                <a href="#" class="mr-3 edituser" title="Edit" data-bs-target="#usermodal" data-bs-toggle="modal" data-id="${user.id}">
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
function getUsers() {
    const pageNo = $("#currentpage").val();
    $.ajax({
        url: "/PHP_My_SQL_Projects/Day-10 PHP advance CRUD - Create ,Read ,Update Delete along with Pagination and Search/ajax.php",
        type: "GET",
        dataType: "json",
        data: { page: pageNo, action: "getallusers" },
        beforeSend: function () {
            console.log("Wait...Data is loading");
        },
        success: function (rows) {
            console.log(rows);
            if (rows.players) {
                let usersList = "";
                $.each(rows.players, function (index, user) {
                    usersList += getUserRow(user);
                });
                $("#usertable tbody").html(usersList);
                //calling for pagination
                const totalUsers = rows.count;
                const totalPages = Math.ceil(totalUsers / 4);
                const currentPage = $("#currentpage").val();
                pagination(totalPages, currentPage);
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
                    getUsers();
                }
            },
            error: function (request, error) {
                console.log(arguments);
                console.log("Error" + error);
            },
        });
    });

    //onclick event for pagination
    $(document).on("click", "ul.pagination li a", function (event) {
        event.preventDefault();
        const pageNo = $(this).data("page");
        $("#currentpage").val(pageNo);
        getUsers();
        $(this).parent().siblings().removeClass("active");
        $(this).parent().addClass("active");
    });

    //onclick event for editing
    $(document).on("click", "a.edituser", function () {
        const userId = $(this).data("id");
        // alert(userId);
        $.ajax({
            url: "/PHP_My_SQL_Projects/Day-10 PHP advance CRUD - Create ,Read ,Update Delete along with Pagination and Search/ajax.php",
            type: "GET",
            dataType: "json",
            data: { id: userId, action: "editusersdata" },
            beforeSend: function () {
                console.log("Wait...Data is loading");
            },
            success: function (rows) {
                console.log(rows);
                if (rows) {
                    $("#username").val(rows.pname);
                    $("#email").val(rows.email);
                    $("#mobile").val(rows.mobile);
                    $("#userId").val(rows.id);
                }
            },
            error: function () {
                console.log("Oops! Something Went Wrong!");
            },
        });
    });

    //onclick for adding user btn
    $("#adduserbtn").on("click", function () {
        $("#addform")[0].reset();
        $("#userId").val("");
    });

    //onclick event for deleting the funstion
    $(document).on("click", "a.deleteuser", function (e) {
        e.preventDefault();
        const userId = $(this).data("id");
        if (confirm("Are you sure you want to delete this user?")) {
            console.log("User confirmed deletion:", userId); // Debugging line
            $.ajax({
                url: "/PHP_My_SQL_Projects/Day-10 PHP advance CRUD - Create ,Read ,Update Delete along with Pagination and Search/ajax.php",
                type: "GET",
                dataType: "json",
                data: { id: userId, action: "deleteuser" },
                beforeSend: function () {
                    console.log("Wait...Data is loading");
                },
                success: function (res) {
                    if (res.delete === 1) { // Ensure this matches your PHP response
                        $(".displaymessage").html("User deleted successfully").fadeIn().delay(2500).fadeOut(); // Corrected fadeOut
                        getUsers();
                        console.log("User deleted successfully");
                    } else {
                        $(".displaymessage").html("Failed to delete user").fadeIn().delay(2500).fadeOut();
                    }
                },
                error: function () {
                    console.log("Oops! Something Went Wrong!");
                }
            });
        }
    });

    //Profile View
    $(document).on("click", "a.profile", function () {
        const userId = $(this).data("id");
        $.ajax({
            url: "/PHP_My_SQL_Projects/Day-10 PHP advance CRUD - Create ,Read ,Update Delete along with Pagination and Search/ajax.php",
            type: "GET",
            dataType: "json",
            data: { id: userId, action: "editusersdata" },
            success: function (user) {
                if (user) {
                    const profile = `<div class="row">
                            <div class="col-sm-6 col-md-4">
                                <img src="uploads/${user.photo}" alt="User Image" class="img-circle">
                            </div>
                            <div class="col-sm-6 col-md-8">
                                <h4 class="text-primary">${user.pname}</h4>
                                <p>
                                    <i class="bi bi-envelope-at"></i> ${user.email}
                                    <br>
                                    <i class="bi bi-phone"></i> ${user.mobile}
                                    <br>
                                </p>
                            </div>
                        </div>`;
                    $("#profile").html(profile);
                }
            },
            error: function () {
                console.log("Oops! Something Went Wrong!");
            }
        });
    })

    //calling get Users Function
    getUsers();
});
