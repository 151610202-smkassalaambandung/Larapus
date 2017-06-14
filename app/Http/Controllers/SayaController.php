<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SayaController extends Controller
{
    //
public function __construct()
{
	$this->middleware('auth');
}


    public function saya()
    {
    	return "selamat datang";
    }

}
