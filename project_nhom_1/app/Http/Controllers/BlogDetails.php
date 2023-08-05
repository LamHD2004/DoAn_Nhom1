<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;

class BlogDetails extends Controller
{
    public function ShowFormBlogDetails (){
        $cat = categories::get();
        // $parent = array_map($cat, $c => $c->parent == NULL);
        // $children = array_map($cat, $c => $c->parent != NULL);
        
        

        return view('content.blog_details',compact('cat'));
    }
}
