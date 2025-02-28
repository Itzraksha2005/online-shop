<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\razorpaycontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::view('app','app');
// Route::view('loged','login');
// Route::view('registered','register');
// // Route::view('navigation','navigation');
// Route::get('login',[Authcontroller::class,'index']);
// Route::get('register',[Authcontroller::class,'register']);
// Route::post('registeri',[Authcontroller::class,'registers']);
// Route::post('loginn',[Authcontroller::class,'login']);
// route::view('home','home');



route::get('registeration',[usercontroller::class,'index']);
route::post('registeration',[usercontroller::class,'add']);
route::get('login',[usercontroller::class,'login']);
route::post('logins',[usercontroller::class,'logins']);
route::get('logout',[usercontroller::class,'logout']);
route::view('nlogin','nlogin'); 
route::get('profile',[usercontroller::class,'profile']);
route::get('admin',[usercontroller::class,'dashboard']);
route::post('adminregister',[usercontroller::class,'addadmin']);
route::get('radmin',[usercontroller::class,'admin']);
route::post('log',[usercontroller::class,'adminlogin']);
// route::get('list',[usercontroller::class,'board']);
route::get('add-product',[usercontroller::class,'added']);
route::post('add-product',[usercontroller::class,'addproduct']);
route::get('deleted/{id}',[usercontroller::class,'delete']);
route::get('edit/{id}',[usercontroller::class,'edit']);
route::get('list',[usercontroller::class,'list']);
route::view('edit','layouts.admin.edit');
route::put('update/{id}',[usercontroller::class,'update']);
route::view('contact','layouts.contact');
route::post('search',[usercontroller::class,'search']);
route::post('/add_cart/{id}',[usercontroller::class,'add_cart']);
route::get('cartList',[usercontroller::class,'cartList']);
route::get('removeCart/{id}',[usercontroller::class,'RemoveCart']);
route::get('ordernow',[usercontroller::class,'ordernow']);
route::post('orderplace',[usercontroller::class,'orderplace']);
route::get('myorder',[usercontroller::class,'myorder']);
// route::view('myorder','myorder');
route::get('pay',[razorpaycontroller::class,'index']);
route::post('razorpay',[razorpaycontroller::class,'razorpayment']);
route::view('trial','trial'); 