@extends ('layouts.admin')

@section('title', 'Settings')

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
                            Settings</h1>
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
                            <li class="breadcrumb-item text-muted">Settings</li>
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

                    @include('layouts.partials.data-card')

                    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                        <!--begin::Card header-->
                        <div class="card-header cursor-pointer">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Institutional Data</h3>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--begin::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body p-9">
                            <!--begin::Row-->
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Faculty numbers
                                    <span class="ms-1" data-bs-toggle="tooltip"
                                        title="Total number of faculty members and international faculty members"><i
                                            class="ki-outline ki-information fs-7"></i></span>
                                </label>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-6 fv-row">
                                            <input type="number" name="fname"
                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                placeholder="Faculty numbers" value="10" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Student numbers
                                    <span class="ms-1" data-bs-toggle="tooltip"
                                        title="Total number of students and international students"><i
                                            class="ki-outline ki-information fs-7"></i></span>
                                </label>
                                <div class="col-lg-8 fv-row">
                                    <div class="row">
                                        <div class="col-lg-6 fv-row">
                                            <input type="number" name="fname"
                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                placeholder="Student numbers" value="100" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Graduate outcomes
                                    <span class="ms-1" data-bs-toggle="tooltip"
                                        title="Data about total graduates, graduates employed within 6 months, graduates pursuing further studies within 6 months, and graduate outcome unknown/unresponsive."><i
                                            class="ki-outline ki-information fs-7"></i></span>
                                </label>
                                <div class="col-lg-8 d-flex align-items-center">
                                    <div class="col-lg-6 fv-row">
                                        <input type="number" name="fname"
                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                            placeholder="Total graduates" />
                                        <input type="text" name="fname"
                                            class="form-control form-control-lg form-control-solid mt-3 mb-lg-0"
                                            placeholder="Graduates employed within 6 months" />
                                        <input type="text" name="fname"
                                            class="form-control form-control-lg form-control-solid mt-3 mb-lg-0"
                                            placeholder="Graduates pursuing further studies within 6 months" />
                                        <input type="text" name="fname"
                                            class="form-control form-control-lg form-control-solid mt-3 mb-lg-0"
                                            placeholder="Graduate outcome unknown/unresponsive" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">proof of a survey measuring graduate outcomes
                                    and/or official reports submitted to the government</label>
                                <div class="col-lg-8 fv-row">
                                    <div class="row">
                                        <div class="col-lg-6 fv-row">
                                            <input type="file" name="fname"
                                                class="form-control form-control-lg mb-3 mb-lg-0" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Card body-->
                        <!--begin::Actions-->
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save
                                Changes</button>
                        </div>
                        <!--end::Actions-->
                    </div>

                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
        >
    </div>

@endsection
