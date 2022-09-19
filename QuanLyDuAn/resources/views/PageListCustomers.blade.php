@extends('layouts.site')
@section('main')
<div class="content-page">
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Danh sách người dùng</h4>
               </div>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <div class="row justify-content-between">
                     <div class="col-sm-6 col-md-6">
                        <div id="user_list_datatable_info" class="dataTables_filter">
                           <form class="mr-3 position-relative">
                              <div class="form-group mb-0">
                                 <input type="search" class="form-control" id="exampleInputSearch" placeholder="Search"
                                    aria-controls="user-list-table">
                              </div>
                           </form>
                        </div>
                     </div>
                     <!-- <div class="col-sm-6 col-md-6">
                        <div class="user-list-files d-flex">
                           <a class="bg-primary" href="javascript:void();">
                              Print
                           </a>
                           <a class="bg-primary" href="javascript:void();">
                              Excel
                           </a>
                           <a class="bg-primary" href="javascript:void();">
                              Pdf
                           </a>
                        </div>
                     </div> -->
                  </div>
                  <table id="user-list-table" class="table table-striped dataTable mt-4" role="grid"
                     aria-describedby="user-list-page-info">
                     <thead>
                        <tr class="ligth">
                           <th>Profile</th>
                           <th>Tên</th>
                           <th>SĐT</th>
                           <th>Email</th>
                           <th>Địa chỉ</th>
                           <th>Chức vụ</th>
                           <th>Ngày tham gia</th>
                           <th style="min-width: 100px">Thao tác</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td class="text-center"><img class="rounded img-fluid avatar-40"
                                 src="{{url('public/site')}}/images/user/01.jpg" alt="profile"></td>
                           <td>Anna Sthesia</td>
                           <td>(760) 756 7568</td>
                           <td>annasthesia@gmail.com</td>
                           <td>USA</td>
                           <td><span class="badge bg-primary">Active</span></td>
                           <td>2019/12/01</td>
                           <td>
                              <div class="flex align-items-center list-user-action">
                                 <a class="btn btn-sm bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Add" href="#"><i class="ri-user-add-line mr-0"></i></a>
                                 <a class="btn btn-sm bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Edit" href="#"><i class="ri-pencil-line mr-0"></i></a>
                                 <a class="btn btn-sm bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Delete" href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                              </div>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="row justify-content-between mt-3">
                  <div id="user-list-page-info" class="col-md-6">
                     <span>Showing 1 to 5 of 5 entries</span>
                  </div>
                  <div class="col-md-6">
                     <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end mb-0">
                           <li class="page-item disabled">
                              <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                           </li>
                           <li class="page-item active"><a class="page-link" href="#">1</a></li>
                           <li class="page-item"><a class="page-link" href="#">2</a></li>
                           <li class="page-item"><a class="page-link" href="#">3</a></li>
                           <li class="page-item">
                              <a class="page-link" href="#">Next</a>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
      </div>

@stop()