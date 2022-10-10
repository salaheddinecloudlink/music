@extends('layouts.main')

@section('content')
    <div class="modal fade" tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel" id="popup-modal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content px-5 py-84 popupcontent">
                <a href="" data-dismiss="modal" class="text-white close-btn">
                    &#x2715
                </a>
                <span class="badge bg-success">Featured Event</span>
                <h1 class="text-white popup-heading text-uppercase mb-0">The journey</h1>
                <p class="fs-5 font-bold text-white op-5 text-uppercase mb-0">By Selena Gomeze</p>

                <div class="duration">
                    <p class="m-b-0 text-white op-5">Date</p>
                    <p class="text-white event-value">Sunday Feb 27
                        2022 at 5:30pm</p>
                    <p class="m-b-0 text-white op-5">Venue:</p>
                    <p class="text-white m-b-30 venue-value">Los Angeles / California</p>
                    <a href="./event_details.html" class="btn text-white read-link">Read More</a>
                    <div class="popup-counter">
                        <div id="defaultCountdown" class="count_down">
                            <span class="countdown-row"><span class="countdown-section"><span
                                        class="countdown-amount">32</span><span class="countdown-period">Days</span></span>
                                <span class="text-white m-b-0">:</span>
                                <span class="countdown-section"><span class="countdown-amount">7</span><span
                                        class="countdown-period">Hours</span></span>
                                <span class="text-white m-b-0">:</span>
                                <span class="countdown-section"><span class="countdown-amount">25</span><span
                                        class="countdown-period">Minutes</span></span>
                                <span class="text-white m-b-0">:</span>
                                <span class="countdown-section"><span class="countdown-amount">32</span><span
                                        class="countdown-period">Seconds</span></span></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('partials.banner')
    @include('partials.trendnews')
    <!-- Popular Video Start -->
    @include('partials.popvideo')
    <!-- New Music Start -->
    @include('partials.newmusic')
    <!-- Account Start -->
    <section class="home-account">
        <div class="fix-container container-fluid">
            <div class="row">
                <div class="col-lg-6 mt-30">
                    <div class="card p-4 home-signup">
                        <div class="d-flex d-block align-items-center justify-content-between">
                            <div class="card-body ">
                                <h4 class="m-t-0 font-bold text-white">New To UrUploadz! Create Account</h4>
                                <p class="fs-16 m-b-0 text-white">Create It, Upload It, Promote It</p>
                            </div>
                            <div class="text-right responsive-mt-4 p-0">
                                <a href="javascript:void(0)" class="m-0 signUp-btn" data-toggle="modal"
                                    data-target="#myModalcontactus">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-30">
                    <div class="card p-4 home-subscribe">
                        <div class="d-flex d-block align-items-center justify-content-between">
                            <div class="card-body">
                                <h4 class="m-t-0 font-bold text-white">Subscribe To Newsletter</h4>
                                <p class="fs-16 m-b-0 text-white">Save and share your playlist with your friends</p>
                            </div>
                            <div class="text-right responsive-mt-4 p-0">
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#subscribeModal"
                                    class="m-0 signUp-btn">Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Account End -->

    <!-- Hot Discussion start-->
    @include('partials.hotdiscussion')
    <!-- Adv Start -->
    <section class="fix-container container-fluid adv-home">
        <div class="row">
            <div class="col-lg-6">
                <img src="external/./img/top_ad_banner.png" class="img-100" alt="">
            </div>
            <div class="col-lg-6">
                <img src="external/./img/top_ad_banner2.png" class="img-100" alt="">
            </div>
        </div>
    </section>
    <!-- Adv End -->


    <!--  Popular Albums Start -->
    @include('partials.popalbum')

    <!--  trend Artist Start -->
    @include('partials.trendartist')

    <!-- Upcoming Event Start -->
    @include('partials.upevent')
@endsection
