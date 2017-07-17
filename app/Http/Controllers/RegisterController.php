<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    protected function validator(array $data)
    {
    	return Validator::make($data,[
    		'name'=>'required|max:255',
    		'email'=>'required|email|max:255|unique:users',
    		'password'=>'required|confirmation|min:6',
    		'g-recaptcha-response'=>'required|captcha',
    		]);
    }
}
