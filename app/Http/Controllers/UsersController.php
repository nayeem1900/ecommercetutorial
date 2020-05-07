<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\District;
use App\Division;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\Auth\RegisterController;


class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /*public function showLoginForm()
    {
        return view('auth.login');
    }*/



    public function dashboard()
    {

        $user=Auth::user();
        return view('pages.users.dashboard', compact('user'));
    }

    public function profile()
    {

        $divisions=Division::orderBy('priority', 'desc')->get();
        $districts=District::orderBy('name', 'asc')->get();

        $user=Auth::user();
        return view('pages.users.profile', compact('user','divisions','districts'));
    }



    public function profileupdate(Request $request)
    {

        $user=Auth::user();

        $this-> validate($request,[

            'first_name' => ['required', 'string', 'max:30'],
            'last_name' => ['nullable', 'string', 'max:15'],
            'username' => ['required', 'alpha_dash', 'max:100', 'unique:users,username,'.$user->id],
            'mobile_no' => ['required', 'max:11','unique:users, mobile_no,'.$user->id],
            'division_id' => ['required', 'numeric'],
            'district_id' => ['required', 'numeric' ],
            'street_address' => ['required', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users,email,'.$user->id],
            'password' => ['required', 'string', 'min:8', 'confirmed'],


        ]);

        $user=Auth::user();
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->username=$request->username;
        $user->mobile_no=$request->mobile_no;
        $user->division_id=$request->division_id;
        $user->district_id=$request->district_id;
        $user->street_address=$request->street_address;
        $user->shiping_address=$request->shiping_address;
        $user->ip_address=request()->ip();
        if ($request->password !=NULL || $request->password !=""){

            $user->password=Hash::make($request->password);

            }
        $user->email=$request->email;
        $user->save();

        session()->flash('success', 'user profile has updated successfully');
        return back();
    }



}
