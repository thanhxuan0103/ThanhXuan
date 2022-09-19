//Xây dựng phần mềm

var GetDevOfContractRoute;
$(document).ready(function () {
    GetDevOfContractRoute = $("#assign-task").attr("url");
    var idContract = $("#assign-task").attr("idContract");
    $('#form-assign-task').append('<input type="hidden" name="idContract" value="'+idContract+'" />');
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: GetDevOfContractRoute,
        type: "POST",
        data: {
            idContract: idContract,
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
            var opt = '<option value="" disabled>Chưa có nhân viên để phần công</option>'
            $("#showUserToSelect").selectpicker("refresh");
        }

    })

});

google.charts.load('current', {'packages':['timeline']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var container = document.getElementById('chart_div');
        var chart = new google.visualization.Timeline(container);
        var dataTable = new google.visualization.DataTable();

        dataTable.addColumn({ type: 'string', id: 'President' });
        dataTable.addColumn({ type: 'date', id: 'Start' });
        dataTable.addColumn({ type: 'date', id: 'End' });
        dataTable.addRows([
          [ 'Washington', new Date(1789, 3, 30), new Date(1797, 2, 4) ],
          [ 'Adams',      new Date(1797, 2, 4),  new Date(1801, 2, 4) ],
          [ 'Jefferson',  new Date(1801, 2, 4),  new Date(1809, 2, 4) ]]);

        chart.draw(dataTable);
      }
