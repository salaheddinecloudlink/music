<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function __construct(){
        $this->middleware(['fan','verified']);
    }



    public function index(){
        return view('profile.index');
    }
}
