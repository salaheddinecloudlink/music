 <!--- Banner Start ----->
 <div class="row no-gutter">
    <div class="col-lg-4">
      <input type="text" name="" id="ava5" style="display: none" value="{{App\Models\profile_artist::where('featured', '=', 'true')->latest()->take(2)->get()[0]->avatar}}">
       <div class="banner-1 banner-5" style="position: relative;">
          <div class="news-overlay">
             <div class="news-icon">
                <a href="{{route('welcome.artistprofile', ['id' => App\Models\profile_artist::where('featured', '=', 'true')->latest()->take(3)->get()[0]->id])}}">
                   <i class="fa fa-arrow-right"
                      style="background-color: #e67510; color: white; border-radius: 50%; padding: 15px; font-size: 20px;"></i>
                </a>
             </div>
          </div>

          <div class="fixed-bottom">
             <div class="text-white ps-3" style="width: 100%;">
                <div class="news-title home-news-title">
                   <h4 class="text-white m-b-10 m-t-0">Featured <span class="text-warning">Artist</span> </h4>
                   <h1 class="m-t-5">
                      {{App\Models\profile_artist::where('featured', '=', 'true')->latest()->take(2)->get()[0]->first_name.' '.App\Models\profile_artist::where('featured', '=', 'true')->latest()->take(2)->get()[0]->last_name}}
                   </h1>
                   <ul class="slid_add news-slid">
                      <li><a href="#"><i class="fa fa-music"></i> Jazz</a></li>
                      <li>
                         <a href="#"><i class="fa fa-map-marker"></i>Los Angeles / United States</a>
                      </li>
                      <li>
                         <a href="#"><i class="fa fa-bookmark"></i> Music &amp; Album</a>
                      </li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="col-lg-4">
      <input type="text" name="" id="ava6" style="display: none" value="{{App\Models\profile_artist::where('featured', '=', 'true')->latest()->take(2)->get()[1]}}">
       <div class="banner-1 banner-6" style="position: relative;">
          <div class="news-overlay">
             <div class="news-icon">
                <a href="{{route('welcome.artistprofile', ['id' => App\Models\profile_artist::where('featured', '=', 'true')->latest()->take(2)->get()[1]->id])}}">
                   <i class="fa fa-arrow-right"
                      style="background-color: #e67510; color: white; border-radius: 50%; padding: 15px; font-size: 20px;"></i>
                </a>
             </div>
          </div>


          <div class="fixed-bottom">
             <div class="text-white ps-3" style="width: 100%;">
                <div class="news-title home-news-title">
                   <h4 class="text-white m-b-10 m-t-0">Featured <span class="text-warning">Artist</span> </h4>
                   <h1 class="m-t-5">
                      {{App\Models\profile_artist::where('featured', '=', 'true')->latest()->take(2)->get()[1]->first_name.' '.App\Models\profile_artist::where('featured', '=', 'true')->latest()->take(2)->get()[1]->last_name}}
                   </h1>
                   <ul class="slid_add news-slid">
                      <li><a href="#"><i class="fa fa-music"></i> Jazz</a></li>
                      <li>
                         <a href="#"><i class="fa fa-map-marker"></i>Los Angeles / United States</a>
                      </li>
                      <li>
                         <a href="#"><i class="fa fa-bookmark"></i> Music &amp; Album</a>
                      </li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="col-lg-4">
      <input type="text" name="" id="ava7" style="display: none" value="{{App\Models\profile_artist::where('featured', '=', 'true')->latest()->take(2)->get()[1]->avatar}}">
       <div class="banner-1 banner-7" style="position: relative;">
          <div class="news-overlay">
             <div class="news-icon">
                <a href="{{route('welcome.artistprofile', ['id' => App\Models\profile_artist::where('featured', '=', 'true')->latest()->take(2)->get()[1]->id])}}">
                   <i class="fa fa-arrow-right"
                      style="background-color: #e67510; color: white; border-radius: 50%; padding: 15px; font-size: 20px;"></i>
                </a>
             </div>
          </div>


          <div class="fixed-bottom">
             <div class="text-white ps-3" style="width: 100%;">
                <div class="news-title home-news-title">
                   <h4 class="text-white m-b-10 m-t-0">Featured <span class="text-warning">Artist</span> </h4>
                   <h1 class="m-t-5">
                      {{App\Models\profile_artist::where('featured', '=', 'true')->latest()->take(3)->get()[1]->first_name.' '.App\Models\profile_artist::where('featured', '=', 'true')->latest()->take(2)->get()[1]->last_name}}
                   </h1>
                   <ul class="slid_add news-slid">
                      <li><a href="#"><i class="fa fa-music"></i> Jazz</a></li>
                      <li>
                         <a href="#"><i class="fa fa-map-marker"></i>Los Angeles / United States</a>
                      </li>
                      <li>
                         <a href="#"><i class="fa fa-bookmark"></i> Music &amp; Album</a>
                      </li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
    </div>
   
 </div>
 <!--- Banner End ----->
