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
                            <h4 class="card-title">Thêm hợp đồng bảo trì</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="page-list-product.html" data-toggle="validator">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <label>Tên phần mềm *</label>
                                        <select name="type" class="selectpicker form-control" data-style="py-0">
                                            <option>Tên phần mềm</option>
                                            <option>Tên phần mềm</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tên khách hàng</label>
                                        <textarea class="form-control" rows="1"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>SĐT</label>
                                        <textarea class="form-control" rows="1"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Người tạo</label>
                                        <textarea class="form-control" rows="1"></textarea>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Thời gian </label>
                                        <input type='text' name="datetime-start" id='datetime-start' placeholder="Nhập thời gian" class="form-control" />
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mô tả ngắn</label>
                                        <textarea class=" class=" form-control" rows="4" name="DesProduct" required></textarea>
                                        <script>
                                            CKEDITOR.replace('DesProduct');
                                        </script>
                                        <div class="help-block with-errors"></div>
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