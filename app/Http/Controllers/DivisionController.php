<?php

namespace App\Http\Controllers;

use App\District;
use Illuminate\Http\Request;
use App\Division;


class DivisionController extends Controller
{


    public function index(){

        $divisions=Division::orderBy('priority', 'desc')->get();

        return view('admin.pages.divisions.index', compact('divisions'));
    }


    public function create()
    {


        return view('admin.pages.divisions.create');
    }


    public function update(Request $request, $id){

        $this->validate($request,[
            'name'=>'required',
            'priority'=>'required',

        ]);


        $division= Division::find($id);
        $division->name = $request->name;
        $division->priority = $request->priority;



        $division->save();

        session()->flash('success',' Division update success');
        return redirect()->route('admin.divisions');

    }

    public function edit($id)
    {

        $division=Division::find($id);
        if(!is_null($division)){
            return view('admin.pages.divisions.edit', compact('division'));

        }else{
            return redirect()->route('admin.divisions');
        }

    }

///STORE

    public function store(Request $request){

        $this->validate($request,[
            'name'=>'required',
            'priority'=>'required',

        ]);


        $division = new Division();
        $division->name = $request->name;
        $division->priority = $request->priority;




        $division->save();

        session()->flash('success','A new Division added success');
        return redirect()->route('admin.divisions');

    }



    public function division_delete($id)
    {
        $division =  Division::find($id);

        if(! is_null($division)){

            //Delete all the district of this division
            $districts=District::where ('division_id', $division->id)->get();

            foreach ($districts as $district){
                $district->delete();
            }
            $division->delete();
        }

        session()->flash('success', 'Division has deleted Successfully');
        return back();
    }


}
