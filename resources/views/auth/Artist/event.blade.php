<<<<<<< HEAD
@extends('layouts.main_artist')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
    <div class="row bg-title">
        <div class="col-xs-12">
            <h4 class="page-title">Events</h4>
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
    @if ($errors->any())
        <h4>{{ $errors->first() }}</h4>
    @endif

    <!-- /.row -->
    <!-- .row -->
    <div class="row">

        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">All Events
                    <a class="btn btn-success pull-right" href="#" data-toggle="modal" data-target="#event-add">Add
                        Event</a>
                </h3>

                <hr>

                <div class="row el-element-overlay">


                    @if (count($events) > 0)
                        @foreach ($events as $event)
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="el-card-item">
                                    <p class="feature-video-badge">
                                        <i class="fa fa-calendar"></i>
                                        {{ Carbon\Carbon::parse($event->event_date)->format('F d') }}
                                    </p>
                                    <div class="el-card-avatar el-overlay-1"> <img
                                            src="{{ asset('pictures/' . $event->picture) }}">
                                        <div class="el-overlay">
                                            <ul class="el-info">
                                                <li><a class="btn default btn-outline" href="{{ route('artist.event_details', ['id' => $event->id]) }}"><i
                                                            class="fa fa-play-circle-o fa-2x"></i> <audio> </a></li>
                                                <li><a class="edit_event  btn default btn-outline editTrigger"
                                                        href="#" id="editEvent" data-id="{{ $event->id }}"><i
                                                            class="fa fa-pencil fa-2x"></i></a></li>

                                                <form action="{{ route('artist.destroy_event') }}" method="POST"
                                                    onsubmit="return confirm('Do you want to delete?')">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $event->id }}">
                                                    <li><button type="submit" class="btn default btn-outline">
                                                            <i class="fa fa-trash fa-2x"></i></button></li>
                                                </form>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="alb-info">
                                        <a href="#" class="font-bold">{{ $event->event_name }}</a>
                                        <ul style="display: flex; font-size: 14px;">
                                            <li style="margin-right: 16px;">
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-music"
                                                        style="margin-right: 3px;"></i>{{ $event->eventType->name }}
                                                </a>
                                            </li>
                                            <li style="margin-right: 16px;">
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-map-marker" style="margin-right: 3px;"></i>
                                                    {{ $event->city }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h5 class="text-muted">No Event to display</h5>
                    @endif

                </div>
                <!-- /.row -->
            </div>

        </div>

    </div>

    <!-- /.row -->
    <div id="event-add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
        style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Add New Event</h4>
                </div>
                <div class="modal-body">

                    <form method="POST" action="{{ route('artist.store_event') }}" enctype="multipart/form-data"
                        class="form-material form-horizontal">
                        @csrf

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-md-12" for="title">Event Name <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <input type="text" name="event_name"
                                            class="form-control @error('event_name') is-invalid @enderror"
                                            placeholder="Enter event name">
                                        @error('event_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-md-12" for="title">Venue </label>
                                    <div class="col-md-12">
                                        <input type="text" name="venue"
                                            class="form-control @error('venue') is-invalid @enderror"
                                            placeholder="Enter venue name">
                                        @error('venue')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-md-12" for="title">Address <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <input type="text" name="address"
                                            class="form-control @error('address') is-invalid @enderror"
                                            placeholder="Enter address">
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-md-12" for="title">City <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <input type="text" name="city"
                                            class="form-control @error('city') is-invalid @enderror"
                                            placeholder="Enter city">
                                        @error('city')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">



                                <div class="form-group">
                                    <label class="col-sm-12">State <span class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <select class="custome_txt form-control" name="state">
                                            <option selected="">Select State</option>
                                            @foreach (App\Models\State::all() as $state)
                                                <option value="{{ $state->id }}">
                                                    {{ $state->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('state')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-md-12" for="title">Zip <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <input type="text" name="zip"
                                            class="form-control @error('zip') is-invalid @enderror"
                                            placeholder="Enter Zip">
                                        @error('zip')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-md-12" for="title">Start Time <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <input type="time" name="start_time"
                                            class="form-control @error('start_time') is-invalid @enderror"
                                            placeholder="Enter start time">
                                        @error('start_time')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-md-12" for="title">Finish Time <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <input type="time" name="finish_time"
                                            class="form-control @error('finish_time') is-invalid @enderror"
                                            placeholder="Enter finish time">
                                        @error('finish_time')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-md-12" for="title">Event Date <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <input type="date" name="event_date" class="form-control"
                                            placeholder="Enter date @error('event_date') is-invalid @enderror">
                                        @error('event_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-md-12" for="title">Event Link <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <input type="text" name="event_link"
                                            class="form-control @error('event_link') is-invalid @enderror""
                                            placeholder="Enter link">
                                        @error('event_link')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-sm-12">Music Type <span class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <select class="custome_txt form-control" name="SongType">
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

                            <div class="col-lg-6">



                                <div class="form-group">
                                    <label class="col-sm-12">Picture Upload</label>
                                    <div class="col-sm-12">
                                        <label class="custom-file">
                                            <input type="file" name="picture"
                                                class="custom-file-input form-control @error('picture') is-invalid @enderror">
                                            @error('picture')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <span class="custom-file-control"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Post
                            Event</button>
                        <button type="button" class="btn btn-inverse waves-effect waves-light"
                            data-dismiss="modal">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <!-- /.row -->
    <div id="event-edit" class="modal " tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Update Event</h4>
                </div>
                <div class="modal-body editBodyEvent">

                    <form method="POST" id="updateeventform" action="{{ route('artist.update_event') }}"
                        enctype="multipart/form-data" class="form-material form-horizontal">
                        @csrf

                        <div class="row">

                            <ul class="alert alert-warning d-none" id="updateeventform_errList"></ul>
                            <ul class="alert alert-warning d-none" id="success_messageevent"></ul>
                            <input type="hidden" name="id_event" id="edit_event_id">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-md-12" for="title">Event Name <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <input type="text" id="event_name" name="event_name"
                                            class="form-control @error('event_name') is-invalid @enderror"
                                            placeholder="Enter event name">
                                        @error('event_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-md-12" for="title">Venue </label>
                                    <div class="col-md-12">
                                        <input type="text" id="venue" name="venue"
                                            class="form-control @error('venue') is-invalid @enderror"
                                            placeholder="Enter venue name">
                                        @error('venue')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-md-12" for="title">Address <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <input type="text" id="address" name="address"
                                            class="form-control @error('address') is-invalid @enderror"
                                            placeholder="Enter address">
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-md-12" for="title">City <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <input type="text" id="city" name="city"
                                            class="form-control @error('city') is-invalid @enderror"
                                            placeholder="Enter city">
                                        @error('city')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">



                                <div class="form-group">
                                    <label class="col-sm-12">State <span class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <select class="custome_txt form-control" name="state" id="selectstate">

                                            @foreach (App\Models\State::all() as $state)
                                                <option value="{{ $state->id }}">
                                                    {{ $state->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('state')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-md-12" for="title">Zip <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <input type="text" id="zip" name="zip"
                                            class="form-control @error('zip') is-invalid @enderror"
                                            placeholder="Enter Zip">
                                        @error('zip')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-md-12" for="title">Start Time <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <input type="time" id="start_time" name="start_time"
                                            class="form-control @error('start_time') is-invalid @enderror"
                                            placeholder="Enter start time">
                                        @error('start_time')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-md-12" for="title">Finish Time <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <input type="time" id="finish_time" name="finish_time"
                                            class="form-control @error('finish_time') is-invalid @enderror"
                                            placeholder="Enter finish time">
                                        @error('finish_time')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-md-12" for="title">Event Date <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <input type="date" id="event_date" name="event_date" class="form-control"
                                            placeholder="Enter date @error('event_date') is-invalid @enderror">
                                        @error('event_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-md-12" for="title">Event Link <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-12">

                                        <input type="text" id="event_link1" name="event_link"
                                            class="form-control @error('event_link') is-invalid @enderror""
                                            placeholder="Enter link">
                                        @error('event_link')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-sm-12">Music Type <span class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <select class="custome_txt form-control" name="SongType" id="selecttypeevent">

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

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-sm-12">Picture Upload</label>
                                    <div class="col-sm-12">
                                        <label class="custom-file">
                                            <input type="file" name="picture" id="picture2"
                                                class="custom-file-input form-control @error('picture') is-invalid @enderror">
                                            @error('picture')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <span class="custom-file-control"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" id="submit"
                            class="btn btn-success waves-effect waves-light m-r-10  update_event ">Update Post
                            Event</button>
                        <button type="button" class="btn btn-inverse waves-effect waves-light"
                            data-dismiss="modal">Cancel</button>
                    </form>
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
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/logo-icon.png">
    <title>Uruploadz.com</title>
    <!-- Bootstrap Core CSS -->
    <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="../js/select2/dist/css/select2.min.css">
    <!-- animation CSS -->
    <link href="../css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/multi-select.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
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
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg "
                    href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i
                        class="ti-menu"></i></a>
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
                    <img src="../plugins/images/logo.png" alt="" width="200"></div>
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
                        <h4 class="page-title">Events</h4>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">All Events
                                <a class="btn btn-success pull-right" href="#" data-toggle="modal"
                                    data-target="#event-add">Add Event</a>
                            </h3>

                            <hr>

                            <div class="row el-element-overlay">

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <p class="feature-video-badge">
                                            <i class="fa fa-calendar"></i> Oct 17</p>
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../img/event2.jpg">
                                            <a href="#" class="el-overlay">

                                                <div class="centered">
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-play-circle-o fa-2x"></i></div>
                                                    <div class="btn default btn-outline" data-toggle="modal"
                                                        data-target="#event-edit"><i class="fa fa-pencil fa-2x"></i>
                                                    </div>
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-trash fa-2x"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="alb-info">
                                            <a href="#" class="font-bold">Nicky Romero Concert</a>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-music" style="margin-right: 3px;"></i>Jazz
                                                    </a>
                                                </li>
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-map-marker" style="margin-right: 3px;"></i>Los
                                                        Angeles
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <p class="feature-video-badge">
                                            <i class="fa fa-calendar"></i> Oct 17</p>
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../img/event3.jpg">
                                            <a href="#" class="el-overlay">

                                                <div class="centered">
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-play-circle-o fa-2x"></i></div>
                                                    <div class="btn default btn-outline" data-toggle="modal"
                                                        data-target="#event-edit"><i class="fa fa-pencil fa-2x"></i>
                                                    </div>
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-trash fa-2x"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="alb-info">
                                            <a href="#" class="font-bold">Nicky Romero Concert</a>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-music" style="margin-right: 3px;"></i>Jazz
                                                    </a>
                                                </li>
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-map-marker" style="margin-right: 3px;"></i>Los
                                                        Angeles
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <p class="feature-video-badge">
                                            <i class="fa fa-calendar"></i> Oct 17</p>
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../img/event10.jpg">
                                            <a href="#" class="el-overlay">

                                                <div class="centered">
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-play-circle-o fa-2x"></i></div>
                                                    <div class="btn default btn-outline" data-toggle="modal"
                                                        data-target="#event-edit"><i class="fa fa-pencil fa-2x"></i>
                                                    </div>
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-trash fa-2x"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="alb-info">
                                            <a href="#" class="font-bold">Nicky Romero Concert</a>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-music" style="margin-right: 3px;"></i>Jazz
                                                    </a>
                                                </li>
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-map-marker" style="margin-right: 3px;"></i>Los
                                                        Angeles
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <p class="feature-video-badge">
                                            <i class="fa fa-calendar"></i> Oct 17</p>
                                        <div class="el-card-avatar el-overlay-1"> <img
                                                src="../../img/feature_artist6.jpg">
                                            <a href="#" class="el-overlay">

                                                <div class="centered">
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-play-circle-o fa-2x"></i></div>
                                                    <div class="btn default btn-outline" data-toggle="modal"
                                                        data-target="#event-edit"><i class="fa fa-pencil fa-2x"></i>
                                                    </div>
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-trash fa-2x"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="alb-info">
                                            <a href="#" class="font-bold">Nicky Romero Concert</a>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-music" style="margin-right: 3px;"></i>Jazz
                                                    </a>
                                                </li>
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-map-marker" style="margin-right: 3px;"></i>Los
                                                        Angeles
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <p class="feature-video-badge">
                                            <i class="fa fa-calendar"></i> Oct 17</p>
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../img/event7.jpg">
                                            <a href="#" class="el-overlay">

                                                <div class="centered">
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-play-circle-o fa-2x"></i></div>
                                                    <div class="btn default btn-outline" data-toggle="modal"
                                                        data-target="#event-edit"><i class="fa fa-pencil fa-2x"></i>
                                                    </div>
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-trash fa-2x"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="alb-info">
                                            <a href="#" class="font-bold">Nicky Romero Concert</a>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-music" style="margin-right: 3px;"></i>Jazz
                                                    </a>
                                                </li>
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-map-marker" style="margin-right: 3px;"></i>Los
                                                        Angeles
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <p class="feature-video-badge">
                                            <i class="fa fa-calendar"></i> Oct 17</p>
                                        <div class="el-card-avatar el-overlay-1"> <img
                                                src="../../img/feature_artist4.jpg">
                                            <a href="#" class="el-overlay">

                                                <div class="centered">
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-play-circle-o fa-2x"></i></div>
                                                    <div class="btn default btn-outline" data-toggle="modal"
                                                        data-target="#event-edit"><i class="fa fa-pencil fa-2x"></i>
                                                    </div>
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-trash fa-2x"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="alb-info">
                                            <a href="#" class="font-bold">Nicky Romero Concert</a>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-music" style="margin-right: 3px;"></i>Jazz
                                                    </a>
                                                </li>
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-map-marker" style="margin-right: 3px;"></i>Los
                                                        Angeles
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <p class="feature-video-badge">
                                            <i class="fa fa-calendar"></i> Oct 17</p>
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../img/event2.jpg">
                                            <a href="#" class="el-overlay">

                                                <div class="centered">
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-play-circle-o fa-2x"></i></div>
                                                    <div class="btn default btn-outline" data-toggle="modal"
                                                        data-target="#event-edit"><i class="fa fa-pencil fa-2x"></i>
                                                    </div>
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-trash fa-2x"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="alb-info">
                                            <a href="#" class="font-bold">Nicky Romero Concert</a>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-music" style="margin-right: 3px;"></i>Jazz
                                                    </a>
                                                </li>
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-map-marker" style="margin-right: 3px;"></i>Los
                                                        Angeles
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <p class="feature-video-badge">
                                            <i class="fa fa-calendar"></i> Oct 17</p>
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../img/event3.jpg">
                                            <a href="#" class="el-overlay">

                                                <div class="centered">
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-play-circle-o fa-2x"></i></div>
                                                    <div class="btn default btn-outline" data-toggle="modal"
                                                        data-target="#event-edit"><i class="fa fa-pencil fa-2x"></i>
                                                    </div>
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-trash fa-2x"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="alb-info">
                                            <a href="#" class="font-bold">Nicky Romero Concert</a>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-music" style="margin-right: 3px;"></i>Jazz
                                                    </a>
                                                </li>
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-map-marker" style="margin-right: 3px;"></i>Los
                                                        Angeles
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <p class="feature-video-badge">
                                            <i class="fa fa-calendar"></i> Oct 17</p>
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../img/event10.jpg">
                                            <a href="#" class="el-overlay">

                                                <div class="centered">
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-play-circle-o fa-2x"></i></div>
                                                    <div class="btn default btn-outline" data-toggle="modal"
                                                        data-target="#event-edit"><i class="fa fa-pencil fa-2x"></i>
                                                    </div>
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-trash fa-2x"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="alb-info">
                                            <a href="#" class="font-bold">Nicky Romero Concert</a>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-music" style="margin-right: 3px;"></i>Jazz
                                                    </a>
                                                </li>
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-map-marker" style="margin-right: 3px;"></i>Los
                                                        Angeles
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <p class="feature-video-badge">
                                            <i class="fa fa-calendar"></i> Oct 17</p>
                                        <div class="el-card-avatar el-overlay-1"> <img
                                                src="../../img/feature_artist6.jpg">
                                            <a href="#" class="el-overlay">

                                                <div class="centered">
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-play-circle-o fa-2x"></i></div>
                                                    <div class="btn default btn-outline" data-toggle="modal"
                                                        data-target="#event-edit"><i class="fa fa-pencil fa-2x"></i>
                                                    </div>
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-trash fa-2x"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="alb-info">
                                            <a href="#" class="font-bold">Nicky Romero Concert</a>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-music" style="margin-right: 3px;"></i>Jazz
                                                    </a>
                                                </li>
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-map-marker" style="margin-right: 3px;"></i>Los
                                                        Angeles
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <p class="feature-video-badge">
                                            <i class="fa fa-calendar"></i> Oct 17</p>
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../img/event7.jpg">
                                            <a href="#" class="el-overlay">

                                                <div class="centered">
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-play-circle-o fa-2x"></i></div>
                                                    <div class="btn default btn-outline" data-toggle="modal"
                                                        data-target="#event-edit"><i class="fa fa-pencil fa-2x"></i>
                                                    </div>
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-trash fa-2x"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="alb-info">
                                            <a href="#" class="font-bold">Nicky Romero Concert</a>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-music" style="margin-right: 3px;"></i>Jazz
                                                    </a>
                                                </li>
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-map-marker" style="margin-right: 3px;"></i>Los
                                                        Angeles
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <p class="feature-video-badge">
                                            <i class="fa fa-calendar"></i> Oct 17</p>
                                        <div class="el-card-avatar el-overlay-1"> <img
                                                src="../../img/feature_artist4.jpg">
                                            <a href="#" class="el-overlay">

                                                <div class="centered">
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-play-circle-o fa-2x"></i></div>
                                                    <div class="btn default btn-outline" data-toggle="modal"
                                                        data-target="#event-edit"><i class="fa fa-pencil fa-2x"></i>
                                                    </div>
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-trash fa-2x"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="alb-info">
                                            <a href="#" class="font-bold">Nicky Romero Concert</a>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-music" style="margin-right: 3px;"></i>Jazz
                                                    </a>
                                                </li>
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-map-marker" style="margin-right: 3px;"></i>Los
                                                        Angeles
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <p class="feature-video-badge">
                                            <i class="fa fa-calendar"></i> Oct 17</p>
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../img/event2.jpg">
                                            <a href="#" class="el-overlay">

                                                <div class="centered">
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-play-circle-o fa-2x"></i></div>
                                                    <div class="btn default btn-outline" data-toggle="modal"
                                                        data-target="#event-edit"><i class="fa fa-pencil fa-2x"></i>
                                                    </div>
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-trash fa-2x"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="alb-info">
                                            <a href="#" class="font-bold">Nicky Romero Concert</a>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-music" style="margin-right: 3px;"></i>Jazz
                                                    </a>
                                                </li>
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-map-marker" style="margin-right: 3px;"></i>Los
                                                        Angeles
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <p class="feature-video-badge">
                                            <i class="fa fa-calendar"></i> Oct 17</p>
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../img/event3.jpg">
                                            <a href="#" class="el-overlay">

                                                <div class="centered">
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-play-circle-o fa-2x"></i></div>
                                                    <div class="btn default btn-outline" data-toggle="modal"
                                                        data-target="#event-edit"><i class="fa fa-pencil fa-2x"></i>
                                                    </div>
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-trash fa-2x"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="alb-info">
                                            <a href="#" class="font-bold">Nicky Romero Concert</a>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-music" style="margin-right: 3px;"></i>Jazz
                                                    </a>
                                                </li>
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-map-marker" style="margin-right: 3px;"></i>Los
                                                        Angeles
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <p class="feature-video-badge">
                                            <i class="fa fa-calendar"></i> Oct 17</p>
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../img/event10.jpg">
                                            <a href="#" class="el-overlay">

                                                <div class="centered">
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-play-circle-o fa-2x"></i></div>
                                                    <div class="btn default btn-outline" data-toggle="modal"
                                                        data-target="#event-edit"><i class="fa fa-pencil fa-2x"></i>
                                                    </div>
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-trash fa-2x"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="alb-info">
                                            <a href="#" class="font-bold">Nicky Romero Concert</a>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-music" style="margin-right: 3px;"></i>Jazz
                                                    </a>
                                                </li>
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-map-marker" style="margin-right: 3px;"></i>Los
                                                        Angeles
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <p class="feature-video-badge">
                                            <i class="fa fa-calendar"></i> Oct 17</p>
                                        <div class="el-card-avatar el-overlay-1"> <img
                                                src="../../img/feature_artist6.jpg">
                                            <a href="#" class="el-overlay">

                                                <div class="centered">
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-play-circle-o fa-2x"></i></div>
                                                    <div class="btn default btn-outline" data-toggle="modal"
                                                        data-target="#event-edit"><i class="fa fa-pencil fa-2x"></i>
                                                    </div>
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-trash fa-2x"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="alb-info">
                                            <a href="#" class="font-bold">Nicky Romero Concert</a>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-music" style="margin-right: 3px;"></i>Jazz
                                                    </a>
                                                </li>
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-map-marker" style="margin-right: 3px;"></i>Los
                                                        Angeles
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <p class="feature-video-badge">
                                            <i class="fa fa-calendar"></i> Oct 17</p>
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../img/event7.jpg">
                                            <a href="#" class="el-overlay">

                                                <div class="centered">
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-play-circle-o fa-2x"></i></div>
                                                    <div class="btn default btn-outline" data-toggle="modal"
                                                        data-target="#event-edit"><i class="fa fa-pencil fa-2x"></i>
                                                    </div>
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-trash fa-2x"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="alb-info">
                                            <a href="#" class="font-bold">Nicky Romero Concert</a>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-music" style="margin-right: 3px;"></i>Jazz
                                                    </a>
                                                </li>
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-map-marker" style="margin-right: 3px;"></i>Los
                                                        Angeles
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <p class="feature-video-badge">
                                            <i class="fa fa-calendar"></i> Oct 17</p>
                                        <div class="el-card-avatar el-overlay-1"> <img
                                                src="../../img/feature_artist4.jpg">
                                            <a href="#" class="el-overlay">

                                                <div class="centered">
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-play-circle-o fa-2x"></i></div>
                                                    <div class="btn default btn-outline" data-toggle="modal"
                                                        data-target="#event-edit"><i class="fa fa-pencil fa-2x"></i>
                                                    </div>
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-trash fa-2x"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="alb-info">
                                            <a href="#" class="font-bold">Nicky Romero Concert</a>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-music" style="margin-right: 3px;"></i>Jazz
                                                    </a>
                                                </li>
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-map-marker" style="margin-right: 3px;"></i>Los
                                                        Angeles
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <p class="feature-video-badge">
                                            <i class="fa fa-calendar"></i> Oct 17</p>
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../img/event2.jpg">
                                            <a href="#" class="el-overlay">

                                                <div class="centered">
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-play-circle-o fa-2x"></i></div>
                                                    <div class="btn default btn-outline" data-toggle="modal"
                                                        data-target="#event-edit"><i class="fa fa-pencil fa-2x"></i>
                                                    </div>
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-trash fa-2x"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="alb-info">
                                            <a href="#" class="font-bold">Nicky Romero Concert</a>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-music" style="margin-right: 3px;"></i>Jazz
                                                    </a>
                                                </li>
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-map-marker" style="margin-right: 3px;"></i>Los
                                                        Angeles
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <p class="feature-video-badge">
                                            <i class="fa fa-calendar"></i> Oct 17</p>
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../img/event3.jpg">
                                            <a href="#" class="el-overlay">

                                                <div class="centered">
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-play-circle-o fa-2x"></i></div>
                                                    <div class="btn default btn-outline" data-toggle="modal"
                                                        data-target="#event-edit"><i class="fa fa-pencil fa-2x"></i>
                                                    </div>
                                                    <div class="btn default btn-outline"><i
                                                            class="fa fa-trash fa-2x"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="alb-info">
                                            <a href="#" class="font-bold">Nicky Romero Concert</a>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-music" style="margin-right: 3px;"></i>Jazz
                                                    </a>
                                                </li>
                                                <li style="margin-right: 16px;">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-map-marker" style="margin-right: 3px;"></i>Los
                                                        Angeles
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.row -->



                <!-- /.row -->
                <div id="event-add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Add New Event</h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-material form-horizontal">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">Event Name <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-12">
                                                    <input type="text" id="title" name="title" class="form-control"
                                                        placeholder="Enter event name">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">Venue </label>
                                                <div class="col-md-12">
                                                    <input type="text" id="title" name="title" class="form-control"
                                                        placeholder="Enter venue name">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">Address <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-12">
                                                    <input type="text" id="title" name="title" class="form-control"
                                                        placeholder="Enter address">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">City <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-12">
                                                    <input type="text" id="title" name="title" class="form-control"
                                                        placeholder="Enter city">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-sm-12">State <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-sm-12">
                                                    <select class="custome_txt form-control" required="">
                                                        <option selected>Select State</option>
                                                        <option>Alabama</option>
                                                        <option>Alaska </option>
                                                        <option>Arizona</option>
                                                        <option>Arkansas </option>
                                                        <option>California </option>
                                                        <option>Colorado </option>
                                                        <option>Connecticut </option>
                                                        <option>Delaware </option>
                                                        <option>Florida </option>
                                                        <option>Georgia </option>
                                                        <option>Hawaii </option>
                                                        <option>Idaho </option>
                                                        <option>Illinois</option>
                                                        <option>Indiana </option>
                                                        <option>Iowa </option>
                                                        <option>Kansas </option>
                                                        <option>Kentucky </option>
                                                        <option>Louisiana</option>
                                                        <option>Maine </option>
                                                        <option>Maryland </option>
                                                        <option>Massachusetts </option>
                                                        <option>Michigan </option>
                                                        <option>Minnesota</option>
                                                        <option>Mississippi </option>
                                                        <option>Missouri </option>
                                                        <option>Montana</option>
                                                        <option>Nebraska </option>
                                                        <option>Nevada </option>
                                                        <option>New Hampshire </option>
                                                        <option>New Jersey </option>
                                                        <option>New Mexico </option>
                                                        <option>New York </option>
                                                        <option>North Carolina </option>
                                                        <option>North Dakota </option>
                                                        <option>Ohio </option>
                                                        <option>Oklahoma </option>
                                                        <option>Oregon </option>
                                                        <option>Pennsylvania</option>
                                                        <option>Rhode Island</option>
                                                        <option>South Carolina </option>
                                                        <option>South Dakota </option>
                                                        <option>Tennessee </option>
                                                        <option>Texas </option>
                                                        <option>Utah </option>
                                                        <option>Vermont </option>
                                                        <option>Virginia </option>
                                                        <option>Washington </option>
                                                        <option>West Virginia </option>
                                                        <option>Wisconsin </option>
                                                        <option>Wyoming</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">Zip <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-12">
                                                    <input type="text" id="title" name="title" class="form-control"
                                                        placeholder="Enter Zip">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">Start Time <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-12">
                                                    <input type="time" id="title" name="title" class="form-control"
                                                        placeholder="Enter start time">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">Finish Time <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-12">
                                                    <input type="time" id="title" name="title" class="form-control"
                                                        placeholder="Enter finish time">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">Event Date <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-12">
                                                    <input type="date" id="title" name="title" class="form-control"
                                                        placeholder="Enter date">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">Event Link <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-12">
                                                    <input type="text" id="title" name="title" class="form-control"
                                                        placeholder="Enter link">
                                                </div>
                                            </div>
                                        </div>

                                    </div>






                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Post
                                        Event</button>
                                    <button type="button" class="btn btn-inverse waves-effect waves-light"
                                        data-dismiss="modal">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.row -->
                <div id="event-edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Edit Event</h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-material form-horizontal">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">Event Name <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-12">
                                                    <input type="text" value="Nicky Romero Concert" id="title"
                                                        name="title" class="form-control"
                                                        placeholder="Enter event name">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">Venue </label>
                                                <div class="col-md-12">
                                                    <input type="text" value="Vanue" id="title" name="title"
                                                        class="form-control" placeholder="Enter venue name">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">Address <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-12">
                                                    <input type="text" value="New Orleans" id="title" name="title"
                                                        class="form-control" placeholder="Enter address">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">City <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-12">
                                                    <input type="text" value="Riyadh" id="title" name="title"
                                                        class="form-control" placeholder="Enter city">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-sm-12">State <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-sm-12">
                                                    <select class="custome_txt form-control" required="">
                                                        <option>Select State</option>
                                                        <option selected="">Alabama</option>
                                                        <option>Alaska </option>
                                                        <option>Arizona</option>
                                                        <option>Arkansas </option>
                                                        <option>California </option>
                                                        <option>Colorado </option>
                                                        <option>Connecticut </option>
                                                        <option>Delaware </option>
                                                        <option>Florida </option>
                                                        <option>Georgia </option>
                                                        <option>Hawaii </option>
                                                        <option>Idaho </option>
                                                        <option>Illinois</option>
                                                        <option>Indiana </option>
                                                        <option>Iowa </option>
                                                        <option>Kansas </option>
                                                        <option>Kentucky </option>
                                                        <option>Louisiana</option>
                                                        <option>Maine </option>
                                                        <option>Maryland </option>
                                                        <option>Massachusetts </option>
                                                        <option>Michigan </option>
                                                        <option>Minnesota</option>
                                                        <option>Mississippi </option>
                                                        <option>Missouri </option>
                                                        <option>Montana</option>
                                                        <option>Nebraska </option>
                                                        <option>Nevada </option>
                                                        <option>New Hampshire </option>
                                                        <option>New Jersey </option>
                                                        <option>New Mexico </option>
                                                        <option>New York </option>
                                                        <option>North Carolina </option>
                                                        <option>North Dakota </option>
                                                        <option>Ohio </option>
                                                        <option>Oklahoma </option>
                                                        <option>Oregon </option>
                                                        <option>Pennsylvania</option>
                                                        <option>Rhode Island</option>
                                                        <option>South Carolina </option>
                                                        <option>South Dakota </option>
                                                        <option>Tennessee </option>
                                                        <option>Texas </option>
                                                        <option>Utah </option>
                                                        <option>Vermont </option>
                                                        <option>Virginia </option>
                                                        <option>Washington </option>
                                                        <option>West Virginia </option>
                                                        <option>Wisconsin </option>
                                                        <option>Wyoming</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">Zip <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-12">
                                                    <input type="text" value="154636" id="title" name="title"
                                                        class="form-control" placeholder="Enter Zip">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">Start Time <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-12">
                                                    <input type="time" value="20:00" id="title" name="title"
                                                        class="form-control" placeholder="Enter start time">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">Finish Time <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-12">
                                                    <input type="time" value="23:00" id="title" name="title"
                                                        class="form-control" placeholder="Enter finish time">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">Event Date <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-12">
                                                    <input type="date" value="2022-03-23" id="title" name="title"
                                                        class="form-control" placeholder="Enter start time">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">Event Link <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-12">
                                                    <input type="text" value="www.uruplordz.com" id="title" name="title"
                                                        class="form-control" placeholder="Enter finish time">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update
                                        Event</button>
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
                            <li class="pb-2"><a href="javascript: void(0);" class="fs-16 text-white footer-link">Event
                                    finder</a>
                            </li>
                            <li class="pb-2"><a href="javascript: void(0);" class="fs-16 text-white footer-link">Contact
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
>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9
