@extends('layouts.site')
@extends('layouts.modal')

@section('main')
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">

                        <div>
                            <h4 class="mb-3">Danh sách hợp đồng</h4>
                            @if (session()->has('erorCreateContract'))
                                <div class="alert alert-warning alert-dismiss">
                                    {{ session()->get('erorCreateContract') }}
                                </div>
                            @elseif (session()->has('successCreateContract'))
                                <div class="alert alert-success alert-dismiss">
                                    {{ session()->get('successCreateContract') }}
                                </div>
                            @endif
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tất cả
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Chấp nhận</a>
                                <a class="dropdown-item" href="#">Từ chối</a>
                                <a class="dropdown-item" href="#">Chỉnh sửa</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="table-responsive rounded mb-3">
                        <table class="data-tables table mb-0 tbl-server-info">
                            <thead class="bg-white text-uppercase">
                                <tr class="ligth ligth-data">
                                    <th>Tên phần mềm</th>
                                    <th>Người tạo</th>
                                    <th>Ngày tạo</th>
                                    <th>Ngày ký</th>
                                    <th>Tình trạng</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody class="ligth-body">
                                @foreach ($contractList as $contL)
                                    <tr>
                                        <td>{{ !empty($contL->CustomerRequirement) ? $contL->CustomerRequirement->SoftwareName : '' }}
                                        </td>
                                        <td>{{ $contL->CreatorContract->name }}</td>
                                        <td>{{ $contL->CreateDate->format('d-m-Y') }}</td>
                                        <td>{{ !empty($contL->SignDate) ? $contL->SignDate : '' }}</td>
                                        @if ($contL->Status == 0)
                                            <td>
                                                <div class="badge badge-info">Chờ ký</div>
                                            </td>
                                        @elseif ($contL->Status == 1)
                                            <td>
                                                <div class="badge badge-warning">Chờ chỉnh sửa</div>
                                            </td>
                                        @elseif ($contL->Status == 2)
                                            <td>
                                                <div class="badge badge-success">Đã ký</div>
                                            </td>
                                        @elseif ($contL->Status == 3)
                                            <td>
                                                <div class="badge badge-danger">Từ Chối/Hủy</div>
                                            </td>
                                        @elseif ($contL->Status == 4)
                                            <td>
                                                <div class="badge badge-danger">Đã hoàn thành</div>
                                            </td>
                                        @endif
                                        <td>
                                            <div class="d-flex align-items-center list-action">
                                                <a class="badge bg-success mr-2" data-toggle="tooltip" id="EditStatusCT"  value="{{$contL->idContract}}" data-placement="top"
                                                    title="" data-target=""  data-original-title="Sửa trạng thái" href=""><i
                                                        class="ri-pencil-line mr-0"></i></a>
                                                <a class="badge bg-danger mr-2" data-toggle="modal" data-placement="top"
                                                    title="" data-original-title="Download"
                                                    data-target="#ModalDownloadDSHD" href="#"><i
                                                        class="ri-download-2-line mr-0"></i></a>
                                                <a class="badge bg-warning mr-2" data-toggle="modal" data-placement="top"
                                                    title="" data-original-title="Add" onclick="construct_add_user_to_contract({{$contL->idContract}})" data-target="#ModalAddUserToProject"
                                                    href="#"><i class="ri-user-unfollow-line mr-0"></i></a>
                                                <a class="badge bg-dark mr-2" data-toggle="modal" data-placement="top"
                                                    title="" data-original-title="Export"
                                                    data-target="#ModalAcceptanceDocs" href="#"><i
                                                        class="ri-file-edit-fill pr-0"></i></a>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



            <!-- Page end  -->
        </div>
        <!-- Modal Edit -->
        <div class="modal fade" id="edit-note" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup text-left">
                            <div class="media align-items-top justify-content-between">
                                <h3 class="mb-3">Product</h3>
                                <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                            </div>
                            <div class="content edit-notes">
                                <div class="card card-transparent card-block card-stretch event-note mb-0">
                                    <div class="card-body px-0 bukmark">
                                        <div
                                            class="d-flex align-items-center justify-content-between pb-2 mb-3 border-bottom">
                                            <div class="quill-tool">
                                            </div>
                                        </div>
                                        <div id="quill-toolbar1">
                                            <p>Virtual Digital Marketing Course every week on Monday, Wednesday and
                                                Saturday.Virtual Digital Marketing Course every week on Monday</p>
                                        </div>
                                    </div>
                                    <div class="card-footer border-0">
                                        <div class="d-flex flex-wrap align-items-ceter justify-content-end">
                                            <div class="btn btn-primary mr-3" data-dismiss="modal">Cancel</div>
                                            <div class="btn btn-outline-primary" data-dismiss="modal">Save</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop()
