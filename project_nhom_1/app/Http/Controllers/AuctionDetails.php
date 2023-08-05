<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\products;

class AuctionDetails extends Controller
{
    public function ShowFormAuctionDetails ($id){
        $cat = categories::get();
        // $parent = array_map($cat, $c => $c->parent == NULL);
        // $children = array_map($cat, $c => $c->parent != NULL);
        
        $pro = products::join('auction_details', 'products.id' , '=' , 'auction_details.id_product')->find($id);

        $products = products::get();

        return view('content.auction_details',compact('cat','pro','products'));
    }
}
