<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Http\Requests\ArtistEventRequest;
use App\Models\Album;
use App\Models\Event;
use App\Models\profile_artist;
use App\Models\song;
use App\Models\SongType;
use App\Models\User;
use App\Models\Video;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Stripe;
=======
use App\Models\song;
use Illuminate\Http\Request;
use Session;

>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9
class ArtistController extends Controller
{

    public function __construct()
    {
        $this->middleware(['Artist', 'verified']);
    }
    
    public function index()
    {
<<<<<<< HEAD
        $id = Auth::user()->oauth_id;
        if ($id == null) {
            $id = Auth::user()->id;
        }

        $profile = profile_artist::where('user_id', '=', $id)->first();
        // dd($profile->avatar );
        // $ava = $profile->avatar ;
        // dd($ava);
        // if($profile->avatar == null)
        // {
        //     $profile->avatar = "avatar.jpg";
        // }
        // else {
        //     $profile->avatar = $profile->avatar ;
        // }
        $users = user::all()->where('user_type', 'artist');

        $artists = array();

        foreach ($users as $ar) {

            $id = $ar->oauth_id;

            if ($id == null) {
                $id = $ar->id;
            }
            $artist = profile_artist::where('user_id', $id)->first();
            array_push($artists, $artist);

            // dd($artists);

        }
        return view('auth.Artist.index')->with('profile', $profile)->with('artists',$artists);
=======
        return view('auth.Artist.index');
    }
    public function song()
    {
        $songs = song::latest()->get();
        return view('auth.Artist.song')->with([
            'songs' => $songs
        ]);
>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9
    }

    public function storeSong(Request $request)
    {
        if ($request->has('picture')) {
            $destination = 'public/songsBackGround';
            $image = $request->picture;
            $image_name = time() . '_' . $image->getClientOriginalName();
            $path = $request->file('picture')->storeAs($destination, $image_name);
            $input['picture'] = $image_name;
        }

<<<<<<< HEAD
    public function song()
    {
        $id = Auth::user()->oauth_id;
        if ($id == null) {
            $id = Auth::user()->id;
        }

        $profile = profile_artist::where('user_id', '=', $id)->first();
        $ava = $profile->avatar ;
        if($profile->avatar == null)
        {
            $profile->avatar = "avatar.jpg";
        }
        else {
            $profile->avatar = $ava ;
        }
        $songs = song::where('user_id', Auth::user()->id)->paginate(10);
        return view('auth.Artist.song', compact('songs'))->with('profile',$profile);
    }
    public function video()
    {
        $id = Auth::user()->oauth_id;
        if ($id == null) {
            $id = Auth::user()->id;
        }

        $profile = profile_artist::where('user_id', '=', $id)->first();
       
        $videos = Video::where('user_id', Auth::user()->id)->paginate(10);
        // dd($videos);
        return view('auth.Artist.video', compact('videos'))->with('profile',$profile);
    }
    public function event()
    {
        $id = Auth::user()->oauth_id;
        if ($id == null) {
            $id = Auth::user()->id;
        }

        $profile = profile_artist::where('user_id', '=', $id)->first();
        $ava = $profile->avatar ;
        if($profile->avatar == null)
        {
            $profile->avatar = "avatar.jpg";
        }
        else {
            $profile->avatar = $ava ;
        }
        $events = Event::latest()->paginate(10);
        return view('auth.Artist.event', compact('events'))->with('profile',$profile);
    }

    public function album()
    {
        $id = Auth::user()->oauth_id;
        if ($id == null) {
            $id = Auth::user()->id;
        }

        $profile = profile_artist::where('user_id', '=', $id)->first();
        $ava = $profile->avatar ;
        if($profile->avatar == null)
        {
            $profile->avatar = "avatar.jpg";
        }
        else {
            $profile->avatar = $ava ;
        }
        $albums = Album::where('user_id', Auth::user()->id)->paginate(10);
        return view('auth.Artist.album', compact('albums'))->with('profile',$profile);
    }
    public function albums()
    {
        $id = Auth::user()->oauth_id;
        if ($id == null) {
            $id = Auth::user()->id;
        }
        $profile = profile_artist::where('user_id', '=', $id)->first();
        $ava = $profile->avatar ;
        if($profile->avatar == null)
        {
            $profile->avatar = "avatar.jpg";
        }
        else {
            $profile->avatar = $ava ;
        }
        $albums = Album::where('user_id', Auth::user()->id)->paginate(10);
        return view('auth.Artist.album', compact('albums'))->with('profile',$profile);
    }


    public function profile()
    {
        $id = Auth::user()->oauth_id;
        // dd($id);  
        if ($id == null) {
            $id = Auth::user()->id;
            $profile = profile_artist::where('user_id', '=', $id)->first();
        }
        // dd($id);  
        $profile = profile_artist::where('user_id', '=', $id)->first();
        // dd($profile);  
           
        return view('auth.Artist.profile')->with('profile', $profile);
    }
    

    public function updateArtist(Request $request, $id)
    {
        $id = Auth::user()->oauth_id;
        if ($id == null) {
            $id = Auth::user()->id;
        }

        // dd($id);
        $email = Auth::user()->email;
        $name_aavatar = "";

        if ($request->hasFile('avatar')) {
            $filePicture = $request->avatar->getClientOriginalName();
            $formatPicture = $request->avatar->getClientOriginalExtension();
            // dd( $filePicture);

            $request->avatar->move(public_path('pictures'), $filePicture);
        // dd('jnjn');
        }

        $name_journey = "";
        if ($request->has('journey')) {
            $destination = 'public/artist/journey';
            $journey = $request->journey;
            $name_journey = time() . '_' . $journey->getClientOriginalName();
            $path = $request->file('journey')->storeAs($destination, $name_journey);
            $input['name_journey'] = $name_journey;
        }

        //song storage
        $profile = profile_artist::where('user_id', '=', $id)->first();
        // dd($profile);
        if ($profile) {
            $profile->first_name = $request->input('first_name');
            $profile->last_name = $request->input('last_name');
            $profile->stage_name = $request->input('stage_name');
            $profile->address = $request->input('address');
            $profile->email = $email;
            $profile->dob = $request->input('dob');
            $profile->genre = $request->input('genre');
            $profile->city = $request->input('city');
            $profile->bio = $request->input('bio');
            $profile->facebook = $request->input('facebook');
            $profile->instagram = $request->input('instagram');
            $profile->twitter = $request->input('twitter');
            $profile->state = $request->input('state');
            $profile->website = $request->input('website');
            $profile->zip = $request->input('zip');
            if ($name_aavatar != "") {
                $profile->avatar = $name_aavatar;
            }

            if ($name_journey != "") {
                $profile->journey = $name_journey;
            }

            // dd( $profile);

            $profile->update();
        }
        return redirect()->back()->with('message', 'Profile  Sucessfully Updated!');
    }

    public function storeSong(Request $request)
    {
        // $this->validate($request, [
        //     'title' => 'required|min:3|max:100',
        //     'description' => 'required|min:3|max:600',
        //     'SongType' => 'required',
        //     'song' => 'required|mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav|max:5000',
        //     'picture' => 'required|mimes:jpeg,jpg,png',
        //     'chkPassPort' => 'required',
        //     'FeaturedArtist' => 'exclude_if:chkPassPort,no|required|min:3|max:100',
        // ]);
        // dd("dd");

        if ($request->hasFile('song')) {

            $fileSong = $request->song->getClientOriginalName();
            $format = $request->song->getClientOriginalExtension();
            $size = $request->song->getsiZe();
            $request->song->move(public_path('songs'), $fileSong);
        }
        if ($request->hasFile('picture')) {
            $filePicture = $request->picture->getClientOriginalName();
            $formatPicture = $request->picture->getClientOriginalExtension();

            $request->picture->move(public_path('pictures'), $filePicture);

        }
        $user_id = auth()->user()->id;
        $Song = new song;
        $Song->user_id = $user_id;
        $Song->title = $request->get('title');
        $Song->description = $request->get('description');
        $Song->album_id =Null;
        $Song->slug = Str::slug($request->get('title'));
        $Song->SongType_id = $request->get('SongType');
        $Song->format = $format;
        $Song->size = $size;
        $Song->FeaturedArtist = $request->get('FeaturedArtist');
        $Song->chkPassPort = $request->get('chkPassPort');

        $Song->song = $fileSong;
        $Song->formatPicture = $formatPicture;

        $Song->picture = $filePicture;
// dd($Song);
        $Song->save();
        return redirect()->back()->with('message', "Song created succeessfully");

    }
    public function Update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:600',
            'SongType' => 'required',
            'song' => 'mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav|max:5000',
            'picture' => 'mimes:jpeg,jpg,png',

            'FeaturedArtist' => 'exclude_if:chkPassPort,no|min:3|max:100',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->getMessageBag(),

            ]);

        } else {

            $song = song::find($id);

            if ($song) {
                $song->title = $request->input('title');
                $song->description = $request->input('description');
                $song->Songtype_id = $request->input('SongType');
                $song->FeaturedArtist = $request->input('FeaturedArtist');
                $song->chkPassPort = $request->input('chkPassPorts');
                $song->slug = Str::slug($request->input('title'));

                if ($request->hasFile('song')) {

                    $path = 'songs/' . $song->song;
                    if (File::exists($path)) {

                        File::delete($path);
                    }

                    $fileSong = $request->song->getClientOriginalName();
                    $format = $request->song->getClientOriginalExtension();
                    $size = $request->song->getsiZe();
                    $request->song->move(public_path('songs'), $fileSong);
                    $song->song = $fileSong;
                    $song->format = $format;
                    $song->size = $size;
                }
                if ($request->hasFile('picture')) {

                    $path = 'pictures/' . $song->picture;
                    if (File::exists($path)) {

                        File::delete($path);
                    }

                    $filePicture = $request->picture->getClientOriginalName();
                    $formatPicture = $request->picture->getClientOriginalExtension();

                    $request->picture->move(public_path('pictures'), $filePicture);

                    $song->formatPicture = $formatPicture;

                    $song->picture = $filePicture;

                }

                $song->save();

                return response()->json([

                    'status' => 200,
                    'message' => 'song updated successfully',

                ]);
            } else {
                return response()->json([

                    'status' => 200,
                    'message' => 'song Not found',
                ]);
            }

        }

    }

    public function edit($id)
    {

        $songs = song::find($id);

        if ($songs) {
            return response()->json([
                'status' => 200,
                'song' => $songs,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Song not found ',
            ]);

        }

    }

    public function destroy(Request $request)
    {

        $id = $request->get('id');

        try {
            $song = song::findOrFail($id);
        } catch (ModelNotFoundException $exception) {

            return redirect()->back()->withError($exception->getMessage())->withInput();

        }

        $song->delete();
        

        return redirect()->back()->with('message', 'song deleted successfully');
    }

    public function storeVideo(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:600',
            'SongType' => 'required',
            'video' => 'required|file|max:50000',
            'picture' => 'required|mimes:jpeg,jpg,png',
            'chkPassPort' => 'required',
            'FeaturedArtist' => 'exclude_if:chkPassPort,no|required|min:3|max:100',
        ]);
        if ($request->hasFile('video')) {

            $fileVideo = $request->video->getClientOriginalName();
            $format = $request->video->getClientOriginalExtension();
            $size = $request->video->getsiZe();
            $request->video->move(public_path('videos'), $fileVideo);
        }
        if ($request->hasFile('picture')) {
            $filePicture = $request->picture->getClientOriginalName();
            $formatPicture = $request->picture->getClientOriginalExtension();

            $request->picture->move(public_path('pictures'), $filePicture);

        }

        $user_id = auth()->user()->id;

        $video = new Video;
        $video->user_id = $user_id;
        $video->title = $request->get('title');
        $video->description = $request->get('description');

        $video->slug = Str::slug($request->get('title'));
        $video->SongType_id = $request->get('SongType');
        $video->format = $format;
        $video->size = $size;

        $video->FeaturedArtist = $request->get('FeaturedArtist');
        $video->chkPassPort = $request->get('chkPassPort');

        $video->video = $fileVideo;
        $video->formatPicture = $formatPicture;

        $video->picture = $filePicture;

        $video->save();
        return redirect()->back()->with('message', "Video created succeessfully");
    }

    public function destroyVideo(Request $request)
    {
        $id = $request->get('id');
        try {
            $video = Video::findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return redirect()->back()->withError($exception->getMessage())->withInput();
        }
        $video->delete();
        unlink(public_path('/videos/' . $video->video));
        unlink(public_path('/pictures/' . $video->picture));
        return redirect()->back()->with('message', 'video deleted successfully');
    }

    public function UpdateVideo(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:600',
            'SongType' => 'required',
            'video' => 'mimetypes:video/mp4|max:50000',
            'picture' => 'mimes:jpeg,jpg,png',

            'FeaturedArtist' => 'exclude_if:chkPassPort,no|min:3|max:100',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => "$validator->messages()",

            ]);

        } else {

            $video = Video::find($request->input('id_video'));

            if ($video) {
                $video->title = $request->input('title');
                $video->description = $request->input('description');
                $video->Songtype_id = $request->input('SongType');
                $video->FeaturedArtist = $request->input('FeaturedArtist');
                $video->chkPassPort = $request->input('chkPassPortss');
                $video->slug = Str::slug($request->input('title'));

                if ($request->hasFile('video')) {

                    $path = 'videos/' . $video->video;
                    if (File::exists($path)) {

                        File::delete($path);
                    }

                    $fileVideo = $request->song->getClientOriginalName();
                    $format = $request->song->getClientOriginalExtension();
                    $size = $request->song->getsiZe();
                    $request->video->move(public_path('videos'), $fileVideo);
                    $video->video = $fileVideo;
                    $video->format = $format;
                    $video->size = $size;
                }
                if ($request->hasFile('picture')) {

                    $path = 'pictures/' . $video->picture;
                    if (File::exists($path)) {

                        File::delete($path);
                    }
                    $filePicture = $request->picture->getClientOriginalName();
                    $formatPicture = $request->picture->getClientOriginalExtension();
                    $request->picture->move(public_path('pictures'), $filePicture);
                    $video->formatPicture = $formatPicture;
                    $video->picture = $filePicture;
                }
                $video->save();

                return redirect()->back()->with('message', 'Video  Sucessfully Updated!');
            } else {
                return Redirect()->back()->withErrors(['msg' => 'Video not found']);
            }
        }
    }

    public function editVideo($id)
    {

        $video = Video::find($id);

        if ($video) {
            return response()->json([
                'status' => 200,
                'video' => $video,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'video not found ',
            ]);

        }

    }

    public function storeEvent(ArtistEventRequest $request)
    {

        if ($request->hasFile('picture')) {
            $filePicture = $request->picture->getClientOriginalName();
            $formatPicture = $request->picture->getClientOriginalExtension();

            $request->picture->move(public_path('pictures'), $filePicture);

        }

        $user_id = auth()->user()->id;

        $Events = new Event;

        $Events->user_id = $user_id;
        $Events->event_name = $request->get('event_name');
        $Events->venue = $request->get('venue');
        $Events->address = $request->get('address');
        $Events->city = $request->get('city');
        $Events->state_id = $request->get('state');
        $Events->zip = $request->get('zip');
        $Events->start_time = $request->get('start_time');
        $Events->finish_time = $request->get('finish_time');
        $Events->event_date = $request->get('event_date');
        $Events->event_link = $request->get('event_link');
        $Events->picture = $filePicture;

        $Events->slug = Str::slug($request->get('event_name'));
        $Events->SongType_id = $request->get('SongType');
        $Events->save();
        return redirect()->back()->with('message', "Event created succeessfully");

    }
    public function UpdateEvent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'event_name' => 'required|min:3|max:50',
            'venue' => 'required|min:3|max:50',

            'picture' => 'mimes:jpeg,jpg,png',
        ]);

        if ($validator->fails()) {
            return redirect('post/create')
                ->withErrors($validator)
                ->withInput();
        } else {

            $event = Event::find($request->id_event);

            if ($event) {
                $event->event_name = $request->input('event_name');
                $event->venue = $request->input('venue');
                $event->address = $request->input('address');
                $event->city = $request->input('city');
                $event->State_id = $request->input('state');
                $event->zip = $request->input('zip');
                $event->start_time = $request->input('start_time');
                $event->finish_time = $request->input('finish_time');
                $event->event_date = $request->input('event_date');
                $event->event_link = $request->input('event_link');
                $event->Songtype_id = $request->input('SongType');

                $event->slug = Str::slug($request->input('event_name'));

                if ($request->hasFile('picture')) {

                    $path = 'pictures/' . $event->picture;
                    if (File::exists($path)) {

                        File::delete($path);
                    }

                    $filePicture = $request->picture->getClientOriginalName();

                    $request->picture->move(public_path('pictures'), $filePicture);

                    $event->picture = $filePicture;

                }

                $event->save();

                return redirect()->back()->with('message', 'Event  Sucessfully Updated!');
            } else {
                return Redirect()->back()->withErrors(['msg' => 'Event not found']);
            }

        }

    }

    public function editEvent($id)
    {

        $event = Event::find($id);

        if ($event) {
            return response()->json([
                'status' => 200,
                'event' => $event,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'event not found ',
            ]);

        }

    }

    public function destroyEvent(Request $request)
    {

        $id = $request->get('id');

        try {
            $event = Event::findOrFail($id);
        } catch (ModelNotFoundException $exception) {

            return redirect()->back()->withError($exception->getMessage())->withInput();

        }

        $event->delete();

        unlink(public_path('/pictures/' . $event->picture));

        return redirect()->back()->with('message', 'event deleted successfully');
    }

    public function storeAlbum(Request $request)
    {
         
    //    dd($request->get('video'));

        $this->validate($request, [
            'album_name' => 'required|min:3|max:100',
            'video' => 'required|file|mimetypes:video/mp4|max:50000',
            'picture' => 'required|mimes:jpeg,jpg,png',
        ]);
        if ($request->hasFile('video')) {

            $fileVideo = $request->video->getClientOriginalName();
            $format = $request->video->getClientOriginalExtension();
            $size = $request->video->getsiZe();
            $request->video->move(public_path('videos'), $fileVideo);

        }
        if ($request->hasFile('picture')) {
            $filePicture = $request->picture->getClientOriginalName();
            $formatPicture = $request->picture->getClientOriginalExtension();
            $request->picture->move(public_path('pictures'), $filePicture);
        }

        $user_id = auth()->user()->id;
        $Album = new Album();
        $Album->user_id = $user_id;
        $Album->album_name = $request->get('album_name');
        $Album->video = $fileVideo;
        $Album->picture = $filePicture;
        //  dd($request->get('songs')[0]);
        $albums = Album::latest()->paginate(10);
        $Album->save();
        for ($i=0; $i <count($request->get('songs')) ; $i++) { 
            $song = song::find($request->get('songs')[$i]);
            // dd($song->album_id);
            $song->album_id = $Album->id ;
            $song->save();
            // dd($song->album_id);
        }
        
        // dd($Album->id);
        $id = Auth::user()->oauth_id;
        if ($id == null) {
            $id = Auth::user()->id;
        }

        $profile = profile_artist::where('user_id', '=', $id)->first();
        $ava = $profile->avatar ;
        if($profile->avatar == null)
        {
            $profile->avatar = "avatar.jpg";
        }
        else {
            $profile->avatar = $ava ;
        }    
         return redirect()->back()->with('message', "Album created succeessfully");;

    }

    public function destroyAlbum(Request $request)
    {

        $id = $request->get('id');

        try {
            $album = Album::findOrFail($id);
        } catch (ModelNotFoundException $exception) {

            return redirect()->back()->withError($exception->getMessage())->withInput();

        }

        $album->delete();

        unlink(public_path('/pictures/' . $album->picture));

        return redirect()->back()->with('message', 'album deleted successfully');
    }


    public function editAlbum($id)
    {
        // dd($id);
        $albumu = Album::find($id);
        $albums = Album::where('user_id', Auth::user()->id)->paginate(10);

        $id = Auth::user()->oauth_id;
        if ($id == null) {
            $id = Auth::user()->id;
        }

        $profile = profile_artist::where('user_id', '=', $id)->first();
        $ava = $profile->avatar ;
        if($profile->avatar == null)
        {
            $profile->avatar = "avatar.jpg";
        }
        else {
            $profile->avatar = $ava ;
        }


        $v= 'yes';
        if ($albumu) {
            // dd($albumu);
            return view('auth.Artist.album')->with('v',$v)->with('albums',$albums)->with('profile',$profile)->with('albumu',$albumu);
        } else {
            $albumu = new Album();
            return  view('auth.Artist.album')->with('messages',"ALbum not found");
        }
        
    }

    public function UpdateAlbum(Request $request)
    {
            $album = Album::find($request->album_id);
            $user_id = auth()->user()->id;
            if ($album) {
              
                if ($request->hasFile('video')) {
                    $fileVideo = $request->video->getClientOriginalName();
                    $format = $request->video->getClientOriginalExtension();
                    $size = $request->video->getsiZe();
                    $request->video->move(public_path('videos'), $fileVideo);
                }
                if ($request->hasFile('picture')) {
                    $filePicture = $request->picture->getClientOriginalName();
                    $formatPicture = $request->picture->getClientOriginalExtension();
                    $request->picture->move(public_path('pictures'), $filePicture);
                }
                $album->user_id = $user_id;
                $album->album_name = $request->get('album_name');
                $album->video = $fileVideo;
                $album->picture = $filePicture;
                $album->slug = Str::slug($request->input('event_name'));
                $album->save();
                return redirect()->back()->with('message', 'Album  Sucessfully Updated!');
            } else {
                return Redirect()->back()->withErrors(['msg' => 'Album not found']);
            }

        

    }

        // details pages 

        public function Albumdetails($id)
        {
                $album = Album::find($id);
                $user = User::find($album->user_id);
                // dd($user);
                $i = $user->oauth_id ;
                if ( $i ) {
                    // dd($i);
                    $pr = profile_artist::where('user_id',$i);
                    //  dd($pr);
                    $genre = "wdhh";
                }else {
                    
                        
                        $pr = profile_artist::where('user_id', $user->id);
                        $genre = $pr->name;
                    
                }
                // dd($genre);
                return view('welcome.album_details',compact('album'))->with('genre',$genre);         
        }


        public function songdetails($id)
        {
                $song = Song::find($id);
                $user = User::find($song->user_id);
                // dd($user);
                $i = $user->oauth_id ;
             if ( $i ) {
                // dd($i);
                 $pr = profile_artist::where('user_id',$i);
                //  dd($pr);
                $genre = "wdhh";
             }else {
                {
                    
                    $pr = profile_artist::where('user_id', $user->id);
                    $genre = $pr->name;
                 }
             }
                return view('welcome.song_details',compact('song'))->with('genre',$genre);         
        }

        public function videodetails($id)
        {
                $video = Video::find($id);
                return view('welcome.video_details',compact('video'));         
        }

        public function eventdetails($id)
        {

                $event = Event::find($id);
                $user = User::find($event->user_id);
                // dd($user);
                $i = $user->oauth_id ;
             if ( $i ) {
                // dd($i);
                 $pr = profile_artist::where('user_id',$i);
                //  dd($pr);
                $genre = "wdhh";
             }else {
                {
                    
                    $pr = profile_artist::where('user_id', $user->id);
                    $genre = $pr->name;
                 }
             }
                return view('welcome.event_details',compact('event'));         
        }

        public function membership()
        {
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            $idproducts = $stripe->prices->all();
            $ids= $idproducts->data;
            $idypla=$ids[0]->id ;
            $idmpla=$ids[1]->id ;
            $idypre=$ids[2]->id ;
            $idmpre=$ids[3]->id ;
           
           return view('auth.Artist.membership')->with('idypla', $idypla)->with('idmpla', $idmpla)->with('idypre', $idypre)->with('idmpre', $idmpre);
    
        }
        public function membershipid($id)
        {
            $current_user = Auth::user();
             $email = $current_user->email;
             $name = $current_user->name;
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
              $customer= $stripe->customers->create([
                'name' => $name,
                'email' => $email,
              ]);
              dd($customer->id);
          $stripe->checkout->sessions->create([
                'success_url' => 'http://127.0.0.1:8000/success',
                'cancel_url' => 'https://example.com/cancel',
                'line_items' => [
                  [
                    'price' => $id,
                    'quantity' => 1,
                  ],
                ],
                'mode' => 'subscription',
                'customer' => $customer->id
              ]);
              
           return view('auth.Artist.membership');
    
        }
}
=======
        //song storage
        if ($request->has('song')) {
            $destination = 'public/songs';
            $song = $request->song;
            $song_name = time() . '_' . $song->getClientOriginalName();
            $path = $request->file('picture')->storeAs($destination, $song_name);
            $input['picture'] = $song_name;
        }

        $user_id = auth()->user()->id;
        song::create([
            'user_id' => $user_id,
            'title' => $request->title,
            'FeaturedArtist' => $request->FeaturedArtist,
            'chkPassPort' => $request->chkPassPort,
            'MusicType' => $request->MusicType,
            'song' => $song_name,
            'picture' => $image_name,
            'description' => $request->description
        ]);
        return redirect()->back()->with('message ', 'song added successfully');
    }
    public function editSong(Request $request)
    {
        $song = song::find($request->id);
        $song->update($request->all());
    }
    ///////////////////////
    public function storevideo(Request $request)
    {
        if ($request->has('picture')) {
            $destination = 'public/songsBackGround';
            $image = $request->picture;
            $image_name = time() . '_' . $image->getClientOriginalName();
            $path = $request->file('picture')->storeAs($destination, $image_name);
            $input['picture'] = $image_name;
        }

        //song storage
        if ($request->has('song')) {
            $destination = 'public/songs';
            $song = $request->song;
            $song_name = time() . '_' . $song->getClientOriginalName();
            $path = $request->file('picture')->storeAs($destination, $song_name);
            $input['picture'] = $song_name;
        }

        $user_id = auth()->user()->id;
        song::create([
            'user_id' => $user_id,
            'title' => $request->title,
            'FeaturedArtist' => $request->FeaturedArtist,
            'chkPassPort' => $request->chkPassPort,
            'MusicType' => $request->MusicType,
            'song' => $song_name,
            'picture' => $image_name,
            'description' => $request->description
        ]);
        return redirect()->back()->with('message ', 'song added successfully');
    }
    public function editvideo(Request $request)
    {
        $song = song::find($request->id);
        $song->update($request->all());
    }

    ///////////////////////////
    public function storeAlbum(Request $request)
    {
        if ($request->has('picture')) {
            $destination = 'public/songsBackGround';
            $image = $request->picture;
            $image_name = time() . '_' . $image->getClientOriginalName();
            $path = $request->file('picture')->storeAs($destination, $image_name);
            $input['picture'] = $image_name;
        }

        //song storage
        if ($request->has('song')) {
            $destination = 'public/songs';
            $song = $request->song;
            $song_name = time() . '_' . $song->getClientOriginalName();
            $path = $request->file('picture')->storeAs($destination, $song_name);
            $input['picture'] = $song_name;
        }

        $user_id = auth()->user()->id;
        song::create([
            'user_id' => $user_id,
            'title' => $request->title,
            'FeaturedArtist' => $request->FeaturedArtist,
            'chkPassPort' => $request->chkPassPort,
            'MusicType' => $request->MusicType,
            'song' => $song_name,
            'picture' => $image_name,
            'description' => $request->description
        ]);
        return redirect()->back()->with('message ', 'song added successfully');
    }
    public function editAlbum(Request $request)
    {
        $song = song::find($request->id);
        $song->update($request->all());
    }

    ///////////////////////////
    public function storeEvent(Request $request)
    {
        if ($request->has('picture')) {
            $destination = 'public/songsBackGround';
            $image = $request->picture;
            $image_name = time() . '_' . $image->getClientOriginalName();
            $path = $request->file('picture')->storeAs($destination, $image_name);
            $input['picture'] = $image_name;
        }

        //song storage
        if ($request->has('song')) {
            $destination = 'public/songs';
            $song = $request->song;
            $song_name = time() . '_' . $song->getClientOriginalName();
            $path = $request->file('picture')->storeAs($destination, $song_name);
            $input['picture'] = $song_name;
        }

        $user_id = auth()->user()->id;
        song::create([
            'user_id' => $user_id,
            'title' => $request->title,
            'FeaturedArtist' => $request->FeaturedArtist,
            'chkPassPort' => $request->chkPassPort,
            'MusicType' => $request->MusicType,
            'song' => $song_name,
            'picture' => $image_name,
            'description' => $request->description
        ]);
        return redirect()->back()->with('message ', 'song added successfully');
    }
    public function editEvent(Request $request)
    {
        $song = song::find($request->id);
        $song->update($request->all());
    }

    ///////////////////////////
    public function storeFollowers(Request $request)
    {
        if ($request->has('picture')) {
            $destination = 'public/songsBackGround';
            $image = $request->picture;
            $image_name = time() . '_' . $image->getClientOriginalName();
            $path = $request->file('picture')->storeAs($destination, $image_name);
            $input['picture'] = $image_name;
        }

        //song storage
        if ($request->has('song')) {
            $destination = 'public/songs';
            $song = $request->song;
            $song_name = time() . '_' . $song->getClientOriginalName();
            $path = $request->file('picture')->storeAs($destination, $song_name);
            $input['picture'] = $song_name;
        }

        $user_id = auth()->user()->id;
        song::create([
            'user_id' => $user_id,
            'title' => $request->title,
            'FeaturedArtist' => $request->FeaturedArtist,
            'chkPassPort' => $request->chkPassPort,
            'MusicType' => $request->MusicType,
            'song' => $song_name,
            'picture' => $image_name,
            'description' => $request->description
        ]);
        return redirect()->back()->with('message ', 'song added successfully');
    }
    public function editFollowers(Request $request)
    {
        $song = song::find($request->id);
        $song->update($request->all());
    }
}
>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9
