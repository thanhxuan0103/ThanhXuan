@extends('layouts.site')
@extends('layouts.modal')
@section('main')
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="mb-3">Danh sách xây dựng phần mềm</h4>
                        </div>

                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="table-responsive rounded mb-3">
                        <table class="data-tables table mb-0 tbl-server-info">
                            <thead class="bg-white text-uppercase">
                                <tr class="ligth ligth-data">
                                    <th>Tên dự án</th>
                                    <th>Ngày bắt đầu</th>
                                    <th>Ngày kết thúc</th>
                                    <th>Trạng thái</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody class="ligth-body">
                                @if($data1 == null){
                                    <tr>
                                        <td>
                                            <div class="d-flex p-2">Chưa có dự án nào được phê duyệt</div>
                                        </td>
                                    </tr>
                                }
                                @else
                                @foreach ($data1 as $Project)
                                <tr>
                                    <td>{{ $Project->CustomerRequirement->SoftwareName }}</td>
                                    <td>{{ $Project->SignDate->format('d-m-Y') }}</td>
                                    <td>--------</td>
                                    <td>
                                        <div class="badge badge-success">Hoàn thành</div>
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center list-action">
                                            <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="View"
                                                href="SoftwareBuildDetails/{{$Project->idContract}}" "><i
                                                    class="ri-eye-line mr-0"></i></a>
                                            <a class="badge bg-danger mr-2" data-toggle="modal" data-placement="top"
                                                title="" data-original-title="Download"
                                                data-target="#ModalDownloadXDPM" href="#"><i
                                                    class="ri-download-2-line mr-0"></i></a>
                                            <a class="badge bg-warning mr-2" data-toggle="modal" data-placement="top"
                                                title="" data-original-title="Add" data-target="#ModalAddXDPM"
                                                href="#"><i class="ri-user-unfollow-line mr-0"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Page end  -->
        </div>


    </div>

@stop()
