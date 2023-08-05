<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
class Histories extends Controller
{
    public function ShowFormHistories (){
        $cat = categories::get();
        // $parent = array_map($cat, $c => $c->parent == NULL);
        // $children = array_map($cat, $c => $c->parent != NULL);
        
        
        

        return view('content.histories',compact('cat'));
    }
}
