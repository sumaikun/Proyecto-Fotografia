<?php

namespace Konrad\Helpers;
use Konrad\Purchase;
use Konrad\Sales;
use Konrad\User;
use Konrad\Rating;
use Konrad\Portada;
use Konrad\Message;
class OwnLibrary

{

    function __construc(){}

    public static function name_role($val)
    {
        if($val == 1)
        {
            return "Administrador";
        }
        if($val == 2)
        {
            return "Fotografo";
        }
    }

    public static function total_sales($id)
    {
        $total = Purchase::Where('user_id','=',$id)->count();
        return $total;
    }

        public static function total_photos($id)
    {
        $total = Sales::Where('usuario','=',$id)->count();
        return $total;
    }

    public static function nombre_usuario($id)
    {
        $usuario = User::Where('id','=',$id)->first();
        return $usuario->name;
    }

        public static function correo_usuario($id)
    {
        $usuario = User::Where('id','=',$id)->first();
        return $usuario->email;
    }

    public static function nombre_foto($id)
    {
        $foto = Sales::Where('id','=',$id)->first();
        return $foto->titulo;
    }

    public static function rate_average($id){
        $rates = Rating::Where('user_id','=',$id)->get();
        if($rates=='[]')
        {
            return 0;
        }    
        $average = 0;
        $total = 0;
        foreach ($rates as $rate) {

            $average += $rate->calification;
            $total += 1;
        }
        return $average/$total;
    }

    public static function showpictures($id)
    {
        $query = Portada::where('user_id','=',$id)->first();
        return $query;
    }

    public static function number_users()
    {
        $total = User::All()->count();
        return $total;
    }

    public static function noread($id)
    {
        $total = Message::Where('send_id','=',$id)->where('state','=',0)->count();
        return $total;
        
    }
}