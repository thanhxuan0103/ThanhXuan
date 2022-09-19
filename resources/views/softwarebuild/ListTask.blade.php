@extends('layouts.site')
@section('main')
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
                              Quản lý nhiệm vụ
                           </a>
                        </li>
                        <li class="col-md-6 p-0">
                           <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                              Biểu đồ nhiệm vụ
                           </a>
                        </li>

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
                              <h4 class="card-title">Quản lý nhiệm vụ xây dựng phần mềm</h4>
                           </div>
                           <a href="page-add-sale.html" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Thêm nhiệm vụ</a>
                        </div>
                        <div class="card-body">
                           <form>
                              <div class="col-lg-12">
                                 <div class="table-responsive rounded mb-3">
                                    <table class="data-table table mb-0 tbl-server-info">
                                       <thead class="bg-white text-uppercase">
                                          <tr class="ligth ligth-data">
                                             <th>STT</th>
                                             <th>Tên nhiệm vụ</th>
                                             <th>Phân công</th>
                                             <th>Ngày bắt đầu</th>
                                             <th>Ngày kết thúc</th>
                                             <th>Trạng thái</th>
                                             <th>Thao tác</th>
                                          </tr>
                                       </thead>
                                       <tbody class="ligth-body">
                                          <tr>
                                             <td>1</td>
                                             <td>Bill Yerds</td>
                                             <td>Xuan</td>
                                             <td>38.50</td>
                                             <td>38.50</td>
                                             <td>
                                                <div class="badge badge-success">Hoàn thành</div>
                                             </td>

                                             <td>
                                                <div class="d-flex align-items-center list-action">
                                                   <!-- <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" 
                                        href="#"><i class="ri-eye-line mr-0"></i></a> -->
                                                   <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line mr-0"></i></a>
                                                   <!-- <a class="badge bg-danger mr-2" data-toggle="modal" data-placement="top" title="" data-original-title="Download" data-target="#ModalDownloadListSale"
                                        href="#"><i class="ri-download-2-line mr-0"></i></a>
                                    <a class="badge bg-warning mr-2" data-toggle="modal" data-placement="top" title="" data-original-title="Add" data-target="#ModalAddListSale"
                                        href="#"><i class="ri-user-unfollow-line mr-0"></i></a> -->
                                                </div>
                                             </td>
                                          </tr>

                                       </tbody>
                                    </table>
                                 </div>
                              </div>

                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                     <div class="card">
                        <div class="card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Biểu đồ nhiệm vụ</h4>
                           </div>
                        </div>
                        <div class="card-body">
                           <form>
                              <h1>Vẽ biểu đồ Gantt ở đây</h1>
                           </form>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </div>
      <!-- Page end  -->
   </div>

</div>
</div>

@stop()