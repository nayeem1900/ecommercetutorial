<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;




class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        if (!is_null($category)) {

            return view('pages.categories.show', compact('category'));
        } else {
            session()->flash('errors', 'Sorry||There is no Category ID');
            return redirect('/');
        }
    }

}
