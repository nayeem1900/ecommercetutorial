<?php

namespace App\Http\Controllers;

use App\District;
use Illuminate\Http\Request;
use App\Division;

class DistrictController extends Controller
{

    public function index(){

        $districts=District::orderBy('name', 'asc')->get();

        return view('admin.pages.districts.index', compact('districts'));
    }


    public function create()
    {
        $divisions=Division::orderBy('priority', 'asc')->get();

        return view('admin.pages.districts.create', compact('divisions'));
    }


    public function update(Request $request, $id){

        $this->validate($request,[
            'name'=>'required',
            'division_id'=>'required',

        ]);


        $district= District::find($id);
        $district->name = $request->name;
        $district->division_id = $request->division_id;



        $district->save();

        session()->flash('success',' District update success');
        return redirect()->route('admin.districts');

    }

    public function edit($id)
    {


        $divisions=Division::orderBy('priority', 'asc')->get();
        $district=District::find($id);
        if(!is_null($district)){
            return view('admin.pages.districts.edit', compact('district','divisions'));

        }else{
            return redirect()->route('admin.districts');
        }

    }

///STORE

    public function store(Request $request){

        $this->validate($request,[
            'name'=>'required',
            'division_id'=>'required',

        ]);


        $district = new District();
        $district->name = $request->name;
        $district->division_id = $request->division_id;


        $district->save();

        session()->flash('success','A new District added success');
        return redirect()->route('admin.districts');

    }



    public function district_delete($id)
    {
        $district =  District::find($id);

        if(! is_null($district)){

            //Delete all the district of this division
            $districts=District::where ('division_id', $district->id)->get();

            foreach ($districts as $district){
                $district->delete();
            }
            $district->delete();
        }

        session()->flash('success', 'District has deleted Successfully');
        return back();
    }




}
