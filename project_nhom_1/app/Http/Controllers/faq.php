<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;

class faq extends Controller
{
    public function ShowFormFAQ (){
        $cat = categories::get();
        // $parent = array_map($cat, $c => $c->parent == NULL);
        // $children = array_map($cat, $c => $c->parent != NULL);
        
        
        

        return view('content.faq',compact('cat'));
    }
}
