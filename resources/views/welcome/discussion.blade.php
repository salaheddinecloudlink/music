@extends('layouts.main')
@section('content')
<br>
    <div class="clear"></div>
    <!-- Navigation -->
    <section class="vbox hbox stretch m-t-170">
        <div class="container-fluid">
            <section id="content">
                <div class="row">
                    <div class="col-sm-12 col-md-9 col-lg-9 col-xl-10">
                        <!-- Feature slide -->
                        <div class="row no-gutter" style="background: #f3f3f3;">
                            <div class="col-lg-6">
                                <iframe width="100%" height="430" src="https://www.youtube.com/embed/-T0O7gU5JoY"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>

                            <div class="col-lg-6">
                                <div style="padding:30px;">
                                <h4 class="m-b-5" style="color: #151515;">Uruploadz Discussion 75</h4>
                                <ul style="display: flex; font-size: 14px; margin-bottom: 15px;">
                                    <li style="margin-right: 16px;">June 22, 2022
                                    </li>
                                    <li style="margin-right: 16px;"><i class="fa fa-eye"></i> 5.65M</li>
                                    <li style="margin-right: 16px;"><i class="fa fa-thumbs-up"></i> 4356
                                    </li>
                                    <li style="margin-right: 16px;"><i class="fa fa-thumbs-down"></i> 123</li>
                                    <li style="margin-right: 16px;"><i class="fa fa-comment"></i> 1235
                                    </li>
                                    <li><i class="fa fa-share-alt"></i> Share</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut accusamus perspiciatis
                                    explicabo cupiditate, amet vero ipsa, repellendus quibusdam nihil hic beatae illo
                                    aspernatur molestias necessitatibus tenetur mollitia et tempore autem quaerat
                                    eligendi saepe impedit praesentium! Quia accusamus sunt explicabo! Mollitia illo
                                    impedit voluptatum laudantium perferendis hic obcaecati reiciendis ad accusamus.
                                </p>
                                <p>
                                    laborum. Quis quod provident non ad commodi nobis deleniti tenetur consequatur
                                    pariatur. Fuga quam iste hic tenetur modi saepe praesentium dolor, facere, rem
                                    voluptate reprehenderit cumque fugit repellendus asperiores totam sit nisi maxime
                                    nobis maiores repellat. Quisquam obcaecati nihil autem dignissimos maiores sint non
                                    quia enim dicta fugit. Labore, unde?
                                </p>

                                <div class="col-md-12 artist-social" style="margin-top: 15px;">
                                    <a href="javascript: void(0);"><i class="fa fa-facebook fa-1x" style="margin-right: 10px;"></i></a>
                                    <a href="javascript: void(0);"><i class="fa fa-twitter fa-1x" style="margin-right: 10px;"></i></a>
                                    <a href="javascript: void(0);"><i class="fa fa-instagram fa-1x" style="margin-right: 10px;"></i></a>
                                    <a href="javascript: void(0);"><i class="fa fa-globe fa-1x" style="margin-right: 10px;"></i></a>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- Feature slide End -->
                        <!-- Shorting Form -->
                        
                        <!-- Shorting Form End -->
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-2">
                        <div class="single_add" style="margin-bottom:20px;">
                            <a href="#"><img src="img/add1.png" alt=""></a>
                        </div>
                        <div class="single_add">
                            <a href="#"><img src="img/add2.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <h2 class="artists_heading">All <span>Discussions</span></h2>
                <div class="heading_style"><i class="fa fa-music"></i></div>
                <!-- Filter Menu -->
                <div class="col-md-12 col-xs-12">
                    <div class="white-box">
                        <ul class="nav nav-tabs nav-justified my_tab overflowx-auto" role="tablist">
                            <li role="presentation" class="nav-item active">
                                <a href="#all" class="nav-link" aria-controls="home" role="tab" data-toggle="tab"
                                    aria-expanded="true"><span class=""> All</span></a>
                            </li>
                            <li role="presentation" class="nav-item">
                                <a href="#Alternative" class="nav-link" aria-controls="profile" role="tab"
                                    data-toggle="tab" aria-expanded="false">
                                    <span>Acoustic</span></a>
                            </li>
                            <li role="presentation" class="nav-item">
                                <a href="#Blues" class="nav-link text-nowrap aria-controls=" messages" role="tab"
                                    data-toggle="tab" aria-expanded="false">
                                    <span>Afro-Beat</span></a>
                            </li>
                            <li role="presentation" class="nav-item">
                                <a href="#classicrock" class="nav-link" aria-controls="messages" role="tab"
                                    data-toggle="tab" aria-expanded="false">
                                    <span class="text-nowrap">Alternative</span></a>
                            </li>
                            <li role="presentation" class="nav-item">
                                <a href="#Country" class="nav-link" aria-controls="messages" role="tab"
                                    data-toggle="tab" aria-expanded="false">
                                    <span>Classical</span></a>
                            </li>
                            <li role="presentation" class="nav-item">
                                <a href="#Electronica" class="nav-link" aria-controls="messages" role="tab"
                                    data-toggle="tab" aria-expanded="false">
                                    <span>Country</span></a>
                            </li>
                            <li role="presentation" class="nav-item">
                                <a href="#Folk" class="nav-link" aria-controls="messages" role="tab" data-toggle="tab"
                                    aria-expanded="false">
                                    <span>Dance </span></a>
                            </li>
                            <li role="presentation" class="nav-item">
                                <a href="#HardCore" class="nav-link" aria-controls="messages" role="tab"
                                    data-toggle="tab" aria-expanded="false">
                                    <span>Electronic </span></a>
                            </li>
                            <li role="presentation" class="nav-item">
                                <a href="#hiphop" class="nav-link" aria-controls="messages" role="tab" data-toggle="tab"
                                    aria-expanded="false">
                                    <span class="text-nowrap">Folk</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="all">
                                <div class="row el-element-overlay">
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="el-card-item">
                                            <p class="feature-video-badge">
                                                <i class="fa fa-calendar"></i> Oct 10</p>
                                            <div class="el-card-avatar el-overlay-1"> <img src="{{asset('pictures/vd3.jpg')}}">
                                                <div class="el-overlay">
                                                    <ul class="el-info">
                                                        <li><a class="btn default btn-outline"
                                                                href="{{route('discussion_detail')}}"><i
                                                                    class="fa fa-play-circle-o fa-3x"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                                    <i class="fa fa-share-alt"></i>
                                                </span>
                                                <span class="dis-time badge bg-inverse hidden-xs">03:30</span>
                                            </div>
                                            <div class="alb-info">
                                                <h5 class="m-b-5">Discussion 100</h5>
                                                <ul style="display: flex; font-size: 14px;">
                                                    <li style="margin-right: 16px;"><a href=""><i class="fa fa-eye"></i> 5.65M</a></li>
                                                    <li style="margin-right: 16px;"><a href=""><i class="fa fa-heart"></i> 4.35M</a></li>
                                                    <li style="margin-right: 16px;"><a href=""><i class="fa fa-thumbs-up"></i> 4356</a>
                                                    </li>
                                                    <li style="margin-right: 16px;"><a href=""><i class="fa fa-thumbs-down"></i> 123</a></li>
                                                    <li><a href=""><i class="fa fa-comment"></i> 1235</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="tab-pane" id="Alternative">

                            </div>
                            <div class="tab-pane" id="Blues">

                            </div>
                            <div class="tab-pane" id="classicrock">

                            </div>
                            <div class="tab-pane" id="Country">

                            </div>
                            <div class="tab-pane" id="Electronica"> </div>
                            <div class="tab-pane" id="Folk"> </div>
                            <div class="tab-pane" id="HardCore"> </div>
                            <div class="tab-pane" id="hiphop"> </div>
                        </div>
                        <div class="text-center">
                            <a href="javascript:void(0)" class="read_more font-bold" style="margin: 30px 0 50px;">Load
                                More</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    @endsection
