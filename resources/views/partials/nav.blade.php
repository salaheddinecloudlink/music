<!-- Navigation -->

<style>
    .mainmenu {
        padding: 13px 0;
        display: flex;
        flex-direction: row-reverse;
    }

    .forFlexcolmn {
        display: flex;
        flex-direction: column;
    }

    .sbsrch {
        display: flex;
        flex-direction: row-reverse;
        width: 93%;

    }

    .login {
        margin-right: 10px;
    }

    .drop-style {
        position: absolute;
        left: -131px;
        top: 34px;
        background-color: #343a40;
        color: white;
    }

    .dropdown-menu>li>a {
        color: white;
    }
</style>
<div class="mainmenu-area1 m-b-0">
    <div class="container-fluid ">
        <div class="row menupart">
            <div class="col-sm-2 col-md-4">
                <div class="logo-section">
                    <div class="logo logo_margint">
                        <h1><a href="/"><img src="{{ asset('external/images/logo.png') }}" alt=""
                                    class="img-100"></a></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 col-md-8">
                <div class="navigation-section">
                    <div class="mainmenu">
                        <div class="dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if (Auth::check() && Auth::user()->user_type == 'fan')
                                    @empty(auth()->user()->profile->avatar)
                                        <img src="{{ asset('external/img/folio/4931240432_4c689bdf34_b-1.jpg') }}"
                                            width="30" height="30" alt="user-img" class="m-b-5 img-circle">
                                    @else
                                        <img src="{{ asset('storage/fan/avatar/' . auth()->user()->profile->avatar) }}"
                                            width="30" height="30" alt="user-img" class="m-b-5 img-circle">
                                    @endempty
                                @endif

                            @if (Auth::check() && Auth::user()->user_type == 'artist')
                            @empty(auth()->user()->profile_artist->avatar)
                                <img src="{{ asset('external/img/folio/32.jpg') }}" width="30" height="30"
                                    alt="user-img" class="m-b-5 img-circle">
                            @else
                                <img src="{{ asset('storage/fan/avatar/' . auth()->user()->profile_artist->avatar) }}"
                                    width="30" height="30" alt="user-img" class="m-b-5 img-circle">
                            @endempty
                        @endif

                        <ul class="drop-style nav-item dropdown dropdown-menu text-center " role="menu"
                            aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                @if (Auth::check() && Auth::user()->user_type == 'artist')
                                    <a class="dropdown-item" href="{{ route('artist.view') }}">Dashboard</a><br>
                                @endif
                                @if (Auth::check() && Auth::user()->user_type == 'fan')
                                    <a class="dropdown-item" href="{{ route('home') }}">Dashboard</a><br>
                                @endif
                                @if (Auth::check() && Auth::user()->user_type == 'admin')
                                    <a class="dropdown-item" href="{{ route('admin') }}">Dashboard</a><br>
                                @endif


                                @if (Auth::check())
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();                                                                                                                                                                                                                                                                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a><br>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                @endif

                            </li>

                        </ul>
                </div>
                </a>

                <div class="forFlexcolmn">
                    <div class="sbsrch" role="search">
                        <div class="form-group">
                            <div class="input-group search-position">
                                <input type="text" class="form-control input-sm no-border sbtxt "
                                    placeholder="Search Video...">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-sm bg-white btn-icon sbbtn"><i
                                            class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </div>
                        <div class="login">
                            <ul>
                                @guest
                                    @if (Route::has('login'))
                                        <li><span><img
                                                    src="external/images/1467975177_common-login-enter-signin-glyph.png"></span><a
                                                href="#" data-toggle="modal"
                                                data-target="#myModallogin">LOGIN</a>
                                        </li>
                                    @endif
                                    @if (Route::has('register'))
                                        <li style="padding-right: 0px;"><span><img
                                                    src="external/images/register.png"></span><a href="#"
                                                data-toggle="modal" data-target="#myModalcontactus">REGISTER</a>
                                        </li>
                                    @endif
                                @else
                                @endguest
                        </div>
                    </div>

                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse"
                            data-target=".navbar-collapse"> <span class="sr-only">Toggle
                                navigation</span>
                            <span class="icon-bar"></span> <span class="icon-bar"></span> <span
                                class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse  toggle-header">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ route('welcome') }}">Home</a></li>
                            <li><a href="{{ route('feature') }}">Featured </a></li>
                            <li><a href="{{ route('artist') }}">Artist</a></li>
                            <li><a href="{{ route('landingvideo') }}">Video</a></li>
                            <li><a href="{{ route('landingalbum') }}">Albums</a></li>
                            <li><a href="{{ route('music') }}">Music</a></li>
                            <li><a href="{{ route('discussion') }}">Discussion</a></li>
                            <li><a href="{{ route('event') }}">Events</a></li>
                            <li><a href="{{ route('news') }}">News</a></li>
                            <li><a href="{{ route('fan') }}">Fans</a></li>
                            
                        </ul>
                    </div>
                </div>

                <!--/.nav-collapse -->
            </div>
            <!-- End mainmenu -->
        </div>
    </div>
    <div class="clear"></div>
</div>
</div>
</div>
<div class="clear"></div>
<!-- Navigation -->
