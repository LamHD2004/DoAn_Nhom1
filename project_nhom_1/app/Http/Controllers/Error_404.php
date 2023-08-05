<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;

class Error_404 extends Controller
{
    public function Error_404 (){
        $cat = categories::get();
        // $parent = array_map($cat, $c => $c->parent == NULL);
        // $children = array_map($cat, $c => $c->parent != NULL);
        
        
        

        return view('content.404',compact('cat'));
    }
}
