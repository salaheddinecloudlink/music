<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\song;
use App\Models\Video;
class DashboardController extends Controller
{

    public function __construct(){
        $this->middleware(['admin','verified']);
    }
    
    public function index(){
        $songs = song::all();
        $nbr_songs =  count($songs);
        $videos=Video::all();
        $nbr_videos = count($videos);
        $albums = Album::all();
        $nbr_albums = count($albums);
        return view('layouts.main_admin')->with('nbs',$nbr_songs)->with('nbv',$nbr_videos)->with('nba',$nbr_albums);
    	
    }

}
