<?php

namespace App;

//use App\Http\Controllers\CategoryController;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    public function parent(){

        return $this->belongsTo(Category::class,'parent_id');
    }
}
