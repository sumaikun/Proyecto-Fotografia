<?php

namespace Konrad\Helpers;
use Konrad\Purchase;
use Konrad\Sales;
use Konrad\User;
use Konrad\Portada;

class Profileelements

{

    function __construc(){}

    public static function portada($id)
    {
        $imagen = Portada::Where('user_id','=',$id)->value('cover');
        return $imagen; 
    }

    public static function info1title($id)
    {
        $title = Portada::Where('user_id','=',$id)->value('info1title');
        return $title;
    }

    public static function info1($id)
    {
        $info = Portada::Where('user_id','=',$id)->value('info1');
        return $info;
    }

    public static function pic1title($id)
    {
        $title = Portada::Where('user_id','=',$id)->value('pic1title');
        return $title;
    }
    public static function pic1($id)
    {
        $picture = Portada::Where('user_id','=',$id)->value('pic1');
        return $picture;
    }
    public static function pic1comment($id)
    {
        $comment = Portada::Where('user_id','=',$id)->value('pic1comment');
        return $comment;
    }
    public static function audiotitle($id)
    {
        $title = Portada::Where('user_id','=',$id)->value('audiotitle');
        return $title;
    }
    public static function audio($id)
    {
        $audio = Portada::Where('user_id','=',$id)->value('audio');
        return $audio;
    }    
        public static function info2title($id)
    {
        $title = Portada::Where('user_id','=',$id)->value('info2title');
        return $title;
    }

    public static function info2($id)
    {
        $info = Portada::Where('user_id','=',$id)->value('info2');
        return $info;
    }

    public static function pic2title($id)
    {
        $title = Portada::Where('user_id','=',$id)->value('pic2title');
        return $title;
    }
    public static function pic2($id)
    {
        $picture = Portada::Where('user_id','=',$id)->value('pic2');
        return $picture;
    }
    public static function pic2comment($id)
    {
        $comment = Portada::Where('user_id','=',$id)->value('pic2comment');
        return $comment;
    }  
    public static function name($id)
    {
        $name = User::Where('id','=',$id)->value('name');
        return $name;
    } 
}