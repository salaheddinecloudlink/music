<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DiscussionController extends Controller
{
    //

    public function index(){

        return view('welcome.discussion');
    }

    public function detail(){

        return view('welcome.discussion-detail');
    }

    public function store()
    {
        $id = Auth::user()->oauth_id;
        if ($id == null) {
            $id = Auth::user()->id;
        }

        
        // $songs = song::where('user_id', Auth::user()->id)->paginate(10);
        return view('auth.Artist.song', compact('songs'));
    }
}
