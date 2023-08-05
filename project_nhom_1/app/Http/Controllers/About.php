<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\Slide;

class About extends Controller
{
    public function ShowFormAbout(){

        $cat = categories::get();

        $slides = Slide::where('code','=','slide-about')->get();

        

        return view('content.about',compact('cat','slides'));
    }
}
