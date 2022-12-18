<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="MatrrDigital">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="noindex, nofollow">
    <title>Webinar Ensambler</title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />

    <!-- ================== BEGIN PAGE LEVEL CSS START ================== -->
    <link rel="stylesheet" href="{{ asset('css/icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('libs/waves.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('libs/owl.carousel.min.css') }}" />
    <!-- ================== BEGIN PAGE LEVEL END ================== -->
    <!-- ================== BEGIN APP CSS  ================== -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <!-- ================== END APP CSS ================== -->
    @yield('css')
</head>

<body>
    <!-- Begin Page -->
    <div class="page-wrapper">
        <!-- Begin Header -->
        <!-- Begin Header -->
        <header id="page-topbar" class="topbar-header">
            <div class="navbar-header">
                <div class="left-bar">
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm"><img src="{{ asset('images/logo-white-sm.png') }}"
                                    alt="Lettstart Admin"></span>
                            <span class="logo-lg"><img src="{{ asset('images/logo-white.png') }}"
                                    alt="Lettstart Admin"></span>
                        </a>
                       {{--  <a href="index.html" class="logo logo-light">
                            <span class="logo-sm"><img src="{{ asset('images/logo-sm.png') }}"
                                    alt="Lettstart Admin"></span>
                            <span class="logo-lg"><img src="{{ asset('images/logo.png') }}"
                                    alt="Lettstart Admin"></span>
                        </a> --}}
                    </div>
                    <button type="button" id="vertical-menu-btn" class="btn hamburg-icon">
                        <i class="mdi mdi-menu"></i>
                    </button>
                    <!--   <form class="app-search d-none d-lg-block">
                <div class="search-box position-relative">
                    <input type="text" placeholder="Search..." class="form-control">
                    <span class="bx bx-search"></span>
                </div>
            </form> -->

                </div>
                <div class="right-bar">
                    <div class="d-inline-flex ml-0 ml-sm-2 d-lg-none dropdown">
                        <button data-toggle="dropdown" aria-haspopup="true" type="button"
                            id="page-header-search-dropdown" aria-expanded="false" class="btn header-item notify-icon">
                            <i class="bx bx-search"></i>
                        </button>
                        <div aria-labelledby="page-header-search-dropdown"
                            class="dropdown-menu-lg dropdown-menu-right p-0 dropdown-menu">
                            <!-- <form class="p-3">
                        <div class="search-box">
                            <div class="position-relative">
                                <input type="text" placeholder="Search..." class="form-control form-control-sm">
                                <i class="bx bx-search icon"></i>
                            </div>
                        </div>
                    </form> -->
                        </div>
                    </div>




                    <div class="d-inline-flex ml-0 ml-sm-2 dropdown">
                        <button data-toggle="dropdown" aria-haspopup="true" type="button"
                            id="page-header-profile-dropdown" aria-expanded="false" class="btn header-item">
                           {{--  <img src="{{asset('images/users/avatar-1.jpg')}}" alt="Header Avatar"
                                class="avatar avatar-xs mr-0"> --}}
                            <span class="d-none d-xl-inline-block ml-1">{{Auth::user()->name}}</span>
                            <i class="bx bx-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div aria-labelledby="page-header-profile-dropdown" class="dropdown-menu-right dropdown-menu">


                            <a class="text-danger dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="bx bx-log-in mr-1 text-danger"></i>{{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </div>
                    </div>
                    <div class="d-inline-flex">
                        <!-- BTN DE CONFIG -->
                        <!-- <button type="button" id="layout" class="btn header-item notify-icon">
                    <i class="bx bx-cog bx-spin"></i>
                </button> -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Header End -->
        <!-- Begin Left Navigation -->
        <!-- Begin Left Navigation -->
        <aside class="side-navbar">
            <div class="scroll-content" id="metismenu">
                <ul id="side-menu" class="metismenu list-unstyled">
                    <li class="side-nav-title side-nav-item menu-title">Menu</li>
                    <li>
                        <a href="javascript:void(0);" class="side-nav-link" aria-expanded="false">
                            <i class="bx bx-home-circle"></i>
                            <span>Seminarios</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul aria-expanded="false" class="nav-second-level">
                            <li class="side-nav-item">
                                <a class="side-nav-link" href="{{route('indexSeminario')}}">Mis Seminarios</a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link" href="{{route('indexParticipanteLocal')}}">Mis Participantes</a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link" href="{{route('indexInvitado')}}">Mis Invitados </a>
                            </li>
                        </ul>
                    </li>
                   {{--  <li>
                        <a href="javascript:void(0);" class="side-nav-link" aria-expanded="false">
                            <i class="bx bx-layout"></i>
                            <span> Layouts</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul aria-expanded="false" class="nav-second-level">
                            <li class="side-nav-item">
                                <a class="side-nav-link" href="layout-compact-side-menu.html"> Compact Sidebar </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link" href="layout-dark-sidebar.html"> Dark Sidebar </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link" href="layout-icon-sidebar.html"> Icon Sidebar </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link" href="layout-box.html"> Box Layout </a>
                            </li>
                        </ul>
                    </li> --}}
                    <!-- FIN ITEM -->
                </ul>
            </div>
        </aside>
        {{-- CONTENIDO BODY --}}

        <div class="main-content">

            <div class="page-content">

                @yield('content')

            </div>
        </div>
        {{-- FIN CONTENT --}}

        <div class="preloader">
            <div class="status">
                <div class="spinner-border avatar-sm text-primary m-2" role="status"></div>
            </div>
        </div>
       {{--  <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 mb-1 mb-md-0">
                        <span>2020 &copy; Marvel.</span>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <span>Design and Develop By <span class="text-primary font-weight-500">Lettstart
                                Design</span></span>
                    </div>
                </div>
            </div>
        </footer> --}}


    </div>

    <script src="{{ asset('js/vendor.min.js') }}"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js')
</body>

</html>
