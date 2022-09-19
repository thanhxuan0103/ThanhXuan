@extends('layouts.site')
@section('main')
    @php
    $data = App\Models\User::find(session()->get('loginID'));
    $idUser = $data->id;
    // $id= session()->get('loginID');
    $prefix = 'AVT' . $idUser;
    $avatar = DB::select(DB::raw('SELECT * FROM file WHERE Prefix = :prefix'), [
        'prefix' => $prefix,
    ]);
    // $results = DB::select( DB::raw("SELECT * FROM file WHERE idUser = :idUser and Prefix = 'PFP'"), array(
    // 'idUser' => $idUser,
    // ));
    @endphp
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="iq-edit-list usr-edit">
                                <ul class="iq-edit-profile d-flex nav nav-pills">
                                    <li class="col-md-6 p-0">
                                        <a class="nav-link active" data-toggle="pill" href="#personal-information">
                                            Thông tin cá nhân
                                        </a>
                                    </li>
                                    <li class="col-md-6 p-0">
                                        <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                                            Thay đổi mật khẩu
                                        </a>
                                    </li>
                                    <!-- <li class="col-md-3 p-0">
                                          <a class="nav-link" data-toggle="pill" href="#emailandsms">
                                          Email and SMS
                                          </a>
                                       </li> -->
                                    {{-- <li class="col-md-4 p-0">
                                        <a class="nav-link" data-toggle="pill" href="#manage-contact">
                                            Thông tin liên hệ
                                        </a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="iq-edit-list-data">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Thông tin cá nhân</h4>
                                        </div>
                                        @if (Session()->has('ChangePasswordSuccess'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session()->get('ChangePasswordSuccess') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('UpdateProfile') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group row align-items-center">
                                                <div class="col-md-12">
                                                    <div class="profile-img-edit">
                                                        <div class="crm-profile-img-edit">
                                                            @if ($avatar != null)
                                                                <img class="crm-profile-pic rounded-circle avatar-100"
                                                                    src="{{ url('storage/app/Avatars') }}/{{ $avatar[0]->File }}"
                                                                    alt="profile-pic">
                                                            @else
                                                                <img class="crm-profile-pic rounded-circle avatar-100"
                                                                    src="{{ url('storage/app/Avatars') }}/1.png"
                                                                    alt="profile-pic">
                                                            @endif
                                                            <div class="crm-p-image bg-primary">
                                                                <i class="las la-pen upload-button"></i>
                                                                <input name="avatar" class="file-upload" type="file"
                                                                    accept="image/*">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" row align-items-center">

                                                <div class="form-group col-sm-6">
                                                    <label for="uname">Họ và tên:</label>
                                                    <input name="name" type="text" class="form-control" id="uname"
                                                        value="{{ $data->name }}">
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="uname">Email:</label>
                                                    <input name="email" type="text" class="form-control" id="uname"
                                                        value="{{ $data->email }}">
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="uname">Số điện thoại:</label>
                                                    <input type="text" name="phone" class="form-control" id="uname"
                                                        value="{{ $data->phone }}">
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="uname">Địa chỉ:</label>
                                                    <input name="address" type="text" class="form-control" id="uname"
                                                        value="{{ $data->address }}">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2">Cập nhật</button>
                                            <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Thay đổi mật khẩu</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('ChangePassword') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="cpass">Mật khẩu hiện tại:</label>
                                                {{-- <a href="javascripe:void();" class="float-right">Forgot Password</a> --}}
                                                <input id="password" name="current_password" type="password"
                                                    class="form-control" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="npass">Mật khẩu mới:</label>
                                                <input id="new_password" type="password" name="new_password"
                                                    class="form-control" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="vpass">Nhập lại mật khẩu mới:</label>
                                                <input id="new_confirm_password" type="password"
                                                    name="new_confirm_password" class="form-control" value="">
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2">Cập nhật</button>
                                            <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="tab-pane fade" id="emailandsms" role="tabpanel">
                                    <div class="card">
                                       <div class="card-header d-flex justify-content-between">
                                          <div class="iq-header-title">
                                             <h4 class="card-title">Email and SMS</h4>
                                          </div>
                                       </div>
                                       <div class="card-body">
                                          <form>
                                             <div class="form-group row align-items-center">
                                                <label class="col-md-3" for="emailnotification">Email Notification:</label>
                                                <div class="col-md-9 custom-control custom-switch">
                                                   <input type="checkbox" class="custom-control-input" id="emailnotification" checked="">
                                                   <label class="custom-control-label" for="emailnotification"></label>
                                                </div>
                                             </div>
                                             <div class="form-group row align-items-center">
                                                <label class="col-md-3" for="smsnotification">SMS Notification:</label>
                                                <div class="col-md-9 custom-control custom-switch">
                                                   <input type="checkbox" class="custom-control-input" id="smsnotification" checked="">
                                                   <label class="custom-control-label" for="smsnotification"></label>
                                                </div>
                                             </div>
                                             <div class="form-group row align-items-center">
                                                <label class="col-md-3" for="npass">When To Email</label>
                                                <div class="col-md-9">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="email01">
                                                      <label class="custom-control-label" for="email01">You have new notifications.</label>
                                                   </div>
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="email02">
                                                      <label class="custom-control-label" for="email02">You're sent a direct message</label>
                                                   </div>
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="email03" checked="">
                                                      <label class="custom-control-label" for="email03">Someone adds you as a connection</label>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="form-group row align-items-center">
                                                <label class="col-md-3" for="npass">When To Escalate Emails</label>
                                                <div class="col-md-9">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="email04">
                                                      <label class="custom-control-label" for="email04"> Upon new order.</label>
                                                   </div>
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="email05">
                                                      <label class="custom-control-label" for="email05"> New membership approval</label>
                                                   </div>
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="email06" checked="">
                                                      <label class="custom-control-label" for="email06"> Member registration</label>
                                                   </div>
                                                </div>
                                             </div>
                                             <button type="submit" class="btn btn-primary mr-2">Cập nhật</button>
                                             <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                          </form>
                                       </div>
                                    </div>
                                 </div> -->
                            {{-- <div class="tab-pane fade" id="manage-contact" role="tabpanel">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Thông tin liên hệ</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="cno">Contact Number:</label>
                                                <input type="text" class="form-control" id="cno"
                                                    value="001 2536 123 458">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email:</label>
                                                <input type="text" class="form-control" id="email"
                                                    value="Barryjone@demo.com">
                                            </div>
                                            <div class="form-group">
                                                <label for="url">Url:</label>
                                                <input type="text" class="form-control" id="url"
                                                    value="https://getbootstrap.com">
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2">Cập nhật</button>
                                            <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                        </form>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop()
