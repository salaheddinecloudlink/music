<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('external_artist/plugins/images/logo-icon.png') }}">
        
    <title>Uruploadz.com</title>

    @include('partials.head')

    <style>
        .hide-me {
            display: none;
        }

        .show-me {
            display: block;
        }
    </style>
</head>

<body>
    <div class="homePage">

        @include('partials.nav')


        @if (session('status'))
            <div class="alert alert-success no-gutter" align="center" role="alert">
                <strong>{{ session()->get('status') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif


        @yield('content')

        @include('partials.footer')
        <!-- play Bar -->
        @include('partials.playbar')

        <div id="myModallogin" class="modal fade" role="dialog">
            <div class="modal-dialog overflow-hidden modal-lg">

                <!-- Modal content-->
                <div class="modal-content no-border" style="overflow: hidden;">
                    <div class="modal-body p-0">
                        <div class="row d-flex align-items-center" style="position: relative;">
                            <button type="button" class="close"
                                style="padding: 6px 10px; margin-right: 10px; position: absolute; top: 0; right: 8px;"
                                data-dismiss="modal">&times;</button>
                            <div class="col-lg-6 col-md-6">
                                <img src="external/./images/loginbg.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="popinner">
                                    <h1 class="text-black m-t-0 signin-heading">Sign In</h1>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <label>Email <span class="font-bold text-danger">*</span></label>
                                        <input id="email" type="email"
                                            class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                            name="email" value="{{ old('email') }}" required autofocus
                                            placeholder="Email">
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                        <div style="margin-top: 20px;">
                                            <label>Password <span class="font-bold text-danger">*</span></label>
                                            <input class="form-control" type="password"
                                                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                name="password" required placeholder="Password">
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group m-t-15">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="">
                                                    <div class="checkbox checkbox-primary p-t-0">
                                                        <input class="checkbox-signup" type="checkbox" name="remember"
                                                            id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label for="checkbox-signup" class="ps-0">
                                                            Remember me
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class=" text-right">
                                                    @if (Route::has('password.request'))
                                                        <a href="" class="text-dark " data-toggle="modal"
                                                            data-target="#myResetModal" data-dismiss="modal"><i
                                                                class="fa fa-lock m-r-5"></i> Forgot pwd?
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <button
                                            class="btn btn-success m-t-20 btn-lg btn-block text-uppercase waves-effect waves-light "
                                            type="submit">
                                            Log In
                                        </button>
                                    </form>

                                    <p class="text-center m-t-5">
                                        Already have an account?
                                        <a href="#" data-toggle="modal" data-target="#myModalcontactus"
                                            class="text-primary m-l-5"><b>Sign In</b></a>
                                    </p>

                                    <div class="ortext"><span>Or Sign Up with</span></div>

                                    <div class="m-t-10 text-center artist-social">
                                        <form style="display: inline-block;" method="POST"
                                            action="{{ route('login.facebook') }}">
                                            @csrf
                                            <input type="text" style="display: none" value="fan" name="user_type">
                                            <button style="" type="submit"
                                                class="btn btn-light btn-lg btn-floating"><i class="fa fa-facebook"
                                                    style="font-size: 20px;"></i></button>
                                        </form>
                                        <form style="display: inline-block;" method="POST"
                                            action="{{ route('login.google') }}">
                                            @csrf
                                            <input type="text" style="display: none" value="fan"
                                                name="user_type">
                                            <button style="" type="submit"
                                                class="btn btn-light btn-lg btn-floating"><i class="fa fa-twitter"
                                                    style="font-size: 20px;"></i></button>
                                        </form>
                                        <form style="display: inline-block;" method="POST"
                                            action="{{ route('login.google') }}">
                                            @csrf
                                            <input type="text" style="display: none" value="fan"
                                                name="user_type">
                                            <button style="" type="submit"
                                                class="btn btn-light btn-lg btn-floating"
                                                data-mdb-ripple-color="dark"><i class="fa fa-google-plus"
                                                    style="font-size: 20px;"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="staticBackdrop11" class="modal fade" role="dialog">
            <div class="modal-dialog overflow-hidden modal-md">

                <!-- Modal content-->
                <div class="modal-content no-border" style="overflow: hidden;">
                    <div class="modal-body p-0">
                        <div class="row d-flex align-items-center" style="position: relative;">
                            <button type="button" class="close"
                                style="padding: 6px 10px; margin-right: 10px; position: absolute; top: 0; right: 8px;"
                                data-dismiss="modal">&times;</button>
                            <div class="col-lg-12 col-md-12">
                                <div class="popinner">

                                    <form method="POST" action="{{ route('google.store') }}">
                                        @csrf
                                        <input type="text" style="display: none" value="fan" name="user_type">

                                        <div style="margin-top: 10px;">
                                            <button
                                                class=" btn btn-success m-t-20 btn-sm btn-block text-uppercase waves-effect waves-light"
                                                type="submit">
                                                Fan
                                            </button>
                                    </form>

                                </div>
                                <form method="POST" action="{{ route('google.store') }}">
                                    @csrf
                                    <input type="text" style="display: none" value="artist" name="user_type">

                                    <button
                                        class="
                              btn btn-success m-t-20 btn-sm btn-block
                              text-uppercase
                              waves-effect waves-light
                           "
                                        type="submit">
                                        Artist
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>




    <div class="modal fade" id="staticBackdrop12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog overflow-hidden modal-lg">

            <!-- Modal content-->
            <div class="modal-content no-border" style="overflow: hidden;">
                <div class="modal-body p-0">
                    <div class="row d-flex align-items-center" style="position: relative;">
                        <button type="button" class="close"
                            style="padding: 6px 10px; margin-right: 10px; position: absolute; top: 0; right: 8px;"
                            data-dismiss="modal">&times;</button>
                        <div class="col-lg-6 col-md-6">
                            <img src="external/./images/loginbg.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="popinner">
                                <h1 class="text-black m-t-0 signin-heading">Sign Up as :</h1>
                                <form method="POST" action="{{ route('facebook.store') }}">
                                    @csrf
                                    <input type="text" style="display: none" value="fan" name="user_type">

                                    <div style="margin-top: 20px;">
                                        <button
                                            class=" btn btn-success m-t-20 btn-lg btn-block text-uppercase waves-effect waves-light"
                                            type="submit">
                                            Fan </button>
                                </form>

                            </div>
                            <form method="POST" action="{{ route('facebook.store') }}">
                                @csrf
                                <input type="text" style="display: none" value="artist" name="user_type">

                                <button
                                    class="
                         btn btn-success m-t-20 btn-lg btn-block
                         text-uppercase
                         waves-effect waves-light
<<<<<<< HEAD
                       "
                                    type="submit">
                                    Artist
                                </button>
                            </form>
                        </div>
                    </div>
=======
                       " type="submit">
                            Log In
                         </button>
                      </form>

                      <p class="text-center m-t-5">
                         Don't have an account?
                         <a href="#" data-toggle="modal" data-target="#myModalcontactus"
                            class="text-primary m-l-5"><b>Sign Up</b></a>
                      </p>

                      <div class="ortext"><span>Or Log IN with</span></div>

                      <div class="m-t-10 text-center artist-social">
                         <a href="" ><i class="fa fa-facebook" style="font-size: 20px;"></i></a>
                         <a href="" ><i class="fa fa-twitter" style="font-size: 20px;"></i></a>
                         <a href=""  ><i class="fa fa-google-plus"
                               style="font-size: 20px;"></i></a>
                      </div>
                   </div>
>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9
                </div>
            </div>
        </div>

    </div>
    </div>


<<<<<<< HEAD
    <div class="modal fade" id="myModalcontactus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog overflow-hidden modal-lg">

=======





 <div id="staticBackdrop11" class="modal fade" role="dialog">
    <div class="modal-dialog overflow-hidden modal-lg">

       <!-- Modal content-->
       <div class="modal-content no-border" style="overflow: hidden;">
          <div class="modal-body p-0">
             <div class="row d-flex align-items-center" style="position: relative;">
                <button type="button" class="close"
                   style="padding: 6px 10px; margin-right: 10px; position: absolute; top: 0; right: 8px;"
                   data-dismiss="modal">&times;</button>
                <div class="col-lg-6 col-md-6">
                   <img src="external/./images/loginbg.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-lg-6 col-md-6">
                   <div class="popinner">
                      <h1 class="text-black m-t-0 signin-heading">Sign Up as :</h1>
                      <form method="POST" action="{{ route('google.store') }}">
                        @csrf
                        <input type="text" style="display: none"  value="fan" name="user_type">

                         <div style="margin-top: 20px;">
                            <button class=" btn btn-success m-t-20 btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">
                                Fan </button>
                               </form>

                         </div>
                         <form method="POST" action="{{ route('google.store') }}">
                            @csrf
                            <input type="text" style="display: none"  value="artist" name="user_type">

                         <button class="
                         btn btn-success m-t-20 btn-lg btn-block
                         text-uppercase
                         waves-effect waves-light
                       " type="submit">
                            Artist
                         </button>
                      </form>




                   </div>
                </div>
             </div>
          </div>
       </div>

    </div>







 </div>




 <div class="modal fade" id="staticBackdrop12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog overflow-hidden modal-lg">

       <!-- Modal content-->
       <div class="modal-content no-border" style="overflow: hidden;">
          <div class="modal-body p-0">
             <div class="row d-flex align-items-center" style="position: relative;">
                <button type="button" class="close"
                   style="padding: 6px 10px; margin-right: 10px; position: absolute; top: 0; right: 8px;"
                   data-dismiss="modal">&times;</button>
                <div class="col-lg-6 col-md-6">
                   <img src="external/./images/loginbg.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-lg-6 col-md-6">
                   <div class="popinner">
                      <h1 class="text-black m-t-0 signin-heading">Sign Up as :</h1>
                      <form method="POST" action="{{ route('facebook.store') }}">
                        @csrf
                        <input type="text" style="display: none"  value="fan" name="user_type">

                         <div style="margin-top: 20px;">
                            <button class=" btn btn-success m-t-20 btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">
                                Fan </button>
                               </form>

                         </div>
                         <form method="POST" action="{{ route('facebook.store') }}">
                            @csrf
                            <input type="text" style="display: none"  value="artist" name="user_type">

                         <button class="
                         btn btn-success m-t-20 btn-lg btn-block
                         text-uppercase
                         waves-effect waves-light
                       " type="submit">
                            Artist
                         </button>
                      </form>




                   </div>
                </div>
             </div>
          </div>
       </div>

    </div>







  </div>


 <div class="modal fade" id="myModalcontactus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog overflow-hidden modal-lg">


       <div class="modal-content no-border">
          <div class="modal-body p-0">
             <div class="row">
                <div class="col-lg-6">
                   <img src="external/./images/register.jpg" class="h-100 img-responsive" alt="">
                </div>
                <div class="col-lg-6">
                   <button type="button" class="close" style="padding: 6px 10px;"
                      data-dismiss="modal">&times;</button>
                   <div class="popinner">
                      <h1 class="text-black m-t-0 ">Sign Up</h1>
                      <p class="signin-heading">Dont have an account? It takes less than a minute</p>
                      <ul class="nav nav-tabs nav-justified my_tab">
                         <li class="nav-item artist ">
                            <a class="nav-link" data-toggle="tab" onclick="change2()" id="modal2Button" href="#fan" role="tab">Artist</a>
>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9

            <div class="modal-content no-border">
                <div class="modal-body p-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="external/./images/register.jpg" class="h-100 img-responsive" alt="">
                        </div>
                        <div class="col-lg-6">
                            <button type="button" class="close" style="padding: 6px 10px;"
                                data-dismiss="modal">&times;</button>
                            <div class="popinner">
                                <h1 class="text-black m-t-0 ">Sign Up</h1>
                                <p class="signin-heading">Dont have an account? It takes less than a minute</p>
                                <ul class="nav nav-tabs nav-justified my_tab">
                                    <li class="nav-item artist active ">
                                        <a class="nav-link" data-toggle="tab" onclick="change2()" id="modal2Button"
                                            href="#fan" role="tab">Artist</a>

                                    </li>
                                    <li class="nav-item fan">
                                        <a class="nav-link" data-toggle="tab" onclick="change1()" id="close-button"
                                            href="#artist" role="tab">Fan</a>
                                    </li>
                                </ul>

                                <div class="hide-me" id='modal1'>

                                    <form method="POST" action="{{ route('register') }}" id="register_artist">
                                        @csrf

                                        <input type="text" style="display: none" id="my_field" value="fan"
                                            name="user_type">

                                        <label>Email <span class="font-bold text-danger">*</span></label>
                                        <input class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required
                                            autocomplete="email type="email" required="" placeholder="Email"
                                            autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <div style="margin-top: 20px;">
                                            <label>Password <span class="font-bold text-danger">*</span></label>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password"
                                                placeholder="Password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div style="margin-top: 20px;">
                                            <label>Repeat Password <span class="font-bold text-danger">*</span></label>
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required placeholder="Repeat Password">
                                        </div>
                                        <div class="form-group m-t-15">
                                            <div class="">
                                                <div class="checkbox checkbox-primary p-t-0">
                                                    <input id="checkbox-signup" type="checkbox" name="Accept"
                                                        id="term" value="true"
                                                        {{ !old('Accept') ?: 'checked' }}required
                                                        data-validation-required-message="You must agree to the terms and conditions">
                                                    <label for="checkbox-signup" class="ps-0">
                                                        I accept Terms of Service and Privacy Policy.
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <button
                                            class="
                         btn btn-success m-t-20 btn-lg btn-block
                         text-uppercase
                         waves-effect waves-light
                       "
                                            type="submit">
                                            Sign Up
                                        </button>
                                    </form>
                                    <p class="text-center m-t-5">
                                        Already have an account?
                                        <a href="#" data-toggle="modal" data-target="#myModalcontactus"
                                            class="text-primary m-l-5"><b>Sign In</b></a>
                                    </p>

                                    <div class="ortext"><span>Or Sign Up with</span></div>

                                    <div class="m-t-10 text-center artist-social">
                                        <form style="display: inline-block;" method="POST"
                                            action="{{ route('facebook.store') }}">
                                            @csrf
                                            <input type="text" style="display: none" value="fan"
                                                name="user_type">
                                            <button style="" type="submit"
                                                class="btn btn-light btn-lg btn-floating"><i class="fa fa-facebook"
                                                    style="font-size: 20px;"></i></button>
                                        </form>
                                        <form style="display: inline-block;" method="POST"
                                            action="{{ route('facebook.store') }}">
                                            @csrf
                                            <input type="text" style="display: none" value="fan"
                                                name="user_type">
                                            <button style="" type="submit"
                                                class="btn btn-light btn-lg btn-floating"><i class="fa fa-twitter"
                                                    style="font-size: 20px;"></i></button>
                                        </form>
                                        <form style="display: inline-block;" method="POST"
                                            action="{{ route('google.store') }}">
                                            @csrf
                                            <input type="text" style="display: none" value="fan"
                                                name="user_type">
                                            <button style="" type="submit"
                                                class="btn btn-light btn-lg btn-floating"
                                                data-mdb-ripple-color="dark"><i class="fa fa-google-plus"
                                                    style="font-size: 20px;"></i></button>
                                        </form>
                                    </div>


                                </div>

                                <div class='show-me' id='modal2'>
                                    <form method="POST" action="{{ route('registerArtist') }}"
                                        id="register_artist">
                                        @csrf

                                        <input type="text" style="display: none" value="artist" name="user_type">

                                        <label>Email <span class="font-bold text-danger">*</span></label>
                                        <input class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required
                                            autocomplete="email type="email" required="" placeholder="Email"
                                            autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <div style="margin-top: 20px;">
                                            <label>Password <span class="font-bold text-danger">*</span></label>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password"
                                                placeholder="Password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div style="margin-top: 20px;">
                                            <label>Repeat Password <span class="font-bold text-danger">*</span></label>
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required placeholder="Repeat Password">
                                        </div>
                                        <div class="form-group m-t-15">
                                            <div class="">
                                                <div class="checkbox checkbox-primary p-t-0">
                                                    <input id="checkbox-signup" type="checkbox" name="Accept"
                                                        id="term" value="true"
                                                        {{ !old('Accept') ?: 'checked' }}required
                                                        data-validation-required-message="You must agree to the terms and conditions">
                                                    <label for="checkbox-signup" class="ps-0">
                                                        I accept Terms of Service and Privacy Policy.
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <button
                                            class="
                             btn btn-success m-t-20 btn-lg btn-block
                             text-uppercase
                             waves-effect waves-light"
                                            type="submit">
                                            Sign Up
                                        </button>
                                    </form>
                                    <p class="text-center m-t-5">
                                        Already have an account?
                                        <a href="#" data-toggle="modal" data-target="#myModalcontactus"
                                            class="text-primary m-l-5"><b>Sign In</b></a>
                                    </p>

                                    <div class="ortext"><span>Or Sign Up with</span></div>

                                    <div class="m-t-10 text-center artist-social">
                                        <form style="display: inline-block;" method="POST"
                                            action="{{ route('facebook.store') }}">
                                            @csrf
                                            <input type="text" style="display: none" value="artist"
                                                name="user_type">
                                            <button style="" type="submit" class="btn btn-lg btn-floating"><i
                                                    class="fa fa-facebook" style="font-size: 20px;"></i></button>
                                        </form>
                                        <form style="display: inline-block;" method="POST"
                                            action="{{ route('google.store') }}">
                                            @csrf
                                            <input type="text" style="display: none" value="artist"
                                                name="user_type">
                                            <button style="" type="submit" class="btn btn-lg btn-floating"><i
                                                    class="fa fa-twitter" style="font-size: 20px;"></i></button>
                                        </form>
                                        <form style="display: inline-block;" method="POST"
                                            action="{{ route('google.store') }}">
                                            @csrf
                                            <input type="text" style="display: none" value="artist"
                                                name="user_type">
                                            <button style="" type="submit" class="btn btn-lg btn-floating"><i
                                                    class="fa fa-google-plus" style="font-size: 20px;"></i></button>
                                        </form>
                                    </div>
                                </div>

<<<<<<< HEAD
=======



                      </div>








                      <p class="text-center m-t-5">
                         Already have an account?
                         <a href="#" data-toggle="modal" data-target="#myModalcontactus"
                            class="text-primary m-l-5"><b>Sign In</b></a>
                      </p>

                      <div class="ortext"><span>Or Sign Up with</span></div>

                      <div class="m-t-10 text-center artist-social">
                         <a href="javascript: void(0);"  data-toggle="modal" data-target="#staticBackdrop12"data-dismiss="modal" ><i class="fa fa-facebook" style="font-size: 20px;"></i></a>
                         <a href="javascript: void(0);"><i class="fa fa-twitter" style="font-size: 20px;"></i></a>
                         <a href="javascript: void(0);" data-toggle="modal" data-target="#staticBackdrop11" data-dismiss="modal"><i class="fa fa-google-plus" style="font-size: 20px;"></i></a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>

    </div>
 </div>

 <div id="subscribeModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog overflow-hidden modal-lg">

    <!-- Modal content-->
       <div class="modal-content no-border" style="overflow: hidden;">
          <div class="modal-body p-0">
             <div class="row d-flex align-items-center" style="position: relative;">
                <button type="button" class="close"
                   style="padding: 6px 10px; margin-right: 10px; position: absolute; top: 0; right: 8px;"
                   data-dismiss="modal">&times;</button>
                <div class="col-lg-6 col-md-6">
                   <img src="external/./images/loginbg.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-lg-6 col-md-6">
                   <div class="popinner">
                      <h1 class="text-black m-t-0 signin-heading">Subscribe</h1>
                      <form>
                         <label>First Name</label>
                         <input class="form-control" type="text" required="" placeholder="First Name">
                         <div style="margin-top: 20px;">
                            <label>Last Name</label>
                            <input class="form-control" type="text" required="" placeholder="Last Name">
                            <div style="margin-top: 20px;">
                               <label>Email</label>
                               <input class="form-control" type="email" required="" placeholder="Email">

                               <button class="
                      btn btn-success btn-lg btn-block
                      text-uppercase
                      waves-effect waves-light
                    " type="submit" style="margin-top: 30px;">
                                  Subscribe
                               </button>
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </div>

    </div>
 </div>

 <div class="modal fade" id="myResetModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
       <div class="modal-content">
          <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">×</span><span class="sr-only">Close</span>
             </button>
             <h4 class="text-dark m-0" id="myModalLabel">Forgot Password</h4>
          </div>

          <div class="modal-body">
             <div class="login-box login-sidebar">
                <div class="white-box">
                   <div class="tab-content">
                      <div id="artist" class="tab-pane fade in active">
                         <form class="form-horizontal form-material" id="loginform" action="index.html">
                            <div class="form-group">
                               <div class="col-xs-12">
                                  <input class="form-control" type="email" required=""
                                     placeholder="Email Address" />
                               </div>
>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="modal fade" id="myResetModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="text-dark m-0" id="myModalLabel">Forgot Password</h4>
                </div>
                <div class="modal-body">
                    <div class="login-box login-sidebar">
                        <div class="white-box">
                            <div class="tab-content">
                                <div id="artist" class="tab-pane fade in active">
                                    <form class="form-horizontal form-material" id="loginform" method="POST"
                                        action="{{ route('password.email') }}">
                                        @csrf
                                        <div class="form-group">

                                            <div class="col-xs-12">
                                                <input class="form-control" id="email" type="email"
                                                    placeholder="Email Address" @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" required
                                                    autocomplete="email" autofocus />
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group text-center m-t-20">
                                            <div class="col-xs-12">
                                                <button
                                                    class="
                         btn btn-success btn-lg btn-block
                         text-uppercase
                         waves-effect waves-light"
                                                    type="submit">
                                                    Get New Password
                                                </button>
                                            </div>
                                        </div>
                                        <div class="form-group m-b-0">
                                            <div class="col-sm-12 text-center">
                                                <p>
                                                    <a href="#" class="text-primary m-l-5" data-toggle="modal"
                                                        data-dismiss="modal" data-target="#myModallogin"><b>Back To
                                                            Login</b></a>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content_for_reset">
                        <form role="form">
                            <div class="cus_col">
                                <h3>Forgot Password?</h3>
                                <p>
                                    Please enter the email address you signed up with and we'll
                                    send you a password reset link.
                                </p>
                                <div class="form-group">
                                    <input type="text" class="form-control" required placeholder="Email"
                                        id="txtNameContactUs" />
                                </div>
                                <button id="btn_reset" type="button" class="btn btn-success"
                                    style="width: 100%; border: 0">
                                    Reset Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">&nbsp;</div>
    </div>


















    <div class="modal fade" id="newsLetter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" style="width:400px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title text-center" id="myModalLabel">Subscribe for Newsletter</h4>
                </div>
                <div class="modal-body">
                    <div class="content_for_login">
                        <form role="form" id="frmContactUs">
                            <div id="divContactUsMessage" class="form-group" style="display:none;">
                                <div class="alert alert-success" role="alert"> <strong>Success!</strong> We will
                                    contact you
                                    soon </div>
                            </div>
                            <div class="cus_col">
                                <div class="clearfix"></div>
                                <div class="form_content">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" required placeholder="Name"
                                                id="txtEmailContactUs">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" required placeholder="Email"
                                                id="txtNameContactUs">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button id="btnSubmitContactUs" type="button" class="btn btn-success"
                                            style="width:100%;border:0;">Subscribe</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="content_for_reset">
                        <form role="form">
                            <div class="cus_col">
                                <h3>Forgot Password?</h3>
                                <p>Please enter the email address you signed up with and we'll send you a password reset
                                    link.
                                </p>
                                <div class="form-group">
                                    <input type="text" class="form-control" required placeholder="Email"
                                        id="txtNameContactUs">
                                </div>
                                <button id="btn_reset" type="button" class="btn btn-success"
                                    style="width:100%;border:0;">Reset
                                    Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">&nbsp;</div>
    </div>


<<<<<<< HEAD
    </div>
=======
 </div>
>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9

    <script src="{{ asset('external/js/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('external/js/bootstrap.js') }}"></script>
    <!-- App -->
    <script src="{{ asset('external/js/app.js') }}"></script>
    <script src="{{ asset('external/js/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('external/js/app.plugin.js') }}"></script>
    <script type="text/javascript" src="{{ asset('external/js/jPlayer/jquery.jplayer.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('external/js/jPlayer/add-on/jplayer.playlist.min.js') }}"></script>
    <script src="{{ asset('external/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('external/js/slick.min.js') }}"></script>
    <script src="{{ asset('external/js/theia-sticky-sidebar.js') }}"></script>
    <script src="{{ asset('external/js/jquery.plugin.js') }}"></script>
    <script src="{{ asset('external/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('external/js/scripts_isotope.js') }}"></script>
    <script type="text/javascript" src="{{ asset('external/js/main.js') }}"></script>
    <script src="{{ asset('external/js/loopcounter.js') }}"></script>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>


    <script language="javascript">
        $(".newsong").click(function() {
            //debugger;
            $("#detail_song_title_id").text($(this).attr("songtitle"));
            $("#detail_song_image_id").attr('src', $(this).attr("songpath"));
        });
        // Sticky Side Bar
        $(document).ready(function() {
            $('.sticky_right, .left-news')
                .theiaStickySidebar({
                    additionalMarginTop: 30
                });
        });
        // Count down
        $(function() {
            var austDay = new Date();
            austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
            $('#defaultCountdown').countdown({
                until: austDay
            });
            $('#year').text(austDay.getFullYear());
        });

        // countdown-row countdown-show4

        $('#home-video').owlCarousel({
            margin: 10,
            nav: false,
            dots: true,
            loop: true,
            responsiveClass: true,
            autoplay: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                991: {
                    items: 2,
                    nav: false
                },
                1200: {
                    items: 3,
                    nav: true,
                    loop: false
                },
                1400: {
                    items: 4,
                    nav: true,
                    loop: false
                }
            }
        })
    </script>

    <script>
        $(window).on('load', function() {
            setTimeout(function() {
                $('#popup-modal').modal('hide');
            }, 2000);

        });
    </script>

    <script>
        $("#modal2Button").click(function() {
            setTimeout(function() {
                $('#modal1').hide();
                $('#modal2').show();
            })
        });
        $("#close-button").click(function() {
            setTimeout(function() {
                $('#modal1').show();
                $('#modal2').hide();
            })
        });
    </script>


    <script>
        $("#modal2Button").click(function() {
            $(window).on('load', function() 
            {
                $('#myResetModal').modal('show');
            })
        });
    </script>

<<<<<<< HEAD
    <script>
        var img = url(document.getElementById("ava5").value); 
        var img1 = url(document.getElementById("ava6").value); 
        var img2 = url(document.getElementById("ava7").value); 
        var t = document.getElementsByClassName(".banner-5").style.backgroundImage = img; 
        var t = document.getElementsByClassName(".banner-6").style.backgroundImage = img1;
        var t = document.getElementsByClassName(".banner-7").style.backgroundImage = img2;
    </script>
=======

<script>
$("#modal2Button").click(function() {

  setTimeout(function() {
      $('#modal1').hide();
    $('#modal2').show();
  })
});


$("#close-button").click(function() {
  setTimeout(function() {
    $('#modal1').show();
    $('#modal2').hide();
  })

});

</script>







>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9


</body>

</html>
