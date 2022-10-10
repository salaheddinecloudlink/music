<?php

namespace App\Http\Controllers;

use App\Models\profile_artists;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\artistRegister;
use App\Models\User;



class ArtistRegisterController extends Controller
{

    public function artistRegister(Request $request){

        $this->validate($request,[
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'Accept' =>'required',
        ]);
    	 $user =  User::create([
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'user_type' => request('user_type'),
            'Accept'=> request('Accept'),
        ]);

        profile_artists::create([
            'user_id' => $user->id,
            'email' => request('email')

        ]);

        return $user;




    }


























}
