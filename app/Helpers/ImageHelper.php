<?php

namespace App\Helpers;
use App\User;
use App\Helpers\GravatarHelper;
use App\Http\Controllers\Auth;

class ImageHelper{


  public static function getUserImage($id){


$user=User::find($id);
$avatar_url="";

if(!is_null($user)){

    if($user->avatar==NULL){

        //return him gravatar image
if(GravatarHelper::validate_gravatar($user->email)){
$avatar_url=GravatarHelper::gravatar_image($user->email,100);

}else{
    //when There is no gravator Image

}

    }else{

        //return that image
    }



}else{


    //return redirect('/');
}

return $avatar_url;
  }





}

