@extends('layouts.main')
@section('content')
<br>
   <div class="clear"></div>
   <section class="vbox hbox stretch m-t-170">
      <div class="container-fluid">
         <section id="content">
            <div class="row">
               <div class="col-md-12 col-lg-10">
                  <div class="music_slider">
                     <div class="slider1 slider-for">
                        <div class="banner-image-container">
                           <img src="external/img/f_music.jpg" alt="" class="img-responsive" />
                           <div class="music_overlay"></div>
                           <div class="fea">
                              <span class="f_icon"><i class="fa fa-microphone"></i></span>
                              <span class="f_event_title">Featured</span>
                           </div>
                           <div class="banner-stye2-content">
                              <div class="clearfix">
                                 <div class="banner-content-details">
                                    <div class="singer_name"> <span><img src="external/img/singer.png" alt=""></span> Nicky
                                       Romero</div>
                                    <a href="#">The Splintered Dragon</a>
                                    <span>Hip Hop</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="banner-image-container">
                           <img src="external/img/f_music1.jpg" alt="" class="img-responsive" />
                           <div class="music_overlay"></div>
                           <div class="fea">
                              <span class="f_icon"><i class="fa fa-microphone"></i></span>
                              <span class="f_event_title">Featured</span>
                           </div>
                           <div class="banner-stye2-content">
                              <div class="clearfix">
                                 <div class="banner-content-details">
                                    <div class="singer_name"> <span><img src="external/img/singer.png" alt=""></span> Selina
                                       Gomez</div>
                                    <a href="#">The Name of the Stars</a>
                                    <span>Classic Rock</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="banner-image-container">
                           <img src="external/img/f_music3.jpg" alt="" class="img-responsive" />
                           <div class="music_overlay"></div>
                           <div class="fea">
                              <span class="f_icon"><i class="fa fa-microphone"></i></span>
                              <span class="f_event_title">Featured</span>
                           </div>
                           <div class="banner-stye2-content">
                              <div class="clearfix">
                                 <div class="banner-content-details">
                                    <div class="singer_name"> <span><img src="external/img/singer.png" alt=""></span> Shakira
                                    </div>
                                    <a href="#">The Spirits's Bride</a>
                                    <span>Electronica</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="banner-image-container">
                           <img src="external/img/f_music4.jpg" alt="" class="img-responsive" />
                           <div class="music_overlay"></div>
                           <div class="fea">
                              <span class="f_icon"><i class="fa fa-microphone"></i></span>
                              <span class="f_event_title">Featured</span>
                           </div>
                           <div class="banner-stye2-content">
                              <div class="clearfix">
                                 <div class="banner-content-details">
                                    <div class="singer_name"> <span><img src="external/img/singer.png" alt=""></span> Justin
                                       Bieber</div>
                                    <a href="#">The Spark of the Heat</a>
                                    <span>Jazz</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="slider1 slider-nav">
                        <div class="cmn-t-underline">
                           <p>01 <span>The Splintered Dragon</span></p>
                        </div>
                        <div class="cmn-t-underline">
                           <p>02 <span>The Name of the Stars</span></p>
                        </div>
                        <div class="cmn-t-underline">
                           <p>03 <span>The Spirits's Bride</span></p>
                        </div>
                        <div class="cmn-t-underline">
                           <p>04 <span>The Spark of the Heat</span></p>
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
                                    @foreach (App\Models\Songtype::all() as $st)
                                       <option>{{$st->name}}</option>
                                    @endforeach 
                                 </select>
                                 <span class="aroww"><i class="fa fa-angle-down"></i></span>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="single_filter">
                                 <select class="custome_txt">
                                    <option selected="">Select State</option>
                                    <option>Select State</option>
                                    + @foreach (App\Models\State::all() as $s)
                                         <option>{{$s->name}}</option>
                                      @endforeach
                                 </select>
                                 <span class="aroww"><i class="fa fa-angle-down"></i></span>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-md-12 col-lg-2">
                  <div class="single_add" style="margin-bottom:20px;">
                     <a href="#"><img src="external/img/add1.png" alt=""></a>
                  </div>
                  <div class="single_add" style="margin-bottom:20px;">
                     <a href="#"><img src="external/img/add2.png" alt=""></a>
                  </div>
                  <div class="single_add">
                     <a href="#"><img src="external/img/add3.jpg" alt=""></a>
                  </div>
               </div>
            </div>
            <h2 class="artists_heading">Music</span></h2>
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

                           @foreach (App\Models\Song::all() as $song)
                              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                 <div class="el-card-item">
                                    <div class="el-card-avatar el-overlay-1"> <img src="{{asset('pictures/'.$song->picture)}}" />
                                       <a href="{{route('welcome.song_details', ['id' => $song->id])}}" class="el-overlay">
                                          <div class="centered">
                                             <i class="fa fa-play"
                                                style="background-color: white; border-radius: 50%; padding: 15px 15px 15px 20px; font-size: 20px;"></i>
                                          </div>
                                          <div class="">
                                             <ul class="music_info_list">
                                                <input type="text" name="" id="" value="{{$gid = App\Models\SongType::where('id', $song->SongType_id)->first()}}" style="display: none">
                                                <input type="text" name="" id="" value="{{$uid = App\Models\User::where('id', $song->user_id)->first()}}" style="display: none">
                                                <input type="text" name="" id="" value="{{$uidd = App\Models\Profile_artist::where('user_id', $uid->oauth_id)->first()}}" style="display: none">
                                                <li class="m-0"><span>Artist</span>{{$uidd->first_name.' '.$uidd->last_name}}</li>
                                                {{-- <li class="m-0"><span>Genre</span> {{$gid->name}}</li>  --}}
                                                
                                             </ul>r</span>
                                          </div>
                                       </a>
                                    </div>
                                    <div class="alb-info">
                                       <a href="{{route('welcome.song_details', ['id' => $song->id])}}" class="font-bold">{{$song->title }}</a>
                                       <ul class="m-t-5" style="display: flex; font-size: 14px;">
                                          <li style="margin-right: 16px;"><a href=""><i class="fa fa-eye"></i>{{$song->nbr_views}}</a>
                                          </li>
                                          <li style="margin-right: 16px;"><a href="{{route('welcome.playlistsong', ['id' => $song->id])}}"><i class="fa fa-heart"></i>
                                              {{$song->nbr_favorite}}</a></li>
                                          <li style="margin-right: 16px;"><a href="{{route('welcome.nbr_likesong', ['id' => $song->id])}}"><i class="fa fa-thumbs-up"></i>
                                                {{$song->nbr_like}}</a></li>
                                          <li><a href="{{route('welcome.nbr_deslikesong', ['id' => $song->id])}}"><i class="fa fa-thumbs-down"></i> {{$song->nbr_dislike}}</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              @endforeach 
                           </div>
                        </div>
                        <div class="tab-pane" id="Alternative">
                           <div class="row el-element-overlay">

                              @foreach (App\Models\Song::all() as $song)
                                 <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                       <div class="el-card-avatar el-overlay-1"> <img src="{{asset('pictures/'.$song->picture)}}" />
                                          <a href="{{route('welcome.song_details', ['id' => $song->id])}}" class="el-overlay">
                                             <div class="centered">
                                                <i class="fa fa-play"
                                                   style="background-color: white; border-radius: 50%; padding: 15px 15px 15px 20px; font-size: 20px;"></i>
                                             </div>
                                             <div class="">
                                                <ul class="music_info_list">
                                                   <input type="text" name="" id="" value="{{$gidd = App\Models\SongType::where('id', $song->SongType_id)->first()}}" style="display: none">
                                                   <input type="text" name="" id="" value="{{$uid = App\Models\User::where('id', $song->user_id)->first()}}" style="display: none">
                                                <input type="text" name="" id="" value="{{$uidd = App\Models\Profile_artist::where('user_id', $uid->oauth_id)->first()}}" style="display: none">
                                                   <li class="m-0"><span>Artist</span>{{$uid->first_name.' '.$uid->last_name}}</li> 
                                                    <li class="m-0"><span>Genre</span></li>
                                                </ul>r</span>
                                             </div>
                                          </a>
                                       </div>
                                       <div class="alb-info">
                                          <a href="{{route('welcome.song_details', ['id' => $song->id])}}" class="font-bold">{{$song->title }}</a>
                                          <ul class="m-t-5" style="display: flex; font-size: 14px;">
                                             <li style="margin-right: 16px;"><a href=""><i class="fa fa-eye"></i>{{$song->nbr_views}}</a>
                                             </li>
                                             <li style="margin-right: 16px;"><a href="{{route('welcome.playlistsong', ['id' => $song->id])}}"><i class="fa fa-heart"></i>
                                                 {{$song->nbr_favorite}}</a></li>
                                             <li style="margin-right: 16px;"><a href="{{route('welcome.nbr_likesong', ['id' => $song->id])}}"><i class="fa fa-thumbs-up"></i>
                                                   {{$song->nbr_like}}</a></li>
                                             <li><a href="{{route('welcome.nbr_deslikesong', ['id' => $song->id])}}"><i class="fa fa-thumbs-down"></i> {{$song->nbr_dislike}}</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 @endforeach 
                              </div>
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
