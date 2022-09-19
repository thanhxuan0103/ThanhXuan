@extends('layouts.site')
@section('main')


<div class="wrapper">
<section class="login-content">
   <div class="container">
      <div class="row align-items-center justify-content-center height-self-center">
         <div class="col-lg-8">
            <div class="card auth-card">
               <div class="card-body p-0">
                  <div class="d-flex align-items-center auth-content">
                     <div class="col-lg-7 align-self-center">
                        <div class="p-3">
                           <h2 class="mb-2">Đăng ký</h2>
                           <p>Tạo tài khoản CTICT Dash</p>
                           <form >
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="floating-label form-group">
                                       <input class="floating-input form-control" type="text" placeholder=" ">
                                       <label>Tên</label>
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="floating-label form-group">
                                       <input class="floating-input form-control" type="email" placeholder=" ">
                                       <label>Email</label>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="floating-label form-group">
                                       <input class="floating-input form-control" type="password" placeholder=" ">
                                       <label>Mật khẩu</label>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="floating-label form-group">
                                       <input class="floating-input form-control" type="password" placeholder=" ">
                                       <label>Nhập lại mật khẩu</label>
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="custom-control custom-checkbox mb-3">
                                       <input type="checkbox" class="custom-control-input" id="customCheck1">
                                       <!-- <label class="custom-control-label" for="customCheck1">I agree with the terms of use</label> -->
                                    </div>
                                 </div>
                              </div>
                              <button type="submit" class="btn btn-primary">Đăng ký</button>
                              <p class="mt-3">
                                 Đã có tài khoản <a href="auth-sign-in.html" class="text-primary">Đăng nhập</a>
                              </p>
                           </form>
                        </div>
                     </div>
                     <div class="col-lg-5 content-right">
                        <img src="{{url('public/site')}}/images/login/01.png" class="img-fluid image-right" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
</div>
@stop()