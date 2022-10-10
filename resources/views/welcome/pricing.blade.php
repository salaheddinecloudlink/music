@extends('layouts.main')
@section('content')
<br>
      <div class="clear"></div>
      <!-- Navigation -->
      <section class="vbox hbox stretch">
         <div class="container">
            <section id="content">
               <div class="row">
                  <div class="col-md-12">
                     <!-- Pricing Area -->
                     <div class="pricing_plan">
                        <h2 class="artists_heading">Pricing <span>Plan</span></h2>
                        <div class="heading_style"><i class="fa fa-music"></i></div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="single-pricing text-center">
                                 <div class="pricing-title">
                                    <h3>Free</h3>
                                    <p>Basic Plan</p>
                                 </div>
                                 <div class="amount-per-month">
                                    <h5><span class="doller">$</span><span>17.</span>00</h5>
                                    <p>per month</p>
                                 </div>
                                 <div class="pricing-body">
                                    <ul>
                                       <li>1 GB Bandwidth</li>
                                       <li>256 MB Memory</li>
                                       <li>24/7 Full Support</li>
                                       <li>1 GB Bandwidth</li>
                                       <li>256 MB Memory</li>
                                    </ul>
                                    <a class="purchase" href="#">purchase</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="single-pricing text-center standard">
                                 <div class="pricing-title">
                                    <h3>Monthly</h3>
                                    <p>Standard Plan</p>
                                    <span class="best">best seller</span>
                                 </div>
                                 <div class="amount-per-month">
                                    <h5><span class="doller">$</span><span>27.</span>00</h5>
                                    <p>per month</p>
                                 </div>
                                 <div class="pricing-body">
                                    <ul>
                                       <li>1 GB Bandwidth</li>
                                       <li>256 MB Memory</li>
                                       <li>24/7 Full Support</li>
                                       <li>1 GB Bandwidth</li>
                                       <li>256 MB Memory</li>
                                    </ul>
                                    <a class="purchase" href="#">purchase</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="single-pricing text-center">
                                 <div class="pricing-title">
                                    <h3>Annually</h3>
                                    <p>Gold Plan</p>
                                 </div>
                                 <div class="amount-per-month">
                                    <h5><span class="doller">$</span><span>47.</span>00</h5>
                                    <p>per month</p>
                                 </div>
                                 <div class="pricing-body">
                                    <ul>
                                       <li>1 GB Bandwidth</li>
                                       <li>256 MB Memory</li>
                                       <li>24/7 Full Support</li>
                                       <li>1 GB Bandwidth</li>
                                       <li>256 MB Memory</li>
                                    </ul>
                                    <a class="purchase" href="#">purchase</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Pricing Area End -->
                     <!-- News Letter -->
                     <div class="n_letter">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="creat_account">
                                 <div class="row">
                                    <div class="col-md-8">
                                       <h3 class="prom_heading"><i class="fa fa-user"></i> New to UrUploadz! Create Account</h3>
                                       <p class="prom_text">Save and share your playlist with your friends when you log in or create an account.</p>
                                    </div>
                                    <div class="col-md-4">
                                       <a data-toggle="modal" data-target="#myModalcontactus" class="sign_up" href="javascript:void(0)">Sign Up</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="news_letter">
                                 <div class="row">
                                    <div class="col-md-8">
                                       <h3 class="prom_heading"><i class="fa fa-user"></i>  Subscribe to Newsletter</h3>
                                       <p class="prom_text">Save and share your playlist with your friends when you log in or create an account.</p>
                                    </div>
                                    <div class="col-md-4">
                                       <a data-toggle="modal" data-target="#newsLetter" class="subsribe" href="javascript:void(0)">Subscribe</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- News Letter End -->
                     <!-- Contact Us -->
                     <div class="contact_us">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="album_info">
                                 <h3 class="album_heading">Contact <span>Info</span></h3>
                                 <ul class="album_info_list">
                                    <li><a href="#"><i class="fa fa-map-marker"></i> London SW1A 1AA, United Kingdom </a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i> (90) 320 320</a></li>
                                    <li><a href="#"><i class="fa fa-globe"></i>www.Uruploadz.com </a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i> www.facebook.com/Uruploadz</a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i> www.twiiter.com/Uruploadz </a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-md-8">
                              <div class="contact_form">
                                 <h3 class="album_heading">Contact <span>Form</span></h3>
                                 <form>
                                    <div class="single_form">
                                       <input type="text" class="custome_txt" placeholder="Name">
                                    </div>
                                    <div class="single_form">
                                       <input type="email" class="custome_txt" placeholder="Email">
                                    </div>
                                    <div class="single_form">
                                       <textarea class="custome_txt" placeholder="Your massage"></textarea>
                                    </div>
                                    <div class="single_form">
                                       <button type="button" class="btn_submit">Let's Go</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Contact us -->
                  </div>
               </div>
            </section>
         </div>
      </section>
   @endsection
