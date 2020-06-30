<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
    	return view('register');
    }
    public function welcome(Request $request)
    {
    	$firstname = $request->input('firstname');
    	$lastname = $request->input('lastname');
    	$nama = $firstname . " " . $lastname;

    	return view('welcome', ['nama' => $nama]);
    }
}
