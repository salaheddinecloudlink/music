@extends('layouts.main_artist')

<<<<<<< HEAD
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Artists</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Music</a></li>
                        <li class="active">Artists</li>
                    </ol>
                </div>
            <!-- /.col-lg-12 -->
=======
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/logo-icon.png">
    <title>Uruploadz.com</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('external_artist/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link
        href="{{ asset('external_artist/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css') }}"
        rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ asset('external_artist/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}"
        rel="stylesheet">
    <link
        href="{{ asset('external_artist/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('external/js/select2/dist/css/select2.min.css') }}">
    <!-- animation CSS -->
    <link href="{{ asset('external_artist/css/animate.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('external_artist/css/multi-select.css') }}" rel="stylesheet">
    <link href="{{ asset('external_artist/css/style.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-sidebar fix-header">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)"
                    data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part d-flex align-items-center justify-content-center">
                    <a class="logo" href="index.html">
                        <!-- <b><img src="plugins/images/logo-icon.png" alt="home" /></b> -->
                        <span class="hidden-xs"><strong><img src="external/plugins/images/logo.png"
                                    class="nav-brand" alt=""></strong></span>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i
                                class="icon-arrow-left-circle ti-menu"></i></a></li>

                </ul>
                <div class="center-logo"
                    style="position:absolute; left:0; right:0; top:10px; width: 200px; margin:0 auto">
                    <img src="./plugins/images/logo.png" alt="" width="200">
                </div>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li style="margin-right: 15px;">
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i
                                    class="fa fa-search"></i></a>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">

            <div class="sidebar-nav navbar-collapse slimscrollsidebar">

                <div class="user-profile m-t-20 text-center">
                    <div class="user-pro-body">
                        <div class="dropdown">
                            <a class="bg-white text-center m-t-15">
                                <img src="{{ asset('external_artist/plugins/images/users/1.jpg') }}" width="50"
                                    height="50" alt="user-img" class="m-b-5 img-circle">
                                <p class="hide-menu mb-0" style="color: #54667a;">Steve Gection</p>
                            </a>
                        </div>
                    </div>
                </div>

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span
                                class="input-group-btn">
                                <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="./index.html" class="waves-effect"><i class=" ti-layout-grid2 p-r-10"></i> <span
                                class="hide-menu"> Dashboard</span></a>
                    </li>
                    <li>
                        <a href="artist-edit.html" class="waves-effect"><i class="ti-user p-r-10"></i> <span
                                class="hide-menu"> Profile</span></a>
                    </li>
                    <li>
                        <a href="{{ route('artist.video') }}" class="waves-effect"><i
                                class="ti-video-camera p-r-10"></i> <span class="hide-menu"> Videos </span></a>
                    </li>
                    <li>
                        <a href="{{ route('artist.song') }}" class="waves-effect"><i
                                class="ti-music-alt p-r-10"></i> <span class="hide-menu"> Music </span></a>
                    </li>
                    <li>
                        <a href="./album.html" class="waves-effect"><i class="ti-microphone p-r-10"></i> <span
                                class="hide-menu"> Album</span></a>
                    </li>
                    <li>
                        <a href="event.html" class="waves-effect"><i class="ti-calendar p-r-10"></i> <span
                                class="hide-menu">Events</span></a>
                    </li>
                    <li>
                        <a href="fan.html" class="waves-effect"><i class="ti-face-smile p-r-10"></i> <span
                                class="hide-menu"> Followers</span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-settings p-r-10"></i> <span
                                class="hide-menu">Account Setting<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li> <a href="./membership.html">Membership Type</a> </li>
                            <li> <a href="./change-pass.html">Change Password</a> </li>
                            <li> <a href="./payment.html">Billing</a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="waves-effect"><i class="ti-upload  p-r-10"></i> <span
                                class="hide-menu">Terms
                                of use</span></a>
                    </li>


                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="waves-effect"><i
                                class="ti-power-off p-r-10"></i> <span class="hide-menu">Sign out</span></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9
        </div>
      
        <div class="row">
            <!-- .col -->
            <div class="col-md-4 col-sm-4">
                <div class="white-box">
                    <div class="row">
                        @if (count($artists) > 0)
                        @foreach ($artists as $artist)
                        <div class="col-md-4 col-sm-4 text-center">
                            <a href="artist-detail.html"><img src="{{ asset('pictures/'.$artist->avatar) }}" alt="user" class="img-circle img-responsive"></a>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h3 class="box-title m-b-0">{{$artist->first_name ?? ''}}</h3>
                            <small>{{$artist->last_name ?? ''}}</small>
                            <!-- .row -->
                            <div class="row m-t-10">
                                <div class="col-md-6 b-r">
                                    <strong>Followers</strong>
                                    <p>54564</p>
                                </div>
                                <div class="col-md-6">
                                    <strong>New York</strong>
                                    <p>USA</p>
                                </div>
                            </div>
                            <!-- /.row -->
                            <hr class="m-t-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-facebook waves-effect btn-circle waves-light" type="button"> <i class="fa fa-facebook"></i> </button>
                                    <button class="btn btn-twitter waves-effect btn-circle waves-light" type="button"> <i class="fa fa-twitter"></i> </button>
                                    <button class="btn btn-instagram waves-effect btn-circle waves-light" type="button"> <i class="fa fa-instagram"></i> </button>
                                    <button class="btn btn-danger waves-effect btn-circle waves-light" type="button"> <i class="fa fa-globe"></i> </button>
                                    <button class="btn btn-youtube waves-effect btn-circle waves-light" type="button"> <i class="fa fa-youtube"></i> </button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
<<<<<<< HEAD
                </div>
            </div>
            
=======

                    <div class="white-box">
                        <div>
                            <div class="d-flex align-items-center justify-content-center">
                                <ul class="nav nav-tabs nav-justified my_tab" role="tablist">
                                    <li role="presentation" class="nav-item active">
                                        <a href="#video" class="nav-link" aria-controls="home" role="tab"
                                            data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i
                                                    class="fa fa-video-camera"></i></span><span
                                                class="hidden-xs">
                                                Video</span></a>
                                    </li>
                                    <li role="presentation" class="nav-item">
                                        <a href="#music" class="nav-link" aria-controls="profile" role="tab"
                                            data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i
                                                    class="fa fa-music"></i></span>
                                            <span class="hidden-xs">Music</span></a>
                                    </li>
                                    <li role="presentation" class="nav-item">
                                        <a href="#album" class="nav-link" aria-controls="profile" role="tab"
                                            data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i
                                                    class="fa fa-image"></i></span>
                                            <span class="hidden-xs">Album</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="video">
                                    <div class="row dash-row">
                                        <div class="col-lg-4 dash-col">
                                            <div>
                                                <h5 class="dash-title">Most Liked</h5>
                                            </div>
                                            <ul>
                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd1.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-thumbs-up"></i> $456k</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd2.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-thumbs-up"></i> $386k</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd3.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-thumbs-up"></i> $322k</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd4.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-thumbs-up"></i> $289k</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="small-margin">
                                                    <div class="dash-full-content mb-0">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd5.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-thumbs-up"></i> $256k</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4 dash-col">
                                            <div>
                                                <h5 class="dash-title">Most Comments</h5>
                                            </div>
                                            <ul>
                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd1.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-comment"></i> $456k</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd2.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-comment"></i> $386k</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd3.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-comment"></i> $322k</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd4.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-comment"></i> $289k</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="small-margin">
                                                    <div class="dash-full-content mb-0">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd5.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-comment"></i> $256k</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4 dash-col">
                                            <div>
                                                <h5 class="dash-title">Most Shared</h5>
                                            </div>
                                            <ul>
                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd1.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-share-alt"></i> $456k</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd2.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-share-alt"></i> $386k</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd3.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-share-alt"></i> $322k</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd4.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-share-alt"></i> $289k</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="small-margin">
                                                    <div class="dash-full-content mb-0">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd5.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-share-alt"></i> $256k</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="music">
                                    <div class="row dash-row">
                                        <div class="col-lg-4 dash-col">
                                            <div>
                                                <h5 class="dash-title">Most Liked</h5>
                                            </div>
                                            <ul>
                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd6.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-thumbs-up"></i> $456k</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd7.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-thumbs-up"></i> $386k</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd8.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-thumbs-up"></i> $322k</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd9.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-thumbs-up"></i> $289k</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="small-margin">
                                                    <div class="dash-full-content mb-0">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd10.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-thumbs-up"></i> $256k</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4 dash-col">
                                            <div>
                                                <h5 class="dash-title">Most Comments</h5>
                                            </div>
                                            <ul>
                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd6.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-comment"></i> $456k</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd7.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-comment"></i> $386k</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd8.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-comment"></i> $322k</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd9.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-comment"></i> $289k</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="small-margin">
                                                    <div class="dash-full-content mb-0">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd10.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-comment"></i> $256k</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4 dash-col">
                                            <div>
                                                <h5 class="dash-title">Most Shared</h5>
                                            </div>
                                            <ul>
                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd6.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-share-alt"></i> $456k</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd7.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-share-alt"></i> $386k</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd8.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-share-alt"></i> $322k</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd9.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-share-alt"></i> $289k</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="small-margin">
                                                    <div class="dash-full-content mb-0">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd10.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-share-alt"></i> $256k</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="album">
                                    <div class="row dash-row">
                                        <div class="col-lg-4 dash-col">
                                            <div>
                                                <h5 class="dash-title">Most Liked</h5>
                                            </div>
                                            <ul>
                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd10.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-thumbs-up"></i> $456k</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd2.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-thumbs-up"></i> $386k</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd7.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-thumbs-up"></i> $322k</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd1.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-thumbs-up"></i> $289k</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="small-margin">
                                                    <div class="dash-full-content mb-0">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd8.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-thumbs-up"></i> $256k</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4 dash-col">
                                            <div>
                                                <h5 class="dash-title">Most Comments</h5>
                                            </div>
                                            <ul>
                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd10.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-comment"></i> $456k</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd2.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-comment"></i> $386k</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd7.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-comment"></i> $322k</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd1.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-comment"></i> $289k</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="small-margin">
                                                    <div class="dash-full-content mb-0">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd8.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-comment"></i> $256k</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4 dash-col">
                                            <div>
                                                <h5 class="dash-title">Most Shared</h5>
                                            </div>
                                            <ul>
                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd10.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-share-alt"></i> $456k</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd2.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-share-alt"></i> $386k</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd7.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-share-alt"></i> $322k</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="small-margin">
                                                    <div class="dash-full-content">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd1.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-share-alt"></i> $289k</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="small-margin">
                                                    <div class="dash-full-content mb-0">
                                                        <div class="dash-image-content">
                                                            <div>
                                                                <img src="external_artist/plugins/images/music/vd8.jpg"
                                                                    class="rounded-circle m-r-20" width="60px"
                                                                    height="60px" alt="">
                                                            </div>
                                                            <div>
                                                                <h5 class="dash-title m-0 m-b-5">The Precious</h5>
                                                                <p class="fs-14 m-0">Sourcerer</p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="" class="text-dark"><i
                                                                    class="text-primary fa fa-share-alt"></i> $256k</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer">
                <div class="row">
                    <div class="col-lg-2 col-md-12 col-sm-12 m-b-40">
                        <div class="d-flex align-items-center justify-content-center">
                            <div>
                                <img src="external/plugins/images/logo.png" class="img-responsive home-logo" alt="">
                            </div>
                        </div>
                        <div class="text-center m-t-20">
                            <div class="text-center artist-social">
                                <a href="javascript: void(0);" class="footer-icon"><i
                                        class="fa fa-facebook fa-2x"></i></a>
                                <a href="javascript: void(0);" class="footer-icon"><i
                                        class="fa fa-twitter fa-2x"></i></a>
                                <a href="javascript: void(0);" class="footer-icon"><i
                                        class="fa fa-instagram fa-2x"></i></a>
                                <a href="javascript: void(0);" class="footer-icon"><i
                                        class="fa fa-youtube-play fa-2x"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 col-6 m-b-20">
                        <ul class="firstChild">
                            <li class="pb-2"><a href="javascript: void(0);"
                                    class="fs-16 text-white footer-link">Home</a></li>
                            <li class="pb-2"><a href="javascript: void(0);"
                                    class="fs-16 text-white footer-link">Events</a></li>
                            <li class="pb-2"><a href="javascript: void(0);"
                                    class="fs-16 text-white footer-link">Artist</a>
                            </li>
                            <li><a href="javascript: void(0);" class="fs-16 text-white footer-link">About Us</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 col-6 m-b-20">
                        <ul>
                            <li class="pb-2"><a href="javascript: void(0);"
                                    class="fs-16 text-white footer-link">News</a></li>
                            <li class="pb-2"><a href="javascript: void(0);"
                                    class="fs-16 text-white footer-link">Music</a></li>
                            <li class="pb-2"><a href="javascript: void(0);"
                                    class="fs-16 text-white footer-link">Fans</a></li>
                            <li><a href="javascript: void(0);" class="fs-16 text-white footer-link">Discussion</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 col-6 m-b-20">
                        <ul>
                            <li class="pb-2"><a href="javascript: void(0);"
                                    class="fs-16 text-white footer-link">Advertise With
                                    Us</a>
                            </li>
                            <li class="pb-2"><a href="javascript: void(0);"
                                    class="fs-16 text-white footer-link">Privacy</a>
                            </li>
                            <li class="pb-2"><a href="javascript: void(0);"
                                    class="fs-16 text-white footer-link">Copyright</a>
                            </li>
                            <li class="pb-2"><a href="javascript: void(0);"
                                    class="fs-16 text-white footer-link">Featured</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 col-6 m-b-20">
                        <ul>
                            <li class="pb-2"><a href="javascript: void(0);"
                                    class="fs-16 text-white footer-link">Refunds</a>
                            </li>
                            <li class="pb-2"><a href="javascript: void(0);"
                                    class="fs-16 text-white footer-link">Privacy</a>
                            </li>
                            <li><a href="javascript: void(0);" class="fs-16 text-white footer-link">Trademark</a></li>
                            <li><a href="javascript: void(0);" class="fs-16 text-white footer-link">Faq</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 col-6 m-b-20">
                        <ul>
                            <li class="pb-2"><a href="javascript: void(0);"
                                    class="fs-16 text-white footer-link">Pricing</a>
                            </li>
                            <li class="pb-2"><a href="javascript: void(0);"
                                    class="fs-16 text-white footer-link">Event
                                    finder</a>
                            </li>
                            <li class="pb-2"><a href="javascript: void(0);"
                                    class="fs-16 text-white footer-link">Contact
                                    Us</a>
                            </li>
                            <li><a href="javascript: void(0);" class="fs-16 text-white footer-link">Terms Of Use</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>
>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9
        </div>
        <!-- /.row -->
        <!-- .row -->
        
        <!-- /.row -->
        <!-- .row -->
        
        <!-- /.row -->
    </div>
<<<<<<< HEAD
    <!-- /.container-fluid -->
    
</div>
@endsection
=======
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{ asset('external_artist/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('external_artist/bootstrap/dist/js/tether.min.js') }}"></script>
    <script src="{{ asset('external_artist/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script
        src="{{ asset('external_artist/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js') }}">
    </script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{ asset('external_artist/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
    <script src="{{ asset('externam/js/select2/dist/js/select2.full.min.js') }}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{ asset('external_artist/js/jquery.slimscroll.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('external_artist/js/waves.js') }}"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script
        src="{{ asset('external_artist/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js') }}">
    </script>
    <script src="{{ asset('external/plugins/apexcharts-bundle/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('external/js/chart.js') }}"></script>
    <script type="text/javascript">
        // Date Picker
        jQuery('.mydatepicker').datepicker();
        $(".select2").select2();
        // $(".selectpicker").selectpicker();
    </script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('external_artist/js/custom.min.js') }}"></script>
</body>

</html>
>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9
