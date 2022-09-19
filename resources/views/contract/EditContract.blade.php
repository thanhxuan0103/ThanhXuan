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
                            <h4 class="card-title">Chỉnh sửa hợp đồng</h4>
                        </div>

                    </div>
                    <div class="card-body">
                        <form action="{{route('UpdateContract')}}" method="post" data-toggle="validator">
                            @csrf
                            <input type="hidden" name="idContract" value="{{$contract->idContract}}">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tên phần mềm *</label>
                                        <input name="SoftwareName" value="{{$req->SoftwareName}}" type="text" class="form-control" placeholder="Vui lòng nhập tên" data-errors="Please Enter Name." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    @error('SoftwareName')
                                        <div class="help-block with-errors">{{$message}}</div>
                                        @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Trạng thái *</label>
                                        <select name="Status" class="selectpicker form-control" data-style="py-0">
                                            <option value="" >-- Chọn trạng thái --</option>

                                            @for ($i = 0; $i < 4; $i++)
                                            @if ($i == 0)
                                            {{$stat = 'Chờ ký'}}
                                            @elseif ($i == 1)
                                            {{$stat = 'Chờ chỉnh sửa'}}
                                            @elseif ($i==2 )
                                            {{$stat = 'Đã ký'}}
                                            @else
                                            {{$stat = 'Từ chối/Hủy'}}
                                            @endif
                                            @if ($i == $contract->Status)
                                            <option selected value="{{$i}}">{{$stat}}</option>
                                            @else
                                            <option value="{{$i}}">{{$stat}}</option>
                                            @endif
                                            @endfor
                                        </select>
                                        @error('Status')
                                        <div class="help-block with-errors">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Lí do</label>
                                        <textarea name="Reason" class="form-control" rows="1"></textarea>
                                        @error('Reason')
                                        <div class="help-block with-errors">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Giá *</label>
                                        <input value="{{$req->Price}}" type="text" class="form-control" name="Price" placeholder="" data-errors="Nhập giá tiền" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    @error('Price')
                                        <div class="help-block with-errors">{{$message}}</div>
                                        @enderror
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Thêm</button>
                            <button type="reset" onclick="history.back()" class="btn  btn-danger">Trở lại</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</div>
@stop()
