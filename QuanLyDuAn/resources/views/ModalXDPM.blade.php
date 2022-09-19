@extends('layouts.site')
@section('main')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-left:auto;margin-right:auto;display:block;margin-top:22%;margin-bottom:0%">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card-body">
      <div class="row">
            <div class="col-lg-12">
               <div class="card car-transparent">
                  <div class="card-body p-0">
                     <div class="profile-image position-relative">
                        <img src="{{url('public/site')}}/images/page-img/profile.png" class="img-fluid rounded w-100" alt="profile-image">
   
                     </div>
                  </div>
               </div>
               <div class="col-lg-12 card-profile">
               <div class="card card-block card-stretch card-height">
                  <div class="card-body">
                     <ul class="d-flex nav nav-pills mb-3 text-center profile-tab" id="profile-pills-tab" role="tablist">
                        <!-- <li class="nav-item">
                            <a class="nav-link active show" data-toggle="pill" href="#profile1" role="tab" aria-selected="false">My Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#profile2" role="tab" aria-selected="false">Personal Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#profile3" role="tab" aria-selected="false">Education</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#profile4" role="tab" aria-selected="false">Experience</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a id="view-btn" class="nav-link" data-toggle="pill" href="#profile5" role="tab" aria-selected="true">About</a>
                        </li> -->
                    </ul>
                     <div class="profile-content tab-content">
                              <div class="col-lg-6">
                                 <ul class="list-inline p-0 m-0">
                                    <!-- <li class="mb-4">
                                       <div class="d-flex align-items-center pt-2">
                                          <img src="{{url('public/site')}}/images/profile/service/04.png" class="img-fluid" alt="image">
                                          <div class="ml-3 w-100">
                                             <div class="media align-items-center justify-content-between">
                                                <p class="mb-0">Adobe Photoshop</p>
                                                <h6>85%</h6>
                                             </div>
                                             <div class="iq-progress-bar mt-3">
                                                <span class="iq-progress iq-progress-success progress-1" data-percent="85"></span>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="mb-4">
                                       <div class="d-flex align-items-center pt-2">
                                          <img src="{{url('public/site')}}/images/profile/service/05.png" class="img-fluid" alt="image">
                                          <div class="ml-3 w-100">
                                             <div class="media align-items-center justify-content-between">
                                                <p class="mb-0">Figma</p>
                                                <h6>85%</h6>
                                             </div>
                                             <div class="iq-progress-bar mt-3">
                                                <span class="iq-progress iq-progress-info progress-1" data-percent="85"></span>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="d-flex align-items-center pt-2">
                                          <img src="{{url('public/site')}}/images/profile/service/06.png" class="img-fluid" alt="image">
                                          <div class="ml-3 w-100">
                                             <div class="media align-items-center justify-content-between">
                                                <p class="mb-0">Adobe Photoshop</p>
                                                <h6>85%</h6>
                                             </div>
                                             <div class="iq-progress-bar mt-3">
                                                <span class="bg-secondary iq-progress progress-1" data-percent="85"></span>
                                             </div>
                                          </div>
                                       </div>
                                    </li> -->
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div id="profile4" class="tab-pane fade">
                           <div class="profile-line m-0 d-flex align-items-center justify-content-between position-relative">
                              <ul class="list-inline p-0 m-0 w-100">
                                 <li>
                                    <div class="row align-items-top">
                                       <div class="col-md-3">
                                          <h6 class="mb-2">2020 - present</h6>
                                       </div>
                                       <div class="col-md-9">
                                          <div class="media profile-media align-items-top">
                                             <div class="profile-dots border-primary mt-1"></div>
                                             <div class="ml-4">
                                                <h6 class=" mb-1">Software Engineer at Mathica Labs</h6>
                                                <p class="mb-0 font-size-14">Total : 02 + years of experience</p>
                                             </div>
                                          </div>   
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="row align-items-top">
                                       <div class="col-md-3">
                                          <h6 class="mb-2">2018 - 2019</h6>
                                       </div>
                                       <div class="col-md-9">
                                          <div class="media profile-media align-items-top">
                                             <div class="profile-dots border-primary mt-1"></div>
                                             <div class="ml-4">
                                                <h6 class=" mb-1">Junior Software Engineer at Zimcore Solutions</h6>
                                                <p class="mb-0 font-size-14">Total : 1.5 + years of experience</p>
                                             </div>
                                          </div> 
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="row align-items-top">
                                       <div class="col-md-3">
                                       <h6 class="mb-2">2017 - 2018</h6>
                                       </div>
                                       <div class="col-md-9">
                                          <div class="media profile-media align-items-top">
                                             <div class="profile-dots border-primary mt-1"></div>
                                             <div class="ml-4">
                                                <h6 class=" mb-1">Junior Software Engineer at Skycare Ptv. Ltd</h6>
                                                <p class="mb-0 font-size-14">Total : 0.5 + years of experience</p>
                                             </div>
                                          </div> 
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="row align-items-top">
                                       <div class="col-3">
                                          <h6 class="mb-2">06 Months</h6>
                                       </div>
                                       <div class="col-9">
                                          <div class="media profile-media pb-0 align-items-top">
                                             <div class="profile-dots border-primary mt-1"></div>
                                             <div class="ml-4">
                                                <h6 class=" mb-1">Junior Software Engineer at Infosys Solutions</h6>
                                                <p class="mb-0 font-size-14">Total : Freshers</p>
                                             </div>
                                          </div>                                    
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div id="profile5" class="tab-pane fade">
                           <p>I'm Web Developer from California. I code and design websites worldwide. Mauris variustellus vitae 
                              tristique sagittis. Sed aliquet, est nec auctor aliquet, orci ex vestibulum ex, non pharetra lacus
                              erat ac nulla.</p>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Iaculis mattis nam ipsum pharetra porttitor eu 
                              orci, nisi. Magnis elementum vitae eu, dui et. Tempus etiam feugiat sem augue sed sed. Tristique 
                              feugiat mi feugiat integer consectetur sit enim penatibus. Quis sagittis proin fermentum tempus 
                              uspendisse ultricies. Tellus sapien, convallis proin pretium.</p>
                           <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Iaculis mattis nam ipsum pharetra porttitor eu.
                              Tristique feugiat mi feugiat integer consectetur sit enim penatibus. Quis sagittis proin fermentum tempus 
                              uspendisse ultricies. Tellus sapien, convallis proin pretium.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    </div>
      </div>
      </div>
      </div>
      </div>
</div>

  
@stop()