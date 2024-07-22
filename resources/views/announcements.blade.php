@extends ('layouts.admin')

@section('title', 'Announcements')

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
                            Announcements</h1>
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
                            <li class="breadcrumb-item text-muted">Announcements</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">

                    <div class="card card-flush">
                        <!--begin::Card header-->
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
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
                                <!--begin::Add Announcement-->
                                <a href="{{ url('#') }}" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modal_add_announcement">Add Announcement</a>
                                <!--end::Add Announcement-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="announcement_table">
                                <thead>
                                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="w-10px pe-2">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                    data-kt-check-target="#announcement_table .form-check-input"
                                                    value="1" />
                                            </div>
                                        </th>
                                        <th class="min-w-200px">Announcement</th>
                                        <th class="text-end min-w-100px">Category</th>
                                        <th class="text-end min-w-70px">Date</th>
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
                                                <a href="{{ url('#') }}" data-bs-toggle="modal"
                                                    data-bs-target="#modal_view_announcement" class="symbol symbol-50px">
                                                    <span
                                                        class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                        <i class="ki-outline ki-call text-primary fs-1"></i>
                                                    </span>
                                                </a>
                                                <!--end::Thumbnail-->
                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <a href="{{ url('#') }}" data-bs-toggle="modal"
                                                        data-bs-target="#modal_view_announcement"
                                                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                        data-kt-ecommerce-product-filter="product_name">Please note that
                                                        the schedule for Management has been updated. The new class
                                                        timings are now available on the course page.</a>
                                                    <!--end::Title-->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <span class="fw-bold">IT</span>
                                        </td>
                                        <td class="text-end" data-order="14">
                                            <span class="fw-bold ms-3">2024.05.27</span>
                                        </td>
                                        <td class="text-end" data-order="Active">
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
                                                    <a href="{{ url('#') }}" class="menu-link px-3"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modal_view_announcement">View</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('#') }}" class="menu-link px-3"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modal_update_announcement">Edit</a>
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
                                                <a href="{{ url('#') }}" data-bs-toggle="modal"
                                                    data-bs-target="#modal_view_announcement" class="symbol symbol-50px">
                                                    <span
                                                        class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                        <i class="ki-outline ki-call text-primary fs-1"></i>
                                                    </span>
                                                </a>
                                                <!--end::Thumbnail-->
                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <a href="{{ url('#') }}" data-bs-toggle="modal"
                                                        data-bs-target="#modal_view_announcement"
                                                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                        data-kt-ecommerce-product-filter="product_name">Join us for the
                                                        Annual Science Fair on July 15th at the Main Auditorium.
                                                        Participate in workshops and meet industry experts!</a>
                                                    <!--end::Title-->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <span class="fw-bold">Management</span>
                                        </td>
                                        <td class="text-end" data-order="14">
                                            <span class="fw-bold ms-3">2024.05.26</span>
                                        </td>
                                        <td class="text-end" data-order="Disabled">
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
                                                    <a href="{{ url('#') }}" class="menu-link px-3"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modal_view_announcement">View</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('#') }}" class="menu-link px-3"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modal_update_announcement">Edit</a>
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
                                                <a href="{{ url('#') }}" data-bs-toggle="modal"
                                                    data-bs-target="#modal_view_announcement" class="symbol symbol-50px">
                                                    <span
                                                        class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                        <i class="ki-outline ki-call text-primary fs-1"></i>
                                                    </span>
                                                </a>
                                                <!--end::Thumbnail-->
                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <a href="{{ url('#') }}" data-bs-toggle="modal"
                                                        data-bs-target="#modal_view_announcement"
                                                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                        data-kt-ecommerce-product-filter="product_name">The results for
                                                        the Spring Semester exams have been released. Check your student
                                                        portal for detailed scores.</a>
                                                    <!--end::Title-->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <span class="fw-bold">Psychology</span>
                                        </td>
                                        <td class="text-end" data-order="14">
                                            <span class="fw-bold ms-3">2024.04.23</span>
                                        </td>
                                        <td class="text-end" data-order="Inactive">
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
                                                    <a href="{{ url('#') }}" class="menu-link px-3"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modal_view_announcement">View</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('#') }}" class="menu-link px-3"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modal_update_announcement">Edit</a>
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
                                                <a href="{{ url('#') }}" data-bs-toggle="modal"
                                                    data-bs-target="#modal_view_announcement" class="symbol symbol-50px">
                                                    <span
                                                        class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                        <i class="ki-outline ki-call text-primary fs-1"></i>
                                                    </span>
                                                </a>
                                                <!--end::Thumbnail-->
                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <a href="{{ url('#') }}" data-bs-toggle="modal"
                                                        data-bs-target="#modal_view_announcement"
                                                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                        data-kt-ecommerce-product-filter="product_name">The university
                                                        will be closed on July 4th in observance of Independence Day.
                                                        Classes will resume on July 5th.</a>
                                                    <!--end::Title-->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <span class="fw-bold">IT</span>
                                        </td>
                                        <td class="text-end" data-order="14">
                                            <span class="fw-bold ms-3">2024.04.18</span>
                                        </td>
                                        <td class="text-end" data-order="Inactive">
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
                                                    <a href="{{ url('#') }}" class="menu-link px-3"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modal_view_announcement">View</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('#') }}" class="menu-link px-3"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modal_update_announcement">Edit</a>
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
                                                <a href="{{ url('#') }}" data-bs-toggle="modal"
                                                    data-bs-target="#modal_view_announcement" class="symbol symbol-50px">
                                                    <span
                                                        class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                        <i class="ki-outline ki-call text-primary fs-1"></i>
                                                    </span>
                                                </a>
                                                <!--end::Thumbnail-->
                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <a href="{{ url('#') }}" data-bs-toggle="modal"
                                                        data-bs-target="#modal_view_announcement"
                                                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                        data-kt-ecommerce-product-filter="product_name">Updated
                                                        COVID-19 guidelines are now in effect. Masks are mandatory in
                                                        all indoor spaces. Please refer to the Health Services page for
                                                        more details.</a>
                                                    <!--end::Title-->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <span class="fw-bold">Management</span>
                                        </td>
                                        <td class="text-end" data-order="14">
                                            <span class="fw-bold ms-3">2024.04.12</span>
                                        </td>
                                        <td class="text-end" data-order="Active">
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
                                                    <a href="{{ url('#') }}" class="menu-link px-3"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modal_view_announcement">View</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('#') }}" class="menu-link px-3"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modal_update_announcement">Edit</a>
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

                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->

    </div>


    <div class="modal fade" id="modal_add_announcement" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Add Announcement</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body py-lg-10 px-lg-10">

                    <div class="card-body p-9">
                        <div class="row mb-7 align-items-center">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Title</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="fv-row">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-7 align-items-center">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Description</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <div class="row">
                                    <div class="fv-row">
                                        <textarea class="form-control h-175px"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-7 align-items-center">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Date</label>
                            <div class="col-lg-8 fv-row">
                                <div class="row">
                                    <div class="fv-row">
                                        <input type="date" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-7 align-items-center">
                            <label class="col-lg-4 fw-semibold text-muted">Category</label>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="fv-row">
                                        <select class="form-select form-select-sm">
                                            <option></option>
                                            <option value="Draft">IT</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-7 align-items-center">
                            <label class="col-lg-4 fw-semibold text-muted">Status</label>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="fv-row">
                                        <select class="form-select form-select-sm">
                                            <option></option>
                                            <option value="Draft">Draft</option>
                                            <option value="Active">Active</option>
                                            <option value="Disabled">Disabled</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Card body-->
                <!--begin::Actions-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="reset" class="btn btn-light btn-active-light-primary me-2"
                        data-bs-dismiss="modal">Discard</button>
                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Add
                        New</button>
                </div>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>

    <div class="modal fade" id="modal_update_announcement" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Update Announcement</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body py-lg-10 px-lg-10">

                    <div class="card-body p-9">
                        <div class="row mb-7 align-items-center">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Title</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="fv-row">
                                        <input type="text" class="form-control" value="Announcement" />
                                    </div>
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-7 align-items-center">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Description</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <div class="row">
                                    <div class="fv-row">
                                        <textarea class="form-control h-175px">Updated COVID-19 guidelines are now in effect. Masks are mandatory in all indoor spaces. Please refer to the Health Services page for more details.</textarea>
                                    </div>
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-7 align-items-center">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Date</label>
                            <div class="col-lg-8 fv-row">
                                <div class="row">
                                    <div class="fv-row">
                                        <input type="date" class="form-control" value="2024-05-25" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-7 align-items-center">
                            <label class="col-lg-4 fw-semibold text-muted">Category</label>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="fv-row">
                                        <select class="form-select form-select-sm">
                                            <option value="Draft">Management</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-7 align-items-center">
                            <label class="col-lg-4 fw-semibold text-muted">Status</label>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="fv-row">
                                        <select class="form-select form-select-sm">
                                            <option value="Draft">Draft</option>
                                            <option value="Active">Active</option>
                                            <option value="Disabled">Disabled</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Card body-->
                <!--begin::Actions-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="reset" class="btn btn-light btn-active-light-primary me-2"
                        data-bs-dismiss="modal">Discard</button>
                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Update</button>
                </div>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>

    <div class="modal fade" id="modal_view_announcement" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>View Announcement</h2>
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </div>
                </div>
                <div class="modal-body p-lg-12">
                    <div class="card-body">
                        <div class="modal-header px-0 pt-0 border-0">
                            <h4>Updated COVID-19 guidelines are now in effect.</h4>
                            <div class="btn btn-primary px-8y" data-bs-toggle="modal"
                                data-bs-target="#modal_update_announcement">
                                Edit
                            </div>
                        </div>
                        <label class="d-block">Date - 2025-05-25</label>
                        <label class="d-block py-2">Category - IT</label>
                        <label class="d-block">Status - <div class="badge badge-light-danger">Inactive</div></label>
                        <label class="mt-8">Updated COVID-19 guidelines are now in effect. Masks are mandatory in all
                            indoor spaces. Please refer to the Health Services page for more details.</label>
                    </div>

                    <div class="card-footer d-flex justify-content-center pt-7">
                        <button type="submit" class="btn btn-primary px-8" data-bs-dismiss="modal">Got It!</button>
                    </div>

                </div>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>

@endsection
