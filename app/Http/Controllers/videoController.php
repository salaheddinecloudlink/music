<?php

namespace App\Http\Controllers;

use App\Models\Favoritevideo;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;

class videoController extends Controller
{
    //
    public function index()
    {

        return view('welcome.video');
    }

    public function videodetails($id)
    {
        $video = Video::find($id);
        $views = $video->nbr_views + 1;
        $video->nbr_views = $views;
        $video->save();
        return view('welcome.video_details', compact('video'));
    }
    public function views($id)
    {
        $video = Video::find($id);
        $views = $video->nbr_views + 1;
        $video->nbr_views = $views;
        $video->save();
        return view('welcome.video_details', compact('video'));
    }
    public function playlist($id)
    {
        $p = new Favoritevideo();
        $authstatus = true;
        $idu = Auth::id();
        if ($idu == null) {
            $authstatus = false;
        } else {
            $p->user_id = auth()->user()->id;
            $p->video_id = $id;
            $p->save();
            $video = Video::find($id);
            $likes = $video->nbr_favorite + 1;
            $video->nbr_favorite = $likes;
            $video->save();
        }
        $videos = Video::all();
        return redirect()->back()->with('test', $authstatus);
    }
    public function deslike($id)
    {

        $video = Video::find($id);
        $views = $video->nbr_dislike + 1;
        $video->nbr_dislike = $views;
        $video->save();
        $videos = Video::all();
        return redirect()->back()->with('videos', $videos);

    }

    public function like($id)
    {

        $video = Video::find($id);
        $views = $video->nbr_like + 1;
        $video->nbr_like = $views;
        $video->save();
        $videos = Video::all();
        return redirect()->back()->with('videos', $videos);

    }
}
