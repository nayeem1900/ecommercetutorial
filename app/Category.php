<?php

namespace App;

//use App\Http\Controllers\CategoryController;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    public function parent(){

        return $this->belongsTo(Category::class,'parent_id');

    }


       public function products(){

        return $this->hasMany(Product::class);

    }

   /* ParentorNotCategory
Check is the category child category of Parent category*/

    public static function ParentorNOtCategory($parent_id, $child_id){

       $categories=Category::where('id',$child_id)->where('parent_id', $parent_id)->get();
       if(!is_null($categories)){

           return true;

       }else{

           return false;
       }

    }



}
