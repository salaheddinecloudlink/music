<div class="navbar-default sidebar" role="navigation">

    <div class="sidebar-nav navbar-collapse slimscrollsidebar">

        <div class="user-profile m-t-20 text-center">
            <div class="user-pro-body">
                <div class="dropdown">
                    <a class="bg-white text-center m-t-15">
                       
                            <img src="pictures/avatar.jpg" alt="user profile image"
                                width="50" height="50" alt="user-img" class="m-b-5 img-circle">
                      
                        <p class="hide-menu mb-0" style="color: #54667a;">
                            {{ $profile->first_name ?? '' }}{{ '  ' }}{{ $profile->last_name ?? '' }}
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <ul class="nav" id="side-menu">
            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                <!-- input-group -->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
                        <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{ route('artist.view') }}" class="waves-effect"><i class=" ti-layout-grid2 p-r-10"></i>
                    <span class="hide-menu"> Dashboard</span></a>
            </li>
            <li>
                <a href="{{ route('artist.profile') }}" class="waves-effect"><i class="ti-user p-r-10"></i> <span
                        class="hide-menu"> Profile</span></a>
            </li>
            <li>
                <a href="{{ route('artist.video') }}" class="waves-effect"><i class="ti-video-camera p-r-10"></i>
                    <span class="hide-menu"> Videos </span></a>
            </li>
            <li>
                <a href="{{ route('artist.song') }}" class="waves-effect"><i class="ti-music-alt p-r-10"></i> <span
                        class="hide-menu"> Music </span></a>
            </li>
            <li>
                <a href="{{ route('artist.album') }}" class="waves-effect"><i class="ti-microphone p-r-10"></i> <span
                        class="hide-menu"> Album</span></a>
            </li>
            <li>
                <a href="{{ route('artist.event') }}" class="waves-effect"><i class="ti-calendar p-r-10"></i> <span
                        class="hide-menu">Events</span></a>
            </li>
            <li>
                <a href="fan.html" class="waves-effect"><i class="ti-face-smile p-r-10"></i> <span class="hide-menu">
                        Followers</span></a>
            </li>

            <li>
                <a href="{{route('subscription')}}" class="waves-effect"><i class="ti-face-smile p-r-10"></i> <span class="hide-menu">
                    Membership Type</span></a>
            </li>
            <li>
                <a href="fan.html" class="waves-effect"><i class="ti-face-smile p-r-10"></i> <span class="hide-menu">
                    Change Password</span></a>
            </li>
            <li>
                <a href="fan.html" class="waves-effect"><i class="ti-face-smile p-r-10"></i> <span class="hide-menu">
                    Billing</span></a>
            </li>
            <li>
                <a href="#" class="waves-effect"><i class="ti-upload  p-r-10"></i> <span class="hide-menu">Terms
                        of use</span></a>
            </li>


            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"
                    class="waves-effect"><i class="ti-power-off p-r-10"></i> <span class="hide-menu">Sign out</span></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>
<script src="{{ asset('external_artist/js/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('external_artist/bootstrap/dist/js/tether.min.js')}}')}}"></script>
    <script src="{{ asset('external_artist/bootstrap/dist/js/bootstrap.min.js')}}')}}"></script>
    <script src="{{ asset('external_artist/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{ asset('external_artist/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <script src="{{ asset('external_artist/./js/select2/dist/js/select2.full.min.js')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{ asset('external_artist/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('external_artist/js/waves.js')}}"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="{{ asset('external_artist/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script type="text/javascript">
        // Date Picker
        jQuery('.mydatepicker').datepicker();
        $(".select2").select2();
        // $(".selectpicker").selectpicker();
    </script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('external_artist/js/custom.min.js')}}"></script>