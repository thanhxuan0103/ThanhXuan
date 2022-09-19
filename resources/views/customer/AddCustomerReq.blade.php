@extends('layouts.site')
@extends('layouts.modal')
@section('main')
<style>
    .btn-light {
        background : none;
    }


</style>
<script type="text/javascript" src="{{url('public/site')}}/ckeditor/ckeditor.js"></script>
<div class="content-page">
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Thêm yêu cầu khách hàng</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('StoreCustomerReq')}}" method="POST" data-toggle="validator">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Khách hàng</label>
                                </div>
                                <div class="col-md-12">

                                        <div class="form-group">
                                            <div class="row justify-content-between">
                                                <div class="col-12 col-md-8">
                                                    <select name="idCustomer" id="CustomerName" data-live-search="true" class="form-control selectpicker " >
                                                    <option value="" selected disabled>-- Chọn khách hàng --</option>
                                                        @foreach($data1 as $cusinfo)
                                                        <option value="{{$cusinfo->idCustomer}}">{{$cusinfo->CustomerName}} ({{$cusinfo->CustomerPhone}})</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-6 col-md-4">
                                                    <a class="btn btn-info btn-lg" data-toggle="modal" data-placement="top" title="" data-original-title="Thêm mới" data-target="#ModalAddKhachHang" href="#">Thêm khách hàng mới</i></a>
                                                </div>
                                            </div>
                                        </div>

                                        @error('idCustomer')
                                        <div class="alert alert-warning">{{$message}}</div>
                                        @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tên phần mềm *</label>
                                        <input name="SoftwareName" type="text" class="form-control" placeholder="Vui lòng nhập tên" data-errors="Please Enter Name." required>
                                        @error('SoftwareName')
                                        <div class="alert alert-warning">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Giá</label>
                                        <input name="Price" class="form-control" rows="1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between">
                                            <div class="header-title">
                                                <h6 class="card-title">Trạng thái báo giá</h6>
                                            </div>
                                        </div>


                                        <div class="card-body">
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input name="PriceStatus" type="checkbox" class="custom-control-input " disabled id="customCheck-t">
                                                <label class="custom-control-label" for="customCheck-t">Đã báo giá</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mô tả ngắn</label>
                                        <textarea class=" class=" form-control" rows="4" name="DesReq" required></textarea>
                                        <script>
                                            CKEDITOR.replace('DesReq');
                                        </script>
                                        @error('DesReq')
                                        <div class="alert alert-warning">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Ghi chú</label>
                                        <textarea class=" class=" form-control" rows="4" name="NoteReq" required></textarea>
                                        <script>
                                            CKEDITOR.replace('NoteReq');
                                        </script>
                                        <div class="alert alert-warning"></div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Thêm</button>
                            <button type="reset" class="btn btn-danger">Trở lại</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</div>
@stop()
