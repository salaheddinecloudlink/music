<div class="navbar-default sidebar" role="navigation">

    <div class="sidebar-nav navbar-collapse slimscrollsidebar">

        <div class="user-profile m-t-20 text-center">
            <div class="user-pro-body">
                <div class="dropdown">
                    <a class="bg-white text-center m-t-15">

                        <img src="{{ asset("external_artist/plugins/images/users/1.jpg")}}" width="50"
                            height="50" alt="user-img" class="m-b-5 img-circle">
                        <p class="hide-menu mb-0" style="color: #54667a;">{{ auth()->user()->profile->first_name ?? ''  }}{{"  "}}{{auth()->user()->profile->last_name ?? ''}}</p>
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
                <a href="/" class="waves-effect"><i class="ti-user p-r-10"></i> <span class="hide-menu">
                        Profile</span></a>
            </li>
            <li>
                <a href="{{ route('video') }}" class="waves-effect"><i class="ti-video-camera p-r-10"></i> <span
                        class="hide-menu"> Videos </span></a>
            </li>
            <li>
                <a href="{{ route('song') }}" class="waves-effect"><i class="ti-music-alt p-r-10"></i> <span
                        class="hide-menu"> Music </span></a>
            </li>
            <li>
                <a href="{{ route('album') }}" class="waves-effect"><i class="ti-microphone p-r-10"></i> <span
                        class="hide-menu"> Album</span></a>
            </li>
            <li>
                <a href="{{ route('discussion') }}" class="waves-effect"><i class="ti-calendar p-r-10"></i> <span
                        class="hide-menu"> Discussion</span></a>
            </li>
            <li>
                <a href="{{ route('followers') }}" class="waves-effect"><i class="ti-face-smile p-r-10"></i> <span
                        class="hide-menu"> Followers</span></a>
            </li>
            <li>
                <a href="{{ route('activites') }}" class="waves-effect"><i class="ti-view-grid p-r-10"></i> <span
                        class="hide-menu"> Activities</span></a>
            </li>
            <li>
                <a href="{{ route('account') }}" class="waves-effect"><i class="ti-settings p-r-10"></i> <span
                        class="hide-menu"> Account Setting</span></a>
            </li>
            <li>
                <a href="#" class="waves-effect"><i class="ti-upload  p-r-10"></i> <span class="hide-menu">Terms
                        of use</span></a>
            </li>


            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="waves-effect"><i
                        class="ti-power-off p-r-10"></i> <span class="hide-menu">Sign out</span></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>





            </li>
        </ul>
    </div>
</div>
