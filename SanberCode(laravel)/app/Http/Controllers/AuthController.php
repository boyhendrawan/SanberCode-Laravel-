<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function register()
    {
    	return view('pertemuan1.register');
    }
    function welcome()
    {

    	return view('pertemuan1.welcome');
    }
}
