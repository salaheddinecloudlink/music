<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailWelcomeController extends Controller
{
    //

    public function index(){

        return view('auth.email_welcome');
    }


    public function redirect(){
if(auth()->user()->user_type=='fan')
     {
         return redirect()->route('home');}

        return redirect()->route('artist.view');


    }
}
