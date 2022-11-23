@extends('layouts.app2')


@section('css')
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    <link href="{{ asset('Datatable/css/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('Datatable/css/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('Datatable/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

    <body id="kt_body" style="overflow-y: hidden">


        <div class="page-title-box" style="padding: 15px">
            <div class="container-fluid">
                <div class="page-title dflex-between-center">
                    <h3 class="mb-1 font-weight-bold" style="font-size:50px ">Lista De Participantes</h3>
                    <ol class="breadcrumb mb-0 mt-1">
                        <li class="breadcrumb-item">
                            <a href="../index.html">
                                <i class="bx bx-home fs-xs"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('inicio') }}">
                                Inicio
                            </a>
                        </li>
                        <li class="breadcrumb-item active">Participantes</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

            <div class="container-xxl" id="kt_content_container">
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                            rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                        <path
                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <input type="text" data-kt-customer-table-filter="search"
                                    class="form-control form-control-solid w-250px ps-15" placeholder="Buscar" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                                <!--begin::Add customer-->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_add_customer">
                                    Añadir
                                </button>
                                <!--end::Add customer-->
                            </div>
                            <!--end::Toolbar-->
                            <!--begin::Group actions-->
                            <div class="d-flex justify-content-end align-items-center d-none"
                                data-kt-customer-table-toolbar="selected">
                                <div class="fw-bold me-5">
                                    <span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected
                                </div>
                                <button type="button" class="btn btn-danger"
                                    data-kt-customer-table-select="delete_selected">
                                    Delete Selected
                                </button>
                            </div>
                            <!--end::Group actions-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>


                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                data-kt-check-target="#kt_customers_table .form-check-input"
                                                value="1" />
                                        </div>
                                    </th>
                                    <th class="min-w-125px">#</th>
                                    <th class="min-w-125px">nombre</th>
                                    <th class="min-w-125px">carrera</th>
                                    <th class="min-w-125px">facultad</th>
                                    <th class="min-w-125px">Profesion</th>
                                    <th class="min-w-125px">Biografia</th>
                                    <th class="min-w-125px">Acciones</th>

                                </tr>
                                <!--end::Table row-->
                            </thead>

                            <tbody class="fw-semibold text-gray-600"
                                style="justify-content: center;align-items: center;align-self: center;">
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($partLocales as $partLocale)
                                    <tr>

                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox"
                                                    value="{{ $partLocale->id }}" />
                                            </div>
                                        </td>

                                        <td>
                                            <a href="/metronic8/demo3/../demo3/apps/customers/view.html"
                                                class="text-gray-800 text-hover-primary mb-1">{{ $i++ }}</a>
                                        </td>

                                        <td>
                                            <a href="#"
                                                class="text-gray-600 text-hover-primary mb-1">{{ $partLocale->nombre }}</a>
                                        </td>

                                        <td>{{ $partLocale->carrera }}</td>

                                        <td>
                                            {{ $partLocale->facultad }}
                                        </td>

                                        <td>{{ $partLocale->Profesion->nombre }}</td>
                                        <td>{{ $partLocale->biografia }}</td>

                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions

                                                <span class="svg-icon svg-icon-5 m-0">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>

                                            </a>

                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                data-kt-menu="true">

                                                {{--  <div class="menu-item px-3">
                                                    <a href="/metronic8/demo3/../demo3/apps/customers/view.html"
                                                        class="menu-link px-3">Ver</a>
                                                </div> --}}

                                                <div class="menu-item px-3">
                                                    <a href="{{ route('edit.Participante.Local', $partLocale->id) }}"
                                                        class="menu-link px-3">Editar</a>
                                                </div>
                                                <form action="{{ route('delete.Participante.Local', $partLocale->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="menu-item px-3">
                                                        <button type="submit" class="menu-link px-3 btn btn-outline"
                                                            data-kt-customer-table-filter="delete_row">Eliminar</button>
                                                    </div>
                                                </form>

                                            </div>

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>

                        </table>

                    </div>

                </div>
                <!--end::Card-->
                <!--begin::Modals-->
                <!--begin::Modal - Customers - Add-->
                <div class="modal fade" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Form-->
                            <form name="enviarFormulario" class="form"
                                action="{{ route('store.Participante.Local') }}" method="POST"
                                id="kt_modal_add_customer_form">

                                @csrf
                                @method('POST')

                                <!--begin::Modal header-->
                                <div class="modal-header" id="kt_modal_add_customer_header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bold">Añadir Participante</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div id="kt_modal_add_customer_close"
                                        class="btn btn-icon btn-sm btn-active-icon-primary">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                    height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                                    fill="currentColor" />
                                                <rect x="7.41422" y="6" width="16" height="2"
                                                    rx="1" transform="rotate(45 7.41422 6)"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body py-10 px-lg-17">
                                    <!--begin::Scroll-->
                                    <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll"
                                        data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                        data-kt-scroll-max-height="auto"
                                        data-kt-scroll-dependencies="#kt_modal_add_customer_header"
                                        data-kt-scroll-wrappers="#kt_modal_add_customer_scroll"
                                        data-kt-scroll-offset="300px">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">

                                            <label class="required fs-6 fw-semibold mb-2">Nombre</label>


                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="Docente/Estudiante" name="nombre" value="" />
                                            <!--end::Input-->

                                            <input type="hidden" name="institucion_id" value="{{ Auth::user()->id }}">
                                        </div>
                                        <div class="fv-row mb-7">

                                            <label class="required fs-6 fw-semibold mb-2">Carrera</label>


                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="Carrera" name="carrera" value="" />
                                            <!--end::Input-->

                                            <input type="hidden" name="institucion_id" value="{{ Auth::user()->id }}">
                                        </div>

                                        <div class="fv-row mb-15">

                                            <label class="fs-6 fw-semibold mb-2">Biografia</label>

                                            <textarea for="biografia" type="text" class="form-control form-control-solid" placeholder="Escriba aqui..."
                                                name="biografia"> </textarea>

                                        </div>


                                        <div class="fw-bold fs-3 rotate collapsible mb-7" data-bs-toggle="collapse"
                                            href="#kt_modal_add_customer_billing_info" role="button"
                                            aria-expanded="false" aria-controls="kt_customer_view_details">
                                            Más Detalles
                                            <span class="ms-2 rotate-180">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Billing toggle-->
                                        <!--begin::Billing form-->
                                        <div id="kt_modal_add_customer_billing_info" class="collapse show">




                                            <div class="d-flex flex-column mb-7 fv-row">

                                                <label class="required fs-6 fw-semibold mb-2">Facultad</label>

                                                <input class="form-control form-control-solid" placeholder="Facultad"
                                                    name="facultad" value="" />

                                            </div>


                                            <div class="d-flex flex-column mb-7 fv-row">

                                                <label class="fs-6 fw-semibold mb-2">
                                                    <span class="required">Profesión</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip" title="Seleccione una profesión"></i>
                                                </label>


                                                <select name="profesions_id" aria-label="Select a Country"
                                                    data-control="select2" data-placeholder="Seleccione una profesión"
                                                    data-dropdown-parent="#kt_modal_add_customer"
                                                    class="form-select form-select-solid fw-bold">
                                                    <option value="">Seleccione una profesión</option>

                                                    @foreach ($profesion as $profesiones)
                                                        <option value="{{ $profesiones->id }}">{{ $profesiones->nombre }}
                                                        </option>
                                                    @endforeach


                                                </select>
                                                <!--end::Input-->
                                            </div>



                                        </div>
                                    </div>
                                    <!--end::Scroll-->
                                </div>

                                <div class="modal-footer flex-center">
                                    <!--begin::Button-->
                                    <button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-light me-3">
                                        Cancelar
                                    </button>

                                    <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                                        <span class="indicator-label">Enviar</span>
                                        <span class="indicator-progress">Espere porfavor...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <!--end::Button-->
                                </div>
                                <!--end::Modal footer-->
                            </form>
                            <!--end::Form-->
                        </div>
                    </div>
                </div>
                <!--end::Modal - Customers - Add-->

            </div>



    </body>
@endsection
@section('js')
    <script>
        var hostUrl = "/metronic8/";
    </script>

    <script src="{{ asset('Datatable/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('Datatable/js/plugins.bundle.js') }}"></script>

    <script src="{{ asset('Datatable/js/datatables.bundle.js') }}"></script>


    <script src="{{ asset('Datatable/js/list.js') }}"></script>
    <script src="{{ asset('Datatable/js/add.js') }}"></script>
@endsection
