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


        <!-- back to top start -->
        <a href="#" id="return-to-top">
            <i class="fa fa-angle-double-up"></i>
        </a>

        <!-- Here is the courses part Start -->
        <section id="blog-page" class="blog" style="margin-top: -60">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="heading-border">
                            <h3>Seminarios</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @php
                        $seminario = DB::table('seminarios')
                            ->where('estado', 1)
                            ->get();

                    @endphp

                    <!--single blog  start -->
                    @forelse ($seminario as $seminarios)
                        <a href="{{ route('detalleSeminario', $seminarios->id) }}">
                            <div class="col-sm-6 col-md-4">
                                <div class="single_blog">
                                    <div class="blog-content">
                                        <div class="blog_img ">
                                            @php
                                                $foto = DB::table('fotos')
                                                    ->select('fotos')
                                                    ->where('id_seminario', $seminarios->id)
                                                    ->first();
                                            @endphp

                                            @if (is_array($foto) || is_object($foto))
                                                @foreach ($foto as $fotos)
                                                    <img src="{{ asset('image/seminario/' . $seminarios->id . '/' . $fotos) }}"
                                                        class="img-responsive" alt="img" style="width: 370px;height: 250px;">
                                                @endforeach
                                            @endif


                                        </div>

                                        <h4>{{ $seminarios->titulo }}</h4>
                                        <p>{{ $seminarios->fecha }}</p>
                                        <p class="blog-para">{{ $seminarios->descripcion }}</p>

                                        <div class="clr"></div>
                                    </div>
                                </div>

                            </div>
                        </a>

                    @empty
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
