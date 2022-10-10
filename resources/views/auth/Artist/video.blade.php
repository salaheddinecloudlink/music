<<<<<<< HEAD
@extends('layouts.main_artist')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
           
    <div class="row bg-title">
        <div class="col-xs-12">
            <h4 class="page-title">Videos Gallery</h4>
        </div>
    </div>
    @if (Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="row el-element-overlay">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">My Videos
                    <button class="btn btn-success pull-right" data-toggle="modal" data-target="#video-add">Add
                        Video</button>
                </h3>
                <hr>
                <div class="row">
                    @if (count($videos) > 0)
                        @foreach ($videos as $video)
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="el-card-item">
                                    <div class="el-card-avatar el-overlay-1"> <img
                                            src="{{ asset('pictures/'.$video->picture) }}" />
                                        <div class="el-overlay">
                                            <ul class="el-info">
                                                <li><a class="btn default btn-outline" href="{{ route('artist.video_details', ['id' => $video->id]) }}"><i
                                                            class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                <li><a class="edit_video btn default btn-outline" href="#"
                                                        id="editSong" data-id="{{ $video->id }}"><i
                                                            class="fa fa-pencil fa-2x"></i></a></li>
                                                <form action="{{ route('artist.destroy_video') }}" method="POST"
                                                    onsubmit="return confirm('Do you want to delete?')">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $video->id }}">


                                                    <li><button type="submit" class="btn default btn-outline"><i
                                                                class="fa fa-trash fa-2x"></i></button></li>
                                                </form>
                                            </ul>
                                        </div>
                                        <span class="vd-time badge bg-inverse hidden-xs">03:30</span>
                                    </div>
                                    <div class="alb-info">
                                        <h5>{{ $video->title }}</h5>
                                        <h6 class="text-muted">{{ $video->FeaturedArtist }}</h6>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h5 class="text-muted">No videos to display</h5>
                    @endif
                </div>


                <div class="row">
                    <div class="col-md-12">
                        {{ $videos->links() }}
                    </div>
                </div>
            </div>
        </div>

        <!-- /.row -->


        <div id="video-add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Add New Video</h4>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('artist.store_video') }}" enctype="multipart/form-data"
                            class="form-material form-horizontal">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-12" for="title">Video Title <span
                                        class="text-danger">*</span></label>
                                <div class="col-md-12">
                                    <input type="text" name="title"
                                        class="form-control @error('title') is-invalid @enderror" placeholder="Title here">

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Featured Artist</label>

                                <div class="col-md-12">
                                    <input type="radio" id="chkYes" name="chkPassPort" value="yes"
                                        style="margin-bottom: 10px;" />
                                    Yes
                                    <input type="radio" id="chkNo" checked name="chkPassPort" value="no"
                                        style="margin-bottom: 5px; margin-left: 10px;" />
                                    No
                                    <br>
                                    <input type="text" id="featured" name="FeaturedArtist"
                                        class="form-control @error('FeaturedArtist') is-invalid @enderror"
                                        placeholder="Featuring" disabled="disabled" />

                                    @error('FeaturedArtist')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-12">Music video Type</label>
                                <div class="col-sm-12">
                                    <div class="single_filter">
                                        <select name="SongType" class="form-control">
                                            <option selected="">Select Genre</option>
                                            @foreach (App\Models\SongType::all() as $songtype)
                                                <option value="{{ $songtype->id }}">
                                                    {{ $songtype->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('SongType')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-12">Upload Video</label>
                                <div class="col-sm-12">
                                    <label class="custom-file">
                                        <input type="file" accept="video/*" name="video"
                                            class="custom-file-input form-control @error('video') is-invalid @enderror">
                                        @error('video')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <span class="custom-file-control"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Picture of video</label>
                                <div class="col-sm-12">
                                    <label class="custom-file">
                                        <input type="file" name="picture"
                                            class="custom-file-input form-control @error('picture') is-invalid @enderror">
                                        @error('picure')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <span class="custom-file-control"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-12">Video Description</label>
                                <div class="col-sm-12">
                                    <label class="custom-file">
                                        <textarea name="description" class="custom-input form-control @error('description') is-invalid @enderror"
                                            cols="63" rows="2"></textarea>
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Add
                                Video</button>
                            <button type="button" class="btn btn-inverse waves-effect waves-light"
                                data-dismiss="modal">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>




        <div id="video-edit" class="modal " tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Edit Video</h4>
                    </div>

                    <div class="modal-body editBodyvideo">

                        <form method="POST"  action="{{ route('artist.update_video') }}"
                            enctype="multipart/form-data" class="form-material form-horizontal">
                            @csrf

                            <ul class=" d-none" id="#success_messagevideo"></ul>

                            <ul class="alert alert-warning d-none" id="updatevideoform_errList"></ul>
                            <input type="hidden" name="id_video" id="edit_video_id">

                            <div class="form-group">
                                <label class="col-md-12" for="title">Video Title <span
                                        class="text-danger">*</span></label>
                                <div class="col-md-12">
                                    <input type="text" id="title1" name="title"
                                        class="form-control @error('title') is-invalid @enderror"
                                        placeholder="Title here">

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Featured Artist</label>

                                <div class="col-md-12">
                                    <input type="radio" id="chkssYes" name="chkPassPortss" value="yes"
                                        style="margin-bottom: 10px;" />
                                    Yes
                                    <input type="radio" id="chkssNo" checked name="chkPassPortss" value="no"
                                        style="margin-bottom: 5px; margin-left: 10px;" />
                                    No
                                    <br>
                                    <input type="text" id="featuredss" name="FeaturedArtist"
                                        class="form-control @error('FeaturedArtist') is-invalid @enderror"
                                        placeholder="Featuring" disabled="disabled" />

                                    @error('FeaturedArtist')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-12">Music video Type</label>
                                <div class="col-sm-12">
                                    <div class="single_filter">
                                        <select name="SongType" id="selectsongvideo" class="form-control">

                                            @foreach (App\Models\SongType::all() as $songtype)
                                                <option value="{{ $songtype->id }}">
                                                    {{ $songtype->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('SongType')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Upload Video</label>
                                <div class="col-sm-12">
                                    <label class="custom-file">
                                        <input type="file" id="video" accept="video/*" name="video"
                                            class="custom-file-input form-control @error('video') is-invalid @enderror">
                                        @error('video')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <span class="custom-file-control"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Picture of video</label>
                                <div class="col-sm-12">
                                    <label class="custom-file">
                                        <input type="file" id="pictures" name="picture"
                                            class="custom-file-input form-control @error('picture') is-invalid @enderror">
                                        @error('picure')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <span class="custom-file-control"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Video Description</label>
                                <div class="col-sm-12">
                                    <label class="custom-file">
                                        <textarea name="description" id="description1"
                                            class="custom-input form-control @error('description') is-invalid @enderror" cols="63" rows="2"></textarea>
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </label>
                                </div>
                            </div>
                            <button type="submit"
                                class="btn btn-success waves-effect waves-light m-r-10 update_video">Update
                                Video</button>
                            <button type="button" class="btn btn-inverse waves-effect waves-light"
                                data-dismiss="modal">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
    <!-- /.container-fluid -->

@endsection
=======
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
                        <h4 class="page-title">Videos</h4>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row el-element-overlay">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">My Videos
                                <button class="btn btn-success pull-right" data-toggle="modal"
                                    data-target="#video-add">Add Video</button>
                            </h3>
                            <hr>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img
                                                src="../plugins/images/music/vd1.jpg" />
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="video-detail.html"><i
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
                                            <h5>The Precious</h5>
                                            <h6 class="text-muted">Sourcerer</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img
                                                src="../plugins/images/music/vd2.jpg" />
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="video-detail.html"><i
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
                                            <h5>Gold</h5>
                                            <h6 class="text-muted">Sourcerer</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img
                                                src="../plugins/images/music/vd4.jpg" />
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="video-detail.html"><i
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
                                            <h5>Hello</h5>
                                            <h6 class="text-muted">Sourcerer</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img
                                                src="../plugins/images/music/vd6.jpg" />
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="video-detail.html"><i
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
                                            <h5>The Secret</h5>
                                            <h6 class="text-muted">Sourcerer</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img
                                                src="../plugins/images/music/vd7.jpg" />
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="video-detail.html"><i
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
                                            <h5>Sensible Truth</h5>
                                            <h6 class="text-muted">Sourcerer</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img
                                                src="../plugins/images/music/vd8.jpg" />
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="video-detail.html"><i
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
                                            <h5>Column Head</h5>
                                            <h6 class="text-muted">Sourcerer</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img
                                                src="../plugins/images/music/vd10.jpg" />
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="video-detail.html"><i
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
                                            <h5>The Killer</h5>
                                            <h6 class="text-muted">Sourcerer</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img
                                                src="../plugins/images/music/vd11.jpg" />
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="video-detail.html"><i
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
                                            <h5>Apollo</h5>
                                            <h6 class="text-muted">Sourcerer</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img
                                                src="../plugins/images/music/vd1.jpg" />
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="video-detail.html"><i
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
                                            <h5>The Endaevour</h5>
                                            <h6 class="text-muted">Sourcerer</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img
                                                src="../plugins/images/music/vd12.jpg" />
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="video-detail.html"><i
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
                                            <h5>Instant</h5>
                                            <h6 class="text-muted">Sourcerer</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img
                                                src="../plugins/images/music/vd13.jpg" />
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="video-detail.html"><i
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
                                            <h5>Allied Force</h5>
                                            <h6 class="text-muted">Sourcerer</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img
                                                src="../plugins/images/music/vd14.jpg" />
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="video-detail.html"><i
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
                                            <h5>Area 51</h5>
                                            <h6 class="text-muted">Sourcerer</h6>
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
                <!-- /.row -->

                <div id="video-add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">×</button>
                                <h4 class="modal-title">Add New Video</h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-material form-horizontal">
                                    <div class="form-group">
                                        <label class="col-md-12" for="title">Video Title <span
                                                class="text-danger">*</span></label>
                                        <div class="col-md-12">
                                            <input type="text" id="title" name="title" class="form-control"
                                                placeholder="Title here">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Featured Artist</label>

                                        <div class="col-md-12">
                                            <input type="radio" id="chkYes" name="chkPassPort"
                                                style="margin-bottom: 10px;" />
                                            Yes
                                            <input type="radio" id="chkNo" checked name="chkPassPort"
                                                style="margin-bottom: 5px; margin-left: 10px;" />
                                            No
                                            <br>
                                            <input type="text" id="featured" disabled="disabled" class="form-control"
                                                placeholder="Featuring" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-12">Upload Video</label>
                                        <div class="col-sm-12">
                                            <label class="custom-file">
                                                <input type="file" id="file" class="custom-file-input">
                                                <span class="custom-file-control"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Add
                                        Video</button>
                                    <button type="button" class="btn btn-inverse waves-effect waves-light"
                                        data-dismiss="modal">Cancel</button>
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
                                <h4 class="modal-title">Edit Video</h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-material form-horizontal">
                                    <div class="form-group">
                                        <label class="col-md-12" for="title">Video Title <span
                                                class="text-danger">*</span></label>
                                        <div class="col-md-12">
                                            <input type="text" value="The Precious" id="title" name="title"
                                                class="form-control" placeholder="Title here">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="artist">Featured Artist</label>
                                        <div class="col-md-12">
                                            <input type="radio" id="chksYes" checked name="chkPassPorts"
                                                style="margin-bottom: 10px;" />
                                            Yes
                                            <input type="radio" id="chksNo" name="chkPassPorts"
                                                style="margin-bottom: 10px; margin-left: 5px;" />
                                            No
                                            <br>
                                            <input type="text" id="featureds" class="form-control"
                                                value="Sourcerer" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-12">Upload Video</label>
                                        <div class="col-sm-12">
                                            <label class="custom-file">
                                                <input type="file" id="file" class="custom-file-input">
                                                <span class="custom-file-control"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <button type="submit"
                                        class="btn btn-success waves-effect waves-light m-r-10">Update
                                        Video</button>
                                    <button type="button" class="btn btn-inverse waves-effect waves-light"
                                        data-dismiss="modal">Cancel</button>
                                </form>
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
                                <img src="./plugins/images/logo.png" class="img-responsive home-logo" alt="">
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
        </div>
        <!-- /#page-wrapper -->
    </div>
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
    <script>
        $(function() {
            $("input[name='chkPassPort']").click(function() {
                if ($("#chkYes").is(":checked")) {
                    $("#featured").removeAttr("disabled");
                    $("#featured").focus();
                } else {
                    $("#featured").attr("disabled", "disabled");
                }
            });
            $("input[name='chkPassPorts']").click(function() {
                if ($("#chksYes").is(":checked")) {
                    $("#featureds").removeAttr("disabled");
                    $("#featureds").focus();
                } else {
                    $("#featureds").attr("disabled", "disabled");
                }
            });
        });
    </script>

</body>

</html>
>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9
