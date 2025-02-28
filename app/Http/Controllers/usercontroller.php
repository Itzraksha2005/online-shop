<?php

namespace App\Http\Controllers;

// use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\admin;
use App\Models\product;
use App\Models\cart;
use App\Models\Dataa;
use App\Models\order;
use Session;  
use Illuminate\Support\Facades\DB;
//  use Illuminate\Pagination\LengthAwarePaginator;
//  use Illuminate\Database\Eloquent\Collection::links;


class usercontroller extends Controller
{
    function index(){
        return view('registeration');
    }
    function add(Request $request){
        $data =new Dataa;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->password=Hash::make($request->password);
        $data->location=$request->location;
     
       if( $data->save()){
        return "User Registered successfully";
       }
       else{
        return "Not Registered";
       }

    }
    function login(){
        return view('login');
    }
    function logins( Request $request){
        // return "hello";
              $user =Dataa::where('name', $request->name)->first();
            //              ->where('password', $request->password)
            //             ->first();
        // $user=Dataa::all();
            if ($user && Hash::check($request->password,$user->password)) {
                $request->session()->put('user', $user->id);
                $request->session()->put('data',$user->name);
                 //$request->session()->put('product_id',$id);
                return redirect('nlogin');
            }
             else { 
                return "Invalid credentials";
            }

    }
    function logout(Request $request) {
        $request->session()->pull('user');
        // $request->session()->forget('user');
        // $request->session()->flush(); // Clear all session data
        return redirect('login');
    }
    function profile(){
        $data=Product::all();
        // dd($data);
         return view ('profile',compact('data'));
    }  
    function dashboard(){
        return view('layouts.admin.dashboard');
    }
     function admin(){
        return view('layouts.admin.registered');
     }
     function addadmin(Request $req){
        // return "hello";
       $admin=new Admin;
      $admin->name=$req->username;
      $admin->password=$req->password;
       if($admin->save()){
        return "Registered Successfully!";
       }
       else{
        return "Registered Failed";
    
       }
     }
      function adminlogin(Request $req){
         $info=admin::where('name',$req->username)
                     ->where('password',$req->password)
                     ->first();
                      if($info){
                        $req->session()->put('data',$info->name);
                        return redirect('list');   
                        
                      } 
                      else{
                            return "Invalid credentials!";
                      }
      }
    //    function board(){
    //       return view('layouts.admin.adminboard');
    //    }
       function added(){
        return view('layouts.admin.add');
       }
       function addproduct(Request $req){
        $product= new Product;
        $product->name=$req->username;
        $product->price=$req->price;
        $path=$req->file('file')->Store('public');
        $patharray=explode('/',$path);
        $imgpath=$patharray[1];
         $product->image=$imgpath;
         $product->save();
        if($product->save()){
            return view('profile');
        }
        else{
            return "Product not added";
        }

       }
       function list(){
        $data=Product::paginate(5);
        // dd($data);
        return view('layouts.admin.adminboard',compact('data'));
       }
       function delete($id){
         echo $isDeleted= Product::destroy($id);
         if($isDeleted){
               return redirect('layouts.admin.adminboard');
         }
       }
        function edit($id){
            $detail=Product::find($id);
            return view('layouts.admin.edit',['details'=> $detail]);
        }
         function update( Request $request ,$id){
            $record=Product::find($id);
            $record->name=$request->name;
            $record->price=$request->price;
           if($record->save()){
            return "update record sucessfully!";
           }
           else{
            return "upadte failed!";
           }
         }
          function search(Request $req){
                $searchdata=Product::where('name','like',"%".$req->search."%")->paginate(5);
               return view('layouts.admin.adminboard',['data'=>$searchdata],['search'=>$req->search]);
            
          }
      function add_cart(Request $request, $id){
        if($request->session()->has('user')){
            $cart=new Cart;
            $cart->user_id=$request->session()->get('user');
            $cart->product_id=$request->product_id;
            $cart->save();
            return redirect('profile');
        }
        else{
            return redirect('login');
        }
        // $user_id=$request->input('user_id');
        //  $users=Dataa::find($id);

        //   foreach ($users as  $user) {
        //     echo $user->name;
        //   }
         //echo $users->id;
        // $user_id=$request->input('user_id');
        // if(!$user_id){
        //     return redirect('login')->with('error','You must be logged in to add items to the cart');
        // }
        // else{
        //     $user=Dataa::find($user_id);
        
        // $info= Product::find($id);
        // if(!$info){
        //     return redirect()->back()->with('error ','Product not found');
        // }
//   echo  $data->name;
        // $cart =Cart::find($id);
        // $cart_food = $cart->name;
        // echo $cart_food;
    //     $cart=new Cart;
    //     $cart->name=$user->name;
    //     $cart->email=$user->email;
    //     $cart->phone=$user->phone;
    //     $cart->address=$user->location;
    //     $cart->product_title=$info->name;
    //     $cart->price=$info->price;
    //     $cart->quantity=$request->quantity;
    //     $cart->image=$info->image;
    //     $cart->product_id=$info->id;
    //     $cart->user_id=$user->id;
        
    //     if($cart->save()){
    //         return redirect()->back()->with('success','Product added  to cart successfully! ');
    //     }
    //     else{
    //         return redirect()->back()->with('error','Failed to add product to cart');
    //     }
    // }

      }
      static function cartItem(){
        $userId=Session::get('user');
        $num=cart::where('user_id',$userId)->count();
        return $num;   
        
    //  if($num>=3){
    //         return "Limit exceeded";
    //   $remove=  "<a href="/removeCart/{{ $item->cart_id}}" class="btn btn-danger">Remove Cart</a>"
    //     {!!$remove!!}
    //     }
    //     else{
    //          return $num;
    //      }
       }
       function cartList(){
        $userId=Session::get('user');
      $data= DB::table('carts')
        ->join('product','carts.product_id','product.id')
        ->select('product.*','carts.id as cart_id')
        ->where('carts.user_id',$userId)
        ->get();
return view('cartList',['products'=>$data]);
       }
        function RemoveCart($id){
             Cart::destroy($id);
            return redirect('cartList');
        }
        function ordernow(){
            $userId=Session::get('user');
            $data= DB::table('carts')
              ->join('product','carts.product_id','product.id')
              ->where('carts.user_id',$userId)
              ->sum('product.price');
      return view('ordernow',['total'=>$data]);
        }
        function orderplace(Request $request){
            $userId=Session::get('user');
            $alllcart=Cart::where('user_id',$userId)->get();
            foreach($alllcart as $cart){
     $order=new order;
     $order->product_id=$cart->product_id;
     $order->user_id=$cart->user_id;
     $order->address=$request->address;
     $order->status="Pending";
     $order->payment_method=$request->payment;
     $order->payment_status="Pending";
     
     if($order->save()){
        // return "Order Confirmed!";
        Cart::where('user_id',$userId)->delete();
        return redirect('profile');
     }

     
            }

             
        }
        function myorder(){
            $userId=Session::get('user');
            $data= DB::table('orders')
            ->join('product','orders.product_id','product.id')
            ->where('orders.user_id',$userId)
            ->get();
    return view('myorder',['orders'=>$data]);
          
        }
}
