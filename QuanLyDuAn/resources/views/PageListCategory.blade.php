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
                    
                </div>
            </div>
            <div class="col-lg-12">
                <div class="table-responsive rounded mb-3">
                <table class="data-table table mb-0 tbl-server-info">
                    <thead class="bg-white text-uppercase">
                        <tr class="ligth ligth-data">
                            <th>
                                <div class="checkbox d-inline-block">
                                    <input type="checkbox" class="checkbox-input" id="checkbox1">
                                    <label for="checkbox1" class="mb-0"></label>
                                </div>
                            </th>
                            <th>Image</th>
                            <th>Code</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="ligth-body">
                        <tr>
                            <td>
                                <div class="checkbox d-inline-block">
                                    <input type="checkbox" class="checkbox-input" id="checkbox2">
                                    <label for="checkbox2" class="mb-0"></label>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{url('public/site')}}/images/table/product/01.jpg" class="img-fluid rounded avatar-50 mr-3" alt="image">
                                    <div>
                                        Organic Cream
                                        <p class="mb-0"><small>This is test Product</small></p>
                                    </div>
                                </div>
                            </td>
                            <td>CREM01</td>
                            <td>Beauty</td>
                            <td>
                                <div class="d-flex align-items-center list-action">
                                    <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"
                                        href="#"><i class="ri-eye-line mr-0"></i></a>
                                    <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                        href="#"><i class="ri-pencil-line mr-0"></i></a>
                                    <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                        href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox d-inline-block">
                                    <input type="checkbox" class="checkbox-input" id="checkbox3">
                                    <label for="checkbox3" class="mb-0"></label>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{url('public/site')}}/images/table/product/02.jpg" class="img-fluid rounded avatar-50 mr-3" alt="image">
                                    <div>
                                        Rain Umbrella
                                        <p class="mb-0"><small>This is test Product</small></p>
                                    </div>
                                </div>
                            </td>
                            <td>UM01</td>
                            <td>Grocery</td>
                            <td>
                                <div class="d-flex align-items-center list-action">
                                    <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"
                                        href="#"><i class="ri-eye-line mr-0"></i></a>
                                    <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                        href="#"><i class="ri-pencil-line mr-0"></i></a>
                                    <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                        href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox d-inline-block">
                                    <input type="checkbox" class="checkbox-input" id="checkbox4">
                                    <label for="checkbox4" class="mb-0"></label>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{url('public/site')}}/images/table/product/03.jpg" class="img-fluid rounded avatar-50 mr-3" alt="image">                                  
                                    <div>
                                        Serum Bottle
                                        <p class="mb-0"><small>This is test Product</small></p>
                                    </div>
                                </div>
                            </td>
                            <td>SEM01</td>
                            <td>Beauty</td>
                            <td>
                                <div class="d-flex align-items-center list-action">
                                    <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"
                                        href="#"><i class="ri-eye-line mr-0"></i></a>
                                    <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                        href="#"><i class="ri-pencil-line mr-0"></i></a>
                                    <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                        href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox d-inline-block">
                                    <input type="checkbox" class="checkbox-input" id="checkbox5">
                                    <label for="checkbox5" class="mb-0"></label>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{url('public/site')}}/images/table/product/04.jpg" class="img-fluid rounded avatar-50 mr-3" alt="image">                                    
                                    <div>
                                        Coffee Beans
                                        <p class="mb-0"><small>This is test Product</small></p>
                                    </div>
                                </div>
                            </td>
                            <td>COF01</td>
                            <td>Food</td>
                            <td>
                                <div class="d-flex align-items-center list-action">
                                    <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"
                                        href="#"><i class="ri-eye-line mr-0"></i></a>
                                    <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                        href="#"><i class="ri-pencil-line mr-0"></i></a>
                                    <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                        href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox d-inline-block">
                                    <input type="checkbox" class="checkbox-input" id="checkbox6">
                                    <label for="checkbox6" class="mb-0"></label>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{url('public/site')}}/images/table/product/05.jpg" class="img-fluid rounded avatar-50 mr-3" alt="image">
                                    <div>
                                        Book Shelves                                   
                                        <p class="mb-0"><small>This is test Product</small></p>
                                    </div>
                                </div>
                            </td>
                            <td>FUN01</td>
                            <td>Furniture</td>
                            <td>
                                <div class="d-flex align-items-center list-action">
                                    <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"
                                        href="#"><i class="ri-eye-line mr-0"></i></a>
                                    <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                        href="#"><i class="ri-pencil-line mr-0"></i></a>
                                    <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                        href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox d-inline-block">
                                    <input type="checkbox" class="checkbox-input" id="checkbox7">
                                    <label for="checkbox7" class="mb-0"></label>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{url('public/site')}}/images/table/product/06.jpg" class="img-fluid rounded avatar-50 mr-3" alt="image">
                                    <div>
                                        Dinner Set                                  
                                        <p class="mb-0"><small>This is test Product</small></p>
                                    </div>
                                </div>
                            </td>
                            <td>DIS01</td>
                            <td>Grocery</td>
                            <td>
                                <div class="d-flex align-items-center list-action">
                                    <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"
                                        href="#"><i class="ri-eye-line mr-0"></i></a>
                                    <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                        href="#"><i class="ri-pencil-line mr-0"></i></a>
                                    <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                        href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox d-inline-block">
                                    <input type="checkbox" class="checkbox-input" id="checkbox8">
                                    <label for="checkbox8" class="mb-0"></label>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{url('public/site')}}/images/table/product/07.jpg" class="img-fluid rounded avatar-50 mr-3" alt="image">
                                    <div>
                                        Nike Shoes                               
                                        <p class="mb-0"><small>This is test Product</small></p>
                                    </div>
                                </div>
                            </td>
                            <td>NIS01</td>
                            <td>Shoes</td>
                            <td>
                                <div class="d-flex align-items-center list-action">
                                    <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"
                                        href="#"><i class="ri-eye-line mr-0"></i></a>
                                    <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                        href="#"><i class="ri-pencil-line mr-0"></i></a>
                                    <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                        href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox d-inline-block">
                                    <input type="checkbox" class="checkbox-input" id="checkbox9">
                                    <label for="checkbox9" class="mb-0"></label>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{url('public/site')}}/images/table/product/08.jpg" class="img-fluid rounded avatar-50 mr-3" alt="image">
                                    <div>
                                        Computer Glasses                               
                                        <p class="mb-0"><small>This is test Product</small></p>
                                    </div>
                                </div>
                            </td>
                            <td>COG01</td>
                            <td>Frames</td>
                            <td>
                                <div class="d-flex align-items-center list-action">
                                    <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"
                                        href="#"><i class="ri-eye-line mr-0"></i></a>
                                    <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                        href="#"><i class="ri-pencil-line mr-0"></i></a>
                                    <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                        href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox d-inline-block">
                                    <input type="checkbox" class="checkbox-input" id="checkbox10">
                                    <label for="checkbox10" class="mb-0"></label>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{url('public/site')}}/images/table/product/09.jpg" class="img-fluid rounded avatar-50 mr-3" alt="image">
                                    <div>
                                        Alloy Jewel Set                   
                                        <p class="mb-0"><small>This is test Product</small></p>
                                    </div>
                                </div>
                            </td>
                            <td>AJS01</td>
                            <td>Jewellery</td>
                            <td>
                                <div class="d-flex align-items-center list-action">
                                    <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"
                                        href="#"><i class="ri-eye-line mr-0"></i></a>
                                    <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                        href="#"><i class="ri-pencil-line mr-0"></i></a>
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