@extends('layouts.site')
@extends('layouts.modal')
@section('main')
<div class="content-page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
               <div>
                  <h4 class="mb-3">Danh sách hợp đồng bảo trì</h4>
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
                        <th>Tên phần mềm</th>
                        <th>Tên khách hàng</th>
                        

                        <th>Thao tác</th>
                     </tr>
                  </thead>
                  <tbody class="ligth-body">
                     <tr>
                        <td>1</td>
                        <td>CREM01</td>
                        <td>Beauty</td>
                        

                        <td>
                           <div class="d-flex align-items-center list-action">

                              <!-- <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" href="#"><i class="ri-eye-line mr-0"></i></a> -->
                              <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line mr-0"></i></a>
                              <a class="badge bg-danger mr-2" data-toggle="modal" data-placement="top" title="" data-original-title="Download" data-target="#ModalDownloadHDBT" href="#"><i class="ri-download-2-line mr-0"></i></a>
                              <a class="badge bg-warning mr-2" data-toggle="modal" data-placement="top" title="" data-original-title="Add" data-target="#ModalAddHDBT" href="#"><i class="ri-user-unfollow-line mr-0"></i></a>
                              <!-- <a class="badge badge-info mr-2" data-toggle=" modal" data-placement="top" title="" data-original-title="Maintenance" data-target="#ModalBaoTri" href="#"><i class="ri-edit-box-line pr-0"></i></a> -->
                              <!-- <a class="badge bg-dark mr-2" data-toggle="modal" data-placement="top" title="" data-original-title="Export" data-target="#ModalExportDSHD" href="#"><i class="ri-file-edit-fill pr-0"></i></a>
                              <a class="badge badge-info mr-2" data-toggle=" modal" data-placement="top" title="" data-original-title="Maintenance" href="#ModelBaoTriDSHD"><i class="ri-edit-box-line pr-0"></i></a> -->
                           </div>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>



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