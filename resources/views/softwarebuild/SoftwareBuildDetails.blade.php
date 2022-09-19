@extends('layouts.site')

@section('main')
    <style>
        .chart {
            width: 100%;
            min-height: 450px;
        }
    </style>
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="iq-edit-list usr-edit">
                                <ul class="iq-edit-profile d-flex nav nav-pills">
                                    <li class="col-md-6 p-0">
                                        <a class="nav-link " data-toggle="pill" href="#personal-information">
                                            Quản lý nhiệm vụ
                                        </a>

                                    <li class="col-md-6 p-0">
                                        <a class="nav-link active" data-toggle="pill" id="tab-chart" href="#chang-pwd">
                                            Biểu đồ nhiệm vụ
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="iq-edit-list-data">
                        <div class="tab-content">
                            <div class="tab-pane fade " id="personal-information" role="tabpanel">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Quản lý nhiệm vụ xây dựng phần mềm</h4>
                                            @if (session()->has('successAddTask'))
                                                <div class="alert alert-primary alert-dismiss">
                                                    {{ session()->get('successAddTask') }}
                                                </div>
                                            @elseif(session()->has('failAddTask'))
                                                <div class="alert alert-warning alert-dismiss">
                                                    {{ session()->get('failAddTask') }}
                                                </div>
                                            @endif
                                            </li>
                                        </div>
                                        <a href="page-add-sale.html" id="assign-task" class="btn btn-primary add-list"
                                            url="{{ route('GetDevOfContract') }}" idContract="{{ $idContract }}"
                                            data-toggle="modal" data-target="#ModalAssignTask"><i
                                                class="las la-plus mr-3"></i>Thêm nhiệm vụ</a>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="col-lg-12">
                                                <div class="table-responsive rounded mb-3">
                                                    <table class="data-table table mb-0 tbl-server-info">
                                                        <thead class="bg-white text-uppercase">
                                                            <tr class="ligth ligth-data">
                                                                <th>Tên nhiệm vụ</th>
                                                                <th>Phân công</th>
                                                                <th>Ngày bắt đầu</th>
                                                                <th>Ngày dự kiến kết thúc</th>
                                                                <th>Ngày kết thúc</th>
                                                                <th>Trạng thái</th>
                                                                <th>Thao tác</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="ligth-body">
                                                            @foreach ($taskInfo as $TI)
                                                                <tr>
                                                                    <td>{{ $TI->TaskName }}</td>
                                                                    <td>{{ $TI->name }}</td>
                                                                    <td>{{ $TI->TaskStartTime->format('d-m-Y') }}</td>
                                                                    <td>{{ $TI->ExpectToEnd->format('d-m-Y') }}</td>
                                                                    <td>{{ !empty($TI->TaskEndTime) ? $TI->TaskEndTime : '-----------' }}
                                                                    </td>
                                                                    @if ($TI->Status == 0)
                                                                        <td>
                                                                            <div class="badge badge-warning">Đang chờ</div>
                                                                        </td>
                                                                    @else
                                                                        <td>
                                                                            <div class="badge badge-success">Hoàn thành
                                                                            </div>
                                                                        </td>
                                                                    @endif
                                                                    <td>
                                                                        <div class="d-flex align-items-center list-action">
                                                                            <!-- <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"
                                                href="#"><i class="ri-eye-line mr-0"></i></a> -->
                                                                            <a class="badge bg-success mr-2"
                                                                                data-toggle="tooltip" data-placement="top"
                                                                                title="" data-original-title="Edit"
                                                                                href="#"><i
                                                                                    class="ri-pencil-line mr-0"></i></a>
                                                                            <!-- <a class="badge bg-danger mr-2" data-toggle="modal" data-placement="top" title="" data-original-title="Download" data-target="#ModalDownloadListSale"
                                                href="#"><i class="ri-download-2-line mr-0"></i></a>
                                            <a class="badge bg-warning mr-2" data-toggle="modal" data-placement="top" title="" data-original-title="Add" data-target="#ModalAddListSale"
                                                href="#"><i class="ri-user-unfollow-line mr-0"></i></a> -->
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade active show" id="chang-pwd" role="tabpanel">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Biểu đồ nhiệm vụ</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="card-body ">

                                            <div id="chart_div"></div>


                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page end  -->
        </div>

    </div>
    </div>



@stop()
@extends('layouts.modal')
