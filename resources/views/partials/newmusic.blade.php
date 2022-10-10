<section class="fix-container container-fluid music-section">
    <div class="row d-flex align-items-center">
       <div class="col-lg-7">
          <h2 class="card-title m-b-0 m-t-0">New <span>Music</span> </h2>
       </div>
       <div class="col-lg-5">
          <div class="text-right p-0">
             <a href="{{ route('music') }}" class="m-0 read_more font-bold" style="margin: 20px 0 50px;">View
                More</a>
          </div>
       </div>
    </div>

    <div class="row">
       <div class="col-lg-5">
          <div class="mt-40">
             <a href="{{ route('music') }}" class="overflow-hidden">
                <div class="overflow-hidden">
                   <img src="external/./images/nikita.jpg" class=" zoomin img-100" alt="">
                </div>
             </a>
             <h5 class="font-bold m-t-20 card-heading m-b-5">The Spark of the Heat</h5>
             <p class="card-subheading">Justin Bieber</p>
          </div>
       </div>

       <div class="col-lg-7">
          <div class="row">
            @foreach (App\Models\song::all() as $song) 
             <div class="col-lg-3 col-md-6 col-sm-6 mt-40">
                <div>
                   <a href="{{ route('music') }}" class="overflow-hidden">
                      <div class="overflow-hidden">
                         <img src="{{asset('pictures/'.$song->picture)}}" class=" zoomin img-100" alt="">
                      </div>
                   </a>
                   <h5 class="font-bold m-t-20 m-b-5 card-heading">{{$song->title}}</h5>
                   <p class="card-subheading">Justin Bieber</p>
                </div>
             </div>
             @endforeach
             
          </div>
       </div>
    </div>
 </section>
 <!-- New Music End -->
