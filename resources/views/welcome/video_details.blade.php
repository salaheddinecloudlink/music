@extends('layouts.main')
<!-- Navigation -->
@section('content')
    <br>
    <div class="clear"></div>
    <section class="scrollable m-t-170">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <div class="white-box">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel no-margin">
                                    <!-- video player -->
                                    <div id="jp_container_1" class="jp-video-360p">
                                        <div class="jp-type-single pos-rlt">
                                            <div id="jplayer_1" class="jp-jplayer jp-video" style="width: 100%; height: auto;">
                                                <input type="text" value="{{$video->video}}" id="vid" style="display: none"/>
                                                <input type="text" value="{{$video->picture}}" id="pic" style="display: none"/>
                                                <img id="jp_poster_0" src="{{asset('pictures/'.$video->picture)}}"
                                                   style="width: 100%; height: auto; display: inline;">
                                                <video id="jp_video_0" preload="metadata"
                                                   src="http://flatfull.com/themes/assets/video/big_buck_bunny_trailer.webm"
                                                   title="Big Buck Bunny" style="width: 0px; height: 0px;"></video>
                                             </div>
                                            <div class="video_overlay"></div>
                                            <div class="jp-gui">
                                                <div class="jp-video-play ply" style="display: block;">
                                                    <a class="fa fa-5x text-white fa-play-circle"></a>
                                                </div>
                                                <div class="jp-interface bg-info padder">
                                                    <div class="jp-controls">
                                                        <div>
                                                            <a class="jp-play"><i class="icon-control-play i-2x"></i></a>
                                                            <a class="jp-pause hid" style="display: none;"><i
                                                                    class="icon-control-pause i-2x"></i></a>
                                                        </div>
                                                        <div class="jp-progress">
                                                            <div class="jp-seek-bar dker" style="width: 100%;">
                                                                <div class="jp-play-bar dk" style="width: 0%; ">
                                                                </div>
                                                                <div class="jp-title text-lt">{{ $video->title }}</div>
                                                            </div>
                                                        </div>
                                                        <div class="hidden-xs hidden-sm jp-current-time text-xs text-muted">
                                                            00:00
                                                        </div>
                                                        <div class="hidden-xs hidden-sm jp-duration text-xs text-muted">
                                                            00:33</div>
                                                        <div class="hidden-xs hidden-sm">
                                                            <a class="jp-mute" title="mute"><i
                                                                    class="icon-volume-2"></i></a>
                                                            <a class="jp-unmute hid" title="unmute"
                                                                style="display: none;"><i class="icon-volume-off"></i></a>
                                                        </div>
                                                        <div class="hidden-xs hidden-sm jp-volume">
                                                            <div class="jp-volume-bar dk">
                                                                <div class="jp-volume-bar-value lter" style="width: 80%;">
                                                                </div>
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
                                                <span>Update Required</span>
                                                To play the media you will need to either update your browser to a recent
                                                version or
                                                update your <a href="http://get.adobe.com/flashplayer/"
                                                    target="_blank">Flash
                                                    plugin</a>.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / video player End -->
                                </div>
                                <h2 class="m-t-20">{{ $video->title }} <small class="text-muted ar-name">By
                                        {{ $video->user_id }}</small>
                                </h2>
                                <p>{{ $video->description }}</p>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <ul class="vd-details">
                                            <li><i class="fa fa-calendar"></i> {{ $video->created_at }}</li>
                                            <li><a href="JavaScript: void(0)"><i class="fa fa-share-alt"></i> Share</a></li>
                                            <li><i class="fa fa-thumbs-up"></i> {{ $video->nbr_like }}</li>
                                            <li><i class="fa fa-thumbs-down"></i> {{ $video->nbr_dislike }}</li>
                                            <li><i class="fa fa-eye"></i> {{ $video->nbr_views }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-lg">
                        <div class="listenEngagement__commentForm">
                            <div class="commentForm commentForm__transition m-large visible">
                                <div class="commentForm__wrapper commentForm__transition">
                                    <div class="commentForm__avatar">
                                        <span aria-role="img" class="sc-artwork sc-artwork-placeholder-0  "
                                            style="width:40px;height:40px;">
                                            <img src="{{ asset('pictures/song2.jpg') }}" alt="">
                                        </span>
                                    </div>
                                    <div class="commentForm__inputWrapper sc-border-box">
                                        <a href="#" class="commentForm__recipient" style="display: none;"></a>
                                        <input type="text" class="commentForm__input sc-border-box" value=""
                                            placeholder="Write a comment" title="Write a comment">
                                    </div>
                                </div>
                                <div class="commentForm__inputMessage g-input-validation g-input-validation-hidden">
                                    Comment must not exceed 1000 characters
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="m-t-lg m-b com">3 Comments</h4>
                    <section class="comment-list block">
                        <article id="comment-id-1" class="comment-item">
                            <a class="pull-left thumb-sm">
                                <img src="{{ asset('pictures/a0.png') }}" class="img-circle">
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
                                <img src="{{ asset('pictures/a2.png') }}" class="img-circle">
                            </a>
                            <section class="comment-body m-b">
                                <header>
                                    <a href="#"><strong>John smith</strong></a>
                                    <label class="label bg-dark m-l-xs admin">Admin</label>
                                    <span class="text-muted text-xs block m-t-xs">
                                        26 minutes ago
                                    </span>
                                </header>
                                <div class="m-t-sm">Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam
                                    nonummy
                                    nibh euismod tincidunt ut laoreet.</div>
                            </section>
                        </article>
                        <!-- / .comment-reply -->
                        <article id="comment-id-2" class="comment-item">
                            <a class="pull-left thumb-sm">
                                <img src="{{ asset('pictures/a2.png') }}" class="img-circle">
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
                                <div class="m-t-sm">Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam
                                    nonummy
                                    nibh euismod tincidunt ut laoreet.</div>
                            </section>
                        </article>
                    </section>
                </div>
                <div class="col-md-4 col-xs-12 suggestion-sidebar">
                    <div class="white-box">
                        <h3 class="box-title">Up Next</h3>
                        @foreach (App\Models\Video::all() as $video)
                            <div class="row">
                                <div class="col-xs-5">
                                    <a href="{{ route('welcome.video_details', ['id' => $video->id]) }}">
                                        <img class="img-responsive" src="{{ asset('pictures/' . $video->picture) }}"
                                            alt="thumbnail">
                                        <span class="vd-time badge hidden-xs">03:30</span>
                                    </a>
                                </div>
                                <div class="col-xs-7 mdmt">
                                    <h5>
                                        <a href="javascript:void(0)">{{ $video->title }}</a>
                                    </h5>
                                    <p class="ar-name"></p>
                                    <ul class="vd-details">
                                        <li><i class="fa fa-play"></i>{{ $video->nbr_views }}</li>
                                        <li><i class="fa fa-heart"></i> {{ $video->nbr_views }}</li>
                                        <li><i class="fa fa-comment"></i> {{ $video->nbr_views }}</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="m-t-0">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
