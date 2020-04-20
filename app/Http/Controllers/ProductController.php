<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{

    public function show ($slug){

    $product=Product::where('slug', $slug)->first();
    if(!is_null($product)){
        return view('pages.product.show', compact('product'));

    }else{
        session()->flash('errors','Sorry There is o product');
        return redirect()->route('products');
    }



    }

}
