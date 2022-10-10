<section class="fix-container container-fluid music-section">
    <div class="row d-flex align-items-center">
       <div class="col-lg-7">
          <h2 class="card-title m-b-0 m-t-0">Upcoming <span>Events</span> </h2>
       </div>
    </div>
    
    <div class="row el-element-overlay m-t-0">
      @foreach (App\Models\Event::all() as $event)  
      <div class="col-lg-3 col-md-6 mt-40">
          <div class="el-card-item">
             <p class="feature-video-badge">
                <i class="fa fa-calendar"></i> Oct 10</p>
             <div class="el-card-avatar el-overlay-1"> <img src="{{asset('pictures/'.$event->picture)}}">
                <a href="./event.html" class="el-overlay">

                   <div class="centered">
                      <i class="fa fa-arrow-right"
                         style="background-color: #e67510; color: white; border-radius: 50%; padding: 15px; font-size: 20px;"></i>
                   </div>
                   <div style="display: flex; justify-content: center;">
                      <ul class="music_info_list">
                         <li class="m-0"><span>Artist</span> Justin Bieber</li>
                         <li class="m-0"><span>Location</span> {{$event->location}}</li>
                      </ul>
                   </div>
                </a>
             </div>
             <div class="alb-info">
                <a href="./event.html" class="font-bold">The journey of an Artist</a>
                <ul style="display: flex; font-size: 14px;">
                   <li style="margin-right: 16px;">
                      <a href="javascript:void(0)">
                         <i class="fa fa-music" style="margin-right: 3px;"></i>Jazz
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
       @endforeach  
    </div>
    <div class="text-center">
       <a href="./event.html" class="read_more font-bold" style="margin: 20px 0 0px;">Load More</a>
    </div>
 </section>
 <!-- Event End -->
