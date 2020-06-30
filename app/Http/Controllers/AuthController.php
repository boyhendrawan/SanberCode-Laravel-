<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function register()
    {
    	
    	return view('pertemuan1.register');
    }
    function welcome(Request $request)
    {
    	$nama=$request->FristName;
    	$lastName=$request->LastName;

    	return view('pertemuan1.welcome',compact("nama","lastName"));
    }
}
