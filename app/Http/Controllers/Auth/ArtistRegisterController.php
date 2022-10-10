<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Models\profile_artist;
use Illuminate\Http\Request;
use App\Models\profile;

use Illuminate\Foundation\Auth\artistRegister;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;




class ArtistRegisterController extends Controller
{




    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validator(array $data)
    {
        return Validator::make($data, [

            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'Accept' =>'required',
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user= User::create([

            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'user_type' => request('user_type'),
            'Accept'=> request('Accept'),

        ]);
    if($user->user_type == "fan") {

        Profile::create([

            'user_id'=>$user->id,


        ]);
    }else{
        Profile_artist::create([

            'user_id'=>$user->id,


        ]);
    }
        return $user;


    }














    }


























