<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
class Contact extends Controller
{
    public function contact (){
        $cat = categories::get();
        // $parent = array_map($cat, $c => $c->parent == NULL);
        // $children = array_map($cat, $c => $c->parent != NULL);
        
        
        

        return view('content.contact',compact('cat'));
    }
}
