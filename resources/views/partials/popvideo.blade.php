<section class="video-section">
    <div class="fix-container container-fluid">
       <div class="row el-element-overlay">
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mt-40">
             <div style="height: 100%; display: flex; align-items: center;">
                <div>
                   <h1 class="popular-heading m-t-0">Popular Videos<br>to Watch Now</h1>
                   <p class="popular-subheading">Most watched videos by days</p>
                   <div>
                      <a href="{{ route('landingvideo') }}" class="m-0 read_more font-bold">View All</a>
                   </div>
                </div>
             </div>
          </div>
          @foreach (App\Models\Video::all() as $video) 
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mt-40">
             <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1"> <img src="{{asset('pictures/'.$video->picture)}}">
                   <div class="el-overlay">
                      <ul class="el-info">
                         <li><a class="btn default btn-outline" href="{{ route('landingvideo') }}"><i
                                  class="fa fa-play-circle-o fa-3x"></i></a></li>
                      </ul>
                   </div>
                   <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                      <i class="fa fa-share-alt"></i>
                   </span>
                   <span class="vd-time badge bg-inverse hidden-xs"></span>
                </div>
                <div class="alb-info">
                   <h5 class="m-b-5">{{$video->title}}</h5>
                   <ul style="display: flex; font-size: 14px;">
                      <li style="margin-right: 16px;"><i class="fa fa-eye"></i> {{$video->nbr_views}}M</li>
                      <li style="margin-right: 16px;"><i class="fa fa-heart"></i> {{$video->nbr_like}}M</li>
                      <li style="margin-right: 16px;"><i class="fa fa-thumbs-up"></i> {{$video->nbr_dislike}}</li>
                      <li><i class="fa fa-thumbs-down"></i> 123</li>
                   </ul>
                </div>
             </div>
          </div>
          @endforeach
       </div>
    </div>
 </section>
 <!-- Popular Video End -->
