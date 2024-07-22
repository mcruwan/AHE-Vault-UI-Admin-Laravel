@extends ('layouts.admin')

@section('title', 'Add Institution')

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
                            Add Institution</h1>
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
                            <li class="breadcrumb-item text-muted">Institutions</li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Add Institution</li>
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
                    <!--begin::Form-->
                    <form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row"
                        data-kt-redirect="#">
                        <!--begin::Aside column-->
                        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                            <!--begin::Thumbnail settings-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Institution Logo</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body text-center pt-0">
                                    <!--begin::Image input-->
                                    <!--begin::Image input placeholder-->
                                    <style>
                                        .image-input-placeholder {
                                            background-image: url('assets/media/svg/files/blank-image.svg');
                                        }

                                        [data-bs-theme="dark"] .image-input-placeholder {
                                            background-image: url('assets/media/svg/files/blank-image-dark.svg');
                                        }
                                    </style>
                                    <!--end::Image input placeholder-->
                                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                                        data-kt-image-input="true">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-150px h-150px"></div>
                                        <!--end::Preview existing avatar-->
                                        <!--begin::Label-->
                                        <label
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                            title="Change avatar">
                                            <i class="ki-outline ki-pencil fs-7"></i>
                                            <!--begin::Inputs-->
                                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                            <input type="hidden" name="avatar_remove" />
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Cancel-->
                                        <span
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                            title="Cancel avatar">
                                            <i class="ki-outline ki-cross fs-2"></i>
                                        </span>
                                        <!--end::Cancel-->
                                        <!--begin::Remove-->
                                        <span
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                            title="Remove avatar">
                                            <i class="ki-outline ki-cross fs-2"></i>
                                        </span>
                                        <!--end::Remove-->
                                    </div>
                                    <!--end::Image input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set the institution thumbnail image. Only *.png, *.jpg and
                                        *.jpeg image files are accepted</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Thumbnail settings-->
                            <!--begin::Status-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Status</h2>
                                    </div>
                                    <!--end::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <div class="rounded-circle bg-success w-15px h-15px"
                                            id="kt_ecommerce_add_product_status"></div>
                                    </div>
                                    <!--begin::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Select2-->
                                    <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                        data-placeholder="Select an option" id="kt_ecommerce_add_product_status_select">
                                        <option></option>
                                        <option value="Active" selected="selected">Active</option>
                                        <option value="draft">Draft</option>
                                        <option value="Disabled">Disabled</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                    <!--end::Select2-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set the institution status.</div>
                                    <!--end::Description-->
                                    <!--begin::Datepicker-->
                                    <div class="d-none mt-10">
                                        <label for="kt_ecommerce_add_product_status_datepicker" class="form-label">Select
                                            publishing date and time</label>
                                        <input class="form-control" id="kt_ecommerce_add_product_status_datepicker"
                                            placeholder="Pick date & time" />
                                    </div>
                                    <!--end::Datepicker-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Status-->
                            <!--begin::Category & tags-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Institution Type</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Input group-->
                                    <!--begin::Label-->
                                    <label class="form-label">Categories</label>
                                    <!--end::Label-->
                                    <!--begin::Select2-->
                                    <select class="form-select mb-2" data-control="select2"
                                        data-placeholder="Select an option" data-allow-clear="true" multiple="multiple">
                                        <option></option>
                                        <option value="Public">Public</option>
                                        <option value="Private">Private</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <!--end::Select2-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7 mb-7">Add institution to a category.</div>
                                    <!--end::Description-->
                                    <!--end::Input group-->
                                    <!--begin::Button-->
                                    <a href="{{ url('#') }}" class="btn btn-light-primary btn-sm mb-10">
                                        <i class="ki-outline ki-plus fs-2"></i>Create new category</a>
                                    <!--end::Button-->
                                    <!--begin::Input group-->
                                    <!--begin::Label-->
                                    <label class="form-label d-block">Tags</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input id="kt_ecommerce_add_product_tags" name="kt_ecommerce_add_product_tags"
                                        class="form-control mb-2" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Add tags to a institution.</div>
                                    <!--end::Description-->
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Category & tags-->
                        </div>
                        <!--end::Aside column-->
                        <!--begin::Main column-->
                        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                            <!--begin:::Tabs-->
                            <ul
                                class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                                <!--begin:::Tab item-->
                                <li class="nav-item">
                                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                        href="#kt_ecommerce_add_product_general">General</a>
                                </li>
                                <!--end:::Tab item-->
                            </ul>
                            <!--end:::Tabs-->
                            <!--begin::Tab content-->
                            <div class="tab-content">
                                <!--begin::Tab pane-->
                                <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general"
                                    role="tab-panel">
                                    <div class="d-flex flex-column gap-7 gap-lg-10">
                                        <!--begin::General options-->
                                        <div class="card card-flush py-4">
                                            <!--begin::Card header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h2>Institutional Information</h2>
                                                </div>
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body pt-0">
                                                <div class="row mb-6">
                                                    <!--begin::Label-->
                                                    <label
                                                        class="col-lg-4 col-form-label required fw-semibold fs-6">Institution
                                                        name</label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8">
                                                        <!--begin::Row-->
                                                        <div class="row">
                                                            <div class="fv-row">
                                                                <input type="text" name="fname"
                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                    placeholder="University name" />
                                                            </div>
                                                        </div>
                                                        <!--end::Row-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <div class="row mb-6">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                                        <span class="required">Location of the institution</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Country of university">
                                                            <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                                        </span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8">
                                                        <div class="row">
                                                            <div class="fv-row">
                                                                <select name="country" aria-label="Select a Location"
                                                                    data-control="select2"
                                                                    data-placeholder="Select a Location..."
                                                                    class="form-select form-select-solid form-select-lg fw-semibold">
                                                                    <option>Select a Country...</option>
                                                                    <option data-kt-flag="flags/afghanistan.svg"
                                                                        value="AF">Afghanistan</option>
                                                                    <option data-kt-flag="flags/aland-islands.svg"
                                                                        value="AX">Aland Islands</option>
                                                                    <option data-kt-flag="flags/albania.svg"
                                                                        value="AL">Albania</option>
                                                                    <option data-kt-flag="flags/algeria.svg"
                                                                        value="DZ">Algeria</option>
                                                                    <option data-kt-flag="flags/american-samoa.svg"
                                                                        value="AS">American Samoa</option>
                                                                    <option data-kt-flag="flags/andorra.svg"
                                                                        value="AD">Andorra</option>
                                                                    <option data-kt-flag="flags/angola.svg"
                                                                        value="AO">Angola</option>
                                                                    <option data-kt-flag="flags/anguilla.svg"
                                                                        value="AI">Anguilla</option>
                                                                    <option data-kt-flag="flags/antigua-and-barbuda.svg"
                                                                        value="AG">Antigua and Barbuda</option>
                                                                    <option data-kt-flag="flags/argentina.svg"
                                                                        value="AR">Argentina</option>
                                                                    <option data-kt-flag="flags/armenia.svg"
                                                                        value="AM">Armenia</option>
                                                                    <option data-kt-flag="flags/aruba.svg" value="AW">
                                                                        Aruba</option>
                                                                    <option data-kt-flag="flags/australia.svg"
                                                                        value="AU">Australia</option>
                                                                    <option data-kt-flag="flags/austria.svg"
                                                                        value="AT">Austria</option>
                                                                    <option data-kt-flag="flags/azerbaijan.svg"
                                                                        value="AZ">Azerbaijan</option>
                                                                    <option data-kt-flag="flags/bahamas.svg"
                                                                        value="BS">Bahamas</option>
                                                                    <option data-kt-flag="flags/bahrain.svg"
                                                                        value="BH">Bahrain</option>
                                                                    <option data-kt-flag="flags/bangladesh.svg"
                                                                        value="BD">Bangladesh</option>
                                                                    <option data-kt-flag="flags/barbados.svg"
                                                                        value="BB">Barbados</option>
                                                                    <option data-kt-flag="flags/belarus.svg"
                                                                        value="BY">Belarus</option>
                                                                    <option data-kt-flag="flags/belgium.svg"
                                                                        value="BE">Belgium</option>
                                                                    <option data-kt-flag="flags/belize.svg"
                                                                        value="BZ">Belize</option>
                                                                    <option data-kt-flag="flags/benin.svg" value="BJ">
                                                                        Benin</option>
                                                                    <option data-kt-flag="flags/bermuda.svg"
                                                                        value="BM">Bermuda</option>
                                                                    <option data-kt-flag="flags/bhutan.svg"
                                                                        value="BT">Bhutan</option>
                                                                    <option data-kt-flag="flags/bolivia.svg"
                                                                        value="BO">Bolivia, Plurinational State of
                                                                    </option>
                                                                    <option data-kt-flag="flags/bonaire.svg"
                                                                        value="BQ">Bonaire, Sint Eustatius and Saba
                                                                    </option>
                                                                    <option data-kt-flag="flags/bosnia-and-herzegovina.svg"
                                                                        value="BA">Bosnia and Herzegovina</option>
                                                                    <option data-kt-flag="flags/botswana.svg"
                                                                        value="BW">Botswana</option>
                                                                    <option data-kt-flag="flags/brazil.svg"
                                                                        value="BR">Brazil</option>
                                                                    <option
                                                                        data-kt-flag="flags/british-indian-ocean-territory.svg"
                                                                        value="IO">British Indian Ocean Territory
                                                                    </option>
                                                                    <option data-kt-flag="flags/brunei.svg"
                                                                        value="BN">Brunei Darussalam</option>
                                                                    <option data-kt-flag="flags/bulgaria.svg"
                                                                        value="BG">Bulgaria</option>
                                                                    <option data-kt-flag="flags/burkina-faso.svg"
                                                                        value="BF">Burkina Faso</option>
                                                                    <option data-kt-flag="flags/burundi.svg"
                                                                        value="BI">Burundi</option>
                                                                    <option data-kt-flag="flags/cambodia.svg"
                                                                        value="KH">Cambodia</option>
                                                                    <option data-kt-flag="flags/cameroon.svg"
                                                                        value="CM">Cameroon</option>
                                                                    <option data-kt-flag="flags/canada.svg"
                                                                        value="CA">Canada</option>
                                                                    <option data-kt-flag="flags/cape-verde.svg"
                                                                        value="CV">Cape Verde</option>
                                                                    <option data-kt-flag="flags/cayman-islands.svg"
                                                                        value="KY">Cayman Islands</option>
                                                                    <option
                                                                        data-kt-flag="flags/central-african-republic.svg"
                                                                        value="CF">Central African Republic</option>
                                                                    <option data-kt-flag="flags/chad.svg" value="TD">
                                                                        Chad</option>
                                                                    <option data-kt-flag="flags/chile.svg" value="CL">
                                                                        Chile</option>
                                                                    <option data-kt-flag="flags/china.svg" value="CN">
                                                                        China</option>
                                                                    <option data-kt-flag="flags/christmas-island.svg"
                                                                        value="CX">Christmas Island</option>
                                                                    <option data-kt-flag="flags/cocos-island.svg"
                                                                        value="CC">Cocos (Keeling) Islands</option>
                                                                    <option data-kt-flag="flags/colombia.svg"
                                                                        value="CO">Colombia</option>
                                                                    <option data-kt-flag="flags/comoros.svg"
                                                                        value="KM">Comoros</option>
                                                                    <option data-kt-flag="flags/cook-islands.svg"
                                                                        value="CK">Cook Islands</option>
                                                                    <option data-kt-flag="flags/costa-rica.svg"
                                                                        value="CR">Costa Rica</option>
                                                                    <option data-kt-flag="flags/ivory-coast.svg"
                                                                        value="CI">Côte d'Ivoire</option>
                                                                    <option data-kt-flag="flags/croatia.svg"
                                                                        value="HR">Croatia</option>
                                                                    <option data-kt-flag="flags/cuba.svg" value="CU">
                                                                        Cuba</option>
                                                                    <option data-kt-flag="flags/curacao.svg"
                                                                        value="CW">Curaçao</option>
                                                                    <option data-kt-flag="flags/czech-republic.svg"
                                                                        value="CZ">Czech Republic</option>
                                                                    <option data-kt-flag="flags/denmark.svg"
                                                                        value="DK">Denmark</option>
                                                                    <option data-kt-flag="flags/djibouti.svg"
                                                                        value="DJ">Djibouti</option>
                                                                    <option data-kt-flag="flags/dominica.svg"
                                                                        value="DM">Dominica</option>
                                                                    <option data-kt-flag="flags/dominican-republic.svg"
                                                                        value="DO">Dominican Republic</option>
                                                                    <option data-kt-flag="flags/ecuador.svg"
                                                                        value="EC">Ecuador</option>
                                                                    <option data-kt-flag="flags/egypt.svg" value="EG">
                                                                        Egypt</option>
                                                                    <option data-kt-flag="flags/el-salvador.svg"
                                                                        value="SV">El Salvador</option>
                                                                    <option data-kt-flag="flags/equatorial-guinea.svg"
                                                                        value="GQ">Equatorial Guinea</option>
                                                                    <option data-kt-flag="flags/eritrea.svg"
                                                                        value="ER">Eritrea</option>
                                                                    <option data-kt-flag="flags/estonia.svg"
                                                                        value="EE">Estonia</option>
                                                                    <option data-kt-flag="flags/ethiopia.svg"
                                                                        value="ET">Ethiopia</option>
                                                                    <option data-kt-flag="flags/falkland-islands.svg"
                                                                        value="FK">Falkland Islands (Malvinas)</option>
                                                                    <option data-kt-flag="flags/fiji.svg" value="FJ">
                                                                        Fiji</option>
                                                                    <option data-kt-flag="flags/finland.svg"
                                                                        value="FI">Finland</option>
                                                                    <option data-kt-flag="flags/france.svg"
                                                                        value="FR">France</option>
                                                                    <option data-kt-flag="flags/french-polynesia.svg"
                                                                        value="PF">French Polynesia</option>
                                                                    <option data-kt-flag="flags/gabon.svg" value="GA">
                                                                        Gabon</option>
                                                                    <option data-kt-flag="flags/gambia.svg"
                                                                        value="GM">Gambia</option>
                                                                    <option data-kt-flag="flags/georgia.svg"
                                                                        value="GE">Georgia</option>
                                                                    <option data-kt-flag="flags/germany.svg"
                                                                        value="DE">Germany</option>
                                                                    <option data-kt-flag="flags/ghana.svg" value="GH">
                                                                        Ghana</option>
                                                                    <option data-kt-flag="flags/gibraltar.svg"
                                                                        value="GI">Gibraltar</option>
                                                                    <option data-kt-flag="flags/greece.svg"
                                                                        value="GR">Greece</option>
                                                                    <option data-kt-flag="flags/greenland.svg"
                                                                        value="GL">Greenland</option>
                                                                    <option data-kt-flag="flags/grenada.svg"
                                                                        value="GD">Grenada</option>
                                                                    <option data-kt-flag="flags/guam.svg" value="GU">
                                                                        Guam</option>
                                                                    <option data-kt-flag="flags/guatemala.svg"
                                                                        value="GT">Guatemala</option>
                                                                    <option data-kt-flag="flags/guernsey.svg"
                                                                        value="GG">Guernsey</option>
                                                                    <option data-kt-flag="flags/guinea.svg"
                                                                        value="GN">Guinea</option>
                                                                    <option data-kt-flag="flags/guinea-bissau.svg"
                                                                        value="GW">Guinea-Bissau</option>
                                                                    <option data-kt-flag="flags/haiti.svg" value="HT">
                                                                        Haiti</option>
                                                                    <option data-kt-flag="flags/vatican-city.svg"
                                                                        value="VA">Holy See (Vatican City State)
                                                                    </option>
                                                                    <option data-kt-flag="flags/honduras.svg"
                                                                        value="HN">Honduras</option>
                                                                    <option data-kt-flag="flags/hong-kong.svg"
                                                                        value="HK">Hong Kong</option>
                                                                    <option data-kt-flag="flags/hungary.svg"
                                                                        value="HU">Hungary</option>
                                                                    <option data-kt-flag="flags/iceland.svg"
                                                                        value="IS">Iceland</option>
                                                                    <option data-kt-flag="flags/india.svg" value="IN">
                                                                        India</option>
                                                                    <option data-kt-flag="flags/indonesia.svg"
                                                                        value="ID">Indonesia</option>
                                                                    <option data-kt-flag="flags/iran.svg" value="IR">
                                                                        Iran, Islamic Republic of</option>
                                                                    <option data-kt-flag="flags/iraq.svg" value="IQ">
                                                                        Iraq</option>
                                                                    <option data-kt-flag="flags/ireland.svg"
                                                                        value="IE">Ireland</option>
                                                                    <option data-kt-flag="flags/isle-of-man.svg"
                                                                        value="IM">Isle of Man</option>
                                                                    <option data-kt-flag="flags/israel.svg"
                                                                        value="IL">Israel</option>
                                                                    <option data-kt-flag="flags/italy.svg" value="IT">
                                                                        Italy</option>
                                                                    <option data-kt-flag="flags/jamaica.svg"
                                                                        value="JM">Jamaica</option>
                                                                    <option data-kt-flag="flags/japan.svg" value="JP">
                                                                        Japan</option>
                                                                    <option data-kt-flag="flags/jersey.svg"
                                                                        value="JE">Jersey</option>
                                                                    <option data-kt-flag="flags/jordan.svg"
                                                                        value="JO">Jordan</option>
                                                                    <option data-kt-flag="flags/kazakhstan.svg"
                                                                        value="KZ">Kazakhstan</option>
                                                                    <option data-kt-flag="flags/kenya.svg" value="KE">
                                                                        Kenya</option>
                                                                    <option data-kt-flag="flags/kiribati.svg"
                                                                        value="KI">Kiribati</option>
                                                                    <option data-kt-flag="flags/north-korea.svg"
                                                                        value="KP">Korea, Democratic People's Republic
                                                                        of</option>
                                                                    <option data-kt-flag="flags/kuwait.svg"
                                                                        value="KW">Kuwait</option>
                                                                    <option data-kt-flag="flags/kyrgyzstan.svg"
                                                                        value="KG">Kyrgyzstan</option>
                                                                    <option data-kt-flag="flags/laos.svg" value="LA">
                                                                        Lao People's Democratic Republic</option>
                                                                    <option data-kt-flag="flags/latvia.svg"
                                                                        value="LV">Latvia</option>
                                                                    <option data-kt-flag="flags/lebanon.svg"
                                                                        value="LB">Lebanon</option>
                                                                    <option data-kt-flag="flags/lesotho.svg"
                                                                        value="LS">Lesotho</option>
                                                                    <option data-kt-flag="flags/liberia.svg"
                                                                        value="LR">Liberia</option>
                                                                    <option data-kt-flag="flags/libya.svg" value="LY">
                                                                        Libya</option>
                                                                    <option data-kt-flag="flags/liechtenstein.svg"
                                                                        value="LI">Liechtenstein</option>
                                                                    <option data-kt-flag="flags/lithuania.svg"
                                                                        value="LT">Lithuania</option>
                                                                    <option data-kt-flag="flags/luxembourg.svg"
                                                                        value="LU">Luxembourg</option>
                                                                    <option data-kt-flag="flags/macao.svg" value="MO">
                                                                        Macao</option>
                                                                    <option data-kt-flag="flags/madagascar.svg"
                                                                        value="MG">Madagascar</option>
                                                                    <option data-kt-flag="flags/malawi.svg"
                                                                        value="MW">Malawi</option>
                                                                    <option data-kt-flag="flags/malaysia.svg"
                                                                        value="MY">Malaysia</option>
                                                                    <option data-kt-flag="flags/maldives.svg"
                                                                        value="MV">Maldives</option>
                                                                    <option data-kt-flag="flags/mali.svg" value="ML">
                                                                        Mali</option>
                                                                    <option data-kt-flag="flags/malta.svg" value="MT">
                                                                        Malta</option>
                                                                    <option data-kt-flag="flags/marshall-island.svg"
                                                                        value="MH">Marshall Islands</option>
                                                                    <option data-kt-flag="flags/martinique.svg"
                                                                        value="MQ">Martinique</option>
                                                                    <option data-kt-flag="flags/mauritania.svg"
                                                                        value="MR">Mauritania</option>
                                                                    <option data-kt-flag="flags/mauritius.svg"
                                                                        value="MU">Mauritius</option>
                                                                    <option data-kt-flag="flags/mexico.svg"
                                                                        value="MX">Mexico</option>
                                                                    <option data-kt-flag="flags/micronesia.svg"
                                                                        value="FM">Micronesia, Federated States of
                                                                    </option>
                                                                    <option data-kt-flag="flags/moldova.svg"
                                                                        value="MD">Moldova, Republic of</option>
                                                                    <option data-kt-flag="flags/monaco.svg"
                                                                        value="MC">Monaco</option>
                                                                    <option data-kt-flag="flags/mongolia.svg"
                                                                        value="MN">Mongolia</option>
                                                                    <option data-kt-flag="flags/montenegro.svg"
                                                                        value="ME">Montenegro</option>
                                                                    <option data-kt-flag="flags/montserrat.svg"
                                                                        value="MS">Montserrat</option>
                                                                    <option data-kt-flag="flags/morocco.svg"
                                                                        value="MA">Morocco</option>
                                                                    <option data-kt-flag="flags/mozambique.svg"
                                                                        value="MZ">Mozambique</option>
                                                                    <option data-kt-flag="flags/myanmar.svg"
                                                                        value="MM">Myanmar</option>
                                                                    <option data-kt-flag="flags/namibia.svg"
                                                                        value="NA">Namibia</option>
                                                                    <option data-kt-flag="flags/nauru.svg" value="NR">
                                                                        Nauru</option>
                                                                    <option data-kt-flag="flags/nepal.svg" value="NP">
                                                                        Nepal</option>
                                                                    <option data-kt-flag="flags/netherlands.svg"
                                                                        value="NL">Netherlands</option>
                                                                    <option data-kt-flag="flags/new-zealand.svg"
                                                                        value="NZ">New Zealand</option>
                                                                    <option data-kt-flag="flags/nicaragua.svg"
                                                                        value="NI">Nicaragua</option>
                                                                    <option data-kt-flag="flags/niger.svg" value="NE">
                                                                        Niger</option>
                                                                    <option data-kt-flag="flags/nigeria.svg"
                                                                        value="NG">Nigeria</option>
                                                                    <option data-kt-flag="flags/niue.svg" value="NU">
                                                                        Niue</option>
                                                                    <option data-kt-flag="flags/norfolk-island.svg"
                                                                        value="NF">Norfolk Island</option>
                                                                    <option
                                                                        data-kt-flag="flags/northern-mariana-islands.svg"
                                                                        value="MP">Northern Mariana Islands</option>
                                                                    <option data-kt-flag="flags/norway.svg"
                                                                        value="NO">Norway</option>
                                                                    <option data-kt-flag="flags/oman.svg" value="OM">
                                                                        Oman</option>
                                                                    <option data-kt-flag="flags/pakistan.svg"
                                                                        value="PK">Pakistan</option>
                                                                    <option data-kt-flag="flags/palau.svg" value="PW">
                                                                        Palau</option>
                                                                    <option data-kt-flag="flags/palestine.svg"
                                                                        value="PS">Palestinian Territory, Occupied
                                                                    </option>
                                                                    <option data-kt-flag="flags/panama.svg"
                                                                        value="PA">Panama</option>
                                                                    <option data-kt-flag="flags/papua-new-guinea.svg"
                                                                        value="PG">Papua New Guinea</option>
                                                                    <option data-kt-flag="flags/paraguay.svg"
                                                                        value="PY">Paraguay</option>
                                                                    <option data-kt-flag="flags/peru.svg" value="PE">
                                                                        Peru</option>
                                                                    <option data-kt-flag="flags/philippines.svg"
                                                                        value="PH">Philippines</option>
                                                                    <option data-kt-flag="flags/poland.svg"
                                                                        value="PL">Poland</option>
                                                                    <option data-kt-flag="flags/portugal.svg"
                                                                        value="PT">Portugal</option>
                                                                    <option data-kt-flag="flags/puerto-rico.svg"
                                                                        value="PR">Puerto Rico</option>
                                                                    <option data-kt-flag="flags/qatar.svg" value="QA">
                                                                        Qatar</option>
                                                                    <option data-kt-flag="flags/romania.svg"
                                                                        value="RO">Romania</option>
                                                                    <option data-kt-flag="flags/russia.svg"
                                                                        value="RU">Russian Federation</option>
                                                                    <option data-kt-flag="flags/rwanda.svg"
                                                                        value="RW">Rwanda</option>
                                                                    <option data-kt-flag="flags/st-barts.svg"
                                                                        value="BL">Saint Barthélemy</option>
                                                                    <option data-kt-flag="flags/saint-kitts-and-nevis.svg"
                                                                        value="KN">Saint Kitts and Nevis</option>
                                                                    <option data-kt-flag="flags/st-lucia.svg"
                                                                        value="LC">Saint Lucia</option>
                                                                    <option data-kt-flag="flags/sint-maarten.svg"
                                                                        value="MF">Saint Martin (French part)</option>
                                                                    <option
                                                                        data-kt-flag="flags/st-vincent-and-the-grenadines.svg"
                                                                        value="VC">Saint Vincent and the Grenadines
                                                                    </option>
                                                                    <option data-kt-flag="flags/samoa.svg" value="WS">
                                                                        Samoa</option>
                                                                    <option data-kt-flag="flags/san-marino.svg"
                                                                        value="SM">San Marino</option>
                                                                    <option data-kt-flag="flags/sao-tome-and-prince.svg"
                                                                        value="ST">Sao Tome and Principe</option>
                                                                    <option data-kt-flag="flags/saudi-arabia.svg"
                                                                        value="SA">Saudi Arabia</option>
                                                                    <option data-kt-flag="flags/senegal.svg"
                                                                        value="SN">Senegal</option>
                                                                    <option data-kt-flag="flags/serbia.svg"
                                                                        value="RS">Serbia</option>
                                                                    <option data-kt-flag="flags/seychelles.svg"
                                                                        value="SC">Seychelles</option>
                                                                    <option data-kt-flag="flags/sierra-leone.svg"
                                                                        value="SL">Sierra Leone</option>
                                                                    <option data-kt-flag="flags/singapore.svg"
                                                                        value="SG">Singapore</option>
                                                                    <option data-kt-flag="flags/sint-maarten.svg"
                                                                        value="SX">Sint Maarten (Dutch part)</option>
                                                                    <option data-kt-flag="flags/slovakia.svg"
                                                                        value="SK">Slovakia</option>
                                                                    <option data-kt-flag="flags/slovenia.svg"
                                                                        value="SI">Slovenia</option>
                                                                    <option data-kt-flag="flags/solomon-islands.svg"
                                                                        value="SB">Solomon Islands</option>
                                                                    <option data-kt-flag="flags/somalia.svg"
                                                                        value="SO">Somalia</option>
                                                                    <option data-kt-flag="flags/south-africa.svg"
                                                                        value="ZA">South Africa</option>
                                                                    <option data-kt-flag="flags/south-korea.svg"
                                                                        value="KR">South Korea</option>
                                                                    <option data-kt-flag="flags/south-sudan.svg"
                                                                        value="SS">South Sudan</option>
                                                                    <option data-kt-flag="flags/spain.svg" value="ES">
                                                                        Spain</option>
                                                                    <option data-kt-flag="flags/sri-lanka.svg"
                                                                        value="LK">Sri Lanka</option>
                                                                    <option data-kt-flag="flags/sudan.svg" value="SD">
                                                                        Sudan</option>
                                                                    <option data-kt-flag="flags/suriname.svg"
                                                                        value="SR">Suriname</option>
                                                                    <option data-kt-flag="flags/swaziland.svg"
                                                                        value="SZ">Swaziland</option>
                                                                    <option data-kt-flag="flags/sweden.svg"
                                                                        value="SE">Sweden</option>
                                                                    <option data-kt-flag="flags/switzerland.svg"
                                                                        value="CH">Switzerland</option>
                                                                    <option data-kt-flag="flags/syria.svg" value="SY">
                                                                        Syrian Arab Republic</option>
                                                                    <option data-kt-flag="flags/taiwan.svg"
                                                                        value="TW">Taiwan, Province of China</option>
                                                                    <option data-kt-flag="flags/tajikistan.svg"
                                                                        value="TJ">Tajikistan</option>
                                                                    <option data-kt-flag="flags/tanzania.svg"
                                                                        value="TZ">Tanzania, United Republic of
                                                                    </option>
                                                                    <option data-kt-flag="flags/thailand.svg"
                                                                        value="TH">Thailand</option>
                                                                    <option data-kt-flag="flags/togo.svg" value="TG">
                                                                        Togo</option>
                                                                    <option data-kt-flag="flags/tokelau.svg"
                                                                        value="TK">Tokelau</option>
                                                                    <option data-kt-flag="flags/tonga.svg" value="TO">
                                                                        Tonga</option>
                                                                    <option data-kt-flag="flags/trinidad-and-tobago.svg"
                                                                        value="TT">Trinidad and Tobago</option>
                                                                    <option data-kt-flag="flags/tunisia.svg"
                                                                        value="TN">Tunisia</option>
                                                                    <option data-kt-flag="flags/turkey.svg"
                                                                        value="TR">Turkey</option>
                                                                    <option data-kt-flag="flags/turkmenistan.svg"
                                                                        value="TM">Turkmenistan</option>
                                                                    <option data-kt-flag="flags/turks-and-caicos.svg"
                                                                        value="TC">Turks and Caicos Islands</option>
                                                                    <option data-kt-flag="flags/tuvalu.svg"
                                                                        value="TV">Tuvalu</option>
                                                                    <option data-kt-flag="flags/uganda.svg"
                                                                        value="UG">Uganda</option>
                                                                    <option data-kt-flag="flags/ukraine.svg"
                                                                        value="UA">Ukraine</option>
                                                                    <option data-kt-flag="flags/united-arab-emirates.svg"
                                                                        value="AE">United Arab Emirates</option>
                                                                    <option data-kt-flag="flags/united-kingdom.svg"
                                                                        value="GB">United Kingdom</option>
                                                                    <option data-kt-flag="flags/united-states.svg"
                                                                        value="US">United States</option>
                                                                    <option data-kt-flag="flags/uruguay.svg"
                                                                        value="UY">Uruguay</option>
                                                                    <option data-kt-flag="flags/uzbekistan.svg"
                                                                        value="UZ">Uzbekistan</option>
                                                                    <option data-kt-flag="flags/vanuatu.svg"
                                                                        value="VU">Vanuatu</option>
                                                                    <option data-kt-flag="flags/venezuela.svg"
                                                                        value="VE">Venezuela, Bolivarian Republic of
                                                                    </option>
                                                                    <option data-kt-flag="flags/vietnam.svg"
                                                                        value="VN">Vietnam</option>
                                                                    <option data-kt-flag="flags/virgin-islands.svg"
                                                                        value="VI">Virgin Islands</option>
                                                                    <option data-kt-flag="flags/yemen.svg" value="YE">
                                                                        Yemen</option>
                                                                    <option data-kt-flag="flags/zambia.svg"
                                                                        value="ZM">Zambia</option>
                                                                    <option data-kt-flag="flags/zimbabwe.svg"
                                                                        value="ZW">Zimbabwe</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <div class="row mb-6">
                                                    <!--begin::Label-->
                                                    <label
                                                        class="col-lg-4 col-form-label required fw-semibold fs-6">Official
                                                        website</label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8">
                                                        <!--begin::Row-->
                                                        <div class="row">
                                                            <div class="fv-row">
                                                                <input type="url" name="fname"
                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                    placeholder="University Website Link" />
                                                            </div>
                                                        </div>
                                                        <!--end::Row-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <div class="row mb-6">
                                                    <!--begin::Label-->
                                                    <label
                                                        class="col-lg-4 col-form-label required fw-semibold fs-6">Institutional
                                                        recognition</label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8">
                                                        <!--begin::Row-->
                                                        <div class="row">
                                                            <div class="fv-row">
                                                                <select name="institutional-recognition"
                                                                    class="form-select form-select-solid form-select-lg fw-semibold">
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!--end::Row-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <div class="row mb-6">
                                                    <!--begin::Label-->
                                                    <label
                                                        class="col-lg-4 col-form-label required fw-semibold fs-6">Official
                                                        web domain for faculty email</label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8">
                                                        <!--begin::Row-->
                                                        <div class="row">
                                                            <div class="fv-row">
                                                                <input type="email" name="fname"
                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                    placeholder="Official web domain for faculty email" />
                                                            </div>
                                                        </div>
                                                        <!--end::Row-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <div class="row mb-6">
                                                    <!--begin::Label-->
                                                    <label
                                                        class="col-lg-4 col-form-label required fw-semibold fs-6">Institution
                                                        name in other languages</label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8">
                                                        <!--begin::Row-->
                                                        <div class="row">
                                                            <div class="fv-row">
                                                                <input type="text" name="fname"
                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                    placeholder="Institution name in other languages" />
                                                            </div>
                                                        </div>
                                                        <!--end::Row-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <div class="row mb-6">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Google
                                                        Scholar profile</label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8">
                                                        <!--begin::Row-->
                                                        <div class="row">
                                                            <div class="fv-row">
                                                                <input type="url" name="fname"
                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                    placeholder="Google Scholar profile" />
                                                            </div>
                                                        </div>
                                                        <!--end::Row-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                            </div>
                                            <!--end::Card header-->
                                        </div>
                                        <!--end::General options-->
                                    </div>
                                </div>
                                <!--end::Tab pane-->
                            </div>
                            <!--end::Tab content-->
                            <div class="d-flex justify-content-end">
                                <!--begin::Button-->
                                <a href="{{ url('#') }}" id="kt_ecommerce_add_product_cancel"
                                    class="btn btn-light me-5">Cancel</a>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                                    <span class="indicator-label">Save Changes</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Button-->
                            </div>
                        </div>
                        <!--end::Main column-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
    </div>

@endsection
