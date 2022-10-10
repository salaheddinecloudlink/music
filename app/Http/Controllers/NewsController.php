<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Neww;
class NewsController extends Controller
{
    //
    public function index()
    {
        $news = Neww::latest()->take(9)->get();
        $newss = Neww :: latest()->take(9)->get();
        return view('welcome.news')->with('news', $news)->with('newss', $newss);
    }
    
    
}
