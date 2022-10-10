<?php

namespace App\Http\Controllers;
use App\Models\song;
use Illuminate\Http\Request;
use App\Models\Favoritesong;
use Illuminate\Support\Facades\Auth;
class MusicController extends Controller
{
    //
<<<<<<< HEAD
    public function index(){
         $songs = song::all();
        return view('welcome.music')->with('songs',$songs);
    }

   // song details page
    public function songdetails($id){
        $song = song::find($id);
        // dd($id);
        $views = $song->nbr_views + 1;
        $song->nbr_views = $views;
        $song->save();
        return view('welcome.song_details', compact('song'));
   }

   public function views($id)
   {
       $song = song::find($id);
       $views = $song->nbr_views + 1;
       $song->nbr_views = $views;
       $song->save();
       return view('welcome.song_details', compact('song'));
   }
   public function playlist($id)
   {
       $p = new Favoritesong();
       $authstatus = true;
       $idu = Auth::id();
       if ($idu == null) {
           $authstatus = false;
       } else {
           $p->user_id = auth()->user()->id;
           $p->song_id = $id;
           $p->save();
           $song = song::find($id);
           $likes = $song->nbr_favorite + 1;
           $song->nbr_favorite = $likes;
           $song->save();
       }
       $songs = song::all();
       return redirect()->back()->with('test', $authstatus);
   }
   public function deslike($id)
   {

       $song = song::find($id);
       $views = $song->nbr_dislike + 1;
       $song->nbr_dislike = $views;
       $song->save();
       $songs = song::all();
       return redirect()->back()->with('songs', $songs);

   }

   public function like($id)
   {

       $song = song::find($id);
       $views = $song->nbr_like + 1;
       $song->nbr_like = $views;
       $song->save();
       $songs = song::all();
       return redirect()->back()->with('songs', $songs);

   }
=======
>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9
}
