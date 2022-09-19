<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>CTICT Dash | Login</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{url('public/site')}}/images/favicon.ico" />
      <link rel="stylesheet" href="{{url('public/site')}}/css/backend-plugin.min.css">
      <link rel="stylesheet" href="{{url('public/site')}}/css/backend.css?v=1.0.0">
      <link rel="stylesheet" href="{{url('public/site')}}/vendor/@fortawesome/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="{{url('public/site')}}/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
      <link rel="stylesheet" href="{{url('public/site')}}/vendor/remixicon/fonts/remixicon.css">  </head>
  <body class=" ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    
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
                                 <h2 class="mb-2">Đăng nhập</h2>
                                 <p>Đăng nhập để giữ kết nối.</p>
                                 <form>
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" type="email" placeholder=" ">
                                             <label>Tên Đăng Nhập</label>
                                          </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" type="password" placeholder=" ">
                                             <label>Mật Khẩu</label>
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="custom-control custom-checkbox mb-3">
                                             <input type="checkbox" class="custom-control-input" id="customCheck1">
                                             <!-- <label class="custom-control-label control-label-1" for="customCheck1">Remember Me</label> -->
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <a href="auth-recoverpw.html" class="text-primary float-right">Forgot Password?</a>
                                       </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Đăng nhập</button>
                                    <p class="mt-3">
                                       Tạo tài khoản <a href="auth-sign-up.html" class="text-primary">Đăng ký</a>
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
    
    <!-- Backend Bundle JavaScript -->
    <script src="{{url('public/site')}}/js/backend-bundle.min.js"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="{{url('public/site')}}/js/table-treeview.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="{{url('public/site')}}/js/customizer.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script async src="{{url('public/site')}}/js/chart-custom.js"></script>
    
    <!-- app JavaScript -->
    <script src="{{url('public/site')}}/js/app.js"></script>
  </body>
</html>