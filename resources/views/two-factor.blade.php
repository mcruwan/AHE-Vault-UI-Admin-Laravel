@extends ('layouts.login')

@section('title', 'Two-Factor Verification')

@section('loginContent')

    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Aside-->
        <div class="d-flex flex-lg-row-fluid">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
                <!--begin::Image-->
                <img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20"
                    src="assets/media/auth/desc-main.png" alt="" />
                <img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20"
                    src="assets/media/auth/desc-main.png" alt="" />
                <!--end::Image-->
                <!--begin::Title-->
                <h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">
                    Welcome to AppliedHE Vault
                </h1>
                <!--end::Title-->
                <!--begin::Text-->
                <div class="text-gray-600 fs-base text-center fw-semibold">
                    Your gateway to centralized university data management.
                    <br />Streamline your data submission, access survey insights,
                    <br />and enhance your institution's global impact with AppliedHE
                    Vault.
                </div>
                <!--end::Text-->
            </div>
            <!--end::Content-->
        </div>
        <!--begin::Aside-->
        <!--begin::Body-->
        <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
            <!--begin::Wrapper-->
            <div class="bg-body d-flex flex-column flex-center rounded-4 w-md-600px p-10">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">
                        <!--begin::Form-->
                        <form class="form w-100 mb-13" novalidate="novalidate" data-kt-redirect-url="dashboard"
                            id="kt_sing_in_two_factor_form">
                            <!--begin::Icon-->
                            <div class="text-center mb-10">
                                <img alt="Logo" class="mh-125px" src="assets/media/svg/misc/smartphone-2.svg" />
                            </div>
                            <!--end::Icon-->
                            <!--begin::Heading-->
                            <div class="text-center mb-10">
                                <!--begin::Title-->
                                <h1 class="text-gray-900 mb-3">Two-Factor Verification</h1>
                                <!--end::Title-->
                                <!--begin::Sub-title-->
                                <div class="text-muted fw-semibold fs-5 mb-5">
                                    Enter the verification code we sent to
                                </div>
                                <!--end::Sub-title-->
                                <!--begin::Mobile no-->
                                <div class="fw-bold text-gray-900 fs-3">******7859</div>
                                <!--end::Mobile no-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Section-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <div class="fw-bold text-start text-gray-900 fs-6 mb-1 ms-1">
                                    Type your 6 digit security code
                                </div>
                                <!--end::Label-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-wrap flex-stack">
                                    <input type="text" name="code_1" data-inputmask="'mask': '9', 'placeholder': ''"
                                        maxlength="1"
                                        class="form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2"
                                        value="" required />
                                    <input type="text" name="code_2" data-inputmask="'mask': '9', 'placeholder': ''"
                                        maxlength="1"
                                        class="form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2"
                                        value="" required />
                                    <input type="text" name="code_3" data-inputmask="'mask': '9', 'placeholder': ''"
                                        maxlength="1"
                                        class="form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2"
                                        value="" required />
                                    <input type="text" name="code_4" data-inputmask="'mask': '9', 'placeholder': ''"
                                        maxlength="1"
                                        class="form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2"
                                        value="" required />
                                    <input type="text" name="code_5" data-inputmask="'mask': '9', 'placeholder': ''"
                                        maxlength="1"
                                        class="form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2"
                                        value="" required />
                                    <input type="text" name="code_6" data-inputmask="'mask': '9', 'placeholder': ''"
                                        maxlength="1"
                                        class="form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2"
                                        value="" required />
                                </div>
                                <!--begin::Input group-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Submit-->
                            <div class="d-flex flex-center">
                                <button type="button" id="kt_sing_in_two_factor_submit"
                                    class="btn btn-lg btn-primary fw-bold">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                            <!--end::Submit-->
                        </form>
                        <!--end::Form-->
                        <!--begin::Notice-->
                        <div class="text-center fw-semibold fs-5">
                            <span class="text-muted me-1">Didn’t get the code ?</span>
                            <a href="{{ url('#') }}" class="link-primary fs-5 me-1">Resend</a>
                            <span class="text-muted me-1">or</span>
                            <a href="{{ url('#') }}" class="link-primary fs-5">Call Us</a>
                        </div>
                        <!--end::Notice-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Footer-->
                    <div class="w-lg-500px d-flex flex-stack">
                        <!--begin::Languages-->
                        <div class="me-10">
                            <!--begin::Toggle-->
                            <button class="btn btn-flex btn-link btn-color-gray-700 btn-active-color-primary rotate fs-base"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"
                                data-kt-menu-offset="0px, 0px">
                                <img data-kt-element="current-lang-flag" class="w-20px h-20px rounded me-3"
                                    src="assets/media/flags/united-states.svg" alt="" />
                                <span data-kt-element="current-lang-name" class="me-1">English</span>
                                <i class="ki-outline ki-down fs-5 text-muted rotate-180 m-0"></i>
                            </button>
                            <!--end::Toggle-->
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4 fs-7"
                                data-kt-menu="true" id="kt_auth_lang_menu">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="{{ url('#') }}" class="menu-link d-flex px-5" data-kt-lang="English">
                                        <span class="symbol symbol-20px me-4">
                                            <img data-kt-element="lang-flag" class="rounded-1"
                                                src="assets/media/flags/united-states.svg" alt="" />
                                        </span>
                                        <span data-kt-element="lang-name">English</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="{{ url('#') }}" class="menu-link d-flex px-5" data-kt-lang="Spanish">
                                        <span class="symbol symbol-20px me-4">
                                            <img data-kt-element="lang-flag" class="rounded-1"
                                                src="assets/media/flags/spain.svg" alt="" />
                                        </span>
                                        <span data-kt-element="lang-name">Spanish</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="{{ url('#') }}" class="menu-link d-flex px-5" data-kt-lang="German">
                                        <span class="symbol symbol-20px me-4">
                                            <img data-kt-element="lang-flag" class="rounded-1"
                                                src="assets/media/flags/germany.svg" alt="" />
                                        </span>
                                        <span data-kt-element="lang-name">German</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="{{ url('#') }}" class="menu-link d-flex px-5" data-kt-lang="Japanese">
                                        <span class="symbol symbol-20px me-4">
                                            <img data-kt-element="lang-flag" class="rounded-1"
                                                src="assets/media/flags/japan.svg" alt="" />
                                        </span>
                                        <span data-kt-element="lang-name">Japanese</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="{{ url('#') }}" class="menu-link d-flex px-5" data-kt-lang="French">
                                        <span class="symbol symbol-20px me-4">
                                            <img data-kt-element="lang-flag" class="rounded-1"
                                                src="assets/media/flags/france.svg" alt="" />
                                        </span>
                                        <span data-kt-element="lang-name">French</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Languages-->
                        <!--begin::Links-->
                        <div class="d-flex fw-semibold text-primary fs-base gap-5">
                            <a href="{{ url('#') }}" target="_blank">Terms</a>
                            <a href="{{ url('#') }}" target="_blank">Contact Us</a>
                        </div>
                        <!--end::Links-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Body-->
    </div>

@endsection


@section('customScripts')

    <script src="{{ asset('assets/js/custom/authentication/sign-in/two-factor.js') }}"></script>

@endsection
