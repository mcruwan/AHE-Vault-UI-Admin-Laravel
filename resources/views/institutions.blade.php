@extends ('layouts.admin')

@section('title', 'Institutions')

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
                            Institutions</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ url('dashboard') }}" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Institutions</li>
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <!--begin::Filter menu-->
                        <div class="m-0">
                            <!--begin::Menu toggle-->
                            <a href="{{ url('#') }}" class="btn btn-sm btn-flex btn-secondary fw-bold"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-outline ki-filter fs-6 text-muted me-1"></i>Filter</a>
                            <!--end::Menu toggle-->
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                id="kt_menu_660662b42b909">
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
                                                data-dropdown-parent="#kt_menu_660662b42b909" data-allow-clear="true">
                                                <option></option>
                                                <option value="Active">Active</option>
                                                <option value="draft">Draft</option>
                                                <option value="Disabled">Disabled</option>
                                                <option value="inactive">Inactive</option>
                                            </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Institution Type:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" value="1" checked />
                                                <span class="form-check-label">Public</span>
                                            </label>
                                            <!--end::Options-->
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" value="2" />
                                                <span class="form-check-label">Private</span>
                                            </label>
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="3" />
                                                <span class="form-check-label">Other</span>
                                            </label>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
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
                        <!--begin::Primary button-->
                        <a href="{{ url('#') }}" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_create_app">Create</a>
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
                    <!--begin::Institutions-->
                    <div class="card card-flush">
                        <!--begin::Card header-->
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1">
                                    <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                                    <input type="text" data-kt-ecommerce-product-filter="search"
                                        class="form-control form-control-solid w-250px ps-12"
                                        placeholder="Search Institution" />
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                <div class="w-100 mw-150px">
                                    <!--begin::Select2-->
                                    <select class="form-select form-select-solid" data-control="select2"
                                        data-hide-search="true" data-placeholder="Status"
                                        data-kt-ecommerce-product-filter="status">
                                        <option></option>
                                        <option value="all">All</option>
                                        <option value="Active">Active</option>
                                        <option value="Disabled">Disabled</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                    <!--end::Select2-->
                                </div>
                                <!--begin::Add Institution-->
                                <a href="{{ url('add-institution') }}" class="btn btn-primary">Add Institution</a>
                                <!--end::Add Institution-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                                <thead>
                                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="w-10px pe-2">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                    data-kt-check-target="#kt_ecommerce_products_table .form-check-input"
                                                    value="1" />
                                            </div>
                                        </th>
                                        <th class="min-w-200px">Institution Name</th>
                                        <th class="text-end min-w-100px">Country</th>
                                        <th class="text-end min-w-70px">Type</th>
                                        <th class="text-end min-w-100px">Ranking</th>
                                        <th class="text-end min-w-100px">Status</th>
                                        <th class="text-end min-w-70px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <!--begin::Thumbnail-->
                                                <a href="{{ url('edit-institution') }}" class="symbol symbol-50px">
                                                    <span class="symbol-label"
                                                        style="background-image:url(assets/media/features-logos/laravel-blade.png);"></span>
                                                </a>
                                                <!--end::Thumbnail-->
                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                        data-kt-ecommerce-product-filter="product_name">
                                                        Universitas Hasanuddin</a>
                                                    <!--end::Title-->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="fw-bold">Malaysia</span>
                                        </td>
                                        <td class="text-end pe-0" data-order="14">
                                            <span class="fw-bold ms-3">Public</span>
                                        </td>
                                        <td class="text-end pe-0">1</td>
                                        <td class="text-end pe-0" data-order="Inactive">
                                            <!--begin::Badges-->
                                            <div class="badge badge-light-danger">Inactive</div>
                                            <!--end::Badges-->
                                        </td>
                                        <td class="text-end">
                                            <a href="{{ url('#') }}"
                                                class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="menu-link px-3">View</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('#') }}" class="menu-link px-3"
                                                        data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <!--begin::Thumbnail-->
                                                <a href="{{ url('edit-institution') }}" class="symbol symbol-50px">
                                                    <span class="symbol-label"
                                                        style="background-image:url(assets/media/features-logos/laravel-blade.png);"></span>
                                                </a>
                                                <!--end::Thumbnail-->
                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                        data-kt-ecommerce-product-filter="product_name">Universitas
                                                        Airlangga</a>
                                                    <!--end::Title-->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="fw-bold">Indonesia</span>
                                        </td>
                                        <td class="text-end pe-0" data-order="14">
                                            <span class="fw-bold ms-3">Private</span>
                                        </td>
                                        <td class="text-end pe-0">2</td>
                                        <td class="text-end pe-0" data-order="Disabled">
                                            <!--begin::Badges-->
                                            <div class="badge badge-light-primary">Disabled</div>
                                            <!--end::Badges-->
                                        </td>
                                        <td class="text-end">
                                            <a href="{{ url('#') }}"
                                                class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="menu-link px-3">View</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('#') }}" class="menu-link px-3"
                                                        data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <!--begin::Thumbnail-->
                                                <a href="{{ url('edit-institution') }}" class="symbol symbol-50px">
                                                    <span class="symbol-label"
                                                        style="background-image:url(assets/media/features-logos/laravel-blade.png);"></span>
                                                </a>
                                                <!--end::Thumbnail-->
                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                        data-kt-ecommerce-product-filter="product_name">Chang Jung
                                                        Christian University</a>
                                                    <!--end::Title-->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="fw-bold">Malaysia</span>
                                        </td>
                                        <td class="text-end pe-0" data-order="14">
                                            <span class="fw-bold ms-3">Other</span>
                                        </td>
                                        <td class="text-end pe-0">3</td>
                                        <td class="text-end pe-0" data-order="Inactive">
                                            <!--begin::Badges-->
                                            <div class="badge badge-light-danger">Inactive</div>
                                            <!--end::Badges-->
                                        </td>
                                        <td class="text-end">
                                            <a href="{{ url('#') }}"
                                                class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="menu-link px-3">View</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('#') }}" class="menu-link px-3"
                                                        data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <!--begin::Thumbnail-->
                                                <a href="{{ url('edit-institution') }}" class="symbol symbol-50px">
                                                    <span class="symbol-label"
                                                        style="background-image:url(assets/media/features-logos/laravel-blade.png);"></span>
                                                </a>
                                                <!--end::Thumbnail-->
                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                        data-kt-ecommerce-product-filter="product_name">Pearl Academy</a>
                                                    <!--end::Title-->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="fw-bold">Indonesia</span>
                                        </td>
                                        <td class="text-end pe-0" data-order="14">
                                            <span class="fw-bold ms-3">Other</span>
                                        </td>
                                        <td class="text-end pe-0">4</td>
                                        <td class="text-end pe-0" data-order="Inactive">
                                            <!--begin::Badges-->
                                            <div class="badge badge-light-danger">Inactive</div>
                                            <!--end::Badges-->
                                        </td>
                                        <td class="text-end">
                                            <a href="{{ url('#') }}"
                                                class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="menu-link px-3">View</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('#') }}" class="menu-link px-3"
                                                        data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <!--begin::Thumbnail-->
                                                <a href="{{ url('edit-institution') }}" class="symbol symbol-50px">
                                                    <span class="symbol-label"
                                                        style="background-image:url(assets/media/features-logos/laravel-blade.png);"></span>
                                                </a>
                                                <!--end::Thumbnail-->
                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                        data-kt-ecommerce-product-filter="product_name">
                                                        Thu Dau Mot University</a>
                                                    <!--end::Title-->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="fw-bold">Philippines</span>
                                        </td>
                                        <td class="text-end pe-0" data-order="14">
                                            <span class="fw-bold ms-3">Public</span>
                                        </td>
                                        <td class="text-end pe-0">5</td>
                                        <td class="text-end pe-0" data-order="Active">
                                            <!--begin::Badges-->
                                            <div class="badge badge-light-success">Active</div>
                                            <!--end::Badges-->
                                        </td>
                                        <td class="text-end">
                                            <a href="{{ url('#') }}"
                                                class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('#') }}" class="menu-link px-3"
                                                        data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <!--begin::Thumbnail-->
                                                <a href="{{ url('edit-institution') }}" class="symbol symbol-50px">
                                                    <span class="symbol-label"
                                                        style="background-image:url(assets/media/features-logos/laravel-blade.png);"></span>
                                                </a>
                                                <!--end::Thumbnail-->
                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                        data-kt-ecommerce-product-filter="product_name">Universitas Kristen
                                                        Satya Wacana</a>
                                                    <!--end::Title-->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="fw-bold">Malaysia</span>
                                        </td>
                                        <td class="text-end pe-0" data-order="14">
                                            <span class="fw-bold ms-3">Private</span>
                                        </td>
                                        <td class="text-end pe-0">6</td>
                                        <td class="text-end pe-0" data-order="Disabled">
                                            <!--begin::Badges-->
                                            <div class="badge badge-light-primary">Disabled</div>
                                            <!--end::Badges-->
                                        </td>
                                        <td class="text-end">
                                            <a href="{{ url('#') }}"
                                                class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="menu-link px-3">View</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('#') }}" class="menu-link px-3"
                                                        data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <!--begin::Thumbnail-->
                                                <a href="{{ url('edit-institution') }}" class="symbol symbol-50px">
                                                    <span class="symbol-label"
                                                        style="background-image:url(assets/media/features-logos/laravel-blade.png);"></span>
                                                </a>
                                                <!--end::Thumbnail-->
                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                        data-kt-ecommerce-product-filter="product_name">Soegijapranata
                                                        Catholic University</a>
                                                    <!--end::Title-->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="fw-bold">Malaysia</span>
                                        </td>
                                        <td class="text-end pe-0" data-order="14">
                                            <span class="fw-bold ms-3">Other</span>
                                        </td>
                                        <td class="text-end pe-0">7</td>
                                        <td class="text-end pe-0" data-order="Inactive">
                                            <!--begin::Badges-->
                                            <div class="badge badge-light-danger">Inactive</div>
                                            <!--end::Badges-->
                                        </td>
                                        <td class="text-end">
                                            <a href="{{ url('#') }}"
                                                class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="menu-link px-3">View</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('#') }}" class="menu-link px-3"
                                                        data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <!--begin::Thumbnail-->
                                                <a href="{{ url('edit-institution') }}" class="symbol symbol-50px">
                                                    <span class="symbol-label"
                                                        style="background-image:url(assets/media/features-logos/laravel-blade.png);"></span>
                                                </a>
                                                <!--end::Thumbnail-->
                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                        data-kt-ecommerce-product-filter="product_name">MIU City University
                                                        Miami</a>
                                                    <!--end::Title-->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="fw-bold">Indonesia</span>
                                        </td>
                                        <td class="text-end pe-0" data-order="14">
                                            <span class="fw-bold ms-3">Other</span>
                                        </td>
                                        <td class="text-end pe-0">8</td>
                                        <td class="text-end pe-0" data-order="Inactive">
                                            <!--begin::Badges-->
                                            <div class="badge badge-light-danger">Inactive</div>
                                            <!--end::Badges-->
                                        </td>
                                        <td class="text-end">
                                            <a href="{{ url('#') }}"
                                                class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="menu-link px-3">View</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('#') }}" class="menu-link px-3"
                                                        data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <!--begin::Thumbnail-->
                                                <a href="{{ url('edit-institution') }}" class="symbol symbol-50px">
                                                    <span class="symbol-label"
                                                        style="background-image:url(assets/media/features-logos/laravel-blade.png);"></span>
                                                </a>
                                                <!--end::Thumbnail-->
                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                        data-kt-ecommerce-product-filter="product_name">Universitas
                                                        Muhammadiyah Malang </a>
                                                    <!--end::Title-->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="fw-bold">Philippines</span>
                                        </td>
                                        <td class="text-end pe-0" data-order="14">
                                            <span class="fw-bold ms-3">Public</span>
                                        </td>
                                        <td class="text-end pe-0">9</td>
                                        <td class="text-end pe-0" data-order="Active">
                                            <!--begin::Badges-->
                                            <div class="badge badge-light-success">Active</div>
                                            <!--end::Badges-->
                                        </td>
                                        <td class="text-end">
                                            <a href="{{ url('#') }}"
                                                class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="menu-link px-3">View</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('#') }}" class="menu-link px-3"
                                                        data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <!--begin::Thumbnail-->
                                                <a href="{{ url('edit-institution') }}" class="symbol symbol-50px">
                                                    <span class="symbol-label"
                                                        style="background-image:url(assets/media/features-logos/laravel-blade.png);"></span>
                                                </a>
                                                <!--end::Thumbnail-->
                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                        data-kt-ecommerce-product-filter="product_name">Universitas Islam
                                                        Indonesia</a>
                                                    <!--end::Title-->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="fw-bold">Malaysia</span>
                                        </td>
                                        <td class="text-end pe-0" data-order="14">
                                            <span class="fw-bold ms-3">Private</span>
                                        </td>
                                        <td class="text-end pe-0">10</td>
                                        <td class="text-end pe-0" data-order="Disabled">
                                            <!--begin::Badges-->
                                            <div class="badge badge-light-primary">Disabled</div>
                                            <!--end::Badges-->
                                        </td>
                                        <td class="text-end">
                                            <a href="{{ url('#') }}"
                                                class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="menu-link px-3">View</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('#') }}" class="menu-link px-3"
                                                        data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <!--begin::Thumbnail-->
                                                <a href="{{ url('edit-institution') }}" class="symbol symbol-50px">
                                                    <span class="symbol-label"
                                                        style="background-image:url(assets/media/features-logos/laravel-blade.png);"></span>
                                                </a>
                                                <!--end::Thumbnail-->
                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                        data-kt-ecommerce-product-filter="product_name">Holy Name
                                                        University</a>
                                                    <!--end::Title-->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="fw-bold">Malaysia</span>
                                        </td>
                                        <td class="text-end pe-0" data-order="14">
                                            <span class="fw-bold ms-3">Other</span>
                                        </td>
                                        <td class="text-end pe-0">11</td>
                                        <td class="text-end pe-0" data-order="Active">
                                            <!--begin::Badges-->
                                            <div class="badge badge-light-success">Active</div>
                                            <!--end::Badges-->
                                        </td>
                                        <td class="text-end">
                                            <a href="{{ url('#') }}"
                                                class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="menu-link px-3">View</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('#') }}" class="menu-link px-3"
                                                        data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <!--begin::Thumbnail-->
                                                <a href="{{ url('edit-institution') }}" class="symbol symbol-50px">
                                                    <span class="symbol-label"
                                                        style="background-image:url(assets/media/features-logos/laravel-blade.png);"></span>
                                                </a>
                                                <!--end::Thumbnail-->
                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                        data-kt-ecommerce-product-filter="product_name">Mahidol University
                                                    </a>
                                                    <!--end::Title-->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="fw-bold">Indonesia</span>
                                        </td>
                                        <td class="text-end pe-0" data-order="14">
                                            <span class="fw-bold ms-3">Private</span>
                                        </td>
                                        <td class="text-end pe-0">12</td>
                                        <td class="text-end pe-0" data-order="Disabled">
                                            <!--begin::Badges-->
                                            <div class="badge badge-light-primary">Disabled</div>
                                            <!--end::Badges-->
                                        </td>
                                        <td class="text-end">
                                            <a href="{{ url('#') }}"
                                                class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="menu-link px-3">View</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('#') }}" class="menu-link px-3"
                                                        data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <!--begin::Thumbnail-->
                                                <a href="{{ url('edit-institution') }}" class="symbol symbol-50px">
                                                    <span class="symbol-label"
                                                        style="background-image:url(assets/media/features-logos/laravel-blade.png);"></span>
                                                </a>
                                                <!--end::Thumbnail-->
                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                        data-kt-ecommerce-product-filter="product_name">Universiti
                                                        Teknologi Brunei </a>
                                                    <!--end::Title-->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="fw-bold">Malaysia</span>
                                        </td>
                                        <td class="text-end pe-0" data-order="14">
                                            <span class="fw-bold ms-3">Public</span>
                                        </td>
                                        <td class="text-end pe-0">13</td>
                                        <td class="text-end pe-0" data-order="Inactive">
                                            <!--begin::Badges-->
                                            <div class="badge badge-light-danger">Inactive</div>
                                            <!--end::Badges-->
                                        </td>
                                        <td class="text-end">
                                            <a href="{{ url('#') }}"
                                                class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="menu-link px-3">View</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('edit-institution') }}"
                                                        class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('#') }}" class="menu-link px-3"
                                                        data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Institutions-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
    </div>

@endsection
