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
                                        <button type="reset" onclick="history.back()" class="btn btn-danger">
                                            Trở về
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop()
