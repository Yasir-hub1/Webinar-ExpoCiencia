@extends('layouts.app2')

@section('css')
    <style>
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
    </style>
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    <link href="{{ asset('Datatable/css/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('Datatable/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="page-title dflex-between-center">
                <h3 class="mb-1 font-weight-bold">Editar seminario</h3>
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

    {{-- CONTENIDO DE LA EDICION --}}
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container bootstrap snippets bootdeys">
        <div class="row">
            <div class="col-xs-12 col-sm-9">
                <form class="form-horizontal">
                    <div class="panel panel-default">
                        <div class="panel-body text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-circle profile-avatar"
                                alt="User avatar">
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">User info</h4>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Location</label>
                                <div class="col-sm-10">
                                    <select class="form-control">
                                        <option selected="">Select country</option>
                                        <option>Belgium</option>
                                        <option>Canada</option>
                                        <option>Denmark</option>
                                        <option>Estonia</option>
                                        <option>France</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Company name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Position</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Contact info</h4>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Work number</label>
                                <div class="col-sm-10">
                                    <input type="tel" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Mobile number</label>
                                <div class="col-sm-10">
                                    <input type="tel" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">E-mail address</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Work address</label>
                                <div class="col-sm-10">
                                    <textarea rows="3" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Security</h4>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Current password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">New password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <div class="checkbox">
                                        <input type="checkbox" id="checkbox_1">
                                        <label for="checkbox_1">Make this account public</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-default">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- FIN --}}
@endsection
@section('js')
    <script>
        var hostUrl = "/metronic8/";
    </script>


    <script src="{{ asset('Datatable/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('Datatable/js/plugins.bundle.js') }}"></script>

    {{-- <script src="{{ asset('Datatable/js/datatables.bundle.js') }}"></script> --}}


    <script src="{{ asset('Datatable/js/list.js') }}"></script>
    <script src="{{ asset('Datatable/js/add.js') }}"></script>
@endsection
