@extends('layouts.main')

@section('content')
<br>
   <div class="clear"></div>
   <!-- Navigation -->
   <section class="scrollable m-t-170">
    <div class="container-fluid">
        <!-- .row -->
        <div class="row ar-profile">
            <div class="col-md-3 col-xs-12">
                <div class="white-box">
                    <div class="user-bg overflow-hidden">
                        <div class="zoomin">
                            {{-- {{dd($artist->avatar)}} --}}
                            <img width="100%" alt="user" src="{{asset('pictures/'.$artist->avatar)}}">
                        </div>
                        <span class="country"><i class="flag-icon flag-icon-us"> </i></span>
                        <div class="social-button">
                            <a data-toggle="dropdown" class="share-btn">
                                <i class="fa fa-share-alt"></i>
                            </a>
                            <ul class="dropdown-menu social_share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="user-btm-box">
                        <!-- .row -->
                        <div class="row text-center m-t-10">
                            <div class="col-md-6 b-r"><strong>Stage Name</strong>
                                <p>{{$artist->stage_name}}</p>
                            </div>
                            <div class="col-md-6"><strong>Genre</strong>
                                <p>{{$artist->genre}}</p>
                            </div>
                        </div>
                        <!-- /.row -->
                        <hr>
                        <!-- .row -->
                        <div class="row text-center m-t-10">
                            <div class="col-md-6 b-r"><strong>State</strong>
                                <p>{{$artist->state}}</p>
                            </div>
                            <div class="col-md-6"><strong>Member Since</strong>
                                <p>{{explode(" ",$artist->created_at)[0]}}</p>
                            </div>
                        </div>
                        <!-- /.row -->
                        <hr>
                        <div class="row">
                            <div class="col-md-12 text-center artist-social">
                                <a href="javascript: void(0);"><i class="fa fa-facebook fa-2x"></i></a>
                                <a href="javascript: void(0);"><i class="fa fa-twitter fa-2x"></i></a>
                                <a href="javascript: void(0);"><i class="fa fa-instagram fa-2x"></i></a>
                                <a href="javascript: void(0);"><i class="fa fa-globe fa-2x"></i></a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="btn-group fan-vote-btn">
                                    <a href="{{ route('welcome.fans', ['id' => $artist->id]) }}" class="btn btn-success btn-rounded fan-btn btn_green">Become a fan
                                        <br> <span> 245 followers</span></a>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <h4>About Me</h4>
                                <p>{{$artist->bio}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-xs-12">
                <div class="white-box">
                    <ul class="nav nav-tabs nav-justified my_tab" role="tablist">
                        <li role="presentation" class="nav-item active">
                            <a href="#profile" class="nav-link" aria-controls="home" role="tab" data-toggle="tab"
                                aria-expanded="true"><span class="visible-xs"><i class="fa fa-user"></i></span><span
                                    class="hidden-xs"> Profile</span></a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a href="#videos" class="nav-link" aria-controls="profile" role="tab" data-toggle="tab"
                                aria-expanded="false"><span class="visible-xs"><i
                                        class="fa fa-video-camera"></i></span> <span
                                    class="hidden-xs">Videos</span></a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a href="#songs" class="nav-link" aria-controls="messages" role="tab" data-toggle="tab"
                                aria-expanded="false"><span class="visible-xs"><i class="fa fa-music"></i></span>
                                <span class="hidden-xs">Songs</span></a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a href="#albums" class="nav-link" aria-controls="messages" role="tab" data-toggle="tab"
                                aria-expanded="false"><span class="visible-xs"><i class="fa fa-hashtag"></i></span>
                                <span class="hidden-xs">Albums</span></a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a href="#events" class="nav-link" aria-controls="messages" role="tab" data-toggle="tab"
                                aria-expanded="false"><span class="visible-xs"><i class="fa fa-calendar"></i></span>
                                <span class="hidden-xs">Events</span></a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a href="#fans" class="nav-link" aria-controls="messages" role="tab" data-toggle="tab"
                                aria-expanded="false"><span class="visible-xs"><i class="fa fa-users"></i></span>
                                <span class="hidden-xs">Followers</span></a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="profile">
                            <div class="row video-section p-0" style="background-color: transparent;">
                                <div class="col-sm-8">
                                    <h4>Journey of an Artist</h4>
                                    <div class="panel no-margin">
                                        <!-- video player -->
                                        <div id="jp_container_1" class="jp-video-270p custom-height">
                                            <div class="jp-type-single pos-rlt">
                                                <input type="text" value="{{$artist->journey}}" id="vid" style="display: none"/>
                                                <input type="text" value="vd1.jpg" id="pic" style="display: none"/>
                                                <div id="jplayer_1" class="jp-jplayer jp-video"
                                                    style="width: 100%; height: auto;">
                                                    <img id="jp_poster_0" src="{{asset('pictures/a1.png')}}"
                                                        style="width: 100%; height: auto; display: inline;">
                                                    <video id="jp_video_0" preload="metadata"
                                                        src="{{asset('videos/music.mp4')}}"
                                                        title="Big Buck Bunny"
                                                        style="width: 0px; height: 0px;"></video>
                                                    </div>
                                                <div class="video_overlay"></div>
                                                <div class="jp-gui">
                                                    <div class="jp-video-play ply" style="display: block;">
                                                        <a class="fa fa-5x text-white fa-play-circle"></a>
                                                    </div>
                                                    <div class="jp-interface bg-info padder">
                                                        <div class="jp-controls">
                                                            <div>
                                                                <a class="jp-play"><i
                                                                        class="icon-control-play i-2x"></i></a>
                                                                <a class="jp-pause hid" style="display: none;"><i
                                                                        class="icon-control-pause i-2x"></i></a>
                                                            </div>
                                                            <div class="jp-progress">
                                                                <div class="jp-seek-bar dker" style="width: 100%;">
                                                                    <div class="jp-play-bar dk" style="width: 0%; ">
                                                                    </div>
                                                                    <div class="jp-title text-lt">Big Buck Bunny
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="hidden-xs hidden-sm jp-current-time text-xs text-muted">
                                                                00:00</div>
                                                            <div
                                                                class="hidden-xs hidden-sm jp-duration text-xs text-muted">
                                                                00:33</div>
                                                            <div class="hidden-xs hidden-sm">
                                                                <a class="jp-mute" title="mute"><i
                                                                        class="icon-volume-2"></i></a>
                                                                <a class="jp-unmute hid" title="unmute"
                                                                    style="display: none;"><i
                                                                        class="icon-volume-off"></i></a>
                                                            </div>
                                                            <div class="hidden-xs hidden-sm jp-volume">
                                                                <div class="jp-volume-bar dk">
                                                                    <div class="jp-volume-bar-value lter"
                                                                        style="width: 80%;"></div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a class="jp-full-screen" title="full screen"><i
                                                                        class="fa fa-expand"></i></a>
                                                                <a class="jp-restore-screen" title="restore screen"
                                                                    style="display: none;"><i
                                                                        class="fa fa-compress text-lt"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="container">
                                                            <div id="socialHolder">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp-no-solution hide" style="display: none;">
                                                    <span>Update Required</span> To play the media you will need to
                                                    either update your browser to a recent version or update your <a
                                                        href="http://get.adobe.com/flashplayer/"
                                                        target="_blank">Flash plugin</a>.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- / video player End -->
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-12 suggestion-sidebar">
                                    <h4>Popular Videos</h4>
                                    <hr>
                                    <div class="white-box">
                                        <input type="text" name="" id="" value="{{ $use = App\Models\user::where('oauth_id', '=', $artist->user_id)->first()}}" style="display: none">
                                        @foreach (App\Models\Video::where('user_id', '=', $use->id)->paginate(6) as $item)  
                                        <article class="media">
                                            <a href="{{ route('welcome.video_details', ['id' => $item->id]) }}" class="pull-left thumb-lg m-t-xs nww">
                                                <img src="{{asset('pictures/'.$item->picture)}}">
                                            </a>
                                            <div class="media-body" style="padding: 4px 0;">
                                                <h5 class="fs-16">
                                                    <a href="{{route('welcome.video_details', ['id' => $item->id]) }}" class="font-bold">Shut up
                                                        society</a>
                                                </h5>
                                                <p class="font-semibold">M.Murdock </p>

                                                <div class="text-xs block m-t-xs">
                                                    <!--<a href="#">Travel</a> 2 minutes ago-->
                                                    <ul class="soundStats sc-ministats-group"
                                                        aria-label="Track stats">
                                                        <li class="sc-ministats-item" title="46,313,060 plays">
                                                            <span
                                                                class="sc-ministats sc-ministats-small sc-ministats-plays">
                                                                <span class="sc-visuallyhidden">20,100,060
                                                                    plays</span><span aria-hidden="true"><i
                                                                        class="fa fa-play" aria-hidden="true"></i>
                                                                    20.1M</span>
                                                            </span>
                                                        </li>
                                                        <li class="sc-ministats-item" title="980,420 likes">
                                                            <a class="sc-ministats sc-ministats-small sc-ministats-likes"
                                                                href="/bigbabydram/broccoli/likes">
                                                                <span class="sc-visuallyhidden">View all
                                                                    likes</span><span aria-hidden="true"><i
                                                                        class="fa fa-heart"></i> 980K</span>
                                                            </a>
                                                        </li>
                                                        <li class="sc-ministats-item" title="5,428 comments">
                                                            <a rel="nofollow"
                                                                class="sc-ministats sc-ministats-small sc-ministats-comments"
                                                                href="/bigbabydram/broccoli/comments">
                                                                <span class="sc-visuallyhidden">View all
                                                                    comments</span><span aria-hidden="true"><i
                                                                        class="fa fa-comment"></i> 5,428</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </article>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <h4>Songs <a href="#" class="pull-right">View All</a></h4>

                            <hr>
                            <ul
                                class="list-group list-group-lg no-radius no-border no-bg m-t-n-xxs m-b-none auto scrollable">
                                <input type="text" name="" id="" value="{{ $us = App\Models\user::where('oauth_id', '=', $artist->user_id)->first()}}" style="display: none">
                               
                                    @foreach (App\Models\Song::where('user_id', '=', $us->id)->paginate(10) as $son )
                                   
                                    <li class="list-group-item">
                                        <a href="#">
                                        </a>
                                        <div class="pull-right m-l"><a href="#"> </a>
                                            <a class="m-r-sm" href="#" title="Add to Playlist"><i class="icon-heart"
                                                    data-toggle="tooltip" data-placement="left"
                                                    title="Add to favourite"></i></a> <a href="#" title="Share"><i
                                                    class="icon-share"></i></a>
                                        </div>
                                        <a class="jp-play-me m-r-sm pull-left" href="#"> <i
                                                class="icon-control-play text-active"></i> <i
                                                class="icon-control-pause text"></i> </a>
                                        <div> <span>E.T.M</span> <span class="text-muted"> --
                                                04:35</span> </div>
                                    </li>

                                @endforeach    
                            </ul>


                            <h4 class="m-t-40">Albums<a href="#" class="pull-right">View All</a></h4>
                            <hr>
                            <div class="row el-element-overlay">
                                <input type="text" name="" id="" value="{{ $usere = App\Models\user::where('oauth_id', '=', $artist->user_id)->first()}}" style="display: none">
                                    @foreach (App\Models\Album::where('user_id', '=', $usere->id)->paginate(6) as $alb)
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                            <div class="el-card-item">
                                                <div class="el-card-avatar el-overlay-1"> <img src="{{asset('pictures/'.$alb->picture )}}" />
                                                    <div class="el-overlay">
                                                        <ul class="el-info">
                                                            <li><a class="btn default btn-outline"
                                                                    href="{{ route('artist.album_detail', ['id' => $alb->id]) }}"><i
                                                                        class="fa fa-play-circle-o fa-3x"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="alb-info">
                                                    <h5 class="m-b-5">{{$alb->album_name}}</h5>
                                                    <h6 class="text-muted m-t-0">{{$alb->nbr_favorite}} Favorites</h6>
                                                </div>
                                            </div>
                                        </div>  
                                    @endforeach
                            </div>
                        </div>
                        <div class="tab-pane" id="videos">
                            <div class="row el-element-overlay">
                                    @foreach (App\Models\Video::where('user_id', '=', $us->id)->paginate(20) as $vid )
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="el-card-item">
                                                <div class="el-card-avatar el-overlay-1"> <img src="{{asset('pictures/'.$vid->picture)}}" />
                                                    <div class="el-overlay">
                                                        <ul class="el-info">
                                                            <li><a class="btn default btn-outline"
                                                                    href="{{ route('welcome.video_details', ['id' => $vid->id]) }}"><i
                                                                        class="fa fa-play-circle-o fa-3x"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                                        <i class="fa fa-share-alt"></i>
                                                    </span>
                                                    <span class="vd-time badge bg-inverse hidden-xs">03:30</span>
                                                </div>
                                                <div class="alb-info">
                                                    <h5 class="m-b-5">The Fallen</h5>
                                                    <h6 class="text-muted m-t-0">10K Views</h6>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                            </div>


                        </div>
                        <div class="tab-pane" id="songs">
                            <ul
                                class="list-group list-group-lg no-radius no-border no-bg m-t-n-xxs m-b-none auto scrollable">
                                @foreach (App\Models\Song::where('user_id', '=', $us->id)->paginate(10) as $songg )
                                    <li class="list-group-item">
                                        <a href="#">
                                        </a>
                                        <div class="pull-right m-l"><a href="#"> </a>
                                            <a class="m-r-sm" href="#" title="Add to Playlist"><i class="icon-heart"
                                                    data-toggle="tooltip" data-placement="left"
                                                    title="Add to favourite"></i></a> <a href="#" title="Share"><i
                                                    class="icon-share"></i></a>
                                        </div>
                                        <a class="jp-play-me m-r-sm pull-left" href="#"> <i
                                                class="icon-control-play text-active"></i> <i
                                                class="icon-control-pause text"></i> </a>
                                        <div> <span>E.T.M</span> <span class="text-muted"> --
                                                04:35</span> </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="tab-pane" id="albums">
                            <div class="row el-element-overlay">
                                @foreach (App\Models\Album::where('user_id', '=', $usere->id)->paginate(6) as $albs)
                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                        <div class="el-card-item">
                                            <div class="el-card-avatar el-overlay-1"> <img src="{{asset('pictures/'.$albs->picture)}}" />
                                                <div class="el-overlay">
                                                    <ul class="el-info">
                                                        <li><a class="btn default btn-outline"
                                                                href="{{ route('artist.album_detail', ['id' => $albs->id]) }}"><i
                                                                    class="fa fa-play-circle-o fa-3x"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="alb-info">
                                                <h5 class="m-b-5">{{$albs->album_name}}</h5>
                                                <h6 class="text-muted m-t-0">{{$albs->nbr_favorite}} Favorites</h6>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach    
                            </div>
                        </div>
                        <div class="tab-pane" id="events">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                        <div class="row el-element-overlay">
                                            @foreach (App\Models\Event::where('user_id', '=', $usere->id)->paginate(6) as $event)
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="el-card-item">
                                                        <p class="feature-video-badge">
                                                            <i class="fa fa-calendar"></i> Oct 17</p>
                                                        <div class="el-card-avatar el-overlay-1"> <img src="{{asset('pictures/'.$event->picture)}}">
                                                            <a href="{{ route('artist.event_detail', ['id' => $event->id]) }}" class="el-overlay">
                
                                                                <div class="centered">
                                                                    <div class="btn default btn-outline">
                                                                        <i class="fa fa-play-circle-o fa-2x"></i>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="alb-info">
                                                            <a href="#" class="font-bold">{{$event->event_name}}</a>
                                                            <ul style="display: flex; font-size: 14px;">
                                                                <li style="margin-right: 16px;">
                                                                    <a href="javascript:void(0)">
                                                                        <i class="fa fa-music" style="margin-right: 3px;"></i>Jazz
                                                                    </a>
                                                                </li>
                                                                <li style="margin-right: 16px;">
                                                                    <a href="javascript:void(0)">
                                                                        <i class="fa fa-map-marker" style="margin-right: 3px;"></i>Los
                                                                        Angeles
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
                        </div>
                        <div class="tab-pane" id="fans">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <a href="fan-detail.html"><img src="images/a1.jpg" class="img-responsive" /></a>
                                    <div class="fan-info">
                                        <h5 class="m-b-5"><a href="fan-detail.html">Sam Willey</a></h5>
                                        <h6 class="text-muted m-t-0">UK</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
</section>

@endsection
