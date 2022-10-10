<!--- Trending News Start ----->
<section class="news_section">
    <div class="fix-container container-fluid">
       <div class="row">
          <div class="col-lg-7">
             <h2 class="card-title m-b-5 m-t-0">Trending <span>News</span> </h2>
             <p class="card-subtitle">What's Going On In Our Community</p>
          </div>
          <div class="col-lg-5">
             <div class="home-tabs">
                <ul class="nav nav-tabs m-b-0 nav-justified my_tab overflowx-auto" role="tablist">
                   <li role="presentation" class="nav-item active">
                      <a href="#all" class="nav-link" aria-controls="home" role="tab" data-toggle="tab"
                         aria-expanded="true"><span class=""> All</span></a>
                   </li>
                   <li role="presentation" class="nav-item">
                      <a href="#Alternative" class="nav-link" aria-controls="profile" role="tab" data-toggle="tab"
                         aria-expanded="false">
                         <span>Daily News</span></a>
                   </li>
                   <li role="presentation" class="nav-item">
                      <a href="#Blues" class="nav-link text-nowrap aria-controls=" role="tab" data-toggle="tab"
                         aria-expanded="false">
                         <span>Video</span></a>
                   </li>
                   <li role="presentation" class="nav-item">
                      <a href="#Blues" class="nav-link text-nowrap aria-controls=" role="tab" data-toggle="tab"
                         aria-expanded="false">
                         <span>Live Interview</span></a>
                   </li>
                </ul>
             </div>
          </div>
       </div>

       <div class="row">
          <div class="col-lg-5">
             <div class="mt-40">
                <a href="./news.html">
                   <div class="overflow-hidden">
                      <img src="external/./images/home-1.jpg" class="zoomin img-100" alt="">
                   </div>
                </a>
                <h5 class="font-bold m-t-20 card-heading m-b-5">Papagayo Beach Club</h5>
                <p class="card-subheading">santa cruise tenrife</p>
             </div>
          </div>

          <div class="col-lg-7">
             <div class="row">
               @foreach (App\Models\Neww::latest()->take(6)->get(); as $new) 
                     <div class="col-lg-4 col-md-6 col-sm-6 mt-40">
                        <div>
                           <a href="{{route('news')}}">
                              <div class="overflow-hidden">
                                 <img src="{{asset('pictures/'.$new->picture)}}" class="zoomin img-100" alt="">
                              </div>
                           </a>
                           <h5 class="font-bold m-t-20 m-b-5 card-heading">{{$new->title}}</h5>
                           <p class="card-subheading">santa cruise tenrife</p>
                        </div>
                     </div>
                 @endforeach 
             </div>
          </div>
       </div>

       <div class="text-center">
          <a href="{{route('news')}}" class="read_more font-bold" style="margin: 20px 0 00px;">Load More</a>
       </div>
    </div>
 </section>
 <!-- Trending News End -->
