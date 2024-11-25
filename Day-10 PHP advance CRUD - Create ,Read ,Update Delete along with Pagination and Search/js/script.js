$(document).ready(function(){
    //addding users

    $(document).on("submit","#addform",function(e){
        e.preventDefault();
        //ajax
        $.ajax({
            url:"/PHP_My_SQL_Projects/Day-10 PHP advance CRUD - Create ,Read ,Update Delete along with Pagination and Search/ajax.php",
            type:"POST",
            dataType: "json",
            data: new FormData(this),
            processData:false,
            contentType:false,
            beforeSending:function(){
                console.log("Wait...Data is loading");
            },
            success:function(response){
                console.log(response);
            },
            error:function(request,error){
                console.log(arguments);
                console.log("Error"+error);
            },           
        });
    });
});