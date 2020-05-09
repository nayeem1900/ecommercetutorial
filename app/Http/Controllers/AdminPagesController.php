<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Image;
use App\ProductImage;
use Session;
use App\User;

class AdminPagesController extends Controller
{

  /* public function __construct()
    {
        $this->middleware('auth:admin');

    }*/


    public function index()
    {

        return view('admin.pages.n');
    }


     public function manage_products()
     {

         $products=Product::orderBy('id','desc')->get();

         return view('admin.pages.product.index')->with('products',$products);
     }

    public function create()
    {

        return view('admin.pages.product.create');
    }


    public function product_edit($id)
    {

        $product=Product::find($id);

        return view('admin.pages.product.edit')->with('product',$product);
    }


    public function product_store(Request $request)
    {

        //validation

       $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
           'brand_id' => 'required|numeric',
           'category_id' => 'required|numeric',

        ]);


        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;


        $product->slug = ($request->title);
        $product->admin_id = 1;
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->save();

        //ProductImage Model Insert Image
        /*if ($request->hasFile('product_image')){


            $image= $request->file('product_image');

            $img =time(). '.'.$image->getClientOriginalExtension();
            $location=public_path('images/products/'.$img);
            Image::make($image)->save( $location);
            $product_image=new ProductImage;
            $product_image->product_id= $product->id;
            $product_image->image= $img;
            $product_image->save();

        }*/

         if (count($request->product_image) > 0) {
              foreach ($request->product_image as $image) {

                  $img = time() . '.' . $image->getClientOriginalExtension();
                  $location = public_path('images/products/' . $img);

                  Image::make($image)->save($location);
                  $product_image = new ProductImage;
                  $product_image->product_id = $product->id;
                  $product_image->image = $img;
                  $product_image->save();

              }
             session()->flash('success','A new category added success');

              return redirect()->route('admin.product.create');
          }

      }


      //product update

    public function product_update(Request $request,$id)
    {

        //validation

        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'brand_id' => 'required|numeric',
            'category_id' => 'required|numeric',

        ]);


        $product =  Product::find($id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;


        $product->slug = ($request->title);
        $product->admin_id = 1;
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->save();

        //ProductImage Model Insert Image
        /*if ($request->hasFile('product_image')){


            $image= $request->file('product_image');

            $img =time(). '.'.$image->getClientOriginalExtension();
            $location=public_path('images/products/'.$img);
            Image::make($image)->save( $location);
            $product_image=new ProductImage;
            $product_image->product_id= $product->id;
            $product_image->image= $img;
            $product_image->save();

        }*/



            return redirect()->route('admin.products');
        }




    public function product_delete($id)
    {
        $product =  Product::find($id);

        if(! is_null($product)){

            $product->delete();
        }

           session()->flash('success', 'Product has deleted Successfully');
            return back();
    }




    }



