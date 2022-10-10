@extends('layouts.main')
   <!-- Navigation -->
   @section('content')
   <br>
   <div class="clear"></div>

   <section class="vbox hbox stretch m-t-170">
    <div class="container-fluid">
      <section id="content">
        <div class="row">
          <div class="col-sm-6 col-lg-4 col-xl-3 col-md-4">
            <div
              class="event_details_singer overflow-hidden"
              style="margin-bottom: 0"
            >
              <img src="{{ asset('pictures/gallery-ev-4.jpg') }}" class="zoomin" alt="" />
              <div class="e_d_footer_content">
                <h3>Nicky Romero Concert</h3>
                <ul class="meta">
                  <li>
                    <a href="#">Hip Hop</a>,
                  </li>
                  <li>
                    <a href="#">Oct 17</a>,
                  </li>
                  <li>
                    <a href="#">New Orleans, LA</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="user-btm-box">
              <div class="row text-center m-t-10">
                <div class="col-md-6 b-r">
                  <strong>Artist</strong>
                  <p>Nicky Romero</p>
                </div>
                <div class="col-md-6">
                  <strong>Date</strong>
                  <p>June 22, 2022</p>
                </div>
              </div>

              <hr />

              <div class="row text-center m-t-10">
                <div class="col-md-6 b-r">
                  <strong>Adress</strong>
                  <p>Oracle Arena , Bronx, New York</p>
                </div>
                <div class="col-md-6">
                  <strong>Time</strong>
                  <p>09:00 AM - 10:30 AM</p>
                </div>
              </div>

              <hr />

             <div id="defaultCountdown" class="count_down" >
                <span class="countdown-row" style="display: flex;"
                  ><span class="countdown-section"
                    ><span class="countdown-amount">32</span
                    ><span class="countdown-period">Days</span></span
                  ><span class="countdown-section"
                    ><span class="countdown-amount">7</span
                    ><span class="countdown-period">Hours</span></span
                  ><span class="countdown-section"
                    ><span class="countdown-amount">25</span
                    ><span class="countdown-period">Minutes</span></span
                  ><span class="countdown-section"
                    ><span class="countdown-amount">32</span
                    ><span class="countdown-period">Seconds</span></span
                  ></span
                >
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-8 col-xl-9 col-md-8">
            <h4>Nicky Romero Concert</h4>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.6121390946837!2d-90.06182088552949!3d29.961833129426683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8620a6175c9ac487%3A0x91ddcd8fee8ecc3d!2sLe+Richelieu+Hotel+in+the+French+Quarter+New+Orleans%2C+LA!5e0!3m2!1sen!2sin!4v1472122633098"
              width="100%"
              height="450"
              frameborder="0"
              style="border: 0"
              allowfullscreen
            ></iframe>

            <div style="margin-top: 30px">
              <div class="event_details_text">
                <div class="event-detail-btn">
                  <ul class="social_share">
                    <li>Share:</li>
                    <li>
                      <a href="javascript: void(0);"
                        ><i
                          class="fa fa-facebook fa-1x"
                          style="margin-right: 10px"
                        ></i
                      ></a>
                    </li>
                    <li>
                      <a href="javascript: void(0);"
                        ><i
                          class="fa fa-twitter fa-1x"
                          style="margin-right: 10px"
                        ></i
                      ></a>
                    </li>
                    <li>
                      <a href="javascript: void(0);"
                        ><i
                          class="fa fa-instagram fa-1x"
                          style="margin-right: 10px"
                        ></i
                      ></a>
                    </li>
                    <li>
                      <a href="javascript: void(0);"
                        ><i
                          class="fa fa-globe fa-1x"
                          style="margin-right: 10px"
                        ></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <hr />

            <h4>Similar Event</h4>
            <div class="row el-element-overlay">
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="el-card-item">
                  <p class="feature-video-badge">
                    <i class="fa fa-calendar"></i> Oct 10
                  </p>
                  <div class="el-card-avatar el-overlay-1">
                    <img src="{{ asset('pictures/event2.jpg') }}" />
                    <a href="./event_details.html" class="el-overlay">
                      <div class="centered">
                        <i
                          class="fa fa-arrow-right"
                          style="
                            background-color: #e67510;
                            color: white;
                            border-radius: 50%;
                            padding: 15px;
                            font-size: 20px;
                          "
                        ></i>
                      </div>
                      <div style="display: flex; justify-content: center">
                        <ul class="music_info_list">
                          <li class="m-0">
                            <span>Artist</span> Justin Bieber
                          </li>
                          <li class="m-0"><span>Genre</span> Jazz</li>
                        </ul>
                      </div>
                    </a>
                  </div>
                  <div class="alb-info">
                    <a href="./event_details.html" class="font-bold"
                      >The journey of an Artist</a
                    >
                    <ul style="display: flex; font-size: 14px">
                      <li style="margin-right: 16px">
                        <a href="javascript:void(0)">
                          <i
                            class="fa fa-map-marker"
                            style="margin-right: 3px"
                          ></i
                          >Los Angeles
                        </a>
                      </li>
                      <li style="margin-right: 16px">
                        <a href="javascript:void(0)">
                          <i class="fa fa-thumbs-up"></i> 4356
                        </a>
                      </li>
                      <li style="margin-right: 16px">
                        <a href="javascript:void(0)">
                          <i class="fa fa-thumbs-down"></i> 123
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0)">
                          <i class="fa fa-share-alt"></i> 4.25M
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="el-card-item">
                  <p class="feature-video-badge">
                    <i class="fa fa-calendar"></i> Oct 10
                  </p>
                  <div class="el-card-avatar el-overlay-1">
                    <img src="{{ asset('pictures/event3.jpg') }}" />
                    <a href="./event_details.html" class="el-overlay">
                      <div class="centered">
                        <i
                          class="fa fa-arrow-right"
                          style="
                            background-color: #e67510;
                            color: white;
                            border-radius: 50%;
                            padding: 15px;
                            font-size: 20px;
                          "
                        ></i>
                      </div>
                      <div style="display: flex; justify-content: center">
                        <ul class="music_info_list">
                          <li class="m-0">
                            <span>Artist</span> Justin Bieber
                          </li>
                          <li class="m-0"><span>Genre</span> Jazz</li>
                        </ul>
                      </div>
                    </a>
                  </div>
                  <div class="alb-info">
                    <a href="./event_details.html" class="font-bold"
                      >The journey of an Artist</a
                    >
                    <ul style="display: flex; font-size: 14px">
                      <li style="margin-right: 16px">
                        <a href="javascript:void(0)">
                          <i
                            class="fa fa-map-marker"
                            style="margin-right: 3px"
                          ></i
                          >Los Angeles
                        </a>
                      </li>
                      <li style="margin-right: 16px">
                        <a href="javascript:void(0)">
                          <i class="fa fa-thumbs-up"></i> 4356
                        </a>
                      </li>
                      <li style="margin-right: 16px">
                        <a href="javascript:void(0)">
                          <i class="fa fa-thumbs-down"></i> 123
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0)">
                          <i class="fa fa-share-alt"></i> 4.25M
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="el-card-item">
                  <p class="feature-video-badge">
                    <i class="fa fa-calendar"></i> Oct 10
                  </p>
                  <div class="el-card-avatar el-overlay-1">
                    <img src="{{ asset('pictures/event10.jpg') }}" />
                    <a href="./event_details.html" class="el-overlay">
                      <div class="centered">
                        <i
                          class="fa fa-arrow-right"
                          style="
                            background-color: #e67510;
                            color: white;
                            border-radius: 50%;
                            padding: 15px;
                            font-size: 20px;
                          "
                        ></i>
                      </div>
                      <div style="display: flex; justify-content: center">
                        <ul class="music_info_list">
                          <li class="m-0">
                            <span>Artist</span> Justin Bieber
                          </li>
                          <li class="m-0"><span>Genre</span> Jazz</li>
                        </ul>
                      </div>
                    </a>
                  </div>
                  <div class="alb-info">
                    <a href="./event_details.html" class="font-bold"
                      >The journey of an Artist</a
                    >
                    <ul style="display: flex; font-size: 14px">
                      <li style="margin-right: 16px">
                        <a href="javascript:void(0)">
                          <i
                            class="fa fa-map-marker"
                            style="margin-right: 3px"
                          ></i
                          >Los Angeles
                        </a>
                      </li>
                      <li style="margin-right: 16px">
                        <a href="javascript:void(0)">
                          <i class="fa fa-thumbs-up"></i> 4356
                        </a>
                      </li>
                      <li style="margin-right: 16px">
                        <a href="javascript:void(0)">
                          <i class="fa fa-thumbs-down"></i> 123
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0)">
                          <i class="fa fa-share-alt"></i> 4.25M
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="text-center">
                <a
                  href="javascript:void(0)"
                  class="read_more font-bold"
                  style="margin: 20px 0 50px"
                  >Load More</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </section>

   @endsection