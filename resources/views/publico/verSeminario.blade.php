@extends('layouts.navbar')
<title>Document</title>
<!-- bootstrap.min - css  -->
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
    {{-- Content --}}

    <body data-spy="scroll" data-target="#bs-example-navbar-collapse-1">




        <section class="notices" style="margin-top: -100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 event-head">
                        <div class="heading-border">
                            <h3>{{ $seminario->titulo }}</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">


                        <div class="blogpost_details">

                            <img style="width: 100%;height:60%;size:80% "
                                src="{{ asset('image/seminario/' . $seminario->id . '/' . $fotos->fotos) }}"
                                class="img-responsive" alt="">

                            <div class="blogpost_description">
                                <div class="blg_dtls_content">
                                    <h5 class="event-d">Descripcion</h5>
                                    <p>
                                        {{ $seminario->descripcion }}

                                    </p>
                                    <div class="event-content">
                                        <h5 class="content2">Contenido</h5>
                                        <ul>
                                            <li>Link para el acceso a la video conferencia</li>
                                            <li>Video completo en la plataforma despues concluir el seminario</li>

                                        </ul>
                                    </div>
                                    <div class="event-participants">
                                        <br>
                                        <br>
                                        <h5 class="content2">Participantes</h5>
                                        <div class="row">
                                            @forelse ($seminario->Invitados as $invitados)
                                                <div class="col-md-3 col-sm-3 col-xs-6">
                                                    <div class="participants-details text-center">
                                                        <a href="#">
                                                            <img src="{{ asset('image/participantes/invitados/' . $invitados->foto) }}"
                                                                class="img-responsive" alt="img">
                                                        </a>
                                                        <h5 class="blog-avatar">{{ $invitados->nombre }}</h5>
                                                        <span>{{ $invitados->Profesion->nombre }}</span>
                                                    </div>
                                                </div>

                                            @empty
                                            @endforelse
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- blog right sidebar start  -->


                    <div class="col-sm-4">
                        <div class="sidebar_search">
                            <form>

                                <input type="text" name="search" placeholder="Link del seminario" class="form-control"
                                    value="{{ $seminario->link }}">
                            </form>
                        </div>
                        <!-- sidebar  Nav tabs -->
                        <div class="sidebar_categori">
                            <h2>Video</h2>
                            <div class="col-md-12">

                                <div class="about-vedio">
                                    <img src="https://theme.bitspecksolutions.com/html-template/edemy/demo/images/about-image.jpg"
                                        alt="img" class="img-responsive video-sec">
                                    <div class="youtube_video">
                                        <a class="bla-1" href="{{ asset('videos/' . $seminario->videoGrabado) }}">
                                            <img src="https://theme.bitspecksolutions.com/html-template/edemy/demo/images/about-vedio-icon.jpg"
                                                alt="img" class="img-responsive">
                                        </a>
                                        <br>
                                    </div>
                                    <div>

                                        @if ($solicitud==null)
                                          <form action="{{ route('inscripcion', ['id' => $seminario->id]) }}" method="post"
                                              style="">
                                              @csrf
                                              <input type="hidden" name="id_seminario" value="{{ $seminario->id }}">
                                              <input type="hidden" name="id_estudiante" value="{{ Auth::user()->id }}">
                                              <input type="hidden" name="estado" value="0">
                                              <input type="submit" value="Inscribirse" class="btn"
                                                  style="width: 150px;justify-content:center;align-self:center">
                                              {{-- <a href="{{)}}" class="btn">Inscrbirme</a> --}}
                                          </form>
                                           @endif


                                           @if ($solicitud!==null)
                                        @if ($solicitud->estado == 0)

                                            <form action="{{ route('inscripcionEliminar', ['id' => $seminario->id]) }}" method="post"
                                                style="">
                                                @csrf
                                                <input type="hidden" name="id_seminario" value="{{ $seminario->id }}">
                                                {{-- <input type="hidden" name="id_estudiante" value="{{ Auth::user()->id }}">
                                                <input type="hidden" name="estado" value="1"> --}}
                                                <input type="hidden" name="id_asistencia" value="{{$solicitud->id}}">

                                                <input type="submit" value="Remover" class="btn"
                                                    style="width: 150px;justify-content:center;align-self:center">
                                                {{-- <a href="{{)}}" class="btn">Inscrbirme</a> --}}
                                            </form>

                                            @else
                                            <form action="{{ route('inscripcionEliminar', ['id' => $seminario->id]) }}" method="post"
                                                style="">
                                                @csrf
                                                <input type="hidden" name="id_seminario" value="{{ $seminario->id }}">
                                                {{-- <input type="hidden" name="id_estudiante" value="{{ Auth::user()->id }}">--}}
                                                <input type="hidden" name="estado" value="1">
                                                <input type="hidden" name="id_asistencia" value="{{$solicitud->id}}">

                                                <input type="submit" value="Inscribirse" class="btn"
                                                    style="width: 150px;justify-content:center;align-self:center">
                                                {{-- <a href="{{)}}" class="btn">Inscrbirme</a> --}}
                                            </form>


                                        @endif
                                        @endif

                                    </div>
                                </div>

                            </div>
                        </div>








                    </div>
                </div>
        </section>
        {{-- FIN CONTENT --}}


        <script src="{{ asset('js/bootstrap.min.js') }}"></script>




        <!-- menu - js -->
        <script src="{{ asset('js/menu.js') }}"></script>
        <!-- main - js -->
        <script src="{{ asset('js/main.js') }}"></script>

    </body>
@endsection
