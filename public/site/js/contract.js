function showFileContract(id) {
    $("#ModalDownload").modal("show");
    $("#form-add-file").append(
        "<input type='hidden' name='idPrefix' value='" + id + "'>"+
        "<input type='hidden' name='Prefix' value='CTF'>"
    );
    $.ajax({
        url: "getFileContract/" + id,
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
$(document).ready(function () {
    $(".checkbox-input").attr("disabled","true");
    $(".checkbox-input").prop("checked",false);
    $("#ModalAcceptanceDocs").on('hidden.bs.modal', function(){
    $(".checkbox-input").prop("checked",false);
    $(".status-file-act").empty();
    $(".download-file").attr("href","#");
    $(".custom-file-input").prop("disabled",false);
    $(".update-status-actp").prop('disabled',true);
    $('.selectpicker').selectpicker('refresh');
    // $(".update-status-actp").prop('disabled',true);

    });
});
$(".update-file").on('click',function(){
    var fileCheck = $(this).attr("name");
    // console.log(typeFile);
    $("input[id=" + fileCheck + "]").prop("disabled", false);


})
$(".update-status").on('click',function(){
    var name = $(this).attr("name");
    console.log(name);
})
$(".download-file").on('click', function(){
    var idContract = $("#ModalAcceptanceDocs").attr("idContract");
    var typeFile = $(this).attr("name");
    $.ajax({
        url: "DownloadAcpFile/"+idContract+"/"+typeFile,
        type:"GET",
        success:function(){
            $.toast({
                text: "Download thành công", // Text that is to be shown in the toast
                heading: 'Success', // Optional heading to be shown on the toast
                icon: 'success', // Type of toast icon
                showHideTransition: 'slide', // fade, slide or plain
                allowToastClose: true, // Boolean value true or false
                hideAfter: 3000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
                stack: 5, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
                position: 'top-right', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values



                textAlign: 'left',  // Text alignment i.e. left, right or center
                loader: true,  // Whether to show loader or not. True by default
                loaderBg: '#ff7e41 ',  // Background color of the toast loader
                bgColor: '#32bdea',
                textColor: 'white',
                beforeShow: function () { }, // will be triggered before the toast is shown
                afterShown: function () { }, // will be triggered after the toat has been shown
                beforeHide: function () { }, // will be triggered before the toast gets hidden
                afterHidden: function () { }  // will be triggered after the toast has been hidden
            });
        },
        error:function(){
            $.toast({
                text: "File Không tồn tại", // Text that is to be shown in the toast
                heading: 'Error', // Optional heading to be shown on the toast
                icon: 'error', // Type of toast icon
                showHideTransition: 'slide', // fade, slide or plain
                allowToastClose: true, // Boolean value true or false
                hideAfter: 3000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
                stack: 5, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
                position: 'top-right', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values



                textAlign: 'left',  // Text alignment i.e. left, right or center
                loader: true,  // Whether to show loader or not. True by default
                loaderBg: '#ff7e41 ',  // Background color of the toast loader
                bgColor: '#32bdea',
                textColor: 'white',
                beforeShow: function () { }, // will be triggered before the toast is shown
                afterShown: function () { }, // will be triggered after the toat has been shown
                beforeHide: function () { }, // will be triggered before the toast gets hidden
                afterHidden: function () { }  // will be triggered after the toast has been hidden
            });
        }

    });
});

function getActFile(idContract){
    $("#ModalAcceptanceDocs").modal("show");
    $("#ModalAcceptanceDocs").attr("idContract",idContract);
    $("#form-fileAct").append(
        "<input type='hidden' name='idContract' id='" + idContract +"' value='" + idContract +"'>"
    );
    $.ajax({
        url:"getFileAct/"+ idContract,
        type:"GET",
        data:{},
        success: function (data) {
            $.each(data, function (key, val){
                var stat;
                console.log(test);
                var fileCheck = alphaOnly(val.ActFileName);
                $(".download-file[name="+fileCheck+"]").attr("href",'DownloadAcpFile/'+idContract+'/'+fileCheck)
               if (val.Status == 0){
                stat = '<div class="badge badge-info">Chờ ký</div>';
                $(".StatusFile"+fileCheck).append(stat);
               }
               else if (val.Status == 1){
                stat = '<div class="badge badge-warning">Chờ chỉnh sửa</div>';
                $(".StatusFile"+fileCheck).append(stat);
               }
               else if (val.Status == 2){
                stat = '<div class="badge badge-success">Đã ký</div>';
                $(".StatusFile"+fileCheck).append(stat);
            }
               else if (val.Status == 3){
                stat = '<div class="badge badge-danger">Từ Chối/Hủy</div>';
                $(".StatusFile"+fileCheck).append(stat);
            }

               $("#check"+fileCheck).prop("checked", true);
               $("input[id=" + fileCheck + "]").prop("disabled", true);

               $("#Status"+fileCheck).prop("disabled",true);
               $('.selectpicker').selectpicker('refresh');

            });
        }
    })
}
function alphaOnly(a) {
    var b = '';
    for (var i = 0; i < a.length; i++) {
        if (a[i] >= 'A' && a[i] <= 'z') b += a[i];
    }
    return b;
}
function checkOnUpload(){
    $("input:file").change(function (){
        var fileType = $(this).attr("id");
        $("#check"+fileType).prop("checked", true);
      });


}
