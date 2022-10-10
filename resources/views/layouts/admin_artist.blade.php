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
                        <h4 class="page-title">Artist</h4>
                    </div>
                </div>

                <div class="" style="max-width: 1500px; margin: 0 auto;">
                    <div class="white-box">
                        <div class="card border-0">
                            <div class="card-body">
                                <div>
                                    <h4 class="dash-heading m-t-0 m-b-5">Artists</h4>
                                    <p class="dash-subheading">Number of paid and free artist</p>
                                    <div class="table-responsive m-t-40">
                                        <table id="example23" data-page-length='5'
                                            class="display nowrap vertical-align-middle table table-hover table-striped table-bordered"
                                            cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Membership</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (count($artists) > 0)
                                                    @foreach ($artists as $artist)
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex">

                                                                    <img src="{{ asset('pictures/' . $artist->avatar) }}"
                                                                        width="40" height="40"
                                                                        class="rounded-circle m-r-10" alt="user">

                                                                    <div>
                                                                        <span class="font-medium">{{$artist->first_name}}</span>
                                                                        <p class="fs-14 m-b-0">{{$artist->genre}}</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                {{$artist->email}}
                                                            </td>
                                                            <td>
                                                                <span class="badge badge-success">Paid</span>
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('admin.artist_details', ['id' => $artist->id]) }}" data-id="{{ $artist->id }}"
                                                                    class="btn btn-outline-success align-items-center p-b-5">
                                                                    View Detail
                                                                </a>
                                                                <a href="{{ route('admin.destroy_artist', ['id' => $artist->id]) }}" data-id="{{ $artist->id }}"
                                                                    class="btn btn-inverse align-items-center p-b-5">
                                                                    Delete
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    @endif
                                            </tbody>
                                        </table>
                                    
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6" style="display: flex; align-items: stretch;">
                            <div class="white-box w-100" style="overflow: hidden;">
                                <h4 class="dash-heading m-t-0 m-b-5">Membership</h4>
                                <p class="dash-subheading m-b-40">Number of paid, free and, pending members</p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <div id="sales"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="white-box">
                                <div class="card border-0">
                                    <div class="card-body">
                                        <div>
                                            <h4 class="dash-heading m-t-0 m-b-5">Incomplete Artist</h4>
                                            <p class="dash-subheading">List of incomplete artist</p>

                                            <div class="table-responsive m-t-40">
                                                <table id="example24" data-page-length='2'
                                                    class="display text-nowrap nowrap vertical-align-middle table table-hover table-striped table-bordered"
                                                    cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Membership</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <a href="./artist-detail.html">
                                                                        <img src="../plugins/images/users/1.jpg"
                                                                            width="40" height="40"
                                                                            class="rounded-circle m-r-10"
                                                                            alt="user">
                                                                    </a>
                                                                    <div>
                                                                        <a href="./artist-detail.html"
                                                                            class="text-dark text-hover-success">
                                                                            <span class="font-medium">Steve
                                                                                Gection</span>
                                                                        </a>
                                                                        <p class="fs-14 m-b-0">Hip Hop</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                stevugection@gmail.com
                                                            </td>
                                                            <td>
                                                                <span class="badge badge-danger">Pending</span>
                                                            </td>
                                                            <td>
                                                                <a href=""
                                                                    class="btn btn-inverse align-items-center p-b-5">
                                                                    Email
                                                                </a>
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
