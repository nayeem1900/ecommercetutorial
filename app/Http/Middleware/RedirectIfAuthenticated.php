<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {




        if ($guard == "admin" && Auth::guard($guard)->check()) {
            return redirect('admin.pages.n');
        }
        if ($guard == "web" && Auth::guard($guard)->check()) {
            return redirect('user.dashboard');
        }
        if (Auth::guard($guard)->check()) {
            return redirect('user/dashboard');
        }





       /* switch ($guard){

                    case 'admin':

                        if(Auth::guard($guard)->check()){

                            return redirect()->route('admin.index');
                        }

                        break;

                    case 'web':

                        if(Auth::guard($guard)->check()){

                            return redirect()->route('user.dashboard');
                        }

                        break;
                    default:
                        if(Auth::guard($guard)->check()){

                            return redirect()->route('user.dashboard');
                        }


                        break;

                }*/



/*
        if (Auth::guard($guard)->check()) {
            return redirect(RouteServiceProvider::HOME);
        }*/

        return $next($request);
    }
}
