<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\products;


class BroweProduct extends Controller
{
    public function ShowFormBroweProduct(){
        $cat = categories::get();

        $pro =  products::join('auction_details', 'products.id' , '=' , 'auction_details.id_product')->paginate(6);

        

        return view('content.browe_product',compact('cat','pro'));
    }
}
