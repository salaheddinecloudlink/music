@extends('layouts.main')
   <!-- Navigation -->
   @section('content')
   <br>
   <div class="clear"></div>
   <section class="vbox hbox stretch m-t-170">
    <div class="container-fluid">
       <section id="content">
          <div class="row">
             <div class="col-md-12">
                <!-- Breaking News -->
                <div class="top_ads">
                   <div class="row">
                      <div class="col-sm-6">
                         <div class="top_single_add">
                            <img src="{{asset('pictures/top_ad_banner.png')}}" alt="">
                         </div>
                      </div>
                      <div class="col-sm-6">
                         <div class="top_single_add">
                            <img src="{{asset('pictures/top_ad_banner2.png')}}" alt="">
                         </div>
                      </div>
                   </div>
                </div>
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
                <div class="main_content">
                   <div class="row">
                      <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12">
                         <div class="news_details">
                            <!-- post Image -->
                            <div class="post_image">
                               <img src="img/news_banner1.jpg" alt="">
                            </div>
                            <!-- post Image end -->
                            <!-- Post Details -->
                            <div class="post_details">
                               <h3>Most Important Thing You Need To Know About Music</h3>
                               <ul class="post_meta">
                                  <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                  <li><a href="#"><i class="fa fa-calendar"></i> Sep 10, 2016</a></li>
                                  <li><a href="#"><i class="fa fa-tag"></i> Music</a></li>
                                  <li><a href="#"><i class="fa fa-comment-o"></i> 4 Comments</a></li>
                                  <li><a href="#"><i class="fa fa-eye"></i> 88,127 Views</a></li>
                               </ul>
                               <div class="post_details_text">
                                  <p>Don’t act so surprised, Your Highness. You weren’t on any mercy mission this
                                     time. Several transmissions were beamed to this ship by Rebel spies. I want to
                                     know what happened to the plans they sent you. In my experience, there is no such
                                     thing as luck. Partially, but it also obeys your commands. I want to come with
                                     you to Alderaan. There’s nothing for me here now. I want to learn the ways of the
                                     Force and be a Jedi, like my father before me. The more you tighten your grip,
                                     Tarkin, the more star systems will slip through your fingers.</p>
                                  <p>Still, she’s got a lot of spirit. I don’t know, what do you think? What!? I don’t
                                     know what you’re talking about. I am a member of the Imperial Senate on a
                                     diplomatic mission to Alderaan– What good is a reward if you ain’t around to use
                                     it? Besides, attacking that battle station ain’t my idea of courage. It’s more
                                     like…suicide.</p>
                                  <p>You don’t believe in the Force, do you? Obi-Wan is here. The Force is with him. I
                                     call it luck. Look, I can take you as far as Anchorhead. You can get a transport
                                     there to Mos Eisley or wherever you’re going. What?! The Force is strong with
                                     this one. I have you now.</p>
                                  <blockquote>
                                     <p>We hire people who want to make the best things in the world. -Steve Jobs</p>
                                  </blockquote>
                                  <p>She must have hidden the plans in the escape pod. Send a detachment down to
                                     retrieve them, and see to it personally, Commander. There’ll be no one to stop us
                                     this time! You’re all clear, kid. Let’s blow this thing and go home! Partially,
                                     but it also obeys your commands.</p>
                               </div>
                               <ul class="social_share">
                                  <li>Share this News:</li>
                                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                               </ul>
                            </div>
                            <!-- Post Details End -->
                            <!-- Related News -->
                            <div class="related_news">
                               <h3>Related <span>News</span></h3>
                               <div class="row">
                                @foreach (App\Models\Neww::latest()->take(3)->get(); as $neww) 
                                  <div class="col-md-6 col-lg-4">
                                     <div class="news_holder">
                                        <div class="single_news big">
                                           <!-- Single Big News -->
                                           <div class="single_new_img">
                                              <img src="{{asset('pictures/'. $neww->picture)}}" alt="">
                                              <div class="overlay"></div>
                                              <a href="{{route('News_details', ['id' => $neww->id])}}" class="news_view_icon"><i
                                                    class="fa fa-volume-up"></i></a>
                                           </div>
                                           <div class="news_content">
                                              <a href="news_details.html" class="news_heading">{{$neww->title}}</a>
                                              <ul class="meta_list">
                                                 <li><a href="#"><i class="fa fa-calendar"></i>{{$neww->created_at}}</a>
                                                 </li>
                                                 <li><a href="#"><i class="fa fa-comment-o"></i> 15</a></li>
                                                 <li><a href="#"><i class="fa fa-tag"></i> {{$neww->tag}}</a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <!-- Single Big News End -->
                                     </div>
                                  </div>
                                 @endforeach
                               </div>
                            </div>
                            <!-- Related News End -->
                            <!-- Write Comment -->
                            <div class="write_comments">
                               <h3>Write <span>Comments</span></h3>
                               <form method="">
                                  <div class="single_form">
                                     <textarea class="comment_txt" placeholder="Your Comments"></textarea>
                                  </div>
                                  <div class="single_form">
                                     <input type="text" class="comment_txt" placeholder="Your Name">
                                  </div>
                                  <div class="single_form">
                                     <input type="email" class="comment_txt" placeholder="Your Email">
                                  </div>
                                  <div class="single_form">
                                     <input type="email" class="comment_txt" placeholder="Your Website">
                                  </div>
                                  <button type="button" class="comment_submit">Post Your Comments</button>
                               </form>
                            </div>
                            <!-- Write Comment End -->
                            <!-- Post Comments -->
                            <div class="post_comments">
                               <h3>All <span>Comments (4)</span></h3>
                               <section class="comment-list block">
                                  <article id="comment-id-1" class="comment-item">
                                     <a class="pull-left thumb-sm">
                                        <img src="{{asset('pictures/a0.png')}}" class="img-circle">
                                     </a>
                                     <section class="comment-body m-b">
                                        <header>
                                           <a href="#"><strong>John smith</strong></a>
                                           <label class="label bg-info m-l-xs editor">Editor</label>
                                           <span class="text-muted text-xs block m-t-xs">
                                              24 minutes ago
                                           </span>
                                        </header>
                                        <div class="m-t-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                           Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat.
                                           Vestibulum.</div>
                                     </section>
                                  </article>
                                  <!-- .comment-reply -->
                                  
                                  <!-- / .comment-reply -->
                                  
                               </section>
                               <section class="comment-list block">
                                  
                                  <article id="comment-id-2" class="comment-item">
                                     <a class="pull-left thumb-sm">
                                        <img src="{{asset('pictures/a2.png')}}" class="img-circle">
                                     </a>
                                     <section class="comment-body m-b">
                                        <header>
                                           <a href="#"><strong>John smith</strong></a>
                                           <label class="label bg-dark m-l-xs admin">Admin</label>
                                           <span class="text-muted text-xs block m-t-xs">
                                              26 minutes ago
                                           </span>
                                        </header>
                                        <blockquote class="m-t">
                                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                              erat a ante.</p>
                                           <small>Someone famous in <cite title="Source Title">Source
                                                 Title</cite></small>
                                        </blockquote>
                                        <div class="m-t-sm">Lorem ipsum dolor sit amet, consecteter adipiscing elit,
                                           sed diam nonummy nibh euismod tincidunt ut laoreet.</div>
                                     </section>
                                  </article>
                               </section>
                            </div>
                            <!-- Post Comments End -->
                         </div>
                      </div>
                      <!-- Right Sidebar -->
                      <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 sticky_right" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                         

                      <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static;"><div class="add_right">
                            <img src="{{asset('pictures/New-Banner.jpg')}}" alt="">
                         </div><ul class="social_right_activites" style="display: flex;">
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
                          <div class="single_block_right popular" style="margin-top: 30px;">
                            <h4>Recent <span>News</span></h4>
                            @foreach (App\Models\Neww::latest()->take(3)->get(); as $neww) 
                              <div class="news_holder">
                                <div class="single_news small">
                                    <!-- Single Big News -->
                                    <div class="single_new_img">
                                      <img src="{{asset('pictures/'.$neww->picture)}}" alt="">
                                      <div class="overlay"></div>
                                      <a href="{{route('News_details', ['id' => $neww->id])}}" class="news_view_icon"><i class="fa fa-youtube-play"></i></a>
                                    </div>
                                    <div class="news_content">
                                      <a href="#" class="news_heading">{{$neww->title}}</a>
                                      <ul class="meta_list">
                                          <li><a href="#"><i class="fa fa-calendar"></i>{{' '.explode(" ",$neww->created_at)[0]}}</a></li>
                                          <li><a href="#"><i class="fa fa-comment-o"></i> 15</a></li>
                                          <li><a href="#"><i class="fa fa-tag"></i> {{$neww->tag}}</a></li>
                                      </ul>
                                    </div>
                                    <div class="clear_fix"></div>
                                </div>
                                <!-- Single Big News End -->
                              </div>
                           @endforeach
                         </div>
                         <div class="single_block_right popular" style="margin-top: 30px;">
                            <h4>Popular <span>News</span></h4>
                            @foreach (App\Models\Neww::latest()->take(3)->get(); as $ne) 
                              <div class="news_holder">
                                <div class="single_news small">
                                    <!-- Single Big News -->
                                    <div class="single_new_img">
                                      <img src="{{asset('pictures/'.$ne->picture)}}" alt="">
                                      <div class="overlay"></div>
                                      <a href="{{route('News_details', ['id' => $ne->id])}}" class="news_view_icon"><i class="fa fa-youtube-play"></i></a>
                                    </div>
                                    <div class="news_content">
                                      <a href="#" class="news_heading">{{$ne->title}}</a>
                                      <ul class="meta_list">
                                          <li><a href="#"><i class="fa fa-calendar"></i>{{' '.explode(" ",$ne->created_at)[0]}}</a></li>
                                          <li><a href="#"><i class="fa fa-comment-o"></i>15</a></li>
                                          <li><a href="#"><i class="fa fa-tag"></i>{{$ne->tag}}</a></li>
                                      </ul>
                                    </div>
                                    <div class="clear_fix"></div>
                                </div>
                                <!-- Single Big News End -->
                              </div>
                            @endforeach
                         </div>
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
                         </div><div class="add_right">
                            <div class="">
                               <div class="single_add" style="margin-bottom:23px;">
                                  <a href="#"><img src="{{asset('pictures/add1.png')}}" alt=""></a>
                               </div>
                               <div class="single_add">
                                  <a href="#"><img src="{{asset('pictures/add2.png')}}" alt=""></a>
                               </div>
                            </div>
                            <!-- <img src="img/new-banner2.jpg" alt=""> -->
                         </div></div></div>
                      <!-- Right Sidebar End -->
                   </div>
                </div>
             </div>
          </div>
       </section>
    </div>
 </section>
   @endsection