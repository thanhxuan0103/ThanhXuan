@extends('layouts.site')
@section('main')
@php
                $avatar = App\Models\file::where('Prefix','AVT'.$data->id)->get();

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
                           </div>
                           <div class="card-body">
                              <form method="POST" enctype="multipart/form-data" action="{{route('UpdateProfile')}}">
                                @csrf
                                 <div class="form-group row align-items-center">
                                    <div class="col-md-12">
                                       <div class="profile-img-edit">
                                          <div class="crm-profile-img-edit">
                                            @if(empty($avatar[0]->File))
                                             <img class="crm-profile-pic rounded-circle avatar-100" src="{{url('public/site')}}/images/user/11.png" alt="profile-pic">
                                             @else
                                             <img class="crm-profile-pic rounded-circle avatar-100" src="{{url('storage')}}/app/Avatars/{{$avatar[0]->File}}" alt="profile-pic">
                                             @endif
                                             <div class="crm-p-image bg-primary">
                                                <i class="las la-pen upload-button"></i>
                                                <input type="file" class="file-upload" name="avatar"  accept="image/*">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class=" row align-items-center">
                                    <div class="form-group col-sm-6">
                                       <label for="fname">Họ Tên</label>
                                       <input type="text" class="form-control @error('name') is-invalid @enderror" id="fname" name="name" value="{{$data->name}}">
                                       @error('name')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="lname">Số điện thoại</label>
                                       <input type="text" class="form-control @error('phone') is-invalid @enderror" id="lname" name="phone" value="{{$data->phone}}">
                                       @error('phone')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="uname">Email</label>
                                       <input type="text" class="form-control @error('email') is-invalid @enderror" id="uname" name="email" value="{{$data->email}}">
                                       @error('email')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror
                                    </div>



                                    <div class="form-group col-sm-12">
                                       <label>Address:</label>
                                       <textarea class="form-control @error('address') is-invalid @enderror"  rows="5" name="address" style="line-height: 22px;">{{$data->address}}</textarea>
                                       @error('address')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror
                                    </div>
                                 </div>
                                 <button type="submit" class="btn btn-primary mr-2">Cập nhật</button>
                                 <button type="reset" onclick="history.back()" class="btn btn-danger">Trở về</button>
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
                              <form method="POST" action="{{route('ChangePassword')}}">
                                @csrf
                                 <div class="form-group">
                                    <label for="cpass">Mật khẩu hiện tại:</label>
                                    <input type="Password" class="form-control @error('current_password') is-invalid @enderror" id="password" name="current_password" autocomplete="current-password" value="">
                                    @error('current_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                 </div>
                                 <div class="form-group">
                                    <label for="npass">Mật khẩu mới:</label>
                                    <input type="Password" class="form-control @error('new_password') is-invalid @enderror" id="new_password" name="new_password" autocomplete="current-password" value="">
                                    @error('new_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                 </div>
                                 <div class="form-group">
                                    <label for="vpass">Nhập lại mật khẩu mới:</label>
                                    <input type="Password" id="new_password_confirmation"  class="form-control @error('new_password_confirmation') is-invalid @enderror" name="new_password_confirmation" autocomplete="current-password" value="">
                                    @error('new_password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                 <button type="submit" class="btn btn-primary mr-2">Cập nhật</button>
                                 <button type="reset" onclick="history.back()" class="btn btn-danger">Trở về</button>
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

                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
@stop()
