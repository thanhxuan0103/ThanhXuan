@extends('layouts.site')
@section('main')
<script type="text/javascript" src="{{url('public/site')}}/ckeditor/ckeditor.js"></script>
<div class="content-page">
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Thêm khách hàng</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('StoreCustomerInfo')}}" method="POST" data-toggle="validator">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tên khách hàng</label>
                                        <textarea name="CustomerName" class="form-control" rows="1"></textarea>
                                        @error('CustomerName')
                                        <div class="help-block with-errors">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Số điện thoại</label>
                                        <textarea name="CustomerPhone" class="form-control" rows="1"></textarea>
                                        @error('CustomerPhone')
                                        <div class="help-block with-errors">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <textarea name="CustomerMail" class="form-control" rows="1"></textarea>
                                        @error('CustomerMail')
                                        <div class="help-block with-errors">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tên tổ chức cá nhân</label>
                                        <textarea name="OrgName" class="form-control" rows="1"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tên người đầu mối phối hợp</label>
                                        <textarea name="MiddlemanName" class="form-control" rows="1"></textarea>
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
