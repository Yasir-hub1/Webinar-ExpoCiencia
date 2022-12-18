@extends('layouts.app2')

@section('css')
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />


    {{-- <link href="{{ asset('Datatable/css/datatables.bundle.css') }}" rel="stylesheet" type="text/css" /> --}}

    <link href="{{ asset('Datatable/css/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('Datatable/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="page-title dflex-between-center">
                <h3 class="mb-1 font-weight-bold">Mis Seminarios</h3>
                <ol class="breadcrumb mb-0 mt-1">
                    <li class="breadcrumb-item">
                        <a href="../index.html">
                            <i class="bx bx-home fs-xs"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="calender.html">
                            Inicio
                        </a>
                    </li>
                    <li class="breadcrumb-item active">Seminario</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- page content -->
    <div class="page-content-wrapper mt--45">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <!-- cta -->
                    <div class="row">
                        <div class="col-sm-8">
                            <a href="project-create.html" class="btn btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_add_customer" data-kt-customer-table-toolbar="base">
                                <i class="bx bx-plus bx-flashing mr-1"></i>Agregar Seminario
                            </a>
                            {{--  <div class="btn-group mt-2 mt-sm-0 ml-sm-1 mx-sm-2">
                                <button type="button" class="btn btn-info waves-effect waves-float">All</button>
                                <button type="button"
                                    class="btn btn-outline-info waves-effect waves-float">Ongoing</button>
                                <button type="button"
                                    class="btn btn-outline-info waves-effect waves-float">Finished</button>
                            </div> --}}
                        </div>
                        <div class="col-sm-4">
                            <form class="float-sm-right mt-3 mt-sm-0">
                                <div class="search-box">
                                    <div class="position-relative">
                                        <input type="text" placeholder="Search Project..."
                                            class="form-control form-control-sm">
                                        <i class="bx bx-search icon"></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                @forelse ($seminario as $seminarios)
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="avatar bg-soft-success text-success">
                                    AG
                                </div>
                                <div class="media-body overflow-hidden">
                                    <h5 class="card-title mb-2 pr-4 text-truncate"><a href="#" class="text-dark"
                                            title={{$seminarios->titulo}}>{{$seminarios->titulo}}</a></h5>
                                    <p class="text-muted mb-3">{{$seminarios->descripcion}}</p>
                                    <div class="circle-condense-profiles">
                                       @foreach ($seminarios->Invitados as $invi)


                                        <a href="javascript: void(0);" class="condense-profile" data-toggle="tooltip"
                                            data-placement="top" title="" data-original-title={{$invi->nombre}}>
                                            <img src="{{asset('image/participantes/invitados/'.$invi->foto)}}" alt="Lettstart Admin"
                                                class="avatar-sm rounded-circle">
                                        </a>

                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body border-top">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <h5 class="font-size-14 mb-0" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Fecha de inicio">
                                                <i class="bx bxs-timer fs-sm text-secondary op-6 align-middle"></i>
                                                <span class="align-middle">{{$seminarios->fecha}}</span>
                                            </h5>
                                        </li>
                                        <li class="list-inline-item">
                                            <h5 class="font-size-14 mb-0" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Tiempo">
                                                <i class="bx bxs-time fs-sm text-secondary op-6 align-middle"></i>
                                                <span class="align-middle">{{$seminarios->duracion}}</span>
                                            </h5>
                                        </li>
                                    </ul>
                                </div>
                                @if ($seminarios->estado==1)
                                <div class="col pl-2">
                                <a href="{{route('estado.Seminario',["seminario_id"=>$seminarios->id,"valor"=>0])}}" class="badge badge-success float-right" >Completed</a>
                                 </div>
                                @else
                                <div class="col pl-2">
                                <a href="{{route('estado.Seminario',["seminario_id"=>$seminarios->id,"valor"=>1])}}" class="badge badge-danger float-right" >Finalizado</a>
                            </div>
                                @endif




                            </div>
                        </div>
                        <div class="dropdown edit-field-half-left">
                            <div class="btn-icon btn-icon-sm btn-icon-soft-primary dropdown-toggle mr-0 edit-field-icon"
                                data-toggle="dropdown">
                                <i class="mdi mdi-dots-vertical fs-sm"></i>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="{{route('edit.Seminario',$seminarios->id)}}" class="dropdown-item">
                                    <i class="mdi mdi-pencil align-middle mr-1 text-primary"></i>
                                    <span>Edit</span>
                                </a>
                                 <form action="{{route('delete.Seminario',$seminarios->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                     <button  class="dropdown-item">
                                         <i class="mdi mdi-delete align-middle mr-1 text-danger"></i>
                                         <span>Delete</span>
                                     </button>

                                 </form>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div><!-- end col-4 -->

                @empty
                  <h2>No hay seminarios</h2>
                @endforelse

            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="pagination flat-rounded-pagination justify-content-center mb-4">
                        <li class="page-item disabled">
                            <a href="javascript: void(0);" class="page-link" data-effect="wave"><i
                                    class="bx bx-chevron-left"></i></a>
                        </li>
                        <li class="page-item active">
                            <a href="javascript: void(0);" class="page-link" data-effect="wave">1</a>
                        </li>
                        <li class="page-item">
                            <a href="javascript: void(0);" class="page-link" data-effect="wave">2</a>
                        </li>
                        <li class="page-item">
                            <a href="javascript: void(0);" class="page-link" data-effect="wave">3</a>
                        </li>
                        <li class="page-item">
                            <a href="javascript: void(0);" class="page-link" data-effect="wave">4</a>
                        </li>
                        <li class="page-item">
                            <a href="javascript: void(0);" class="page-link" data-effect="wave"><i
                                    class="bx bx-chevron-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--begin::Modals-->
        <!--begin::Modal - Customers - Add-->
        <div class="modal fade" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Form-->

                    <form name="enviarFormulario" class="form" action="{{ route('store.Seminario') }}" method="POST"
                        id="kt_modal_add_customer_form" enctype="multipart/form-data">

                        @csrf
                        @method('POST')

                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_add_customer_header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Agregar Seminario</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16"
                                            height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                            fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2"
                                            rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
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
                            <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true"
                                data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                                data-kt-scroll-dependencies="#kt_modal_add_customer_header"
                                data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">

                                    <label class="required fs-6 fw-semibold mb-2">Titulo</label>


                                    <input type="text" class="form-control form-control-solid"
                                        placeholder="Titulo" name="titulo" value="" />
                                    <!--end::Input-->

                                    <input type="hidden" name="id_institucion" value="{{ Auth::user()->id }}">
                                </div>
                                <div class="fv-row mb-7">

                                    <label class="required fs-6 fw-semibold mb-2">Duracion Aproximada:</label>


                                    <input type="text" class="form-control form-control-solid" placeholder="Tiempo del evento"
                                        name="duracion" value="" />
                                    <!--end::Input-->

                                    <input type="hidden" name="institucion_id" value="{{ Auth::user()->id }}">


                                </div>
                                <div class="fv-row mb-7">

                                    <label class="required fs-6 fw-semibold mb-2">Fecha del Seminario</label>


                                    <input type="datetime-local" class="form-control form-control-solid" placeholder="Tiempo del evento"
                                        name="fecha" value="" />
                                    <!--end::Input-->




                                </div>
                                <div class="fv-row mb-7">

                                    <label class="required fs-6 fw-semibold mb-2">Ubicacion</label>


                                    <input type="text" class="form-control form-control-solid" placeholder="Ubicacion"
                                        name="lugar" value="" />
                                    <!--end::Input-->




                                </div>

                                <div class="fv-row mb-15">

                                    <label class="fs-6 fw-semibold mb-2">Descripcion</label>

                                    <textarea for="descripcion" type="text" class="form-control form-control-solid" placeholder="Escriba aqui..."
                                        name="descripcion"> </textarea>

                                </div>

                                <div class="fv-row mb-7 ">
                                    <label for="invitado" class="fs-6 fw-semibold mb-2">Invitados:</label>

                                    <select class="form-control shadow-sm js-example-basic-multiple " name="participante_id[]" multiple="multiple" placeholder="seleccione" required>
                                        @foreach ($invitados as $invitado )

                                        <option {{in_array($invitado->nombre,old("invitado") ?:[] ) ?  "selected" : ""}} value="{{$invitado->id}}" name="invitado[]">{{$invitado->nombre}}</option>

                                        @endforeach
                                    </select>

                                    @error('invitado')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="fv-row mb-7 ">
                                    <label for="participante" class="fs-6 fw-semibold mb-2">Participantes:</label>

                                    <select class="form-control shadow-sm js-example-basic-multiple " name="participanteLocal_id[]" multiple="multiple" placeholder="seleccione" required>
                                        @foreach ($participantes as $participante )

                                        <option {{in_array($participante->nombre,old("participante") ?:[] ) ?  "selected" : ""}} value="{{$participante->id}}" name="participante[]">{{$participante->nombre}}</option>

                                        @endforeach
                                    </select>

                                    @error('participante')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>


                                <div class="fw-bold fs-3 rotate collapsible mb-7" data-bs-toggle="collapse"
                                    href="#kt_modal_add_customer_billing_info" role="button" aria-expanded="false"
                                    aria-controls="kt_customer_view_details">
                                    Más Detalles
                                    <span class="ms-2 rotate-180">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
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

                                        <label class="required fs-6 fw-semibold mb-2">Link de trasmision</label>

                                        <input type="url" class="form-control form-control-solid" placeholder="link"
                                            name="link" value="" />

                                    </div>




                                    <div class="d-flex flex-column mb-7 fv-row">

                                        <label class="fs-6 fw-semibold mb-2">
                                            <span class="required">Idioma</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                title="Seleccione una idioma"></i>
                                        </label>


                                        <select name="id_idioma" aria-label="Select a Country" data-control="select2"
                                            data-placeholder="Seleccione una idioma"
                                            data-dropdown-parent="#kt_modal_add_customer"
                                            class="form-select form-select-solid fw-bold">
                                            <option value="">Seleccione un Idioma</option>

                                            @foreach ($idioma as $idiomas)
                                                <option value="{{ $idiomas->id }}">{{ $idiomas->nombreIdioma }}
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
@endsection
@section('js')
    <script>
        var hostUrl = "/metronic8/";
    </script>

<script>
    /* script para el select 2 */
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2({
        placeholder:"-- Seleccione --",
        allowing:true,
        tags: true,
        tokenSeparators: [','],


    });


});
</script>

    <script src="{{ asset('Datatable/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('Datatable/js/plugins.bundle.js') }}"></script>

    {{-- <script src="{{ asset('Datatable/js/datatables.bundle.js') }}"></script> --}}


    <script src="{{ asset('Datatable/js/list.js') }}"></script>
    <script src="{{ asset('Datatable/js/add.js') }}"></script>
@endsection
