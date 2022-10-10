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
                                @if ($videos != null)
                                    @foreach ($videos as $video)
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                            <div class="el-card-item">
                                                <div class="el-card-avatar el-overlay-1"> <img
                                                        src="{{ asset('pictures/'.$video->picture) }}" />
                                                    <div class="el-overlay">
                                                        <ul class="el-info">
                                                            <li><a class="btn default btn-outline"
                                                                    href="video-detail.html"><i
                                                                        class="fa fa-play-circle-o fa-2x"></i></a></li>
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
                                                    <h6 style="display: none" class="text-muted">Acoustic</h6>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <h5 class="text-muted">No Videos to display</h5>
                                @endif
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
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
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
                                            <input type="text" id="featured" disabled="disabled"
                                                class="form-control" placeholder="Featuring" />
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

                <div id="video-edit" class="modal fade" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
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
