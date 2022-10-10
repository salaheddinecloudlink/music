<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.head');
</head>

<body class="fix-sidebar fix-header">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
       
        @include('admin.navbar');

        @include('admin.leftnavbar');
        
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-xs-12">
                        <h4 class="page-title">Favourite Discussions</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">All Discussions
                                <a class="btn btn-success pull-right" href="#" data-toggle="modal"
                                    data-target="#video-add">Add Discussion</a>
                            </h3>

                            <hr>

                            <div class="row el-element-overlay">
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd3.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">03:30</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 100</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd14.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">03:10</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 101</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd13.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">04:30</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 102</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd12.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">03:47</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 103</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd8.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">05:23</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 104</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd4.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">02:30</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 105</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd5.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">03:20</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 106</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd11.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">04:30</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 107</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd3.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">03:30</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 108</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd14.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">03:10</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 109</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd13.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">04:30</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 110</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd12.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">03:47</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 111</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd8.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">05:23</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 112</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd4.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">02:30</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 113</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="../../images/vd5.jpg">
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal"
                                                            data-target="#video-edit"><i
                                                                class="fa fa-pencil fa-2x"></i></a></li>
                                                    <li><a class="btn default btn-outline" href="#"><i
                                                                class="fa fa-trash fa-2x"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="vd-time badge bg-inverse hidden-xs">03:20</span>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="m-b-5">Discussion 114</h5>
                                            <ul style="display: flex; font-size: 14px;">
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-eye"></i> 5.65M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                        title="Unfavourite"><i class="fa fa-heart"></i>
                                                        4.25M</a></li>
                                                <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                            class="fa fa-thumbs-up"></i> 4356</a></li>
                                                <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i>
                                                        123</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="pagination pagination-split">
                                        <li class="disabled"> <a href="#"><i class="fa fa-angle-left"></i></a> </li>
                                        <li class="active"> <a href="#">1</a> </li>
                                        <li> <a href="#">2</a> </li>
                                        <li> <a href="#">3</a> </li>
                                        <li> <a href="#">4</a> </li>
                                        <li> <a href="#">5</a> </li>
                                        <li> <a href="#"><i class="fa fa-angle-right"></i></a> </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div id="video-add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Add New Discussion</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-material form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-12" for="title">Discussion Title<span class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <input type="text" id="title" name="title" class="form-control"
                                            placeholder="Discussion Title">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="title">Discussion #<span class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <input type="text" id="title" name="title" class="form-control"
                                            placeholder="Discussion No">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="title">Link to Artist Page(optional)</label>
                                    <div class="col-md-12">
                                        <select class="form-control" required="">
                                                    <option selected="">Select Artist page</option>
                                                    <option >Justin Bieber</option>
                                                    <option>Selena gomez</option>
                                                </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Choose Discussion<span class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <label class="custom-file">
                                            <input type="file" id="file" class="custom-file-input">
                                            <span class="custom-file-control"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">Description<span class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Upload
                                    Discussion</button>
                                <button type="button" class="btn btn-inverse waves-effect waves-light"
                                    data-dismiss="modal">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div id="video-edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Edit Discussion</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-material form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-12" for="title">Discussion Title<span class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <input type="text" id="title" name="title" class="form-control"
                                            placeholder="Discussion Title" value="Discussion">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="title">Discussion #<span class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <input type="text" id="title" name="title" class="form-control"
                                            placeholder="Discussion No" value="100">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="title">Link to Artist Page(optional)</label>
                                    <div class="col-md-12">
                                        <select class="form-control" required="">
                                                    <option >Select Artist page</option>
                                                    <option selected="">Justin Bieber</option>
                                                    <option>Selena gomez</option>
                                                </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Choose Discussion<span class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <label class="custom-file">
                                            <input type="file" id="file" class="custom-file-input">
                                            <span class="custom-file-control"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">Description<span class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="3">Lorem Ipsum</textarea>
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update
                                    Discussion</button>
                                <button type="button" class="btn btn-inverse waves-effect waves-light"
                                    data-dismiss="modal">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer">
                <div class="row">
                    <div class="col-lg-2 col-md-12 col-sm-12 m-b-40">
                        <div class="d-flex align-items-center justify-content-center">
                            <div>
                                <img src="../../images/logo.png" class="img-responsive home-logo" alt="">
                            </div>
                        </div>
                        <div class="text-center m-t-20">
                            <div class="text-center artist-social">
                                <a href="javascript: void(0);" class="footer-icon"><i
                                        class="fa fa-facebook fa-2x"></i></a>
                                <a href="javascript: void(0);" class="footer-icon"><i
                                        class="fa fa-twitter fa-2x"></i></a>
                                <a href="javascript: void(0);" class="footer-icon"><i
                                        class="fa fa-instagram fa-2x"></i></a>
                                <a href="javascript: void(0);" class="footer-icon"><i
                                        class="fa fa-youtube-play fa-2x"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 col-6 m-b-20">
                        <ul class="firstChild">
                            <li class="pb-2"><a href="javascript: void(0);"
                                    class="fs-16 text-white footer-link">Home</a></li>
                            <li class="pb-2"><a href="javascript: void(0);"
                                    class="fs-16 text-white footer-link">Events</a>
                            </li>
                            <li class="pb-2"><a href="javascript: void(0);"
                                    class="fs-16 text-white footer-link">Artist</a>
                            </li>
                            <li><a href="javascript: void(0);" class="fs-16 text-white footer-link">About Us</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 col-6 m-b-20">
                        <ul>
                            <li class="pb-2"><a href="javascript: void(0);"
                                    class="fs-16 text-white footer-link">News</a></li>
                            <li class="pb-2"><a href="javascript: void(0);"
                                    class="fs-16 text-white footer-link">Music</a></li>
                            <li class="pb-2"><a href="javascript: void(0);"
                                    class="fs-16 text-white footer-link">Fans</a></li>
                            <li><a href="javascript: void(0);" class="fs-16 text-white footer-link">Discussion</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 col-6 m-b-20">
                        <ul>
                            <li class="pb-2"><a href="javascript: void(0);"
                                    class="fs-16 text-white footer-link">Advertise With
                                    Us</a>
                            </li>
                            <li class="pb-2"><a href="javascript: void(0);"
                                    class="fs-16 text-white footer-link">Privacy</a>
                            </li>
                            <li class="pb-2"><a href="javascript: void(0);"
                                    class="fs-16 text-white footer-link">Copyright</a>
                            </li>
                            <li class="pb-2"><a href="javascript: void(0);"
                                    class="fs-16 text-white footer-link">Featured</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 col-6 m-b-20">
                        <ul>
                            <li class="pb-2"><a href="javascript: void(0);"
                                    class="fs-16 text-white footer-link">Refunds</a>
                            </li>
                            <li class="pb-2"><a href="javascript: void(0);"
                                    class="fs-16 text-white footer-link">Privacy</a>
                            </li>
                            <li><a href="javascript: void(0);" class="fs-16 text-white footer-link">Trademark</a></li>
                            <li><a href="javascript: void(0);" class="fs-16 text-white footer-link">Faq</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 col-6 m-b-20">
                        <ul>
                            <li class="pb-2"><a href="javascript: void(0);"
                                    class="fs-16 text-white footer-link">Pricing</a>
                            </li>
                            <li class="pb-2"><a href="javascript: void(0);" class="fs-16 text-white footer-link">Event
                                    finder</a>
                            </li>
                            <li class="pb-2"><a href="javascript: void(0);" class="fs-16 text-white footer-link">Contact
                                    Us</a>
                            </li>
                            <li><a href="javascript: void(0);" class="fs-16 text-white footer-link">Terms Of Use</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
        
    </div>

    @include('admin.script');
</body>
</html>