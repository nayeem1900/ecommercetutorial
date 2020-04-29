<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\District;
use App\Division;
use Illuminate\Support\Str;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo  = '/';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {


        $this->middleware('guest');
    }
//Display The Registration Form



    public function showRegistrationForm(){

        $divisions=Division::orderBy('priority', 'desc')->get();
        $districts=District::orderBy('name', 'asc')->get();
        return view('auth.register', compact('districts','divisions'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:30'],
            'last_name' => ['nullable', 'string', 'max:15'],

            'mobile_no' => ['required', 'max:11'],
            'division_id' => ['required', 'numeric'],
            'district_id' => ['required', 'numeric' ],
            'street_address' => ['required', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last__name' => $data['last_name'],
            'username' =>Str::slug($data['first_name'].$data['last_name']),
            'mobile_no' => $data['mobile_no'],
            'division_id' => $data['division_id'],
            'district_id' => $data['district_id'],
            'street_address' => $data['street_address'],
            'ip_address' => request()->ip(),
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
