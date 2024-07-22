@extends ('layouts.admin')

@section('title', 'Data Management')

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
                            Data Management</h1>
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
                            <li class="breadcrumb-item text-muted">Data Management</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <div class="d-flex align-items-center gap-2 gap-lg-3">

                        <a href="{{ url('add-data-management') }}" class="btn btn-sm fw-bold btn-primary">Add Data
                            Management</a>
                    </div>
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">

                    <!--begin::Row-->
                    <div class="row g-6 g-xl-9">

                        <div class="col-md-6 col-xl-4">
                            <!--begin::Card-->
                            <div class="card border-hover-primary">
                                <!--begin::Card header-->
                                <div class="card-header border-0 pt-9">
                                    <!--begin::Card Title-->
                                    <div class="card-title m-0">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px w-50px bg-light">
                                            <img src="assets/media/svg/brand-logos/kanba.svg" alt="image"
                                                class="p-3" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Car Title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <span class="badge badge-light-success fw-bold me-auto px-4 py-3">Completed</span>
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end:: Card header-->
                                <!--begin:: Card body-->
                                <div class="card-body p-9">
                                    <!--begin::Name-->
                                    <div class="fs-3 fw-bold text-gray-900 text-center">Public & Private University Ranking:
                                        ASEAN 2024</div>
                                    <!--end::Name-->

                                    <hr style="width: 55%;margin: 15px auto;color: #a99f9f;">

                                    <p class="my-3 fs-5 text-gray-500 text-center">Publish Date - 2024/05/10</p>
                                    <p class="my-3 fs-5 text-gray-500 text-center">Completed Date - 2024/05/20</p>

                                    <hr style="width: 55%;margin: 15px auto;color: #a99f9f;">

                                    <h5 class="text-center">Submissions</h5>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="border border-gray-300 border-dashed rounded p-4 my-4 w-100">
                                                <div class="text-center">
                                                    <!--begin::Statistics-->
                                                    <div class="d-block align-items-center mb-2">
                                                        <!--begin::Value-->
                                                        <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1">1,239</span>
                                                        <!--end::Value-->
                                                    </div>
                                                    <!--end::Statistics-->
                                                    <!--begin::Description-->
                                                    <span class="fs-6 fw-semibold text-gray-500">Completed</span>
                                                    <!--end::Description-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="border border-gray-300 border-dashed rounded p-4 my-4 w-100">
                                                <div class="text-center">
                                                    <!--begin::Statistics-->
                                                    <div class="d-block align-items-center mb-2">
                                                        <!--begin::Value-->
                                                        <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1">324</span>
                                                        <!--end::Value-->
                                                    </div>
                                                    <!--end::Statistics-->
                                                    <!--begin::Description-->
                                                    <span class="fs-6 fw-semibold text-gray-500">Pending</span>
                                                    <!--end::Description-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="{{ url('manage-data') }}" class="btn btn-primary mx-auto mt-8 d-block"
                                        type="button">Manage</a>
                                </div>
                                <!--end:: Card body-->
                            </div>
                            <!--end::Card-->
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <!--begin::Card-->
                            <div class="card border-hover-primary">
                                <!--begin::Card header-->
                                <div class="card-header border-0 pt-9">
                                    <!--begin::Card Title-->
                                    <div class="card-title m-0">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px w-50px bg-light">
                                            <img src="assets/media/svg/brand-logos/kanba.svg" alt="image"
                                                class="p-3" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Car Title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <span class="badge badge-light-primary fw-bold me-auto px-4 py-3">In-Progress</span>
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end:: Card header-->
                                <!--begin:: Card body-->
                                <div class="card-body p-9">
                                    <!--begin::Name-->
                                    <div class="fs-3 fw-bold text-gray-900 text-center">Public & Private University Ranking:
                                        ASEAN 2025</div>
                                    <!--end::Name-->

                                    <hr style="width: 55%;margin: 15px auto;color: #a99f9f;">

                                    <p class="my-3 fs-5 text-gray-500 text-center">Publish Date - 2024/05/22</p>
                                    <p class="my-3 fs-5 text-gray-500 text-center">Completed Date - 2024/05/30</p>

                                    <hr style="width: 55%;margin: 15px auto;color: #a99f9f;">

                                    <h5 class="text-center">Submissions</h5>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="border border-gray-300 border-dashed rounded p-4 my-4 w-100">
                                                <div class="text-center">
                                                    <!--begin::Statistics-->
                                                    <div class="d-block align-items-center mb-2">
                                                        <!--begin::Value-->
                                                        <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1">539</span>
                                                        <!--end::Value-->
                                                    </div>
                                                    <!--end::Statistics-->
                                                    <!--begin::Description-->
                                                    <span class="fs-6 fw-semibold text-gray-500">Completed</span>
                                                    <!--end::Description-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="border border-gray-300 border-dashed rounded p-4 my-4 w-100">
                                                <div class="text-center">
                                                    <!--begin::Statistics-->
                                                    <div class="d-block align-items-center mb-2">
                                                        <!--begin::Value-->
                                                        <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1">544</span>
                                                        <!--end::Value-->
                                                    </div>
                                                    <!--end::Statistics-->
                                                    <!--begin::Description-->
                                                    <span class="fs-6 fw-semibold text-gray-500">Pending</span>
                                                    <!--end::Description-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="{{ url('manage-data') }}" class="btn btn-primary mx-auto mt-8 d-block"
                                        type="button">Manage</a>
                                </div>
                                <!--end:: Card body-->
                            </div>
                            <!--end::Card-->
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <!--begin::Card-->
                            <div class="card border-hover-primary">
                                <!--begin::Card header-->
                                <div class="card-header border-0 pt-9">
                                    <!--begin::Card Title-->
                                    <div class="card-title m-0">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px w-50px bg-light">
                                            <img src="assets/media/svg/brand-logos/treva.svg" alt="image"
                                                class="p-3" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Car Title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <span class="badge badge-light-warning fw-bold me-auto px-4 py-3">Pending</span>
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end:: Card header-->
                                <!--begin:: Card body-->
                                <div class="card-body p-9">
                                    <!--begin::Name-->
                                    <div class="fs-3 fw-bold text-gray-900 text-center" style="height: 52px;">JOB-Ready
                                        RATING</div>
                                    <!--end::Name-->

                                    <hr style="width: 55%;margin: 15px auto;color: #a99f9f;">

                                    <p class="my-3 fs-5 text-gray-500 text-center">Publish Date - 2024/04/10</p>
                                    <p class="my-3 fs-5 text-gray-500 text-center">Completed Date - 2024/04/24</p>

                                    <hr style="width: 55%;margin: 15px auto;color: #a99f9f;">

                                    <h5 class="text-center">Submissions</h5>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="border border-gray-300 border-dashed rounded p-4 my-4 w-100">
                                                <div class="text-center">
                                                    <!--begin::Statistics-->
                                                    <div class="d-block align-items-center mb-2">
                                                        <!--begin::Value-->
                                                        <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1">1,951</span>
                                                        <!--end::Value-->
                                                    </div>
                                                    <!--end::Statistics-->
                                                    <!--begin::Description-->
                                                    <span class="fs-6 fw-semibold text-gray-500">Completed</span>
                                                    <!--end::Description-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="border border-gray-300 border-dashed rounded p-4 my-4 w-100">
                                                <div class="text-center">
                                                    <!--begin::Statistics-->
                                                    <div class="d-block align-items-center mb-2">
                                                        <!--begin::Value-->
                                                        <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1">921</span>
                                                        <!--end::Value-->
                                                    </div>
                                                    <!--end::Statistics-->
                                                    <!--begin::Description-->
                                                    <span class="fs-6 fw-semibold text-gray-500">Pending</span>
                                                    <!--end::Description-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="{{ url('manage-data') }}" class="btn btn-primary mx-auto mt-8 d-block"
                                        type="button">Manage</a>
                                </div>
                                <!--end:: Card body-->
                            </div>
                            <!--end::Card-->
                        </div>

                    </div>
                    <!--end::Row-->

                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->

    </div>

@endsection
