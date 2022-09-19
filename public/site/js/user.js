$(document).ready(function() {
    $(".delete-user").on("click", function (){
        var idUser = $(this).attr("value");
        var UserData = {};
        console.log(idUser);
        $.ajax({
            url: "GetUserbyID/"+ idUser,
            type: "GET",
            data: {
            },
            success: function (data) {
                UserData = data;
                $("#modalDelete").html("Xác nhận khóa người dùng "+ data.name);
                $("#modalDeletebody").html("Bạn có chắc muốn khóa người dùng: <br/>Tên: "+ data.name+" <br/> email : " +data.email+"");
            },
        });
        $("#ModalConfirmDelete").modal("show");
        $("#ConfirmDelete").on("click", function(){
            $.ajax({
                url: "DeleteUser/"+idUser,
                type: "GET",
                data:{},
                success: function (data) {
                    window.location.href = "DeleteSucess";
                }
            });
        });
    });
});
