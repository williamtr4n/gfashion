<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function hello(Request $request, $id){
    return $id;
    }
    public function test(Request $request){
        // $data = $request ->cookie();
        // return $data;

        return response()->download($pathToFile, $name, $headers);
        
    } 
    public function loginnn(){
        return view('login');
    }
    
    public function process_login(Request $request)
    {
        return "login success";

        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
    }
    public function getmenu(){
        return view('menu');
    }
}
