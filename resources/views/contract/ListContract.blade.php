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
                        @elseif (session()->has('UpdateContractSucess'))
                        <div class="alert alert-success alert-dismiss">
                            {{ session()->get('UpdateContractSucess') }}
                        </div>
                        @elseif (session()->has('ReCreateContractSuccess'))
                        <div class="alert alert-success alert-dismiss">
                            {{ session()->get('ReCreateContractSuccess') }}
                        </div>
                        @elseif (session()->has('UpFileSuccess'))
                        <div class="alert alert-success alert-dismiss">
                            {{ session()->get('UpFileSuccess') }}
                        </div>
                        @elseif (session()->has('UpfileActSuccess'))
                        <div class="alert alert-success alert-dismiss">
                            {{ session()->get('UpfileActSuccess') }}
                        </div>
                        @endif
                    </div>

                </div>
            </div>

            <div class="col-lg-12">
                <div class="table-responsive rounded mb-3">
                    <table class="data-tables table mb-0 tbl-server-info">
                        <thead class="bg-white text-uppercase">
                            <tr class="ligth ligth-data">
                                <th>ID</th>
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
                                <td>{{ $contL->idContract }}</td>
                                @if(Session::has('erorCreateContract') && $contL->CustomerRequirement->idRequirement == Session::get('idRequirement'))
                                 <td ><b>{{ !empty($contL->CustomerRequirement) ? $contL->CustomerRequirement->SoftwareName :
                                    '' }} (Đã được tạo)</b>
                                </td>
                                @else
                                <td>{{ !empty($contL->CustomerRequirement) ? $contL->CustomerRequirement->SoftwareName :
                                    '' }}
                                </td>
                                @endif

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
                                @endif
                                <td>
                                    <div class="d-flex align-items-center list-action">
                                        <a class="badge bg-primary mr-2" data-toggle="tooltip" data-placement="top"
                                            title="" data-original-title="Tạo file hợp đồng" href="{{route('ReCreateContractWordFile',['id' => $contL->idRequirement])}}"><i
                                                class="ri-add-line mr-0"></i></a>
                                        <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top"
                                            title="" data-original-title="Sửa thông tin" href="{{route('EditContract',['idContract' => $contL->idContract])}}"><i
                                                class="ri-pencil-line mr-0"></i></a>
                                        <a class="badge bg-danger mr-2" data-toggle="tooltip" data-placement="top"
                                            title="" data-original-title="Download/Upload File" data-target="" onclick="showFileContract({{$contL->idRequirement}})"
                                            href="#"><i class="ri-download-2-line mr-0"></i></a>
                                        <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top"
                                            title="" data-original-title="Thêm người dùng vào dự án"
                                            onclick="construct_add_user_to_contract({{ $contL->idContract }})"
                                            data-target="" href="#"><i
                                                class="ri-user-unfollow-line mr-0"></i></a>
                                        <a class="badge bg-dark mr-2" data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="File nghiệm thu" data-target="" onclick="getActFile({{$contL->idContract}})" href="#"><i
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
@section('footer')
<script type="text/javascript" src="{{url('public/site')}}/js/contract.js"></script>
@endsection
