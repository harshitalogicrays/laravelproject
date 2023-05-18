<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\singleaction;
use App\Http\Controllers\PhotoController;

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

Route::get('/single',singleaction::class);

Route::resource('/photos',PhotoController::class);

Route::fallback(function(){
    return "Page not found";
});
