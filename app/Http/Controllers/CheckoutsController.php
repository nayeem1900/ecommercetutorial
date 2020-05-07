<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Payment;
use Illuminate\Http\Request;
use Auth;
use App\Order;
use App\User;
use phpDocumentor\Reflection\Types\Null_;
class CheckoutsController extends Controller
{

    public function index(){

       $payments=Payment::orderBy('priority', 'asc')->get();
    return view('pages.checkouts', compact('payments'));

    }


    public function store(Request $request){

        $this->validate($request,[

            'name'=>'required',
            'mobile_no'=>'required',
            'shiping_address'=>'required',
            'payment_method_id'=>'required'

        ]);

        $order= new Order();
        //Check Transcation ID has given or not
        if($request->payment_method_id !='cash in'){
            if($request->transcation_id ==Null || empty($request->transcation_id )){

            session()->flash('errors', 'Please Transcation ID for your payment');
            return back();
            }
        }
        $order->name=$request->name;
        $order->email=$request->email;
        $order->mobile_no=$request->mobile_no;
        $order->shiping_address=$request->shiping_address;

        if(Auth::check()){


            $order->user_id=Auth::id();
        }

       $order->payment_id=Payment::where('short_name',$request->payment_method_id)->first()->id;
    $order->save();

    foreach (Cart::totalCarts()as $cart)
        $cart->order_id-=$order->id;
        $cart->save();
        session()->flash('success', 'your order Completed||Please wait admin will confirm');
    return redirect()->route('index');
    }

}
