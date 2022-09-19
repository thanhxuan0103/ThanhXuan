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
                        <form action="{{route('UpdateCustomerInfo')}}" method="POST" data-toggle="validator">
                            @csrf
                            <input type="hidden" name="idCustomer" value="{{$customer->idCustomer}}" />
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tên khách hàng</label>
                                        <input type="text" name="CustomerName" value={{$customer->CustomerName}} class="form-control" rows="1">
                                        @error('CustomerName')
                                        <div class="help-block with-errors">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Số điện thoại</label>
                                        <input type="text" value="{{$customer->CustomerPhone}}" name="CustomerPhone" class="form-control" rows="1">
                                        @error('CustomerPhone')
                                        <div class="help-block with-errors">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" value="{{$customer->CustomerMail}}" name="CustomerMail" class="form-control" rows="1">
                                        @error('CustomerMail')
                                        <div class="help-block with-errors">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tên tổ chức cá nhân</label>
                                        <input type="text" name="OrgName" value="{{$customer->OrgName}}"class="form-control" rows="1">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tên người đầu mối phối hợp</label>
                                        <input type="text" name="MiddlemanName" value="{{$customer->MiddmanName}}" class="form-control" rows="1">
                                    </div>
                                </div>
                            </div>
                            <button type="reset" onclick="history.back()" class="btn btn-danger">Trở lại</button>
                            <button type="submit" class="btn btn-primary mr-2">Thêm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</div>
@stop()
