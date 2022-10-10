@extends('layouts.main')
   <!-- Navigation -->
   @section('content')
   <br>
   <div class="clear"></div>
   <section class="scrollable m-t-170">
    <div class="container-fluid">
       <!-- .row -->
       <div class="row al-details">
          <div class="col-md-4 col-lg-3 col-xs-12">
             <div class="white-box">
                <div class="user-bg overflow-hidden">
                   <div style="position: relative;">
                      <img width="100%" alt="user" src="{{ asset('pictures/' . $album->picture) }}" class="zoomin">
                      <div class="d-flex align-items-center justify-content-center"
                         style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                         <a href="javascript:void(0)" data-toggle="modal" data-target="#album_detail"
                            class="text-white">
                            <i class="fa fa-play-circle-o text-white" style="font-size: 40px;"></i>
                         </a>
                      </div>
                   </div>
                </div>
                <div class="user-btm-box">
                   <!-- .row -->
                   <div class="row text-center">
                      <div class="col-md-12 al-title">
                         <h3>{{ $album->album_name }}</h3>
                         <h5>{{ $album->album_name }}By Sourcerer of The Blackpool</h5>
                      </div>
                      <div class="col-md-6 b-r">
                         <strong>Release Date</strong>
                         <p> October 3, 2017</p>
                      </div>
                      <div class="col-md-6">
                         <strong>Genre</strong>
                         <p>{{$genre}}</p>
                      </div>
                   </div>
                   <!-- /.row -->
                   <hr class="hidden-sm hidden-xs">
                   <!-- .row -->
                   <div class="row text-center">
                      <div class="col-md-6 b-r">
                         <strong>Tracks</strong>
                         <p>15</p>
                      </div>
                      <div class="col-md-6">
                         <strong>Run Time</strong>
                         <p>40:35 Min</p>
                      </div>
                   </div>
                   <!-- /.row -->
                   <hr>
                   <div class="row">
                      <div class="col-md-4 col-sm-4 text-center">
                         <p><i class="fa fa-facebook"></i></p>
                         <h3>258</h3>
                      </div>
                      <div class="col-md-4 col-sm-4 text-center">
                         <p><i class="fa fa-twitter"></i></p>
                         <h3>125</h3>
                      </div>
                      <div class="col-md-4 col-sm-4 text-center">
                         <p><i class="fa fa-instagram"></i></p>
                         <h3>140</h3>
                      </div>
                   </div>
                   <hr>
                   <div class="row">
                      <div class="col-md-12">
                         <h4>Message Behind the Album</h4>
                         <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus
                            ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                            Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
                            tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-md-8 col-lg-9 col-xs-12">
             <div class="white-box">
                
                <ul class="list-group list-group-lg no-radius no-border no-bg m-t-n-xxs m-b-none auto scrollable">
                    @foreach (App\Models\song::where('album_id',$album->id)->paginate(10) as $song)
                        <li class="list-group-item">
                            <a href="#">
                            </a>
                            <div class="pull-right m-l"><a href="#"> </a>
                                <a class="m-r-sm" href="#" title="Add to Playlist"><i class="icon-heart" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to favourite"></i></a> <a href="#" title="Share"><i class="icon-share"></i></a>
                            </div>
                            <a class="jp-play-me m-r-sm pull-left" href="#"> <i class="icon-control-play  text"></i> <i class="icon-control-pause text-active"></i> </a>
                            <div> <span>{{$song->title}}</span> <span class="text-muted"> --
                                    04:35</span> 
                            </div>
                        </li>
                   @endforeach 
               </ul>
                
                <div class="wrapper-lg">
                   <div class="listenEngagement__commentForm">
                      <div class="commentForm commentForm__transition m-large visible">
                         <div class="commentForm__wrapper commentForm__transition">
                            <div class="commentForm__avatar">
                               <span aria-role="img" class="sc-artwork sc-artwork-placeholder-0  "
                                  style="width:40px;height:40px;">
                                  <img src="img/song2.jpg" alt="">
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
                         <img src="images/a0.png" class="img-circle">
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
                         <img src="images/a1.png" class="img-circle">
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
                         <img src="images/a2.png" class="img-circle">
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
       <!-- /.row -->
    </div>
 </section>
   @endsection