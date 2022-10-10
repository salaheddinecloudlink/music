<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Models\profile;
use App\Models\profile_artist;
=======
>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Hash;
>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    //

<<<<<<< HEAD
    public function handleGoogleRedirect(Request $request)
    {
        session(['user_type' => $request->input('user_type')]);
        return Socialite::driver('google')->redirect();

    }
    public function handleGoogleCallback(Request $request)
    {

        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where([['email', '=', $user->email],
            ])->first();

            if ($finduser) {

                Auth::login($finduser);
                if (session('user_type') == 'fan') {

                    return redirect()->route('home');
                } else {
                    return redirect()->route('artist.view');
                }

            } else {

                $newUser = User::create([
                    'name' => $user->name,
                    'user_type' => session('user_type'),
                    'email' => $user->email,
                    'oauth_id' => $user->id,
                    'oauth_type' => 'google',
                    'Accept' => 'true',
                    'password' => encrypt('123456dummy'),
                ]);

                Auth::login($newUser);
                if (session('user_type') == 'fan') {
                         Profile::create([
                        'user_id' => $user->id,
                    ]);
                    return redirect()->route('home');
                } else {
                         profile_artist::create([
                        'user_id' => $user->id,
                    ]);
                    return redirect()->route('artist.view');
                }

            }

        } catch (Exception $e) {
            dd($e);
        }
    }

}
=======


    public function handleGoogleRedirect(Request $request){


        session(['user_type' => $request->input('user_type')]);



        return Socialite::driver('google')->redirect();

    }
public function handleGoogleCallback(Request $request){




    try {

        $user = Socialite::driver('google')->user();

        $finduser = User::where([['email','=', $user->email]



        ])->first();

        if($finduser){



            Auth::login($finduser);
  if(session('user_type')=='fan'){

    return redirect()->route('home');
  }else
  return redirect()->route('artist.view');



        }else{


            $newUser = User::create([
                'name' => $user->name,
                'user_type'=>session('user_type'),
                'email' => $user->email,
                'oauth_id'=> $user->id,
                'oauth_type'=>'google',

                'password' => encrypt('123456dummy')
            ]);

            Auth::login($newUser);
            if(session('user_type')=='fan'){

                return redirect()->route('home');
              }else
              return redirect()->route('artist.view');


        }

    } catch (Exception $e) {
        dd($e);
    }
}


}



>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9
