<section class="artist-section">
    <div class="fix-container container-fluid">
       <div class="row d-flex align-items-center">
          <div class="col-lg-7">
             <h2 class="card-title m-b-0 m-t-0">Trending <span>Artist</span> </h2>
          </div>
       </div>

       <div class="row">
          <div class="col-lg-7">
             <div class="row el-element-overlay m-t-0">
               @foreach (App\Models\profile_artist::all() as $artist) 
                <div class="col-lg-4 col-md-6 col-sm-6 mt-40">
                   <div class="el-card-item">
                      <div class="el-card-avatar el-overlay-1"> <img src="external/images/a6.jpg" class="img-100">
                         <a href="./artist.html" class="el-overlay">
                            <div class="centered">
                               <span class="gener_new">Hip hop</span>
                               <span class="follow1 text-nowrap"><i class="fa fa-thumbs-o-up"></i> 245
                                  Followers</span>
                            </div>
                         </a>
                      </div>
                      <div class="alb-info">
                         <a href="./artist.html" class="font-bold m-b-5">Sam Willey</a>
                         <h6 class="text-muted m-t-0">London, UK</h6>
                      </div>
                   </div>
                </div>
                @endforeach
             </div>
          </div>

          <div class="col-lg-5">
             <div class="mt-40">
                <a href="./artist.html" class="overflow-hidden">
                   <div class="overflow-hidden">
                      <img src="external/./images/home-artist.jpg" class=" zoomin img-100" alt="">
                   </div>
                </a>
                <h5 class="font-bold m-t-20 card-heading m-b-5">The Spark of the Heat</h5>
                <p class="card-subheading">Justin Bieber</p>
             </div>
          </div>
       </div>
       <div class="text-center">
          <a href="./news.html" class="read_more font-bold" style="margin: 20px 0 0px;">Load More</a>
       </div>
    </div>
 </section>
 <!-- Artist End -->
