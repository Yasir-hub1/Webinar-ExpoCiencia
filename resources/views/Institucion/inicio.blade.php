@extends('layouts.app2')


@section('content')
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="page-title dflex-between-center">
                <h3 class="mb-1 font-weight-bold">Projects</h3>
                <!-- <ol class="breadcrumb mb-0 mt-1">
                                            <li class="breadcrumb-item">
                                                <a href="../index.html">
                                                    <i class="bx bx-home fs-xs"></i>
                                                </a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="calender.html">
                                                    Apps
                                                </a>
                                            </li>
                                            <li class="breadcrumb-item active">Projects</li>
                                        </ol> -->
            </div>
        </div>
    </div>
    <!-- page content -->
    <div class="page-content-wrapper mt--45">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <!-- cta -->
                    <div class="row">
                        <div class="col-sm-8">
                            <a href="project-create.html" class="btn btn-outline-primary">
                                <i class="bx bx-plus bx-flashing mr-1"></i>Agregar Seminario
                            </a>
                            <div class="btn-group mt-2 mt-sm-0 ml-sm-1 mx-sm-2">
                                <button type="button" class="btn btn-info waves-effect waves-float">All</button>
                                <button type="button"
                                    class="btn btn-outline-info waves-effect waves-float">Ongoing</button>
                                <button type="button"
                                    class="btn btn-outline-info waves-effect waves-float">Finished</button>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <form class="float-sm-right mt-3 mt-sm-0">
                                <div class="search-box">
                                    <div class="position-relative">
                                        <input type="text" placeholder="Search Project..."
                                            class="form-control form-control-sm">
                                        <i class="bx bx-search icon"></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="avatar bg-soft-success text-success">
                                    AG
                                </div>
                                <div class="media-body overflow-hidden">
                                    <h5 class="card-title mb-2 pr-4 text-truncate"><a href="#" class="text-dark"
                                            title="Landing page Design">Landing page
                                            Design</a></h5>
                                    <p class="text-muted mb-3">Lorem Ipsum is simply dummy text of the
                                        printing and
                                        typesetting.</p>
                                    <div class="circle-condense-profiles">
                                        <a href="javascript: void(0);" class="condense-profile" data-toggle="tooltip"
                                            data-placement="top" title="" data-original-title="ProfileUser">
                                            <img src="assets/images/users/avatar-2.jpg" alt="Lettstart Admin"
                                                class="avatar-sm rounded-circle">
                                        </a>
                                        <a href="javascript: void(0);" class="condense-profile" data-toggle="tooltip"
                                            data-placement="top" title="" data-original-title="ProfileUser">
                                            <img src="assets/images/users/avatar-2.jpg" alt="Lettstart Admin"
                                                class="avatar-sm rounded-circle">
                                        </a>
                                        <a href="javascript: void(0);" class="condense-profile" data-toggle="tooltip"
                                            data-placement="top" title="" data-original-title="ProfileUser">
                                            <img src="assets/images/users/avatar-2.jpg" alt="Lettstart Admin"
                                                class="avatar-sm rounded-circle">
                                        </a>
                                        <a href="javascript: void(0);" class="condense-profile" data-toggle="tooltip"
                                            data-placement="top" title="" data-original-title="ProfileUser">
                                            <div
                                                class="avatar bg-white text-secondary op-6 font-weight-bold avatar-sm mr-0">
                                                +3</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body border-top">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <h5 class="font-size-14 mb-0" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Task">
                                                <i class="bx bx-list-ul fs-sm text-secondary op-6 align-middle"></i>
                                                <span class="align-middle">76</span>
                                            </h5>
                                        </li>
                                        <li class="list-inline-item">
                                            <h5 class="font-size-14 mb-0" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Comments">
                                                <i class="bx bx-comment-detail fs-sm text-secondary op-6 align-middle"></i>
                                                <span class="align-middle">240</span>
                                            </h5>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col pl-2">
                                    <span class="badge badge-success float-right">Completed</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown edit-field-half-left">
                            <div class="btn-icon btn-icon-sm btn-icon-soft-primary dropdown-toggle mr-0 edit-field-icon"
                                data-toggle="dropdown">
                                <i class="mdi mdi-dots-vertical fs-sm"></i>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item">
                                    <i class="mdi mdi-pencil align-middle mr-1 text-primary"></i>
                                    <span>Edit</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="mdi mdi-delete align-middle mr-1 text-danger"></i>
                                    <span>Delete</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div><!-- end col-4 -->
               
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="pagination flat-rounded-pagination justify-content-center mb-4">
                        <li class="page-item disabled">
                            <a href="javascript: void(0);" class="page-link" data-effect="wave"><i
                                    class="bx bx-chevron-left"></i></a>
                        </li>
                        <li class="page-item active">
                            <a href="javascript: void(0);" class="page-link" data-effect="wave">1</a>
                        </li>
                        <li class="page-item">
                            <a href="javascript: void(0);" class="page-link" data-effect="wave">2</a>
                        </li>
                        <li class="page-item">
                            <a href="javascript: void(0);" class="page-link" data-effect="wave">3</a>
                        </li>
                        <li class="page-item">
                            <a href="javascript: void(0);" class="page-link" data-effect="wave">4</a>
                        </li>
                        <li class="page-item">
                            <a href="javascript: void(0);" class="page-link" data-effect="wave"><i
                                    class="bx bx-chevron-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
