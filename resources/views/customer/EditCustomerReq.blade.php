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
                        <form action="{{route('UpdateCustomerReq')}}" method="POST" data-toggle="validator">

                            @csrf
                            <input type="hidden" name="idRequirement" value="{{$data->idRequirement }}" />
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tên khách hàng *</label>
                                        <input  type="text" readonly style="background-color:transparent;
                                        font-size: 1em;" value="{{$customer->CustomerName}}" class="form-control" placeholder="Vui lòng nhập tên" data-errors="Please Enter Name." required>
                                        @error('SoftwareName')
                                        <div class="alert alert-warning">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tên phần mềm *</label>
                                        <input name="SoftwareName" type="text" value="{{$data->SoftwareName}}" class="form-control" placeholder="Vui lòng nhập tên" data-errors="Please Enter Name." required>
                                        @error('SoftwareName')
                                        <div class="alert alert-warning">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Trạng thái *</label>
                                        <select name="Status" class=" selectpicker form-control" data-style="py-0" required>
                                            <option  value=""> -- Chọn trạng thái -- </option>
                                            @for ($i = 0; $i < 4; $i++)
                                            @if ($i == 0)
                                            {{$stat = 'Chấp nhận'}}
                                            @elseif ($i == 1)
                                            {{$stat = 'Từ chối'}}
                                            @elseif ($i==2 )
                                            {{$stat = 'Chỉnh sửa'}}
                                            @else
                                            {{$stat = 'Tiếp nhận'}}
                                            @endif
                                            @if ($i == $data->Status)
                                            <option selected value="{{$i}}">{{$stat}}</option>
                                            @else
                                            <option value="{{$i}}">{{$stat}}</option>
                                            @endif
                                            @endfor
                                        </select>
                                        @error('Status')
                                        <div class="alert alert-warning">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Lí do</label>
                                        <input type="text" name="reasonReq" class="form-control" rows="1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Giá</label>
                                        <input name="Price" value="{{$data->Price}}" class="form-control" rows="1">
                                    </div>
                                    @error('Price')
                                        <div class="alert alert-warning">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between">
                                            <div class="header-title">
                                                <h6 class="card-title">Trạng thái báo giá</h6>
                                            </div>
                                        </div>


                                        <div class="card-body">
                                            @if ($data->Price != null)

                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input name="PriceStatus" onclick="return false;" checked type="checkbox" class="custom-control-input "  id="customCheck-t">
                                                <label class="custom-control-label" for="customCheck-t">Đã báo giá</label>
                                            </div>
                                            @else
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input name="PriceStatus" onclick="return false;"  type="checkbox" class="custom-control-input "  id="customCheck-t">
                                                <label class="custom-control-label" for="customCheck-t">Chưa báo giá</label>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mô tả ngắn</label>
                                        <textarea value="" class="  form-control" rows="4" name="DesReq" required>{{$data->ReqirementDesc}}</textarea>
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
                                        <textarea value="" class="  form-control" rows="4" name="NoteReq" required>{{$data->Note}}</textarea>
                                        <script>
                                            CKEDITOR.replace('NoteReq');
                                        </script>
                                        <div class="alert alert-warning"></div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Thêm</button>
                            <button type="reset" onclick="history.back()" class="btn btn-danger">Trở lại</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</div>
@stop()

