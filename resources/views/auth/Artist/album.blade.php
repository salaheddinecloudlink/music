@extends('layouts.main_artist')
@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
    <div class="row bg-title">
        <div class="col-xs-12">
            <h4 class="page-title">Albums</h4>
        </div>
    </div>

    @if (Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <!-- .row -->
    <div class="row el-element-overlay">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">My Albums
                    <button class="btn btn-success pull-right" data-toggle="modal" data-target="#album-add">Create
                        Album</button>
                </h3>
                <input type="hidden" name="" id="v" value="{{ $v ?? "no" }}">
                <hr>
                <div class="row">
                    @if (count($albums) > 0)
                        @foreach ($albums as $album)
                            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                <div class="el-card-item">
                                    <div class="el-card-avatar el-overlay-1"> <img
                                            src="{{ asset('pictures/' . $album->picture) }}" />
                                        <div class="el-overlay">
                                            <ul class="el-info">
                                                <li><a class="btn default btn-outline" href="{{ route('artist.album_details', ['id' => $album->id]) }}" data-id="{{ $album->id }}"><i
                                                            class="fa fa-play-circle-o fa-2x"></i></a></li>
                                                <li><a class="btn default btn-outline"  href="{{ route('artist.edit_album', ['id' => $album->id]) }}" 
                                                    data-id="{{ $album->id }}" ><i class="fa fa-pencil fa-2x"></i></a>
                                                </li>

                                                <form action="{{ route('artist.destroy_album') }}" method="POST"
                                                    onsubmit="return confirm('Do you want to delete?')">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $album->id }}">
                                                    
                                                    <li><button type="submit" class="btn default btn-outline"><i
                                                                class="fa fa-trash fa-2x"></i></button></li>
                                                </form>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="alb-info">
                                        <h5>{{$album->album_name}}</h5>
                                        <h6 class="text-muted">Sourcerer</h6>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h5 class="text-muted">No Albums to display</h5>
                    @endif
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- .row -->

        <!-- /.row -->
        <div id="album-add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true" style="display: none;">
            <div class="modal-dialog" id="createal">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Create New Album</h4>
                    </div>
                    <div class="modal-body">
                        <form method="POST" class="form-material form-horizontal"
                            action="{{ route('artist.store_album') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-12" for="albname">Album Name <span
                                        class="text-danger">*</span></label>
                                <div class="col-md-12">
                                    <input type="text" id="album_name" name="album_name"
                                        class="form-control @error('album_name') is-invalid @enderror "
                                        @error('album_name') is-invalid @enderror placeholder="Enter album name" required>
                                    @error('album_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Album Cover</label>
                                <div class="col-sm-12">
                                    <label class="custom-file">
                                        <input type="file" id="file_picture" name="picture"
                                            class="custom-file-input @error('picture') is-invalid @enderror" required>
                                        @error('picure')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <span class="custom-file-control"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Story Behind the Album <small>(30 Sec Video
                                        Clip)</small></label>
                                <div class="col-sm-12">
                                    <label class="custom-file">
                                        <input type="file" id="file" name="video"
                                            class="custom-file-input @error('video') is-invalid @enderror" required>

                                        <span class="custom-file-control"></span>
                                    </label>
                                    @error('video')
                                        <span style="margin-top: 100px" class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group d-flex justify-content-center">
                                <div style="background: #ebeeef;" class="p-3 img-circle font-bold">
                                    Songs
                                </div>
                            </div>
                            <div class="form-group d-flex justify-content-center">

                                <a onclick="chose()" class="btn btn-primary">Choose Songs <small>(Max 10 songs)</small></a>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">
                                Add Album
                            </button>
                            <button data-dismiss="modal" class="btn btn-inverse waves-effect waves-light">Cancel</button>

                    </div>
                </div>
            </div>


            <div class="modal-dialog modal-lg" id="chosem" style="display: none">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Choose Songs (Max 10 Songs)</h4>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            @foreach (App\Models\song::where('user_id', Auth::user()->id)->where('album_id',Null)->paginate(10) as $song)
                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1" style="position: relative;"> <img
                                                src="{{ asset('pictures/' . $song->picture) }}" class="img-responsive">
                                            <div style="position: absolute; top: 3px; left: 8px;">
                                                <input type="checkbox" name="songs[]" value="{{ $song->id }}">
                                                <input type="text" name="id" value="{{ $Album ?? '' }}"
                                                    style="display: none">
                                            </div>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="text-nowrap">{{ $song->title }}</h5>
                                            <h6 class="text-muted">{{ $song->title }}</h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <hr>
                        <a onclick="chose2()" class="btn btn-success waves-effect waves-light m-r-10">Add Songs</a>
                        <button onclick="chose2()" data-target="#album-add" class="btn btn-inverse waves-effect waves-light m-r-10">Cancel</button>
        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- update albumm --}}

        <div id="album-edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true" style="display: none;">
            <div class="modal-dialog" id="ul">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Update Album</h4>
                    </div>
                    <div class="modal-body">
                        <form method="POST" class="form-material form-horizontal"
                            action="{{ route('artist.store_album') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-12" for="albname">Album Name <span
                                        class="text-danger">*</span></label>
                                <div class="col-md-12">
                                    <input type="text" id="album_name" name="album_name"
                                        class="form-control @error('album_name') is-invalid @enderror "
                                        @error('album_name') is-invalid value="{{ $albumu->album_name }}" @enderror placeholder="Enter album name">
                                    @error('album_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Album Cover</label>
                                <div class="col-sm-12">
                                    <label class="custom-file">
                                        <input type="file" id="file_picture" name="picture"
                                            class="custom-file-input @error('picture') is-invalid @enderror">
                                        @error('picure')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <span class="custom-file-control"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Story Behind the Album <small>(30 Sec Video
                                        Clip)</small></label>
                                <div class="col-sm-12">
                                    <label class="custom-file">
                                        <input type="file" id="file" name="video"
                                            class="custom-file-input @error('video') is-invalid @enderror">

                                        <span class="custom-file-control"></span>
                                    </label>
                                    @error('video')
                                        <span style="margin-top: 100px" class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group d-flex justify-content-center">
                                <div style="background: #ebeeef;" class="p-3 img-circle font-bold">
                                    Songs
                                </div>
                            </div>
                            <div class="form-group d-flex justify-content-center">

                                <a onclick="chose3()" class="btn btn-primary">  Songs of the album <small>(Max 10
                                        songs)</small></a>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">
                                Update Album
                            </button>
                            <button data-dismiss="modal" class="btn btn-inverse waves-effect waves-light">Cancel</button>

                    </div>
                </div>
            </div>


            <div class="modal-dialog modal-lg" id="sl" style="display: none">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Update Songs (Max 10 Songs)</h4>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            @foreach (App\Models\song::where('album_id', 1 ) as $song)
                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1" style="position: relative;"> <img
                                                src="{{ asset('pictures/' . $song->picture) }}" class="img-responsive">
                                            <div style="position: absolute; top: 3px; left: 8px;">
                                                <input type="checkbox" name="songs[]" value="{{ $song->id }}">
                                                <input type="text" name="id" value="{{ $Album ?? '' }}"
                                                    style="display: none">
                                            </div>
                                        </div>
                                        <div class="alb-info">
                                            <h5 class="text-nowrap">{{ $song->title }}</h5>
                                            <h6 class="text-muted">{{ $song->title }}</h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <hr>
                        <a onclick="chose4()" class="btn btn-success waves-effect waves-light m-r-10">Add Songs</a>
                        <button data-dismiss="modal" data-target="#album-edit" data-toggle="modal"
                            class="btn btn-inverse waves-effect waves-light m-r-10">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    </div>
</div>

@endsection
