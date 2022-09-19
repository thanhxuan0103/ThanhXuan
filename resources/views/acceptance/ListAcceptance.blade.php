@extends('layouts.site')
@extends('layouts.modal')
@section('main')
<div class="content-page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
               <div>
                  <h4 class="mb-3">Danh sách nghiệm thu</h4>
                  <!-- <p class="mb-0">The product list effectively dictates product presentation and provides space<br> to list your products and offering in the most appealing way.</p> -->
               </div>
               <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
               <table class="data-tables table mb-0 tbl-server-info">
                  <thead class="bg-white text-uppercase">
                  <tr class="ligth ligth-data">
                            <th>STT</th>
                            <th>Tên hợp đồng</th>
                            <th>Trạng thái</th>
                            <th>Action</th>
                        </tr>
                  </thead>
                  <tbody class="ligth-body">
                     <tr>
                        <td>1</td>
                        <td>CREM01</td>
                        <td>
                           <div class="badge badge-success">Chấp nhận</div>
                        </td>
                         <td>
                           <div class="d-flex align-items-center list-action">
                              <!-- <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" href="#"><i class="ri-eye-line mr-0"></i></a> -->
                              <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line mr-0"></i></a>
                              <a class="badge bg-danger mr-2" data-toggle="modal" data-placement="top" title="" data-original-title="Download" data-target="#ModalDownloadNT" href="#"><i class="ri-download-2-line mr-0"></i></a>
                              <a class="badge bg-warning mr-2" data-toggle="modal" data-placement="top" title="" data-original-title="Add" data-target="#ModalAddNT" href="#"><i class="ri-user-unfollow-line mr-0"></i></a>
                              <!-- <a class="badge bg-light mr-2" data-toggle="modal" data-placement="top" title="" data-original-title="Export" data-target="#ModalExport" href="#"><i class="ri-settings-4-fill pr-0"></i></a> -->

                           </div>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>

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
   <!-- Modal Edit -->
   <div class="modal fade" id="edit-note" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-body">
               <div class="popup text-left">
                  <div class="media align-items-top justify-content-between">
                     <h3 class="mb-3">Product</h3>
                     <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                  </div>
                  <div class="content edit-notes">
                     <div class="card card-transparent card-block card-stretch event-note mb-0">
                        <div class="card-body px-0 bukmark">
                           <div class="d-flex align-items-center justify-content-between pb-2 mb-3 border-bottom">
                              <div class="quill-tool">
                              </div>
                           </div>
                           <div id="quill-toolbar1">
                              <p>Virtual Digital Marketing Course every week on Monday, Wednesday and Saturday.Virtual Digital Marketing Course every week on Monday</p>
                           </div>
                        </div>
                        <div class="card-footer border-0">
                           <div class="d-flex flex-wrap align-items-ceter justify-content-end">
                              <div class="btn btn-primary mr-3" data-dismiss="modal">Cancel</div>
                              <div class="btn btn-outline-primary" data-dismiss="modal">Save</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

</div>
@stop()