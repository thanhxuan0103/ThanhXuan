@extends('layouts.site')
@extends('layouts.modal')
@section('main')
<div class="content-page">
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Danh sách người dùng</h4>
                  @if (Session()->has('UpdateUserSuccess'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('UpdateUserSuccess') }}
                        </div>
                    @elseif(Session()->has('ResetPasswordSuccess'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('ResetPasswordSuccess') }}
                    </div>
                    @endif
               </div>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <div class="row justify-content-between">
                     <div class="col-sm-6 col-md-6">
                        <div id="user_list_datatable_info" class="dataTables_filter">
                           {{-- <form class="mr-3 position-relative">
                              <div class="form-group mb-0">
                                 <input type="search" class="form-control" id="exampleInputSearch" placeholder="Search"
                                    aria-controls="user-list-table">
                              </div>
                           </form> --}}
                        </div>
                     </div>
                  </div>
                  <table id="user-list-table" class="table table-striped dataTable data-tables mt-4" role="grid"
                     aria-describedby="user-list-page-info">
                     <thead>
                        <tr class="ligth">
                           <th>Profile</th>
                           <th>Tên</th>
                           <th>Email</th>
                           <th>Chức vụ</th>
                           <th>Ngày tham gia</th>
                           <th style="min-width: 100px">Thao tác</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($data1 as $user)
                        <tr>
                           <td class="text-center"><img class="rounded img-fluid avatar-40"
                                 src="{{url('public/site')}}/images/user/01.jpg" alt="profile"></td>
                           <td>{{ $user->name }}</td>
                           <td>{{ $user->email }}</td>
                           <td >{{ !empty($user->UserGroup) ? $user->UserGroup->GroupName:'' }}</td>
                           <td>{{ $user->created_at->format('d-m-Y') }} </td>
                           <td>
                            <div class="d-flex align-items-center list-action">
                                <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top"
                                    title="" id="" data-target="#ModalEditUser" data-original-title="Sửa" href="{{ route('UpdateUser', ['idUser' => $user->id]) }}"><i
                                        class="ri-pencil-line mr-0"></i></a>
                                <a class="badge bg-info mr-2" data-toggle="tooltip" data-placement="top"
                                    title="" data-original-title="Đặt lại mật khẩu" onclick="" data-target=""
                                    href="{{ route('ResetUserPassword', ['idUser' => $user->id]) }}"><i class="ri-user-unfollow-line mr-0"></i></a>
                                <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top"
                                    title="" data-original-title="Xóa"
                                    data-target="" href="#"><i
                                        class="ri-delete-bin-line mr-0"></i></a>

                            </div>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>

            </div>
         </div>
      </div>
   </div>
</div>
      </div>

@stop()
