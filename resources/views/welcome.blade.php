<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description"
        content="Edemy is a simple HTML5 Education Template with a modern look. HTML files are well organized and named accordingly so its very easy to customize and update." />
    <meta name="keywords" content="ART,BUSINESS,DESIGN,GRAPHIC,FASHION,MODEL,PHOTOGRAPHY,WEB DESIGN" />
    <meta name="author" content="bitspeck" />
    <title>WEBINAR FOR ASSEMBLERS</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="images/fav.png" />
    <!-- bootstrap.min - css -->
    <link type="text/css" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- font-awesome.min - css -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
    <!-- slick.min - css -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/slick.css') }}" />
    <!-- YouTubePopUp - css -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/YouTubePopUp.css') }}" />
    <!-- pogo-slider.min - css -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/pogo-slider.min.css') }}" />
    <!-- animate.min - css -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />
    <!-- direction-reveal - css -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/direction-reveal.css') }}" />
    <!-- menu - css -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/menu.css') }}" />
    <!-- main - css -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <!-- responsive - css -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
</head>

<body data-spy="scroll" data-target="#bs-example-navbar-collapse-1">
    <!-- back to top start -->
    <a href="#" id="return-to-top">
        <i class="fa fa-angle-double-up"></i>
    </a>
    <!-- back to top end -->

    <!-- Here is the header part start -->
    <header id="home">
        <div class="header-top" id="top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="top-info">
                            <!-- head info -->
                            <ul class="top-bar-text">
                                <li>
                                    <a href="">
                                        <i class="fa fa-phone icon-color" aria-hidden="true"></i>
                                        +59175633655
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-envelope icon-color" aria-hidden="true"></i>
                                        assambler@webinar.com
                                    </a>
                                </li>
                            </ul>
                            <!-- /.head info -->
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="top-info sign-in text-right">
                            <!-- social part -->
                            <ul class="top-bar-text">
                                <li>
                                    <a href="{{ route('loginP') }}">
                                        <i class="fa fa-user-plus top-icon"></i> Login
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('registerP') }}">
                                        <i class="fa fa-lock top-icon"></i> Registrar
                                    </a>
                                </li>
                            </ul>
                            <!-- /.social part -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-spy="affix" data-offset-top="30">
            <nav class="navbar navbar-default hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="navbar-header">
                                <a href="index.html" class="logo">
                                    <img src="{{asset('images/logo.png')}}" class="img-responsive" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-9 banner-menu">
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav nav-menu">
                                    <li class="dropmenu active">
                                        <a href="{{ route('paginaPrincipal') }}" class="dropbtn">Pagina Principal</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- search overlay -->
                    <div id="search-overlay" class="block">
                        <div class="centered">
                            <div id="search-box">
                                <i id="close-btn" class="fa fa-times fa-2x"></i>
                                <form action="/search" id="search-form" method="get" target="_top">
                                    <input id="search-text" name="q" placeholder="Search" type="text" />
                                    <button id="search-button" type="submit">
                                        <span>Search</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <!-- mobile menu -->
        <nav id="cssmenu" class="hidden-sm hidden-lg hidden-md">
            <div class="logo">
                <a href="index.html" class="logo">
                    <img src="{{ asset('images/logo.png') }}" class="img-responsive" alt="" />
                </a>
            </div>
            <div id="head-mobile"></div>
            <div class="button"></div>
            <ul>
                <li class="active">
                    <a href="{{ route('paginaPrincipal') }}">Pagina Principal</a>

                </li>


            </ul>
            </li>

            </ul>
        </nav>
        <!-- End mobile menu -->
    </header>
    <!-- Here is the header part end -->

    <!-- Here is the banner part start -->
    <div class="header-area" id="home-slider">
        <div class="slider stick-dots">
            <div class="slide">
                <div class="slide__img">
                    <img src="{{asset('images/slider-image-3.jpg')}}" alt="img" class="full-image animated"
                        data-animation-in="zoomInImage" />
                    <div class="overlay"></div>
                </div>
                <div class="slide__content">
                    <div class="slide__content--headings">
                        <h2 class="animated" data-animation-in="fadeInRight">
                            BIENVENIDO A
                            <span class="text-color">ASSEMBLER WEBINAR</span>
                        </h2>
                        <div class="header-btn-group">

                            <a href="{{ route('register') }}" class="slider-btn2 blank animated"
                                data-animation-in="fadeInRight" data-delay-in="0.3">
                                EMPIEZA AHORA
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="slide__img">
                    <img src="{{asset('images/courses-7.jpg')}}" alt="img" class="full-image animated"
                        data-animation-in="zoomInImage" />
                    <div class="overlay"></div>
                </div>
                <div class="slide__content">
                    <div class="slide__content--headings">
                        <h2 class="animated" data-animation-in="fadeInRight">
                            ESTÁS LISTO PARA
                            <span class="text-color">INICIAR?</span>
                        </h2>
                        <div class="header-btn-group">

                            <a href="{{ route('register') }}" class="slider-btn2 blank animated"
                                data-animation-in="fadeInRight" data-delay-in="0.3">
                                EMPIEZA AHORA
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Here is the banner part end -->

    <!-- Here is the About us part start -->

    <section id="about_us">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="heading-border">
                        <h3>NOSOTROS</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about_content">
                        <h3 class="about_text"> BIENVENIDO A ASSEMBLER WEBINAR</h3>
                        <p>

                            Assembler Webinar a sido diseñada para ayudar a las diversas personas en sus
                            presentaciones de proyectos basados en lenguaje ensamblador a traves de conferencias
                            en vivo y con trasmisión automática de presentaciones grabadas.
                            Una plataforma fácil de usar logrando hacer realidad los seminarios web con una alta
                            calidad.
                        </p>



                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-vedio">
                        <img src="images/about-image.jpg" alt="img" class="img-responsive video-sec" />
                        <div class="youtube_video">
                            <a class="bla-1" href="https://www.youtube.com/watch?v=tqQfwdBp-xI">
                                <img src="images/about-vedio-icon.jpg" alt="img" class="img-responsive" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Here is the About us part End -->

    <!-- Here is the courses part Start -->
    <section id="blog-page" class="blog">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="heading-border">
                        <h3>SEMINARIOS</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!--single blog  start -->
                @foreach ($seminarios as $seminario )
                <div class="col-sm-6 col-md-4">
                    <div class="single_blog">
                        <div class="blog-content">
                            <div class="blog_img">
                                @foreach ($seminario->fotos as $fotos)

                                <img src="{{asset('image/seminario/'.$seminario->id .'/'. $fotos->fotos)}}" class="img-responsive" alt="img" />

                                @endforeach

                            </div>
                            <h4>{{$seminario->titulo}}</h4>
                            <p>{{$seminario->fecha}}</p>
                            <p class="blog-para">
                                {{$seminario->descripcion}}
                            </p>

                            <div class="clr"></div>
                        </div>
                    </div>
                </div>

                @endforeach


            </div>
        </div>
    </section>

    <!-- Here is the courses part end -->

    <!-- Here is the achievements  part start -->

    <section id="counter">
        <div class="counter-banner">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="count-in">
                            <div class="counter-text">
                                <div class="cointer-img">
                                    <img src="images/student.png" alt="img" class="img-responsive" />
                                </div>
                                <h4>
                                    <span class="counter">{{$estudiantes}}</span>
                                </h4>
                                <p>Total de estudiantes</p>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="count-in">
                            <div class="cointer-img">
                                <img src="images/drawing.png" alt="img" class="img-responsive" />
                            </div>
                            <div class="counter-text count-pad">
                                <h4>
                                    <span class="counter">{{$semCompletos}}</span>
                                </h4>
                                <p>Seminarios completados</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="count-in mblr-0">
                            <div class="cointer-img">
                                <img src="images/book.png" alt="img" class="img-responsive" />
                            </div>
                            <div class="counter-text">
                                <h4>
                                    <span class="counter">{{$totalSemi}}</span>
                                </h4>
                                <p>Total de seminarios</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Here is the achievements  part End -->



    <!-- Here is Newsletter part Start -->
    <section class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="email-subscription">
                        <h2>Suscríbete ahora</h2>
                        <br>
                        <a href="{{ route('register') }}" class="btn btn-subscribe">Suscribete</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Here is Newsletter part Start -->


    <!-- Here is Contact part End -->

    <!-- Footer Start -->
    <footer id="rs-footer" class="bg3 rs-footer">




        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright">
                    <p>© 2023 <a href="#">Webinar for assembler</a>. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- jquery-1.12.4.min - js -->
    <script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap.min - js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- slick.min - js -->
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <!-- slick-animation.min - js -->
    <script src="{{ asset('js/slick-animation.min.js') }}"></script>
    <!-- waypoints - js -->
    <script src="{{ asset('js/waypoints.js') }}"></script>
    <!-- counter - js -->
    <script src="{{ asset('js/counter.js') }}"></script>
    <!-- bundle - js -->
    <script src="{{ asset('js/bundle.js') }}"></script>
    <!-- Carousel - js -->
    <script src="{{ asset('js/Carousel.js') }}"></script>
    <!-- YouTubePopUp.jquery - js -->
    <script src="{{ asset('js/YouTubePopUp.jquery.js') }}"></script>
    <!-- menu - js -->
    <script src="{{ asset('js/menu.js') }}"></script>
    <!-- main - js -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
