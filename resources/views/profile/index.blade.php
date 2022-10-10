@extends('layouts.master')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-xs-12">
                    <h4 class="page-title">Profile Info Fan</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">

                        <form action="{{ route('update.fan', ['id' => auth()->user()->id]) }}" method="post"
                            enctype="multipart/form-data" class="form-material form-horizontal">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-12" for="example-text">First Name <span
                                                class="text-danger">*</span></label>
                                        <div class="col-md-12">
                                            @if (Auth::check())
                                           
                                                <input type="text" required id="example-text" name="first_name"
                                                    class="form-control" value="{{ auth()->user()->profile->first_name ?? "" }}"
                                                    placeholder="Enter first name">
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="col-md-12" for="example-text">Last Name <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        
                                            <input type="name" value="{{ auth()->user()->profile->last_name ?? ""}}"
                                                name="last_name" required id="example-text" class="form-control"
                                                placeholder="Enter last name">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="col-md-12" for="example-text">Email <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                       
                                            <input type="email" value="{{ auth()->user()->email ?? "" }}" required
                                                id="example-text" name="email" class="form-control"
                                                placeholder="Enter email">
                                      
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="col-md-12" for="example-text">Address</label>
                                    <div class="col-md-12">
                                      
                                            <input type="text" required id="example-text" name="address"
                                                class="form-control" value="{{ auth()->user()->profile->address ?? "" }}"
                                                placeholder="Enter full name">
                                       
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
                                                value="{{ auth()->user()->profile->dob ?? "" }}"
                                                placeholder="enter birth date">
                                   
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="col-md-12" for="example-text">City <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                       
                                            <input type="text" value="{{ auth()->user()->profile->city ?? ""}}" required
                                                id="example-text" name="city" class="form-control"
                                                placeholder="enter city">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="col-sm-12">State <span class="text-danger">*</span></label>
                                    <div class="col-sm-12">\
                                        @empty(auth()->user()->profile->state)
                                            <select class="custome_txt form-control sselect" name="state" required>
                                                <option>Select State</option>
                                                <option>Alabama</option>
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
                                        @else
                                            <select class="custome_txt form-control sselect"
                                                data-selectedd={{ auth()->user()->profile->state }} name="state"
                                                required>
                                                <option>Select State</option>
                                                <option>Alabama</option>
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
                                        @endempty


                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="col-md-12" for="example-text">Zip <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                       
                                            <input type="text" value="{{ auth()->user()->profile->zip ?? "" }}" required
                                                id="example-text" name="zip" class="form-control"
                                                placeholder="enter zip">
                                      

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="col-md-12" for="example-text">Facebook</label>
                                    <div class="col-md-12">
                                       
                                            <input type="text" required="" id="example-text"
                                                value="{{ auth()->user()->profile->facebook ?? ""}}" name="facebook"
                                                class="form-control" placeholder="enter facebook link">
                                      

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12" for="example-text">Instagram</label>
                                    <div class="col-md-12">
                                      
                                            <input type="text" required="" id="example-text"
                                                value="{{ auth()->user()->profile->instagram ?? "" }}" name="instagram"
                                                class="form-control" placeholder="enter instagram link">
                                       

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12" for="example-text">Twitter</label>
                                    <div class="col-md-12">
                                       
                                            <input type="text" required id="example-text" name="twitter"
                                                class="form-control" value="{{ auth()->user()->profile->twitter ?? "" }}"
                                                placeholder="enter twitter link">
                                    
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="col-sm-12">Profile Picture</label>
                                    <div class="col-sm-12">
                                        <label class="custom-file">
                                            <input name="avatar" type="file" value="" id="file"
                                                class="custom-file-input">
                                            <span class="custom-file-control"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">Bio <small>(Max 500 Character)</small></label>
                                    <div class="col-md-12">
                                       
                                            <textarea name="bio" data-text="{{ auth()->user()->profile->bio ?? "" }}" class="form-control textarrrea"
                                                rows="7">
                                                </textarea>
                                      

                                    </div>
                                </div>
                            </div>
                        </div>


                        <button type="submit"
                            class="btn btn-success waves-effect waves-light m-r-10 click">Submit</button>
                        <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('external_artist/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <script>
        $(window).on('load', function() {
            var sel = $('.sselect').data("selectedd");
            $('.sselect').val(sel);
            $('.sselect').change();

            var txt = $('.textarrrea').data("text");

            var text = $('.sselect').data("selectedd");
            $(".textarrrea").val(txt);
        });
    </script>
    <!-- /.container-fluid -->
@endsection
