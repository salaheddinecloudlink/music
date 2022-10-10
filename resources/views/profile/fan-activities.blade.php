@extends('layouts.master')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-xs-12">
                    <h4 class="page-title">Activities</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">

                    <div class="d-flex align-items-center justify-content-center">
                        <ul class="nav m-t-0 nav-tabs nav-justified my_tab my_tab2" role="tablist">
                            <li role="presentation" class="nav-item active">
                                <a href="#history" style="margin-bottom: 0 !important;" class="nav-link"
                                    aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span
                                        class="visible-xs"><i class="fa fa-youtube-play"></i></span><span
                                        class="hidden-xs">
                                        Videos</span></a>
                            </li>
                            <li role="presentation" class="nav-item">
                                <a href="#upgrade" style="margin-bottom: 0 !important;" class="nav-link"
                                    aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span
                                        class="visible-xs"><i class="fa fa-music"></i></span><span
                                        class="hidden-xs">
                                        Music</span></a>
                            </li>
                            <li role="presentation" class="nav-item">
                                <a href="#payment" style="margin-bottom: 0 !important;" class="nav-link"
                                    aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span
                                        class="visible-xs"><i class="fa fa-file"></i></span><span
                                        class="hidden-xs">
                                        Albums</span></a>
                            </li>
                            <li role="presentation" class="nav-item">
                                <a href="#cancellation" style="margin-bottom: 0 !important;" class="nav-link"
                                    aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span
                                        class="visible-xs"><i class="fa fa-calendar"></i></span><span
                                        class="hidden-xs">
                                        Discussions</span></a>
                            </li>
                        </ul>
                    </div>

                    <div class="m-t-30">
                        <div class="max-width-auto-big">
                            <div class="tab-content m-t-0">
                                <div class="tab-pane active" id="history">
                                    <div class="white-box">
                                        <h3 class="box-title">Video You Like</h3>

                                        <div class="row el-element-overlay">
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../images/vd3.jpg">
                                                        <div class="el-overlay">
                                                            <ul class="el-info">
                                                                <li><a class="btn default btn-outline" href="#"><i
                                                                            class="fa fa-play-circle-o fa-3x"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                                            <i class="fa fa-share-alt"></i>
                                                        </span>
                                                        <span class="vd-time badge bg-inverse hidden-xs">03:30</span>
                                                    </div>
                                                    <div class="alb-info">
                                                        <h5 class="m-b-5">The Fallen</h5>
                                                        <ul style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i
                                                                        class="fa fa-eye"></i></a>
                                                                5.65M</li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-thumbs-up"></i>
                                                                    4356</a></li>
                                                            <li><a href="#" class="font-lighter"><i
                                                                        class="fa fa-thumbs-down"></i> 123</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../images/vd14.jpg">
                                                        <div class="el-overlay">
                                                            <ul class="el-info">
                                                                <li><a class="btn default btn-outline" href="#"><i
                                                                            class="fa fa-play-circle-o fa-3x"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                                            <i class="fa fa-share-alt"></i>
                                                        </span>
                                                        <span class="vd-time badge bg-inverse hidden-xs">03:10</span>
                                                    </div>
                                                    <div class="alb-info">
                                                        <h5 class="m-b-5">The Silent Nature</h5>
                                                        <ul style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i
                                                                        class="fa fa-eye"></i></a>
                                                                5.65M</li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-thumbs-up"></i>
                                                                    4356</a></li>
                                                            <li><a href="#" class="font-lighter"><i
                                                                        class="fa fa-thumbs-down"></i> 123</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../images/vd13.jpg">
                                                        <div class="el-overlay">
                                                            <ul class="el-info">
                                                                <li><a class="btn default btn-outline" href="#"><i
                                                                            class="fa fa-play-circle-o fa-3x"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                                            <i class="fa fa-share-alt"></i>
                                                        </span>
                                                        <span class="vd-time badge bg-inverse hidden-xs">04:30</span>
                                                    </div>
                                                    <div class="alb-info">
                                                        <h5 class="m-b-5">The Firepit</h5>
                                                        <ul style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i
                                                                        class="fa fa-eye"></i></a>
                                                                5.65M</li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-thumbs-up"></i>
                                                                    4356</a></li>
                                                            <li><a href="#" class="font-lighter"><i
                                                                        class="fa fa-thumbs-down"></i> 123</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="white-box">
                                        <h3 class="box-title">Video You Shared</h3>

                                        <div class="row el-element-overlay">
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../images/vd12.jpg">
                                                        <div class="el-overlay">
                                                            <ul class="el-info">
                                                                <li><a class="btn default btn-outline" href="#"><i
                                                                            class="fa fa-play-circle-o fa-3x"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                                            <i class="fa fa-share-alt"></i>
                                                        </span>
                                                        <span class="vd-time badge bg-inverse hidden-xs">03:30</span>
                                                    </div>
                                                    <div class="alb-info">
                                                        <h5 class="m-b-5">The Fallen</h5>
                                                        <ul style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i
                                                                        class="fa fa-eye"></i></a>
                                                                5.65M</li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-thumbs-up"></i>
                                                                    4356</a></li>
                                                            <li><a href="#" class="font-lighter"><i
                                                                        class="fa fa-thumbs-down"></i> 123</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../images/vd8.jpg">
                                                        <div class="el-overlay">
                                                            <ul class="el-info">
                                                                <li><a class="btn default btn-outline" href="#"><i
                                                                            class="fa fa-play-circle-o fa-3x"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                                            <i class="fa fa-share-alt"></i>
                                                        </span>
                                                        <span class="vd-time badge bg-inverse hidden-xs">03:10</span>
                                                    </div>
                                                    <div class="alb-info">
                                                        <h5 class="m-b-5">The Silent Nature</h5>
                                                        <ul style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i
                                                                        class="fa fa-eye"></i></a>
                                                                5.65M</li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-thumbs-up"></i>
                                                                    4356</a></li>
                                                            <li><a href="#" class="font-lighter"><i
                                                                        class="fa fa-thumbs-down"></i> 123</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../images/vd4.jpg">
                                                        <div class="el-overlay">
                                                            <ul class="el-info">
                                                                <li><a class="btn default btn-outline" href="#"><i
                                                                            class="fa fa-play-circle-o fa-3x"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                                            <i class="fa fa-share-alt"></i>
                                                        </span>
                                                        <span class="vd-time badge bg-inverse hidden-xs">04:30</span>
                                                    </div>
                                                    <div class="alb-info">
                                                        <h5 class="m-b-5">The Firepit</h5>
                                                        <ul style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i
                                                                        class="fa fa-eye"></i></a>
                                                                5.65M</li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-thumbs-up"></i>
                                                                    4356</a></li>
                                                            <li><a href="#" class="font-lighter"><i
                                                                        class="fa fa-thumbs-down"></i> 123</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="white-box">
                                        <h3 class="box-title">Video You Commented</h3>

                                        <div class="row el-element-overlay">
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../images/vd1.jpg">
                                                        <div class="el-overlay">
                                                            <ul class="el-info">
                                                                <li><a class="btn default btn-outline" href="#"><i
                                                                            class="fa fa-play-circle-o fa-3x"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                                            <i class="fa fa-share-alt"></i>
                                                        </span>
                                                        <span class="vd-time badge bg-inverse hidden-xs">03:30</span>
                                                    </div>
                                                    <div class="alb-info">
                                                        <h5 class="m-b-5">The Fallen</h5>
                                                        <ul style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i
                                                                        class="fa fa-eye"></i></a>
                                                                5.65M</li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-thumbs-up"></i>
                                                                    4356</a></li>
                                                            <li><a href="#" class="font-lighter"><i
                                                                        class="fa fa-thumbs-down"></i> 123</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../images/vd2.jpg">
                                                        <div class="el-overlay">
                                                            <ul class="el-info">
                                                                <li><a class="btn default btn-outline" href="#"><i
                                                                            class="fa fa-play-circle-o fa-3x"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                                            <i class="fa fa-share-alt"></i>
                                                        </span>
                                                        <span class="vd-time badge bg-inverse hidden-xs">03:10</span>
                                                    </div>
                                                    <div class="alb-info">
                                                        <h5 class="m-b-5">The Silent Nature</h5>
                                                        <ul style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i
                                                                        class="fa fa-eye"></i></a>
                                                                5.65M</li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-thumbs-up"></i>
                                                                    4356</a></li>
                                                            <li><a href="#" class="font-lighter"><i
                                                                        class="fa fa-thumbs-down"></i> 123</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../images/vd5.jpg">
                                                        <div class="el-overlay">
                                                            <ul class="el-info">
                                                                <li><a class="btn default btn-outline" href="#"><i
                                                                            class="fa fa-play-circle-o fa-3x"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                                            <i class="fa fa-share-alt"></i>
                                                        </span>
                                                        <span class="vd-time badge bg-inverse hidden-xs">04:30</span>
                                                    </div>
                                                    <div class="alb-info">
                                                        <h5 class="m-b-5">The Firepit</h5>
                                                        <ul style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i
                                                                        class="fa fa-eye"></i></a>
                                                                5.65M</li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-thumbs-up"></i>
                                                                    4356</a></li>
                                                            <li><a href="#" class="font-lighter"><i
                                                                        class="fa fa-thumbs-down"></i> 123</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="upgrade">
                                    <div class="white-box">
                                        <h3 class="box-title">Music You Commented</h3>

                                        <div class="row el-element-overlay">
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../images/a3.jpg">
                                                        <a href="#" class="el-overlay">
                                                            <div class="centered">
                                                                <i class="fa fa-play-circle-o fa-3x"></i>
                                                            </div>
                                                            <div>
                                                                <ul class="music_info_list">
                                                                    <li class="m-0"><span>Artist</span> Justin
                                                                        Bieber
                                                                    </li>
                                                                    <li class="m-0"><span>Genre</span> Hard Rock
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="alb-info">
                                                        <a href="#" class="font-bold">The Spark of the Heat</a>
                                                        <ul style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-eye"></i>
                                                                    5.65M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-thumbs-up"></i>
                                                                    4356</a></li>
                                                            <li><a href="#" class="font-lighter"><i
                                                                        class="fa fa-thumbs-down"></i> 123</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../img/album2.jpg">
                                                        <a href="#" class="el-overlay">
                                                            <div class="centered">
                                                                <i class="fa fa-play-circle-o fa-3x"></i>
                                                            </div>
                                                            <div>
                                                                <ul class="music_info_list">
                                                                    <li class="m-0"><span>Artist</span> Justin
                                                                        Bieber
                                                                    </li>
                                                                    <li class="m-0"><span>Genre</span> Hard Rock
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="alb-info">
                                                        <a href="#" class="font-bold">The Spark of the Heat</a>
                                                        <ul style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-eye"></i>
                                                                    5.65M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-thumbs-up"></i>
                                                                    4356</a></li>
                                                            <li><a href="#" class="font-lighter"><i
                                                                        class="fa fa-thumbs-down"></i> 123</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../img/album3.jpg">
                                                        <a href="#" class="el-overlay">
                                                            <div class="centered">
                                                                <i class="fa fa-play-circle-o fa-3x"></i>
                                                            </div>
                                                            <div>
                                                                <ul class="music_info_list">
                                                                    <li class="m-0"><span>Artist</span> Justin
                                                                        Bieber
                                                                    </li>
                                                                    <li class="m-0"><span>Genre</span> Hard Rock
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="alb-info">
                                                        <a href="#" class="font-bold">The Spark of the Heat</a>
                                                        <ul style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-eye"></i>
                                                                    5.65M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-thumbs-up"></i>
                                                                    4356</a></li>
                                                            <li><a href="#" class="font-lighter"><i
                                                                        class="fa fa-thumbs-down"></i> 123</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="white-box">
                                        <h3 class="box-title">Music You Shared</h3>

                                        <div class="row el-element-overlay">
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../images/a6.jpg">
                                                        <a href="#" class="el-overlay">
                                                            <div class="centered">
                                                                <i class="fa fa-play-circle-o fa-3x"></i>
                                                            </div>
                                                            <div>
                                                                <ul class="music_info_list">
                                                                    <li class="m-0"><span>Artist</span> Justin
                                                                        Bieber
                                                                    </li>
                                                                    <li class="m-0"><span>Genre</span> Hard Rock
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="alb-info">
                                                        <a href="#" class="font-bold">The Spark of the Heat</a>
                                                        <ul style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-eye"></i>
                                                                    5.65M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-thumbs-up"></i>
                                                                    4356</a></li>
                                                            <li><a href="#" class="font-lighter"><i
                                                                        class="fa fa-thumbs-down"></i> 123</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../img/album5.jpg">
                                                        <a href="#" class="el-overlay">
                                                            <div class="centered">
                                                                <i class="fa fa-play-circle-o fa-3x"></i>
                                                            </div>
                                                            <div>
                                                                <ul class="music_info_list">
                                                                    <li class="m-0"><span>Artist</span> Justin
                                                                        Bieber
                                                                    </li>
                                                                    <li class="m-0"><span>Genre</span> Hard Rock
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="alb-info">
                                                        <a href="#" class="font-bold">The Spark of the Heat</a>
                                                        <ul style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-eye"></i>
                                                                    5.65M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-thumbs-up"></i>
                                                                    4356</a></li>
                                                            <li><a href="#" class="font-lighter"><i
                                                                        class="fa fa-thumbs-down"></i> 123</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../img/album4.jpg">
                                                        <a href="#" class="el-overlay">
                                                            <div class="centered">
                                                                <i class="fa fa-play-circle-o fa-3x"></i>
                                                            </div>
                                                            <div>
                                                                <ul class="music_info_list">
                                                                    <li class="m-0"><span>Artist</span> Justin
                                                                        Bieber
                                                                    </li>
                                                                    <li class="m-0"><span>Genre</span> Hard Rock
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="alb-info">
                                                        <a href="#" class="font-bold">The Spark of the Heat</a>
                                                        <ul style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-eye"></i>
                                                                    5.65M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-thumbs-up"></i>
                                                                    4356</a></li>
                                                            <li><a href="#" class="font-lighter"><i
                                                                        class="fa fa-thumbs-down"></i> 123</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="white-box">
                                        <h3 class="box-title">Music you Commented</h3>

                                        <div class="row el-element-overlay">
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../images/a7.jpg">
                                                        <a href="#" class="el-overlay">
                                                            <div class="centered">
                                                                <i class="fa fa-play-circle-o fa-3x"></i>
                                                            </div>
                                                            <div>
                                                                <ul class="music_info_list">
                                                                    <li class="m-0"><span>Artist</span> Justin
                                                                        Bieber
                                                                    </li>
                                                                    <li class="m-0"><span>Genre</span> Hard Rock
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="alb-info">
                                                        <a href="#" class="font-bold">The Spark of the Heat</a>
                                                        <ul style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-eye"></i>
                                                                    5.65M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-thumbs-up"></i>
                                                                    4356</a></li>
                                                            <li><a href="#" class="font-lighter"><i
                                                                        class="fa fa-thumbs-down"></i> 123</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../img/album7.jpg">
                                                        <a href="#" class="el-overlay">
                                                            <div class="centered">
                                                                <i class="fa fa-play-circle-o fa-3x"></i>
                                                            </div>
                                                            <div>
                                                                <ul class="music_info_list">
                                                                    <li class="m-0"><span>Artist</span> Justin
                                                                        Bieber
                                                                    </li>
                                                                    <li class="m-0"><span>Genre</span> Hard Rock
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="alb-info">
                                                        <a href="#" class="font-bold">The Spark of the Heat</a>
                                                        <ul style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-eye"></i>
                                                                    5.65M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-thumbs-up"></i>
                                                                    4356</a></li>
                                                            <li><a href="#" class="font-lighter"><i
                                                                        class="fa fa-thumbs-down"></i> 123</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../img/album3.jpg">
                                                        <a href="#" class="el-overlay">
                                                            <div class="centered">
                                                                <i class="fa fa-play-circle-o fa-3x"></i>
                                                            </div>
                                                            <div>
                                                                <ul class="music_info_list">
                                                                    <li class="m-0"><span>Artist</span> Justin
                                                                        Bieber
                                                                    </li>
                                                                    <li class="m-0"><span>Genre</span> Hard Rock
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="alb-info">
                                                        <a href="#" class="font-bold">The Spark of the Heat</a>
                                                        <ul style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-eye"></i>
                                                                    5.65M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-thumbs-up"></i>
                                                                    4356</a></li>
                                                            <li><a href="#" class="font-lighter"><i
                                                                        class="fa fa-thumbs-down"></i> 123</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="payment">
                                    <div class="white-box">
                                        <h3 class="box-title">Albums You Like</h3>

                                        <div class="row el-element-overlay">
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="el-card-item p-b-0">

                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../img/album3.jpg">
                                                        <div class="album-badge">
                                                            <p class="p-2 px-4 mb-0 text-white">Sept 16</p>
                                                        </div>
                                                        <a href="#" class="el-overlay">
                                                            <div class="centered">
                                                                <i class="fa fa-play-circle-o fa-3x"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="alb-info">
                                                        <a href="#" class="font-bold">Staying Out All Night</a>
                                                        <ul class="m-t-5" style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a class="font-lighter"
                                                                    href="#"><i class="fa fa-male"></i> Justin
                                                                    Bieber</a></li>
                                                            <li style="margin-right: 16px;"><a class="font-lighter"
                                                                    href="#"><i class="fa fa-music"></i> Hip Hop</a>
                                                            </li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../img/album2.jpg">
                                                        <div class="album-badge">
                                                            <p class="p-2 px-4 mb-0 text-white">Sept 16</p>
                                                        </div>
                                                        <a href="#" class="el-overlay">
                                                            <div class="centered">
                                                                <i class="fa fa-play-circle-o fa-3x"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="alb-info">
                                                        <a href="#" class="font-bold">Staying Out All Night</a>
                                                        <ul class="m-t-5" style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a class="font-lighter"
                                                                    href="#"><i class="fa fa-male"></i> Justin
                                                                    Bieber</a></li>
                                                            <li style="margin-right: 16px;"><a class="font-lighter"
                                                                    href="#"><i class="fa fa-music"></i> Hip Hop</a>
                                                            </li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../img/album4.jpg">
                                                        <div class="album-badge">
                                                            <p class="p-2 px-4 mb-0 text-white">Sept 16</p>
                                                        </div>
                                                        <a href="#" class="el-overlay">
                                                            <div class="centered">
                                                                <i class="fa fa-play-circle-o fa-3x"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="alb-info">
                                                        <a href="#" class="font-bold">Staying Out All Night</a>
                                                        <ul class="m-t-5" style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a class="font-lighter"
                                                                    href="#"><i class="fa fa-male"></i> Justin
                                                                    Bieber</a></li>
                                                            <li style="margin-right: 16px;"><a class="font-lighter"
                                                                    href="#"><i class="fa fa-music"></i> Hip Hop</a>
                                                            </li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="white-box">
                                        <h3 class="box-title">Albums You SHARED</h3>

                                        <div class="row el-element-overlay">
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../img/album8.jpg">
                                                        <div class="album-badge">
                                                            <p class="p-2 px-4 mb-0 text-white">Sept 16</p>
                                                        </div>
                                                        <a href="#" class="el-overlay">
                                                            <div class="centered">
                                                                <i class="fa fa-play-circle-o fa-3x"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="alb-info">
                                                        <a href="#" class="font-bold">Staying Out All Night</a>
                                                        <ul class="m-t-5" style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a class="font-lighter"
                                                                    href="#"><i class="fa fa-male"></i> Justin
                                                                    Bieber</a></li>
                                                            <li style="margin-right: 16px;"><a class="font-lighter"
                                                                    href="#"><i class="fa fa-music"></i> Hip Hop</a>
                                                            </li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../img/album6.jpg">
                                                        <div class="album-badge">
                                                            <p class="p-2 px-4 mb-0 text-white">Sept 16</p>
                                                        </div>
                                                        <a href="#" class="el-overlay">
                                                            <div class="centered">
                                                                <i class="fa fa-play-circle-o fa-3x"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="alb-info">
                                                        <a href="#" class="font-bold">Staying Out All Night</a>
                                                        <ul class="m-t-5" style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a class="font-lighter"
                                                                    href="#"><i class="fa fa-male"></i> Justin
                                                                    Bieber</a></li>
                                                            <li style="margin-right: 16px;"><a class="font-lighter"
                                                                    href="#"><i class="fa fa-music"></i> Hip Hop</a>
                                                            </li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../img/album5.jpg">
                                                        <div class="album-badge">
                                                            <p class="p-2 px-4 mb-0 text-white">Sept 16</p>
                                                        </div>
                                                        <a href="#" class="el-overlay">
                                                            <div class="centered">
                                                                <i class="fa fa-play-circle-o fa-3x"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="alb-info">
                                                        <a href="#" class="font-bold">Staying Out All Night</a>
                                                        <ul class="m-t-5" style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a class="font-lighter"
                                                                    href="#"><i class="fa fa-male"></i> Justin
                                                                    Bieber</a></li>
                                                            <li style="margin-right: 16px;"><a class="font-lighter"
                                                                    href="#"><i class="fa fa-music"></i> Hip Hop</a>
                                                            </li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="white-box">
                                        <h3 class="box-title">Albums You COMMENTED</h3>

                                        <div class="row el-element-overlay">
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../img/album12.jpg">
                                                        <div class="album-badge">
                                                            <p class="p-2 px-4 mb-0 text-white">Sept 16</p>
                                                        </div>
                                                        <a href="#" class="el-overlay">
                                                            <div class="centered">
                                                                <i class="fa fa-play-circle-o fa-3x"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="alb-info">
                                                        <a href="#" class="font-bold">Staying Out All Night</a>
                                                        <ul class="m-t-5" style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a class="font-lighter"
                                                                    href="#"><i class="fa fa-male"></i> Justin
                                                                    Bieber</a></li>
                                                            <li style="margin-right: 16px;"><a class="font-lighter"
                                                                    href="#"><i class="fa fa-music"></i> Hip Hop</a>
                                                            </li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../img/album9.jpg">
                                                        <div class="album-badge">
                                                            <p class="p-2 px-4 mb-0 text-white">Sept 16</p>
                                                        </div>
                                                        <a href="#" class="el-overlay">
                                                            <div class="centered">
                                                                <i class="fa fa-play-circle-o fa-3x"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="alb-info">
                                                        <a href="#" class="font-bold">Staying Out All Night</a>
                                                        <ul class="m-t-5" style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a class="font-lighter"
                                                                    href="#"><i class="fa fa-male"></i> Justin
                                                                    Bieber</a></li>
                                                            <li style="margin-right: 16px;"><a class="font-lighter"
                                                                    href="#"><i class="fa fa-music"></i> Hip Hop</a>
                                                            </li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../img/album3.jpg">
                                                        <div class="album-badge">
                                                            <p class="p-2 px-4 mb-0 text-white">Sept 16</p>
                                                        </div>
                                                        <a href="#" class="el-overlay">
                                                            <div class="centered">
                                                                <i class="fa fa-play-circle-o fa-3x"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="alb-info">
                                                        <a href="#" class="font-bold">Staying Out All Night</a>
                                                        <ul class="m-t-5" style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a class="font-lighter"
                                                                    href="#"><i class="fa fa-male"></i> Justin
                                                                    Bieber</a></li>
                                                            <li style="margin-right: 16px;"><a class="font-lighter"
                                                                    href="#"><i class="fa fa-music"></i> Hip Hop</a>
                                                            </li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="cancellation">
                                    <div class="white-box">
                                        <h3 class="box-title">Discussions You Like</h3>

                                        <div class="row el-element-overlay">
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../images/vd3.jpg">
                                                        <div class="el-overlay">
                                                            <ul class="el-info">
                                                                <li><a class="btn default btn-outline" href="#"><i
                                                                            class="fa fa-play-circle-o fa-3x"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                                            <i class="fa fa-share-alt"></i>
                                                        </span>
                                                        <span class="vd-time badge bg-inverse hidden-xs">03:30</span>
                                                    </div>
                                                    <div class="alb-info">
                                                        <h5 class="m-b-5">Discussion 100</h5>
                                                        <ul style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i
                                                                        class="fa fa-eye"></i></a>
                                                                5.65M</li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-thumbs-up"></i>
                                                                    4356</a></li>
                                                            <li><a href="#" class="font-lighter"><i
                                                                        class="fa fa-thumbs-down"></i> 123</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../images/vd14.jpg">
                                                        <div class="el-overlay">
                                                            <ul class="el-info">
                                                                <li><a class="btn default btn-outline" href="#"><i
                                                                            class="fa fa-play-circle-o fa-3x"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                                            <i class="fa fa-share-alt"></i>
                                                        </span>
                                                        <span class="vd-time badge bg-inverse hidden-xs">03:10</span>
                                                    </div>
                                                    <div class="alb-info">
                                                        <h5 class="m-b-5">Discussion 101</h5>
                                                        <ul style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i
                                                                        class="fa fa-eye"></i></a>
                                                                5.65M</li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-thumbs-up"></i>
                                                                    4356</a></li>
                                                            <li><a href="#" class="font-lighter"><i
                                                                        class="fa fa-thumbs-down"></i> 123</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../images/vd13.jpg">
                                                        <div class="el-overlay">
                                                            <ul class="el-info">
                                                                <li><a class="btn default btn-outline" href="#"><i
                                                                            class="fa fa-play-circle-o fa-3x"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                                            <i class="fa fa-share-alt"></i>
                                                        </span>
                                                        <span class="vd-time badge bg-inverse hidden-xs">04:30</span>
                                                    </div>
                                                    <div class="alb-info">
                                                        <h5 class="m-b-5">Discussion 102</h5>
                                                        <ul style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i
                                                                        class="fa fa-eye"></i></a>
                                                                5.65M</li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-thumbs-up"></i>
                                                                    4356</a></li>
                                                            <li><a href="#" class="font-lighter"><i
                                                                        class="fa fa-thumbs-down"></i> 123</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="white-box">
                                        <h3 class="box-title">Discussions You Shared</h3>

                                        <div class="row el-element-overlay">
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../images/vd6.jpg">
                                                        <div class="el-overlay">
                                                            <ul class="el-info">
                                                                <li><a class="btn default btn-outline" href="#"><i
                                                                            class="fa fa-play-circle-o fa-3x"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                                            <i class="fa fa-share-alt"></i>
                                                        </span>
                                                        <span class="vd-time badge bg-inverse hidden-xs">03:30</span>
                                                    </div>
                                                    <div class="alb-info">
                                                        <h5 class="m-b-5">Discussion 100</h5>
                                                        <ul style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i
                                                                        class="fa fa-eye"></i></a>
                                                                5.65M</li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-thumbs-up"></i>
                                                                    4356</a></li>
                                                            <li><a href="#" class="font-lighter"><i
                                                                        class="fa fa-thumbs-down"></i> 123</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../images/vd5.jpg">
                                                        <div class="el-overlay">
                                                            <ul class="el-info">
                                                                <li><a class="btn default btn-outline" href="#"><i
                                                                            class="fa fa-play-circle-o fa-3x"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                                            <i class="fa fa-share-alt"></i>
                                                        </span>
                                                        <span class="vd-time badge bg-inverse hidden-xs">03:10</span>
                                                    </div>
                                                    <div class="alb-info">
                                                        <h5 class="m-b-5">Discussion 101</h5>
                                                        <ul style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i
                                                                        class="fa fa-eye"></i></a>
                                                                5.65M</li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-thumbs-up"></i>
                                                                    4356</a></li>
                                                            <li><a href="#" class="font-lighter"><i
                                                                        class="fa fa-thumbs-down"></i> 123</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../images/vd2.jpg">
                                                        <div class="el-overlay">
                                                            <ul class="el-info">
                                                                <li><a class="btn default btn-outline" href="#"><i
                                                                            class="fa fa-play-circle-o fa-3x"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                                            <i class="fa fa-share-alt"></i>
                                                        </span>
                                                        <span class="vd-time badge bg-inverse hidden-xs">04:30</span>
                                                    </div>
                                                    <div class="alb-info">
                                                        <h5 class="m-b-5">Discussion 102</h5>
                                                        <ul style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i
                                                                        class="fa fa-eye"></i></a>
                                                                5.65M</li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-thumbs-up"></i>
                                                                    4356</a></li>
                                                            <li><a href="#" class="font-lighter"><i
                                                                        class="fa fa-thumbs-down"></i> 123</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="white-box">
                                        <h3 class="box-title">Discussions You Commented</h3>

                                        <div class="row el-element-overlay">
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../images/vd4.jpg">
                                                        <div class="el-overlay">
                                                            <ul class="el-info">
                                                                <li><a class="btn default btn-outline" href="#"><i
                                                                            class="fa fa-play-circle-o fa-3x"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                                            <i class="fa fa-share-alt"></i>
                                                        </span>
                                                        <span class="vd-time badge bg-inverse hidden-xs">03:30</span>
                                                    </div>
                                                    <div class="alb-info">
                                                        <h5 class="m-b-5">Discussion 100</h5>
                                                        <ul style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i
                                                                        class="fa fa-eye"></i></a>
                                                                5.65M</li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-thumbs-up"></i>
                                                                    4356</a></li>
                                                            <li><a href="#" class="font-lighter"><i
                                                                        class="fa fa-thumbs-down"></i> 123</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../images/vd8.jpg">
                                                        <div class="el-overlay">
                                                            <ul class="el-info">
                                                                <li><a class="btn default btn-outline" href="#"><i
                                                                            class="fa fa-play-circle-o fa-3x"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                                            <i class="fa fa-share-alt"></i>
                                                        </span>
                                                        <span class="vd-time badge bg-inverse hidden-xs">03:10</span>
                                                    </div>
                                                    <div class="alb-info">
                                                        <h5 class="m-b-5">Discussion 101</h5>
                                                        <ul style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i
                                                                        class="fa fa-eye"></i></a>
                                                                5.65M</li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-thumbs-up"></i>
                                                                    4356</a></li>
                                                            <li><a href="#" class="font-lighter"><i
                                                                        class="fa fa-thumbs-down"></i> 123</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                <div class="el-card-item p-b-0">
                                                    <div class="el-card-avatar el-overlay-1"> <img
                                                            src="../../images/vd1.jpg">
                                                        <div class="el-overlay">
                                                            <ul class="el-info">
                                                                <li><a class="btn default btn-outline" href="#"><i
                                                                            class="fa fa-play-circle-o fa-3x"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                                            <i class="fa fa-share-alt"></i>
                                                        </span>
                                                        <span class="vd-time badge bg-inverse hidden-xs">04:30</span>
                                                    </div>
                                                    <div class="alb-info">
                                                        <h5 class="m-b-5">Discussion 102</h5>
                                                        <ul style="display: flex; font-size: 14px;">
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i
                                                                        class="fa fa-eye"></i></a>
                                                                5.65M</li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-heart"></i>
                                                                    4.25M</a></li>
                                                            <li style="margin-right: 16px;"><a href="#"
                                                                    class="font-lighter"><i class="fa fa-thumbs-up"></i>
                                                                    4356</a></li>
                                                            <li><a href="#" class="font-lighter"><i
                                                                        class="fa fa-thumbs-down"></i> 123</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
