<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('external_artist/plugins/images/logo-icon.png') }}">

    <title>Uruploadz.com</title>
    <!-- Bootstrap Core CSS -->
    @include('partials_artist.head')
</head>

<body class="fix-sidebar fix-header">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        @include('partials_artist.nav')

        <!-- Left navbar-header -->
        @include('partials_artist.sidebar')
        <!-- Left navbar-header end -->
        <!-- Page Content -->
    
        @yield('content')


        @include('partials_artist.footer')

        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{ asset('external_artist/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('external_artist/bootstrap/dist/js/tether.min.js') }}"></script>
    <script src="{{ asset('external_artist/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('external_artist/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js') }}">
    </script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{ asset('external_artist/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
    <script src="{{ asset('external_artist/js/select2/dist/js/select2.full.min.js') }}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{ asset('external_artist/js/jquery.slimscroll.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('external_artist/js/waves.js') }}"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="{{ asset('external_artist/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js') }}">
    </script>
    <script src="{{ asset('external_artist/plugins/apexcharts-bundle/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('external_artist/js/chart.js') }}"></script>
    <script type="text/javascript">
        // Date Picker
        jQuery('.mydatepicker').datepicker();
        $(".select2").select2();
        // $(".selectpicker").selectpicker();
    </script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('external_artist/js/custom.min.js') }}"></script>
    <script>
        $(function() {
            $("input[name='chkPassPort']").click(function() {
                if ($("#chkYes").is(":checked")) {
                    $("#featured").removeAttr("disabled");
                    $("#featured").focus();
                } else {
                    $("#featured").attr("disabled", "disabled");
                }
            });
            $("input[name='chkPassPorts']").click(function() {
                if ($("#chksYes").is(":checked")) {
                    $("#featureds").removeAttr("disabled");
                    $("#featureds").focus();
                } else {
                    $("#featureds").attr("disabled", "disabled");
                }
            });




            $("input[name='chkPassPortss']").click(function() {
                if ($("#chkssYes").is(":checked")) {
                    $("#featuredss").removeAttr("disabled");
                    $("#featuredss").focus();
                } else {
                    $("#featuredss").attr("disabled", "disabled");
                }
            });
        });
    </script>

    <script>
        $(document).on('submit', '#updatesongform', function(e) {

            e.preventDefault();
            var id = $('#edit_song_id').val();

            let EditformData = new FormData($('#updatesongform')[0]);

            $.ajax({
                type: "POST",
                url: "song-update/" + id,
                data: EditformData,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.status == 400) {
                        $('#updateform_errList').html("");
                        $('#updateform_errList').removeClass('d-none');

                        $.each(response.errors, function(key, err_value) {
                            $('#updateform_errList').append('<li>' + err_value + '</li>');

                        });
                    } else if (response.status == 404) {

                        alert(response.message);

                    } else if (response.status == 200) {

                        $('#updateform_errList').html("");
                        $('#updateform_errList').addClass('d-none');
                        $('#song-edit').modal('hide');
                        alert(response.message);
                        location.reload(true);
                    }

                }
            });

        });

        $(document).on('click', '.edit_song', function(e) {

            e.preventDefault();

            var song_id = $(this).attr("data-id");
            //  console.log(song_id);

            $('#song-edit').modal('show');

            $.ajax({

                type: "GET",
                url: "song/" + song_id,
                success: function(response) {
                    if (response.status == 404) {
                        $('#success_message').html();
                        $('#success_message').addClass('alert alert-danger');
                        $('#success_message').text(response.message);
                    } else {

                        $('#title').val(response.song.title);
                        $('#description').val(response.song.description);
                        $('#featureds').val(response.song.FeaturedArtist);
                        (response.song.chkPassPort == 'yes') ? $('#chksYes').prop('checked', true): $(
                            '#chksNo').prop('checked', true);
                        $('#edit_song_id').val(song_id);
                        $('#selectsong').val(response.song.SongType_id);
                    }
                }
            });
        });
    </script>

    <script>
        $(document).on('submit', '#updatevideoform', function(e) {

            e.preventDefault();
            var id = $('edit_video_id').val();

            let EditformData = new FormData($('#updatevideoform')[0]);

            $.ajax({
                type: "POST",
                url: "video-update/" + id,
                data: EditformData,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.status == 400) {
                        $('#updatevideoform_errList').html("");
                        $('#updatevideoform_errList').removeClass('d-none');

                        $.each(response.errors, function(key, err_value) {
                            $('#updatevideoform_errList').append('<li>' + err_value + '</li>');

                        });
                    } else if (response.status == 404) {

                        alert(response.message);

                    } else if (response.status == 200) {

                        $('#updatevideoform_errList').html("");
                        $('#updatevideoform_errList').addClass('d-none');
                        $('#updatevideoform').modal('hide');
                        alert(response.message);
                        location.reload(true);
                    }
                }
            });
        });
        $(document).on('click', '.edit_video', function(e) {

            e.preventDefault();

            var video_id = $(this).attr("data-id");
            //  console.log(song_id);

            $('#video-edit').modal('show');

            $.ajax({

                type: "GET",
                url: "video/" + video_id,


                success: function(response) {



                    if (response.status == 404) {
                        $('#success_messagevideo').html();
                        $('#success_messagevideo').addClass('alert alert-danger');
                        $('#success_messagevideo').text(response.message);
                    } else {

                        $('#title1').val(response.video.title);
                        $('#description1').val(response.video.description);
                        $('#featuredss').val(response.video.FeaturedArtist);



                        (response.video.chkPassPort == 'yes') ? $('#chkssYes').prop('checked', true): $(
                            '#chkssNo').prop('checked', true);


                        $('#edit_video_id').val(video_id);

                        $('#selectsongvideo').val(response.video.SongType_id);

                    }
                }
            });
        });
    </script>

    {{-- // @if (count($Albums) > 0) --}}
    //
    <script>
        function chose() {

            // $("#album-add").modal.show();
            document.getElementById("createal").style.display = "none";
            document.getElementById("chosem").style.display = "block";

        }

        function chose2() {

            // $("#album-add").modal.show();
            document.getElementById("createal").style.display = "block";
            document.getElementById("chosem").style.display = "none";

        }

        // update 
        function chose3() {

            // $("#album-add").modal.show();
            document.getElementById("ul").style.display = "none";
            document.getElementById("sl").style.display = "block";

        }

        function chose4() {

            // $("#album-add").modal.show();
            document.getElementById("ul").style.display = "block";
            document.getElementById("sl").style.display = "none";

        }
    </script>
    {{-- // @endif --}}



    //
    <script>
        $(document).on('click', '.edit_event', function(e) {
            e.preventDefault();
            var event_id = $(this).attr("data-id");
            //console.log(song_id);
            $('#event-edit').modal('show');
            $.ajax({
                type: "GET",
                url: "event/" + event_id,
                success: function(response) {
                    if (response.status == 404) {
                        $('#success_messageevent').html();
                        $('#success_messageevent').addClass('alert alert-danger');
                        $('#success_messageevent').text(response.message);
                    } else {

                        $('#edit_event_id').val(event_id);
                        $('#event_link1').val(response.event.event_link);
                        $('#event_name').val(response.event.event_name);
                        $('#venue').val(response.event.venue);
                        $('#address').val(response.event.address);
                        $('#city').val(response.event.city);
                        $('#selectstate').val(response.event.State_id);
                        $('#zip').val(response.event.zip);
                        $('#start_time').val(response.event.start_time);
                        $('#finish_time').val(response.event.finish_time);
                        $('#event_date').val(response.event.event_date);
                        $('#selecttypeevent').val(response.event.SongType_id);
                        $('#picture2').val(response.event.picture);

                    }
                }
            });
        });
    </script>


    <script>
        var v = document.getElementById("v").value;
        if (v == "yes") {
            var m = document.getElementById("album-edit");
            m.modal('show');
            // $('#album-edit').modal('show');
            // document.getElementById("album-edit").Modal("show");
        }
    </script>
     <script src="{{ asset('external_artist/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>

     <script>
         $(window).on('load', function() {
             var genre = $('.genre').data("genre");
             $('.genre').val(genre);
             $('.genre').change();
 
             var state = $('.state').data("state");
             $('.state').val(state);
             $('.state').change();
 
 
             var textarea = $('.textarea').data("textarea");
             $(".textarea").val(textarea);
             $(".textarea").val(textarea);
         });
     </script>
</body>

</html>
