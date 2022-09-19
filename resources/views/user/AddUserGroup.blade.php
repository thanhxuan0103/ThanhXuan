@extends('layouts.site')
@section('main')
<div class="content-page">
    <div class="container-fluid add-form-list">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Thêm nhóm người dùng</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{url('/user/StoreUserGroup')}}" data-toggle="validator" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tên nhóm người dùng *</label>
                                    <input type="text" name="GroupName" id="GroupName" class="form-control" placeholder="Nhập Tên Danh Mục"  required>
                                    @error('GroupName')
                                    <div class="help-block with-errors">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <input type="submit" name="" class="btn btn-primary mr-2" value="Thêm nhóm người dùng">
                        <a href="page-list-category.php" class="btn btn-light mr-2">Trở Về</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Page end  -->
</div>
    </div>
</div>
@stop()

