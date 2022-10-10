<<<<<<< HEAD


@extends('layouts.master')
@section('content')
      <div id="page-wrapper">
         <div class="container-fluid">
            <div class="row bg-title">
               <div class="col-xs-12">
                  <h4 class="page-title">Favourite Videos</h4>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <div class="white-box">
                     <h3 class="box-title">My Favourite Videos
                     </h3>

                     <div class="row el-element-overlay">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                           <div class="el-card-item">
                              <div class="el-card-avatar el-overlay-1"> <img src="{{ asset('external/images/vd3.jpg') }}">
                                 <div class="el-overlay">
                                    <ul class="el-info">
                                       <li><a class="btn default btn-outline" href="#"><i
                                                class="fa fa-play-circle-o fa-3x"></i></a></li>
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
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-eye"></i> 5.65M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter" data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                             class="text-danger fa fa-heart"></i> 4.25M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-thumbs-up"></i> 4356</a></li>
                                    <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i> 123</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                           <div class="el-card-item">
                              <div class="el-card-avatar el-overlay-1"> <img src="external/images/vd14.jpg">
                                 <div class="el-overlay">
                                    <ul class="el-info">
                                       <li><a class="btn default btn-outline" href="#"><i
                                                class="fa fa-play-circle-o fa-3x"></i></a></li>
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
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-eye"></i> 5.65M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter" data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                             class="text-danger fa fa-heart"></i> 4.25M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-thumbs-up"></i> 4356</a></li>
                                    <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i> 123</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                           <div class="el-card-item">
                              <div class="el-card-avatar el-overlay-1"> <img src="external/images/vd13.jpg">
                                 <div class="el-overlay">
                                    <ul class="el-info">
                                       <li><a class="btn default btn-outline" href="#"><i
                                                class="fa fa-play-circle-o fa-3x"></i></a></li>
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
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-eye"></i> 5.65M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter" data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                             class="text-danger fa fa-heart"></i> 4.25M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-thumbs-up"></i> 4356</a></li>
                                    <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i> 123</a></li>
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
                                                class="fa fa-play-circle-o fa-3x"></i></a></li>
                                    </ul>
                                 </div>
                                 <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                    <i class="fa fa-share-alt"></i>
                                 </span>
                                 <span class="vd-time badge bg-inverse hidden-xs">03:47</span>
                              </div>
                              <div class="alb-info">
                                 <h5 class="m-b-5">Two Fireflies</h5>
                                 <ul style="display: flex; font-size: 14px;">
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-eye"></i> 5.65M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter" data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                             class="text-danger fa fa-heart"></i> 4.25M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-thumbs-up"></i> 4356</a></li>
                                    <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i> 123</a></li>
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
                                                class="fa fa-play-circle-o fa-3x"></i></a></li>
                                    </ul>
                                 </div>
                                 <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                    <i class="fa fa-share-alt"></i>
                                 </span>
                                 <span class="vd-time badge bg-inverse hidden-xs">05:23</span>
                              </div>
                              <div class="alb-info">
                                 <h5 class="m-b-5">Pathetic Society</h5>
                                 <ul style="display: flex; font-size: 14px;">
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-eye"></i> 5.65M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter" data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                             class="text-danger fa fa-heart"></i> 4.25M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-thumbs-up"></i> 4356</a></li>
                                    <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i> 123</a></li>
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
                                                class="fa fa-play-circle-o fa-3x"></i></a></li>
                                    </ul>
                                 </div>
                                 <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                    <i class="fa fa-share-alt"></i>
                                 </span>
                                 <span class="vd-time badge bg-inverse hidden-xs">02:30</span>
                              </div>
                              <div class="alb-info">
                                 <h5 class="m-b-5">The Nuke Zoned</h5>
                                 <ul style="display: flex; font-size: 14px;">
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-eye"></i> 5.65M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter" data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                             class="text-danger fa fa-heart"></i> 4.25M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-thumbs-up"></i> 4356</a></li>
                                    <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i> 123</a></li>
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
                                                class="fa fa-play-circle-o fa-3x"></i></a></li>
                                    </ul>
                                 </div>
                                 <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                    <i class="fa fa-share-alt"></i>
                                 </span>
                                 <span class="vd-time badge bg-inverse hidden-xs">03:20</span>
                              </div>
                              <div class="alb-info">
                                 <h5 class="m-b-5">The Karaoke Night</h5>
                                 <ul style="display: flex; font-size: 14px;">
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-eye"></i> 5.65M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter" data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                             class="text-danger fa fa-heart"></i> 4.25M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-thumbs-up"></i> 4356</a></li>
                                    <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i> 123</a></li>
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
                                                class="fa fa-play-circle-o fa-3x"></i></a></li>
                                    </ul>
                                 </div>
                                 <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                    <i class="fa fa-share-alt"></i>
                                 </span>
                                 <span class="vd-time badge bg-inverse hidden-xs">04:30</span>
                              </div>
                              <div class="alb-info">
                                 <h5 class="m-b-5">Suger-Salt</h5>
                                 <ul style="display: flex; font-size: 14px;">
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-eye"></i> 5.65M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter" data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                             class="text-danger fa fa-heart"></i> 4.25M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-thumbs-up"></i> 4356</a></li>
                                    <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i> 123</a></li>
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
                                                class="fa fa-play-circle-o fa-3x"></i></a></li>
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
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-eye"></i> 5.65M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter" data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                             class="text-danger fa fa-heart"></i> 4.25M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-thumbs-up"></i> 4356</a></li>
                                    <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i> 123</a></li>
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
                                                class="fa fa-play-circle-o fa-3x"></i></a></li>
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
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-eye"></i> 5.65M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter" data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                             class="text-danger fa fa-heart"></i> 4.25M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-thumbs-up"></i> 4356</a></li>
                                    <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i> 123</a></li>
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
                                                class="fa fa-play-circle-o fa-3x"></i></a></li>
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
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-eye"></i> 5.65M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter" data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                             class="text-danger fa fa-heart"></i> 4.25M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-thumbs-up"></i> 4356</a></li>
                                    <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i> 123</a></li>
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
                                                class="fa fa-play-circle-o fa-3x"></i></a></li>
                                    </ul>
                                 </div>
                                 <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                    <i class="fa fa-share-alt"></i>
                                 </span>
                                 <span class="vd-time badge bg-inverse hidden-xs">03:47</span>
                              </div>
                              <div class="alb-info">
                                 <h5 class="m-b-5">Two Fireflies</h5>
                                 <ul style="display: flex; font-size: 14px;">
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-eye"></i> 5.65M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter" data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                             class="text-danger fa fa-heart"></i> 4.25M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-thumbs-up"></i> 4356</a></li>
                                    <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i> 123</a></li>
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
                                                class="fa fa-play-circle-o fa-3x"></i></a></li>
                                    </ul>
                                 </div>
                                 <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                    <i class="fa fa-share-alt"></i>
                                 </span>
                                 <span class="vd-time badge bg-inverse hidden-xs">05:23</span>
                              </div>
                              <div class="alb-info">
                                 <h5 class="m-b-5">Pathetic Society</h5>
                                 <ul style="display: flex; font-size: 14px;">
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-eye"></i> 5.65M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter" data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                             class="text-danger fa fa-heart"></i> 4.25M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-thumbs-up"></i> 4356</a></li>
                                    <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i> 123</a></li>
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
                                                class="fa fa-play-circle-o fa-3x"></i></a></li>
                                    </ul>
                                 </div>
                                 <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                    <i class="fa fa-share-alt"></i>
                                 </span>
                                 <span class="vd-time badge bg-inverse hidden-xs">02:30</span>
                              </div>
                              <div class="alb-info">
                                 <h5 class="m-b-5">The Nuke Zoned</h5>
                                 <ul style="display: flex; font-size: 14px;">
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-eye"></i> 5.65M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter" data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                             class="text-danger fa fa-heart"></i> 4.25M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-thumbs-up"></i> 4356</a></li>
                                    <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i> 123</a></li>
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
                                                class="fa fa-play-circle-o fa-3x"></i></a></li>
                                    </ul>
                                 </div>
                                 <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                    <i class="fa fa-share-alt"></i>
                                 </span>
                                 <span class="vd-time badge bg-inverse hidden-xs">03:20</span>
                              </div>
                              <div class="alb-info">
                                 <h5 class="m-b-5">The Karaoke Night</h5>
                                 <ul style="display: flex; font-size: 14px;">
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-eye"></i> 5.65M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter" data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                             class="text-danger fa fa-heart"></i> 4.25M</a></li>
                                    <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                             class="fa fa-thumbs-up"></i> 4356</a></li>
                                    <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i> 123</a></li>
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
         @endsection
         <!-- /.container-fluid -->
=======
@extends('layouts.master')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-xs-12">
                    <h4 class="page-title">Favourite Videos</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">My Favourite Videos
                        </h3>

                        <div class="row el-element-overlay">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="el-card-item">
                                    <div class="el-card-avatar el-overlay-1"> <img
                                            src="{{ asset('external/images/vd3.jpg') }}">
                                        <div class="el-overlay">
                                            <ul class="el-info">
                                                <li><a class="btn default btn-outline" href="#"><i
                                                            class="fa fa-play-circle-o fa-3x"></i></a></li>
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
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                        class="fa fa-eye"></i> 5.65M</a></li>
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                    data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                                        class="text-danger fa fa-heart"></i> 4.25M</a></li>
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                        class="fa fa-thumbs-up"></i> 4356</a></li>
                                            <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i> 123</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="el-card-item">
                                    <div class="el-card-avatar el-overlay-1"> <img src="external/images/vd14.jpg">
                                        <div class="el-overlay">
                                            <ul class="el-info">
                                                <li><a class="btn default btn-outline" href="#"><i
                                                            class="fa fa-play-circle-o fa-3x"></i></a></li>
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
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                        class="fa fa-eye"></i> 5.65M</a></li>
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                    data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                                        class="text-danger fa fa-heart"></i> 4.25M</a></li>
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                        class="fa fa-thumbs-up"></i> 4356</a></li>
                                            <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i> 123</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="el-card-item">
                                    <div class="el-card-avatar el-overlay-1"> <img src="external/images/vd13.jpg">
                                        <div class="el-overlay">
                                            <ul class="el-info">
                                                <li><a class="btn default btn-outline" href="#"><i
                                                            class="fa fa-play-circle-o fa-3x"></i></a></li>
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
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                        class="fa fa-eye"></i> 5.65M</a></li>
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                    data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                                        class="text-danger fa fa-heart"></i> 4.25M</a></li>
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                        class="fa fa-thumbs-up"></i> 4356</a></li>
                                            <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i> 123</a>
                                            </li>
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
                                                            class="fa fa-play-circle-o fa-3x"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                            <i class="fa fa-share-alt"></i>
                                        </span>
                                        <span class="vd-time badge bg-inverse hidden-xs">03:47</span>
                                    </div>
                                    <div class="alb-info">
                                        <h5 class="m-b-5">Two Fireflies</h5>
                                        <ul style="display: flex; font-size: 14px;">
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                        class="fa fa-eye"></i> 5.65M</a></li>
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                    data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                                        class="text-danger fa fa-heart"></i> 4.25M</a></li>
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                        class="fa fa-thumbs-up"></i> 4356</a></li>
                                            <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i> 123</a>
                                            </li>
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
                                                            class="fa fa-play-circle-o fa-3x"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                            <i class="fa fa-share-alt"></i>
                                        </span>
                                        <span class="vd-time badge bg-inverse hidden-xs">05:23</span>
                                    </div>
                                    <div class="alb-info">
                                        <h5 class="m-b-5">Pathetic Society</h5>
                                        <ul style="display: flex; font-size: 14px;">
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                        class="fa fa-eye"></i> 5.65M</a></li>
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                    data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                                        class="text-danger fa fa-heart"></i> 4.25M</a></li>
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
                                                            class="fa fa-play-circle-o fa-3x"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                            <i class="fa fa-share-alt"></i>
                                        </span>
                                        <span class="vd-time badge bg-inverse hidden-xs">02:30</span>
                                    </div>
                                    <div class="alb-info">
                                        <h5 class="m-b-5">The Nuke Zoned</h5>
                                        <ul style="display: flex; font-size: 14px;">
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                        class="fa fa-eye"></i> 5.65M</a></li>
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                    data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                                        class="text-danger fa fa-heart"></i> 4.25M</a></li>
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
                                                            class="fa fa-play-circle-o fa-3x"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                            <i class="fa fa-share-alt"></i>
                                        </span>
                                        <span class="vd-time badge bg-inverse hidden-xs">03:20</span>
                                    </div>
                                    <div class="alb-info">
                                        <h5 class="m-b-5">The Karaoke Night</h5>
                                        <ul style="display: flex; font-size: 14px;">
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                        class="fa fa-eye"></i> 5.65M</a></li>
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                    data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                                        class="text-danger fa fa-heart"></i> 4.25M</a></li>
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
                                                            class="fa fa-play-circle-o fa-3x"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                            <i class="fa fa-share-alt"></i>
                                        </span>
                                        <span class="vd-time badge bg-inverse hidden-xs">04:30</span>
                                    </div>
                                    <div class="alb-info">
                                        <h5 class="m-b-5">Suger-Salt</h5>
                                        <ul style="display: flex; font-size: 14px;">
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                        class="fa fa-eye"></i> 5.65M</a></li>
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                    data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                                        class="text-danger fa fa-heart"></i> 4.25M</a></li>
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
                                                            class="fa fa-play-circle-o fa-3x"></i></a></li>
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
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                        class="fa fa-eye"></i> 5.65M</a></li>
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                    data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                                        class="text-danger fa fa-heart"></i> 4.25M</a></li>
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
                                                            class="fa fa-play-circle-o fa-3x"></i></a></li>
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
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                        class="fa fa-eye"></i> 5.65M</a></li>
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                    data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                                        class="text-danger fa fa-heart"></i> 4.25M</a></li>
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
                                                            class="fa fa-play-circle-o fa-3x"></i></a></li>
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
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                        class="fa fa-eye"></i> 5.65M</a></li>
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                    data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                                        class="text-danger fa fa-heart"></i> 4.25M</a></li>
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
                                                            class="fa fa-play-circle-o fa-3x"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                            <i class="fa fa-share-alt"></i>
                                        </span>
                                        <span class="vd-time badge bg-inverse hidden-xs">03:47</span>
                                    </div>
                                    <div class="alb-info">
                                        <h5 class="m-b-5">Two Fireflies</h5>
                                        <ul style="display: flex; font-size: 14px;">
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                        class="fa fa-eye"></i> 5.65M</a></li>
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                    data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                                        class="text-danger fa fa-heart"></i> 4.25M</a></li>
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
                                                            class="fa fa-play-circle-o fa-3x"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                            <i class="fa fa-share-alt"></i>
                                        </span>
                                        <span class="vd-time badge bg-inverse hidden-xs">05:23</span>
                                    </div>
                                    <div class="alb-info">
                                        <h5 class="m-b-5">Pathetic Society</h5>
                                        <ul style="display: flex; font-size: 14px;">
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                        class="fa fa-eye"></i> 5.65M</a></li>
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                    data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                                        class="text-danger fa fa-heart"></i> 4.25M</a></li>
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
                                                            class="fa fa-play-circle-o fa-3x"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                            <i class="fa fa-share-alt"></i>
                                        </span>
                                        <span class="vd-time badge bg-inverse hidden-xs">02:30</span>
                                    </div>
                                    <div class="alb-info">
                                        <h5 class="m-b-5">The Nuke Zoned</h5>
                                        <ul style="display: flex; font-size: 14px;">
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                        class="fa fa-eye"></i> 5.65M</a></li>
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                    data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                                        class="text-danger fa fa-heart"></i> 4.25M</a></li>
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
                                                            class="fa fa-play-circle-o fa-3x"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="vd-share cursor-pointer badge bg-inverse hidden-xs">
                                            <i class="fa fa-share-alt"></i>
                                        </span>
                                        <span class="vd-time badge bg-inverse hidden-xs">03:20</span>
                                    </div>
                                    <div class="alb-info">
                                        <h5 class="m-b-5">The Karaoke Night</h5>
                                        <ul style="display: flex; font-size: 14px;">
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                        class="fa fa-eye"></i> 5.65M</a></li>
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                    data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                                        class="text-danger fa fa-heart"></i> 4.25M</a></li>
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
    @endsection
    <!-- /.container-fluid -->
>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9
