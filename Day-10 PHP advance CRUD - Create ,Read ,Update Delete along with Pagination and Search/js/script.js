$(document).ready(function(){
    //addding users

    $(document).on("submit","#addform",function(event){
        event.preventDefault();
        //ajax
        $.ajax({
            url:"/PHP_My_SQL_Projects/Day-10 PHP advance CRUD - Create ,Read ,Update Delete along with Pagination and Search/ajax.php",
            type:"POST",
            dataType: "json",
            data: new FormData(this),
            processData:false,
            contentType:false,
            beforeSend: function(){
                console.log("Wait...Data is loading");
            },
            success:function(response){
                console.log(response);
                if(response){
                    $("#usermodal").modal("hide");
                    $("#addform")[0].reset();
                }
            },
            error:function(request,error){
                console.log(arguments);
                console.log("Error"+error);
            },           
        });
    });

    //get users function
    function getusers(){
        var pageno=$("#currentpage").val();
        $.ajax({
            url:"/PHP_My_SQL_Projects/Day-10 PHP advance CRUD - Create ,Read ,Update Delete along with Pagination and Search/ajax.php",
            type: "GET",
            dataType: "json",
            data:{page:pageno,action:'getallusers'},
            beforeSend: function(){
                console.log("Wait...Data is loading");
            },
            success:function(row){
                console.log(row);
                
            },
            error:function(request,error){
                console.log(arguments);
                console.log("Error"+error);
            }, 
        });
    }

    //calling get Users Function
    getusers();
});