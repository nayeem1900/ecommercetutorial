<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Notifications\VerifiRegistration;
use App\User;



class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct()
    {
        $this->middleware('guest')->except('logout');

    }



    public function login(Request $request)
    {
        $this->validate($request, [


            'email' => 'required|email',
            'password' => 'required',

        ]);

        //find ueer by this email

        $user = User::where('email', $request->email)->first();

        if ($user->status == 1) {
//login this user
            if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))


                ///login now
                return redirect()->intended(route('index'));


         else {

            session()->flush('errors', 'InValid');
            return back();


        }


    } else
{


    //send him token again

if (!is_null($user))
{
$user->notify(new VerifiRegistration($user));

session()->flush('successs', 'A New confirmation e-mail sent to You..Please check and confirm your email');
return redirect('/');

}

else {

    session()->flush('errors', 'Please Login First');
    return redirect()->route('login');

}

}

}

}















