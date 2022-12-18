@extends('layouts.app2')

@section('css')
    {{-- <style>
        body {
            margin-top: 20px;
            background: #f5f5f5;
        }

        /**
     * Panels
     */
        /*** General styles ***/
        .panel {
            box-shadow: none;
        }

        .panel-heading {
            border-bottom: 0;
        }

        .panel-title {
            font-size: 17px;
        }

        .panel-title>small {
            font-size: .75em;
            color: #999999;
        }

        .panel-body *:first-child {
            margin-top: 0;
        }

        .panel-footer {
            border-top: 0;
        }

        .panel-default>.panel-heading {
            color: #333333;
            background-color: transparent;
            border-color: rgba(0, 0, 0, 0.07);
        }

        form label {
            color: #999999;
            font-weight: 400;
        }

        .form-horizontal .form-group {
            margin-left: -15px;
            margin-right: -15px;
        }

        @media (min-width: 768px) {
            .form-horizontal .control-label {
                text-align: right;
                margin-bottom: 0;
                padding-top: 7px;
            }
        }

        .profile__contact-info-icon {
            float: left;
            font-size: 18px;
            color: #999999;
        }

        .profile__contact-info-body {
            overflow: hidden;
            padding-left: 20px;
            color: #999999;
        }

        .profile-avatar {
            width: 200px;
            position: relative;
            margin: 0px auto;
            margin-top: 196px;
            border: 4px solid #f3f3f3;
        }
    </style> --}}
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    <link href="{{ asset('Datatable/css/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('Datatable/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap");

        :root {
            --green: #fbaf32;
            --black: #192a56;
            --light-color: #666;
        }

        * {
            text-decoration: none !important;
        }

        form {
            display: inline-block;
        }

        .selec {
            max-width: 50%;
            font-weight: 700;
            color: var(--black);
        }

        .titulo {
            color: var(--black);
        }

        .info {
            color: var(--black);
            font-size: 1rem;
            margin-bottom: 1rem;
        }

        .formulario {
            max-width: 60%;
            margin: auto !important;
            margin-bottom: 2rem;
            /* background: rgba(255, 255, 255, 0); */

        }

        .la {
            color: var(--green);
        }

        .btnFormulario {
            max-width: 60%;
            margin: auto;
            border: none;
            box-shadow: none;
            background: rgba(255, 255, 255, 0);
        }

        div.w-100 {
            width: 33.33%;
            /* background-color: orange; */
        }

        div.center {
            text-align: center;
        }

        button {
            display: flex;
            display: wrap;
            padding: 1.3em 3em;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 2.5px;
            font-weight: 500;
            color: #192a56;
            background-color: #fff;
            border-color: #fbaf32;
            border-radius: 45px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease 0s;
            cursor: pointer;
            outline: none;
        }

        button:hover {
            background-color: #fbaf32;
            box-shadow: 0px 15px 20px #fbaf32;
            color: #fff;
            transform: translateY(-7px);
        }

        button:active {
            transform: translateY(-1px);
        }

        .img {
            /* text-align: center; */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .imagen {
            margin-left: 2rem;
            width: 150px;
            height: 150px;
            /* border-radius: 50%; */
        }

        .imgUser {
            display: inline-block;
            margin: 1rem 0rem;
            text-align: center;
        }

        /*  .textarea{
                    text-align: center;
                    font-weight: bold
                } */

        @media (max-width: 1024px) {
            .formulario {
                max-width: 90%;
            }
        }

        @media (max-width: 760px) {

            .content,
            .container-fluid {
                padding: 0 !important;
            }

            .container {
                max-width: 100%;
                padding: 0;
            }

            .formulario {
                margin: 0;
            }
        }

        @media (max-width: 450px) {
            .img {
                flex-direction: column;
            }

            .formulario {
                max-width: 100%;
            }
        }


        /* stilo del select 2 */
        span.select2-selection__choice__display {
            color: #000;
        }
    </style>
@endsection

@section('content')
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="page-title dflex-between-center">
                <h3 class="mb-1 font-weight-bold">Editar datos del seminario</h3>
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
                    <li class="breadcrumb-item active">
                        <a href="{{ route('indexSeminario') }}">
                            Seminario
                        </a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="calender.html">
                            Editar
                        </a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    {{-- BOTON VOLVER --}}
    <a href="{{route('indexSeminario')}}" class="btn btn-sm float-right">
        <button>VOlver</button></a>
    {{-- fin --}}
    {{-- CONTENIDO DE LA EDICION --}}
    <div class="card shadow formulario">
        <div class="card-body">
            <form action="{{route('update.Seminario',[$seminario->id])}}" method="POST" novalidate enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 info" style="text-align: center">AREA DE PORTADA</div>
                    @if ($mostrarIMAGE!==null)
                    <div class="col-xs-12 col-sm-12 col-md-12 img">
                        <label for="perfil" class="form-label la">FOTO:</label>

                       <img class="imagen" id="picture" src="{{asset('image/seminario/'.$seminario->id.'/'. $mostrarIMAGE->fotos)}}"
                       alt="">

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 imgUser">
                        <input type="file" id="file"  name="image[]"  multiple accept="image/*" value=""/>
                    </div>

                    @else
                    <div class="col-xs-12 col-sm-12 col-md-12 img">
                        <label for="perfil" class="form-label la">FOTO:</label>

                       <img class="imagen" id="picture" src="{{asset('image/seminario/')}}" alt=" no hay foto">

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 imgUser">
                        <input type="file" id="file"  name="image[]"  multiple accept="image/*" value=""/>
                    </div>

                    @endif

                  {{--   <div class="col-xs-12 col-sm-12 col-md-12 imgUser">
                        <input type="file" id="file"  name="image[]"  multiple accept="image/*" value=""/>
                    </div> --}}
                    @error('file')
                        <div style="text-align: center">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror






                    <div
                        class="col-xs-12 col-sm-12 col-md-12 info"
                        style="text-align: center"
                    ><br>
                        AREA DE TITULO
                        <hr />
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label for="titulo" class="form-label la">T&#237;tulo:</label>
                        <input
                            name="titulo"
                            type="text"
                            class="form-control shadow-sm"
                            id="titulo"
                            for="titulo"
                            value="{{$seminario->titulo}}"

                        />
                        @error('titulo')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-6 mt-3">
                        <label for="descripcion a" class="form-label la">Descripcion:</label>
                        <textarea name="descripcion" class="form-control shadow-sm" type="text" id="descripcion">{{$seminario->descripcion}}</textarea>

                        @error('descripcion')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 mt-3">
                        <label for="id_idioma" class="form-label la"
                            >Idioma:</label
                        >
                        <select
                            name="id_idioma"
                            id="id_idioma"
                            class="form-control shadow-sm"
                            required
                            >
                            <option>---Seleccione ---</option>
                               @foreach ($idioma as $idiomas)
                                 <option {{$seminario->id_idioma==$idiomas->id ? 'selected' : ''}} value="{{$idiomas->id}}">{{$idiomas->nombreIdioma}}</option>


                               @endforeach
                        </select>
                        <br />
                        @error('idioma')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-12 info" style="text-align: center"><br>
                        AREA DE VIDEO Y DETALLES
                        <hr />
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <label for="lugar" class="form-label la">Lugar:</label>
                        <input
                            name="lugar"
                            type="text"
                            class="form-control shadow-sm"
                            id="lugar"
                            for="lugar"
                            value="{{$seminario->lugar}}"
                             />
                        @error('Lugar')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <label for="editor" class="form-label la"
                            >Duracion:</label
                        >
                        <input
                        name="duracion"
                        type="text"
                        class="form-control shadow-sm"
                        id="duracion"
                        for="duracion"
                        value="{{$seminario->duracion}}"
                         />

                        @error('duracion')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <label for="fecha" class="form-label la">Fecha:</label>
                        <input
                            name="fecha"
                            type="date"
                            class="form-control shadow-sm"
                            id="fecha"
                            for="fecha"
                            value="{{$seminario->fecha}}"
                        />
                        @error('fecha')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                        <label for="link" class="form-label la">Link de la transmision</label>
                        <input
                            name="link"
                            type="link"
                            class="form-control shadow-sm"
                            id="link"
                            for="link"
                            value="{{$seminario->link}}"
                         />
                        @error('link')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    {{-- <div class="col-xs-12 col-sm-12 col-md-3  mt-3">
                        <label for="estado" class="form-label la">Estado:</label >

                           <select    class="form-control shadow-sm" name="estado">

                            <option  {{$seminario->estado ==0 ? "selected" :""}} name="estado" value="0"> Finalizado</option>
                            <option  {{$seminario->estado ==1 ? "selected" :""}} name="estado" value="1"> En emisión</option>


                        </select>

                        @error('estado')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div> --}}

                    <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                        <label for="videoGrabado" class="form-label la">Subir video:</label>

                        <input
                            name="videoGrabado"
                            type="file"
                            class="form-control shadow-sm"
                            id="videoGrabado"
                            for="videoGrabado"
                            accept="video/*"
                            value="{{$seminario->videoGrabado}}"
                            aria-selected="true"
                         />
                        <br />
                        @error('videoGrabado')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>




                    <div

                        class="col-xs-12 col-sm-12 col-md-12 info"
                        style="text-align: center"
                    >
                    <br>
                        AREA DE PARTICIPANTES
                        <hr />
                    </div>

                    <div class="col-xs-11 col-sm-11 col-md-11 mt-3">
                        <label for="participante_id" class="form-label la">Invitados:</label>

                        <select class="form-control shadow-sm js-example-basic-multiple" name="participante_id[]" multiple="multiple" placeholder="seleccione" value="">
                            @foreach ($invitados as $invitado)

                            @if (in_array($invitado->id, $invArray))
                            <option value="{{$invitado->id}}"  name="participante_id[]" selected  >{{$invitado->nombre}}</option>
                            @else
                            <option value="{{$invitado->id}}" name="participante_id[]">{{$invitado->nombre}}</option>
                            @endif


                            @endforeach
                        </select>


                        <br />
                        @error('autor')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-xs-11 col-sm-11 col-md-11 mt-3">
                        <label for="participanteLocal_id" class="form-label la">Participantes:</label>


                        <select class="form-control shadow-sm js-example-basic-multiple " name="participanteLocal_id[]" multiple="multiple" placeholder="seleccione" value="">
                            <option disabled>---Seleccione---</option>
                            @foreach ($partLocal as $partLocals)

                            @if (in_array($partLocals->id, $partArray))
                            <option value="{{$partLocals->id}}"  name="participanteLocal_id[]" selected  >{{$partLocals->nombre}}</option>
                            @else
                            <option value="{{$partLocals->id}}" name="participanteLocal_id[]">{{$partLocals->nombre}}</option>
                            @endif


                            @endforeach

                        </select>


                        <br />
                        @error('autor')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>



                </div>
                <br />
                <div class="w-100">
                    <div class="center">
                        <button type="submit">Actualizar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- FIN --}}
@endsection
@section('js')
{{-- imagen para el resumen --}}
<script>
      document.getElementById("file").addEventListener("change", cambiarImagen);

function cambiarImagen(event) {
    var file = event.target.files[0];

    var reader = new FileReader();
    reader.onload = (event) => {
        document
            .getElementById("picture")
            .setAttribute("src", event.target.result);
    };
    reader.readAsDataURL(file);

}

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
    <script>
        var hostUrl = "/metronic8/";
    </script>


    <script src="{{ asset('Datatable/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('Datatable/js/plugins.bundle.js') }}"></script>

    {{-- <script src="{{ asset('Datatable/js/datatables.bundle.js') }}"></script> --}}


    <script src="{{ asset('Datatable/js/list.js') }}"></script>
    <script src="{{ asset('Datatable/js/add.js') }}"></script>
@endsection
