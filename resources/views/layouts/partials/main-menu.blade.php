<div class="app-header-menu app-header-mobile-drawer align-items-start align-items-lg-center w-100" data-kt-drawer="true"
    data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
    data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end"
    data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
    data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
    data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
    <div class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-state-primary menu-title-gray-700 menu-arrow-gray-500 menu-bullet-gray-500 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
        id="#kt_header_menu" data-kt-menu="true">

        <div class="menu-item menu-lg-down-accordion me-0 me-lg-2">
            <span class="menu-link">
                <a href="{{ url('dashboard') }}" class="menu-title">Dashboard</a>
            </span>
        </div>

        <div class="menu-item menu-lg-down-accordion me-0 me-lg-2">
            <span class="menu-link">
                <a href="{{ url('institutions') }}" class="menu-title">Institutions</a>
            </span>
        </div>

        <div class="menu-item menu-lg-down-accordion me-0 me-lg-2">
            <!--begin:Menu link-->
            <span class="menu-link">
                <a href="{{ url('data-management') }}" class="menu-title">Data Management</a>
            </span>
        </div>

        <div class="menu-item menu-lg-down-accordion me-0 me-lg-2">
            <!--begin:Menu link-->
            <span class="menu-link">
                <a href="{{ url('analytics-reporting') }}" class="menu-title">Analytics & Reporting</a>
            </span>
        </div>

        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
            class="menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
            <!--begin:Menu link-->
            <span class="menu-link">
                <a href="{{ url('#') }}" class="menu-title">More</a>
            </span>

            @include('layouts.partials.sub-menu')

        </div>

    </div>
</div>
