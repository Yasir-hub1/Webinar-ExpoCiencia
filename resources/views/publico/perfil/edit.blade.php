@extends('layouts.navbar')
{{-- <link type="text/css" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> --}}
<!-- font-awesome.min - css -->
<link type="text/css" rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
<!-- menu - css -->
<link type="text/css" rel="stylesheet" href="{{ asset('css/menu.css') }}">
<!-- main - css -->
<link type="text/css" rel="stylesheet" href="{{ asset('css/main.css') }}">
<!-- responsive - css -->
<link type="text/css" rel="stylesheet" href="{{ asset('css/responsive.css') }}">
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
</script>
<script src="{{ asset('Datatable/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('Datatable/js/plugins.bundle.js') }}"></script>
@section('content')
    <div class="card shadow formulario">
        <div class="card-body">
            <form action="{{route('updatePerfil', ['perfil' => $perfil->id])}}" method="POST" novalidate enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 info" style="text-align: center">AREA DE PERFIL</div>

                    <div class="col-xs-12 col-sm-12 col-md-12 img" class="image-wrapper">
                        <label for="perfil" class="form-label la">Foto:</label>
                        <img class="imagen" id="predeterminada"
                            src="https://www.bootdey.com/app/webroot/img/hero-graphic.png" alt="Image Description" />
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 imgUser">
                        <br>
                       {{--  <input id="file" accept="image/*" name="image" size="220px" width="220px" height="220px"
                            type="file"> --}}
                            <input  type="file" class="form-control shadow-sm"
                            for="videoGrabado"  value="" aria-selected="true" id="file" accept="image/*" name="image" />

                    </div>
                    @error('image')
                        <div style="text-align: center">
                            <span class="text-danger">{{ $message }}</span>
                        </div>

                    @enderror






                    <div class="col-xs-12 col-sm-12 col-md-12 info" style="text-align: center"><br>
                        AREA DE DATOS PERSONALES
                        <hr />
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <label for="titulo" class="form-label la">Nombre</label>
                        <input name="name" type="text" class="form-control shadow-sm" id="titulo" for="titulo"
                            value="{{Auth::user()->name}}" />

                        @error('titulo')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <label for="titulo" class="form-label la">Correo</label>
                        <input name="email" type="text" class="form-control shadow-sm" id="titulo" for="titulo"
                            value="{{Auth::user()->email}}" />

                        @error('titulo')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 mt-3">
                        <label for="titulo" class="form-label la">Carrera</label>
                        <input name="carrera" type="text" class="form-control shadow-sm" id="titulo" for="titulo"
                            value="{{$perfil->carrera}}" />

                        @error('titulo')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>




                    <div class="col-xs-12 col-sm-12 col-md-6 mt-3">
                        <label for="biografia a" class="form-label la">Biografia:</label>
                        <textarea name="biografia" class="form-control shadow-sm" type="text" id="descripcion">{{$perfil->biografia}}</textarea>

                        @error('biografia')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>




                <div class="w-100" style="justify-self:center;justify-content: center">
                    <br>
                    <div class="center" style="justify-self:center;justify-content: center">
                        <button type="submit">Actualizar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
