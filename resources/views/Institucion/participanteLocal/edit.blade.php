@extends('layouts.app2')


@section('css')
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    <link href="{{ asset('Datatable/css/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('Datatable/css/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('Datatable/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

    <body id="kt_body" {{-- style="overflow-y: hidden" --}}>


        <div class="page-title-box" style="padding: 15px">
            <div class="container-fluid">
                <div class="page-title dflex-between-center">
                    <h3 class="mb-1 font-weight-bold" style="font-size:50px ">Editar Participante</h3>
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
                        <li class="breadcrumb-item">
                            <a href="{{ route('indexParticipanteLocal') }}">
                                Participantes
                            </a>
                        </li>
                        <li class="breadcrumb-item active">Editar</li>
                    </ol>
                </div>
            </div>
        </div>

        {{-- CONTENIDO --}}
        <div class="container-fluid" style="margin-top: 25px">

            <div class="container">


                <!-- Main content -->
                <div class="row">
                    <!-- Left side -->
                    <div class="col-lg-8">
                        <!-- Basic information -->
                        <div class="card mb-4">

                            <div class="card-body">
                                <form name="enviarFormulario" class="form"
                                    action="{{ route('update.Participante.Local', $participante) }}" method="POST"
                                    id="kt_modal_add_customer_form">

                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Nombre</label>
                                                <input type="text" name="nombre" class="form-control"
                                                    value="{{ $participante->nombre }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Carrera</label>
                                                <input type="text" name="carrera" class="form-control"
                                                    value="{{ $participante->carrera }}">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Biografia</label>
                                                <textarea type="text" name="biografia" class="form-control">{{ $participante->biografia }}</textarea>

                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Facultad</label>
                                                <input type="text" name="facultad" class="form-control"
                                                    value="{{ $participante->facultad }}">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column mb-7 fv-row">

                                        <label class="fs-6 fw-semibold mb-2">
                                            <span class="required">Profesión</span>

                                        </label>


                                        <select
                                        name="profesions_id"
                                        id="profesions_id"
                                        class="form-control shadow-sm"
                                        required
                                        >
                                        <option>---Seleccione ---</option>
                                           @foreach ($profesion as $profesiones)
                                             <option {{$participante->profesions_id==$profesiones->id ? 'selected' : ''}} value="{{$profesiones->id}}">{{$profesiones->nombre}}</option>


                                           @endforeach
                                    </select>
                                        <!--end::Input-->
                                    </div>


                                    <div class="row">
                                        <button type="submit" id="kt_modal_add_customer_cancel" class="btn btn-light me-3" >
                                            <a href="{{ route('indexParticipanteLocal') }}">
                                                Cancelar
                                            </a>
                                        </button>

                                        <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                                            <span class="indicator-label">Enviar</span>

                                        </button>
                                        <!--end::Button-->
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>



    </body>
@endsection
@section('js')
    <script src="{{ asset('Datatable/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('Datatable/js/plugins.bundle.js') }}"></script>

    <script src="{{ asset('Datatable/js/datatables.bundle.js') }}"></script>


    <script src="{{ asset('Datatable/js/list.js') }}"></script>
    <script src="{{ asset('Datatable/js/add.js') }}"></script>
@endsection
