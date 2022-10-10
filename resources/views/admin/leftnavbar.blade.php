<div class="navbar-default sidebar" role="navigation">

            <div class="sidebar-nav navbar-collapse slimscrollsidebar">

                <div class="user-profile m-t-20 text-center">
                    <div class="user-pro-body">
                        <div class="dropdown">
                            <a class="bg-white text-center m-t-15" >
                                <img src="{{asset( 'external_artist/plugins/images/users/5.jpg')}}" width="50" height="50" alt="user-img"
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
                        <a href="{{route('admin.analytics')}}" class="waves-effect"><i class="ti-view-grid p-r-10"></i> <span
                                class="hide-menu"> General</span></a>
                    </li>
                    <li>
                        <a href="{{route('admin.artist')}}" class="waves-effect"><i class="ti-user p-r-10"></i> <span
                                class="hide-menu"> Artist </span></a>
                    </li>
                    <li>
                        <a href="{{route('admin.video')}}" class="waves-effect"><i class="ti-video-camera p-r-10"></i> <span
                                class="hide-menu"> Videos </span></a>
                    </li>
                    <li>
                        <a href="{{route('admin.music')}}" class="waves-effect"><i class="ti-music-alt p-r-10"></i> <span
                                class="hide-menu"> Musics </span></a>
                    </li>
                    <li>
                        <a href="{{route('admin.event')}}" class="waves-effect"><i class="ti-briefcase p-r-10"></i> <span
                                class="hide-menu"> Events </span></a>
                    </li>
                    <li>
                        <a href="{{route('admin.new')}}" class="waves-effect"><i class="ti-bookmark-alt p-r-10"></i> <span
                                class="hide-menu"> News </span></a>
                    </li>
                    <li>
                        <a href="{{route('admin.fan')}}" class="waves-effect"><i class="ti-face-smile p-r-10"></i> <span
                                class="hide-menu"> Fans </span></a>
                    </li>

                    <li>
                        <a href="{{route('admin.discussion')}}" class="waves-effect"><i class="ti-calendar p-r-10"></i> <span
                                class="hide-menu"> Discussion</span></a>
                    </li>
                    <li>
                        <a href="{{route('admin.analytics')}}" class="waves-effect"><i class="ti-receipt p-r-10"></i> <span
                                class="hide-menu"> Advertisement</span></a>
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