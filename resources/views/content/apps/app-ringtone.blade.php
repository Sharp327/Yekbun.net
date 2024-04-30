@extends('layouts/layoutMaster')

@section('title', 'Event - Ticket List')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
@endsection

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/wizard-ex-property-listing.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <script src="{{ asset('assets/js/app-ecommerce-product-list.js') }}"></script>
@endsection

@section('content')
<style>
    .swal2-icon .swal2-icon-content {
        font-size: 66px !important;
    }
    .btn-danger {
        background-color: #ff3e1d !important;
    }
</style>
    <div class="content-wrapper">

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">

            <script>
                const dropZoneInitFunctions = [];
            </script>

            <div class="row g-4 mb-4">
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <span>Total Music</span>
                                    <div class="d-flex align-items-end mt-2">
                                        <h4 class="mb-0 me-2">21,459</h4>
                                        <small class="text-success">(+29%)</small>
                                    </div>
                                    <small>Last week analytics</small>
                                </div>
                                <span class="badge bg-label-primary rounded p-2">
                                    <i class="bx bx-user bx-sm"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <span>Total Artist</span>
                                    <div class="d-flex align-items-end mt-2">
                                        <h4 class="mb-0 me-2">4,567</h4>
                                        <small class="text-success">(+18%)</small>
                                    </div>
                                    <small>Last week analytics </small>
                                </div>
                                <span class="badge bg-label-danger rounded p-2">
                                    <i class="bx bx-user-plus bx-sm"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <span>Total Album</span>
                                    <div class="d-flex align-items-end mt-2">
                                        <h4 class="mb-0 me-2">19,860</h4>
                                        <small class="text-danger">(-14%)</small>
                                    </div>
                                    <small>Last week analytics</small>
                                </div>
                                <span class="badge bg-label-success rounded p-2">
                                    <i class="bx bx-group bx-sm"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <span>Total Size</span>
                                    <div class="d-flex align-items-end mt-2">
                                        <h4 class="mb-0 me-2">237</h4>
                                        <small class="text-success">(+42%)</small>
                                    </div>
                                    <small>Last week analytics</small>
                                </div>
                                <span class="badge bg-label-warning rounded p-2">
                                    <i class="bx bx-user-voice bx-sm"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="d-flex justify-content-between">
                <div>
                    <h4 class="fw-bold py-3 mb-4">
                        <span class="text-muted fw-light">App Setting/</span>Ringtone
                    </h4>
                </div>
                <div class="">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createmusicModal">Add
                      Ringtone</button>
                </div>
            </div>

            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">Ringtone List</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Player</th>
                                <th>Total Used </th>
                                <th>Length </th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td>1</td>
                                <td>
                                    Raqsa şexanî
                                </td>
                                <td>
                                    <audio controls autoplay>
                                      <source src="horse.ogg" type="audio/ogg">
                                      <source src="horse.mp3" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                    </audio>
                                </td>
                                <td>
                                    10000
                                </td>
                                <td>
                                    00:05

                                </td>
                                <td>

                                    <button type="button" class="btn btn-sm btn-icon deletebtn"
                                                            data-bs-toggle="tooltip" data-bs-offset="0,4"
                                                            data-bs-placement="top" data-bs-html="true"
                                                            data-bs-original-title="Remove"><i
                                                                class="bx bx-trash me-1"></i></button>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
            <!--/ Basic Bootstrap Table -->


            <script>
                function delete_service(el) {
                    let link = $(el).data('id');
                    $('.deleted-modal').modal('show');
                    $('#delete_form').attr('action', link);
                }
            </script>


            <div class="modal fade modal-6560a828ec25c" id="createmusicModal" aria-modal="true" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class=" w-100">
                                <h4 class="modal-title" id="modalCenterTitle">Create Music</h4>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="createForm" method="POST" action="{{ url('/music') }}"
                                enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="knBqHbWYUDvpsPUf3P2PhGd6C5Itq9MiH3MiiX91">
                                <div class="hidden-inputs"></div>
                                <div class="row">
                                    <div class="col-lg-12 mx-auto">
                                        <div class="row g-3">

                                            <!--<div class="col-md-12">-->
                                            <!--    <label class="form-label" for="fullname">Select Category</label>-->
                                            <!--    <select class="form-select" aria-label="Default select example"-->
                                            <!--        name="category_id">-->
                                            <!--        <option selected="" value="">Select</option>-->
                                            <!--        <option value="2">Raqsa şexanî</option>-->
                                            <!--        <option value="3">Raqsa kurmancî</option>-->
                                            <!--        <option value="4">dîlana kurdî</option>-->
                                            <!--    </select>-->
                                            <!--</div>-->

                                            <div class="col-12">
                                                <div class="card">
                                                    <h5 class="card-header">Audio Upload</h5>
                                                    <div class="card-body">
                                                        <div class="dropzone needsclick dz-clickable" action="/"
                                                            id="dropzone-audio">
                                                            <div class="dz-message needsclick">
                                                                Drop files here or click to upload
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--<div class="col-md-12">-->
                                            <!--    <label class="form-label" for="fullname">Status</label>-->
                                            <!--    <select class="form-select" aria-label="Default select example"-->
                                            <!--        name="status">-->
                                            <!--        <option selected="" value="1">Select</option>-->
                                            <!--        <option value="0">UnPublish</option>-->
                                            <!--        <option value="1">Publish</option>-->

                                            <!--    </select>-->
                                            <!--</div>-->
                                            <input type="hidden" value="music" name="type">
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <script>
                                'use strict';

                                dropZoneInitFunctions.push(function() {
                                    // previewTemplate: Updated Dropzone default previewTemplate

                                    const previewTemplate = `<div class="row"><di class="col-md-12 d-flex justify-content-center"><div class="dz-preview dz-file-preview w-100">
                              <div class="dz-details">
                                <div class="dz-thumbnail" style="width:95%">
                                  <img data-dz-thumbnail>
                                  <span class="dz-nopreview">No preview</span>
                                  <div class="dz-success-mark"></div>
                                  <div class="dz-error-mark"></div>
                                  <div class="dz-error-message"><span data-dz-errormessage></span></div>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress></div>
                                  </div>
                                </div>
                                <div class="dz-filename" data-dz-name></div>
                                <div class="dz-size" data-dz-size></div>
                              </div>
                              </div></div></di>`;

                                    // Multiple Dropzone

                                    const dropzoneMulti = new Dropzone('#dropzone-audio', {
                                        url: 'http://127.0.0.1:8000/file/upload',
                                        previewTemplate: previewTemplate,
                                        parallelUploads: 1,
                                        maxFilesize: 100,
                                        addRemoveLinks: true,
                                        headers: {
                                            'X-CSRF-TOKEN': 'knBqHbWYUDvpsPUf3P2PhGd6C5Itq9MiH3MiiX91'
                                        },
                                        sending: function(file, xhr, formData) {
                                            formData.append('folder', 'music');
                                        },
                                        success: function(file, response) {
                                            if (file.previewElement) {
                                                file.previewElement.classList.add("dz-success");
                                            }
                                            file.previewElement.dataset.path = response.path;
                                            const hiddenInputsContainer = file.previewElement.closest('form').querySelector(
                                                '.hidden-inputs');
                                            hiddenInputsContainer.innerHTML +=
                                                `<input type="hidden" name="audio_paths[]" value="${response.path}" data-path="${response.path}">`;
                                        },
                                        removedfile: function(file) {
                                            const hiddenInputsContainer = file.previewElement.closest('form').querySelector(
                                                '.hidden-inputs');
                                            hiddenInputsContainer.querySelector(
                                                `input[data-path="${file.previewElement.dataset.path}"]`).remove();

                                            if (file.previewElement != null && file.previewElement.parentNode != null) {
                                                file.previewElement.parentNode.removeChild(file.previewElement);
                                            }

                                            $.ajax({
                                                url: 'http://127.0.0.1:8000/file/delete',
                                                method: 'delete',
                                                headers: {
                                                    'X-CSRF-TOKEN': 'knBqHbWYUDvpsPUf3P2PhGd6C5Itq9MiH3MiiX91'
                                                },
                                                data: {
                                                    path: file.previewElement.dataset.path
                                                },
                                                success: function() {}
                                            });

                                            return this._updateMaxFilesReachedClass();
                                        }
                                    });
                                });
                            </script>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" form="createForm" class="btn btn-primary"
                                onclick="">Create</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- SubCategories Modal -->
            <div class="modal fade" id="sub-categories" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered modal-sub-categories">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel3">Subcategories</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-datatable table-responsive">

                                    <table class="table border-top">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Track Title</th>
                                                <th>Track</th>
                                                <th>Total Listen</th>
                                                <th>Total Time</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd">
                                                <td>1</td>
                                                <td>Name of Song</td>
                                                <td><audio controls autoplay>
                                      <source src="horse.ogg" type="audio/ogg">
                                      <source src="horse.mp3" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                    </audio></td>
                                                <td>1.125</td>
                                                <td>3:30 min</td>
                                                <td>
                                                    <!--<div class="d-flex justify-content-start align-items-center">-->
                                                    <!--    <button class="btn" data-bs-toggle="tooltip"-->
                                                    <!--        data-bs-offset="0,4" data-bs-placement="top"-->
                                                    <!--        data-bs-html="true" data-bs-original-title="Edit"><i-->
                                                    <!--            class="bx bx-edit"></i>-->
                                                    <!--    </button>-->
                                                        <button type="button" class="btn btn-sm btn-icon"
                                                            data-bs-toggle="tooltip" data-bs-offset="0,4"
                                                            data-bs-placement="top" data-bs-html="true"
                                                            data-bs-original-title="Remove"><i
                                                                class="bx bx-trash me-1"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ SubCategories Modal -->


            <!-- pricingModal -->
            <!--/ pricingModal -->

        </div>
        <!-- / Content -->


        <div class="content-backdrop fade"></div>
    </div>
    <script>
        function delete_service(el) {
            let link = $(el).data('id');
            $('.deleted-modal').modal('show');
            $('#delete_form').attr('action', link);
        }
    </script>


@section('page-script')
    <script>
        $(document).on('click','.deletebtn',function(){
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "Are you sure you want to delete this?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                customClass: {
                    confirmButton: 'btn btn-danger me-3',
                    cancelButton: 'btn btn-label-secondary'
                },
                buttonsStyling: false
            }).then(function(result) {
                if (result.value) {
                    callback();
                }
            });
        });
    </script>
    <script>
        function drpzone_init() {
            dropZoneInitFunctions.forEach(callback => callback());
        }
    </script>
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
@endsection
@endsection
