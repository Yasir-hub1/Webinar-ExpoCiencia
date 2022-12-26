@extends('layouts.navbar')
<link type="text/css" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<!-- font-awesome.min - css -->
<link type="text/css" rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />

<!-- menu - css -->
<link type="text/css" rel="stylesheet" href="{{ asset('css/menu.css') }}">
<!-- main - css -->
<link type="text/css" rel="stylesheet" href="{{ asset('css/main.css') }}">
<!-- responsive - css -->
<link type="text/css" rel="stylesheet" href="{{ asset('css/responsive.css') }}">


@section('content')
    <div class="container" style=" background: #E4E9F7;">
        <div class="row">
            <div class="col-md-5 mt-5">
                @if ($perfil->foto)
                <img src="{{asset('image/perfil/'.$perfil->foto)}}"class="w-10 rounded-circle"
                    style="width: 400px;height:400px;border-radius: 45%">
            @endif
            </div>
            <div class="col-md-7 mt-3 mt-md-0">

                <a href="{{ route('editarPerfil', ['id' => Auth::user()->id]) }}"
                class="btn btn-outline-dark mr-2 text-uppercase
                    font-weight-bold " style="background: #190bab">
                    <svg style="width: 30px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                      </svg>


                    Editar perfil
                </a>

                <h2 class="text-center mb-2 " style=" color: #1d1b31;">{{-- {{ $perfil->fotografo->name }} --}}</h2>

                <span class="invalid-feedback d-block mt-3 mt-md-0" style="color:black">
                    <br>
                    <strong>Carrera: </strong>{{ $perfil->carrera }}
                </span>
               {{--  <span class="invalid-feedback d-block" style="color:black">
                    <strong>Experiencias: </strong>{{-- {{ $perfil->experiencias }}
                            </span> --}}
                            <br>
                <div class="biografia mt-3">
                    <br>
                    <strong>  Biografia:</strong>  {!! $perfil->biografia !!}
                </div>
            </div>

        </div>
    </div>
@endsection
