@extends ('layouts.admin')

@section('title', 'Manage Users')

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
                            Manage Users</h1>
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
                            <li class="breadcrumb-item text-muted">Manage Users</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">

                        <div class="d-flex my-2">
                            <!--begin::Select-->
                            <select name="status" data-control="select2" data-hide-search="true"
                                class="form-select form-select-sm bg-body border-body w-125px">
                                <option value="Active" selected="selected">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                            <!--end::Select-->
                        </div>

                        <!--begin::Filter menu-->
                        <div class="m-0">
                            <!--begin::Menu toggle-->
                            <a href="{{ url('#') }}" class="btn btn-sm btn-flex btn-secondary fw-bold"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-outline ki-filter fs-6 text-muted me-1"></i>Filter</a>
                            <!--end::Menu toggle-->
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                id="kt_menu_660662b63dc90">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Menu separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Menu separator-->
                                <!--begin::Form-->
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Status:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div>
                                            <select class="form-select form-select-solid" multiple="multiple"
                                                data-kt-select2="true" data-close-on-select="false"
                                                data-placeholder="Select option"
                                                data-dropdown-parent="#kt_menu_660662b63dc90" data-allow-clear="true">
                                                <option></option>
                                                <option value="1">Active</option>
                                                <option value="2">Inactive</option>
                                            </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->

                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Notifications:</label>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <div
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value=""
                                                name="notifications" checked="checked" />
                                            <label class="form-check-label">Enabled</label>
                                        </div>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                            data-kt-menu-dismiss="true">Reset</button>
                                        <button type="submit" class="btn btn-sm btn-primary"
                                            data-kt-menu-dismiss="true">Apply</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Form-->
                            </div>
                            <!--end::Menu 1-->
                        </div>
                        <!--end::Filter menu-->
                        <!--begin::Secondary button-->
                        <!--end::Secondary button-->
                        <!--begin::Primary button-->
                        <a href="{{ url('add-user') }}" class="btn btn-sm fw-bold btn-primary">Create</a>
                        <!--end::Primary button-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">

                    <div class="row g-6 mb-6 g-xl-9 mb-xl-9">

                        <div class="col-md-6 col-xxl-4">
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card body-->
                                <div class="card-body d-flex flex-center flex-column py-9 px-5">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-65px symbol-circle mb-5">
                                        <img src="assets/media//avatars/300-11.jpg" alt="image" />
                                        <div
                                            class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3">
                                        </div>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Name-->
                                    <a href="{{ url('#') }}"
                                        class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Patric
                                        Watson</a>
                                    <!--end::Name-->
                                    <!--begin::Position-->
                                    <div class="fw-semibold text-gray-500 mb-6">IT Department</div>
                                    <!--end::Position-->

                                    <button class="btn btn-sm btn-primary btn-flex btn-center">View User</button>

                                </div>
                                <!--begin::Card body-->
                            </div>
                            <!--begin::Card-->
                        </div>

                        <div class="col-md-6 col-xxl-4">
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card body-->
                                <div class="card-body d-flex flex-center flex-column py-9 px-5">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-65px symbol-circle mb-5">
                                        <img src="assets/media//avatars/300-11.jpg" alt="image" />
                                        <div
                                            class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3">
                                        </div>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Name-->
                                    <a href="{{ url('#') }}"
                                        class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Patric
                                        Watson</a>
                                    <!--end::Name-->
                                    <!--begin::Position-->
                                    <div class="fw-semibold text-gray-500 mb-6">IT Department</div>
                                    <!--end::Position-->

                                    <button class="btn btn-sm btn-primary btn-flex btn-center">View User</button>

                                </div>
                                <!--begin::Card body-->
                            </div>
                            <!--begin::Card-->
                        </div>

                        <div class="col-md-6 col-xxl-4">
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card body-->
                                <div class="card-body d-flex flex-center flex-column py-9 px-5">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-65px symbol-circle mb-5">
                                        <img src="assets/media//avatars/300-11.jpg" alt="image" />
                                        <div
                                            class="bg-warning position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3">
                                        </div>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Name-->
                                    <a href="{{ url('#') }}"
                                        class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Patric
                                        Watson</a>
                                    <!--end::Name-->
                                    <!--begin::Position-->
                                    <div class="fw-semibold text-gray-500 mb-6">IT Department</div>
                                    <!--end::Position-->

                                    <button class="btn btn-sm btn-primary btn-flex btn-center">View User</button>

                                </div>
                                <!--begin::Card body-->
                            </div>
                            <!--begin::Card-->
                        </div>

                        <div class="col-md-6 col-xxl-4">
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card body-->
                                <div class="card-body d-flex flex-center flex-column py-9 px-5">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-65px symbol-circle mb-5">
                                        <img src="assets/media//avatars/300-11.jpg" alt="image" />
                                        <div
                                            class="bg-warning position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3">
                                        </div>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Name-->
                                    <a href="{{ url('#') }}"
                                        class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Patric
                                        Watson</a>
                                    <!--end::Name-->
                                    <!--begin::Position-->
                                    <div class="fw-semibold text-gray-500 mb-6">IT Department</div>
                                    <!--end::Position-->

                                    <button class="btn btn-sm btn-primary btn-flex btn-center">View User</button>

                                </div>
                                <!--begin::Card body-->
                            </div>
                            <!--begin::Card-->
                        </div>

                        <div class="col-md-6 col-xxl-4">
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card body-->
                                <div class="card-body d-flex flex-center flex-column py-9 px-5">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-65px symbol-circle mb-5">
                                        <img src="assets/media//avatars/300-11.jpg" alt="image" />
                                        <div
                                            class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3">
                                        </div>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Name-->
                                    <a href="{{ url('#') }}"
                                        class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Patric
                                        Watson</a>
                                    <!--end::Name-->
                                    <!--begin::Position-->
                                    <div class="fw-semibold text-gray-500 mb-6">IT Department</div>
                                    <!--end::Position-->

                                    <button class="btn btn-sm btn-primary btn-flex btn-center">View User</button>

                                </div>
                                <!--begin::Card body-->
                            </div>
                            <!--begin::Card-->
                        </div>

                        <div class="col-md-6 col-xxl-4">
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card body-->
                                <div class="card-body d-flex flex-center flex-column py-9 px-5">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-65px symbol-circle mb-5">
                                        <img src="assets/media//avatars/300-11.jpg" alt="image" />
                                        <div
                                            class="bg-warning position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3">
                                        </div>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Name-->
                                    <a href="{{ url('#') }}"
                                        class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Patric
                                        Watson</a>
                                    <!--end::Name-->
                                    <!--begin::Position-->
                                    <div class="fw-semibold text-gray-500 mb-6">IT Department</div>
                                    <!--end::Position-->

                                    <button class="btn btn-sm btn-primary btn-flex btn-center">View User</button>

                                </div>
                                <!--begin::Card body-->
                            </div>
                            <!--begin::Card-->
                        </div>

                    </div>
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>

    </div>

@endsection
