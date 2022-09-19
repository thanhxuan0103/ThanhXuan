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
                            <h4 class="card-title">Chỉnh sửa yêu cầu khách hàng</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="page-list-product.html" data-toggle="validator">
                            <div class="row">
                            <div class="col-md-12">                      
                                <div class="form-group">
                                    <label>Tên khách hàng *</label>
                                    <input id="ProductName" name="ProductName" type="text" class="form-control" placeholder="Vui lòng nhập tên" data-errors="Please Enter Name." required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>   
                                <div class="col-md-12">                      
                                    <div class="form-group">
                                        <label>Số điện thoại *</label>
                                        <input type="text" class="form-control" placeholder="Vui lòng nhập SĐT" data-errors="Please Enter Name." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> 
                                <div class="col-md-12">                      
                                    <div class="form-group">
                                        <label>Tên phần mềm *</label>
                                        <input type="text" class="form-control" placeholder="Vui lòng nhập tên" data-errors="Please Enter Name." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>  
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Giá</label>
                                        <textarea class="form-control" rows="1"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">             
                    <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h6 class="card-title">Tình trạng báo giá:</h6>
                        </div>
                     </div>
                    
                    
                     <div class="card-body">
                        <div class="custom-control custom-checkbox custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck-t" checked="">
                           <label class="custom-control-label" for="customCheck-t">Đã báo giá</label>
                        </div>
                     </div>
                  </div>
                                </div>
                                <div class="col-md-6"> 
                                    <div class="form-group">
                                        <label>Trạng thái *</label>
                                        <select name="type" class="selectpicker form-control" data-style="py-0">
                                            <option>Chấp nhận</option>
                                            <option>Từ chối</option>
                                            <option>Chỉnh sửa</option>
                                        
                                        </select>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Lí do</label>
                                        <textarea class="form-control" rows="1"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Filename *</label>
                                        <input type="text" class="form-control" placeholder="Enter Quantity" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <label>File</label>
                                <div class="input-group mb-4">
                        <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile02">
                           <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                        </div>
                        <div class="input-group-append">
                           <span class="input-group-text" id="upload">Upload</span>
                        </div>
                     </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mô tả ngắn</label>
                                        <textarea class=" class="form-control" rows="4" name="DesProduct" required></textarea>
                                        <script>CKEDITOR.replace('DesProduct');</script>
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