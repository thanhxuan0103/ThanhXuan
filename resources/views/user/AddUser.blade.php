@extends('layouts.site')
@section('main')
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Thêm người dùng</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ url('/user/StoreUser') }}">
                                @csrf
                                {{-- <div class="row mb-3">
                                    <div class="form-group">
                                        <div class="crm-profile-img-edit position-relative">
                                            <img class="crm-profile-pic rounded avatar-100"
                                                src="{{ url('public/site') }}/images/user/11.png" alt="profile-pic">
                                            <div class="crm-p-image bg-primary">
                                                <i class="las la-pen upload-button"></i>
                                                <input class="file-upload" type="file" accept="image/*">
                                            </div>
                                        </div>
                                        <div class="img-extension mt-3">
                                            <div class="d-inline-block align-items-center">
                                                <span>Only</span>
                                                <a href="javascript:void();">.jpg</a>
                                                <a href="javascript:void();">.png</a>
                                                <a href="javascript:void();">.jpeg</a>
                                                <span>allowed</span>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">Họ và Tên</label>

                                    <div class="col-md-6">
                                        <input placeholder="Vui lòng nhập họ tên" id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">Địa chỉ email</label>

                                    <div class="col-md-6">
                                        <input placeholder="Vui lòng nhập email" id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="idUserGroup" class="col-md-4 col-form-label text-md-end">Loại người
                                        dùng</label>

                                    <div class="col-md-6">
                                        <select   name="idUserGroup" id="idUserGroup" class=" selectpicker form-control" data-style="py-0" required>
                                            <option selected>--Chọn loại người dùng--</option>
                                            @foreach ($data1 as $usergroup)
                                                <option value="{{ $usergroup->idUserGroup }} ">
                                                    {{ $usergroup->GroupName }}</option>
                                            @endforeach
                                          </select>

                                        @error('idUserGroup')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">Mật khẩu</label>

                                    <div class="col-md-6">
                                        <input placeholder="Vui lòng nhập mật khẩu" id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Xác nhận mật
                                        khẩu</label>

                                    <div class="col-md-6">
                                        <input placeholder="Vui lòng nhập lại mật khẩu" id="password-confirm"
                                            type="password" class="form-control" name="password_confirmation" required
                                            autocomplete="new-password">
                                        @error('password-confirm')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Thêm người dùng
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-xl-9 col-lg-8">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Thông tin người dùng mới</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="new-user-info">
                           <form>
                              <div class="row">
                                 <div class="form-group col-md-6">
                                    <label for="fname">First Name:</label>
                                    <input type="text" class="form-control" id="fname" placeholder="First Name">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="lname">Last Name:</label>
                                    <input type="text" class="form-control" id="lname" placeholder="Last Name">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="add1">Địa chỉ 1:</label>
                                    <input type="text" class="form-control" id="add1" placeholder="Street Address 1">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="add2">Địa chỉ 2:</label>
                                    <input type="text" class="form-control" id="add2" placeholder="Street Address 2">
                                 </div>
                                 <div class="form-group col-sm-12">
                                    <label>Thành phố:</label>
                                    <select name="type" class="selectpicker form-control" data-style="py-0">
                                       <option>Chọn thành phố</option>
                                       <option>Cần Thơ</option>
                                       <option>Vĩnh Long</option>
                                       <option >Hậu Giang</option>
                                    </select>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="mobno">Số điện thoại:</label>
                                    <input type="text" class="form-control" id="mobno" placeholder="Mobile Number">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email">
                                 </div>
                              </div>
                              <hr>
                              <h5 class="mb-3">Security</h5>
                              <div class="row">
                                 <div class="form-group col-md-12">
                                    <label for="uname">User Name:</label>
                                    <input type="text" class="form-control" id="uname" placeholder="User Name">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="pass">Password:</label>
                                    <input type="password" class="form-control" id="pass" placeholder="Password">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="rpass">Repeat Password:</label>
                                    <input type="password" class="form-control" id="rpass" placeholder="Repeat Password ">
                                 </div>
                              </div>
                              <div class="checkbox">
                                 <label><input class="mr-2" type="checkbox">Enable Two-Factor-Authentication</label>
                              </div>
                              <button type="submit" class="btn btn-primary">Thêm người dùng</button>
                           </form>
                        </div>
                     </div>
                  </div>
            </div> --}}
            </div>
        </div>
    </div>

@stop()
