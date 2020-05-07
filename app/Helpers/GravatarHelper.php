<?php
namespace App\Helpers;

class GravatarHelper{


    public static function validate_gravatar($email){


        $hash=md5($email);
        $url='https://www.gravatar.com/avatar/'.$hash.'?d=404';
        $headers=@get_headers($url);
        if(!preg_match("|200|",$headers[0])){

            $has_valid_avatar=False;

        }else{

            $has_valid_avatar=True;
        }

        return $has_valid_avatar;
    }



    public static function gravatar_image($email, $size=0,$d="")
    {

        $hash=md5($email);
        $image_url= "https://www.gravatar.com/avatar/".$hash.'?s='.$size.'&d='.$d;
        return $image_url;
    }
}


