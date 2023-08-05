<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use Illuminate\Support\Facades\DB;

class Blog extends Controller
{
    public function ShowFormBlog (){
        $cat = categories::get();
        // $parent = array_map($cat, $c => $c->parent == NULL);
        // $children = array_map($cat, $c => $c->parent != NULL);
        
        $blogs = DB::table('blogs')->get();
        

        return view('content.blog',compact('cat','blogs'));
    }
}
