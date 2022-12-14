@php
$idUserLoggedIn = session()->get('loginID');
@endphp

<style>

</style>
<!-- Modal Danh Sach Hop Dong Start -->

<!-- Modal Add Start Danh Sach Hop Dong -->
<div class="modal fade" id="ModalAddDSHD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
                                                    <div class="user-img img-fluid"><img
                                                            src="{{ url('public/site') }}/images/user/01.jpg"
                                                            alt="story-img" class="rounded avatar-40"></div>
                                                    <div class="media-support-info ml-3">
                                                        <h6 class="d-inline-block">Landing page for secret Project</h6>
                                                        <span
                                                            class="badge badge-warning ml-3 text-white">expirinq</span>
                                                        <p class="mb-0">by Danlel Cllfferton</p>
                                                    </div>
                                                    <div class="card-header-toolbar d-flex align-items-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="todo-check"
                                                                class="custom-control-input" id="check1">
                                                            <label class="custom-control-label" for="check1"></label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-center p-3 active-task">
                                                    <div class="user-img img-fluid"><img
                                                            src="{{ url('public/site') }}/images/user/01.jpg"
                                                            alt="story-img" class="rounded avatar-40"></div>
                                                    <div class="media-support-info ml-3">
                                                        <h6>Fix Critical Crashes</h6>
                                                        <p class="mb-0">by Cralg Danles</p>
                                                    </div>
                                                    <div class="card-header-toolbar d-flex align-items-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="todo-check"
                                                                class="custom-control-input" id="check2"
                                                                checked="checked">
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
                                                                <span class="dropdown-toggle dropdown-bg btn"
                                                                    id="dropdownMenuButton001" data-toggle="dropdown">
                                                                    Tất cả<i class="ri-arrow-down-s-line ml-1"></i>
                                                                </span>
                                                                <div class="dropdown-menu dropdown-menu-right shadow-none"
                                                                    aria-labelledby="dropdownMenuButton001">
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
                                                        <input type="text" class="form-control todo-search"
                                                            id="exampleInputEmail001" placeholder="Search">
                                                        <a class="search-link" href="#"><i
                                                                class="ri-search-line"></i></a>
                                                    </div>
                                                </form>
                                                <div class="iq-todo-friendlist mt-3">
                                                    <ul class="suggestions-lists m-0 p-0">
                                                        <li class="d-flex mb-4 align-items-center">
                                                            <div class="user-img img-fluid"><img
                                                                    src="{{ url('public/site') }}/images/user/01.jpg"
                                                                    alt="story-img" class="rounded avatar-40"></div>
                                                            <div class="media-support-info ml-3">
                                                                <h6>Paul Molive</h6>
                                                                <p class="mb-0">trainee</p>
                                                            </div>
                                                            <div class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle text-primary"
                                                                        id="dropdownMenuButton41"
                                                                        data-toggle="dropdown">
                                                                        <i class="ri-more-2-line"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        style="">
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-close-circle-line mr-2"></i>Unfriend</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-lock-line mr-2"></i>block</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex mb-4 align-items-center">
                                                            <div class="user-img img-fluid"><img
                                                                    src="{{ url('public/site') }}/images/user/02.jpg"
                                                                    alt="story-img" class="rounded avatar-40"></div>
                                                            <div class="media-support-info ml-3">
                                                                <h6>Anna Mull</h6>
                                                                <p class="mb-0">Web Developer</p>
                                                            </div>
                                                            <div class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle text-primary"
                                                                        id="dropdownMenuButton42"
                                                                        data-toggle="dropdown">
                                                                        <i class="ri-more-2-line"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        style="">
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-close-circle-line mr-2"></i>Unfriend</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-lock-line mr-2"></i>block</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <a href="javascript:void(0);" class="btn btn-primary d-block"><i
                                                            class="ri-add-line"></i> Load More</a>
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
<!-- Modal Add End Danh Sach Hop Dong -->

<!-- Modal Download Start Danh Sach Hop Dong -->
<div class="modal fade" id="ModalDownloadDSHD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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

                                <label>Tên file</label>
                                <textarea class="form-control" rows="1"></textarea>
                            </div>

                            <div class="col-md-16">
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
                            <div class="col-md-16">
                                <label>Chia sẻ</label>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username"
                                        aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="pagination justify-content-end">
                                <button class="mt-2 btn btn-success" type="submit">Lưu</button>
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
                                <th scope="col">File</th>
                                <th scope="col">Tên file</th>
                                <th scope="col">Ngày đăng</th>
                                <th scope="col">Người tải lên</th>
                                <th scope="col">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>
                                    <div class="d-flex align-items-center list-action">
                                        <a class="badge bg-danger mr-2" data-toggle="modal" data-placement="top"
                                            title="" data-original-title="Download"
                                            data-target="#ModalDownload" href="#"><i
                                                class="ri-download-2-line mr-0"></i></a>
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
<!-- Modal Download End Danh Sach Hop Dong -->

<!-- Modal Export File Start  Danh Sach Hop Dong-->
<div class="modal fade" id="ModalAcceptanceDocs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
        <form id="form-fileAct" action="{{ route('UploadAccptDocs') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm file nghiệm thu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-sm-12 ">
                        <div class="form-group">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr class="ligth">
                                                <th scope="col">Check</th>
                                                <th scope="col">Tên giấy tờ</th>
                                                <th scope="col">Trạng thái</th>
                                                <th scope="col">Thêm file</th>
                                                <th scope="col">Thao tác</th>
                                                <th scope="col">Sửa trạng thái</th>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <th>
                                                <div class="d-flex align-items-center list-action">
                                                    <div class="checkbox d-inline-block mr-3">
                                                        <input type="checkbox" name="checkTKCT" value="1"
                                                            class="checkbox-input" id="checkTKCT">
                                                        <!-- <label for="checkbox1">Primary-Inactive</label> -->
                                                    </div>
                                                </div>
                                            </th>
                                            <td>Thiết kế chi tiết</td>
                                            <td class="status-file-act StatusFileTKCT"></td>
                                            <th>
                                                <div class="flex align-items-center input-group mb-4">
                                                    <div class="custom-file">
                                                        <input name="TKCT" type="file"
                                                            class="custom-file-input" id="TKCT"
                                                            onchange="checkOnUpload()">
                                                        <label class="custom-file-label" for="inputGroupFile02">Chọn
                                                            file</label>
                                                    </div>

                                                    <!-- <button type="button" class="btn btn-success mt-2"><i class="ri-settings-4-fill pr-0"></i></button> -->
                                                </div>
                                            </th>
                                            <th>
                                                <div class="d-flex align-items-center list-action">
                                                <a class="badge bg-danger mr-2 download-file" data-toggle="tooltip" data-placement="top"
                                                title="" name="TKCT" data-original-title="Download/Upload File" data-target="" onclick=""
                                                href="#"><i class="ri-download-2-line mr-0"></i></a>
                                                <a class="badge bg-dark mr-2 update-file" name="TKCT" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Cập nhật file" data-target="" onclick=""
                                                href="#"><i class="ri-file-edit-fill mr-0"></i></a>
                                                <a class="badge bg-success mr-2 update-status" name="TKCT" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Cập nhật trạng thái" data-target="" onclick=""
                                                href="#"><i class="ri-pencil-line mr-0"></i></a>
                                            </div>
                                        </th>
                                        <th class="status-TKCT">
                                            <div class="d-flex align-items-center list-action">
                                                    <select   name="StatusTKCT" id="StatusTKCT" class="update-status-actp selectpicker form-control" data-style="py-0" required>
                                                        <option disabled selected>--Chọn trạng thái--</option>
                                                            <option value="0">Chờ ký</option>
                                                            <option value="1">Chờ chỉnh sửa</option>
                                                            <option value="2">Đã ký</option>
                                                            <option value="3">Từ chối/Hủy</option>
                                                      </select>
                                                </div>
                                            </div>
                                        </th>

                                        </tr>


                                        <tr>
                                            <th>
                                                <div class="d-flex align-items-center list-action">
                                                    <div class="checkbox d-inline-block mr-3">
                                                        <input type="checkbox" name="checkSoureCode" value="1"
                                                            class="checkbox-input" id="checkSoureCode">
                                                        <!-- <label for="checkbox1">Primary-Inactive</label> -->
                                                    </div>
                                                </div>
                                            </th>
                                            <td>Source code</td>
                                            <td class="status-file-act StatusFileSoureCode"></td>
                                            <th>
                                                <div class="flex align-items-center input-group mb-4">
                                                    <div class="custom-file">
                                                        <input name="SoureCode" type="file"
                                                            class="custom-file-input" id="SoureCode"
                                                            onchange="checkOnUpload()">
                                                        <label class="custom-file-label" for="inputGroupFile02">Chọn
                                                            file</label>
                                                    </div>

                                                    <!-- <button type="button" class="btn btn-success mt-2"><i class="ri-settings-4-fill pr-0"></i></button> -->
                                                </div>
                                            </th>
                                            <th>
                                                <div class="d-flex align-items-center list-action">
                                                <a class="badge bg-danger mr-2 download-file" data-toggle="tooltip" data-placement="top"
                                                title="" name="SoureCode" data-original-title="Download/Upload File" data-target="" onclick=""
                                                href="#"><i class="ri-download-2-line mr-0"></i></a>
                                                <a class="badge bg-dark mr-2 update-file" name="SoureCode" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Cập nhật file" data-target="" onclick=""
                                                href="#"><i class="ri-file-edit-fill mr-0"></i></a>
                                                <a class="badge bg-success mr-2 update-status" name="SoureCode" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Cập nhật trạng thái" data-target="" onclick=""
                                                href="#"><i class="ri-pencil-line mr-0"></i></a>
                                            </div>
                                        </th>
                                        <th class="status-SoureCode">
                                            <div class="d-flex align-items-center list-action">
                                                    <select   name="StatusSoureCode" id="StatusSoureCode" class="update-status-actp selectpicker form-control" data-style="py-0" required>
                                                        <option disabled selected>--Chọn trạng thái--</option>
                                                            <option value="0">Chờ ký</option>
                                                            <option value="1">Chờ chỉnh sửa</option>
                                                            <option value="2">Đã ký</option>
                                                            <option value="3">Từ chối/Hủy</option>
                                                      </select>
                                                </div>
                                            </div>
                                        </th>
                                        </tr>


                                        <tr>
                                            <th>
                                                <div class="d-flex align-items-center list-action">
                                                    <div class="checkbox d-inline-block mr-3">
                                                        <input type="checkbox" name="checkHDSD" value="1"
                                                            class="checkbox-input" id="checkHDSD">
                                                        <!-- <label for="checkbox1">Primary-Inactive</label> -->
                                                    </div>
                                                </div>
                                            </th>
                                            <td>Hướng dẫn sử dụng</td>
                                            <td class="status-file-act StatusFileHDSD"></td>
                                            <th>
                                                <div class="flex align-items-center input-group mb-4">
                                                    <div class="custom-file">
                                                        <input name="HDSD" type="file"
                                                            class="custom-file-input" id="HDSD"
                                                            onchange="checkOnUpload()">
                                                        <label class="custom-file-label" for="inputGroupFile02">Chọn
                                                            file</label>
                                                    </div>

                                                    <!-- <button type="button" class="btn btn-success mt-2"><i class="ri-settings-4-fill pr-0"></i></button> -->
                                                </div>
                                            </th>
                                            <th>
                                                <div class="d-flex align-items-center list-action">
                                                <a class="badge bg-danger mr-2 download-file" data-toggle="tooltip" data-placement="top"
                                                title="" name="HDSD" data-original-title="Download/Upload File" data-target="" onclick=""
                                                href="#"><i class="ri-download-2-line mr-0"></i></a>
                                                <a class="badge bg-dark mr-2 update-file" name="HDSD" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Cập nhật file" data-target="" onclick=""
                                                href="#"><i class="ri-file-edit-fill mr-0"></i></a>
                                                <a class="badge bg-success mr-2 update-status" name="HDSD" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Cập nhật trạng thái" data-target="" onclick=""
                                                href="#"><i class="ri-pencil-line mr-0"></i></a>
                                            </div>
                                        </th>
                                        <th class="status-HDSD">
                                            <div class="d-flex align-items-center list-action">
                                                    <select   name="StatusHDSD" id="StatusHDSD" class="update-status-actp selectpicker form-control" data-style="py-0" required>
                                                        <option disabled selected>--Chọn trạng thái--</option>
                                                            <option value="0">Chờ ký</option>
                                                            <option value="1">Chờ chỉnh sửa</option>
                                                            <option value="2">Đã ký</option>
                                                            <option value="3">Từ chối/Hủy</option>
                                                      </select>
                                                </div>
                                            </div>
                                        </th>
                                        </tr>


                                        <tr>
                                            <th>
                                                <div class="d-flex align-items-center list-action">
                                                    <div class="checkbox d-inline-block mr-3">
                                                        <input type="checkbox" name="checkHDQT" value="1"
                                                            class="checkbox-input" id="checkHDQT">
                                                        <!-- <label for="checkbox1">Primary-Inactive</label> -->
                                                    </div>
                                                </div>
                                            </th>
                                            <td>Hướng dẫn quản trị</td>
                                            <td class="status-file-act StatusFileHDQT"></td>
                                            <th>
                                                <div class="flex align-items-center input-group mb-4">
                                                    <div class="custom-file">
                                                        <input name="HDQT" type="file"
                                                            class="custom-file-input" id="HDQT"
                                                            onchange="checkOnUpload()">
                                                        <label class="custom-file-label" for="inputGroupFile02">Chọn
                                                            file</label>
                                                    </div>

                                                    <!-- <button type="button" class="btn btn-success mt-2"><i class="ri-settings-4-fill pr-0"></i></button> -->
                                                </div>
                                            </th>
                                            <th>
                                                <div class="d-flex align-items-center list-action">
                                                <a class="badge bg-danger mr-2 download-file" data-toggle="tooltip" data-placement="top"
                                                title="" name="HDQT" data-original-title="Download/Upload File" data-target="" onclick=""
                                                href="#"><i class="ri-download-2-line mr-0"></i></a>
                                                <a class="badge bg-dark mr-2 update-file" name="HDQT" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Cập nhật file" data-target="" onclick=""
                                                href="#"><i class="ri-file-edit-fill mr-0"></i></a>
                                                <a class="badge bg-success mr-2 update-status" name="HDQT" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Cập nhật trạng thái" data-target="" onclick=""
                                                href="#"><i class="ri-pencil-line mr-0"></i></a>
                                            </div>
                                        </th>
                                        <th class="status-HDQT">
                                            <div class="d-flex align-items-center list-action">
                                                    <select   name="StatusHDQT" id="StatusHDQT" class="update-status-actp selectpicker form-control" data-style="py-0" required>
                                                        <option disabled selected>--Chọn trạng thái--</option>
                                                            <option value="0">Chờ ký</option>
                                                            <option value="1">Chờ chỉnh sửa</option>
                                                            <option value="2">Đã ký</option>
                                                            <option value="3">Từ chối/Hủy</option>
                                                      </select>
                                                </div>
                                            </div>
                                        </th>
                                        </tr>


                                        <tr>
                                            <th>
                                                <div class="d-flex align-items-center list-action">
                                                    <div class="checkbox d-inline-block mr-3">
                                                        <input type="checkbox" name="checkTHPM" value="1"
                                                            class="checkbox-input" id="checkTHPM">
                                                        <!-- <label for="checkbox1">Primary-Inactive</label> -->
                                                    </div>
                                                </div>
                                            </th>
                                            <td>Biên bản tập huấn phần mềm</td>
                                            <td class="status-file-act StatusFileTHPM"></td>
                                            <th>
                                                <div class="flex align-items-center input-group mb-4">
                                                    <div class="custom-file">
                                                        <input name="THPM" type="file"
                                                            class="custom-file-input" id="THPM"
                                                            onchange="checkOnUpload()">
                                                        <label class="custom-file-label" for="inputGroupFile02">Chọn
                                                            file</label>
                                                    </div>

                                                    <!-- <button type="button" class="btn btn-success mt-2"><i class="ri-settings-4-fill pr-0"></i></button> -->
                                                </div>
                                            </th>
                                            <th>
                                                <div class="d-flex align-items-center list-action">
                                                <a class="badge bg-danger mr-2 download-file" data-toggle="tooltip" data-placement="top"
                                                title="" name="THPM" data-original-title="Download/Upload File" data-target="" onclick=""
                                                href="#"><i class="ri-download-2-line mr-0"></i></a>
                                                <a class="badge bg-dark mr-2 update-file" name="THPM" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Cập nhật file" data-target="" onclick=""
                                                href="#"><i class="ri-file-edit-fill mr-0"></i></a>
                                                <a class="badge bg-success mr-2 update-status" name="THPM" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Cập nhật trạng thái" data-target="" onclick=""
                                                href="#"><i class="ri-pencil-line mr-0"></i></a>
                                            </div>
                                        </th>
                                        <th class="status-THPM">
                                            <div class="d-flex align-items-center list-action">
                                                    <select   name="StatusTHPM" id="StatusTHPM" class="update-status-actp selectpicker form-control" data-style="py-0" required>
                                                        <option disabled selected>--Chọn trạng thái--</option>
                                                            <option value="0">Chờ ký</option>
                                                            <option value="1">Chờ chỉnh sửa</option>
                                                            <option value="2">Đã ký</option>
                                                            <option value="3">Từ chối/Hủy</option>
                                                      </select>
                                                </div>
                                            </div>
                                        </th>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="d-flex align-items-center list-action">
                                                    <div class="checkbox d-inline-block mr-3">
                                                        <input type="checkbox" name="checkTLHD" value="1"
                                                            class="checkbox-input" id="checkTLHD">
                                                        <!-- <label for="checkbox1">Primary-Inactive</label> -->
                                                    </div>
                                                </div>
                                            </th>
                                            <td>Biên bản thanh lý hợp đồng</td>
                                            <td class="status-file-act StatusFileTLHD"></td>
                                            <th>
                                                <div class="flex align-items-center input-group mb-4">
                                                    <div class="custom-file">
                                                        <input name="TLHD" type="file"
                                                            class="custom-file-input" id="TLHD"
                                                            onchange="checkOnUpload()">
                                                        <label class="custom-file-label" for="inputGroupFile02">Chọn
                                                            file</label>
                                                    </div>

                                                    <!-- <button type="button" class="btn btn-success mt-2"><i class="ri-settings-4-fill pr-0"></i></button> -->
                                                </div>
                                            </th>
                                            <th>
                                                <div class="d-flex align-items-center list-action">
                                                <a class="badge bg-danger mr-2 download-file" data-toggle="tooltip" data-placement="top"
                                                title="" name="TLHD" data-original-title="Download/Upload File" data-target="" onclick=""
                                                href="#"><i class="ri-download-2-line mr-0"></i></a>
                                                <a class="badge bg-dark mr-2 update-file" name="TLHD" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Cập nhật file" data-target="" onclick=""
                                                href="#"><i class="ri-file-edit-fill mr-0"></i></a>
                                                <a class="badge bg-success mr-2 update-status" name="TLHD" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Cập nhật trạng thái" data-target="" onclick=""
                                                href="#"><i class="ri-pencil-line mr-0"></i></a>
                                            </div>
                                        </th>
                                        <th class="status-TLHD">
                                            <div class="d-flex align-items-center list-action">
                                                    <select   name="StatusTLHD" id="StatusTLHD" class="update-status-actp selectpicker form-control" data-style="py-0" required>
                                                        <option disabled selected>--Chọn trạng thái--</option>
                                                            <option value="0">Chờ ký</option>
                                                            <option value="1">Chờ chỉnh sửa</option>
                                                            <option value="2">Đã ký</option>
                                                            <option value="3">Từ chối/Hủy</option>
                                                      </select>
                                                </div>
                                            </div>
                                        </th>
                                        </tr>

                                        <tr>
                                            <th>
                                                <div class="d-flex align-items-center list-action">
                                                    <div class="checkbox d-inline-block mr-3">
                                                        <input  type="checkbox" name="checkHD" value="1"
                                                            class="checkbox-input" id="checkHD">
                                                        <!-- <label for="checkbox1">Primary-Inactive</label> -->
                                                    </div>
                                                </div>
                                            </th>
                                            <td>Xuất hóa đơn</td>
                                            <td class="status-file-act StatusFileHD"></td>
                                            <th>
                                                <div class="flex align-items-center input-group mb-4">
                                                    <div class="custom-file">
                                                        <input name="HD" type="file"
                                                            class="custom-file-input" id="HD"
                                                            onchange="checkOnUpload()">
                                                        <label class="custom-file-label" for="inputGroupFile02">Chọn
                                                            file</label>
                                                    </div>

                                                    <!-- <button type="button" class="btn btn-success mt-2"><i class="ri-settings-4-fill pr-0"></i></button> -->
                                                </div>
                                            </th>
                                            <th>
                                                <div class="d-flex align-items-center list-action">
                                                <a class="badge bg-danger mr-2 download-file" data-toggle="tooltip" data-placement="top"
                                                title="" name="HD" data-original-title="Download/Upload File" data-target="" onclick=""
                                                href="#"><i class="ri-download-2-line mr-0"></i></a>
                                                <a class="badge bg-dark mr-2 update-file" name="HD" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Cập nhật file" data-target="" onclick=""
                                                href="#"><i class="ri-file-edit-fill mr-0"></i></a>
                                                <a class="badge bg-success mr-2 update-status" name="HD" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Cập nhật trạng thái" data-target="" onclick=""
                                                href="#"><i class="ri-pencil-line mr-0"></i></a>

                                            </div>
                                        </th>
                                        <th class="status-HD">
                                            <div class="d-flex align-items-center list-action">
                                                    <select   name="StatusHD" id="StatusHD" class="update-status-actp selectpicker form-control" data-style="py-0" required>
                                                        <option disabled selected>--Chọn trạng thái--</option>
                                                            <option value="0">Chờ ký</option>
                                                            <option value="1">Chờ chỉnh sửa</option>
                                                            <option value="2">Đã ký</option>
                                                            <option value="3">Từ chối/Hủy</option>
                                                      </select>
                                                </div>
                                            </div>
                                        </th>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>

        </form>
    </div>
</div>
</div>
<!-- Modal Export File End  Danh Sach Hop Dong-->
<!-- Modal Danh Sach Hop Dong End -->

<!-- Modal Yeu Cau Khach Hang Start -->

<!-- Modal Add Start Yeu Cau Khach Hang  -->
<div class="modal fade" id="ModalAddYCKH" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
                                                    <div class="user-img img-fluid"><img
                                                            src="{{ url('public/site') }}/images/user/01.jpg"
                                                            alt="story-img" class="rounded avatar-40"></div>
                                                    <div class="media-support-info ml-3">
                                                        <h6 class="d-inline-block">Landing page for secret Project</h6>
                                                        <span
                                                            class="badge badge-warning ml-3 text-white">expirinq</span>
                                                        <p class="mb-0">by Danlel Cllfferton</p>
                                                    </div>
                                                    <div class="card-header-toolbar d-flex align-items-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="todo-check"
                                                                class="custom-control-input" id="check1">
                                                            <label class="custom-control-label"
                                                                for="check1"></label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-center p-3 active-task">
                                                    <div class="user-img img-fluid"><img
                                                            src="{{ url('public/site') }}/images/user/01.jpg"
                                                            alt="story-img" class="rounded avatar-40"></div>
                                                    <div class="media-support-info ml-3">
                                                        <h6>Fix Critical Crashes</h6>
                                                        <p class="mb-0">by Cralg Danles</p>
                                                    </div>
                                                    <div class="card-header-toolbar d-flex align-items-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="todo-check"
                                                                class="custom-control-input" id="check2"
                                                                checked="checked">
                                                            <label class="custom-control-label"
                                                                for="check2"></label>
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
                                                                <span class="dropdown-toggle dropdown-bg btn"
                                                                    id="dropdownMenuButton001" data-toggle="dropdown">
                                                                    Tất cả<i class="ri-arrow-down-s-line ml-1"></i>
                                                                </span>
                                                                <div class="dropdown-menu dropdown-menu-right shadow-none"
                                                                    aria-labelledby="dropdownMenuButton001">
                                                                    <a class="dropdown-item" href="#">Tên
                                                                        nhóm</a>
                                                                    <a class="dropdown-item" href="#">Tên
                                                                        nhóm</a>
                                                                    <a class="dropdown-item" href="#">Tên
                                                                        nhóm</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form class="position-relative">
                                                    <div class="form-group mb-0">
                                                        <input type="text" class="form-control todo-search"
                                                            id="exampleInputEmail001" placeholder="Nhập gì đó">
                                                        <a class="search-link" href="#"><i
                                                                class="ri-search-line"></i></a>
                                                    </div>
                                                </form>
                                                <div class="iq-todo-friendlist mt-3">
                                                    <ul class="suggestions-lists m-0 p-0">
                                                        <li class="d-flex mb-4 align-items-center">
                                                            <div class="user-img img-fluid"><img
                                                                    src="{{ url('public/site') }}/images/user/01.jpg"
                                                                    alt="story-img" class="rounded avatar-40"></div>
                                                            <div class="media-support-info ml-3">
                                                                <h6>Paul Molive</h6>
                                                                <p class="mb-0">trainee</p>
                                                            </div>
                                                            <div class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle text-primary"
                                                                        id="dropdownMenuButton41"
                                                                        data-toggle="dropdown">
                                                                        <i class="ri-more-2-line"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        style="">
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-close-circle-line mr-2"></i>Unfriend</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-lock-line mr-2"></i>block</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex mb-4 align-items-center">
                                                            <div class="user-img img-fluid"><img
                                                                    src="{{ url('public/site') }}/images/user/02.jpg"
                                                                    alt="story-img" class="rounded avatar-40"></div>
                                                            <div class="media-support-info ml-3">
                                                                <h6>Anna Mull</h6>
                                                                <p class="mb-0">Web Developer</p>
                                                            </div>
                                                            <div class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle text-primary"
                                                                        id="dropdownMenuButton42"
                                                                        data-toggle="dropdown">
                                                                        <i class="ri-more-2-line"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        style="">
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-close-circle-line mr-2"></i>Unfriend</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-lock-line mr-2"></i>block</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <a href="javascript:void(0);" class="btn btn-primary d-block"><i
                                                            class="ri-add-line"></i> Load More</a>
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
<!-- Modal Add End Yeu Cau Khach Hang -->

<!-- Modal Download Start  Yeu Cau Khach Hang-->
<div class="modal fade" id="ModalDownload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ModalDownload-title" id="exampleModalLabel">Danh sách File liên quan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- <div class="content-page"> -->
                <div class="card">
                    <form id="form-add-file" action="{{ route('StoreFile') }}" enctype="multipart/form-data"
                        method="post">
                        @csrf
                        <div class="card-header d-flex justify-content-between">


                            <div class="col-md-12">
                                {{-- <input type="hidden" name="Prefix" value="YCKH"> --}}

                                <div class="form-group">
                                    <label>Tên file</label>
                                    <input name="filename" type="text" class="form-control">
                                    @error('filename')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label>File</label>
                                    <div class="input-group mb-4">
                                        <div class="custom-file">
                                            <input name="file" type="file" class="custom-file-input"
                                                id="inputGroupFile02">
                                            <label class="custom-file-label" for="inputGroupFile02">Choose
                                                file</label>
                                            @error('file')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>

                                </div>

                                <div class="pagination justify-content-end">
                                    <button class="mt-2 btn btn-success" type="submit">Lưu</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="iq-search-bar device-search">
                    <form action="#" class="searchbox">
                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                        <input type="text" id="search-file" class="text search-input"
                            placeholder="Tìm kiếm tên File...">
                    </form>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">File</th>
                                <th scope="col">Tên File</th>
                                <th scope="col">Ngày đăng</th>
                                <th scope="col">Người tải lên</th>
                                <th scope="col">Thao tác</th>
                            </tr>
                        </thead>

                        <tbody id="ListFile">

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- </div> -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- Modal Download End Yeu Cau Khach Hang -->
<!-- Modal Yeu Cau Khach Hang End -->

<!-- Modal Xay Dung Phan Mem Start -->
<!-- Modal Add Start XDPM-->
<div class="modal fade" id="ModalAddXDPM" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
                                                    <div class="user-img img-fluid"><img
                                                            src="{{ url('public/site') }}/images/user/01.jpg"
                                                            alt="story-img" class="rounded avatar-40"></div>
                                                    <div class="media-support-info ml-3">
                                                        <h6 class="d-inline-block">Landing page for secret Project</h6>
                                                        <span
                                                            class="badge badge-warning ml-3 text-white">expirinq</span>
                                                        <p class="mb-0">by Danlel Cllfferton</p>
                                                    </div>
                                                    <div class="card-header-toolbar d-flex align-items-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="todo-check"
                                                                class="custom-control-input" id="check1">
                                                            <label class="custom-control-label"
                                                                for="check1"></label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-center p-3 active-task">
                                                    <div class="user-img img-fluid"><img
                                                            src="{{ url('public/site') }}/images/user/01.jpg"
                                                            alt="story-img" class="rounded avatar-40"></div>
                                                    <div class="media-support-info ml-3">
                                                        <h6>Fix Critical Crashes</h6>
                                                        <p class="mb-0">by Cralg Danles</p>
                                                    </div>
                                                    <div class="card-header-toolbar d-flex align-items-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="todo-check"
                                                                class="custom-control-input" id="check2"
                                                                checked="checked">
                                                            <label class="custom-control-label"
                                                                for="check2"></label>
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
                                                            <h4 class="card-title">Nhóm người dùng</h4>
                                                        </div>
                                                        <div class="card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                                <span class="dropdown-toggle dropdown-bg btn"
                                                                    id="dropdownMenuButton001" data-toggle="dropdown">
                                                                    Tất cả<i class="ri-arrow-down-s-line ml-1"></i>
                                                                </span>
                                                                <div class="dropdown-menu dropdown-menu-right shadow-none"
                                                                    aria-labelledby="dropdownMenuButton001">
                                                                    <a class="dropdown-item" href="#">Tên
                                                                        nhóm</a>
                                                                    <a class="dropdown-item" href="#">Tên
                                                                        nhóm</a>
                                                                    <a class="dropdown-item" href="#">Tên
                                                                        nhóm</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form class="position-relative">
                                                    <div class="form-group mb-0">
                                                        <input type="text" class="form-control todo-search"
                                                            id="exampleInputEmail001" placeholder="Nhập gì đó">
                                                        <a class="search-link" href="#"><i
                                                                class="ri-search-line"></i></a>
                                                    </div>
                                                </form>
                                                <div class="iq-todo-friendlist mt-3">
                                                    <ul class="suggestions-lists m-0 p-0">
                                                        <li class="d-flex mb-4 align-items-center">
                                                            <div class="user-img img-fluid"><img
                                                                    src="{{ url('public/site') }}/images/user/01.jpg"
                                                                    alt="story-img" class="rounded avatar-40"></div>
                                                            <div class="media-support-info ml-3">
                                                                <h6>Paul Molive</h6>
                                                                <p class="mb-0">trainee</p>
                                                            </div>
                                                            <div class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle text-primary"
                                                                        id="dropdownMenuButton41"
                                                                        data-toggle="dropdown">
                                                                        <i class="ri-more-2-line"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        style="">
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-close-circle-line mr-2"></i>Unfriend</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-lock-line mr-2"></i>block</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex mb-4 align-items-center">
                                                            <div class="user-img img-fluid"><img
                                                                    src="{{ url('public/site') }}/images/user/02.jpg"
                                                                    alt="story-img" class="rounded avatar-40"></div>
                                                            <div class="media-support-info ml-3">
                                                                <h6>Anna Mull</h6>
                                                                <p class="mb-0">Web Developer</p>
                                                            </div>
                                                            <div class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle text-primary"
                                                                        id="dropdownMenuButton42"
                                                                        data-toggle="dropdown">
                                                                        <i class="ri-more-2-line"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        style="">
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-close-circle-line mr-2"></i>Unfriend</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-lock-line mr-2"></i>block</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <a href="javascript:void(0);" class="btn btn-primary d-block"><i
                                                            class="ri-add-line"></i> Load More</a>
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
<!-- Modal Add End XDPM -->

<!-- Modal Download Start XDPM -->
<div class="modal fade" id="ModalDownloadXDPM" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
                                            <a class="badge bg-danger mr-2" data-toggle="modal" data-placement="top"
                                                title="" data-original-title="Download"
                                                data-target="#ModalDownload" href="#"><i
                                                    class="ri-download-2-line mr-0"></i></a>
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
                                            <a class="badge bg-danger mr-2" data-toggle="modal" data-placement="top"
                                                title="" data-original-title="Download"
                                                data-target="#ModalDownload" href="#"><i
                                                    class="ri-download-2-line mr-0"></i></a>
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
</div>
<!-- Modal Download End XDPM -->
<!-- Modal Xay Dung Phan Mem End -->


<!-- Modal Nghiem Thu Start -->

<!-- Modal Add Start -->
<div class="modal fade" id="ModalAddNT" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
                                                    <div class="user-img img-fluid"><img
                                                            src="{{ url('public/site') }}/images/user/01.jpg"
                                                            alt="story-img" class="rounded avatar-40"></div>
                                                    <div class="media-support-info ml-3">
                                                        <h6 class="d-inline-block">Landing page for secret Project</h6>
                                                        <span
                                                            class="badge badge-warning ml-3 text-white">expirinq</span>
                                                        <p class="mb-0">by Danlel Cllfferton</p>
                                                    </div>
                                                    <div class="card-header-toolbar d-flex align-items-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="todo-check"
                                                                class="custom-control-input" id="check1">
                                                            <label class="custom-control-label"
                                                                for="check1"></label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-center p-3 active-task">
                                                    <div class="user-img img-fluid"><img
                                                            src="{{ url('public/site') }}/images/user/01.jpg"
                                                            alt="story-img" class="rounded avatar-40"></div>
                                                    <div class="media-support-info ml-3">
                                                        <h6>Fix Critical Crashes</h6>
                                                        <p class="mb-0">by Cralg Danles</p>
                                                    </div>
                                                    <div class="card-header-toolbar d-flex align-items-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="todo-check"
                                                                class="custom-control-input" id="check2"
                                                                checked="checked">
                                                            <label class="custom-control-label"
                                                                for="check2"></label>
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
                                                                <span class="dropdown-toggle dropdown-bg btn"
                                                                    id="dropdownMenuButton001" data-toggle="dropdown">
                                                                    Tất cả<i class="ri-arrow-down-s-line ml-1"></i>
                                                                </span>
                                                                <div class="dropdown-menu dropdown-menu-right shadow-none"
                                                                    aria-labelledby="dropdownMenuButton001">
                                                                    <a class="dropdown-item" href="#">Tên
                                                                        nhóm</a>
                                                                    <a class="dropdown-item" href="#">Tên
                                                                        nhóm</a>
                                                                    <a class="dropdown-item" href="#">Tên
                                                                        nhóm</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form class="position-relative">
                                                    <div class="form-group mb-0">
                                                        <input type="text" class="form-control todo-search"
                                                            id="exampleInputEmail001" placeholder="Search">
                                                        <a class="search-link" href="#"><i
                                                                class="ri-search-line"></i></a>
                                                    </div>
                                                </form>
                                                <div class="iq-todo-friendlist mt-3">
                                                    <ul class="suggestions-lists m-0 p-0">
                                                        <li class="d-flex mb-4 align-items-center">
                                                            <div class="user-img img-fluid"><img
                                                                    src="{{ url('public/site') }}/images/user/01.jpg"
                                                                    alt="story-img" class="rounded avatar-40"></div>
                                                            <div class="media-support-info ml-3">
                                                                <h6>Paul Molive</h6>
                                                                <p class="mb-0">trainee</p>
                                                            </div>
                                                            <div class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle text-primary"
                                                                        id="dropdownMenuButton41"
                                                                        data-toggle="dropdown">
                                                                        <i class="ri-more-2-line"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        style="">
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-close-circle-line mr-2"></i>Unfriend</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-lock-line mr-2"></i>block</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex mb-4 align-items-center">
                                                            <div class="user-img img-fluid"><img
                                                                    src="{{ url('public/site') }}/images/user/02.jpg"
                                                                    alt="story-img" class="rounded avatar-40"></div>
                                                            <div class="media-support-info ml-3">
                                                                <h6>Anna Mull</h6>
                                                                <p class="mb-0">Web Developer</p>
                                                            </div>
                                                            <div class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle text-primary"
                                                                        id="dropdownMenuButton42"
                                                                        data-toggle="dropdown">
                                                                        <i class="ri-more-2-line"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        style="">
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-close-circle-line mr-2"></i>Unfriend</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-lock-line mr-2"></i>block</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <a href="javascript:void(0);" class="btn btn-primary d-block"><i
                                                            class="ri-add-line"></i> Load More</a>
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
<div class="modal fade" id="ModalDownloadNT" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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

                            <div class="col-md-16">
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
                            <div class="col-md-16">
                                <label>Chia sẻ</label>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username"
                                        aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="pagination justify-content-end">
                                <button class="mt-2 btn btn-success" type="submit">Lưu</button>
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
                                        <a class="badge bg-danger mr-2" data-toggle="modal" data-placement="top"
                                            title="" data-original-title="Download"
                                            data-target="#ModalDownload" href="#"><i
                                                class="ri-download-2-line mr-0"></i></a>
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

<!-- Modal Nghiem Thu End -->

<!-- Modal Hop Dong Bao Tri Start -->
<!-- Modal Add Start HDBT -->
<div class="modal fade" id="ModalAddHDBT" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
                                                    <div class="user-img img-fluid"><img
                                                            src="{{ url('public/site') }}/images/user/01.jpg"
                                                            alt="story-img" class="rounded avatar-40"></div>
                                                    <div class="media-support-info ml-3">
                                                        <h6 class="d-inline-block">Landing page for secret Project
                                                        </h6>
                                                        <span
                                                            class="badge badge-warning ml-3 text-white">expirinq</span>
                                                        <p class="mb-0">by Danlel Cllfferton</p>
                                                    </div>
                                                    <div class="card-header-toolbar d-flex align-items-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="todo-check"
                                                                class="custom-control-input" id="check1">
                                                            <label class="custom-control-label"
                                                                for="check1"></label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-center p-3 active-task">
                                                    <div class="user-img img-fluid"><img
                                                            src="{{ url('public/site') }}/images/user/01.jpg"
                                                            alt="story-img" class="rounded avatar-40"></div>
                                                    <div class="media-support-info ml-3">
                                                        <h6>Fix Critical Crashes</h6>
                                                        <p class="mb-0">by Cralg Danles</p>
                                                    </div>
                                                    <div class="card-header-toolbar d-flex align-items-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="todo-check"
                                                                class="custom-control-input" id="check2"
                                                                checked="checked">
                                                            <label class="custom-control-label"
                                                                for="check2"></label>
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
                                                                <span class="dropdown-toggle dropdown-bg btn"
                                                                    id="dropdownMenuButton001"
                                                                    data-toggle="dropdown">
                                                                    Tất cả<i class="ri-arrow-down-s-line ml-1"></i>
                                                                </span>
                                                                <div class="dropdown-menu dropdown-menu-right shadow-none"
                                                                    aria-labelledby="dropdownMenuButton001">
                                                                    <a class="dropdown-item" href="#">Tên
                                                                        nhóm</a>
                                                                    <a class="dropdown-item" href="#">Tên
                                                                        nhóm</a>
                                                                    <a class="dropdown-item" href="#">Tên
                                                                        nhóm</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form class="position-relative">
                                                    <div class="form-group mb-0">
                                                        <input type="text" class="form-control todo-search"
                                                            id="exampleInputEmail001" placeholder="Search">
                                                        <a class="search-link" href="#"><i
                                                                class="ri-search-line"></i></a>
                                                    </div>
                                                </form>
                                                <div class="iq-todo-friendlist mt-3">
                                                    <ul class="suggestions-lists m-0 p-0">
                                                        <li class="d-flex mb-4 align-items-center">
                                                            <div class="user-img img-fluid"><img
                                                                    src="{{ url('public/site') }}/images/user/01.jpg"
                                                                    alt="story-img" class="rounded avatar-40"></div>
                                                            <div class="media-support-info ml-3">
                                                                <h6>Paul Molive</h6>
                                                                <p class="mb-0">trainee</p>
                                                            </div>
                                                            <div
                                                                class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle text-primary"
                                                                        id="dropdownMenuButton41"
                                                                        data-toggle="dropdown">
                                                                        <i class="ri-more-2-line"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        style="">
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-close-circle-line mr-2"></i>Unfriend</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-lock-line mr-2"></i>block</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex mb-4 align-items-center">
                                                            <div class="user-img img-fluid"><img
                                                                    src="{{ url('public/site') }}/images/user/02.jpg"
                                                                    alt="story-img" class="rounded avatar-40"></div>
                                                            <div class="media-support-info ml-3">
                                                                <h6>Anna Mull</h6>
                                                                <p class="mb-0">Web Developer</p>
                                                            </div>
                                                            <div
                                                                class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle text-primary"
                                                                        id="dropdownMenuButton42"
                                                                        data-toggle="dropdown">
                                                                        <i class="ri-more-2-line"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        style="">
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-close-circle-line mr-2"></i>Unfriend</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="ri-lock-line mr-2"></i>block</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <a href="javascript:void(0);" class="btn btn-primary d-block"><i
                                                            class="ri-add-line"></i> Load More</a>
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
<!-- Modal Add End Danh Sach Hop Dong -->

<!-- Modal Download Start Danh Sach Hop Dong -->
<div class="modal fade" id="ModalDownloadHDBT" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                            <div class="col-md-16">
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
                            <div class="col-md-16">
                                <label>Chia sẻ</label>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username"
                                        aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="pagination justify-content-end">
                                <button class="mt-2 btn btn-success" type="submit">Lưu</button>
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
                                        <a class="badge bg-danger mr-2" data-toggle="modal" data-placement="top"
                                            title="" data-original-title="Download"
                                            data-target="#ModalDownload" href="#"><i
                                                class="ri-download-2-line mr-0"></i></a>
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
<!-- Modal Download End Danh Sach Hop Dong -->

<!-- Modal Hop Dong Bao Tri End -->

<!-- Modal Them Khach Hang Start -->
<div class="modal fade" id="ModalAddKhachhang" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm khách hàng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('StoreCustomerInfo') }}" method="POST" data-toggle="validator">
                @csrf
                <div class="modal-body">
                    <!-- <div class="content-page"> -->
                    <script type="text/javascript" src="{{ url('public/site') }}/ckeditor/ckeditor.js"></script>
                    <div class="container-fluid add-form-list">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">

                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Tên khách hàng</label>
                                                    <textarea name="CustomerName" class="form-control" rows="1"></textarea>
                                                    @error('CustomerName')
                                                        <div class="help-block with-errors">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Số điện thoại</label>
                                                    <textarea name="CustomerPhone" class="form-control" rows="1"></textarea>
                                                    @error('CustomerPhone')
                                                        <div class="help-block with-errors">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <textarea name="CustomerMail" class="form-control" rows="1"></textarea>
                                                    @error('CustomerMail')
                                                        <div class="help-block with-errors">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Tên tổ chức cá nhân</label>
                                                    <textarea name="OrgName" class="form-control" rows="1"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Tên người đầu mối phối hợp</label>
                                                    <textarea name="MiddlemanName" class="form-control" rows="1"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page end  -->
                    </div>
                    <!-- </div> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                </div>
        </div>
    </div>
</div>
</form>
</div>
<!-- Modal Them Khach Hang End -->

<!-- Modal Phan Quyen File -->

<!-- Modal Phan Quyen File End -->

{{-- Modal Add ALL FILE Start --}}
<div class="modal fade bd-example-modal-xl" id="ModalAddUserToProject" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                                <div class="col-md-3" style="padding-right: 5px;padding-left:5px;">
                                    <div class="card">
                                        <div class="card-body p-0">
                                            <div class="card card-block card-stretch card-height">
                                                <div class="card-header d-flex justify-content-between">
                                                    <div class="header-title">
                                                        <h4 class="card-title" style="font-size:18px !important">
                                                            Quản lý trực tiếp</h4>
                                                    </div>
                                                    <div class="card-header-toolbar d-flex align-items-center">
                                                        <div class="d-flex align-items-center list-action">
                                                            <button type="button" id="btn-Add-direct-manager"
                                                                class="btn btn-primary btn-add-to-project">+Chọn</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul id="list-direct-manager" class="todo-task-lists m-0 p-0">
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3" style="padding-right: 5px;padding-left:5px;">
                                    <div class="card">
                                        <div class="card-body p-0">
                                            <div class="card card-block card-stretch card-height">
                                                <div class="card-header d-flex justify-content-between">
                                                    <div class="header-title">
                                                        <h4 class="card-title" style="font-size:18px !important">
                                                            Quản
                                                            lý gián tiếp</h4>
                                                    </div>
                                                    <div class="card-header-toolbar d-flex align-items-center">
                                                        <div class="d-flex align-items-center list-action">
                                                            <button type="button" id="btn-Add-indirect-manager"
                                                                class="btn btn-primary btn-add-to-project">+Chọn</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul id="list-indirect-manager" class="todo-task-lists m-0 p-0">
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3" style="padding-right: 5px;padding-left:5px;">
                                    <div class="card">
                                        <div class="card-body p-0">
                                            <div class="card card-block card-stretch card-height">
                                                <div class="card-header d-flex justify-content-between">
                                                    <div class="header-title">
                                                        <h4 class="card-title" style="font-size:18px !important">Lập
                                                            trình viên</h4>
                                                    </div>
                                                    <div class="card-header-toolbar d-flex align-items-center">
                                                        <div class="d-flex align-items-center list-action">
                                                            <button type="button" id="btn-Add-Developer"
                                                                class="btn btn-primary btn-add-to-project">+Chọn</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul id="list-developer" class="todo-task-lists m-0 p-0">
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="iq-todo-right">
                                                <div class="card card-block card-stretch card-height">
                                                    <div class="card-header d-flex justify-content-between">
                                                        <div class="header-title">
                                                            <h5 id="title-add-user" class="card-title">Vai trò</h5>
                                                        </div>
                                                    </div>
                                                    <div class="card-header d-flex justify-content-between">
                                                        <div class="card-header-toolbar d-flex align-items-center">
                                                            <div class="d-flex align-items-center list-action"
                                                                style="margin-left:30px;">
                                                                <button id='btn-confirm-add-user'
                                                                    class="btn btn-primary" type="">Xác
                                                                    nhận</button>
                                                            </div>
                                                        </div>

                                                    </div>


                                                </div>
                                                <div class="position-relative">
                                                    <div class="form-group mb-0">
                                                        <input type="text" class="form-control todo-search"
                                                            id="SearchUserInput" placeholder="Nhập tên">
                                                        <a class="search-link" href="#"><i
                                                                class="ri-search-line"></i></a>
                                                    </div>
                                                </div>
                                                <div id="UserList">
                                                    {{-- <div id="User-to-pick" class="iq-todo-friendlist mt-3 ">
                                                        <ul class="suggestions-lists m-0 p-0">
                                                            <li class="d-flex mb-4 align-items-center">
                                                                <div class="user-img img-fluid"><img
                                                                        src="{{ url('public/site') }}/images/user/01.jpg"
                                                                        alt="story-img" class="rounded avatar-40">
                                                                </div>
                                                                <div class="media-support-info ml-3">
                                                                    <h6>Paul Molive</h6>
                                                                    <p class="mb-0">trainee</p>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckChecked">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckChecked">
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div> --}}
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
                <button type="button" id="btn-add-selected-user-to-project" class="btn btn-primary">Xác
                    nhận</button>
            </div>
        </div>
    </div>
</div>
{{-- Modal Add all file end --}}

{{-- Modal Edit User --}}
{{-- <div class="modal fade bd-example-modal-xl" id="ModalEditUser" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable" role="document">
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

                            <div class="col-md-16">
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
                            <div class="col-md-16">
                                <label>Chia sẻ</label>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="pagination justify-content-end">
                                <button class="mt-2 btn btn-success" type="submit">Lưu</button>
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
                                        <a class="badge bg-danger mr-2" data-toggle="modal" data-placement="top"
                                            title="" data-original-title="Download" data-target="#ModalDownload"
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
</div> --}}
<div class="modal fade bd-example-modal-xl" id="ModalEditUser" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <div class="card">
                    <div class="card-header d-flex justify-content-between">

                        <!-- <h4 class="card-title">Borderless table</h4> -->
                        <div class="col-md-12">
                            <div class="form-group">

                                <label>Filename</label>
                                <textarea class="form-control" rows="1"></textarea>
                            </div>

                            <div class="col-md-16">
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
                            <div class="col-md-16">
                                <label>Chia sẻ</label>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username"
                                        aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="pagination justify-content-end">
                                <button class="mt-2 btn btn-success" type="submit">Lưu</button>
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
                                        <a class="badge bg-danger mr-2" data-toggle="modal" data-placement="top"
                                            title="" data-original-title="Download"
                                            data-target="#ModalDownload" href="#"><i
                                                class="ri-download-2-line mr-0"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <button type="button" id="btn-add-selected-user-to-project" class="btn btn-primary">Xác nhận</button>
        </div>
    </div>
</div>
</div>
{{-- End Modal Edit User --}}
{{-- Modal Assign Task --}}
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="ModalAssignTask" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm Task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-assign-task" action="{{ route('storeTaskInfo') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tên nhiệm vụ *</label>
                                    <input id="TaskName" name="TaskName" type="text" class="form-control"
                                        required oninvalid="this.setCustomValidity('Nhập tên công việc.')"
                                        placeholder="Vui lòng nhập tên" data-errors="Please Enter Name.">
                                    @error('TaskName')
                                        <div class="help-block with-errors">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Phân công</label>
                                    <select @error('idUser') is-invalid @enderror name="idUser"
                                        id="showUserToSelect" class="selectpicker form-control" data-style="py-0">
                                        <option value="" disabled selected>--Chọn nhân viên--</option>
                                        @error('idUser')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Mô tả công việc</label>
                                    <textarea name="TaskDesc" class="  form-control" rows="4" name="DesProduct" required
                                        oninvalid="this.setCustomValidity('Nhập thông tin công việc.')"></textarea>
                                    @error('TaskDesc')
                                        <div class="help-block with-errors">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Thời gian bắt đầu </label>
                                    <input type='datetime-local' name="datestart" id='date-start'
                                        oninvalid="this.setCustomValidity('Chọn ngày bắt đầu.')"
                                        placeholder="Nhập thời gian bắt đầu" class="form-control" />
                                    @error('datestart')
                                        <div class="help-block with-errors">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Thời gian kết thúc</label>
                                    <input type='datetime-local' name="dateend" id='date-end'
                                        placeholder="Nhập thời gian kết thúc"
                                        oninvalid="this.setCustomValidity('Chọn ngày kết thúc.')"
                                        class="form-control" />
                                    @error('dateend')
                                        <div class="help-block with-errors">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>



                        </div>


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- End Modal Assign Task --}}

<!-- Modal confirm delete  -->
<div class="modal fade" id="ModalConfirmDelete" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDelete">Xác nhận khóa người dùng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="modalDeletebody" class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <input type="button" id="ConfirmDelete" class="btn btn-primary" value="Xác nhận">
            </div>
        </div>
    </div>
</div>
<!-- End Modal confirm delete  -->

<div class="modal fade" id="ModalLogReq" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Trạng Thái Cũ</th>
                            <th scope="col">Trạng Thái Mới</th>
                            <th scope="col">Ngày Thay đổi</th>
                            <th scope="col">Lý do</th>
                            <th scope="col">Người Thay đổi</th>
                        </tr>
                    </thead>
                    <tbody class="ReqLog">

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
