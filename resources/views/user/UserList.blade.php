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
               </div>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <div class="row justify-content-between">
                     <div class="col-sm-6 col-md-6">
                        <div id="user_list_datatable_info" class="dataTables_filter">
                            @if(Session::has('updateUserSuccess'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('updateUserSuccess')}}
                            </div>
                            @elseif (Session::has('deletedUser'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('deletedUser')}}
                            </div>
                            @elseif (Session::has('unlockUserSuccess'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('unlockUserSuccess')}}
                            </div>
                            @elseif (Session::has('error'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('error')}}
                            </div>
                            @endif
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
                        @foreach($data as $user)
                        @php
                            $avatar = App\Models\file::where('Prefix','AVT'.$user->id)->get();
                        @endphp
                        <tr>
                            @if(!$avatar)
                           <td class="text-center"><img class="rounded img-fluid avatar-40"
                                 src="{{url('public/site')}}/images/user/01.jpg" alt="profile"></td>
                            @elseif (isset($avatar[0]->File))
                            <td class="text-center"><img class="rounded img-fluid avatar-40"
                                src="{{url('storage')}}/app/Avatars/{{$avatar[0]->File}}" alt="profile"></td>
                            @else
                            <td class="text-center"><img class="rounded img-fluid avatar-40"
                                src="{{url('public/site')}}/images/user/01.jpg" alt="profile"></td>
                            @endif
                            @if($user->deleted == 1)
                           <td ><s>{{ $user->name }}</s> (Đã bị Khóa)</td>
                           @else
                           <td >{{ $user->name }} </td>
                           @endif
                           <td>{{ $user->email }}</td>
                           <td >{{ !empty($user->UserGroup) ? $user->UserGroup->GroupName:'' }}</td>
                           <td>{{ $user->created_at->format('d-m-Y') }} </td>
                           <td>
                            <div class="d-flex align-items-center list-action">
                                <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top"
                                    title=""  data-original-title="Sửa thông tin" href="{{route('EditUser',['idUser'=>$user->id])}}"><i
                                        class="ri-pencil-line mr-0"></i></a>
                                <a class="badge bg-warning mr-2 delete-user" data-toggle="tooltip" data-placement="top"
                                    title=""  value="{{$user->id}}" data-original-title="Khóa người dùng" onclick="" data-target=""
                                    href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                    @if($user->deleted == 1)
                                    <a class="badge bg-info mr-2 " data-toggle="tooltip" data-placement="top"
                                    title=""  data-original-title="Mở khóa người dùng" onclick="" data-target=""
                                    href="{{route('UnlockUser',['idUser'=>$user->id])}}"><i class="ri-lock-unlock-line mr-0"></i></a>
                                    @endif
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
@section('footer')
    <script type="text/javascript" src="{{url('public/site')}}/js/user.js"></script>
@endsection
