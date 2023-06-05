<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class customer_controller extends Controller
{
    public function index(){
        return view('customer');
        
    }
    public function store(Request $request){
        $customers=new Customer; 
        // $customers is the instance of Customer Model Class
        $customers->name=$request['name'];
        $customers->email=$request['email'];
        $customers->mobile=$request['mobile'];
        $customers->password=md5($request['password']);
        $customers->gender=$request['gender'];
        $customers->dob=$request['dob'];
        $customers->address=$request['address'];  
        $customers->isActive=$request['isActive'];  
        if($customers->save()){
            return view('homepage');
        }
    }
}
