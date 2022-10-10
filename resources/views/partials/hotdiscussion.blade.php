<section class="home-discussion">
    <div class="fix-container container-fluid">
       <div class="row d-flex align-items-center">
          <div class="col-lg-7">
             <h2 class="card-title m-b-0 m-t-0">Hot <span>Discussion</span> </h2>
          </div>
          <div class="col-lg-5">
             <div class="text-right p-0">
                <a href="{{route('discussion')}}" class="m-0 read_more font-bold" style="margin: 20px 0 50px;">View
                   More</a>
             </div>
          </div>
       </div>

       <div class="row">
         @foreach (App\Models\Discussion::all() as $discussion)
          <div class="col-lg-3 mt-40">
             <a href="{{route('discussion_detail')}}">
                <div class="overflow-hidden discussion-card">
                   <img src="external/./images/hot-1.jpg" class="zoomin img-100" alt="">
                   <div class="discussion-detail">
                      <div class="text-center">
                         <h3 class="text-white">Have a Nice Day</h3>
                         <p class="text-white">A city in southern China containing...</p>
                         <button class="btn btn-outline-white">Watch Now</button>
                      </div>
                   </div>
                </div>
             </a>
          </div>
          @endforeach
       </div>
    </div>
 </section>
 <!-- Hot End -->
