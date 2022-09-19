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
                            <h4 class="card-title">Tiến trình xây dựng phần mềm</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="page-list-product.html" data-toggle="validator">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tên phần mềm *</label>
                                        <input id="ProductName" name="ProductName" type="text" class="form-control" placeholder="Vui lòng nhập tên" data-errors="Please Enter Name." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Thời gian bắt đầu </label>
                                        <input type='text' name="datetime-start" id='datetime-start' placeholder="Nhập thời gian" class="form-control" />
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Thời gian kết thúc</label>
                                        <input type='text' name="datetime-end" id='datetime-end' placeholder="Nhập thời gian kết thúc" class="form-control" />
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Trạng thái *</label>
                                        <select name="type" class="selectpicker form-control" data-style="py-0">
                                            <option>Chấp nhận</option>
                                            <option>Từ chối</option>
                                            <option>Chỉnh sửa</option>
                                            <option>Chờ XDPM</option>
                                            <option>Trễ hạn</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Lí do</label>
                                        <textarea class="form-control" rows="1"></textarea>
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
                            <button type="submit" class="btn btn-primary mr-2">Cập nhật</button>
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