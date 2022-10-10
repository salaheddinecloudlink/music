<?php

namespace App\Http\Controllers;

use App\Models\Favoritevideo;
use App\Models\Profile;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['fan', 'verified']);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::user()->oauth_id;
        if ($id == null) {
            $id = Auth::user()->id;
        }

        $profile = profile::where('user_id', '=', $id)->first();
        return view('profile.index')->with('profile', $profile);
    }

    public function video()
    {
        $fvideos = Favoritevideo::where('user_id', '=', Auth::user()->id)->paginate(100);
        $vs = array();
        foreach ($fvideos as $fv) 
        {
            array_push($vs, $fv->video_id);
        }
        $videos = array();
        $vs = array_unique($vs);
        foreach ($vs as $gh) 
        {
            $vv=Video::find($gh);
            array_push($videos,$vv);
        }
        // dd($videos);
        return view('profile.fan-videos')->with('videos', $videos);
    }

    public function song()
    {
        return view('profile.fan-song');
    }

    public function fanFollower()
    {
        return view('profile.fan-followers');
    }

    public function fanDiscussion()
    {
        return view('profile.fan-discussion');
    }

    public function fanAlbum()
    {
        return view('profile.fan-album');
    }

    public function fanActivites()
    {
        return view('profile.fan-activities');
    }

    public function fanAccountSettings()
    {
        return view('profile.fan-account');
    }

    public function updateFan(Request $request, $id)
    {

        if ($request->has('avatar')) {
            $destination = 'public/fan/avatar';
            $avatar = $request->avatar;
            $name_aavatar = time() . '_' . $avatar->getClientOriginalName();
            $path = $request->file('avatar')->storeAs($destination, $name_aavatar);
            $input['avatar'] = $name_aavatar;
        }
        $id = Auth::user()->oauth_id;
        if ($id == null) {
            $id = Auth::user()->id;
        }
        //  dd($id);
        //song storage
        $profile = profile::where('user_id', '=', $id)->first();
        $profile->first_name = $request->input('first_name');
        $profile->last_name = $request->input('last_name');
        $profile->address = $request->input('address');
        $profile->dob = $request->input('dob');
        $profile->city = $request->input('city');
        $profile->state = $request->input('state');
        $profile->facebook = $request->input('facebook');
        $profile->instagram = $request->input('instagram');
        $profile->twitter = $request->input('twitter');
        $profile->zip = $request->input('zip');
        if ($name_aavatar != "") {
            $profile->avatar = $name_aavatar;
        }

        $profile->bio = $request->input('bio');
        $profile->update();

        return redirect()->back()->with('message', 'Profile  Sucessfully Updated!')->with('profile', $profile);
    }

}
