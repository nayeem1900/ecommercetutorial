<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;
use Illuminate\Support\Str;
use App\Notifications\VerifiRegistration;

class VerificationController extends Controller
{

    public function verify($token)
    {

        $user=User::where ('remember_token',$token)->first();
        if(!is_null($user)){

            $user->status=1;
            $user->remember_token=Null;
            $user->save();
            session()->flash('success','You are registered Successfully|| Login Now');
            return redirect('login');

        }else{
            session()->flash('errors','Sorry Your Token is not match ');
            return redirect('/');


        }




    }
}
