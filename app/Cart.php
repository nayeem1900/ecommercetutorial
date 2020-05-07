<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Product;
use App\Order;
use App\User;
use phpDocumentor\Reflection\Types\Null_;

class Cart extends Model
{

    public $fillable=[

        'user_id',
        'ip_address',
        'product_id',
        'product_quantity',
        'order_id'

    ];


    public function user(){

        return $this->belongsTo(User::class);

    }



    public function order(){

        return $this->belongsTo(Order::class);

    }

    public function product(){

        return $this->belongsTo(Product::class);

    }

   /* Total  cart
return Integer, Total cart Model*/


    public static function totalCarts(){

        if(Auth::check()){
        $carts=Cart::Where('user_id', Auth::id())
            ->Where('order_id',NULL)

            ->get();

        }else{
            $carts=Cart::Where('ip_address',request()->ip())->Where('order_id',NULL)->get();

        }

        return $carts;
        }







    /* Total Items in the cart
return Integer, Total item*/


    public static function totalItems(){

        if(Auth::check()){
            $carts=Cart::Where('user_id', Auth::id())

                ->Where('order_id',NULL)

                ->get();

        }else{
            $carts=Cart::Where('ip_address',request()->ip())->Where('order_id',NULL)->get();

        }

        $total_item=0;
        foreach ($carts as $cart){

            $total_item+= $cart->product_quantity;
        }

        return $total_item;
    }







}


