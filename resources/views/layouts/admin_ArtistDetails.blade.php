<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.head');
</head>

<body class="fix-sidebar fix-header">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">

        @include('admin.navbar');

        @include('admin.leftnavbar');

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-xs-12">
                        <h4 class="page-title">Artist Details</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-lg-4 col-xl-3 col-xs-12">
                        <div class="">
                            <div class="user-bg overflow-hidden">
                                <div class="zoomin">
                                    <img width="100%" alt="user" src="{{ asset('pictures/' . $artist->avatar) }}">
                                </div>
                            </div>
                            <div class="white-box user-btm-box">
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-6 b-r"><strong>{{ $artist->stage_name }}</strong>
                                        <p>Artemis</p>
                                    </div>
                                    <div class="col-md-6"><strong>{{ $artist->genre }}</strong>
                                        <p>Rock</p>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <hr>
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-6 b-r"><strong>{{ $artist->state }}</strong>
                                        <p>New York</p>
                                    </div>
                                    <div class="col-md-6"><strong>Member Since</strong>
                                        <p>2011</p>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 text-center artist-social">
                                        <a href="javascript: void(0);"><i
                                                class="social-icon fa fa-facebook fa-2x"></i></a>
                                        <a href="javascript: void(0);"><i
                                                class="social-icon fa fa-twitter fa-2x"></i></a>
                                        <a href="javascript: void(0);"><i
                                                class="social-icon fa fa-instagram fa-2x"></i></a>
                                        <a href="javascript: void(0);"><i class="fa fa-globe fa-2x"></i></a>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>About Artist</h4>
                                        <p>{{ $artist->bio }}.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-8 col-xl-9 col-xs-12">
                        <div class="white-box">
                            <div class="d-flex align-items-center justify-content-center">
                                <ul class="nav m-t-0 nav-tabs nav-justified my_tab my_tab2 artist-my_tab2"
                                    role="tablist">
                                    <li role="presentation" class="nav-item active">
                                        <a href="#video" style="margin-bottom: 0 !important;" class="nav-link"
                                            aria-controls="home" role="tab" data-toggle="tab"
                                            aria-expanded="true"><span class="visible-xs"><i
                                                    class="fa fa-youtube-play"></i></span><span class="hidden-xs">
                                                Videos</span></a>
                                    </li>
                                    <li role="presentation" class="nav-item">
                                        <a href="#music" style="margin-bottom: 0 !important;" class="nav-link"
                                            aria-controls="home" role="tab" data-toggle="tab"
                                            aria-expanded="true"><span class="visible-xs"><i
                                                    class="fa fa-music"></i></span><span class="hidden-xs">
                                                Musics</span></a>
                                    </li>
                                    <li role="presentation" class="nav-item">
                                        <a href="#album" style="margin-bottom: 0 !important;" class="nav-link"
                                            aria-controls="home" role="tab" data-toggle="tab"
                                            aria-expanded="true"><span class="visible-xs"><i
                                                    class="fa fa-image"></i></span><span class="hidden-xs">
                                                Albums</span></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane active" id="video">
                                    <div class="el-element-overlay">
                                        <div class="row">
                                            @if ($videos != null)
                                            @foreach ($videos as $video)
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                                <div class="el-card-item">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="{{ asset('pictures/'.$video->picture) }}" />
                                                        <div class="el-overlay">
                                                            <ul class="el-info">
                                                                <li><a class="btn default btn-outline"
                                                                        href="video-detail.html"><i
                                                                            class="fa fa-play-circle-o fa-2x"></i></a>
                                                                </li>
                                                                <li><a class="btn default btn-outline" href="#"
                                                                        data-toggle="modal" data-target="#video-edit"><i
                                                                            class="fa fa-pencil fa-2x"></i></a></li>
                                                                <li><a class="btn default btn-outline" href="#"><i
                                                                            class="fa fa-trash fa-2x"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="vd-time badge bg-inverse hidden-xs">03:30</span>
                                                    </div>
                                                    <div class="alb-info">
                                                        <h5>{{$video->title}}</h5>
                                                        <h6 class="text-muted">Sourcerer</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            @else
                                                <h5 class="text-muted">No Videos to display</h5>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="music">
                                    <div class="row el-element-overlay">
                                        @if ($songs != null)
                                            @foreach ($songs as $song)
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            <div class="el-card-item">
                                                <div class="el-card-avatar el-overlay-1"> <img
                                                        src="{{ asset('pictures/' . $song->picture) }}" />
                                                    <div class="el-overlay">
                                                        <ul class="el-info">
                                                            <li><a class="btn default btn-outline" href="#"><i
                                                                        class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                            <li><a class="btn default btn-outline" href="#"
                                                                    data-toggle="modal" data-target="#song-edit"><i
                                                                        class="fa fa-pencil fa-2x"></i></a></li>
                                                            <li><a class="btn default btn-outline" href="#"><i
                                                                        class="fa fa-trash fa-2x"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="alb-info">
                                                    <h5>{{$song->title}}</h5>
                                                    <h6 class="text-muted">{{$song->genre}}</h6>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @else
                                            <h5 class="text-muted">No Songs to display</h5>
                                        @endif
                                    </div>
                                </div>

                                <div class="tab-pane" id="album">
                                    <div class="row el-element-overlay">

                                        @if ($albs != null)
                                            @foreach ($albs as $alb)
                                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                                                    <div class="el-card-item">
                                                        <div class="el-card-avatar el-overlay-1">
                                                          <img src="{{ asset('pictures/' . $alb->picture) }}">
                                                            <div class="el-overlay">
                                                                <ul class="el-info">
                                                                    <li><a class="btn default btn-outline"
                                                                            href="#"><i
                                                                                class="fa fa-play-circle-o fa-2x"></i></a>
                                                                    </li>
                                                                    <li><a class="btn default btn-outline"
                                                                            href="#" data-toggle="modal"
                                                                            data-target="#album-edit"><i
                                                                                class="fa fa-pencil fa-2x"></i></a>
                                                                    </li>
                                                                    <li><a class="btn default btn-outline"
                                                                            href="#"><i
                                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="alb-info">
                                                            <h5>{{ $alb->album_name }}</h5>
                                                            <h6 class="text-muted">{{ $alb->album_name }}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <h5 class="text-muted">No Albums to display</h5>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div id="video-edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
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

                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update
                                    Video</button>
                                <button type="button" class="btn btn-inverse waves-effect waves-light"
                                    data-dismiss="modal">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div id="song-edit" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
                style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Edit Music</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-material form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-12" for="title">Music Title</label>
                                    <div class="col-md-12">
                                        <input type="text" value="The Spark of the Heat" id="title"
                                            name="title" class="form-control" placeholder="title here">
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label class="col-md-12" for="artist">Featured Artist</label>
                                    <div class="col-md-12">
                                        <input type="radio" id="chksYes2" checked name="chkPassPorts2"
                                            style="margin-bottom: 10px;" />
                                        Yes
                                        <input type="radio" id="chksNo2" name="chkPassPorts2"
                                            style="margin-bottom: 10px; margin-left: 5px;" />
                                        No
                                        <br>
                                        <input type="text" id="featureds2" class="form-control"
                                            value="Sourcerer" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-12">Music Upload</label>
                                    <div class="col-sm-12">
                                        <label class="custom-file">
                                            <input type="file" id="file" class="custom-file-input">
                                            <span class="custom-file-control"></span>
                                        </label>
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update
                                    Music</button>
                                <button type="button" class="btn btn-inverse waves-effect waves-light"
                                    data-dismiss="modal">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div id="album-edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Edit Album</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-material form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-12" for="albname">Album Name <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <input type="text" value="The Fallen" id="albname" name="albname"
                                            class="form-control" placeholder="Enter album name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-12">Album Cover</label>
                                    <div class="col-sm-12">
                                        <label class="custom-file">
                                            <input type="file" id="file" class="custom-file-input">
                                            <span class="custom-file-control"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-12">Story Behind the Album <small>(30 Sec Video
                                            Clip)</small></label>
                                    <div class="col-sm-12">
                                        <label class="custom-file">
                                            <input type="file" id="file" class="custom-file-input">
                                            <span class="custom-file-control"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-12">Upload Songs <small>(Max 10 songs)</small></label>
                                    <div class="col-sm-12">
                                        <label class="custom-file">
                                            <input type="file" id="file" class="custom-file-input">
                                            <span class="custom-file-control"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group d-flex justify-content-center">
                                    <div style="background: #ebeeef;" class="p-3 img-circle font-bold">
                                        OR
                                    </div>
                                </div>

                                <div class="form-group d-flex justify-content-center">
                                    <a href="#" data-toggle="modal" data-dismiss="modal"
                                        data-target="#album-check" class="btn btn-primary">Choose Songs <small>(Max 10
                                            songs)</small></a>
                                </div>

                                <hr>


                                <button type="submit"
                                    class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                                <button type="submit"
                                    class="btn btn-inverse waves-effect waves-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.row -->
            <div id="album-check" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Choose Songs (Max 10 Songs)</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <div class="el-card-item">

                                        <div class="el-card-avatar el-overlay-1" style="position: relative;"> <img
                                                src="../plugins/images/music/alb1.jpg" class="img-responsive">
                                            <div style="position: absolute; top: 3px; left: 8px;">
                                                <input type="checkbox" name="" id="">
                                            </div>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="text-nowrap">The Fallen</h5>
                                            <h6 class="text-muted">Sourcerer</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <div class="el-card-item">

                                        <div class="el-card-avatar el-overlay-1" style="position: relative;"> <img
                                                src="../plugins/images/music/alb2.jpg" class="img-responsive">
                                            <div style="position: absolute; top: 3px; left: 8px;">
                                                <input type="checkbox" name="" id="">
                                            </div>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="text-nowrap">The Fallen</h5>
                                            <h6 class="text-muted">Sourcerer</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <div class="el-card-item">

                                        <div class="el-card-avatar el-overlay-1" style="position: relative;"> <img
                                                src="../plugins/images/music/alb3.jpg" class="img-responsive">
                                            <div style="position: absolute; top: 3px; left: 8px;">
                                                <input type="checkbox" name="" id="">
                                            </div>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="text-nowrap">The Fallen</h5>
                                            <h6 class="text-muted">Sourcerer</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <div class="el-card-item">

                                        <div class="el-card-avatar el-overlay-1" style="position: relative;"> <img
                                                src="../plugins/images/music/alb4.jpg" class="img-responsive">
                                            <div style="position: absolute; top: 3px; left: 8px;">
                                                <input type="checkbox" name="" id="">
                                            </div>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="text-nowrap">The Fallen</h5>
                                            <h6 class="text-muted">Sourcerer</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <div class="el-card-item">

                                        <div class="el-card-avatar el-overlay-1" style="position: relative;"> <img
                                                src="../plugins/images/music/alb5.jpg" class="img-responsive">
                                            <div style="position: absolute; top: 3px; left: 8px;">
                                                <input type="checkbox" name="" id="">
                                            </div>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="text-nowrap">The Fallen</h5>
                                            <h6 class="text-muted">Sourcerer</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <div class="el-card-item">

                                        <div class="el-card-avatar el-overlay-1" style="position: relative;"> <img
                                                src="../plugins/images/music/alb6.jpg" class="img-responsive">
                                            <div style="position: absolute; top: 3px; left: 8px;">
                                                <input type="checkbox" name="" id="">
                                            </div>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="text-nowrap">The Fallen</h5>
                                            <h6 class="text-muted">Sourcerer</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <div class="el-card-item">

                                        <div class="el-card-avatar el-overlay-1" style="position: relative;"> <img
                                                src="../plugins/images/music/alb7.jpg" class="img-responsive">
                                            <div style="position: absolute; top: 3px; left: 8px;">
                                                <input type="checkbox" name="" id="">
                                            </div>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="text-nowrap">The Fallen</h5>
                                            <h6 class="text-muted">Sourcerer</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <div class="el-card-item">

                                        <div class="el-card-avatar el-overlay-1" style="position: relative;"> <img
                                                src="../plugins/images/music/alb8.jpg" class="img-responsive">
                                            <div style="position: absolute; top: 3px; left: 8px;">
                                                <input type="checkbox" name="" id="">
                                            </div>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="text-nowrap">The Fallen</h5>
                                            <h6 class="text-muted">Sourcerer</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <div class="el-card-item">

                                        <div class="el-card-avatar el-overlay-1" style="position: relative;"> <img
                                                src="../plugins/images/music/alb9.jpg" class="img-responsive">
                                            <div style="position: absolute; top: 3px; left: 8px;">
                                                <input type="checkbox" name="" id="">
                                            </div>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="text-nowrap">The Fallen</h5>
                                            <h6 class="text-muted">Sourcerer</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <div class="el-card-item">

                                        <div class="el-card-avatar el-overlay-1" style="position: relative;"> <img
                                                src="../plugins/images/music/alb1.jpg" class="img-responsive">
                                            <div style="position: absolute; top: 3px; left: 8px;">
                                                <input type="checkbox" name="" id="">
                                            </div>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="text-nowrap">The Fallen</h5>
                                            <h6 class="text-muted">Sourcerer</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <div class="el-card-item">

                                        <div class="el-card-avatar el-overlay-1" style="position: relative;"> <img
                                                src="../plugins/images/music/alb2.jpg" class="img-responsive">
                                            <div style="position: absolute; top: 3px; left: 8px;">
                                                <input type="checkbox" name="" id="">
                                            </div>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="text-nowrap">The Fallen</h5>
                                            <h6 class="text-muted">Sourcerer</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <div class="el-card-item">

                                        <div class="el-card-avatar el-overlay-1" style="position: relative;"> <img
                                                src="../plugins/images/music/alb3.jpg" class="img-responsive">
                                            <div style="position: absolute; top: 3px; left: 8px;">
                                                <input type="checkbox" name="" id="">
                                            </div>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="text-nowrap">The Fallen</h5>
                                            <h6 class="text-muted">Sourcerer</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <button type="submit" data-toggle="modal" data-target="#album-edit"
                                data-dismiss="modal" class="btn btn-success waves-effect waves-light m-r-10">Add
                                Songs</button>
                            <button type="submit" data-dismiss="modal" data-target="#album-edit"
                                data-toggle="modal"
                                class="btn btn-inverse waves-effect waves-light m-r-10">Cancel</button>

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
                                <img src="../plugins/images/logo.png" class="img-responsive home-logo"
                                    alt="">
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
                            <li><a href="javascript: void(0);" class="fs-16 text-white footer-link">Discussion</a>
                            </li>
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
    </div>
    @include('admin.script');
</body>

</html>
