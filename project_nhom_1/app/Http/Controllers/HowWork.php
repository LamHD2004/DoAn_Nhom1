<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\Slide;

class HowWork extends Controller
{
    public function ShowForHowWork(){
        $cat = categories::get();

        $slides = Slide::where('code','=','slide-work')->get();

        $slide_icon = Slide::where('code','=','slide-about')->get();

        return view('content.how_work',compact('cat','slides','slide_icon'));
    }
}
