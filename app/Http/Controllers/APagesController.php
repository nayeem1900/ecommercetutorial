<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

use Image;
use App\Http\Controllers\AdminPagesController;
use App\ProductImage;
use Session;
class APagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){



        return view('admin.pages.n');
    }


}
