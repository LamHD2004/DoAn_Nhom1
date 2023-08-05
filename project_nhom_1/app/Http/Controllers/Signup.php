<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\MyUser;

use Illuminate\Support\Facades\DB;

class Signup extends Controller
{
    public function ShowFormSignup (){
        $cat = categories::get();
        // $parent = array_map($cat, $c => $c->parent == NULL);
        // $children = array_map($cat, $c => $c->parent != NULL);
        
        
        

        return view('content.signup',compact('cat'));
    }

    public function getRegister(Request $request){
        $email = $request->email;
        $password = bcrypt($request->password);
        $nameuser = $request->firtname . ' ' . $request->lastname;
        $phone = $request->phone;

        $newUser = new MyUser;
        $newUser -> name = $nameuser;
        $newUser -> password = $password;
        $newUser -> email = $email;
        $newUser -> phonenumber = $phone;
        $newUser -> save();
        
        return redirect()->route('ShowFormLogin');
    }
}
