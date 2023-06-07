<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\singleaction;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\signupcontroller;
use App\Http\Controllers\productcontroller;
use App\Models\Customer;
use App\Http\Controllers\customer_controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// localhost:8000/about
// Route::get('/about',function(){
//     // return "about us data";
//     echo "about us data";
// });

// Route::get('/products/{id}',function($id){
//     return $id;
// });

// Route::get('/products/{id}/details/{d}',function($id,$d){
//     echo $id." ". $d;
// });
// Route::get('/courses/{name?}',function($name=null){
//     return $name;
// });

// Route::get('/demo/{name?}',function($name=null){
//     return $name;
// })->where('name','[a-zA-Z]+');


// Route::get('/products1/{id}/details/{d}',function($id,$d){
//     echo $id." ". $d;
// })->where(['id'=>'\d+','d'=>'[a-zA-Z]+']);

// Route::get('/products2/{id}/details/{d}',function($id,$d){
//     echo $id." ". $d;
// })->whereNumber('id')->whereAlpha('d');


// // Route::redirect('/login','/welcomepage');
// Route::permanentRedirect('/login','/welcomepage');

// Route::post('/register',function(){
//     return "about us data";
// });

// Route::get('/home',function(){
//     return view('homepage');
// });

// Route::view('/home','homepage');

// Route::get('/home/{uname?}',function($uname=null){
    // return view('homepage',['name'=>'happy','email'=>"happy@gmail.com"]);
    // return view('homepage')->with('name','happy');
//     $name="happy";
//     $email="happy@gmail.com";
//     $login=$uname??"guest";
//     $data=compact('name','email','login');
//     return view('homepage')->with($data);
// });



Route::get('/',[homecontroller::class,'index']);

Route::get('/about',[homecontroller::class,'about']);
Route::get('/home/{uname?}',[homecontroller::class,'home']);
Route::get('/fetch',[homecontroller::class,'fetcharray']);
Route::get('/form',[signupcontroller::class,'index']);
Route::post('/form',[signupcontroller::class,'register']);
Route::get('/products',[productcontroller::class,'index']);
Route::get('/productAnonymous',[productcontroller::class,'anonymous']);

Route::get('/single',singleaction::class);

Route::resource('/photos',PhotoController::class);

// Route::get('/customer',function(){
//     $customers=Customer::all();
//     echo "<pre>";
//     print_r($customers);
//     echo "</pre>";
// });
Route::get('/customer',[customer_controller::class,'index']);
Route::post('/customer',[customer_controller::class,'store']);
Route::get('/customer/view',[customer_controller::class,'view']);
// Route::get('/customer/delete/{id}',[customer_controller::class,'delete']);
Route::get('/customer/delete/{id}',[customer_controller::class,'delete'])->name('customer.delete');

Route::get('/customer/edit/{id}',[customer_controller::class,'edit'])->name('customer.edit');
Route::post('/customer/update/{id}',[customer_controller::class,'update']);
Route::fallback(function(){
    return "Page not found";
});
