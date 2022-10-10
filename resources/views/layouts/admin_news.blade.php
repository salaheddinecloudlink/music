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
                        <h4 class="page-title">News</h4>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row el-element-overlay">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">All News
                                <button class="btn btn-success pull-right" data-toggle="modal"
                                    data-target="#video-add">Add News</button>
                            </h3>
                            <hr>
                            <div class="row">
                                @foreach ( $news as $new )
                                    
                                
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../img/news8.jpg" />
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
                                        </div>
                                        <div class="alb-info">
                                            <h5>Handle Every fun Challenge</h5>
                                            <h6 class="text-muted">Sourcerer</h6>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="pagination pagination-split">
                                        <li class="disabled"> <a href="#"><i class="fa fa-angle-left"></i></a> </li>
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
                                        <label class="col-md-12" for="title">Title</label>
                                        <div class="col-md-12">
                                            <input type="text" id="title" name="title" class="form-control"
                                                placeholder="title here" value="Handle Every fun Challenge">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-12">Select Tag</label>
                                        <div class="col-sm-12">
                                            <select class="custome_txt form-control" required="">
                                                <option selected="">Select Tag</option>
                                                <option selected>Video</option>
                                                <option>Music </option>
                                                <option>Album</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-12">Cover Image</label>
                                        <div class="col-sm-12">
                                            <label class="custom-file">
                                                <input type="file" id="file" class="custom-file-input">
                                                <span class="custom-file-control"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Description</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" rows="3">
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="form-group m-l-2">
                                        <input type="checkbox" class="m-r-5" name="" id="check">
                                        <label for="check">Featured Post</label>
                                    </div>


                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Upload
                                        News</button>
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
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Edit News</h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-material form-horizontal">
                                    <div class="form-group">
                                        <label class="col-md-12" for="title">Title</label>
                                        <div class="col-md-12">
                                            <input type="text" id="title" name="title" class="form-control"
                                                placeholder="title here" value="Handle Every fun Challenge">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-12">Select Tag</label>
                                        <div class="col-sm-12">
                                            <select class="custome_txt form-control" required="">
                                                <option selected="">Select Tag</option>
                                                <option selected>Video</option>
                                                <option>Music </option>
                                                <option>Album</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-12">Cover Image</label>
                                        <div class="col-sm-12">
                                            <label class="custom-file">
                                                <input type="file" id="file" class="custom-file-input">
                                                <span class="custom-file-control"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Description</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" rows="3">
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="form-group m-l-2">
                                        <input type="checkbox" checked class="m-r-5" name="" id="check">
                                        <label for="check">Featured Post</label>
                                    </div>


                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update
                                        News</button>
                                    <button type="button" class="btn btn-inverse waves-effect waves-light"
                                        data-dismiss="modal">Reset</button>
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
        
    </div>

    @include('admin.script');
</body>
</html>