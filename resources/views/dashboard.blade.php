@extends ('layouts.admin')

@section('title', 'Dashboard')

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
                            Dashboard</h1>
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
                            <li class="breadcrumb-item text-muted">Dashboard</li>
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
                <!-- Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!-- Row-->
                    <div class="row g-5 g-xl-10">
                        <!-- Col-->
                        <div class="col-xl-4 mb-xl-10">
                            <div class="card card-flush">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">65,493</span>
                                        <!--end::Amount-->
                                        <!--begin::Subtitle -->
                                        <span class="text-gray-500 pt-1 fw-semibold fs-6">Total Number of Students</span>
                                        <!--end::Subtitle -->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body d-flex align-items-end">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center flex-wrap">
                                        <!--begin::Chart-->
                                        <div class="d-flex me-7 me-xxl-10">
                                            <div id="kt_card_widget_10_chart" class="min-h-auto"
                                                style="height: 78px; width: 78px" data-kt-size="78" data-kt-line="11"></div>
                                        </div>
                                        <!--end::Chart -->
                                        <!--begin::Labels-->
                                        <div class="d-flex flex-column content-justify-center flex-grow-1">
                                            <!--begin::Label -->
                                            <div class="d-flex fs-6 fw-semibold align-items-center">
                                                <!--begin::Bullet -->
                                                <div class="bullet w-8px h-6px rounded-2 bg-success me-3"></div>
                                                <!--end::Bullet -->
                                                <!--begin::Label -->
                                                <div class="fs-6 fw-semibold text-gray-500 flex-shrink-0">Management</div>
                                                <!--end::Label -->
                                                <!--begin::Separator -->
                                                <div class="separator separator-dashed min-w-10px flex-grow-1 mx-2"></div>
                                                <!--end:: Separator -->
                                                <!--begin:: Stats -->
                                                <div class="ms-auto fw-bolder text-gray-700 text-end">45%</div>
                                                <!--end::Stats -->
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Label-->
                                            <div class="d-flex fs-6 fw-semibold align-items-center my-1">
                                                <!--begin::Bullet-->
                                                <div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="fs-6 fw-semibold text-gray-500 flex-shrink-0">IT</div>
                                                <!--end::Label-->
                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed min-w-10px flex-grow-1 mx-2"></div>
                                                <!--end::Separator-->
                                                <!--begin::Stats-->
                                                <div class="ms-auto fw-bolder text-gray-700 text-end">30%</div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Label-->
                                            <div class="d-flex fs-6 fw-semibold align-items-center">
                                                <!--begin::Bullet-->
                                                <div class="bullet w-8px h-6px rounded-2 me-3"
                                                    style="background-color: #E4E6EF"></div>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="fs-6 fw-semibold text-gray-500 flex-shrink-0">Psychology</div>
                                                <!--end::Label-->
                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed min-w-10px flex-grow-1 mx-2"></div>
                                                <!--end::Separator-->
                                                <!--begin::Stats-->
                                                <div class="ms-auto fw-bolder text-gray-700 text-end">25%</div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Labels-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Card body-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <!-- Col-->
                        <div class="col-xl-8 mb-5 mb-xl-10">
                            <!-- Engage widget 12-->
                            <div class="card card-custom border-0 h-md-100" style="background: #df4d02;">
                                <!-- Body-->
                                <div class="card-body d-flex justify-content-center flex-wrap ps-xl-15 pe-0">
                                    <!-- Wrapper-->
                                    <div class="flex-grow-1 mt-2 me-9 me-md-0 align-content-center" style="width: 60%;">
                                        <!-- Title-->
                                        <div class="position-relative text-white fs-1 z-index-2 fw-bold mb-8">
                                            Welcome to Your AppliedHE Vault Dashboard
                                        </div>
                                        <!--end::Title-->
                                        <!-- Text-->
                                        <span class="text-white fw-semibold fs-6 mb-6 d-block" style="width: 93%;">Access
                                            your centralized data hub for rankings, ratings, and institutional surveys.
                                            Leverage the power of data to gain valuable insights and maximize your
                                            institution's performance</span>
                                    </div>
                                    <!-- Wrapper-->
                                    <!-- Illustration-->
                                    <img src="assets/media/illustrations/sigma-1/17.png" class="h-150px me-15"
                                        alt="" />
                                    <!--end::Illustration-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Engage widget 12-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!-- Row-->
                    <div class="row g-5 g-xl-10">
                        <!-- Col-->
                        <div class="col-xl-4 mb-xl-10">
                            <!-- Chart widget 29-->
                            <div class="card card-flush">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-900">Timeline</span>
                                        <span class="text-gray-500 pt-2 fw-semibold fs-6">Latest activities</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Menu-->
                                        <button
                                            class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                            data-kt-menu-overflow="true">
                                            <i class="ki-outline ki-dots-square fs-1 text-gray-500 me-n1"></i>
                                        </button>
                                        <!--begin::Menu 2-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mb-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ url('#') }}" class="menu-link px-3">New Ticket</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ url('#') }}" class="menu-link px-3">New Customer</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="right-start">
                                                <!--begin::Menu item-->
                                                <a href="{{ url('#') }}" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--end::Menu item-->
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="{{ url('#') }}" class="menu-link px-3">Admin Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="{{ url('#') }}" class="menu-link px-3">Staff
                                                            Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="{{ url('#') }}" class="menu-link px-3">Member
                                                            Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ url('#') }}" class="menu-link px-3">New Contact</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mt-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary btn-sm px-4"
                                                        href="{{ url('#') }}">Generate
                                                        Reports</a>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 2-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-12">
                                    <!--begin::Timeline-->
                                    <div class="timeline-label">
                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bold text-gray-800 fs-6">08:42</div>
                                            <!--end::Label-->
                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="ki-outline ki-abstract-8 text-gray-600 fs-3"></i>
                                            </div>
                                            <!--end::Badge-->
                                            <!--begin::Text-->
                                            <div class="fw-semibold text-gray-700 ps-3 fs-7">Logged in to the AppliedHE
                                                Vault</div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bold text-gray-800 fs-6">10:00</div>
                                            <!--end::Label-->
                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="ki-outline ki-abstract-8 text-gray-600 fs-3"></i>
                                            </div>
                                            <!--end::Badge-->
                                            <!--begin::Text-->
                                            <div class="fw-semibold text-gray-700 ps-3 fs-7">Submitted faculty publications
                                                data for the latest research output</div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bold text-gray-800 fs-6">12:37</div>
                                            <!--end::Label-->
                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="ki-outline ki-abstract-8 text-gray-600 fs-3"></i>
                                            </div>
                                            <!--end::Badge-->
                                            <!--begin::Desc-->
                                            <div class="timeline-content fw-bold text-gray-800 ps-3">Profile Update</div>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bold text-gray-800 fs-6">14:50</div>
                                            <!--end::Label-->
                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="ki-outline ki-abstract-8 text-gray-600 fs-3"></i>
                                            </div>
                                            <!--end::Badge-->
                                            <!--begin::Text-->
                                            <div class="fw-semibold text-gray-700 ps-3 fs-7">Entered graduate employment
                                                statistics for the 2022 graduating class</div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bold text-gray-800 fs-6">16:03</div>
                                            <!--end::Label-->
                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="ki-outline ki-abstract-8 text-gray-600 fs-3"></i>
                                            </div>
                                            <!--end::Badge-->
                                            <!--begin::Desc-->
                                            <div class="timeline-content fw-semibold text-gray-800 ps-3">Added information
                                                on international student exchange programs</div>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
                                            <!--end::Label-->
                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="ki-outline ki-abstract-8 text-gray-600 fs-3"></i>
                                            </div>
                                            <!--end::Badge-->
                                            <!--begin::Text-->
                                            <div class="fw-semibold text-gray-700 ps-3 fs-7">Submitted data on community
                                                service projects conducted in the past year</div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bold text-gray-800 fs-6">18:37</div>
                                            <!--end::Label-->
                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="ki-outline ki-abstract-8 text-gray-600 fs-3"></i>
                                            </div>
                                            <!--end::Badge-->
                                            <!--begin::Desc-->
                                            <div class="timeline-content fw-bold text-gray-800 ps-3">Uploaded data on
                                                recent research grants and projects.
                                            </div>
                                            <!--end::Desc-->
                                        </div>
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bold text-gray-800 fs-6">20:40</div>
                                            <!--end::Label-->
                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="ki-outline ki-abstract-8 text-gray-600 fs-3"></i>
                                            </div>
                                            <!--end::Badge-->
                                            <!--begin::Desc-->
                                            <div class="timeline-content fw-bold text-gray-800 ps-3">Updated details of new
                                                courses and curriculum changes.
                                            </div>
                                            <!--end::Desc-->
                                        </div>
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bold text-gray-800 fs-6">21:52</div>
                                            <!--end::Label-->
                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="ki-outline ki-abstract-8 text-gray-600 fs-3"></i>
                                            </div>
                                            <!--end::Badge-->
                                            <!--begin::Desc-->
                                            <div class="timeline-content fw-bold text-gray-800 ps-3"> Ranking Submission
                                            </div>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Timeline-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end::Chart widget 29-->
                        </div>
                        <!--end::Col-->
                        <!-- Col-->
                        <div class="col-xl-8 mb-5 mb-xl-10">
                            <!-- Table widget 6-->
                            <div class="card card-flush h-md-100">
                                <!-- Header-->
                                <div class="card-header pt-7">
                                    <!-- Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800">Private University Ranking:
                                            ASEAN</span>
                                        <span class="text-gray-500 mt-1 fw-semibold fs-6">Total 100+ Universityes</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!-- Toolbar-->
                                    <div class="card-toolbar">
                                        <a href="{{ url('#') }}" class="btn btn-sm btn-light">View All</a>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!-- Body-->
                                <div class="card-body">
                                    <!-- Nav-->
                                    <ul class="nav nav-pills nav-pills-custom mb-3">
                                        <li class="nav-item mb-3 me-3 me-lg-6">
                                            <!-- Link-->
                                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active"
                                                data-bs-toggle="pill" href="#kt_stats_widget_6_tab_1">
                                                <!-- Icon-->
                                                <div class="nav-icon mb-3">
                                                    <i class="ki-outline ki-calendar fs-1"></i>
                                                </div>
                                                <!--end::Icon-->
                                                <!-- Title-->
                                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">2023</span>
                                                <!--end::Title-->
                                                <!-- Bullet-->
                                                <span
                                                    class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                <!--end::Bullet-->
                                            </a>
                                            <!--end::Link-->
                                        </li>
                                        <li class="nav-item mb-3 me-3 me-lg-6">
                                            <!-- Link-->
                                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2"
                                                data-bs-toggle="pill" href="#kt_stats_widget_6_tab_2">
                                                <!-- Icon-->
                                                <div class="nav-icon mb-3">
                                                    <i class="ki-outline ki-calendar fs-1"></i>
                                                </div>
                                                <!--end::Icon-->
                                                <!-- Title-->
                                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">2024</span>
                                                <!--end::Title-->
                                                <!-- Bullet-->
                                                <span
                                                    class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                <!--end::Bullet-->
                                            </a>
                                            <!--end::Link-->
                                        </li>
                                    </ul>
                                    <!--end::Nav-->
                                    <!-- Tab Content-->
                                    <div class="tab-content">
                                        <!-- Tap pane-->
                                        <div class="tab-pane fade active show" id="kt_stats_widget_6_tab_1">
                                            <!-- Table container-->
                                            <div class="table-responsive">
                                                <!-- Table-->
                                                <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                    <!-- Table head-->
                                                    <thead>
                                                        <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                            <th class="p-0 w-200px w-xxl-450px"></th>
                                                            <th class="p-0 min-w-100px"></th>
                                                            <th class="p-0 min-w-150px"></th>
                                                            <th class="p-0 min-w-100px"></th>
                                                            <th class="p-0 w-50px"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-40px me-3 border">
                                                                        <img
                                                                            src="assets/media/logos/uni-logo-sample.jpg" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="{{ url('#') }}"
                                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Bina
                                                                            Nusantara University</a>
                                                                        <span
                                                                            class="fw-semibold text-gray-500 d-block">University</span>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bold d-block mb-1 fs-6">1</span>
                                                                <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Indonesia</a>
                                                                <span
                                                                    class="text-muted fw-semibold d-block fs-7">Country</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">69,04</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Total
                                                                    Score</span>
                                                            </td>

                                                            <td class="text-end">
                                                                <a href="{{ url('#') }}"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <i
                                                                        class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-40px me-3 border">
                                                                        <img
                                                                            src="assets/media/logos/uni-logo-sample.jpg" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="{{ url('#') }}"
                                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Infrastructure
                                                                            University Kuala Lumpur</a>
                                                                        <span
                                                                            class="fw-semibold text-gray-500 d-block">University</span>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bold d-block mb-1 fs-6">2</span>
                                                                <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Malaysia</a>
                                                                <span
                                                                    class="text-muted fw-semibold d-block fs-7">Country</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">66,60
                                                                </a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Total
                                                                    Score</span>
                                                            </td>

                                                            <td class="text-end">
                                                                <a href="{{ url('#') }}"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <i
                                                                        class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-40px me-3 border">
                                                                        <img
                                                                            src="assets/media/logos/uni-logo-sample.jpg" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="{{ url('#') }}"
                                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Universitas
                                                                            Tarumanagara</a>
                                                                        <span
                                                                            class="fw-semibold text-gray-500 d-block">University</span>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bold d-block mb-1 fs-6">3</span>
                                                                <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Indonesia</a>
                                                                <span
                                                                    class="text-muted fw-semibold d-block fs-7">Country</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">65,83</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Total
                                                                    Score</span>
                                                            </td>

                                                            <td class="text-end">
                                                                <a href="{{ url('#') }}"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <i
                                                                        class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-40px me-3 border">
                                                                        <img
                                                                            src="assets/media/logos/uni-logo-sample.jpg" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="{{ url('#') }}"
                                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Universitas
                                                                            Teknokrat Indonesia</a>
                                                                        <span
                                                                            class="fw-semibold text-gray-500 d-block">University</span>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bold d-block mb-1 fs-6">4</span>
                                                                <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Indonesia</a>
                                                                <span
                                                                    class="text-muted fw-semibold d-block fs-7">Country</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">65,82</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Total
                                                                    Score</span>
                                                            </td>

                                                            <td class="text-end">
                                                                <a href="{{ url('#') }}"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <i
                                                                        class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-40px me-3 border">
                                                                        <img
                                                                            src="assets/media/logos/uni-logo-sample.jpg" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="{{ url('#') }}"
                                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">University
                                                                            of Santo Tomas</a>
                                                                        <span
                                                                            class="fw-semibold text-gray-500 d-block">University</span>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bold d-block mb-1 fs-6">5</span>
                                                                <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Philippines</a>
                                                                <span
                                                                    class="text-muted fw-semibold d-block fs-7">Country</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">65,17</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Total
                                                                    Score</span>
                                                            </td>

                                                            <td class="text-end">
                                                                <a href="{{ url('#') }}"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <i
                                                                        class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="kt_stats_widget_6_tab_2">
                                            <!-- Table container-->
                                            <div class="table-responsive">
                                                <!-- Table-->
                                                <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                    <!-- Table head-->
                                                    <thead>
                                                        <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                            <th class="p-0 w-200px w-xxl-450px"></th>
                                                            <th class="p-0 min-w-100px"></th>
                                                            <th class="p-0 min-w-150px"></th>
                                                            <th class="p-0 min-w-100px"></th>
                                                            <th class="p-0 w-50px"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-40px me-3 border">
                                                                        <img
                                                                            src="assets/media/logos/uni-logo-sample.jpg" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="{{ url('#') }}"
                                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Sunway
                                                                            University</a>
                                                                        <span
                                                                            class="fw-semibold text-gray-500 d-block">University</span>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bold d-block mb-1 fs-6">1</span>
                                                                <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Malaysia
                                                                </a>
                                                                <span
                                                                    class="text-muted fw-semibold d-block fs-7">Country</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">72,42</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Total
                                                                    Score</span>
                                                            </td>

                                                            <td class="text-end">
                                                                <a href="{{ url('#') }}"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <i
                                                                        class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-40px me-3 border">
                                                                        <img
                                                                            src="assets/media/logos/uni-logo-sample.jpg" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="{{ url('#') }}"
                                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Krirk
                                                                            University</a>
                                                                        <span
                                                                            class="fw-semibold text-gray-500 d-block">University</span>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bold d-block mb-1 fs-6">2</span>
                                                                <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Thailand</a>
                                                                <span
                                                                    class="text-muted fw-semibold d-block fs-7">Country</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">69,93</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Total
                                                                    Score</span>
                                                            </td>

                                                            <td class="text-end">
                                                                <a href="{{ url('#') }}"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <i
                                                                        class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-40px me-3 border">
                                                                        <img
                                                                            src="assets/media/logos/uni-logo-sample.jpg" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="{{ url('#') }}"
                                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">UCSI
                                                                            University</a>
                                                                        <span
                                                                            class="fw-semibold text-gray-500 d-block">University</span>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bold d-block mb-1 fs-6">3</span>
                                                                <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Malaysia</a>
                                                                <span
                                                                    class="text-muted fw-semibold d-block fs-7">Country</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">69,19</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Total
                                                                    Score</span>
                                                            </td>

                                                            <td class="text-end">
                                                                <a href="{{ url('#') }}"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <i
                                                                        class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-40px me-3 border">
                                                                        <img
                                                                            src="assets/media/logos/uni-logo-sample.jpg" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="{{ url('#') }}"
                                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Taylor's
                                                                            University</a>
                                                                        <span
                                                                            class="fw-semibold text-gray-500 d-block">University</span>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bold d-block mb-1 fs-6">4</span>
                                                                <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Malaysia
                                                                </a>
                                                                <span
                                                                    class="text-muted fw-semibold d-block fs-7">Country</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">69,17</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Total
                                                                    Score</span>
                                                            </td>

                                                            <td class="text-end">
                                                                <a href="{{ url('#') }}"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <i
                                                                        class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-40px me-3 border">
                                                                        <img
                                                                            src="assets/media/logos/uni-logo-sample.jpg" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="{{ url('#') }}"
                                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Infrastructure
                                                                            University Kuala Lumpur</a>
                                                                        <span
                                                                            class="fw-semibold text-gray-500 d-block">University</span>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bold d-block mb-1 fs-6">5</span>
                                                                <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Malaysia</a>
                                                                <span
                                                                    class="text-muted fw-semibold d-block fs-7">Country</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">66,82</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Total
                                                                    Score</span>
                                                            </td>

                                                            <td class="text-end">
                                                                <a href="{{ url('#') }}"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <i
                                                                        class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                    </div>
                                    <!--end::Tab Content-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end::Table widget 6-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!-- Row-->
                    <div class="row g-5 g-xl-10">
                        <!-- Col-->
                        <div class="col-xl-4 mb-xl-10">
                            <!-- Chart widget 29-->
                            <div class="card card-flush h-xl-100">
                                <!-- Header-->
                                <div class="card-header py-7">
                                    <!-- Statistics-->
                                    <div class="m-0">
                                        <!-- Heading-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!-- Title-->
                                            <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">01</span>
                                            <!--end::Title-->
                                            <!-- Label-->
                                            <span class="badge badge-light-success fs-base">
                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>5.4%</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Heading-->
                                        <!-- Description-->
                                        <span class="fs-6 fw-semibold text-gray-500">Public University Ranking: ASEAN
                                            2024</span>
                                        <span class="d-block fs-7 text-gray-500">University Kebangsaan Malaysia
                                            (UKM)</span>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Statistics-->

                                </div>
                                <!--end::Header-->
                                <!-- Body-->
                                <div class="card-body d-flex py-5 px-0">
                                    <!-- Chart-->
                                    <div id="kt_charts_widget_1_chart" class="h-300px w-100 min-h-auto ps-7 pe-0 mb-5">
                                    </div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Chart widget 29-->
                        </div>
                        <!--end::Col-->
                        <!-- Col-->
                        <div class="col-xl-8 mb-5 mb-xl-10">
                            <!-- Table widget 6-->
                            <div class="card card-flush h-md-100">
                                <!-- Header-->
                                <div class="card-header pt-7">
                                    <!-- Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800">Public University Ranking: ASEAN
                                            2024</span>
                                        <span class="text-gray-500 mt-1 fw-semibold fs-6">Total 100+ Universityes</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!-- Toolbar-->
                                    <div class="card-toolbar">
                                        <a href="{{ url('#') }}" class="btn btn-sm btn-light">View All</a>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!-- Body-->
                                <div class="card-body">

                                    <!-- Tab Content-->
                                    <div class="tab-content">
                                        <!-- Tap pane-->
                                        <div class="tab-pane fade active show" id="kt_stats_widget_6_tab_1">
                                            <!-- Table container-->
                                            <div class="table-responsive">
                                                <!-- Table-->
                                                <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                    <!-- Table head-->
                                                    <thead>
                                                        <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                            <th class="p-0 w-200px w-xxl-450px"></th>
                                                            <th class="p-0 min-w-100px"></th>
                                                            <th class="p-0 min-w-150px"></th>
                                                            <th class="p-0 min-w-100px"></th>
                                                            <th class="p-0 w-50px"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-40px me-3 border">
                                                                        <img
                                                                            src="assets/media/logos/uni-logo-sample.jpg" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="{{ url('#') }}"
                                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">University
                                                                            Kebangsaan Malaysia (UKM) </a>
                                                                        <span
                                                                            class="fw-semibold text-gray-500 d-block">University</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bold d-block mb-1 fs-6">1</span>
                                                                <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Malaysia</a>
                                                                <span
                                                                    class="text-muted fw-semibold d-block fs-7">Country</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">75,94</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Total
                                                                    Score</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="{{ url('#') }}"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <i
                                                                        class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-40px me-3 border">
                                                                        <img
                                                                            src="assets/media/logos/uni-logo-sample.jpg" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="{{ url('#') }}"
                                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">National
                                                                            University of Singapore (NUS) </a>
                                                                        <span
                                                                            class="fw-semibold text-gray-500 d-block">University</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bold d-block mb-1 fs-6">2</span>
                                                                <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Singapore</a>
                                                                <span
                                                                    class="text-muted fw-semibold d-block fs-7">Country</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">73,73</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Total
                                                                    Score</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="{{ url('#') }}"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <i
                                                                        class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-40px me-3 border">
                                                                        <img
                                                                            src="assets/media/logos/uni-logo-sample.jpg" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="{{ url('#') }}"
                                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">IPB
                                                                            University (aka Bogor Agricultural
                                                                            University)</a>
                                                                        <span
                                                                            class="fw-semibold text-gray-500 d-block">University</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bold d-block mb-1 fs-6">3</span>
                                                                <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Indonesia</a>
                                                                <span
                                                                    class="text-muted fw-semibold d-block fs-7">Country</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">73,67</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Total
                                                                    Score</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="{{ url('#') }}"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <i
                                                                        class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-40px me-3 border">
                                                                        <img
                                                                            src="assets/media/logos/uni-logo-sample.jpg" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="{{ url('#') }}"
                                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Nanyang
                                                                            Technological University (NTU)</a>
                                                                        <span
                                                                            class="fw-semibold text-gray-500 d-block">University</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bold d-block mb-1 fs-6">4</span>
                                                                <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Singapore</a>
                                                                <span
                                                                    class="text-muted fw-semibold d-block fs-7">Country</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">73,19</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Total
                                                                    Score</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="{{ url('#') }}"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <i
                                                                        class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-40px me-3 border">
                                                                        <img
                                                                            src="assets/media/logos/uni-logo-sample.jpg" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="{{ url('#') }}"
                                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Mahidol
                                                                            University</a>
                                                                        <span
                                                                            class="fw-semibold text-gray-500 d-block">University</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bold d-block mb-1 fs-6">5</span>
                                                                <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Thailand</a>
                                                                <span
                                                                    class="text-muted fw-semibold d-block fs-7">Country</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('#') }}"
                                                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">71,12</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Total
                                                                    Score</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="{{ url('#') }}"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <i
                                                                        class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Tab Content-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end::Table widget 6-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->

        <!--end::Footer-->
    </div>

@endsection
