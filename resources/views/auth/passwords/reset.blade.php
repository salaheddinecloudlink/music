@extends('layouts.main')
@section('content')




<div class="d-flex justify-content-center align-items-center container  ">

                <div class="col-md-8 ">
                <h1>reset your password</h1>
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                   <label>Email <span class="font-bold text-danger">*</span></label>
                   <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{$email ?? old('email')  }}" required autocomplete="email" type="email" required="" placeholder="Email" autofocus>
                       @error('email')
                       <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                   <div style="margin-top: 20px;">
                      <label>Password <span class="font-bold text-danger">*</span></label>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                   </div>
                   <div style="margin-top: 20px;">
                      <label>Confirm Password <span class="font-bold text-danger">*</span></label>
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="new-Password">
                   </div>



                   <button class="
                   btn btn-success m-t-20 btn-lg btn-block
                   text-uppercase
                   waves-effect waves-light
                 " type="submit">
                 Reset Password
                   </button>
                </form>
            </div>
            </div>

@endsection




{{-- <div class="modal-content no-border">
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
                     <a class="nav-link" data-toggle="tab" onclick="change2()" id="modal2Button" href="#fan" role="tab">Artist</a>

                  </li>
                  <li class="nav-item fan">
                     <a class="nav-link" data-toggle="tab" onclick="change1()"  id="close-button" href="#artist" role="tab">Fan</a>
                     </li>
               </ul>

               <div class="hide-me" id='modal1'>

                <form method="POST" action="{{ route('register') }}" id="register_artist">
                  @csrf

                  <input type="text" style="display: none" id="my_field" value="fan" name="user_type">

                   <label>Email <span class="font-bold text-danger">*</span></label>
                   <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email type="email" required="" placeholder="Email" autofocus>
                       @error('email')
                       <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                   <div style="margin-top: 20px;">
                      <label>Password <span class="font-bold text-danger">*</span></label>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                   </div>
                   <div style="margin-top: 20px;">
                      <label>Repeat Password <span class="font-bold text-danger">*</span></label>
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Repeat Password">
                   </div>
                   <div class="form-group m-t-15">
                      <div class="">
                         <div class="checkbox checkbox-primary p-t-0">
                            <input id="checkbox-signup" type="checkbox" name="Accept" id="term" value="true" {{ !old('Accept') ?: 'checked' }}required
                            data-validation-required-message=
                              "You must agree to the terms and conditions">
                            <label for="checkbox-signup" class="ps-0"  >
                               I accept Terms of Service and Privacy Policy.
                            </label>
                         </div>
                      </div>
                   </div>

                   <button class="
                   btn btn-success m-t-20 btn-lg btn-block
                   text-uppercase
                   waves-effect waves-light
                 " type="submit">
                      Sign Up
                   </button>
                </form>
              </div> --}}
