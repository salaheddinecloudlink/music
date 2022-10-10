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
                                @if ($events != null)
                                @foreach ($events as $event)
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <p class="feature-video-badge">
                                            <i class="fa fa-calendar"></i> Oct 17
                                        </p>
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
                            </div>

                        </div>
                    </div>
                    @endforeach
                    @else
                        <h5 class="text-muted">No Events to display</h5>
                    @endif  
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
                                                    <input type="text" id="title" name="title"
                                                        class="form-control" placeholder="Enter event name">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">Venue </label>
                                                <div class="col-md-12">
                                                    <input type="text" id="title" name="title"
                                                        class="form-control" placeholder="Enter venue name">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">Address <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-12">
                                                    <input type="text" id="title" name="title"
                                                        class="form-control" placeholder="Enter address">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">City <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-12">
                                                    <input type="text" id="title" name="title"
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
                                                    <input type="text" id="title" name="title"
                                                        class="form-control" placeholder="Enter Zip">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">Start Time <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-12">
                                                    <input type="time" id="title" name="title"
                                                        class="form-control" placeholder="Enter start time">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">Finish Time <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-12">
                                                    <input type="time" id="title" name="title"
                                                        class="form-control" placeholder="Enter finish time">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">Event Date <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-12">
                                                    <input type="date" id="title" name="title"
                                                        class="form-control" placeholder="Enter date">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">Event Link <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-12">
                                                    <input type="text" id="title" name="title"
                                                        class="form-control" placeholder="Enter link">
                                                </div>
                                            </div>
                                        </div>

                                    </div>






                                    <button type="submit"
                                        class="btn btn-success waves-effect waves-light m-r-10">Post
                                        Event</button>
                                    <button type="button" class="btn btn-inverse waves-effect waves-light"
                                        data-dismiss="modal">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.row -->
                <div id="event-edit" class="modal fade" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">×</button>
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
                                                    <input type="text" value="Vanue" id="title"
                                                        name="title" class="form-control"
                                                        placeholder="Enter venue name">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">Address <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-12">
                                                    <input type="text" value="New Orleans" id="title"
                                                        name="title" class="form-control"
                                                        placeholder="Enter address">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">City <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-12">
                                                    <input type="text" value="Riyadh" id="title"
                                                        name="title" class="form-control" placeholder="Enter city">
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
                                                    <input type="text" value="154636" id="title"
                                                        name="title" class="form-control" placeholder="Enter Zip">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">Start Time <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-12">
                                                    <input type="time" value="20:00" id="title"
                                                        name="title" class="form-control"
                                                        placeholder="Enter start time">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">Finish Time <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-12">
                                                    <input type="time" value="23:00" id="title"
                                                        name="title" class="form-control"
                                                        placeholder="Enter finish time">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">Event Date <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-12">
                                                    <input type="date" value="2022-03-23" id="title"
                                                        name="title" class="form-control"
                                                        placeholder="Enter start time">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-12" for="title">Event Link <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-12">
                                                    <input type="text" value="www.uruplordz.com" id="title"
                                                        name="title" class="form-control"
                                                        placeholder="Enter finish time">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="btn btn-success waves-effect waves-light m-r-10">Update
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
