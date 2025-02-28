<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;

class razorpaycontroller extends Controller
{
    public function index(){
        return view('razorpay');
    } 
    function razorpayment(Request $request){  
       $amount=$request->input('amount');
    //     dd(env('RAZORPAY_KEY'));
    //  dd(env('RAZORPAY_SECRET'));
       $api=new Api('rzp_test_fWMflLeZ9A8pLD','nWvqCnxa8Cdqe00skwNN2v3o');
       $orderdata=[
        'receipt'=>'order_'.rand(1000,9999),
        'amount'=>$amount*100,
        'currency'=>'INR',
        'payment_capture'=>1
       ];
       $order=$api->order->create($orderdata);
       echo $order['id'];
    }
}
