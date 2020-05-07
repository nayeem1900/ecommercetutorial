<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cart;
use App\Auth;
use App\User;

class Order extends Model
{

    public $fillable=[

        'user_id',
         'ip_address',
         'name',
         'mobile_no',
         'shipping_address',
        'email',
        'message',
        'is_paid',
        'is_completed',
        'is_seen_by_admin'
    ];


    public function user(){

return $this->belongsTo(User::class);

    }

    public function carts(){

        return $this->belongsTo(Cart::class);

    }


}
