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
                            <h4 class="card-title">Thêm nghiệm thu</h4>
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
                                        <label>Trạng thái *</label>
                                        <select name="type" class="selectpicker form-control" data-style="py-0">
                                            <option>Chấp nhận</option>
                                            <option>Từ chối</option>

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
                                        <label>Thời gian nghiệm thu </label>
                                        <input type='text' name="datetime-start" id='datetime-start' placeholder="Nhập thời gian" class="form-control" />
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Thời hạn bảo trì</label>
                                        <select name="type" class="selectpicker form-control" data-style="py-0">
                                            <option>1 năm</option>
                                            <option>3 năm</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-8">
                                    <div class="form-group">
                                        <label>Giấy tờ liên quan</label>
                                        <div class="card">

                                            <div class="card-body">
                                                <!-- <p>Giấy tờ liên quan</p> -->
                                                <table class="table">
                                                    <thead>
                                                        <tr class="ligth">
                                                            <th scope="col">Check</th>
                                                            <th scope="col">Tên giấy tờ</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>
                                                                <div class="d-flex align-items-center list-action">
                                                                    <div class="checkbox d-inline-block mr-3">
                                                                        <input type="checkbox" class="checkbox-input" id="checkbox1">
                                                                        <!-- <label for="checkbox1">Primary-Inactive</label> -->
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <td>Thiết kế chi tiết</td>
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr>
                                                            <th>
                                                                <div class="d-flex align-items-center list-action">
                                                                    <div class="checkbox d-inline-block mr-3">
                                                                        <input type="checkbox" class="checkbox-input" id="checkbox1">
                                                                        <!-- <label for="checkbox1">Primary-Inactive</label> -->
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <td>Source code</td>
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr>
                                                            <th>
                                                                <div class="d-flex align-items-center list-action">
                                                                    <div class="checkbox d-inline-block mr-3">
                                                                        <input type="checkbox" class="checkbox-input" id="checkbox1">
                                                                        <!-- <label for="checkbox1">Primary-Inactive</label> -->
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <td>Hướng dẫn sử dụng</td>
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr>
                                                            <th>
                                                                <div class="d-flex align-items-center list-action">
                                                                    <div class="checkbox d-inline-block mr-3">
                                                                        <input type="checkbox" class="checkbox-input" id="checkbox1">
                                                                        <!-- <label for="checkbox1">Primary-Inactive</label> -->
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <td>Hướng dẫn quản trị</td>
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr>
                                                            <th>
                                                                <div class="d-flex align-items-center list-action">
                                                                    <div class="checkbox d-inline-block mr-3">
                                                                        <input type="checkbox" class="checkbox-input" id="checkbox1">
                                                                        <!-- <label for="checkbox1">Primary-Inactive</label> -->
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <td>Biên bản tập huấn phần mềm</td>
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr>
                                                            <th>
                                                                <div class="d-flex align-items-center list-action">
                                                                    <div class="checkbox d-inline-block mr-3">
                                                                        <input type="checkbox" class="checkbox-input" id="checkbox1">
                                                                        <!-- <label for="checkbox1">Primary-Inactive</label> -->
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <td>Biên bản thanh lý hợp đồng</td>
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr>
                                                            <th>
                                                                <div class="d-flex align-items-center list-action">
                                                                    <div class="checkbox d-inline-block mr-3">
                                                                        <input type="checkbox" class="checkbox-input" id="checkbox1">
                                                                        <!-- <label for="checkbox1">Primary-Inactive</label> -->
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <td>Xuất hóa đơn</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Giấy tờ liên quan</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Thiết kế chi tiết
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Source code
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Hướng dẫn sử dụng
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Hướng dẫn quản trị
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Biên bản tập huấn phần mềm
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Biên bản thanh lý hợp đồng
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Xuất hóa đơn
                                                </label>
                                            </div>
                                        </div>
                                    </div> -->
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