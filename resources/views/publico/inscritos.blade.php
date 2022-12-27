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

    <body data-spy="scroll" data-target="#bs-example-navbar-collapse-1">
        <section id="event" style="margin-top: -30">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 event-head">
                        <div class="heading-border">
                            <h3>Mis inscripciones</h3>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @forelse ($simInscrito as $simInscritos)
                    <div class="col-md-12 item-event">
                        <div class="col-sm-3 col-md-2">
                            <div class="time-from">

                                <div class="month">{{$simInscritos->fecha}}</div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="event-wrapper">
                                <h5 class="title">
                                    <a href=""> {{$simInscritos->titulo}}</a>
                                </h5>
                                <div class="meta">
                                    <div class="time">
                                        <i class="fa fa-clock-o"></i>{{$simInscritos->duracion}}
                                    </div>
                                    <div class="location">
                                        <i class="fa fa-map-marker"></i> {{$simInscritos->lugar}}
                                    </div>
                                </div>
                                <div class="description">
                                    <p>{{$simInscritos->descripcion}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3 event-image">

                            <img src="{{asset('image/seminario/'.$simInscritos->id.'/'.$simInscritos->fotos)}}" alt="" />


                        </div>
                    </div>

                    @empty
                    <div class="col-xs-12 col-sm-12 event-head">
                        <div class="heading-border">
                            <h3>No hay inscripciones</h3>
                        </div>
                    </div>

                    @endforelse

                </div>
            </div>
        </section>



        <script src="{{ asset('js/bootstrap.min.js') }}"></script>



        <!-- menu - js -->
        <script src="{{ asset('js/menu.js') }}"></script>
        <!-- main - js -->
        <script src="{{ asset('js/main.js') }}"></script>

    </body>
@endsection
