@extends('layouts.site')
@section('main')
<div class="content-page">
     <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">Danh sách nghiệm thu thanh lí</h4>
                    </div>
                    <a href="page-add-purchase.html" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add Purchase</a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="table-responsive rounded mb-3">
                <table class="data-table table mb-0 tbl-server-info">
                    <thead class="bg-white text-uppercase">
                        <tr class="ligth ligth-data">
                            <th>ID</th>
                            <th>Tên hợp đồng</th>
                            <th>Trạng thái</th>
                            <th>File</th>
                            <th>Hóa đơn</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="ligth-body">
                        <tr>
                            <td>1</td>
                            <td>Fruits Supply</td>
                            <td>Fruits Supply</td>
                            <td><div class="badge badge-success">Từ chối</div></td>                            
                            <td><div class="badge badge-warning">Đã xuất</div></td>
                            <td>
                                <div class="d-flex align-items-center list-action">
                                    <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"
                                        href="#"><i class="ri-eye-line mr-0"></i></a>
                                    <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                        href="#"><i class="ri-pencil-line mr-0"></i></a>
                                    <a class="badge bg-danger mr-2" data-toggle="modal" data-placement="top" title="" data-original-title="Download" data-target="#ModalDownload"
                                        href="#"><i class="ri-download-2-line mr-0"></i></a>
                                    <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                        href="#"><i class="ri-delete-bin-line mr-0"></i></a>
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
    <!-- Modal Download Start -->
<div class="modal fade" id="ModalDownload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Danh sách File</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- <div class="content-page"> -->
      <div class="card">
                  <!-- <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Borderless table</h4>
                     </div>
                  </div> -->
                  <div class="card-body">
                     <table class="table table-borderless">
                     <thead>
                           <tr>
                              <th scope="col">STT</th>
                              <th scope="col">Filename</th>
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
                              <td>Otto</td>
                              <td>@mdo</td>
                              <td>@mdo</td>
                              <td>
                              <div class="d-flex align-items-center list-action">
                                    <a class="badge bg-danger mr-2" data-toggle="modal" data-placement="top" title="" data-original-title="Download" data-target="#ModalDownload"
                                        href="#"><i class="ri-download-2-line mr-0"></i></a>
                                </div>
                              </td>
                           </tr>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                              <td>@mdo</td>
                              <td>
                              <div class="d-flex align-items-center list-action">
                                    <a class="badge bg-danger mr-2" data-toggle="modal" data-placement="top" title="" data-original-title="Download" data-target="#ModalDownload"
                                        href="#"><i class="ri-download-2-line mr-0"></i></a>
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
      </div>
@stop()