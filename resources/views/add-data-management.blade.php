@extends ('layouts.admin')

@section('title', 'Add Data Management')

@section('content')

    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-0">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                            Add Data Management</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ url('dashboard') }}" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Data Management</li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Add Data Management</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->

                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::details View-->
                    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                        <!--begin::Card header-->
                        <div class="card-header cursor-pointer">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Institutional Data</h3>
                            </div>
                            <a href="{{ url('#') }}" class="btn btn-sm btn-primary align-self-center"
                                data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Add Field</a>
                            <!--end::Card title-->
                        </div>
                        <!--begin::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body p-9">
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-3 fw-semibold text-muted">Title</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-6">
                                    <input type="text" name="fname"
                                        class="form-control form-control-lg bg-transparent mb-3 mb-lg-0">
                                </div>
                            </div>
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-3 fw-semibold text-muted">Publish Date</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-6">
                                    <input type="date" name="fname"
                                        class="form-control form-control-lg bg-transparent mb-3 mb-lg-0">
                                </div>
                            </div>
                            <!--end::Col-->

                            <!--begin::Actions-->
                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save
                                    Changes</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                    </div>
                </div>
                <!--end::details View-->

            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>

@endsection
