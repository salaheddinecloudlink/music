<?php

namespace App\Http\Controllers;
use App\Models\Album;
use App\Models\Event;
use App\Models\profile_artist;
use App\Models\Profile;
use App\Models\song;
use App\Models\User;
use App\Models\Video;
use App\Models\Neww;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //

        public function index()
        {

            return view('welcome.welcome');
        }
        public function welcome()
        {
            return view('welcome.artist');
        }
        public function allsongs()
        {
            $songs = song::all();
            return View('welcome.welcome')->with('songs',$songs);
        }

        public function allvideos()
        {
            $videos = Video::all();
            return View('partials.popvideo')->with('videos',$videos);
            
        }
        public function allalbums()
        {   
            $albums = Album::all();
            return View('welcome.welcome')->with('albums',$albums);
        }
        public function allevents()
        {
            $events = Event:: all();
            return View('welcome.welcome')->with('events',$events);
        }

        public function allfans()
        {
            $fans = Profile::all(); 
            return View('welcome.welcome')->with('fans',$fans);
        }

        public function allartists()
        {
            $artists = profile_artist::all();
            return View('welcome.welcome')->with('artists',$artists);
        }
        public function featuredartists()
        {
            $farts = profile_artist::where('FeaturedArtist', '=', 'true')->first();
            dd($farts);
            return View('welcome.welcome')->with('farts',$farts);
        }
        public function allnews()
        {
            $news = Neww::all();
            dd($news);
            return View('welcome.welcome',compact('news'));
        }

        public function artistprofile($id)
        {
            $artist = profile_artist::find($id);
            // dd ($artist);
            return View('welcome.artist-profile',compact('artist'));
        }



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
                {
                    
                    $pr = profile_artist::where('user_id', $user->id);
                    $genre = $pr->name;
                 }
             }
                 
                // dd($genre);
                return view('welcome.album_details',compact('album'))->with('genre',$genre);         
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


        public function fan($id)
        {
            
            $user_id = auth()->user()->id;
            
            return redirect()->back();
    
        }
        public function Newdetails($id)
        {
            $new = Neww::find($id);
            return view('welcome.news_details',compact('new'));         
        }


        
}
