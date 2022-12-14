@extends('layouts.site')
@extends('layouts.modal')
@section('main')
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="mb-3">Danh sách yêu cầu</h4>
                            @if (session()->has('erorCreateContract'))
                                <div class="alert alert-warning alert-dismiss">
                                    {{ session()->get('erorCreateContract') }}
                                </div>
                            @elseif (session()->has('Success'))
                                <div class="alert alert-success alert-dismiss">
                                    {{ session()->get('Success') }}
                                </div>
                            @elseif (session()->has('UpFileSuccess'))
                                <div class="alert alert-success alert-dismiss">
                                    {{ session()->get('UpFileSuccess') }}
                                </div>

                            @elseif (session()->has('UpdateReqSuccess'))
                                <div class="alert alert-success alert-dismiss">
                                    {{ session()->get('UpdateReqSuccess') }}
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
                                    <th>Tên KH</th>
                                    <th>Tên tổ chức</th>
                                    <th>Tên phần mềm</th>
                                    <th>Trạng thái</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody class="ligth-body">
                                @foreach ($data1 as $cusreq)

                                    <tr>
                                        <td>{{ $cusreq->idRequirement }}</td>
                                        <td>{{ !empty($cusreq->CustomerInfo) ? $cusreq->CustomerInfo->CustomerName : '' }}
                                        </td>
                                        <td>{{ !empty($cusreq->CustomerInfo) ? $cusreq->CustomerInfo->OrgName : '' }}</td>
                                        <td>{{ $cusreq->SoftwareName }}</td>

                                        <td>
                                            @if ($cusreq->Status == 0)
                                                <div id="StatusReq" value="{{ $cusreq->Status }}"
                                                    class="badge badge-success">Chấp nhận</div>
                                            @elseif($cusreq->Status == 1)
                                                <div id="StatusReq" value="{{ $cusreq->Status }}"
                                                    class="badge badge-danger">Từ chối</div>
                                            @elseif($cusreq->Status == 2)
                                                <div id="StatusReq" value="{{ $cusreq->Status }}"
                                                    class="badge badge-warning">Chính sửa</div>
                                            @elseif($cusreq->Status == 3)
                                                <div id="StatusReq" value="{{ $cusreq->Status }}"
                                                    class="badge badge-info">
                                                    Đã tiếp nhận</div>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center list-action">
                                                @if ($cusreq->Status == 0)
                                                    <a class="badge badge-info mr-2 add-contract" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Thêm hợp đồng"

                                                        href="{{ route('CreateContractWordFile', ['id' => $cusreq->idRequirement]) }}"><i
                                                            class="ri-add-line mr-0"></i></a>
                                                @endif
                                                <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top"
                                                    title="" data-original-title="Cập nhật thông tin" href="{{route('EditCustomerReq', ['idReq' => $cusreq->idRequirement])}}"><i
                                                        class="ri-pencil-line mr-0"></i></a>
                                                        <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="Xem lịch sử trạng thái" href="#" onclick="ShowReqLog({{$cusreq->idRequirement}})"><i
                                                            class="ri-eye-line mr-0"></i></a>
                                                <a class="badge bg-danger mr-2 "
                                                    onclick="showFileReqData({{ $cusreq->idRequirement }})"
                                                    data-toggle="tooltip" data-toggle="tooltip"
                                                    data-target="" id="BtnShowFileReqData" data-placement="top" title=""
                                                    data-original-title="Download/Upload File" href="#"><i
                                                        class="ri-download-2-line mr-0"></i></a>

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
<script type="text/javascript" src="{{url('public/site')}}/js/customerReq.js"></script>
@endsection
