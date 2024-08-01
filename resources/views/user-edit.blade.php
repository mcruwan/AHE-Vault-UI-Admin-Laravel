@extends ('layouts.admin')

@section('title', 'User Edit')

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
                            Complete Profile</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ url('dashboard') }}" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Profile Complete</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->

                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">

                    @include('layouts.partials.user-profile-data')

                    <!--end::Navbar-->
                    <!--begin::Content-->
                    <div class="card mb-5 mb-xl-10">
                        <!--begin::Card header-->
                        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                            data-bs-target="#kt_account_profile_details" aria-expanded="true"
                            aria-controls="kt_account_profile_details">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Personal Information</h3>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--begin::Card header-->
                        <!--begin::Content-->
                        <div id="kt_account_settings_profile_details" class="collapse show">
                            <!--begin::Form-->
                            <form class="form">
                                <!--begin::Card body-->
                                <div class="card-body p-9">
                                    <div class="row mb-7">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 fw-semibold text-muted required">First Name</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-lg-6 fv-row">
                                                    <input type="text" name="fname"
                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                        placeholder="First Name" required />
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="row mb-7">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 fw-semibold text-muted required">Last Name</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <div class="row">
                                                <div class="col-lg-6 fv-row">
                                                    <input type="text" name="lname"
                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                        placeholder="Last Name" required />
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="row mb-7">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 fw-semibold text-muted required">Job Title</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <div class="row">
                                                <div class="col-lg-6 fv-row">
                                                    <input type="text" name="title"
                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                        placeholder="Job Title" required />
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="row mb-7">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 fw-semibold text-muted required">Email Address</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-lg-6 fv-row">
                                                    <input type="email" name="email"
                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                        placeholder="Email Address" required />
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="row mb-7">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 fw-semibold text-muted required">Contact Number</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-lg-6 fv-row">
                                                    <input type="text" name="phone"
                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                        placeholder="Contact Number" required />
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="row mb-7">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 fw-semibold text-muted required">Department/Office</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-lg-6 fv-row">
                                                    <input type="text" name="department"
                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                        placeholder="Department/Office" required />
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                </div>
                                <!--end::Card body-->
                                <!--begin::Actions-->
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <button type="reset"
                                        class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                    <button type="submit" class="btn btn-primary"
                                        id="kt_account_profile_details_submit">Save Changes</button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                </div>
            </div>
        </div>
        <!--end::Content wrapper-->

        <!--end::Footer-->
    </div>

@endsection
