@extends('layouts.site')
@section('main')
<div class="content-page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
               <div>
                  <h4 class="mb-3">Danh sách hợp đồng</h4>

               </div>

               <div class="dropdown">
                  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Tất cả
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                     <a class="dropdown-item" href="#">Chấp nhận</a>
                     <a class="dropdown-item" href="#">Từ chối</a>
                     <a class="dropdown-item" href="#">Chỉnh sửa</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-12">
            <div class="table-responsive rounded mb-3">
               <table class="data-table table mb-0 tbl-server-info">
                  <thead class="bg-white text-uppercase">
                     <tr class="ligth ligth-data">
                        <th>ID</th>
                        <th>Tên hợp đồng</th>
                        <th>Người tạo</th>
                        <th>Ngày tạo</th>
                        <th>Tình trạng</th>
                        <th>File</th>
                        <th>Thao tác</th>
                     </tr>
                  </thead>
                  <tbody class="ligth-body">
                     <tr>
                        <td>CREM01</td>
                        <td>CREM01</td>
                        <td>Beauty</td>
                        <td>Beauty</td>
                        <td>
                           <div class="badge badge-success">Chấp nhận</div>
                        </td>
                        <td>Beauty</td>
                        <td>
                           <div class="d-flex align-items-center list-action">
                              <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" href="#"><i class="ri-eye-line mr-0"></i></a>
                              <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line mr-0"></i></a>
                              <a class="badge bg-danger mr-2" data-toggle="modal" data-placement="top" title="" data-original-title="Download" data-target="#ModalDownload" href="#"><i class="ri-download-2-line mr-0"></i></a>
                              <a class="badge bg-warning mr-2" data-toggle="modal" data-placement="top" title="" data-original-title="Add" data-target="#ModalAdd" href="#"><i class="ri-user-unfollow-line mr-0"></i></a>
                              <a class="badge bg-light mr-2" data-toggle="modal" data-placement="top" title="" data-original-title="Export" data-target="#ModalExport" href="#"><i class="ri-settings-4-fill pr-0"></i></a>

                           </div>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>

      </div>
      <!-- Modal Add Start -->
      <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Thêm người dùng</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <!-- <div class="content-page"> -->
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="card">
                                    <div class="card-body p-0">
                                       <ul class="todo-task-lists m-0 p-0">
                                          <li class="d-flex align-items-center p-3">
                                             <div class="user-img img-fluid"><img src="{{url('public/site')}}/images/user/01.jpg" alt="story-img" class="rounded avatar-40"></div>
                                             <div class="media-support-info ml-3">
                                                <h6 class="d-inline-block">Landing page for secret Project</h6>
                                                <span class="badge badge-warning ml-3 text-white">expirinq</span>
                                                <p class="mb-0">by Danlel Cllfferton</p>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" name="todo-check" class="custom-control-input" id="check1">
                                                   <label class="custom-control-label" for="check1"></label>
                                                </div>
                                             </div>
                                          </li>
                                          <li class="d-flex align-items-center p-3 active-task">
                                             <div class="user-img img-fluid"><img src="{{url('public/site')}}/images/user/01.jpg" alt="story-img" class="rounded avatar-40"></div>
                                             <div class="media-support-info ml-3">
                                                <h6>Fix Critical Crashes</h6>
                                                <p class="mb-0">by Cralg Danles</p>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" name="todo-check" class="custom-control-input" id="check2" checked="checked">
                                                   <label class="custom-control-label" for="check2"></label>
                                                </div>
                                             </div>
                                          </li>

                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="iq-todo-right">
                                          <div class="card card-block card-stretch card-height">
                                             <div class="card-header d-flex justify-content-between">
                                                <div class="header-title">
                                                   <h4 class="card-title">Vai trò</h4>
                                                </div>
                                                <div class="card-header-toolbar d-flex align-items-center">
                                                   <div class="dropdown">
                                                      <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton001" data-toggle="dropdown">
                                                         Tất cả<i class="ri-arrow-down-s-line ml-1"></i>
                                                      </span>
                                                      <div class="dropdown-menu dropdown-menu-right shadow-none" aria-labelledby="dropdownMenuButton001">
                                                         <a class="dropdown-item" href="#">Tên nhóm</a>
                                                         <a class="dropdown-item" href="#">Tên nhóm</a>
                                                         <a class="dropdown-item" href="#">Tên nhóm</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <form class="position-relative">
                                             <div class="form-group mb-0">
                                                <input type="text" class="form-control todo-search" id="exampleInputEmail001" placeholder="Search">
                                                <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                             </div>
                                          </form>
                                          <div class="iq-todo-friendlist mt-3">
                                             <ul class="suggestions-lists m-0 p-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><img src="{{url('public/site')}}/images/user/01.jpg" alt="story-img" class="rounded avatar-40"></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Paul Molive</h6>
                                                      <p class="mb-0">trainee</p>
                                                   </div>
                                                   <div class="card-header-toolbar d-flex align-items-center">
                                                      <div class="dropdown">
                                                         <span class="dropdown-toggle text-primary" id="dropdownMenuButton41" data-toggle="dropdown">
                                                            <i class="ri-more-2-line"></i>
                                                         </span>
                                                         <div class="dropdown-menu dropdown-menu-right" style="">
                                                            <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                            <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Unfriend</a>
                                                            <a class="dropdown-item" href="#"><i class="ri-lock-line mr-2"></i>block</a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><img src="{{url('public/site')}}/images/user/02.jpg" alt="story-img" class="rounded avatar-40"></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Anna Mull</h6>
                                                      <p class="mb-0">Web Developer</p>
                                                   </div>
                                                   <div class="card-header-toolbar d-flex align-items-center">
                                                      <div class="dropdown">
                                                         <span class="dropdown-toggle text-primary" id="dropdownMenuButton42" data-toggle="dropdown">
                                                            <i class="ri-more-2-line"></i>
                                                         </span>
                                                         <div class="dropdown-menu dropdown-menu-right" style="">
                                                            <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                            <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Unfriend</a>
                                                            <a class="dropdown-item" href="#"><i class="ri-lock-line mr-2"></i>block</a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                             </ul>
                                             <a href="javascript:void(0);" class="btn btn-primary d-block"><i class="ri-add-line"></i> Load More</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- </div> -->
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                  <button type="button" class="btn btn-primary">Xác nhận</button>
               </div>
            </div>
         </div>
      </div>

      <!-- Modal Add End -->
      <!-- Modal Download Start -->
      <div class="modal fade" id="ModalDownload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Danh sách File liên quan</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <!-- <div class="content-page"> -->
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">

                        <!-- <h4 class="card-title">Borderless table</h4> -->
                        <div class="col-md-12">
                           <div class="form-group">

                              <label>Filename</label>
                              <textarea class="form-control" rows="1"></textarea>
                           </div>

                           <div class="col-md-12">
                              <label>File</label>
                              <div class="input-group mb-4">
                                 <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile02">
                                    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                 </div>
                                 <div class="input-group-append">
                                    <span class="input-group-text" id="upload">Upload</span>

                                 </div>
                                 <!-- <button type="button" class="btn btn-success mt-2"><i class="ri-settings-4-fill pr-0"></i></button> -->
                              </div>

                           </div>
                           <div class="col-md-12">
                              <label>Chia sẻ</label>
                              <div class="input-group mb-4">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                 </div>
                                 <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                              </div>

                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="iq-search-bar device-search">
                     <form action="#" class="searchbox">
                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                        <input type="text" class="text search-input" placeholder="Tìm kiếm tên File...">
                     </form>
                  </div>
                  <div class="card-body">
                     <table class="table table-borderless">
                        <thead>
                           <tr>
                              <th scope="col">STT</th>
                              <th scope="col">Filename</th>
                              <th scope="col">File</th>
                              <th scope="col">Filesize</th>
                              <th scope="col">Người đăng</th>
                              <th scope="col">Ngày đăng</th>
                              <th scope="col">Thao tác</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                              <td>@mdo</td>
                              <td>
                                 <div class="d-flex align-items-center list-action">
                                    <a class="badge bg-danger mr-2" data-toggle="modal" data-placement="top" title="" data-original-title="Download" data-target="#ModalDownload" href="#"><i class="ri-download-2-line mr-0"></i></a>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <!-- </div> -->
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
               </div>
            </div>
         </div>
      </div>

      <!-- Modal Download End -->
      <!-- Modal Export File Start -->
      <div class="modal fade" id="ModalExport" tabindex="-1" role="dialog" aria-labelledby="exampleModalExport" aria-hidden="true">
         <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalExport">Danh sách File mẫu</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <!-- <div class="content-page"> -->
                  <div class="iq-search-bar device-search">
                     <form action="#" class="searchbox">
                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                        <input type="text" class="text search-input" placeholder="Tìm kiếm tên File...">
                     </form>
                  </div>
                  <div class="card-body">
                     <table class="table table-borderless">
                        <thead>
                           <tr>
                              <th scope="col">STT</th>
                              <th scope="col">Filename</th>
                              <th scope="col">File</th>
                              <th scope="col">Filesize</th>

                              <th scope="col">Thao tác</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Mark</td>
                              <td>Otto</td>

                              <td>
                                 <div class="d-flex align-items-center list-action">
                                    <a class="badge bg-danger mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download" href="#"><i class="ri-download-2-line mr-0"></i></a>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <!-- </div> -->
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
               </div>
            </div>
         </div>
      </div>

      <!-- Modal Export File End -->
      <!-- Page end  -->
   </div>
</div>
</div>


@stop()