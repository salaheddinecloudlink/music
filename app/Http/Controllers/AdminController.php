<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Event;
use App\Models\Neww;
use App\Models\profile_artist;
use App\Models\song;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['admin', 'verified']);
    }

    public function index()
    {
        $songs = song::all();
        $nbr_songs = count($songs);
        $videos = Video::all();
        $nbr_videos = count($videos);
        $albums = Album::all();
        $nbr_albums = count($albums);
        return view('layouts.main_admin')->with('nbs', $nbr_songs)->with('nbv', $nbr_videos)->with('nba', $nbr_albums);
    }

    public function songs()
    {
        $songs = song::all();
        return view('layouts.admin_musics', compact('songs'));
    }
    public function videos()
    {
        $videos = Video::all();
        // dd($videos);
        return view('layouts.admin_video', compact('videos'));
    }
    public function events()
    {
        $events = Event::latest();
        return view('layouts.admin_event', compact('events'));
    }

    public function artists()
    {

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

        // dd($artists);

        return view('layouts.admin_artist', compact('artists'));
    }

    public function destroyArtist(Request $request)
    {
        $id = $request->get('id');

        $ar = profile_artist::findOrFail($id);

        $user = User::find($ar->user_id);
        if ($user == null) {
            $user = User::where('oauth_id', $ar->user_id)->first();
        }

        // dd($user);
        $ar->delete();
        $user->delete();

        return redirect()->back()->with('message', 'artist deleted successfully');
    }

    public function detailartist(Request $request)
    {
        $id = $request->id;
        $artist = profile_artist::find($id);
        $user = user::where('oauth_id', $artist->user_id)->first();
        if ($user == null) {
            $user = user::where('id', $artist->user_id)->first();
        }
        $albs = Album::where('user_id', $user->id)->paginate(10);
        $songs = Song::where('user_id', $user->id)->paginate(10);
        $videos = Video::where('user_id', $user->id)->paginate(10);

        // dd($videos);
        return view('layouts.admin_ArtistDetails')->with('albs', $albs)->with('artist', $artist)->with('songs', $songs)->with('videos', $videos);
    }

    // store news
    public function storeNew(Request $request)
    {

        $user_id = auth()->user()->id;
        $newss = new Neww();
        $newss->user_id = $user_id;
        $newss->title = $request->get('title');
        $newss->description = $request->get('description');
        $newss->SongType_id = $request->get('SongType');
        $newss->FeaturedArtist = $request->get('FeaturedArtist');
        $newss->chkPassPort = $request->get('chkPassPort');
        $newss->save();
        return redirect()->back()->with('message', "new created succeessfully");
    }

    public function news()
    {
        $news = Neww::latest();
        // dd($news);
        return view('layouts.admin_news', compact('news'));
    }
}
