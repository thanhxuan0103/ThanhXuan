// Hiện danh sách các file yêu cầu khách hàng theo hợp đồng
function showFileReqData(id) {
    $("#ModalDownload").modal("show");
    $("#form-add-file").append(
        "<input type='hidden' name='idPrefix' value='" + id + "'>"+
        "<input type='hidden' name='Prefix' value='YCKH'>"
    );
    $.ajax({
        url: "getFileReq/" + id,
        type: "GET",
        data: {},
        success: function (data) {
            $.each(data, function (key, val) {
                date = val.UploadDate.substring(0, 10);
                row =
                    "<tr><td>  " +
                    val.File +
                    "  </td><td> " +
                    val.FileName +
                    " </td><td> " +
                    date +
                    " </td><td> " +
                    val.FileName +
                    ' </td><td><a class="badge bg-danger mr-2" data-toggle="tooltip" data-placement="top" title data-original-title="Download"  href="downloadFile/' +
                    val.idFile +
                    '"><i class="ri-download-2-line mr-0"></i></a></td></tr>';
                $("#ListFile ").append(row);
            });
        },
    });
}

$("#ModalDownload").on("hidden.bs.modal", function () {
    $("#ListFile").empty();
});


function ShowReqLog(idReq){
    $("#ModalLogReq").modal("show");
    $.ajax({
        url: "GetReqLog/" + idReq,
        type : "GET",
        data:{},
        success: function (data) {

            $.each(data, function (key, val) {
                var oldstat = "",newstat="";

                for(var i = 0; i < 4; i++){
                    if(val.NewStatus == 0){
                        newstat = "Chấp nhận";
                    }else if(val.NewStatus == 1){
                        oldstat = "Từ chối";
                    }else if(val.NewStatus == 2){
                        newstat = "Chỉnh sửa";
                    }else if(val.NewStatus == 3){
                        newstat = "Tiếp nhận";
                    };
                    if(val.OldStatus == 0){
                        oldstat = "Chấp nhận";
                    }else if(val.NewStatus == 1){
                        oldstat = "Từ chối";
                    }else if(val.NewStatus == 2){
                        oldstat = "Chỉnh sửa";
                    }else if(val.NewStatus == 3){
                        oldstat = "Tiếp nhận";
                    };

                };
                row = "<tr><td>"+val.idReqLog+"</td><td>"+oldstat+"</td><td>"+newstat+"</td><td>"+val.Date+"</td><td>"+val.Reason+"</td><td>"+val.name+"</td></tr>";
                $(".ReqLog ").append(row);

            });
        }



    });
}
$("#ModalLogReq").on("hidden.bs.modal", function () {
    $(".ReqLog").empty();
});
