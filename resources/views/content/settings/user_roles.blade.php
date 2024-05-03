@extends('layouts/layoutMaster')

@section('title', 'Settings - User Roles - ' . ucfirst($userLevel) . ' User')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
<link rel="stylesheet" href="{{asset('assets/userrole/css/style.css')}}" />
@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/tagify/tagify.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />
<link href="
https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css
" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">

<link rel="stylesheet" href="{{asset('assets/vendor/libs/nouislider/nouislider.css')}}"  />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/toastr/toastr.css')}}"  />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}"  />
<style>
    .nav-tabs .nav-item .nav-link {
        padding: 1rem;
    }
</style>
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/nouislider/nouislider.js')}}"></script>
@endsection

@section('content')
<div class="d-flex justify-content-between">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Settings /</span>
        <span class="text-muted fw-light">User Roles /</span>
        {{ ucfirst($userLevel) }} User
    </h4>
</div>
<ul class="nav nav-tabs nav-fill" role="tablist">
  <li class="nav-item" role="presentation">
    <a type="button" class="nav-link justify-content-start nav-text-left {{ ucfirst($userLevel) == 'Standard' ? 'active' : '' }}" href="{{url('settings/user-roles/standard')}}" aria-selected="{{ ucfirst($userLevel) == 'Standard' ? 'true' : 'false' }}" tabindex="-1">
        <div class="d-flex justify-content-start align-items-center">
            <div class="avatar-wrapper">
                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/educated.svg')}}"
                        alt="Avatar"></div>
            </div>
            <div class="d-flex flex-column genos-font">
                <span class="fw-semibold">Educated</span>
                <small class="text-muted">Standard User</small>
            </div>
        </div>
    </a>
    <div class="{{ ucfirst($userLevel) == 'Standard' ? 'tab--selected' : '' }} tab__slider"></div>
  </li>
  <li class="nav-item" role="presentation">
    <a type="button" class="nav-link justify-content-start nav-text-left {{ ucfirst($userLevel) == 'Premium' ? 'active' : '' }}" href="{{url('settings/user-roles/premium')}}" aria-selected="{{ ucfirst($userLevel) == 'Premium' ? 'true' : 'false' }}" tabindex="-1">
        <div class="d-flex justify-content-start align-items-center">
            <div class="avatar-wrapper">
                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/cultivated.svg')}}"
                        alt="Avatar"></div>
            </div>
            <div class="d-flex flex-column genos-font">
                <span class="fw-semibold">Cultivated</span>
                <small class="text-muted">Premium User</small>
            </div>
        </div>
    </a>
    <div class="{{ ucfirst($userLevel) == 'Premium' ? 'tab--selected' : '' }} tab__slider"></div>
  </li>
  <li class="nav-item" role="presentation">
    <a type="button" class="nav-link justify-content-start nav-text-left {{ ucfirst($userLevel) == 'Vip' ? 'active' : '' }}" href="{{url('settings/user-roles/vip')}}" aria-selected="{{ ucfirst($userLevel) == 'Vip' ? 'true' : 'false' }}" tabindex="-1">
        <div class="d-flex justify-content-start align-items-center">
            <div class="avatar-wrapper">
                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/academic.svg')}}"
                        alt="Avatar"></div>
            </div>
            <div class="d-flex flex-column genos-font">
                <span class="fw-semibold">Academic</span>
                <small class="text-muted">VIP-User</small>
            </div>
        </div>
    </a>
    <div class="{{ ucfirst($userLevel) == 'Vip' ? 'tab--selected' : '' }} tab__slider"></div>
  </li>
</ul>
<div class="nav-align-left mb-4">
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <div class="d-flex justify-content-start align-items-center nav-group">
                <div class="nav-group-icon"></div>
                <div class="d-flex flex-column genos-font">
                    <small class="text-muted">General</small>
                </div>
            </div>
        </li>
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#Avatar" aria-controls="Avatar">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/usercircle.svg')}}"
                                alt="Avatar"></div>
                    </div>
                    <div class="d-flex flex-column genos-font">
                        <span class="fw-semibold">Avatar</span>
                        <small class="text-muted">Avatar Type</small>
                    </div>
                </div>
            </button>
        </li>
        @section('tab-page')
            @parent
            <div class="tab-pane fade" id="Avatar" role="tabpanel">
                <div class="content-group">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/usercircle.svg')}}"
                                    alt="Avatar"></div>
                        </div>
                        <div class="d-flex flex-column genos-font">
                            <span class="fw-semibold">Avatar</span>
                            <small class="text-muted">Avatar Pic options</small>
                        </div>
                    </div>
                    <!-- <hr class="m-0"> -->
                    <div>
                        <div class="d-flex flex-column genos-font text-center">
                            <span class="fw-semibold">Coming Soon</span>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#Price" aria-controls="Price">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/euro.svg')}}"
                                alt="Price"></div>
                    </div>
                    <div class="d-flex flex-column genos-font">
                        <span class="fw-semibold">Price</span>
                        <small class="text-muted">Setup the Price</small>
                    </div>
                </div>
            </button>
        </li>
        @section('tab-page')
            @parent
            <div class="tab-pane fade" id="Price" role="tabpanel">
                <div class="content-group">
                    <div class="d-flex justify-content-start align-items-center pb-2">
                        <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/euro.svg')}}"
                                    alt="Avatar"></div>
                        </div>
                        <div class="d-flex flex-column genos-font">
                            <span class="fw-semibold">Price</span>
                            <small class="text-muted">Price for each</small>
                        </div>
                    </div>
                    <!-- <hr class="m-0"> -->
                    <div class="content-group d-flex justify-content-between align-center">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/educated.svg')}}"
                                        alt="educated"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Educated</span>
                                <small class="text-muted">Standard User</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs"></i>
                                <span>Price</span>
                                <i class="bx bx-chevron-up bx-xs"></i>
                            </div>
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs"></i>
                                <span>€ $</span>
                                <i class="bx bx-chevron-up bx-xs"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#Friends" aria-controls="Friends">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/friends.svg')}}"
                                alt="Friends"></div>
                    </div>
                    <div class="d-flex flex-column genos-font">
                        <span class="fw-semibold">Friends</span>
                        <small class="text-muted">Permission</small>
                    </div>
                </div>
            </button>
        </li>
        @section('tab-page')
            @parent
            <div class="tab-pane fade" id="Friends" role="tabpanel">
                <div class="content-group">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/friends.svg')}}"
                                    alt="Avatar"></div>
                        </div>
                        <div class="d-flex flex-column genos-font">
                            <span class="fw-semibold">Friends</span>
                            <small class="text-muted">Manage Friends</small>
                        </div>
                    </div>
                    <!-- <hr class="m-0"> -->
                    <div class="content-group d-flex justify-content-between align-center ms-2">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Friend Request</span>
                                <small class="text-muted">Sent and receive Friend request</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" checked="">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-8">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Total Friends</span>
                                <small class="text-muted">Sent and receive Friend request</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs"></i>
                                <span>5</span>
                                <i class="bx bx-chevron-up bx-xs"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-8">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Total Family</span>
                                <small class="text-muted">Sent and receive Friend request</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs"></i>
                                <span>5</span>
                                <i class="bx bx-chevron-up bx-xs"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#Storage" aria-controls="Storage">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/storage.svg')}}"
                                alt="Storage"></div>
                    </div>
                    <div class="d-flex flex-column genos-font">
                        <span class="fw-semibold">Storage</span>
                        <small class="text-muted">Permission</small>
                    </div>
                </div>
            </button>
        </li>
        @section('tab-page')
            @parent
            <div class="tab-pane fade" id="Storage" role="tabpanel">
                <div class="content-group">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/storage.svg')}}"
                                    alt="Avatar"></div>
                        </div>
                        <div class="d-flex flex-column genos-font">
                            <span class="fw-semibold">Storage</span>
                            <small class="text-muted">Manage Storage</small>
                        </div>
                    </div>
                    <!-- <hr class="m-0"> -->
                    <div class="content-group p-0">
                        <div class="p-2 rounded mb-2">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <object data="https://servicebieter.de/svgs/standarduser.svg" width="30" height="30" class="mt-1 mx-2"> 								</object>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Educated User</h6>
                                    <small class="text-muted">The Total Storage Amount that allowed for Standard Users</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>
                            
                            <p class="text-muted mx-2">Storage size</p>
                            
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips1" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="MB" value="100 MB" disabled id="slider-pips1-input" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-group p-0">
                        <div class="p-2 rounded mb-2" style="background-color:#FEE9EA">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/storagealert.svg')}}"
                                        alt="storageAlert"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Storage alert</h6>
                                    <small class="text-muted">User will get alert on the App once the Storage Amount is less then set it %</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>

                            </div>
                            
                            <p class="text-muted mx-2">Storage Size</p>
                            
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips2" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="%" value="10 %" disabled id="slider-pips2-input" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection

        <li class="nav-item">
            <div class="d-flex justify-content-start align-items-center nav-group">
                <div class="nav-group-icon"></div>
                <div class="d-flex flex-column genos-font">
                    <small class="text-muted">Sharing</small>
                </div>
            </div>
        </li>
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#feed" aria-controls="feed">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/feed.svg')}}"
                                alt="feed"></div>
                    </div>
                    <div class="d-flex flex-column genos-font">
                        <span class="fw-semibold">Feed Section</span>
                        <small class="text-muted">Manage Feeds</small>
                    </div>
                </div>
            </button>
        </li>
        @section('tab-page')
            @parent
            <div class="tab-pane fade" id="feed" role="tabpanel">
                <div class="content-group">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/feed.svg')}}"
                                    alt="Avatar"></div>
                        </div>
                        <div class="d-flex flex-column genos-font">
                            <span class="fw-semibold">Feed Section</span>
                            <small class="text-muted">Manage Feeds</small>
                        </div>
                    </div>
                    <!-- <hr class="m-0"> -->
                    <div class="content-group d-flex justify-content-between align-center ms-2">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Share Feeds</span>
                                <small class="text-muted">Allow User to Share Feeds</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" checked="">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/feedoption.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Feed Option</span>
                                <small class="text-muted">Feed Options, Report , view later</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/videocam.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Video Cam</span>
                                <small class="text-muted">Allow User to Take Images “use Cam” to share Feeds</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/shareimage.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Share Images</span>
                                <small class="text-muted">Allow User to share Images in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/textcomment.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Text Comments</span>
                                <small class="text-muted">Allow User to share Comments in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/likebtn.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Like Button</span>
                                <small class="text-muted">Allow User to share Emotions “Emojis” in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/sharecomment.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Share Comments</span>
                                <small class="text-muted">Allow User to share Feeds in the Feed section</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group p-0 ms-4">
                        <div class="p-2 rounded mb-2">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/voicecomment.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Voice Comments</h6>
                                    <small class="text-muted">Allow User to share voice Comments in the Feed</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>
                            
                            <p class="text-muted mx-2">Recording Time</p>
                            
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips3" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="Sec" value="10 Sec" disabled id="slider-pips3-input" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-group p-0 ms-4">
                        <div class="p-2 rounded mb-2">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/sharevideo.svg')}}"
                                        alt="shareVideo"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Share Videos</h6>
                                    <small class="text-muted">Allow User to share Videos </small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>
                            
                            <p class="text-muted mx-2">Video Size</p>
                            
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips4" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="MB" value="10 MB" disabled id="slider-pips4-input" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#Wishes" aria-controls="Wishes">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/wishes.svg')}}"
                                alt="Wishes"></div>
                    </div>
                    <div class="d-flex flex-column genos-font">
                        <span class="fw-semibold">Wishes</span>
                        <small class="text-muted">Wishes  & Thanks</small>
                    </div>
                </div>
            </button>
        </li>
        @section('tab-page')
            @parent
            <div class="tab-pane fade" id="Wishes" role="tabpanel">
                <div class="content-group">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/feed.svg')}}"
                                    alt="Avatar"></div>
                        </div>
                        <div class="d-flex flex-column genos-font">
                            <span class="fw-semibold">Wishes & Thanks</span>
                            <small class="text-muted">Permission to Create Wishes & Thanks</small>
                        </div>
                    </div>
                    <!-- <hr class="m-0"> -->
                    <div class="content-group d-flex justify-content-between align-center ms-2">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Create Wishes & Thanks</span>
                                <small class="text-muted">Allow User to create Cards</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" checked="">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/dailyshare.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Daily Share</span>
                                <small class="text-muted">Max. Creation Per Day</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs"></i>
                                <span>5</span>
                                <i class="bx bx-chevron-up bx-xs"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/textcomment.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Text Comments</span>
                                <small class="text-muted">Allow User to share Comments in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/likebtn.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Like Button</span>
                                <small class="text-muted">Allow User to share Emotions “Emojis” in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/sharecomment.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Share Comments</span>
                                <small class="text-muted">Allow User to share Feeds in the Feed section</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group p-0 ms-4">
                        <div class="p-2 rounded mb-2">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/voicecomment.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Voice Comments</h6>
                                    <small class="text-muted">Allow User to share voice Comments in the Feed</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>
                            
                            <p class="text-muted mx-2">Recording Time</p>
                            
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips5" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="Sec" value="10 Sec" disabled id="slider-pips5-input" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#historySection" aria-controls="historySection">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/historysection.svg')}}"
                                alt="historySection"></div>
                    </div>
                    <div class="d-flex flex-column genos-font">
                        <span class="fw-semibold">History Section</span>
                        <small class="text-muted">Manage History</small>
                    </div>
                </div>
            </button>
        </li>
        @section('tab-page')
            @parent
            <div class="tab-pane fade" id="historySection" role="tabpanel">
                <div class="content-group">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/historysection.svg')}}"
                                    alt="Avatar"></div>
                        </div>
                        <div class="d-flex flex-column genos-font">
                            <span class="fw-semibold">History Section</span>
                            <small class="text-muted">User Permission</small>
                        </div>
                    </div>
                    <!-- <hr class="m-0"> -->
                    <div class="content-group d-flex justify-content-between align-center ms-2">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">History Section</span>
                                <small class="text-muted">User Allowed to Comment</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" checked="">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Videos Per day</span>
                                <small class="text-muted">Allowed Watch Videos per day</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs"></i>
                                <span>5</span>
                                <i class="bx bx-chevron-up bx-xs"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/textcomment.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Text Comments</span>
                                <small class="text-muted">Allow User to share Comments in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/likebtn.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Like Button</span>
                                <small class="text-muted">Allow User to share Emotions “Emojis” in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/sharecomment.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Share Comments</span>
                                <small class="text-muted">Allow User to share Feeds in the Feed section</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group p-0 ms-4">
                        <div class="p-2 rounded mb-2">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/voicecomment.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Voice Comments</h6>
                                    <small class="text-muted">Allow User to share voice Comments in the Feed</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>
                            
                            <p class="text-muted mx-2">Recording Time</p>
                            
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips6" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="Sec" value="10 Sec" disabled id="slider-pips6-input" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#voteSection" aria-controls="voteSection">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/votesection.svg')}}"
                                alt="voteSection"></div>
                    </div>
                    <div class="d-flex flex-column genos-font">
                        <span class="fw-semibold">Vote Section</span>
                        <small class="text-muted">Manage Vote</small>
                    </div>
                </div>
            </button>
        </li>
        @section('tab-page')
            @parent
            <div class="tab-pane fade" id="voteSection" role="tabpanel">
                <div class="content-group">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/votesection.svg')}}"
                                    alt="Avatar"></div>
                        </div>
                        <div class="d-flex flex-column genos-font">
                            <span class="fw-semibold">Vote Section</span>
                            <small class="text-muted">Permission to Vote</small>
                        </div>
                    </div>
                    <!-- <hr class="m-0"> -->
                    <div class="content-group d-flex justify-content-between align-center ms-2">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Vote Section</span>
                                <small class="text-muted">User Allowed to Vote</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" checked="">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection

        <li class="nav-item">
            <div class="d-flex justify-content-start align-items-center nav-group">
                <div class="nav-group-icon"></div>
                <div class="d-flex flex-column genos-font">
                    <small class="text-muted">Multimedia</small>
                </div>
            </div>
        </li>
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#musicSection" aria-controls="musicSection">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/musicsection.svg')}}"
                                alt="musicSection"></div>
                    </div>
                    <div class="d-flex flex-column genos-font">
                        <span class="fw-semibold">Music Section</span>
                        <small class="text-muted">Permission</small>
                    </div>
                </div>
            </button>
        </li>
        @section('tab-page')
            @parent
            <div class="tab-pane fade" id="musicSection" role="tabpanel">
                <div class="content-group">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/musicsection.svg')}}"
                                    alt="Avatar"></div>
                        </div>
                        <div class="d-flex flex-column genos-font">
                            <span class="fw-semibold">Music Section</span>
                            <small class="text-muted">Permission to Vote</small>
                        </div>
                    </div>
                    <!-- <hr class="m-0"> -->
                    <div class="content-group d-flex justify-content-between align-center ms-2">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Enjoy Music</span>
                                <small class="text-muted">Allow User to use Music Module</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" checked="">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-8">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Share Songs</span>
                                <small class="text-muted">Allowed User to Share songs</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" checked="">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-8">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Create Playlist</span>
                                <small class="text-muted">Allowed User to Create Playlist</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" checked="">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-8">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Alowed Playlist</span>
                                <small class="text-muted">Allowed of Playlist Amounts for free</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs"></i>
                                <span>5</span>
                                <i class="bx bx-chevron-up bx-xs"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-8">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Buy Songs</span>
                                <small class="text-muted">Allowed User to Share songs</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" checked="">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-8">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Songs Per day</span>
                                <small class="text-muted">Allowed Songs to listen per day</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs"></i>
                                <span>5</span>
                                <i class="bx bx-chevron-up bx-xs"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-8">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Favorite Songs</span>
                                <small class="text-muted">Add Tracks to Favorite</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" checked="">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-8">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Favorite Artist</span>
                                <small class="text-muted">Add Tracks to Favorite</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" checked="">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-8">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Playlist Price</span>
                                <small class="text-muted">Sent and receive Friend request</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs"></i>
                                <span>5</span>
                                <i class="bx bx-chevron-up bx-xs"></i>
                            </div>
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs"></i>
                                <span>€ $</span>
                                <i class="bx bx-chevron-up bx-xs"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#videoSection" aria-controls="videoSection">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/videosection.svg')}}"
                                alt="videoSection"></div>
                    </div>
                    <div class="d-flex flex-column genos-font">
                        <span class="fw-semibold">Video section</span>
                        <small class="text-muted">Permission</small>
                    </div>
                </div>
            </button>
        </li>
        @section('tab-page')
            @parent
            <div class="tab-pane fade" id="videoSection" role="tabpanel">
                <div class="content-group">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/votesection.svg')}}"
                                    alt="Avatar"></div>
                        </div>
                        <div class="d-flex flex-column genos-font">
                            <span class="fw-semibold">Vote Section</span>
                            <small class="text-muted">Allowed Permissions for Videos</small>
                        </div>
                    </div>
                    <!-- <hr class="m-0"> -->
                    <div class="content-group d-flex justify-content-between align-center ms-2">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Enjoy Videos</span>
                                <small class="text-muted">Allow User to use Video Module</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" checked="">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-8">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Create Video Playlist</span>
                                <small class="text-muted">Allowed User to Create Playlist</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" checked="">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-8">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Alowed Video Playlist</span>
                                <small class="text-muted">Allowed of Playlist Amounts for free</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs"></i>
                                <span>5</span>
                                <i class="bx bx-chevron-up bx-xs"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-8">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Videos Per day</span>
                                <small class="text-muted">Allowed Watch Videos per day</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs"></i>
                                <span>5</span>
                                <i class="bx bx-chevron-up bx-xs"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-8">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Playlist Price</span>
                                <small class="text-muted">Sent and receive Friend request</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs"></i>
                                <span>5</span>
                                <i class="bx bx-chevron-up bx-xs"></i>
                            </div>
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs"></i>
                                <span>€ $</span>
                                <i class="bx bx-chevron-up bx-xs"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/textcomment.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Text Comments</span>
                                <small class="text-muted">Allow User to share Comments in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/likebtn.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Like Button</span>
                                <small class="text-muted">Allow User to share Emotions “Emojis” in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/sharecomment.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Share Comments</span>
                                <small class="text-muted">Allow User to share Feeds in the Feed section</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group p-0 ms-4">
                        <div class="p-2 rounded mb-2">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/voicecomment.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Voice Comments</h6>
                                    <small class="text-muted">Allow User to share voice Comments in the Feed</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>
                            
                            <p class="text-muted mx-2">Recording Time</p>
                            
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips7" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="Sec" value="10 Sec" disabled id="slider-pips7-input" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#liveStream" aria-controls="liveStream">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/livestream.svg')}}"
                                alt="liveStream"></div>
                    </div>
                    <div class="d-flex flex-column genos-font">
                        <span class="fw-semibold">Live Stream</span>
                        <small class="text-muted">Permission</small>
                    </div>
                </div>
            </button>
        </li>
        @section('tab-page')
            @parent
            <div class="tab-pane fade" id="liveStream" role="tabpanel">
                <div class="content-group">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/livestream.svg')}}"
                                    alt="Avatar"></div>
                        </div>
                        <div class="d-flex flex-column genos-font">
                            <span class="fw-semibold">Live Stream</span>
                            <small class="text-muted">Allow User to Go Live</small>
                        </div>
                    </div>
                    <!-- <hr class="m-0"> -->
                    <div class="content-group d-flex justify-content-between align-center ms-2">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Live Stream</span>
                                <small class="text-muted">Allow User to use Live Stream Module </small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" checked="">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group p-0 ms-4">
                        <div class="p-2 rounded mb-2">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/livestream.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Live Stream</h6>
                                    <small class="text-muted">Set the Live Stream Time</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                   
                                </div>
                                </div>
                            </div>
                            
                            <p class="text-muted mx-2">Recording Time</p>
                            
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips8" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="min" value="10 min" disabled id="slider-pips8-input" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Invent Friends</span>
                                <small class="text-muted">Allow User Invent Friends “Invent Amount required”</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" checked="">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs"></i>
                                <span>5</span>
                                <i class="bx bx-chevron-up bx-xs"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Invent Family</span>
                                <small class="text-muted">Allow User Invent Friends “Invent Amount required”</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" checked="">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs"></i>
                                <span>5</span>
                                <i class="bx bx-chevron-up bx-xs"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/textcomment.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Text Comments</span>
                                <small class="text-muted">Allow User to share Comments in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/likebtn.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Like Button</span>
                                <small class="text-muted">Allow User to share Emotions “Emojis” in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/sharecomment.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Share Comments</span>
                                <small class="text-muted">Allow User to share Feeds in the Feed section</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group p-0 ms-4">
                        <div class="p-2 rounded mb-2">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/voicecomment.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Voice Comments</h6>
                                    <small class="text-muted">Allow User to share voice Comments in the Feed</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>
                            
                            <p class="text-muted mx-2">Recording Time</p>
                            
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips9" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="Sec" value="10 Sec" disabled id="slider-pips9-input" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#interview" aria-controls="interview">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/interview.svg')}}"
                                alt="interview"></div>
                    </div>
                    <div class="d-flex flex-column genos-font">
                        <span class="fw-semibold">Interviews</span>
                        <small class="text-muted">Permission</small>
                    </div>
                </div>
            </button>
        </li>
        @section('tab-page')
            @parent
            <div class="tab-pane fade" id="interview" role="tabpanel">
                <div class="content-group">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/interview.svg')}}"
                                    alt="Avatar"></div>
                        </div>
                        <div class="d-flex flex-column genos-font">
                            <span class="fw-semibold">Interviews</span>
                            <small class="text-muted">Allow User to create Interviews</small>
                        </div>
                    </div>
                    <!-- <hr class="m-0"> -->
                    <div class="content-group d-flex justify-content-between align-center ms-2">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Interviews</span>
                                <small class="text-muted">Allow User to use Interview Module</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" checked="">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group p-0 ms-4">
                        <div class="p-2 rounded mb-2">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/interview.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Interviews</h6>
                                    <small class="text-muted">Interview Duration</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                   
                                </div>
                                </div>
                            </div>
                            
                            <p class="text-muted mx-2">Recording Time</p>
                            
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips10" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="min" value="10 min" disabled id="slider-pips10-input" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Interviewers</span>
                                <small class="text-muted">Set the Amount of Intviewer “Max 3 Interview are alowed”</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs"></i>
                                <span>5</span>
                                <i class="bx bx-chevron-up bx-xs"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/textcomment.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Text Comments</span>
                                <small class="text-muted">Allow User to share Comments in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/likebtn.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Like Button</span>
                                <small class="text-muted">Allow User to share Emotions “Emojis” in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/sharecomment.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Share Comments</span>
                                <small class="text-muted">Allow User to share Feeds in the Feed section</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group p-0 ms-4">
                        <div class="p-2 rounded mb-2">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/voicecomment.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Voice Comments</h6>
                                    <small class="text-muted">Allow User to share voice Comments in the Feed</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>
                            
                            <p class="text-muted mx-2">Recording Time</p>
                            
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips11" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="Sec" value="10 Sec" disabled id="slider-pips11-input" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#channels" aria-controls="channels">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/channels.svg')}}"
                                alt="channels"></div>
                    </div>
                    <div class="d-flex flex-column genos-font">
                        <span class="fw-semibold">Channels</span>
                        <small class="text-muted">Permission</small>
                    </div>
                </div>
            </button>
        </li>
        @section('tab-page')
            @parent
            <div class="tab-pane fade" id="channels" role="tabpanel">
                <div class="content-group">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/channels.svg')}}"
                                    alt="Avatar"></div>
                        </div>
                        <div class="d-flex flex-column genos-font">
                            <span class="fw-semibold">Live Channels</span>
                            <small class="text-muted">Create Live Channels </small>
                        </div>
                    </div>
                    <!-- <hr class="m-0"> -->
                    <div class="content-group d-flex justify-content-between align-center ms-2">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Live Channels</span>
                                <small class="text-muted">Allow User to create owen Live Channels</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" checked="">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Live Channels</span>
                                <small class="text-muted">Set the Amount of Live Channel that User allowed to create Max. 2</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs"></i>
                                <span>5</span>
                                <i class="bx bx-chevron-up bx-xs"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/textcomment.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Text Comments</span>
                                <small class="text-muted">Allow User to share Comments in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/likebtn.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Like Button</span>
                                <small class="text-muted">Allow User to share Emotions “Emojis” in the Feed</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/sharecomment.svg')}}"
                                        alt="Avatar"></div>
                            </div>
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Share Comments</span>
                                <small class="text-muted">Allow User to share Feeds in the Feed section</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group p-0 ms-4">
                        <div class="p-2 rounded mb-2">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/voicecomment.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Voice Comments</h6>
                                    <small class="text-muted">Allow User to share voice Comments in the Feed</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>
                            
                            <p class="text-muted mx-2">Recording Time</p>
                            
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips12" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="Sec" value="10 Sec" disabled id="slider-pips12-input" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection

        <li class="nav-item">
            <div class="d-flex justify-content-start align-items-center nav-group">
                <div class="nav-group-icon"></div>
                <div class="d-flex flex-column genos-font">
                    <small class="text-muted">Communications</small>
                </div>
            </div>
        </li>
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#chat" aria-controls="chat">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="avatar-wrapper">
                        <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/chat.svg')}}"
                                alt="chat"></div>
                    </div>
                    <div class="d-flex flex-column genos-font">
                        <span class="fw-semibold">Chat</span>
                        <small class="text-muted">Chat & Groups</small>
                    </div>
                </div>
            </button>
        </li>
        @section('tab-page')
            @parent
            <div class="tab-pane fade" id="chat" role="tabpanel">
                <div class="content-group">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="avatar-wrapper">
                            <div class="avatar avatar-sm me-3"><img src="{{asset('assets/userrole/icons/chat.svg')}}"
                                    alt="Avatar"></div>
                        </div>
                        <div class="d-flex flex-column genos-font">
                            <span class="fw-semibold">Communications</span>
                            <small class="text-muted">Chat & Groups, Calls</small>
                        </div>
                    </div>
                    <!-- <hr class="m-0"> -->
                    <div class="content-group d-flex justify-content-between align-center ms-2">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Chat</span>
                                <small class="text-muted">Allow User to Communicate with other Users </small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input" checked="">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group p-0 ms-4">
                        <div class="p-2 rounded mb-2">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/voicecomment.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Voice Messages</h6>
                                    <small class="text-muted">Allow User to share voice Comments in the Feed</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>
                            
                            <p class="text-muted mx-2">Recording Time</p>
                            
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips13" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="Sec" value="10 Sec" disabled id="slider-pips13-input" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Text Message</span>
                                <small class="text-muted">Allow User to </small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Share Files</span>
                                <small class="text-muted">Allow User to share Files “PDF. JPG, PNG” </small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Share Loaction</span>
                                <small class="text-muted">Allow User to share Location </small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Create Groups</span>
                                <small class="text-muted">Allow Userto Create Groups</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                            <div class="up-down-group">
                                <i class="bx bx-chevron-down bx-xs"></i>
                                <span>5</span>
                                <i class="bx bx-chevron-up bx-xs"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content-group d-flex justify-content-between align-center ms-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column genos-font">
                                <span class="fw-semibold">Join to Group</span>
                                <small class="text-muted">Allow User to join to group</small>
                            </div>
                        </div>
                        <!-- <hr class="m-0"> -->
                        <div class="d-flex">
                            <div>
                                <label class="switch me-0">
                                  <input type="checkbox" class="switch-input">
                                  <span class="switch-toggle-slider">
                                    
                                  </span>
                                  <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content-group p-0 ms-4">
                        <div class="p-2 rounded mb-2">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/voicecalls.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Voice Calls</h6>
                                    <small class="text-muted">Allow User to create Voice Calls</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/groupcalls.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Group Calls</h6>
                                    <small class="text-muted">Allow User to add Caller to group</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/jointocalls.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Join to Call</h6>
                                    <small class="text-muted">Allow User to join to Call</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>
                            
                            <p class="text-muted mx-2">Call Durations</p>
                            
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips14" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="Sec" value="10 Sec" disabled id="slider-pips14-input" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-group p-0 ms-4">
                        <div class="p-2 rounded mb-2">
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/videocalls.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Video Calls</h6>
                                    <small class="text-muted">Allow User to create Video Calls</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/videogroupcalls.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Group Calls</h6>
                                    <small class="text-muted">Allow User to add Video Caller to group</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>
                            <div class="d-flex pb-2">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm mt-1 mx-2"><img src="{{asset('assets/userrole/icons/jointocalls.svg')}}"
                                        alt="voiceComment"></div>
                                </div>
                                <div class="flex-grow-1 row">
                                <div class="col-10 mb-sm-0 mb-2">
                                    <h6 class="mb-0 title-color">Join to Call</h6>
                                    <small class="text-muted">Allow User to join to Call</small>
                                </div>
                                <div class="col-2 text-end mt-1">
                                    <label class="switch me-0">
                                    <input type="checkbox" class="switch-input">
                                    <span class="switch-toggle-slider">

                                    </span>
                                    <span class="switch-label"></span>
                                    </label>
                                </div>
                                </div>
                            </div>
                            
                            <p class="text-muted mx-2">Call Durations</p>
                            
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-body bg-white rounded-0" style="padding: 30px; padding-bottom: 40px">
                                        <div id="slider-pips15" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex; align-items: center; justify-content: center; height:80px">
                                    <input type="text" unit="Sec" value="10 Sec" disabled id="slider-pips15-input" class="form-control text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    </ul>
    <div class="tab-content">
        @yield('tab-page')
    </div>
</div>

<script>
    function confirmSettingUpdate(event) {
        event.preventDefault();
        const self = event.target;

        Swal.fire({
            title: 'Are you sure?',
            text: "Are you sure you want to " + (self.checked? 'activate': 'disable') + " this?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, ' + (self.checked? 'activate': 'disable') + ' it!',
            customClass: {
                confirmButton: 'btn btn-danger me-3',
                cancelButton: 'btn btn-label-secondary'
            },
            buttonsStyling: false
        }).then(function (result) {
            if (result.value) {
                self.setAttribute('onclick', 'updateSetting(event)');
                self.click();
                self.setAttribute('onclick', 'confirmSettingUpdate(event)');
            }
        });
    }

    function updateSettings(event) {
        const self = event.target;
        const userLevel = '{{ $userLevel }}';
        const form = self.closest('form');
        const settingInputs = form.querySelectorAll('[data-setting]');
        const settings = [];
        settingInputs.forEach(input => {
            settings.push({
                name: input.name,
                value: input.value
            });
        });

        $.ajax({
            url: '{{ route('settings.saveMany') }}',
            method: 'POST',
            data: {settings},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (res) {
                toastr.success("Settings successfully updated.");
            }
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        var sliders = $('.slider');
        var slider = [15];
        var sliderPipsInput = [15];
        for ( var i = 1; i < 16; i++ ) {
            const element = document.getElementById('slider-pips'+i);
            slider[i] = noUiSlider.create(element, {
                range: {
                    'min': [   0 ],
                    '10%': [  10 ],
                    '20%': [  20 ],
                    '30%': [  30 ],
                    '40%': [  40 ],
                    '50%': [  50 ],
                    '60%': [  60 ],
                    '70%': [  70 ],
                    '80%': [  80 ],
                    '90%': [  90 ],
                    'max': [ 100 ],
                },
                start: 10,
                step: 1,
                pips: {
                    mode: 'range',
                    density: 5
                },
                tooltips: true,
            });
            sliderPipsInput[i]=document.getElementById("slider-pips"+i+"-input");
            (function(currentIndex) {
                slider[currentIndex].on('change', function(values, handle) {
                    sliderPipsInput[currentIndex].value = values[handle] + " " + sliderPipsInput[currentIndex].getAttribute('unit');
                });
            })(i);
        }
    })
</script>

@endsection
