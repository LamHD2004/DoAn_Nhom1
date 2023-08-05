<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Login extends Controller
{
    public function ShowFormLogin (){
        $cat = categories::get();
        // $parent = array_map($cat, $c => $c->parent == NULL);
        // $children = array_map($cat, $c => $c->parent != NULL);
        
        
        

        return view('content.login',compact('cat'));
    }


    public function getLogin(Request $request){
        $email = $request->email;
        $password = $request->password;

        $result = DB::table('my_users')->where('email' , $email)->get();

        // dd($email);
        // dd($password);

        // foreach($result as $value){

        // }

        // if($value->password == $password){
        //     return redirect()->route('ShowFormHomePage');
        // }else{
        //     echo ' false';
        // }

        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            echo 'done';
        }else{
            echo 'false';
        }

    }
}

