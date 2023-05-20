<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signupcontroller extends Controller
{
    public function index(){
        return view('Form');
    }
    public function register(Request $request){
        print_r($request->all());
        $request->validate([
            'uname'=>'required',
            'email'=>'required|email',
            'pwd'=>'required',
            'cpwd'=>'required | same:pwd'         
        ]);
    }
}
