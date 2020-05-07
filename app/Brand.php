<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Brand extends Model
{


    public $fillable=[

        'name',
        'description',
        'image',
        'order_id'

    ];




    public function products(){

        return $this->hasMany(Product::class);

    }

}
