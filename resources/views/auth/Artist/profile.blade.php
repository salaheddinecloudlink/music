@extends('layouts.main_artist')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-xs-12">
                    <h4 class="page-title">Artist Info</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <form class="form-material form-horizontal"
                            action="{{ route('artist.modify', ['id' => auth()->user()->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-12" for="example-text">First Name <span
                                                class="text-danger">*</span></label>
                                        <div class="col-md-12">

                                            <input type="text" required id="example-text" name="first_name"
                                                class="form-control"
                                                value="{{ $profile->first_name  ?? '' }}"
                                                placeholder="Enter first name">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-12" for="example-text">Last Name <span
                                                class="text-danger">*</span></label>
                                        <div class="col-md-12">

                                            <input type="text" required
                                                value="{{ $profile->last_name ?? '' }}" id=""
                                                name="last_name" class="form-control" placeholder="enter last name">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-12" for="example-text">Stage Name</label>
                                        <div class="col-md-12">

                                            <input type="text" required
                                                value="{{ $profile->stage_name ?? '' }}"
                                                id="stage_name" name="stage_name" class="form-control"
                                                placeholder="enter stage name">

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-12" for="example-text">Email <span
                                                class="text-danger">*</span></label>
                                        <div class="col-md-12">
                                            <input type="email" value="{{ auth()->user()->email }}" required
                                                id="example-text" name="email" class="form-control"
                                                placeholder="Enter email" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-12" for="bdate">Date of Birth <span
                                                class="text-danger">*</span></span>
                                        </label>
                                        <div class="col-md-12">

                                            <input type="text" id="bdate" name="dob"
                                                class="form-control mydatepicker"
                                                value="{{ $profile->dob ?? "" }}"
                                                placeholder="enter birth date">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label class="col-sm-12">Gender <span class="text-danger">*</span></label>
                                        <div class="col-sm-12">
                                            <select name="gendre" class="form-control" required>
                                                <option>Select Gender</option>
                                                <option selected value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-12" for="example-text">Address</label>
                                        <div class="col-md-12">
                                            <input type="text"
                                                value="{{ $profile->address ?? '' }}" required
                                                id="example-text" name="address" class="form-control"
                                                placeholder="enter address">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-12" for="example-text">City <span
                                                class="text-danger">*</span></label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{ $profile->city ?? '' }}"
                                                required id="example-text" name="city" class="form-control"
                                                placeholder="enter city">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label class="col-sm-12">State <span class="text-danger">*</span></label>
                                        <div class="col-sm-12">

                                            <select name="state" class="custome_txt form-control state"
                                                data-state=""required>
                                                <option
                                                    value="{{ $profile->state ?? '' }} selected">
                                                    Select State</option>
                                                <option selected>Alabama</option>
                                                <option>Alaska </option>
                                                <option>Arizona</option>
                                                <option>Arkansas </option>
                                                <option>California </option>
                                                <option>Colorado </option>
                                                <option>Connecticut </option>
                                                <option>Delaware </option>
                                                <option>Florida </option>
                                                <option>Georgia </option>
                                                <option>Hawaii </option>
                                                <option>Idaho </option>
                                                <option>Illinois</option>
                                                <option>Indiana </option>
                                                <option>Iowa </option>
                                                <option>Kansas </option>
                                                <option>Kentucky </option>
                                                <option>Louisiana</option>
                                                <option>Maine </option>
                                                <option>Maryland </option>
                                                <option>Massachusetts </option>
                                                <option>Michigan </option>
                                                <option>Minnesota</option>
                                                <option>Mississippi </option>
                                                <option>Missouri </option>
                                                <option>Montana</option>
                                                <option>Nebraska </option>
                                                <option>Nevada </option>
                                                <option>New Hampshire </option>
                                                <option>New Jersey </option>
                                                <option>New Mexico </option>
                                                <option>New York </option>
                                                <option>North Carolina </option>
                                                <option>North Dakota </option>
                                                <option>Ohio </option>
                                                <option>Oklahoma </option>
                                                <option>Oregon </option>
                                                <option>Pennsylvania</option>
                                                <option>Rhode Island</option>
                                                <option>South Carolina </option>
                                                <option>South Dakota </option>
                                                <option>Tennessee </option>
                                                <option>Texas </option>
                                                <option>Utah </option>
                                                <option>Vermont </option>
                                                <option>Virginia </option>
                                                <option>Washington </option>
                                                <option>West Virginia </option>
                                                <option>Wisconsin </option>
                                                <option>Wyoming</option>
                                            </select>


                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-12" for="example-text">Zip <span
                                                class="text-danger">*</span></label>
                                        <div class="col-md-12">

                                            <input type="text"
                                                value="{{ $profile->zip ?? '' }}" required
                                                id="example-text" name="zip" class="form-control"
                                                placeholder="enter zip">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label class="col-sm-12">Genre <span class="text-danger">*</span></label>
                                        <div class="col-sm-12">
                                            <select name="genre" class="form-control" required>
                                                @foreach (App\Models\SongType::all() as $songtype)
                                                    <option value="{{ $songtype->name }}">
                                                        {{ $songtype->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label class="col-sm-12">Profile Picture</label>
                                        <div class="col-sm-12">
                                            <label class="custom-file">
                                                <input type="file" id="file" name="avatar"
                                                    class="custom-file-input">
                                                <span class="custom-file-control"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label class="col-sm-12">Journey Of an Artist <small>(30 Sec Max Video
                                                Clip)</small></label>
                                        <div class="col-sm-12">
                                            <label class="custom-file">
                                                <input type="file" id="file" name="journey"
                                                    class="custom-file-input">
                                                <span class="custom-file-control"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-12" for="example-text">Facebook</label>
                                        <div class="col-md-12">
                                            <input type="text" required="" id="example-text"
                                                value="{{ $profile->facebook ?? '' }}"
                                                name="facebook" class="form-control" placeholder="enter facebook link">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-12" for="example-text">Twitter</label>
                                        <div class="col-md-12">
                                            <input type="text" required id="example-text" name="twitter"
                                                class="form-control"
                                                value="{{ $profile->twitter ?? '' }}"
                                                placeholder="enter twitter link">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12" for="example-text">Instagram</label>
                                        <div class="col-md-12">
                                            <input type="text" required="" id="example-text"
                                                value="{{ $profile->instagram ?? '' }}"
                                                name="instagram" class="form-control" placeholder="enter instagram link">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-12" for="example-text">Website</label>
                                        <div class="col-md-12">
                                            <input type="text" required id="example-text" name="website"
                                                value="{{ $profile->website ?? '' }}"
                                                class="form-control" placeholder="enter website link">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-12">About Me <small>(Max 500 Character)</small></label>
                                        <div class="col-md-12">
                                            <textarea name="bio" data-textarea="{{ $profile->bio ?? '' }}"
                                                class="form-control textarea" rows="11">
                                               </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                            <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>

   
@endsection
