<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class customer_controller extends Controller
{
    public function index(){
        $title="Add";
        $url=url('/customer');
        $customers=new Customer;
        $data=compact('title','customers','url');
        return view('customer')->with($data);
        
    }
    public function store(Request $request){
        // printdata($request->all());
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
            return redirect('/customer/view');
        }
    }
        public function view(){
            $customers=Customer::all();
            $data=compact('customers');
            return view('customer-view')->with($data);
        }

        public function delete($id){
            // Customer::find($id)->delete();
            // return redirect()->back();

            $customers=Customer::find($id);
            if(!is_null($customers)){
                $customers->delete();
                return redirect()->back();
            }
            else
            {   $customers=Customer::all();
                $data=compact('customers');
              return view('customer-view')->with($data);
            }
         }

         public function edit($id){
            $customers=Customer::find($id);
            if(!is_null($customers)){
                $url=url('/customer/update/'.$id);
                $title="Update";
            $data=compact('customers','title','url');
            return view('customer')->with($data);
            }
         }

         public function update($id,Request $request){
            $customers=Customer::find($id); 
            $customers->name=$request['name'];
            $customers->email=$request['email'];
            $customers->mobile=$request['mobile'];
            $customers->password=$request['password'];
            $customers->gender=$request['gender'];
            $customers->dob=$request['dob'];
            $customers->address=$request['address'];  
            $customers->isActive=$request['isActive'];  
            if($customers->save()){
                return redirect('/customer/view');
            }
         }
}
