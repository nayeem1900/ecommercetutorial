<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Notifications\VerifiRegistration;
use App\User;
use Auth;


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
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */


   public function __construct()
    {

        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');

    }

public function showLoginForm()
{
    return view('auth.admin.login');
}





        /*$this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('admin/pages/n');
        }
        return back()->withInput($request->only('email', 'remember'));*/




        // Validate the form data
        /*$this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required'
        ]);

        // Attempt to log the user in
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // if successful, then redirect to their intended location
            return redirect()->intended(route('/admin/pages/n'));
        }
        // if unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }*/






    public function login(Request $request)
    {


        dd('test');


        $this->validate($request, [


            'email' => 'required|email',
            'password' => 'required',

        ]);

        //find ueer by this email

//login this user


//login this user
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {

            ///login now
            // return redirect()->intended(route('/admin'));

            return redirect()->route('/admin');
        } else {

            session()->flush('errors', 'InValid');
            return back();

        }

    }
}















