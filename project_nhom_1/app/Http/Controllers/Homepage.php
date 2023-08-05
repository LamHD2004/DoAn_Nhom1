<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\products;
use App\Models\Slide;
use App\Enums\UserRole;
use App\Models\MyUser;
use App\Models\auction_details;
use Illuminate\Support\Facades\Auth;

class Homepage extends Controller
{
    public function ShowFormHomePage(){

        $cat = categories::get();
        // $parent = array_map($cat, $c => $c->parent == NULL);
        // $children = array_map($cat, $c => $c->parent != NULL);
        $pro =  products::join('auction_details', 'products.id' , '=' , 'auction_details.id_product')->get();

        $slides = Slide::get();

        $user = MyUser::get()->first();

        $au_details = auction_details::get();
        

        return view('content.index_content',compact('cat','pro','slides'));
    }

    
    public function getLogout(){
        Auth::logout();
        return redirect()->route('ShowFormHomePage');
    }

}
