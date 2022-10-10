@extends('layouts.main_artist')
@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-xs-12">
                <h4 class="page-title">Membership Type</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="max-width">
                            <div class="text-center">
                                <h3 class="page-title m-t-0">Subscription Plan For Everyone</h3>
                                <p>Choose a plan according your needs</p>
                            </div>


                            <div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <ul class="nav nav-tabs nav-justified my_tab" role="tablist">
                                        <li role="presentation" class="nav-item active">
                                            <a href="#profile" class="nav-link" aria-controls="home" role="tab"
                                                data-toggle="tab" aria-expanded="true"><span
                                                    class="visible-xs"><i class="fa fa-user"></i></span><span
                                                    class="hidden-xs">
                                                    Monthly</span></a>
                                        </li>
                                        <li role="presentation" class="nav-item">
                                            <a href="#videos" class="nav-link" aria-controls="profile"
                                                role="tab" data-toggle="tab" aria-expanded="false"><span
                                                    class="visible-xs"><i class="fa fa-video-camera"></i></span>
                                                <span class="hidden-xs">Yearly</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="profile">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="card pricing-card">
                                                    <div class="pricing-body">
                                                        <div class="text-center">
                                                            <h4 class="title m-t-0">Free Plan (Silver)</h4>
                                                            <p class="subtitle m-b-0">Facilis est nemo.</p>
                                                            <div class="subprice"><sup>$</sup> <span>0</span>
                                                                /month
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <ul class="pricing-details">
                                                                <li><i class="fa fa-check"></i> Create profile
                                                                </li>
                                                                <li><i class="fa fa-check"></i> Upload 1 video
                                                                    and 1
                                                                    audio audio (6 Mins Max)</li>
                                                                <li><i class="fa fa-check"></i> Create a fan
                                                                    base
                                                                </li>
                                                                <li><i class="fa fa-check"></i> Search Fans</li>
                                                            </ul>
                                                        </div>

                                                        <div
                                                            class="d-flex align-items-center justify-content-center">
                                                            <a href=""
                                                                class="btn btn-primary pricing-btn">Choose
                                                                Plan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="card pricing-card">
                                                    <div class="pricing-body">
                                                        <div class="text-center">
                                                            <h4 class="title m-t-0">Premium (Gold)</h4>
                                                            <p class="subtitle m-b-0">Facilis est nemo.</p>
                                                            <div class="subprice"><sup>$</sup> <span>111</span>
                                                                /month
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <ul class="pricing-details">
                                                                <li><i class="fa fa-check"></i> Create profile
                                                                </li>
                                                                <li><i class="fa fa-check"></i> Create 7 Songs
                                                                    and 7
                                                                    Videos</li>
                                                                <li><i class="fa fa-check"></i> Create Album
                                                                </li>
                                                                <li><i class="fa fa-check"></i> Create Events
                                                                </li>
                                                                <li><i class="fa fa-check"></i> Create a fan
                                                                    base
                                                                </li>
                                                                <li><i class="fa fa-check"></i> Search Fans</li>
                                                            </ul>
                                                        </div>

                                                        <div
                                                            class="d-flex align-items-center justify-content-center">
                                                            <a href="{{route('artist.membership', ['id' => $idmpre])}}"
                                                                class="btn btn-primary pricing-btn">Choose
                                                                Plan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="card pricing-card">
                                                    <div class="pricing-body">
                                                        <div class="text-center">
                                                            <h4 class="title m-t-0">Platinum</h4>
                                                            <p class="subtitle m-b-0">Minus ipsa beatae
                                                                voluptatem
                                                                repellendus.</p>
                                                            <div class="subprice"><sup>$</sup> <span>153</span>
                                                                /month
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <ul class="pricing-details">
                                                                <li><i class="fa fa-check"></i> Create profile
                                                                </li>
                                                                <li><i class="fa fa-check"></i> Create unlimited
                                                                    Songs
                                                                    and Videos</li>
                                                                <li><i class="fa fa-check"></i> Create Album
                                                                </li>
                                                                <li><i class="fa fa-check"></i> Create Events
                                                                </li>
                                                                <li><i class="fa fa-check"></i> Sell your music
                                                                    on
                                                                    our
                                                                    platform</li>
                                                                <li><i class="fa fa-check"></i> Appear on our
                                                                    featured
                                                                    page</li>
                                                                <li><i class="fa fa-check"></i> Ability to get
                                                                    interviewed</li>
                                                                <li><i class="fa fa-check"></i> Create a fan
                                                                    base
                                                                </li>
                                                                <li><i class="fa fa-check"></i> Search Fans</li>
                                                            </ul>
                                                        </div>

                                                        <div
                                                            class="d-flex align-items-center justify-content-center">
                                                            <a href="{{route('artist.membership', ['id' => $idmpla])}}"
                                                                class="btn btn-primary pricing-btn">Choose
                                                                Plan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="videos">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="card pricing-card">
                                                    <div class="pricing-body">
                                                        <div class="text-center">
                                                            <h4 class="title m-t-0">Free Plan (Silver)</h4>
                                                            <p class="subtitle m-b-0">Facilis est nemo.</p>
                                                            <div class="subprice"><sup>$</sup> <span>0</span>
                                                                /year
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <ul class="pricing-details">
                                                                <li><i class="fa fa-check"></i> Create profile
                                                                </li>
                                                                <li><i class="fa fa-check"></i> Upload 1 video
                                                                    and 1
                                                                    audio audio (6 Mins Max)</li>
                                                                <li><i class="fa fa-check"></i> Create a fan
                                                                    base
                                                                </li>
                                                                <li><i class="fa fa-check"></i> Search Fans</li>
                                                            </ul>
                                                        </div>

                                                        <div
                                                            class="d-flex align-items-center justify-content-center">
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-primary pricing-btn">Choose
                                                                Plan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="card pricing-card">
                                                    <div class="pricing-body">
                                                        <div class="text-center">
                                                            <h4 class="title m-t-0">Premium (Gold)</h4>
                                                            <p class="subtitle m-b-0">Facilis est nemo.</p>
                                                            <div class="subprice"><sup>$</sup> <span>1617</span>
                                                                /year
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <ul class="pricing-details">
                                                                <li><i class="fa fa-check"></i> Create profile
                                                                </li>
                                                                <li><i class="fa fa-check"></i> Create 7 Songs
                                                                    and 7
                                                                    Videos</li>
                                                                <li><i class="fa fa-check"></i> Create Album
                                                                </li>
                                                                <li><i class="fa fa-check"></i> Create Events
                                                                </li>
                                                                <li><i class="fa fa-check"></i> Create a fan
                                                                    base
                                                                </li>
                                                                <li><i class="fa fa-check"></i> Search Fans</li>
                                                            </ul>
                                                        </div>

                                                        <div
                                                            class="d-flex align-items-center justify-content-center">
                                                            <a href="{{route('artist.membership', ['id' => $idypre])}}"
                                                                class="btn btn-primary pricing-btn">Choose
                                                                Plan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="card pricing-card">
                                                    <div class="pricing-body">
                                                        <div class="text-center">
                                                            <h4 class="title m-t-0">Platinum</h4>
                                                            <p class="subtitle m-b-0">Minus ipsa beatae
                                                                voluptatem
                                                                repellendus.</p>
                                                            <div class="subprice"><sup>$</sup> <span>2368</span>
                                                                /year
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <ul class="pricing-details">
                                                                <li><i class="fa fa-check"></i> Create profile
                                                                </li>
                                                                <li><i class="fa fa-check"></i> Create unlimited
                                                                    Songs
                                                                    and Videos</li>
                                                                <li><i class="fa fa-check"></i> Create Album
                                                                </li>
                                                                <li><i class="fa fa-check"></i> Create Events
                                                                </li>
                                                                <li><i class="fa fa-check"></i> Sell your music
                                                                    on
                                                                    our
                                                                    platform</li>
                                                                <li><i class="fa fa-check"></i> Appear on our
                                                                    featured
                                                                    page</li>
                                                                <li><i class="fa fa-check"></i> Ability to get
                                                                    interviewed</li>
                                                                <li><i class="fa fa-check"></i> Create a fan
                                                                    base
                                                                </li>
                                                                <li><i class="fa fa-check"></i> Search Fans</li>
                                                            </ul>
                                                        </div>

                                                        <div
                                                            class="d-flex align-items-center justify-content-center">
                                                            <a href="{{route('artist.membership', ['id' => $idypre])}}"
                                                                class="btn btn-primary pricing-btn">Choose
                                                                Plan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="d-flex justify-content-end">
                                <button class="btn btn-success proceed-btn">Proceed to Pay</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
