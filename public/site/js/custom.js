

var UserListToAdd = [];
var idIndirectManagerListDiv = "#list-indirect-manager";
var idDirectManagerListDiv = "#list-direct-manager";
var idDeveloperListDiv = "#list-developer";
$("input[type=datetime-local]").flatpickr({

});

var dateStart = $("#date-start").flatpickr({
    altInput: true,
    altFormat: "d-m-Y",
    dateFormat: "Y-m-d",
    minDate: 'today',
    onChange: function (selectedDates, dateStr, instance) {
        dateEnd.set('minDate', dateStr)
    },
});
var dateEnd = $("#date-end").flatpickr({
    altInput: true,
    altFormat: "d-m-Y",
    dateFormat: "Y-m-d",
    minDate: new Date().fp_incr(1),
    onChange: function (selectedDates, dateStr, instance) {
        dateStart.set('maxDate', dateStr)
    }
});

$(document).ready(function () {

    // $(".js-search-customer-by-name").select2();
    $("#SearchUserInput").keyup(function () {
        var value = $(this).val().toLowerCase();
        $("#UserList h6").filter(function () {
            $(this)
                .parents("#User-to-pick")
                .toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });

    $("#ModalDownloadYCKH").on("hidden.bs.modal", function () {
        $("#YCKHListFile").empty();
    });
    $("#ModalAddUserToProject").on("hidden.bs.modal", function () {
        $(idIndirectManagerListDiv).empty();
        $(idDirectManagerListDiv).empty();
        $(idDeveloperListDiv).empty();
        $("#UserList").empty();
        $(".btn-add-to-project").prop("disabled", false);
        UserListToAdd = [];
    });
    // Lấy danh sách các quản lý để thêm vào quản lý trực tiếp dự án
    $("#btn-Add-direct-manager").on("click", function () {
        $("#list-direct-manager").empty();
        $(this).prop("disabled", true);
        $("#btn-Add-indirect-manager").prop("disabled", true);
        $("#btn-Add-Developer").prop("disabled", true);
        var id = $(this).attr("value");
        $("#btn-confirm-add-user").attr("onclick", "addDirectManager()");
        $("#title-add-user").text("Quản lý trực tiếp");
        GetEmplByRole(1);
    });
    // Lấy danh sách các quản lý để thêm vào quản lý gián tiếp dự án
    $("#btn-Add-indirect-manager").on("click", function () {
        $("#list-indirect-manager").empty();
        $(this).prop("disabled", true);
        $("#btn-Add-Developer").prop("disabled", true);
        $("#btn-Add-direct-manager").prop("disabled", true);
        var id = $(this).attr("value");
        $("#btn-confirm-add-user").attr("onclick", "addIndirectManager()");
        $("#title-add-user").text("Quản lý gián tiếp");
        GetEmplByRole(2);
    });
    // Lấy danh sách các lập trình viên để thêm vào lập trình viên
    $("#btn-Add-Developer").on("click", function () {
        $("#list-developer").empty();
        $(this).prop("disabled", true);
        $("#btn-Add-indirect-manager").prop("disabled", true);
        $("#btn-Add-direct-manager").prop("disabled", true);
        var id = $(this).attr("value");
        $("#btn-confirm-add-user").attr("onclick", "addDeveloper()");
        $("#title-add-user").text("Lập trình viên");
        GetEmplByRole(3);
    });
    $("#btn-add-selected-user-to-project").on("click", function () {
        $('#ModalAddUserToProject').modal('hide');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
        var idContract = $(".btn-add-to-project").attr("value");
        var listDirectManager = [];
        $('#list-direct-manager li').each(function (i, e) {
            listDirectManager[i] = { idUser: ($(this).attr("id")) };
        });
        listDirectManager.unshift({ idContract: idContract });
        var listInirectManager = [];
        $('#list-indirect-manager li').each(function (i, e) {
            listInirectManager[i] = { idUser: ($(this).attr("id")) };
        });
        listInirectManager.unshift({ idContract: idContract });
        var listDeveloper = [];
        $('#list-Developer li').each(function (i, e) {
            listDeveloper[i] = { idUser: ($(this).attr("id")) };
        });
        listDeveloper.unshift({ idContract: idContract });

        var JsonStringDM = JSON.stringify(Object.assign({}, listDirectManager));
        var status = 0;
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "AddDirectManagerToProject",
            type: "POST",
            data: {
                data: JsonStringDM
            },
            success: function (data) {
            },
            error: function () {
            }
        });
        var JsonStringIM = JSON.stringify(Object.assign({}, listInirectManager));
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "AddIndirectManagerToProject",
            type: "POST",
            data: {
                data: JsonStringIM
            },
            success: function (data) {
            },
            error: function () {
            }
        });
        var JsonStringDEV = JSON.stringify(Object.assign({}, listDeveloper));
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "AddDeveloperToProject",
            type: "POST",
            data: {
                data: JsonStringDEV
            },
            success: function (data) {
            },
            error: function () {
            }
        });
        // alert("Cập nhật thành công")
        $.toast({
            text: "Cập nhật người dùng thành công!", // Text that is to be shown in the toast
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

    });

});

// Thêm các người dùng vào UserList
$(document).on("click", ".add-this-user", function () {
    var UserToAdd = []
    $("#flexCheckChecked:checked").each(function () {

        var val = $(this).attr("value");
        var name = $(this).attr("name");
        var typeUser = $(this).attr("typeUser");
        UserToAdd.push({ 'id': val });
    });
    UserListToAdd = UserToAdd;
});
$(document).on("click", ".btn-add-to-project", function () {

});
// Hiện danh sách các file yêu cầu khách hàng theo hợp đồng
function showFileReqData(id) {
    $("#form-add-file-req").append(
        "<input type='hidden' name='idPrefix' value='" + id + "'>"
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
                    ' </td><td><a class="badge bg-danger mr-2" data-toggle="tooltip" data-placement="top" title data-original-title="Download"  href="downloadFileReq/' +
                    val.idFile +
                    '"><i class="ri-download-2-line mr-0"></i></a></td></tr>';
                $("#YCKHListFile").append(row);
            });
        },
    });
}
// Tạo id hợp đồng cho nút thêm
function construct_add_user_to_contract(id) {

    $(".btn-add-to-project").attr("value", id);
    $.ajax({
        url: "GetUserParticipate/" + id,
        type: "GET",
        data: {},
        success: function (data) {
            $.each(data, function (key, val) {
                if (val.idRole == 1) {
                    InsertEmplToDiv(val.id, idDirectManagerListDiv);
                }
                if (val.idRole == 2) {
                    InsertEmplToDiv(val.id, idIndirectManagerListDiv);
                }
                if (val.idRole == 3) {
                    InsertEmplToDiv(val.id, idDeveloperListDiv);
                }
            });
        },
    });
}
// thêm danh sách quản lý dự án đã chọn vào vị trí quản lý trực tiếp
function addDirectManager() {
    $("#UserList").empty();
    $("#title-add-user").text("Vai Trò");
    $("#btn-Add-direct-manager").prop("disabled", false);
    $("#btn-Add-indirect-manager").prop("disabled", false);
    $("#btn-Add-Developer").prop("disabled", false);
    for (let i = 0; i < UserListToAdd.length; i++) {
        InsertSelectedEmplToDiv(UserListToAdd[i].id, idDirectManagerListDiv)
        $("#btn-confirm-add-user").attr("onclick", "");
    }

    UserListToAdd = [];
}
// thêm danh sách quản lý dự án đã chọn vào vị trí quản lý gián tiếp
function addIndirectManager() {
    $("#UserList").empty();
    $("#title-add-user").text("Vai Trò");
    $("#btn-Add-indirect-manager").prop("disabled", false);
    $("#btn-Add-direct-manager").prop("disabled", false);
    $("#btn-Add-Developer").prop("disabled", false);
    for (let i = 0; i < UserListToAdd.length; i++) {
        InsertSelectedEmplToDiv(UserListToAdd[i].id, idIndirectManagerListDiv)
        $("#btn-confirm-add-user").attr("onclick", "");
    }

    UserListToAdd = [];
}
// thêm danh sách quản lý dự án đã chọn vào vị trí lập trình viên
function addDeveloper() {
    $("#UserList").empty();
    $("#title-add-user").text("Vai Trò");
    $("#btn-Add-Developer").prop("disabled", false);
    $("#btn-Add-direct-manager").prop("disabled", false);
    $("#btn-Add-indirect-manager").prop("disabled", false);
    for (let i = 0; i < UserListToAdd.length; i++) {
        InsertSelectedEmplToDiv(UserListToAdd[i].id, idDeveloperListDiv)
        $("#btn-confirm-add-user").attr("onclick", "");
    }

    UserListToAdd = [];
}
function InsertSelectedEmplToDiv(idUser, idListDiv) {
    var role;
    var idContract = $(".btn-add-to-project").attr("value");
    if (idListDiv == "#list-direct-manager") {
        role = 1;
    } else if (idListDiv == "#list-indirect-manager") {
        role = 2;
    } else {
        role = 3;
    }
    $.ajax({
        url: "GetEmplById/" + idUser,
        type: "GET",
        data: {},
        success: function (data) {
            $.each(data, function (key, val) {

                var userHtml =
                    '<li id=' + val.id + ' class="d-flex align-items-center p-3"><div class="user-img img-fluid"><img src="../public/site/images/user/01.jpg" alt="story-img" class="rounded avatar-40"></div><div class="media-support-info ml-3"><h6 class="d-inline-block">' + val.name + '</h6><p class="mb-0">' + val.GroupName + '</p></div></li>';
                $(idListDiv).append(userHtml);

            });
        }
    })
}
// Lấy thông tin nhân viên đang trong dự án vào thẻ tương
function InsertEmplToDiv(idUser, idListDiv) {
    var role;
    var idContract = $(".btn-add-to-project").attr("value");
    if (idListDiv == "#list-direct-manager") {
        role = 1;
    } else if (idListDiv == "#list-indirect-manager") {
        role = 2;
    } else {
        role = 3;
    }
    $.ajax({
        url: "GetEmplById_Contract/" + idUser + "/" + idContract,
        type: "GET",
        data: {},
        success: function (data) {
            $.each(data, function (key, val) {
                if (val.idRole == role && val.idContract == idContract) {
                    var userHtml =
                        '<li id=' + val.id + ' class="d-flex align-items-center p-3"><div class="user-img img-fluid"><img src="../public/site/images/user/01.jpg" alt="story-img" class="rounded avatar-40"></div><div class="media-support-info ml-3"><h6 class="d-inline-block">' + val.name + '</h6><p class="mb-0">' + val.GroupName + '</p></div></li>';
                    $(idListDiv).append(userHtml);
                }
            });
        },
    });
}
// Lấy thông tin nhân viên bằng vai trò
function GetEmplByRole(role) {
    var idContract = $(".btn-add-to-project").attr("value");
    var idRole = role;
    var type = 1;
    if (role != 3) {
        type = 2;
    }
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "GetEmplByType",
        type: "POST",
        data: {
            idContract: idContract,
            type: type,
            idRole: idRole,
        },
        success: function (data) {
            $.each(data, function (key, val) {
                var participate = "";
                if (val.idContract == idContract && val.idRole == idRole) {
                    participate = "checked";
                    UserListToAdd.push({ id: val.id });
                }

                var userHtml =
                    '<div id="User-to-pick" class="iq-todo-friendlist mt-3 "><ul class="suggestions-lists m-0 p-0"><li class="d-flex mb-4 align-items-center"><div class="user-img img-fluid"><img src="../public/site/images/user/01.jpg" alt="story-img" class="rounded avatar-40"></div><div class="media-support-info ml-3"><h6>' +
                    val.name +
                    '</h6><p class="mb-0">' + val.GroupName + '</p></div><div class="form-check"><input class="form-check-input add-this-user" type="checkbox" ' +
                    participate +
                    ' value="' +
                    val.id +
                    '"  id="flexCheckChecked" name="' + val.name + '" typeUser="' + val.GroupName + '"><label class="form-check-label" for="flexCheckChecked"></label></div></li></ul></div>';

                $("#UserList").append(userHtml);

            });
        },
    });
}
// Lấy thông tin của lập trình viên in vào thẻ lập trình viên
function getDeveloperById(idUser, idListDiv) {
    var role;
    if (idListDiv == "#list-direct-manager") {
        role = 1;
    } else if (idListDiv == "#list-indirect-manager") {
        role = 2;
    } else {
        role = 3;
    }
    $.ajax({
        url: "AddDeveloper/" + idUser,
        type: "GET",
        data: {},
        success: function (data) {

            var userHtml =
                '<li id=' + data[0].id + ' class="d-flex align-items-center p-3"><div class="user-img img-fluid"><img src="../public/site/images/user/01.jpg" alt="story-img" class="rounded avatar-40"></div><div class="media-support-info ml-3"><h6 class="d-inline-block">' + data[0].name + '</h6><span class="badge badge-warning ml-3 text-white">Ten</span><p class="mb-0">' + data[0].GroupName + '</p></div></li>';
            $(idListDiv).append(userHtml);

        },
    });
}
// Lấy thông tin Lập trình viên để chọn
function getDeveloper() {
    var idContract = $(".btn-add-to-project").attr("value");
    $.ajax({
        url: "GetDeveloper/" + idContract,
        type: "GET",
        data: {},
        success: function (data) {
            $.each(data, function (key, val) {
                var participate = "";
                if (val.idContract == idContract && val.idRole != null && val.idRole == 3) {
                    participate = "checked";

                }
                var userHtml =
                    '<div id="User-to-pick" class="iq-todo-friendlist mt-3 "><ul class="suggestions-lists m-0 p-0"><li class="d-flex mb-4 align-items-center"><div class="user-img img-fluid"><img src="../public/site/images/user/01.jpg" alt="story-img" class="rounded avatar-40"></div><div class="media-support-info ml-3"><h6>' +
                    val.name +
                    '</h6><p class="mb-0">' + val.GroupName + '</p></div><div class="form-check"><input class="form-check-input add-this-user" type="checkbox" ' +
                    participate +
                    ' value="' +
                    val.id +
                    '"  id="flexCheckChecked" name="' + val.name + '" typeUser="' + val.GroupName + '"><label class="form-check-label" for="flexCheckChecked"></label></div></li></ul></div>';

                $("#UserList").append(userHtml);
            });
        },
    });
}
/*------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

//Xây dựng phần mềm

var GetDevOfContractRoute;
var GetChartRoute;
var idContractTask;
var ChartData = [];
$(document).ready(function () {
    GetDevOfContractRoute = $("#assign-task").attr("url");
    var idContractTask = $("#assign-task").attr("idContract");
    $('#form-assign-task').append('<input type="hidden" name="idContract" value="'+idContractTask+'" />');
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: GetDevOfContractRoute,
        type: "POST",
        data: {
            idContract: idContractTask,
        },
        success: function (data) {
            $.each(data,function(key, val){
                // console.log(val.id);
                var opt = '<option value="'+val.id+'">'+val.name+'</option>'
                $('#showUserToSelect').append(opt);
                $("#showUserToSelect").selectpicker("refresh");
            });
        },
        error: function () {
            $('#ModalAssignTask').modal('hide');
            var opt = '<option value="" disabled>Chưa có nhân viên để phân công</option>'
            $('#showUserToSelect').append(opt);
            $("#showUserToSelect").selectpicker("refresh");
        }

    })
    var idContractTask = $("#assign-task").attr("idContract");
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url:'GetChartData',
        method:"POST",
        type: "POST",
        data:{
            idContract: idContractTask,
        },
        success: function(data){
        // console.log(data);
        // $.each(data, function(key, val){
            // var DateStart = new Date(val.TaskStartTime);
            // var DateExpectToEnd = new Date( val.ExpectToEnd);
            // ChartData.push([val.TaskName,val.TaskDesc,val.TaskStartTime,val.ExpectToEnd]);
            ChartData = data;
        // });
        console.log(ChartData);
        // console.log(JSON.parse(JSON.stringify(ChartData)));

        }
    })

});

google.charts.load('current', {'packages':['timeline']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var container = document.getElementById('chart_div');
        var chart = new google.visualization.Timeline(container);
        var dataTable = new google.visualization.DataTable();
        var options = {
            chartArea: {
              // leave room for y-axis labels
              width: '94%'
            },
            legend: {
              position: 'top'
            },
            width: '100%',
            height: '800',
          };

        dataTable.addColumn({ type: 'string', id: 'TaskName' });
        dataTable.addColumn({ type: 'string', id: 'TaskID' });
        dataTable.addColumn({ type: 'date', id: 'Start' });
        dataTable.addColumn({ type: 'date', id: 'End' });
        // dataTable.addRows([
        //   [ 'Washington','dummyStackItem', new Date(1789, 3, 30), new Date(1790, 2, 4) ],
        //   [ 'Adams', 'dummyStackItem1',     new Date(1789, 2, 4),  new Date(1790, 2, 4) ],
        //   [ 'Jefferson', 'dummyStackItem2', new Date(1789, 2, 4),  new Date(1790, 2, 4) ]]);
          $.each(ChartData, function(key, val) {
            dataTable.addRow([
                val.TaskName,val.TaskDesc, new Date(val.TaskStartTime), new Date(val.ExpectToEnd)
            ]);
          });
        // dataTable.addRows(ChartData);

        chart.draw(dataTable,options);
      }






