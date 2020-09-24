<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brand;
use Image;
use File;

class BrandController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index(){

        $brands=Brand::orderBy('id', 'desc')->get();

        return view('admin.pages.brands.index', compact('brands'));
    }


    public function create()
    {


        return view('admin.pages.brands.create');
    }


    public function update(Request $request, $id){

        $this->validate($request,[
            'name'=>'required',
            'image'=>'nullable|image',

        ]);


        $brand = Brand::find($id);
        $brand->name = $request->name;
        $brand->description = $request->description;


        //insert Image

        if ($request->hasFile('image')) {
            if (File::exists('images/brands' .$brand->image)){
                File::delete('images/brands' .$brand->image);
            }


            $image=$request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/brands/' . $img);
            Image::make($image)->save($location);
            $brand->image=$img;
        }

        $brand->save();

        session()->flash('success',' Brand update success');
        return redirect()->route('admin.brands');

    }

    public function edit($id)
    {

        $brand=Brand::find($id);
        if(!is_null($brand)){
            return view('admin.pages.brands.edit', compact('brand'));

        }else{
            return redirect()->route('admin.brands');
        }

    }

///STORE

    public function store(Request $request){

               $this->validate($request,[
            'name'=>'required',
            'image'=>'nullable|image',

        ]);


        $brand = new Brand();
        $brand->name = $request->name;
        $brand->description = $request->description;


        //insert Image

        if ($request->hasFile('image')) {
            $image=$request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/brands/' . $img);
            Image::make($image)->save($location);
            $brand->image=$img;
        }

        $brand->save();

        session()->flash('success','A new Brand added success');
        return redirect()->route('admin.brands');

    }



    public function brand_delete($id)
    {
        $brand =  Brand::find($id);

        if(! is_null($brand)){
            //if it is parent Brand delete sub Brand


            if (File::exists('images/brands' .$brand->image)){
                File::delete('images/brands' .$brand->image);
            }

            $brand->delete();
        }

        session()->flash('success', 'Brand has deleted Successfully');
        return back();
    }


}






