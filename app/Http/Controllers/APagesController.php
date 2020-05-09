<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

use Image;
use App\Http\Controllers\AdminPagesController;
use App\ProductImage;
use Session;
use Auth;
class APagesController extends Controller
{
   /* public function __construct()
    {
        $this->middleware('auth:admin');
    }*/

    public function adminpage(){



        return view('admin.pages.n');
    }


}
