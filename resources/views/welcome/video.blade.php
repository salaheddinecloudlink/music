@extends('layouts.main')
@section('content')
<br>
   <div class="clear"></div>
   <!-- Navigation -->
   <section class="vbox hbox stretch m-t-170">
      <div class="container-fluid">
         <section id="content">
            <div class="row">
               <div class="col-sm-9 col-lg-10">
                  <!-- Feature slide -->
                  <div class="featured_video_list">
                     <!-- Single slide -->
                     <div class="single_video_event">
                        <div class="f_video_img">
                           <img src="external/img/fe_video3.jpg" alt="">
                        </div>
                        <div class="fea">
                           <span class="f_icon"><i class="fa fa-microphone"></i></span>
                           <span class="f_event_title">Featured</span>
                        </div>
                        <a href="profile-profile-video-detail.html" class="feat_play">
                           <i class="fa fa-play"></i>
                        </a>
                        <div class="fe_video_details">
                           <span class="video_gene">Hip Hop</span>
                           <h4 class="f_video_descrption">Wiz Khalifa, "Staying Out All Night"</h4>
                        </div>
                        <span class="run_time">4.30</span>
                     </div>
                     <!-- Single slide End -->
                     <!-- Single slide -->
                     <div class="single_video_event">
                        <div class="f_video_img">
                           <img src="external/img/fe_video4.jpg" alt="">
                        </div>
                        <div class="fea">
                           <span class="f_icon"><i class="fa fa-microphone"></i></span>
                           <span class="f_event_title">Featured</span>
                        </div>
                        <a href="profile-profile-video-detail.html" class="feat_play">
                           <i class="fa fa-play"></i>
                        </a>
                        <div class="fe_video_details">
                           <span class="video_gene">Classic Rock</span>
                           <h4 class="f_video_descrption">Taylor Swift: Now You Know</h4>
                        </div>
                        <span class="run_time">4.30</span>
                     </div>
                     <!-- Single slide End -->
                     <!-- Single slide -->
                     <div class="single_video_event">
                        <div class="f_video_img">
                           <img src="external/img/fe_video5.jpg" alt="">
                        </div>
                        <div class="fea">
                           <span class="f_icon"><i class="fa fa-microphone"></i></span>
                           <span class="f_event_title">Featured</span>
                        </div>
                        <a href="profile-profile-video-detail.html" class="feat_play">
                           <i class="fa fa-play"></i>
                        </a>
                        <div class="fe_video_details">
                           <span class="video_gene">Electronica</span>
                           <h4 class="f_video_descrption">Chris Cole: The Pedicab Interviews </h4>
                        </div>
                        <span class="run_time">4.30</span>
                     </div>
                     <!-- Single slide End -->
                  </div>
                  <!-- Feature slide End -->
                  <!-- Shorting Form -->
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
                  <!-- Shorting Form End -->
               </div>
               <div class="col-sm-3 col-lg-2">
                  <div class="single_add" style="margin-bottom:20px;">
                     <a href="#"><img src="external/img/add1.png" alt=""></a>
                  </div>
                  <div class="single_add">
                     <a href="#"><img src="external/img/add2.png" alt=""></a>
                  </div>
                  <div class="single_add" style="margin-top:20px;">
                     <a href="#"><img src="external/img/add3.jpg" alt=""></a>
                  </div>
               </div>
            </div>
            <h2 class="artists_heading">Music <span>Video</span></h2>
            <div class="heading_style"><i class="fa fa-music"></i></div>
            <!-- Filter Menu -->
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
                        <a href="#Blues" class="nav-link text-nowrap aria-controls=" messages role="tab"
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
                           @foreach (App\Models\Video::all() as $video) 
                                 <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                       <div class="el-card-avatar el-overlay-1"> <img src="{{asset('pictures/'.$video->picture)}}">
                                          <div class="el-overlay">
                                             <ul class="el-info">
                                                <li><a class="btn default btn-outline" href="{{ route('welcome.video_details', ['id' => $video->id]) }}"><i
                                                         class="fa fa-play-circle-o fa-3x"></i></a></li>
                                             </ul>
                                          </div>
                                          <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                             <i class="fa fa-share-alt"></i>
                                          </span>
                                          <span class="vd-time badge bg-inverse hidden-xs">{{$video->size / 60 }}:{{$video->size % 60}}</span>
                                       </div>
                                       <div class="alb-info">
                                          <h5 class="m-b-5">{{$video->title}}</h5>
                                          <ul style="display: flex; font-size: 14px;">
                                             <input type="text" id="test" value="{{$test ?? ""}}" style="display: none"/>
                                             <li style="margin-right: 16px;">
                                                <a href="{{route('welcome.nbr_view', ['id' => $video->id])}}">
                                                   <i class="fa fa-eye"></i>
                                                   {{$video->nbr_views}}M
                                                </a>
                                             </li>
                                             <li style="margin-right: 16px;">
                                                <a href="{{route('welcome.playlistvideo', ['id' => $video->id])}}">
                                                  <i class="fa fa-heart"></i>
                                                   {{$video->nbr_favorite}}M
                                                </a>
                                             </li>
                                             <li style="margin-right: 16px;">
                                                <a href="{{route('welcome.nbr_likevideo', ['id' => $video->id])}}">
                                                   <i class="fa fa-thumbs-up"></i>
                                                     {{$video->nbr_like}}
                                                </a>
                                             </li>
                                             <li>
                                                <a href="{{route('welcome.nbr_deslikevideo', ['id' => $video->id])}}">
                                                   <i class="fa fa-thumbs-down"></i>
                                                    {{$video->nbr_dislike}} 
                                                </a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                           @endforeach        
                        </div>
                     </div>
                     <div class="tab-pane" id="Alternative">
                        <div class="row el-element-overlay">
                           @foreach (App\Models\Video::all() as $video) 
                           <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                              <div class="el-card-item">
                                 <div class="el-card-avatar el-overlay-1"> <img src="{{asset('pictures/'.$video->picture)}}">
                                    <div class="el-overlay">
                                       <ul class="el-info">
                                          <li><a class="btn default btn-outline" href="{{ route('welcome.video_details', ['id' => $video->id]) }}"><i
                                                   class="fa fa-play-circle-o fa-3x"></i></a></li>
                                       </ul>
                                    </div>
                                    <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                       <i class="fa fa-share-alt"></i>
                                    </span>
                                    <span class="vd-time badge bg-inverse hidden-xs">{{$video->size / 60 }}:{{$video->size % 60}}</span>
                                 </div>
                                 <div class="alb-info">
                                    <h5 class="m-b-5">{{$video->title}}</h5>
                                    <ul style="display: flex; font-size: 14px;">
                                       <input type="text" id="test" value="{{$test ?? ""}}" style="display: none"/>
                                       <li style="margin-right: 16px;">
                                          <a href="{{route('welcome.nbr_view', ['id' => $video->id])}}">
                                             <i class="fa fa-eye"></i>
                                             {{$video->nbr_views}}M
                                          </a>
                                       </li>
                                       <li style="margin-right: 16px;">
                                          <a href="{{route('welcome.playlistvideo', ['id' => $video->id])}}">
                                            <i class="fa fa-heart"></i>
                                             {{$video->nbr_favorite}}M
                                          </a>
                                       </li>
                                       <li style="margin-right: 16px;">
                                          <a href="{{route('welcome.nbr_likevideo', ['id' => $video->id])}}">
                                             <i class="fa fa-thumbs-up"></i>
                                               {{$video->nbr_like}}
                                          </a>
                                       </li>
                                       <li>
                                          <a href="{{route('welcome.nbr_deslikevideo', ['id' => $video->id])}}">
                                             <i class="fa fa-thumbs-down"></i>
                                              {{$video->nbr_dislike}} 
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                     @endforeach     
                        </div>
                     </div>
                     <div class="tab-pane" id="Blues">
                        <div class="row el-element-overlay">
                           @foreach (App\Models\Video::all() as $video) 
                           <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                              <div class="el-card-item">
                                 <div class="el-card-avatar el-overlay-1"> <img src="{{asset('pictures/'.$video->picture)}}">
                                    <div class="el-overlay">
                                       <ul class="el-info">
                                          <li><a class="btn default btn-outline" href="{{ route('welcome.video_details', ['id' => $video->id]) }}"><i
                                                   class="fa fa-play-circle-o fa-3x"></i></a></li>
                                       </ul>
                                    </div>
                                    <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                       <i class="fa fa-share-alt"></i>
                                    </span>
                                    <span class="vd-time badge bg-inverse hidden-xs">{{$video->size / 60 }}:{{$video->size % 60}}</span>
                                 </div>
                                 <div class="alb-info">
                                    <h5 class="m-b-5">{{$video->title}}</h5>
                                    <ul style="display: flex; font-size: 14px;">
                                       <input type="text" id="test" value="{{$test ?? ""}}" style="display: none"/>
                                       <li style="margin-right: 16px;">
                                          <a href="{{route('welcome.nbr_view', ['id' => $video->id])}}">
                                             <i class="fa fa-eye"></i>
                                             {{$video->nbr_views}}M
                                          </a>
                                       </li>
                                       <li style="margin-right: 16px;">
                                          <a href="{{route('welcome.playlistvideo', ['id' => $video->id])}}">
                                            <i class="fa fa-heart"></i>
                                             {{$video->nbr_favorite}}M
                                          </a>
                                       </li>
                                       <li style="margin-right: 16px;">
                                          <a href="{{route('welcome.nbr_likevideo', ['id' => $video->id])}}">
                                             <i class="fa fa-thumbs-up"></i>
                                               {{$video->nbr_like}}
                                          </a>
                                       </li>
                                       <li>
                                          <a href="{{route('welcome.nbr_deslikevideo', ['id' => $video->id])}}">
                                             <i class="fa fa-thumbs-down"></i>
                                              {{$video->nbr_dislike}} 
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                     @endforeach        
                        </div>
                     </div>
                     <div class="tab-pane" id="classicrock">
                        <div class="row el-element-overlay">
                           @foreach (App\Models\Video::all() as $video) 
                           <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                              <div class="el-card-item">
                                 <div class="el-card-avatar el-overlay-1"> <img src="{{asset('pictures/'.$video->picture)}}">
                                    <div class="el-overlay">
                                       <ul class="el-info">
                                          <li><a class="btn default btn-outline" href="{{ route('welcome.video_details', ['id' => $video->id]) }}"><i
                                                   class="fa fa-play-circle-o fa-3x"></i></a></li>
                                       </ul>
                                    </div>
                                    <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                       <i class="fa fa-share-alt"></i>
                                    </span>
                                    <span class="vd-time badge bg-inverse hidden-xs">{{$video->size / 60 }}:{{$video->size % 60}}</span>
                                 </div>
                                 <div class="alb-info">
                                    <h5 class="m-b-5">{{$video->title}}</h5>
                                    <ul style="display: flex; font-size: 14px;">
                                       <input type="text" id="test" value="{{$test ?? ""}}" style="display: none"/>
                                       <li style="margin-right: 16px;">
                                          <a href="{{route('welcome.nbr_view', ['id' => $video->id])}}">
                                             <i class="fa fa-eye"></i>
                                             {{$video->nbr_views}}M
                                          </a>
                                       </li>
                                       <li style="margin-right: 16px;">
                                          <a href="{{route('welcome.playlistvideo', ['id' => $video->id])}}">
                                            <i class="fa fa-heart"></i>
                                             {{$video->nbr_favorite}}M
                                          </a>
                                       </li>
                                       <li style="margin-right: 16px;">
                                          <a href="{{route('welcome.nbr_likevideo', ['id' => $video->id])}}">
                                             <i class="fa fa-thumbs-up"></i>
                                               {{$video->nbr_like}}
                                          </a>
                                       </li>
                                       <li>
                                          <a href="{{route('welcome.nbr_deslikevideo', ['id' => $video->id])}}">
                                             <i class="fa fa-thumbs-down"></i>
                                              {{$video->nbr_dislike}} 
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                     @endforeach   
                        </div>
                     </div>
                     <div class="tab-pane" id="Country">
                        <div class="row el-element-overlay">
                           @foreach (App\Models\Video::all() as $video) 
                           <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                              <div class="el-card-item">
                                 <div class="el-card-avatar el-overlay-1"> <img src="{{asset('pictures/'.$video->picture)}}">
                                    <div class="el-overlay">
                                       <ul class="el-info">
                                          <li><a class="btn default btn-outline" href="{{ route('welcome.video_details', ['id' => $video->id]) }}"><i
                                                   class="fa fa-play-circle-o fa-3x"></i></a></li>
                                       </ul>
                                    </div>
                                    <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                       <i class="fa fa-share-alt"></i>
                                    </span>
                                    <span class="vd-time badge bg-inverse hidden-xs">{{$video->size / 60 }}:{{$video->size % 60}}</span>
                                 </div>
                                 <div class="alb-info">
                                    <h5 class="m-b-5">{{$video->title}}</h5>
                                    <ul style="display: flex; font-size: 14px;">
                                       <input type="text" id="test" value="{{$test ?? ""}}" style="display: none"/>
                                       <li style="margin-right: 16px;">
                                          <a href="{{route('welcome.nbr_view', ['id' => $video->id])}}">
                                             <i class="fa fa-eye"></i>
                                             {{$video->nbr_views}}M
                                          </a>
                                       </li>
                                       <li style="margin-right: 16px;">
                                          <a href="{{route('welcome.playlistvideo', ['id' => $video->id])}}">
                                            <i class="fa fa-heart"></i>
                                             {{$video->nbr_favorite}}M
                                          </a>
                                       </li>
                                       <li style="margin-right: 16px;">
                                          <a href="{{route('welcome.nbr_likevideo', ['id' => $video->id])}}">
                                             <i class="fa fa-thumbs-up"></i>
                                               {{$video->nbr_like}}
                                          </a>
                                       </li>
                                       <li>
                                          <a href="{{route('welcome.nbr_deslikevideo', ['id' => $video->id])}}">
                                             <i class="fa fa-thumbs-down"></i>
                                              {{$video->nbr_dislike}} 
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                     @endforeach   
                        </div>
                     </div>
                     <div class="tab-pane" id="Electronica">
                        <div class="row el-element-overlay">
                           @foreach (App\Models\Video::all() as $video) 
                           <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                              <div class="el-card-item">
                                 <div class="el-card-avatar el-overlay-1"> <img src="{{asset('pictures/'.$video->picture)}}">
                                    <div class="el-overlay">
                                       <ul class="el-info">
                                          <li><a class="btn default btn-outline" href="{{ route('welcome.video_details', ['id' => $video->id]) }}"><i
                                                   class="fa fa-play-circle-o fa-3x"></i></a></li>
                                       </ul>
                                    </div>
                                    <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                       <i class="fa fa-share-alt"></i>
                                    </span>
                                    <span class="vd-time badge bg-inverse hidden-xs">{{$video->size / 60 }}:{{$video->size % 60}}</span>
                                 </div>
                                 <div class="alb-info">
                                    <h5 class="m-b-5">{{$video->title}}</h5>
                                    <ul style="display: flex; font-size: 14px;">
                                       <input type="text" id="test" value="{{$test ?? ""}}" style="display: none"/>
                                       <li style="margin-right: 16px;">
                                          <a href="{{route('welcome.nbr_view', ['id' => $video->id])}}">
                                             <i class="fa fa-eye"></i>
                                             {{$video->nbr_views}}M
                                          </a>
                                       </li>
                                       <li style="margin-right: 16px;">
                                          <a href="{{route('welcome.playlistvideo', ['id' => $video->id])}}">
                                            <i class="fa fa-heart"></i>
                                             {{$video->nbr_favorite}}M
                                          </a>
                                       </li>
                                       <li style="margin-right: 16px;">
                                          <a href="{{route('welcome.nbr_likevideo', ['id' => $video->id])}}">
                                             <i class="fa fa-thumbs-up"></i>
                                               {{$video->nbr_like}}
                                          </a>
                                       </li>
                                       <li>
                                          <a href="{{route('welcome.nbr_deslikevideo', ['id' => $video->id])}}">
                                             <i class="fa fa-thumbs-down"></i>
                                              {{$video->nbr_dislike}} 
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                     @endforeach      
                        </div>   
                     </div>
                     <div class="tab-pane" id="Folk"> 
                        <div class="row el-element-overlay">
                           @foreach (App\Models\Video::all() as $video) 
                           <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                              <div class="el-card-item">
                                 <div class="el-card-avatar el-overlay-1"> <img src="{{asset('pictures/'.$video->picture)}}">
                                    <div class="el-overlay">
                                       <ul class="el-info">
                                          <li><a class="btn default btn-outline" href="{{ route('welcome.video_details', ['id' => $video->id]) }}"><i
                                                   class="fa fa-play-circle-o fa-3x"></i></a></li>
                                       </ul>
                                    </div>
                                    <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                       <i class="fa fa-share-alt"></i>
                                    </span>
                                    <span class="vd-time badge bg-inverse hidden-xs">{{$video->size / 60 }}:{{$video->size % 60}}</span>
                                 </div>
                                 <div class="alb-info">
                                    <h5 class="m-b-5">{{$video->title}}</h5>
                                    <ul style="display: flex; font-size: 14px;">
                                       <input type="text" id="test" value="{{$test ?? ""}}" style="display: none"/>
                                       <li style="margin-right: 16px;">
                                          <a href="{{route('welcome.nbr_view', ['id' => $video->id])}}">
                                             <i class="fa fa-eye"></i>
                                             {{$video->nbr_views}}M
                                          </a>
                                       </li>
                                       <li style="margin-right: 16px;">
                                          <a href="{{route('welcome.playlistvideo', ['id' => $video->id])}}">
                                            <i class="fa fa-heart"></i>
                                             {{$video->nbr_favorite}}M
                                          </a>
                                       </li>
                                       <li style="margin-right: 16px;">
                                          <a href="{{route('welcome.nbr_likevideo', ['id' => $video->id])}}">
                                             <i class="fa fa-thumbs-up"></i>
                                               {{$video->nbr_like}}
                                          </a>
                                       </li>
                                       <li>
                                          <a href="{{route('welcome.nbr_deslikevideo', ['id' => $video->id])}}">
                                             <i class="fa fa-thumbs-down"></i>
                                              {{$video->nbr_dislike}} 
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                     @endforeach    
                        </div>
                     </div>
                     <div class="tab-pane" id="HardCore">
                        <div class="row el-element-overlay">
                           @foreach (App\Models\Video::all() as $video) 
                                 <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                       <div class="el-card-avatar el-overlay-1"> <img src="{{asset('pictures/'.$video->picture)}}">
                                          <div class="el-overlay">
                                             <ul class="el-info">
                                                <li><a class="btn default btn-outline" href="{{ route('welcome.video_details', ['id' => $video->id]) }}"><i
                                                         class="fa fa-play-circle-o fa-3x"></i></a></li>
                                             </ul>
                                          </div>
                                          <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                             <i class="fa fa-share-alt"></i>
                                          </span>
                                          <span class="vd-time badge bg-inverse hidden-xs">{{$video->size / 60 }}:{{$video->size % 60}}</span>
                                       </div>
                                       <div class="alb-info">
                                          <h5 class="m-b-5">{{$video->title}}</h5>
                                          <ul style="display: flex; font-size: 14px;">
                                             <input type="text" id="test" value="{{$test ?? ""}}" style="display: none"/>
                                             <li style="margin-right: 16px;">
                                                <a href="{{route('welcome.nbr_view', ['id' => $video->id])}}">
                                                   <i class="fa fa-eye"></i>
                                                   {{$video->nbr_views}}M
                                                </a>
                                             </li>
                                             <li style="margin-right: 16px;">
                                                <a href="{{route('welcome.playlistvideo', ['id' => $video->id])}}">
                                                  <i class="fa fa-heart"></i>
                                                   {{$video->nbr_favorite}}M
                                                </a>
                                             </li>
                                             <li style="margin-right: 16px;">
                                                <a href="{{route('welcome.nbr_likevideo', ['id' => $video->id])}}">
                                                   <i class="fa fa-thumbs-up"></i>
                                                     {{$video->nbr_like}}
                                                </a>
                                             </li>
                                             <li>
                                                <a href="{{route('welcome.nbr_deslikevideo', ['id' => $video->id])}}">
                                                   <i class="fa fa-thumbs-down"></i>
                                                    {{$video->nbr_dislike}} 
                                                </a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                           @endforeach          
                        </div>   
                     </div>
                     <div class="tab-pane" id="hiphop"> 

                        <div class="row el-element-overlay">
                           @foreach (App\Models\Video::all() as $video) 
                           <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                              <div class="el-card-item">
                                 <div class="el-card-avatar el-overlay-1"> <img src="{{asset('pictures/'.$video->picture)}}">
                                    <div class="el-overlay">
                                       <ul class="el-info">
                                          <li><a class="btn default btn-outline" href="{{ route('welcome.video_details', ['id' => $video->id]) }}"><i
                                                   class="fa fa-play-circle-o fa-3x"></i></a></li>
                                       </ul>
                                    </div>
                                    <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                       <i class="fa fa-share-alt"></i>
                                    </span>
                                    <span class="vd-time badge bg-inverse hidden-xs">{{$video->size / 60 }}:{{$video->size % 60}}</span>
                                 </div>
                                 <div class="alb-info">
                                    <h5 class="m-b-5">{{$video->title}}</h5>
                                    <ul style="display: flex; font-size: 14px;">
                                       <input type="text" id="test" value="{{$test ?? ""}}" style="display: none"/>
                                       <li style="margin-right: 16px;">
                                          <a href="{{route('welcome.nbr_view', ['id' => $video->id])}}">
                                             <i class="fa fa-eye"></i>
                                             {{$video->nbr_views}}M
                                          </a>
                                       </li>
                                       <li style="margin-right: 16px;">
                                          <a href="{{route('welcome.playlistvideo', ['id' => $video->id])}}">
                                            <i class="fa fa-heart"></i>
                                             {{$video->nbr_favorite}}M
                                          </a>
                                       </li>
                                       <li style="margin-right: 16px;">
                                          <a href="{{route('welcome.nbr_likevideo', ['id' => $video->id])}}">
                                             <i class="fa fa-thumbs-up"></i>
                                               {{$video->nbr_like}}
                                          </a>
                                       </li>
                                       <li>
                                          <a href="{{route('welcome.nbr_deslikevideo', ['id' => $video->id])}}">
                                             <i class="fa fa-thumbs-down"></i>
                                              {{$video->nbr_dislike}} 
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                     @endforeach        
                        </div>
                     </div>
                  </div>
                  <div class="text-center">
                     <a href="javascript:void(0)" class="read_more font-bold" style="margin: 30px 0 50px;">Load More</a>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </section>
   @endsection
