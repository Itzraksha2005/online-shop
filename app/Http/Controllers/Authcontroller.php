<?php

namespace App\Http\Controllers;

use App\Models\shopi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class Authcontroller extends Controller
{
    function index(){
        return view('auth.login');
    }
    function register(){
        return view('auth.register');
    }
//     function registers(Request $req){
//         // Validate the request data
//  $req->validate([
//      'name' => 'required|string|max:255',
//      'email' => 'required|email|unique:shopi,email',
//      'password' => 'required|string|min:8|confirmed', // Ensures password matches confirm_password
//  ]);
//    $shopi=new Shopi();
//    $shopi ->name=$req->name;
//    $shopi->email=$req->email;
//    $shopi->password=Hash::make($req->password);
//    $shopi->confirm_password=Hash::make($req->cpass);
//  if( $shopi->save()){
//      return "User Registered!";
//  }
// else{
//  return "Not registered";
// }

 
 //}
    function login(Request $req){
    //     // return "hello!";
       $req->validate([
        'email'=> 'email|required',
        'password'=>'required',
        
       ]);
     if(Auth::attempt($req->only('email','password'))){
        return redirect('home');
     } 
     else{
        return "invalid credentials";
     }
// dd($req->email,$req->password); 

    }
    function registers(Request $req){
  
           //Validate the request data
    // $req->validate([
    //     'name' => 'required|string|max:255',
    //     'email' => 'required|email|unique:shopi email',
    //     'password' => 'required|string|min:8' ,
    // ]);

      $shopi=new Shopi;
      $shopi ->name=$req->name;
      $shopi->email=$req->email;
      $shopi->password=Hash::make($req->password);
  

      $shopi->save();
    if( $shopi->save()){
        return "User Registered!";
    }
   else{
    return "Not registered";
   }
    }
}
