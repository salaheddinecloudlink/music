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
                        <h4 class="page-title">Fans</h4>
                    </div>
                </div>

                <div style="max-width: 1500px; margin: 0 auto;">
                    <div class="white-box">
                        <div class="card border-0">
                            <div class="card-body">
                                <div>
                                    <h4 class="dash-heading m-t-0 m-b-5">Number Of Fans</h4>
                                    <div class="table-responsive m-t-40">
                                        <table id="example23" data-page-length='5'
                                            class="display nowrap vertical-align-middle table table-hover table-striped table-bordered"
                                            cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>State</th>
                                                    <th>Following</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">

                                                            <img src="../plugins/images/users/1.jpg" width="40"
                                                                height="40" class="rounded-circle m-r-10" alt="user">

                                                            <div>
                                                                <span class="font-medium">Steve Gection</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        stevugection@gmail.com
                                                    </td>
                                                    <td>
                                                        Alabama
                                                    </td>
                                                    <td>
                                                        350
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">

                                                            <img src="../plugins/images/users/2.jpg" width="40"
                                                                height="40" class="rounded-circle m-r-10" alt="user">

                                                            <div>
                                                                <span class="font-medium">Justin Bieber</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        justinbieber@gmail.com
                                                    </td>
                                                    <td>
                                                        Arizona
                                                    </td>
                                                    <td>
                                                        350
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">

                                                            <img src="../plugins/images/users/4.jpg" width="40"
                                                                height="40" class="rounded-circle m-r-10" alt="user">

                                                            <div>
                                                                <span class="font-medium">Lady Gaga</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        ladygaga@gmail.com
                                                    </td>
                                                    <td>
                                                        Arkansas
                                                    </td>
                                                    <td>
                                                        350
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">

                                                            <img src="../plugins/images/users/5.jpg" width="40"
                                                                height="40" class="rounded-circle m-r-10" alt="user">

                                                            <div>
                                                                <span class="font-medium">Katy Perry</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        katyperry@gmail.com
                                                    </td>
                                                    <td>
                                                        California
                                                    </td>
                                                    <td>
                                                        350
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">

                                                            <img src="../plugins/images/users/5.jpg" width="40"
                                                                height="40" class="rounded-circle m-r-10" alt="user">

                                                            <div>
                                                                <span class="font-medium">Nirav Joshi</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        joshinrv@gmail.com
                                                    </td>
                                                    <td>
                                                        Colorado
                                                    </td>
                                                    <td>
                                                        350
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">

                                                            <img src="../plugins/images/users/7.jpg" width="40"
                                                                height="40" class="rounded-circle m-r-10" alt="user">

                                                            <div>
                                                                <span class="font-medium">Shraddha Kapoor</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        kpoorshraddha@gmail.com
                                                    </td>
                                                    <td>
                                                        Connecticut
                                                    </td>
                                                    <td>
                                                        350
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">

                                                            <img src="../plugins/images/users/6.jpg" width="40"
                                                                height="40" class="rounded-circle m-r-10" alt="user">

                                                            <div>
                                                                <span class="font-medium">Iyar Panipuri</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        panipuri@gmail.com
                                                    </td>
                                                    <td>
                                                        Delaware
                                                    </td>
                                                    <td>
                                                        350
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">

                                                            <img src="../plugins/images/users/7.jpg" width="40"
                                                                height="40" class="rounded-circle m-r-10" alt="user">

                                                            <div>
                                                                <span class="font-medium">Amit Bhajan</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        bhajanamit@gmail.com
                                                    </td>
                                                    <td>
                                                        Hawaii
                                                    </td>
                                                    <td>
                                                        350
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">

                                                            <img src="../plugins/images/users/8.jpg" width="40"
                                                                height="40" class="rounded-circle m-r-10" alt="user">

                                                            <div>
                                                                <span class="font-medium">Deep Javiya</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        deepjaviya@gmail.com
                                                    </td>
                                                    <td>
                                                        Idaho
                                                    </td>
                                                    <td>
                                                        350
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="../plugins/images/users/1.jpg" width="40"
                                                                height="40" class="rounded-circle m-r-10" alt="user">
                                                            <span class="font-medium m-b-0">Aleis Patel</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        dude008@gmail.com
                                                    </td>
                                                    <td>
                                                        Illinois
                                                    </td>
                                                    <td>
                                                        350
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
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
                                <img src="../plugins/images/logo.png" class="img-responsive home-logo" alt="">
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