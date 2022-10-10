@extends('layouts.main')
@section('content')
<br>
   <div class="clear"></div>
   <!-- Navigation -->
   <section class="vbox hbox stretch m-t-170">
      <div class="container-fluid">
         <section id="content">

            <div class="row news-banner">
               <div class="col-lg-6">
                  <div class="banner-1" style="position: relative;">

                     <a href="./news_details.html">
                        <div class="news-overlay">
                           <div class="news-icon">
                              <a href="news_details.html"><i class="fa fa-volume-up icon text-white p-3"></i></a>
                           </div>
                        </div>
                     </a>

                     <div class="fixed-bottom">
                        <div class="text-white" style="width: 100%;">
                           <div class="news-title">
                              <p class="news-heading">
                                 Handle Every
                                 fun Challenge
                              </p>
                              <ul class="slid_add news-slid">
                                 <li><a href="#"><i class="fa fa-calendar"></i> Sep 10, 2016</a></li>
                                 <li>
                                    <a href="#"><i class="fa fa-comment-o"></i>15</a>
                                 </li>
                                 <li>
                                    <a href="#"><i class="fa fa-tag"></i> Music</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="banner-2" style="position: relative;">

                     <a href="./news_details.html">
                        <div class="news-overlay">
                           <div class="news-icon">
                              <a href="news_details.html"><i class="fa fa-youtube-play icon text-white p-3"></i></a>
                           </div>
                        </div>
                     </a>

                     <div class="fixed-bottom">
                        <div class="text-white" style="width: 100%;">
                           <div class="news-title">
                              <p class="news-heading">
                                 Handle Every
                                 fun Challeng
                              </p>
                              <ul class="slid_add news-slid">
                                 <li><a href="#"><i class="fa fa-calendar"></i> Sep 10, 2016</a></li>
                                 <li>
                                    <a href="#"><i class="fa fa-comment-o"></i>15</a>
                                 </li>
                                 <li>
                                    <a href="#"><i class="fa fa-tag"></i> Video</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="banner-3" style="position: relative;">

                     <a href="./news_details.html">
                        <div class="news-overlay">
                           <div class="news-icon">
                              <a href="news_details.html"><i class="fa fa-youtube-play icon text-white p-3"></i></a>
                           </div>
                        </div>
                     </a>

                     <div class="fixed-bottom">
                        <div class="text-white" style="width: 100%;">
                           <div class="news-title">
                              <p class="news-heading">
                                 Handle Every
                                 fun Challenge
                              </p>
                              <ul class="slid_add news-slid">
                                 <li><a href="#"><i class="fa fa-calendar"></i> Sep 10, 2016</a></li>
                                 <li>
                                    <a href="#"><i class="fa fa-comment-o"></i>15</a>
                                 </li>
                                 <li>
                                    <a href="#"><i class="fa fa-tag"></i> Video</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="banner-4" style="position: relative;">

                     <a href="./news_details.html">
                        <div class="news-overlay">
                           <div class="news-icon">
                              <a href="news_details.html"><i class="fa fa-image icon text-white p-3"></i></a>
                           </div>
                        </div>
                     </a>

                     <div class="fixed-bottom">
                        <div class="text-white" style="width: 100%;">
                           <div class="news-title">
                              <p class="news-heading">
                                 Handle Every
                                 fun Challenge
                              </p>
                              <ul class="slid_add news-slid">
                                 <li><a href="#"><i class="fa fa-calendar"></i> Sep 10, 2016</a></li>
                                 <li>
                                    <a href="#"><i class="fa fa-comment-o"></i>15</a>
                                 </li>
                                 <li>
                                    <a href="#"><i class="fa fa-tag"></i> Album</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>


            <div class="row">
               <div class="col-md-12">

                  <!-- Breaking News -->
                  <div class="breaking_news">
                     <div class="break_news_holder">
                        <h4>Breaking News</h4>
                     </div>
                     <ul class="breking_news_list">
                        <li><a href="#">Most Important Thing You Need To Know About Music</a></li>
                        <li><a href="#">Sed ut perspiciatis unde omnis iste natus error sit voluptatem .</a></li>
                        <li><a href="#">Most Important Thing You Need To Know About Music</a></li>
                        <li><a href="#">Sed ut perspiciatis unde omnis iste natus error sit voluptatem .</a></li>
                     </ul>
                     <div class="clear_fix"></div>
                  </div>
                  <!-- Breaking News End -->
                  <!-- News Fillter  -->
                  {{-- <ul class="nav nav-tabs nav-justified my_tab overflowx-auto" role="tablist">
                     <li role="presentation" class="nav-item active">
                        <a href="#" class="nav-link" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span class=""> All</span></a>
                     </li>
                     <li role="presentation" class="nav-item">
                        <a href="#" class="nav-link" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false">
                           <span>Discussion</span></a>
                     </li>
                     <li role="presentation" class="nav-item">
                        <a href="#" class="nav-link text-nowrap aria-controls=" role="tab" data-toggle="tab" aria-expanded="false">
                           <span>Video</span></a>
                     </li>
                     <li role="presentation" class="nav-item">
                        <a href="#" class="nav-link" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false">
                           <span class="text-nowrap">Albums</span></a>
                     </li>
                     <li role="presentation" class="nav-item">
                        <a href="#" class="nav-link" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false">
                           <span>Music</span></a>
                     </li>
                     <li role="presentation" class="nav-item">
                        <a href="#" class="nav-link" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false">
                           <span>Artist</span></a>
                     </li>
                     <li role="presentation" class="nav-item">
                        <a href="#" class="nav-link" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false">
                           <span>Event </span></a>
                     </li>
                     <li role="presentation" class="nav-item">
                        <a href="#" class="nav-link" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false">
                           <span>News </span></a>
                     </li>
                  </ul> --}}
                  <!-- News Fillter End -->

                  <div class="main_content">
                     <div class="row">
                        <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 left-news">
                           <div class="tab-content">
                              <div id="m_news" class="tab-pane fade in active">
                                 <div class="news_holder music_news">
                                    <div class="row">
                                       @foreach ($news as $new) 
                                          <div class="col-md-6 col-lg-4">
                                             <div class="news_holder">
                                                <div class="single_news big">
                                                   <!-- Single Big News -->
                                                   <div class="single_new_img">
                                                      <img src="external/img/news8.jpg" alt="">
                                                      <div class="overlay"></div>
                                                      <a href="{{route('News_details', ['id' => $new->id])}}" class="news_view_icon"><i class="fa fa-volume-up"></i></a>
                                                   </div>
                                                   <div class="news_content">
                                                      <a href="news_details.html" class="news_heading">{{$new->title}}</a>
                                                      <ul class="meta_list">
                                                         <li><a href="#"><i class="fa fa-calendar"></i>{{' '.explode(" ",$new->created_at)[0]}}</a>
                                                         </li>
                                                         <li><a href="#"><i class="fa fa-comment-o"></i> 15</a></li>
                                                         <li><a href="#"><i class="fa fa-tag"></i> {{$new->tag}}</a></li>
                                                      </ul>
                                                   </div>
                                                </div>
                                                <!-- Single Big News End -->
                                             </div>
                                          </div>
                                       @endforeach   
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="row" style="margin-bottom: 35px;">
                              <div class="col-sm-6">
                                 <div class="top_single_add">
                                    <img src="external/img/top_ad_banner.png" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="top_single_add">
                                    <img src="external/img/top_ad_banner2.png" alt="">
                                 </div>
                              </div>
                           </div>

                           <div class="row">
                              @foreach ($newss as $neww) 
                                    <div class="col-md-6 col-lg-4">
                                          <div class="news_holder">
                                             <div class="single_news big">
                                                <!-- Single Big News -->
                                                <div class="single_new_img">
                                                   <img src="{{asset('pictures/'.$neww->picture)}}" alt="">
                                                   <div class="overlay"></div>
                                                   <a href="news_details.html" class="news_view_icon"><i
                                                         class="fa fa-volume-up"></i></a>
                                                </div>
                                                <div class="news_content">
                                                   <a href="news_details.html" class="news_heading">{{$neww->title}}</a>
                                                   <ul class="meta_list">
                                                      <li><a href="#"><i class="fa fa-calendar"></i>{{$neww->created_at}}</a>
                                                      </li>
                                                      <li><a href="#"><i class="fa fa-comment-o"></i> 15</a></li>
                                                      <li><a href="#"><i class="fa fa-tag"></i>{{$neww->tag}}</a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                    </div>
                             @endforeach
                           </div>

                           <div class="text-center">
                              <a href="javascript:void(0)" class="read_more font-bold" style="margin: 20px 0 50px;">Load
                                 More</a>
                           </div>

                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 sticky_right">
                           <div class="add_right">
                              <img src="external/img/New-Banner.jpg" alt="">
                           </div>
                           <!-- Social Activites -->
                           <ul class="social_right_activites" style="display: flex;">
                              <li class="icon_facebook"><a href="#"><i class="fa fa-facebook"></i> <span>10,308</span>
                                    <small>Fans</small></a></li>
                              <li class="icon_twi"><a href="#"><i class="fa fa-twitter"></i> <span>597</span>
                                    <small>Likes</small></a></li>
                              <li class="icon_google"><a href="#"><i class="fa fa-google-plus"></i> <span>11,401</span>
                                    <small>Followers</small></a></li>
                              <li class="icon_insta"><a href="#"><i class="fa fa-instagram"></i> <span>1,886</span>
                                    <small>Followers</small></a></li>
                              <div class="clear"></div>
                           </ul>
                           <!-- Social Activites End -->
                           <div class="single_block_right popular" style="margin-top: 30px;">
                              <h4>Recent <span>News</span></h4>
                              <div class="news_holder">
                                 <div class="single_news small">
                                    <!-- Single Big News -->
                                    <div class="single_new_img">
                                       <img src="external/img/news8.jpg" alt="">
                                       <div class="overlay"></div>
                                       <a href="#" class="news_view_icon"><i class="fa fa-youtube-play"></i></a>
                                    </div>
                                    <div class="news_content">
                                       <a href="#" class="news_heading">Handle Every fun Challenge With Ease Using These
                                          Tips</a>
                                       <ul class="meta_list">
                                          <li><a href="#"><i class="fa fa-calendar"></i> Sep 10, 2016</a></li>
                                          <li><a href="#"><i class="fa fa-comment-o"></i> 15</a></li>
                                          <li><a href="#"><i class="fa fa-tag"></i> Video</a></li>
                                       </ul>
                                    </div>
                                    <div class="clear_fix"></div>
                                 </div>
                                 <!-- Single Big News End -->
                              </div>
                           </div>
                           <div class="single_block_right popular" style="margin-top: 30px;">
                              <h4>Popular <span>News</span></h4>
                              <div class="news_holder">
                                 <div class="single_news small">
                                    <!-- Single Big News -->
                                    <div class="single_new_img">
                                       <img src="external/img/news8.jpg" alt="">
                                       <div class="overlay"></div>
                                       <a href="#" class="news_view_icon"><i class="fa fa-youtube-play"></i></a>
                                    </div>
                                    <div class="news_content">
                                       <a href="#" class="news_heading">Handle Every fun Challenge With Ease Using These
                                          Tips</a>
                                       <ul class="meta_list">
                                          <li><a href="#"><i class="fa fa-calendar"></i> Sep 10, 2016</a></li>
                                          <li><a href="#"><i class="fa fa-comment-o"></i> 15</a></li>
                                          <li><a href="#"><i class="fa fa-tag"></i> Video</a></li>
                                       </ul>
                                    </div>
                                    <div class="clear_fix"></div>
                                 </div>
                                 <!-- Single Big News End -->
                              </div>
                           </div>

                           <!-- Socail Link -->

                           <!-- Socail Link End -->
                           <!-- Log In -->
                           <div class="single_block_right log_in" style="margin-top: 30px;">
                              <h4>Subscribe <span>Now</span></h4>
                              <!-- Log In End -->
                              <form>
                                 <div class="single_form">
                                    <input type="email" class="custome_txt" placeholder="Enter your email">
                                 </div>
                                 <div class="single_form">
                                    <button type="button" class="btn-success btn_submit">Subscribe</button>
                                 </div>
                              </form>
                           </div>
                           <div class="add_right">
                              <div class="">
                                 <div class="single_add" style="margin-bottom:23px;">
                                    <a href="#"><img src="external/img/add1.png" alt=""></a>
                                 </div>
                                 <div class="single_add">
                                    <a href="#"><img src="external/img/add2.png" alt=""></a>
                                 </div>
                              </div>
                              <!-- <img src="img/new-banner2.jpg" alt=""> -->
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
