@extends('layouts.main')
   <!-- Navigation -->
   @section('content')
   <br>
   <div class="clear"></div>
   <section class="vbox hbox stretch m-t-170">
    <div class="container-fluid">
       <section id="content">
          <div class="row">
             <div class="col-lg-3 col-md-3 col-xs-12">
                <div class="white-box">
                   <div class="user-bg overflow-hidden">
                      <div class="music_cover overflow-hidden">
                         <img src="{{asset('pictures/'.$song->picture)}}" class="w-100 zoomin" alt="">
                         <input type="text" style="display: none;" value="{{$uid = App\Models\user::where('id', '=', $song->user_id)->first()}}">
                         <h3 class="singer_name2">{{App\Models\Profile_artist::where('user_id', '=', $uid->oauth_id)->first()->first_name.' '.App\Models\Profile_artist::where('user_id', '=', $uid->oauth_id)->first()->last_name}}</h3>
                         <span class="album_name">The Original Doll</span>
                      </div>
                   </div>
                   <div class="user-btm-box">
                      <h3>{{$song->title }}</h3>
                      <div class="music_like">
                         <ul class="video_activites">
                            <li><a title="Like" href="#" class="mb-2"><i class="fa fa-heart"></i> Like</a></li>
                            <li><a title="Add to playlist" href="{{route('welcome.playlistsong', ['id' => $song->id])}}" class="mb-2"><i class="fa fa-plus"></i> Add to
                                  playlist</a></li>
                            <li><a href="#" class="mb-2"><i class="fa fa-share"></i> Share</a></li>
                            <li><a href="#" class="mb-2"><i class="fa fa-comment-o"></i> Comments: 250 </a></li>
                            <li><a href="#" class="mb-2"><i class="fa fa-headphones"></i> Listen: {{$song->nbr_views}} </a></li>

                         </ul>
                      </div>
                      <ul
                         class="list-group list-group-lg no-radius no-border no-bg m-t-n-xxs m-b-none auto scrollable cst">
                         <li class="list-group-item">
                            <div class="pull-right m-l"> <a title="Add to favourite" href="#" class="m-r-sm"><i
                                     class="icon-heart"></i></a> <a title="Share" href="#"><i
                                     class="icon-share"></i></a> </div>
                            <a href="#" class="jp-play-me m-r-sm pull-left"> <i class="icon-control-play text"></i> <i
                                  class="icon-control-pause text-active"></i> </a>
                            <div class="text-ellipsis"> <span>{{$song->title}}</span> <span class="text-muted">
                                  -- 05:00</span> </div>
                         </li>
                      </ul>
                      <!-- .row -->
                      <div class="row text-center m-t-10">
                         <div class="col-md-6 b-r">
                            <strong>Artist :</strong>
                            <p>{{$uid->first_name.' '.$uid->last_name}}</p>
                         </div>
                         <div class="col-md-6"><strong>Length :</strong>
                            <p>3:37</p>
                         </div>
                      </div>
                      <!-- /.row -->
                      <hr>
                      <!-- .row -->
                      <div class="row text-center m-t-10">
                         <div class="col-md-6 b-r"><strong>Genre :</strong>
                           <input type="text" name="" id="" value="{{$gid = App\Models\SongType::find(14)}}" style="display: none">
                            <p>{{$gid}}</p>
                         </div>
                         <div class="col-md-6"><strong>Release :</strong>
                            <p>14 Febuary, 2016</p>
                         </div>
                      </div>
                      <!-- /.row -->
                   </div>
                </div>
             </div>

             <div class="col-md-3 col-xs-12 col-lg-9">
                <h3 class="album_heading text-center">Similar <span>Music</span></h3>
                
                <div class="row el-element-overlay">
                  @foreach (App\Models\song::all() as $son)
                 
                   <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                      <div class="el-card-item">
                         <div class="el-card-avatar el-overlay-1"> <img src="{{ asset('pictures/a3.jpg') }}">
                            <a href="{{route('welcome.song_details', ['id' => $son->id])}} " class="el-overlay">
                               <div class="centered">
                                  <i class="fa fa-play" style="background-color: white; border-radius: 50%; padding: 15px 15px 15px 20px; font-size: 20px;"></i>
                               </div>
                               <div class="">
                                  <ul class="music_info_list">
                                    <input type="text" name="" id="" value="{{$gidd = App\Models\SongType::where('id', $son->SongType_id)->first()}}" style="display: none">
                                                <input type="text" name="" id="" value="{{$uidd = App\Models\Profile_artist::where('id', '=', $son->user_id)->first()}}" style="display: none">
                                     <li class="m-0"><span>Artist</span>{{$uid->first_name.' '.$uid->last_name}}</li>
                                     {{-- <li class="m-0"><span>Genre</span>{{dd($gidd)}}</li> --}}
                                  </ul>r
                               </div>
                            </a>
                         </div>
                         <div class="alb-info">
                            <a href="./music_details.html" class="font-bold">{{$son->title}}</a>
                            <ul class="m-t-5" style="display: flex; font-size: 14px;">
                               <li style="margin-right: 16px;"><i class="fa fa-eye"></i>{{$son->nbr_views}}</li>
                               <li style="margin-right: 16px;"><i class="fa fa-comment"></i>{{$son->nbr_like}}</li>
                               <li style="margin-right: 16px;"><i class="fa fa-thumbs-up"></i> {{$son->nbr_like}}</li>
                               <li><i class="fa fa-thumbs-down"></i> {{$son->nbr_deslike}}</li>
                            </ul>
                         </div>
                      </div>
                   </div>
                       
                  @endforeach
                </div>


                <h4 class="m-t-lg m-b com">3 Comments</h4>
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
                         <div class="m-t-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque
                            quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum.</div>
                      </section>
                   </article>
                   <!-- .comment-reply -->
                   <article id="comment-id-2" class="comment-item comment-reply">
                      <a class="pull-left thumb-sm">
                         <img src="{{asset('pictures/a1.png')}}" class="img-circle">
                      </a>
                      <section class="comment-body m-b">
                         <header>
                            <a href="#"><strong>John smith</strong></a>
                            <label class="label bg-dark m-l-xs admin">Admin</label>
                            <span class="text-muted text-xs block m-t-xs">
                               26 minutes ago
                            </span>
                         </header>
                         <div class="m-t-sm">Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy
                            nibh euismod tincidunt ut laoreet.</div>
                      </section>
                   </article>
                   <!-- / .comment-reply -->
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                            </p>
                            <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                         </blockquote>
                         <div class="m-t-sm">Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy
                            nibh euismod tincidunt ut laoreet.</div>
                      </section>
                   </article>
                </section>
             </div>
          </div>
    </div>
 </section>
 </div>
 </section>
   @endsection