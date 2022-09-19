@extends('layouts.site')
@extends('layouts.modal')
@section('main')

<div class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-lg-12">
             <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                <div>
                   <h4 class="mb-3">Danh sách File</h4>
                </div>
                {{--  <a href="page-add-sale.html" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Thêm dự án</a>  --}}
             </div>
          </div>
          <div class="col-lg-12">
             <div class="table-responsive rounded mb-3">
                <table class="data-tables table mb-0 tbl-server-info">
                   <thead class="bg-white text-uppercase">
                      <tr class="ligth ligth-data">
                         <th>Tên file</th>
                         <th>File</th>
                         <th>Ngày đăng</th>
                         <th>Thao tác</th>

                      </tr>
                   </thead>
                   <tbody class="ligth-body">
                    @foreach ($files as $file)

                    @if (substr($file->Prefix, 0, 3) !='AVT')
                      <tr>
                         <td>{{ $file->FileName}}</td>
                         <td>{{$file->File}}</td>
                         <td>{{$file->UploadDate->format('d-m-Y')}}</td>
                         <td>
                            <div class="d-flex align-items-center list-action">
                               <a class="badge bg-success mr-2" data-toggle="tooltip"
                               data-placement="top" title="" data-original-title="Edit"
                               href="#"><i class="ri-pencil-line mr-0"></i></a>
                               <a class="badge bg-danger mr-2" data-toggle="tooltip"
                               data-target="" data-placement="top" title="" data-original-title="Download"  href="{{route('downloadFile',['idFile' => $file->idFile])}}"><i class="ri-download-2-line mr-0"></i></a>
                               <a class="badge bg-warning mr-2" data-toggle="modal" data-placement="top" title="" data-original-title="Add" data-target="#ModalAddAllFile" href="#"><i class="ri-user-unfollow-line mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      @endif
                      @endforeach
                   </tbody>
                </table>
             </div>
          </div>
       </div>
       <!-- Page end  -->
    </div>


 </div>
@stop()
