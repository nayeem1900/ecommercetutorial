<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
//use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\District;
use App\Division;
use Illuminate\Support\Str;
use App\Notifications\VerifiRegistration;
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
    protected function register(Request $request)
    {
        $user= User::create([
            'first_name' => $request->first_name,
            'last__name' => $request->last_name,
            'username' =>str_slug($request->first_name.$request->last_name),
            'mobile_no' => $request->mobile_no,
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'street_address' => $request->street_address,
            'ip_address' => request()->ip(),
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'remember_token' =>Str::random(50),
            'status' =>0,
        ]);

        $user->notify(new VerifiRegistration($user));
            session()->flush('successs', 'A confirmation e-mail sent to You..Please check and confirm your email');
            return redirect('/');

    }
}
