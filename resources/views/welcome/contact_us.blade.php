@extends('layouts.main')
@section('content')
<br>
      <div class="clear"></div>
      <!-- Navigation -->
      <section class="vbox hbox stretch">
         <div class="container">
            <section id="content" style="min-height:500px;">
               <div class="row">
                  <div class="col-md-12">
                  	<div style="height: 376px; width:100%;" class="map-canvas"
                       data-zoom="16"
                       data-lat="51.509747"
                       data-lng="-0.128124"
                       data-title="UrUploadz"
                       data-type="roadmap"
                       data-hue="#E67510"
                       data-content="St. Martin's Pl, London WC2H 0HE, United Kingdom"> </div>
                       <div class="contact_us">
                           <div class="row">
                           	<div class="col-md-4">
                            	<div class="single_address_block">
                                	<i class="fa fa-map-marker"></i>
                                    <h4>Drop on in</h4>
                                    <p>St. Martin's Pl, London<br> WC2H 0HE, United Kingdom</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                            	<div class="single_address_block">
                                	<i class="fa fa-phone"></i>
                                    <h4>Give us a call</h4>
                                    <ul class="adress_list">
                                    	<li>Office: (25) 3422 2456</li>
                                        <li>Fax: +25 2525 2444</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                            	<div class="single_address_block">
                                	<i class="fa fa-envelope"></i>
                                    <h4>Connect online </h4>
                                    <ul class="adress_list">
                                    	<li>Email: info@uruploadz.com</li>
                                        <li>Twitter: @css4team</li>
                                    </ul>
                                </div>
                            </div>
                           </div>
                       </div>
                       <div class="form_area">
                       	  <h3>Leave a message</h3>
                          <div class="row">
                          	<div class="col-md-10 col-md-offset-1">
                            	<div class="contact_form">
                                	<div class="row">
                                    	<div class="col-sm-6">
                                        	<div class="single_form_contact">
                                            	<input type="text" class="custome_txt1" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        	<div class="single_form_contact">
                                            	<input type="text" class="custome_txt1" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="col-sm-6">
                                        	<div class="single_form_contact">
                                            	<input type="email" class="custome_txt1" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        	<div class="single_form_contact">
                                            	<input type="text" class="custome_txt1" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                        	<div class="single_form_contact">
                                            	<input type="text" class="custome_txt1" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                        	<div class="single_form_contact">
                                            	<textarea class="custome_txt1" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                        	<button type="button" class="submit-message">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                       </div>
                  </div>
               </div>
            </section>
         </div>
      </section>
  @endsection
