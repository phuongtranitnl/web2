<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class testcontroller extends Controller
{

    public function check(Request $request)
    {
    	$data=[
    		'email'=>$request->email,
    		'password'=>$request->password,
        ];
     
        
    	if(Auth::attempt($data)){
			return Auth::user()->name;
			return "yes";
    	}else{
    		return "no";
    	}
    }

}
