@extends('layouts.site')
@section('main')
@php
    $data =  App\Models\User::find(session()->get('loginID'));

@endphp
<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-transparent card-block card-stretch card-height border-none">

                    <div class="card-body p-0 mt-lg-2 mt-0">
                        <h3 class="mb-3">Xin chào {{ $data->name}}</h3>
                        <p class="mb-0 mr-4">Trang chủ cho phép bạn theo dõi các tiến trình dự án.</p>
                    </div>
                    <div>
                        @if (session()->has('AlreadyLoggedIn'))
                            <div class="alert alert-warning alert-dismiss">
                                <strong>{{ session()->get('AlreadyLoggedIn') }}</strong>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4 card-total-sale">
                                    <div class="icon iq-icon-box-2 bg-info-light">
                                        <img src="{{url('public/site')}}/images/product/1.png" class="img-fluid" alt="image">
                                    </div>
                                    <div>
                                        <p class="mb-2">Tổng dự án</p>
                                        <h4>{{count($listProject)}}</h4>
                                    </div>
                                </div>
                                <div class="iq-progress-bar mt-2">
                                    <span class="bg-info iq-progress progress-1" data-percent="85">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Dự án đang tham gia</h4>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table data-tables table-striped">
                                <thead>
                                    <tr class="ligth">
                                        <th>Tên dự án</th>
                                        <th>Phụ trách</th>
                                        <th>Tình trạng dự án</th>
                                        <th>Tiến độ tổng thể</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($listProject as $pj )

                                    @endforeach
                                    <tr>
                                        <td>{{$pj->CustomerRequirement->SoftwareName}}</td>
                                        <td>{{$pj->CreatorContract->name}}</td>
                                        @if ($pj->Status == 0)
                                        <td>
                                            <div class="badge badge-info">Chờ ký</div>
                                        </td>
                                        @elseif ($pj->Status == 1)
                                        <td>
                                            <div class="badge badge-warning">Chờ chỉnh sửa</div>
                                        </td>
                                        @elseif ($pj->Status == 2)
                                        <td>
                                            <div class="badge badge-success">Đã ký</div>
                                        </td>
                                        @elseif ($pj->Status == 3)
                                        <td>
                                            <div class="badge badge-danger">Từ Chối/Hủy</div>
                                        </td>
                                        @endif
                                        <td>{{rand(1,100)}}</td>


                                    </tr>

                                </tbody>
                                <!-- <tfoot>
                               <tr>
                                  <th>Name</th>
                                  <th>Position</th>
                                  <th>Office</th>
                                  <th>Age</th>
                                  <th>Start date</th>
                                  <th>Salary</th>
                               </tr>
                            </tfoot> -->
                            </table>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Công việc đang tham gia</h4>
                            </div>
                        </div>
                        <div class="table-responsive m-4">
                            <table id="datatable" class="table data-tables table-striped">
                                <thead>
                                    <tr class="ligth">
                                        <th>Tên dự án</th>
                                        <th>Phụ trách</th>
                                        <th>Tình trạng dự án</th>
                                        <th>Tiến độ tổng thể</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tasks as $task)


                                    <tr>
                                        <td>{{ $task->TaskToContract->CustomerRequirement->SoftwareName}}</td>
                                        <td>{{$task->UserTask->name}}</td>
                                        @if ($task->Status == 0)
                                        <td>
                                            <div class="badge badge-info">Đang thực hiện</div>
                                        </td>
                                        @elseif ($task->Status == 1)
                                        <td>
                                            <div class="badge badge-warning">Đã hoàn thành</div>
                                        </td>
                                        @elseif ($task->Status == 2)
                                        <td>
                                            <div class="badge badge-success">Trễ hạn</div>
                                        </td>
                                        @elseif ($task->Status == 3)
                                        <td>
                                            <div class="badge badge-danger">Từ Chối/Hủy</div>
                                        </td>
                                        @endif
                                        <td>{{rand(1,100)}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <!-- <tfoot>
                               <tr>
                                  <th>Name</th>
                                  <th>Position</th>
                                  <th>Office</th>
                                  <th>Age</th>
                                  <th>Start date</th>
                                  <th>Salary</th>
                               </tr>
                            </tfoot> -->
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-8">
                <div class="card card-block card-stretch card-height">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Order Summary</h4>
                        </div>
                        <div class="card-header-toolbar d-flex align-items-center">
                            <div class="dropdown">
                                <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton005"
                                    data-toggle="dropdown">
                                    This Month<i class="ri-arrow-down-s-line ml-1"></i>
                                </span>
                                <div class="dropdown-menu dropdown-menu-right shadow-none"
                                    aria-labelledby="dropdownMenuButton005">
                                    <a class="dropdown-item" href="#">Year</a>
                                    <a class="dropdown-item" href="#">Month</a>
                                    <a class="dropdown-item" href="#">Week</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center mt-2">
                            <div class="d-flex align-items-center progress-order-left">
                                <div class="progress progress-round m-0 orange conversation-bar" data-percent="46">
                                    <span class="progress-left">
                                        <span class="progress-bar"></span>
                                    </span>
                                    <span class="progress-right">
                                        <span class="progress-bar"></span>
                                    </span>
                                    <div class="progress-value text-secondary">46%</div>
                                </div>
                                <div class="progress-value ml-3 pr-5 border-right">
                                    <h5>$12,6598</h5>
                                    <p class="mb-0">Average Orders</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center ml-5 progress-order-right">
                                <div class="progress progress-round m-0 primary conversation-bar" data-percent="46">
                                    <span class="progress-left">
                                        <span class="progress-bar"></span>
                                    </span>
                                    <span class="progress-right">
                                        <span class="progress-bar"></span>
                                    </span>
                                    <div class="progress-value text-primary">46%</div>
                                </div>
                                <div class="progress-value ml-3">
                                    <h5>$59,8478</h5>
                                    <p class="mb-0">Top Orders</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div id="layout1-chart-5"></div>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- Page end  -->
    </div>
</div>

@stop()
