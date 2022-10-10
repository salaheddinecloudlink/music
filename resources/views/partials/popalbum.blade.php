<div class="fix-container container-fluid">
    <div class="row el-element-overlay">
       <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mt-40">
          <div style="height: 100%; display: flex; align-items: center;">
             <div>
                <h1 class="popular-heading m-t-0">Popular Albums<br>to Watch Now</h1>
                <p class="popular-subheading">Most watched albums by days</p>
                <div>
                   <a href="./album.html" class="m-0 read_more font-bold">View All</a>
                </div>
             </div>
          </div>
       </div>
       @foreach (App\Models\Album::all() as $album) 
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mt-40">
               <div class="el-card-item">
                  <div class="el-card-avatar el-overlay-1"> <img src="{{asset('pictures/'.$album->picture)}}" />
                     <a href="{{ route('artist.album_details', ['id' => $album->id]) }}" class="el-overlay">
                        <div class="centered">
                           <i class="fa fa-arrow-right"
                              style="background-color: #e67510; color: white; border-radius: 50%; padding: 15px; font-size: 20px;"></i>
                        </div>
                     </a>
                  </div>
                  <div class="alb-info">
                     <a href="./album.html" class="font-bold">Staying Out All Night</a>
                     <ul class="m-t-5" style="display: flex; font-size: 14px;">
                        <li style="margin-right: 16px;"><i class="fa fa-male"></i> Justin Bieber</li>
                        <li style="margin-right: 16px;"><i class="fa fa-music"></i> Hip Hop</li>
                        <li><i class="fa fa-calendar"></i> Sep 16, 2021</li>
                     </ul>
                  </div>
               </div>
            </div>   
       @endforeach   
    </div>
 </div>
 <!-- Albums End -->
