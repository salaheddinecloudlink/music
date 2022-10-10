<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    //



    public function handleFacebookRedirect(Request $request){

<<<<<<< HEAD


        return Socialite::driver('facebook')->stateless()
        ->with(['state' => request()->user_type])->redirect();

    }




public function handleFacebookCallback(Request $request){

    $key = $request->state;


=======
        session(['user_type' => $request->input('user_type')]);

        return Socialite::driver('facebook')->redirect();

    }
public function handleFacebookCallback(Request $request){

>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9


    try {

        $user = Socialite::with('facebook')->stateless()->user();

        $finduser = User::where('email', $user->email)->first();

        if($finduser){

            Auth::login($finduser);

<<<<<<< HEAD
            if($key=='fan'){
=======
            if(session('user_type')=='fan'){
>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9

                return redirect()->route('home');
              }else
              return redirect()->route('artist.view');

        }else{
            $newUser = User::create([
                'name' => $user->name,
<<<<<<< HEAD
                'user_type'=>$key,
                'email' => $user->email,
                'oauth_id'=> $user->id,
                'oauth_type'=>'facebook',
                'Accept'=>'true',
=======
                'user_type'=>session('user_type'),
                'email' => $user->email,
                'oauth_id'=> $user->id,
                'oauth_type'=>'facebook',
>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9

                'password' => encrypt('123456dummy')
            ]);

            Auth::login($newUser);

<<<<<<< HEAD
            if($key=='fan'){
=======
            if(session('user_type')=='fan'){
>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9

                return redirect()->route('home');
              }else
              return redirect()->route('artist.view');
        }

    } catch (Exception $e) {
        dd($e->getMessage());
    }
}


}



