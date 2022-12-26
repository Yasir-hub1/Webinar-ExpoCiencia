<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
    @yield('js')
    <script src="{{ asset('js/navbar.js') }}"></script>
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-custom navbar-mainbg">
       {{--  <a class="navbar-brand navbar-logo" href="#">ESM</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button> --}}
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                {{-- <div class="hori-selector"><div class="left"></div><div class="right"></div></div> --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{route('area')}}">Menu Principal</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i></a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('area')}}"></i>Seminarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"></i>Mis seminarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('mostrarPerfil',[Auth::user()->id])}}"></i>Perfil</a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link" href="javascript:void(0);"><i class="far fa-copy"></i>Cerrar sesion</a> --}}
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')

</body>

</html>
