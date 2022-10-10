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
                            @foreach ($videos as $video  )
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="el-card-item">
                                    
                                    <div class="el-card-avatar el-overlay-1"> <img src="{{asset('pictures/'.$video->picture)}}">
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
                                        <h5 class="m-b-5">{{$video->title}}</h5>
                                        <ul style="display: flex; font-size: 14px;">
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                        class="fa fa-eye"></i> {{$video->nbr_views}}</a></li>
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"
                                                    data-toggle="tooltip" data-placement="top" title="Unfavourite"><i
                                                        class="text-danger fa fa-heart"></i>{{$video->nbr_like}}</a></li>
                                            <li style="margin-right: 16px;"><a href="#" class="font-lighter"><i
                                                        class="fa fa-thumbs-up"></i> {{$video->nbr_like}}</a></li>
                                            <li><a href="#" class="font-lighter"><i class="fa fa-thumbs-down"></i> {{$video->nbr_dislike}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>  
                            @endforeach 
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <ul class="pagination pagination-split">
                                    <li class="disabled"> <a href="#"><i class="fa fa-angle-left"></i></a> </li>
                                    <li class="active"> <a href="#">1</a> </li>
                                    <li> <a href="#"><i class="fa fa-angle-right"></i></a> </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    @endsection
