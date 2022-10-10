@extends('layouts.main')
   <!-- Navigation -->
   @section('content')
   <br>
   <div class="clear"></div>
   <section class="vbox hbox stretch m-t-170">
      <div class="container-fluid">
         <section id="content">
            <div class="row">
               <div class="col-sm-9 col-lg-10">
                  <div class="all_feature_list">

                     <div class="single_music_event">
                        <div class="f_event_img">
                           <img src="external/img/event_banner.jpg" alt="">
                        </div>
                        <div class="fea">
                           <span class="f_icon"><i class="fa fa-microphone"></i></span>
                           <span class="f_event_title">Featured Event</span>
                        </div>
                        <div class="singer_name"> <span><img src="external/img/singer.png" alt=""></span> Nicky Romero</div>
                        <p class="feature-video-badge">
                           <i class="fa fa-calendar"></i> Oct 10</p>
                        <div class="feature_event_details">
                           <a href="#">The journey of an Artist</a>
                           <ul class="slid_add">
                              <li><a href="#"><i class="fa fa-music"></i> Jazz</a></li>
                              <li>
                                 <a href="#"><i class="fa fa-map-marker"></i>Los Angeles / United States</a>
                              </li>
                              <li>
                                 <a href="#"><i class="fa fa-bookmark"></i> Music &amp; Album</a></span>
                              </li>
                           </ul>
                        </div>
                     </div>

                     <div class="single_video_event">
                        <div class="f_video_img">
                           <img src="external/img/fe_video.jpg" alt="">
                        </div>
                        <div class="fea">
                           <span class="f_icon"><i class="fa fa-microphone"></i></span>
                           <span class="f_event_title">Featured Video</span>
                        </div>
                        <a href="profile-video-detail.html" class="feat_play">
                           <i class="fa fa-play"></i>
                        </a>
                        <div class="fe_video_details">
                           <span class="video_gene">Hip Hop</span>
                           <h4 class="f_video_descrption">Wiz Khalifa, "Staying Out All Night"</h4>
                        </div>
                        <span class="run_time">4.30</span>
                     </div>

                     <div class="single_music_event">
                        <div class="f_event_img">
                           <img src="external/img/event_banner.jpg" alt="">
                        </div>
                        <div class="fea">
                           <span class="f_icon"><i class="fa fa-microphone"></i></span>
                           <span class="f_event_title">Featured Event</span>
                        </div>
                        <p class="feature-video-badge">
                           <i class="fa fa-calendar"></i> Oct 10</p>
                        <div>

                        </div>
                     </div>

                     <div class="single_music_event">
                        <div class="f_event_img">
                           <img src="external/img/fe_video1.jpg" alt="">
                        </div>
                        <div style="display: flex; justify-content: end;">
                           <div class="col-md-6" style="margin-right: 30px;">
                              <div class="fe_video_details bg-white">
                                 <div class="artist_content" style="padding-bottom: 27px;">
                                    <h4>Featured Artist</h4>
                                    <a class="fea_artist_name" href="#">Enrique <span>Iglesias</span></a>
                                    <a href="#" class="gener1">Hip Hop</a>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                       Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem
                                       Ipsum
                                       is simply dummy text of the printing and typesetting industry. </p>
                                    <a href="#" class="read_more1">Read More <i class="fa fa-angle-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="select_from_holder">
                     <form>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="single_filter">
                                 <select class="custome_txt">
                                    <option selected="">Select Genre</option>
                                    <option>Acoustic</option>
                                    + <option>Afro-Beat</option>
                                    + <option>Alternative</option>
                                    + <option>Classical</option>
                                    + <option>Country</option>
                                    + <option>Dance </option>
                                    + <option>Electronic </option>
                                    + <option>Folk</option>
                                    + <option>Gospel</option>
                                    + <option>Hardcore</option>
                                    + <option>Hip-Hop/Rap</option>
                                    + <option>House</option>
                                    + <option>Indie</option>
                                    + <option>Instrumental </option>
                                    + <option>Jazz</option>
                                    + <option>Latin</option>
                                    + <option>Metal </option>
                                    + <option>Opera</option>
                                    + <option>Pop</option>
                                    + <option>R&amp;B/Soul</option>
                                    + <option>Reggae</option>
                                    + <option>Reggaeton</option>
                                    + <option>Rock</option>
                                    + <option>Ska </option>
                                    + <option>Soul</option>
                                    + <option>Vocal</option>
                                    + <option>World</option>
                                 </select>
                                 <span class="aroww"><i class="fa fa-angle-down"></i></span>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="single_filter">
                                 <select class="custome_txt">
                                    <option selected="">Select State</option>
                                    <option>Select State</option>
                                    + <option>Alabama</option>
                                    + <option>Alaska </option>
                                    + <option>Arizona</option>
                                    + <option>Arkansas </option>
                                    + <option>California </option>
                                    + <option>Colorado </option>
                                    + <option>Connecticut </option>
                                    + <option>Delaware </option>
                                    + <option>Florida </option>
                                    + <option>Georgia </option>
                                    + <option>Hawaii </option>
                                    + <option>Idaho </option>
                                    + <option>Illinois</option>
                                    + <option>Indiana </option>
                                    + <option>Iowa </option>
                                    + <option>Kansas </option>
                                    + <option>Kentucky </option>
                                    + <option>Louisiana</option>
                                    + <option>Maine </option>
                                    + <option>Maryland </option>
                                    + <option>Massachusetts </option>
                                    + <option>Michigan </option>
                                    + <option>Minnesota</option>
                                    + <option>Mississippi </option>
                                    + <option>Missouri </option>
                                    + <option>Montana</option>
                                    + <option>Nebraska </option>
                                    + <option>Nevada </option>
                                    + <option>New Hampshire </option>
                                    + <option>New Jersey </option>
                                    + <option>New Mexico </option>
                                    + <option>New York </option>
                                    + <option>North Carolina </option>
                                    + <option>North Dakota </option>
                                    + <option>Ohio </option>
                                    + <option>Oklahoma </option>
                                    + <option>Oregon </option>
                                    + <option>Pennsylvania</option>
                                    + <option>Rhode Island</option>
                                    + <option>South Carolina </option>
                                    + <option>South Dakota </option>
                                    + <option>Tennessee </option>
                                    + <option>Texas </option>
                                    + <option>Utah </option>
                                    + <option>Vermont </option>
                                    + <option>Virginia </option>
                                    + <option>Washington </option>
                                    + <option>West Virginia </option>
                                    + <option>Wisconsin </option>
                                    + <option>Wyoming</option>
                                 </select>
                                 <span class="aroww"><i class="fa fa-angle-down"></i></span>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-sm-3 col-lg-2">
                  <div class="single_add" style="margin-bottom:23px;">
                     <a href="#"><img src="external/img/add1.png" alt=""></a>
                  </div>
                  <div class="single_add">
                     <a href="#"><img src="external/img/add2.png" alt=""></a>
                  </div>
                  <div class="single_add" style="margin-top:23px;">
                     <a href="#"><img src="external/img/add3.jpg" alt=""></a>
                  </div>
               </div>
            </div>
            <h2 class="artists_heading">All <span>Featured</span> </h2>
            <div class="heading_style"><i class="fa fa-music"></i></div>




            <div class="row ar-profile">
               <div class="col-md-12 col-xs-12">
                  <div class="white-box">
                     <ul class="nav nav-tabs nav-justified my_tab overflowx-auto" role="tablist">
                        <li role="presentation" class="nav-item active">
                           <a href="#all" class="nav-link" aria-controls="home" role="tab" data-toggle="tab"
                              aria-expanded="true"><span class=""> All</span></a>
                        </li>
                        <li role="presentation" class="nav-item">
                           <a href="#Alternative" class="nav-link" aria-controls="profile" role="tab" data-toggle="tab"
                              aria-expanded="false">
                              <span>Acoustic</span></a>
                        </li>
                        <li role="presentation" class="nav-item">
                           <a href="#Blues" class="nav-link text-nowrap" aria-controls="messages" role="tab"
                              data-toggle="tab" aria-expanded="false">
                              <span>Afro-Beat</span></a>
                        </li>
                        <li role="presentation" class="nav-item">
                           <a href="#classicrock" class="nav-link" aria-controls="messages" role="tab" data-toggle="tab"
                              aria-expanded="false">
                              <span class="text-nowrap">Alternative</span></a>
                        </li>
                        <li role="presentation" class="nav-item">
                           <a href="#Country" class="nav-link" aria-controls="messages" role="tab" data-toggle="tab"
                              aria-expanded="false">
                              <span>Classical</span></a>
                        </li>
                        <li role="presentation" class="nav-item">
                           <a href="#Electronica" class="nav-link" aria-controls="messages" role="tab" data-toggle="tab"
                              aria-expanded="false">
                              <span>Country</span></a>
                        </li>
                        <li role="presentation" class="nav-item">
                           <a href="#Folk" class="nav-link" aria-controls="messages" role="tab" data-toggle="tab"
                              aria-expanded="false">
                              <span>Dance </span></a>
                        </li>
                        <li role="presentation" class="nav-item">
                           <a href="#HardCore" class="nav-link" aria-controls="messages" role="tab" data-toggle="tab"
                              aria-expanded="false">
                              <span>Electronic </span></a>
                        </li>
                        <li role="presentation" class="nav-item">
                           <a href="#hiphop" class="nav-link" aria-controls="messages" role="tab" data-toggle="tab"
                              aria-expanded="false">
                              <span class="text-nowrap">Folk</span></a>
                        </li>
                     </ul>
                     <div class="tab-content">
                        <div class="tab-pane active" id="all">
                           <div class="row el-element-overlay">
                              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                 <div class="el-card-item" style="position: relative;">
                                    <p class="feature-badge"><i class="fa fa-microphone" style="margin-right: 5px;"></i>
                                       Feature Artist</p>
                                    <div class="el-card-avatar el-overlay-1"> <img src="external/img/feature_artist6.jpg" />
                                       <a href="./artist-profile_1.html" class="el-overlay">
                                          <div class="centered">
                                             <i class="fa fa-arrow-right"
                                                style="background-color: #e67510; color: white; border-radius: 50%; padding: 15px; font-size: 20px;"></i>
                                          </div>
                                       </a>
                                    </div>
                                    <div class="alb-info">
                                       <a href="./artist-profile_1.html" class="font-bold">Slash</a>
                                       <ul class="m-t-5" style="display: flex; font-size: 14px;">
                                          <li style="margin-right: 16px;"><a href=""><i class="fa fa-music"></i>
                                                Electronica</a></li>
                                          <li style="margin-right: 16px;"><a href=""><i
                                                   class="fa fa-location-arrow"></i> London,
                                                Uk</a></li>
                                          <li><a href=""><i class="fa fa-heart"></i> 245 Followers</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                 <div class="el-card-item" style="position: relative;">
                                    <p class="feature-badge"><i class="fa fa-microphone" style="margin-right: 5px;"></i>
                                       Feature Video</p>
                                    <p class="feature-video-badge">
                                       3:30</p>
                                    <div class="el-card-avatar el-overlay-1"> <img src="external/img/video_small2.jpg" />
                                       <a href="./profile-video-detail.html" class="el-overlay">
                                          <div class="centered">
                                             <i class="fa fa-youtube-play"
                                                style="background-color: #e67510; color: white; border-radius: 50%; padding: 15px; font-size: 20px;"></i>
                                          </div>
                                       </a>
                                    </div>
                                    <div class="alb-info">
                                       <a href="./profile-video-detail.html" class="font-bold">Staying Out All Night</a>
                                       <ul style="display: flex; margin-top: 5px; font-size: 14px;">
                                          <li style="margin-right: 16px;"><a href=""><i class="fa fa-eye"></i> 5.65M</a>
                                          </li>
                                          <li style="margin-right: 16px;"><a href=""><i class="fa fa-heart"></i>
                                                4.25M</a></li>
                                          <li style="margin-right: 16px;"><a href=""><i class="fa fa-thumbs-up"></i>
                                                4356</a></li>
                                          <li><a href=""><i class="fa fa-thumbs-down"></i> 123</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                 <div class="el-card-item" style="position: relative;">
                                    <p class="feature-video-badge">
                                       <i class="fa fa-calendar"></i> Oct 10</p>
                                    <p class="feature-badge"><i class="fa fa-microphone" style="margin-right: 5px;"></i>
                                       Feature Album</p>
                                    <div class="el-card-avatar el-overlay-1"> <img src="external/img/album3.jpg" />
                                       <a href="./album_details.html" class="el-overlay">
                                          <div class="centered">
                                             <i class="fa fa-image"
                                                style="background-color: #e67510; color: white; border-radius: 50%; padding: 15px; font-size: 20px;"></i>
                                          </div>
                                       </a>
                                    </div>
                                    <div class="alb-info">
                                       <a href="./album_details.html" class="font-bold">Staying Out All Night</a>
                                       <ul class="m-t-5" style="display: flex; font-size: 14px;">
                                          <li style="margin-right: 16px;"><a href="#"><i class="fa fa-male"></i> Justin
                                                Bieber</a></li>
                                          <li style="margin-right: 16px;"><a href="#"><i class="fa fa-music"></i> Hip
                                                Hop</a></li>
                                          <li><a href="#"><i class="fa fa-heart"></i> 43.5M</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                 <div class="el-card-item" style="position: relative;">
                                    <p class="feature-badge"><i class="fa fa-microphone" style="margin-right: 5px;"></i>
                                       Feature Music</p>
                                    <div class="el-card-avatar el-overlay-1"> <img src="external/img/album10.jpg" />
                                       <a href="./music_details.html" class="el-overlay">
                                          <div class="centered">
                                             <i class="fa fa-volume-up"
                                                style="background-color: #e67510; color: white; border-radius: 50%; padding: 15px; font-size: 20px;"></i>
                                          </div>
                                       </a>
                                    </div>
                                    <div class="alb-info">
                                       <a href="./music_details.html" class="font-bold">Staying Out All Night</a>
                                       <ul class="m-t-5" style="display: flex; font-size: 14px;">
                                          <li style="margin-right: 16px;"><a href=""><i class="fa fa-eye"></i> 5.65M</a>
                                          </li>
                                          <li style="margin-right: 16px;"><a href=""><i class="fa fa-heart"></i>
                                                3.35M</a></li>
                                          <li style="margin-right: 16px;"><a href=""><i class="fa fa-comment"></i>
                                                4.25M</a></li>
                                          <li style="margin-right: 16px;"><a href=""><i class="fa fa-thumbs-up"></i>
                                                4356</a></li>
                                          <li><a href=""><i class="fa fa-thumbs-down"></i> 123</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                 <div class="el-card-item" style="position: relative;">
                                    <p class="feature-badge"><i class="fa fa-microphone" style="margin-right: 5px;"></i>
                                       Feature Event</p>
                                    <p class="feature-video-badge">
                                       <i class="fa fa-calendar"></i> Oct 10</p>
                                    <div class="el-card-avatar el-overlay-1"> <img src="external/img/event7.jpg" />
                                       <a href="./event_details.html" class="el-overlay">

                                          <div class="centered">
                                             <i class="fa fa-arrow-right"
                                                style="background-color: #e67510; color: white; border-radius: 50%; padding: 15px; font-size: 20px;"></i>
                                          </div>
                                          <div style="display: flex; justify-content: center;">
                                             <ul class="music_info_list">
                                                <li class="m-0"><span>Artist</span> Justin Bieber</li>
                                             </ul>r
                                          </div>
                                       </a>
                                    </div>
                                    <div class="alb-info">
                                       <a href="./event_details.html" class="font-bold">The journey of an Artist</a>
                                       <ul style="display: flex; font-size: 14px;">
                                          <li style="margin-right: 16px;">
                                             <a href="javascript:void(0)">
                                                <i class="fa fa-music" style="margin-right: 3px;"></i>Jazz
                                             </a>
                                          </li>
                                          <li style="margin-right: 16px;">
                                             <a href="javascript:void(0)">
                                                <i class="fa fa-heart" style="margin-right: 3px;"></i>4.35M
                                             </a>
                                          </li>
                                          <li style="margin-right: 16px;">
                                             <a href="javascript:void(0)">
                                                <i class="fa fa-thumbs-up"></i> 4356
                                             </a>
                                          </li>
                                          <li style="margin-right: 16px;">
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

                              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                 <div class="el-card-item" style="position: relative;">
                                    <p class="feature-badge"><i class="fa fa-microphone" style="margin-right: 5px;"></i>
                                       Feature Artist</p>
                                    <div class="el-card-avatar el-overlay-1"> <img src="external/img/feature_artist6.jpg" />
                                       <a href="./artist-profile_1.html" class="el-overlay">
                                          <div class="centered">
                                             <i class="fa fa-arrow-right"
                                                style="background-color: #e67510; color: white; border-radius: 50%; padding: 15px; font-size: 20px;"></i>
                                          </div>
                                       </a>
                                    </div>
                                    <div class="alb-info">
                                       <a href="./artist-profile_1.html" class="font-bold">Slash</a>
                                       <ul class="m-t-5" style="display: flex; font-size: 14px;">
                                          <li style="margin-right: 16px;"><a href=""><i class="fa fa-music"></i>
                                                Electronica</a></li>
                                          <li style="margin-right: 16px;"><a href=""><i
                                                   class="fa fa-location-arrow"></i> London,
                                                Uk</a></li>
                                          <li><a href=""><i class="fa fa-heart"></i> 245 Followers</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                 <div class="el-card-item" style="position: relative;">
                                    <p class="feature-badge"><i class="fa fa-microphone" style="margin-right: 5px;"></i>
                                       Feature Video</p>
                                    <p class="feature-video-badge">
                                       3:30</p>
                                    <div class="el-card-avatar el-overlay-1"> <img src="external/img/video_small2.jpg" />
                                       <a href="./profile-video-detail.html" class="el-overlay">
                                          <div class="centered">
                                             <i class="fa fa-youtube-play"
                                                style="background-color: #e67510; color: white; border-radius: 50%; padding: 15px; font-size: 20px;"></i>
                                          </div>
                                       </a>
                                    </div>
                                    <div class="alb-info">
                                       <a href="./profile-video-detail.html" class="font-bold">Staying Out All Night</a>
                                       <ul style="display: flex; margin-top: 5px; font-size: 14px;">
                                          <li style="margin-right: 16px;"><a href=""><i class="fa fa-eye"></i> 5.65M</a>
                                          </li>
                                          <li style="margin-right: 16px;"><a href=""><i class="fa fa-heart"></i>
                                                4.25M</a></li>
                                          <li style="margin-right: 16px;"><a href=""><i class="fa fa-thumbs-up"></i>
                                                4356</a></li>
                                          <li><a href=""><i class="fa fa-thumbs-down"></i> 123</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                 <div class="el-card-item" style="position: relative;">
                                    <p class="feature-video-badge">
                                       <i class="fa fa-calendar"></i> Oct 10</p>
                                    <p class="feature-badge"><i class="fa fa-microphone" style="margin-right: 5px;"></i>
                                       Feature Album</p>
                                    <div class="el-card-avatar el-overlay-1"> <img src="external/img/album3.jpg" />
                                       <a href="./album_details.html" class="el-overlay">
                                          <div class="centered">
                                             <i class="fa fa-image"
                                                style="background-color: #e67510; color: white; border-radius: 50%; padding: 15px; font-size: 20px;"></i>
                                          </div>
                                       </a>
                                    </div>
                                    <div class="alb-info">
                                       <a href="./album_details.html" class="font-bold">Staying Out All Night</a>
                                       <ul class="m-t-5" style="display: flex; font-size: 14px;">
                                          <li style="margin-right: 16px;"><a href="#"><i class="fa fa-male"></i> Justin
                                                Bieber</a></li>
                                          <li style="margin-right: 16px;"><a href="#"><i class="fa fa-music"></i> Hip
                                                Hop</a></li>
                                          <li><a href="#"><i class="fa fa-heart"></i> 43.5M</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                 <div class="el-card-item" style="position: relative;">
                                    <p class="feature-badge"><i class="fa fa-microphone" style="margin-right: 5px;"></i>
                                       Feature Music</p>
                                    <div class="el-card-avatar el-overlay-1"> <img src="external/img/album10.jpg" />
                                       <a href="./music_details.html" class="el-overlay">
                                          <div class="centered">
                                             <i class="fa fa-volume-up"
                                                style="background-color: #e67510; color: white; border-radius: 50%; padding: 15px; font-size: 20px;"></i>
                                          </div>
                                       </a>
                                    </div>
                                    <div class="alb-info">
                                       <a href="./music_details.html" class="font-bold">Staying Out All Night</a>
                                       <ul class="m-t-5" style="display: flex; font-size: 14px;">
                                          <li style="margin-right: 16px;"><a href=""><i class="fa fa-eye"></i> 5.65M</a>
                                          </li>
                                          <li style="margin-right: 16px;"><a href=""><i class="fa fa-heart"></i>
                                                3.35M</a></li>
                                          <li style="margin-right: 16px;"><a href=""><i class="fa fa-comment"></i>
                                                4.25M</a></li>
                                          <li style="margin-right: 16px;"><a href=""><i class="fa fa-thumbs-up"></i>
                                                4356</a></li>
                                          <li><a href=""><i class="fa fa-thumbs-down"></i> 123</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                 <div class="el-card-item" style="position: relative;">
                                    <p class="feature-badge"><i class="fa fa-microphone" style="margin-right: 5px;"></i>
                                       Feature Event</p>
                                    <p class="feature-video-badge">
                                       <i class="fa fa-calendar"></i> Oct 10</p>
                                    <div class="el-card-avatar el-overlay-1"> <img src="external/img/event7.jpg" />
                                       <a href="./event_details.html" class="el-overlay">

                                          <div class="centered">
                                             <i class="fa fa-arrow-right"
                                                style="background-color: #e67510; color: white; border-radius: 50%; padding: 15px; font-size: 20px;"></i>
                                          </div>
                                          <div style="display: flex; justify-content: center;">
                                             <ul class="music_info_list">
                                                <li class="m-0"><span>Artist</span> Justin Bieber</li>
                                             </ul>r
                                          </div>
                                       </a>
                                    </div>
                                    <div class="alb-info">
                                       <a href="./event_details.html" class="font-bold">The journey of an Artist</a>
                                       <ul style="display: flex; font-size: 14px;">
                                          <li style="margin-right: 16px;">
                                             <a href="javascript:void(0)">
                                                <i class="fa fa-music" style="margin-right: 3px;"></i>Jazz
                                             </a>
                                          </li>
                                          <li style="margin-right: 16px;">
                                             <a href="javascript:void(0)">
                                                <i class="fa fa-heart" style="margin-right: 3px;"></i>4.35M
                                             </a>
                                          </li>
                                          <li style="margin-right: 16px;">
                                             <a href="javascript:void(0)">
                                                <i class="fa fa-thumbs-up"></i> 4356
                                             </a>
                                          </li>
                                          <li style="margin-right: 16px;">
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

                              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                 <div class="el-card-item" style="position: relative;">
                                    <p class="feature-badge"><i class="fa fa-microphone" style="margin-right: 5px;"></i>
                                       Feature Artist</p>
                                    <div class="el-card-avatar el-overlay-1"> <img src="external/img/feature_artist6.jpg" />
                                       <a href="./artist-profile_1.html" class="el-overlay">
                                          <div class="centered">
                                             <i class="fa fa-arrow-right"
                                                style="background-color: #e67510; color: white; border-radius: 50%; padding: 15px; font-size: 20px;"></i>
                                          </div>
                                       </a>
                                    </div>
                                    <div class="alb-info">
                                       <a href="./artist-profile_1.html" class="font-bold">Slash</a>
                                       <ul class="m-t-5" style="display: flex; font-size: 14px;">
                                          <li style="margin-right: 16px;"><a href=""><i class="fa fa-music"></i>
                                                Electronica</a></li>
                                          <li style="margin-right: 16px;"><a href=""><i
                                                   class="fa fa-location-arrow"></i> London,
                                                Uk</a></li>
                                          <li><a href=""><i class="fa fa-heart"></i> 245 Followers</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                 <div class="el-card-item" style="position: relative;">
                                    <p class="feature-badge"><i class="fa fa-microphone" style="margin-right: 5px;"></i>
                                       Feature Video</p>
                                    <p class="feature-video-badge">
                                       3:30</p>
                                    <div class="el-card-avatar el-overlay-1"> <img src="external/img/video_small2.jpg" />
                                       <a href="./profile-video-detail.html" class="el-overlay">
                                          <div class="centered">
                                             <i class="fa fa-youtube-play"
                                                style="background-color: #e67510; color: white; border-radius: 50%; padding: 15px; font-size: 20px;"></i>
                                          </div>
                                       </a>
                                    </div>
                                    <div class="alb-info">
                                       <a href="./profile-video-detail.html" class="font-bold">Staying Out All Night</a>
                                       <ul style="display: flex; margin-top: 5px; font-size: 14px;">
                                          <li style="margin-right: 16px;"><a href=""><i class="fa fa-eye"></i> 5.65M</a>
                                          </li>
                                          <li style="margin-right: 16px;"><a href=""><i class="fa fa-heart"></i>
                                                4.25M</a></li>
                                          <li style="margin-right: 16px;"><a href=""><i class="fa fa-thumbs-up"></i>
                                                4356</a></li>
                                          <li><a href=""><i class="fa fa-thumbs-down"></i> 123</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                 <div class="el-card-item" style="position: relative;">
                                    <p class="feature-video-badge">
                                       <i class="fa fa-calendar"></i> Oct 10</p>
                                    <p class="feature-badge"><i class="fa fa-microphone" style="margin-right: 5px;"></i>
                                       Feature Album</p>
                                    <div class="el-card-avatar el-overlay-1"> <img src="external/img/album3.jpg" />
                                       <a href="./album_details.html" class="el-overlay">
                                          <div class="centered">
                                             <i class="fa fa-image"
                                                style="background-color: #e67510; color: white; border-radius: 50%; padding: 15px; font-size: 20px;"></i>
                                          </div>
                                       </a>
                                    </div>
                                    <div class="alb-info">
                                       <a href="./album_details.html" class="font-bold">Staying Out All Night</a>
                                       <ul class="m-t-5" style="display: flex; font-size: 14px;">
                                          <li style="margin-right: 16px;"><a href="#"><i class="fa fa-male"></i> Justin
                                                Bieber</a></li>
                                          <li style="margin-right: 16px;"><a href="#"><i class="fa fa-music"></i> Hip
                                                Hop</a></li>
                                          <li><a href="#"><i class="fa fa-heart"></i> 43.5M</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                 <div class="el-card-item" style="position: relative;">
                                    <p class="feature-badge"><i class="fa fa-microphone" style="margin-right: 5px;"></i>
                                       Feature Music</p>
                                    <div class="el-card-avatar el-overlay-1"> <img src="external/img/album10.jpg" />
                                       <a href="./music_details.html" class="el-overlay">
                                          <div class="centered">
                                             <i class="fa fa-volume-up"
                                                style="background-color: #e67510; color: white; border-radius: 50%; padding: 15px; font-size: 20px;"></i>
                                          </div>
                                       </a>
                                    </div>
                                    <div class="alb-info">
                                       <a href="./music_details.html" class="font-bold">Staying Out All Night</a>
                                       <ul class="m-t-5" style="display: flex; font-size: 14px;">
                                          <li style="margin-right: 16px;"><a href=""><i class="fa fa-eye"></i> 5.65M</a>
                                          </li>
                                          <li style="margin-right: 16px;"><a href=""><i class="fa fa-heart"></i>
                                                3.35M</a></li>
                                          <li style="margin-right: 16px;"><a href=""><i class="fa fa-comment"></i>
                                                4.25M</a></li>
                                          <li style="margin-right: 16px;"><a href=""><i class="fa fa-thumbs-up"></i>
                                                4356</a></li>
                                          <li><a href=""><i class="fa fa-thumbs-down"></i> 123</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                 <div class="el-card-item" style="position: relative;">
                                    <p class="feature-badge"><i class="fa fa-microphone" style="margin-right: 5px;"></i>
                                       Feature Event</p>
                                    <p class="feature-video-badge">
                                       <i class="fa fa-calendar"></i> Oct 10</p>
                                    <div class="el-card-avatar el-overlay-1"> <img src="external/img/event7.jpg" />
                                       <a href="./event_details.html" class="el-overlay">

                                          <div class="centered">
                                             <i class="fa fa-arrow-right"
                                                style="background-color: #e67510; color: white; border-radius: 50%; padding: 15px; font-size: 20px;"></i>
                                          </div>
                                          <div style="display: flex; justify-content: center;">
                                             <ul class="music_info_list">
                                                <li class="m-0"><span>Artist</span> Justin Bieber</li>
                                             </ul>r
                                          </div>
                                       </a>
                                    </div>
                                    <div class="alb-info">
                                       <a href="./event_details.html" class="font-bold">The journey of an Artist</a>
                                       <ul style="display: flex; font-size: 14px;">
                                          <li style="margin-right: 16px;">
                                             <a href="javascript:void(0)">
                                                <i class="fa fa-music" style="margin-right: 3px;"></i>Jazz
                                             </a>
                                          </li>
                                          <li style="margin-right: 16px;">
                                             <a href="javascript:void(0)">
                                                <i class="fa fa-heart" style="margin-right: 3px;"></i>4.35M
                                             </a>
                                          </li>
                                          <li style="margin-right: 16px;">
                                             <a href="javascript:void(0)">
                                                <i class="fa fa-thumbs-up"></i> 4356
                                             </a>
                                          </li>
                                          <li style="margin-right: 16px;">
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
                           </div>
                        </div>
                        <div class="tab-pane" id="Alternative">

                        </div>
                        <div class="tab-pane" id="Blues">

                        </div>
                        <div class="tab-pane" id="classicrock">

                        </div>
                        <div class="tab-pane" id="Country">

                        </div>
                        <div class="tab-pane" id="Electronica"> </div>
                        <div class="tab-pane" id="Folk"> </div>
                        <div class="tab-pane" id="HardCore"> </div>
                        <div class="tab-pane" id="hiphop"> </div>
                     </div>
                     <div class="text-center">
                        <a href="javascript:void(0)" class="read_more font-bold" style="margin: 20px 0 50px;">Load
                           More</a>
                     </div>
                  </div>
               </div>
            </div>

         </section>
      </div>
   </section>
   @endsection
