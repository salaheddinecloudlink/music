<!DOCTYPE html>
<html lang="en">

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
                    <a class="logo" href="./index.html">
                        <!-- <b><img src="plugins/images/logo-icon.png" alt="home" /></b> -->
                        <span class="hidden-xs"><strong><img src="../plugins/images/logo.png" class="nav-brand"
                                    alt=""></strong></span>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i
                                class="icon-arrow-left-circle ti-menu"></i></a></li>

                </ul>
                <div class="center-logo"
                    style="position:absolute; left:0; right:0; top:10px; width: 200px; margin:0 auto">
                    <img src="../plugins/images/logo.png" alt="" width="200">
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
                                <img src="../plugins/images/users/5.jpg" width="50" height="50" alt="user-img"
                                    class="m-b-5 img-circle">
                                <p class="hide-menu mb-0" style="color: #54667a;">Uyi Yinka</p>
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
                        <a href="./index.html" class="waves-effect"><i class="ti-view-grid p-r-10"></i> <span
                                class="hide-menu"> General</span></a>
                    </li>
                    <li>
                        <a href="./artist.html" class="waves-effect"><i class="ti-user p-r-10"></i> <span
                                class="hide-menu"> Artist </span></a>
                    </li>
                    <li>
                        <a href="./video.html" class="waves-effect"><i class="ti-video-camera p-r-10"></i> <span
                                class="hide-menu"> Videos </span></a>
                    </li>
                    <li>
                        <a href="./music.html" class="waves-effect"><i class="ti-music-alt p-r-10"></i> <span
                                class="hide-menu"> Musics </span></a>
                    </li>
                    <li>
                        <a href="./event.html" class="waves-effect"><i class="ti-briefcase p-r-10"></i> <span
                                class="hide-menu"> Events </span></a>
                    </li>
                    <li>
                        <a href="./news.html" class="waves-effect"><i class="ti-bookmark-alt p-r-10"></i> <span
                                class="hide-menu"> News </span></a>
                    </li>
                    <li>
                        <a href="./fans.html" class="waves-effect"><i class="ti-face-smile p-r-10"></i> <span
                                class="hide-menu"> Fans </span></a>
                    </li>

                    <li>
                        <a href="./discussion.html" class="waves-effect"><i class="ti-calendar p-r-10"></i> <span
                                class="hide-menu"> Discussion</span></a>
                    </li>
                    <li>
                        <a href="./advertisement.html" class="waves-effect"><i class="ti-receipt p-r-10"></i> <span
                                class="hide-menu"> Advertisement</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-xs-12">
                        <h4 class="page-title">Favourite Discussions</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">All Discussions
                                <a class="btn btn-success pull-right" href="#" data-toggle="modal"
                                    data-target="#video-add">Add Discussion</a>
                            </h3>

                            <hr>

                            <div class="row el-element-overlay">
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd3.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">03:30</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 100</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd14.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">03:10</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 101</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd13.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">04:30</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 102</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd12.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">03:47</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 103</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd8.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">05:23</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 104</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd4.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">02:30</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 105</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd5.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">03:20</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 106</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd11.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">04:30</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 107</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd3.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">03:30</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 108</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd14.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">03:10</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 109</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd13.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">04:30</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 110</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd12.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">03:47</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 111</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd8.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">05:23</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 112</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd4.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">02:30</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 113</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd5.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">03:20</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 114</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="pagination pagination-split">
                                        <li class="disabled"> <a href="#"><i class="fa fa-angle-left"></i></a>
                                        </li>
                                        <li class="active"> <a href="#">1</a> </li>
                                        <li> <a href="#">2</a> </li>
                                        <li> <a href="#">3</a> </li>
                                        <li> <a href="#">4</a> </li>
                                        <li> <a href="#">5</a> </li>
                                        <li> <a href="#"><i class="fa fa-angle-right"></i></a> </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div id="video-add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">×</button>
                            <h4 class="modal-title">Add New Discussion</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-material form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-12" for="title">Discussion Title<span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <input type="text" id="title" name="title" class="form-control"
                                            placeholder="Discussion Title">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="title">Discussion #<span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <input type="text" id="title" name="title" class="form-control"
                                            placeholder="Discussion No">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="title">Link to Artist Page(optional)</label>
                                    <div class="col-md-12">
                                        <select class="form-control" required="">
                                            <option selected="">Select Artist page</option>
                                            <option>Justin Bieber</option>
                                            <option>Selena gomez</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Choose Discussion<span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <label class="custom-file">
                                            <input type="file" id="file" class="custom-file-input">
                                            <span class="custom-file-control"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">Description<span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Upload
                                    Discussion</button>
                                <button type="button" class="btn btn-inverse waves-effect waves-light"
                                    data-dismiss="modal">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div id="video-edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">×</button>
                            <h4 class="modal-title">Edit Discussion</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-material form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-12" for="title">Discussion Title<span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <input type="text" id="title" name="title" class="form-control"
                                            placeholder="Discussion Title" value="Discussion">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="title">Discussion #<span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <input type="text" id="title" name="title" class="form-control"
                                            placeholder="Discussion No" value="100">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="title">Link to Artist Page(optional)</label>
                                    <div class="col-md-12">
                                        <select class="form-control" required="">
                                            <option>Select Artist page</option>
                                            <option selected="">Justin Bieber</option>
                                            <option>Selena gomez</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Choose Discussion<span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <label class="custom-file">
                                            <input type="file" id="file" class="custom-file-input">
                                            <span class="custom-file-control"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">Description<span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="3">Lorem Ipsum</textarea>
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update
                                    Discussion</button>
                                <button type="button" class="btn btn-inverse waves-effect waves-light"
                                    data-dismiss="modal">Reset</button>
                            </form>
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
                                <img src="../../images/logo.png" class="img-responsive home-logo" alt="">
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
                                    class="fs-16 text-white footer-link">Events</a>
                            </li>
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
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../bootstrap/dist/js/tether.min.js"></script>
    <script src="../bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <script src="../js/select2/dist/js/select2.full.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="../js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="../js/waves.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="../plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="../js/chart.js"></script>
    <script type="text/javascript">
        // Date Picker
        jQuery('.mydatepicker').datepicker();
        $(".select2").select2();
        // $(".selectpicker").selectpicker();
    </script>
    <!-- Custom Theme JavaScript -->
    <script src="../js/custom.min.js"></script>
</body>

</html>
