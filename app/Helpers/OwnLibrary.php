<?php

namespace Konrad\Helpers;
use Konrad\Purchase;
use Konrad\Sales;
use Konrad\User;
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
}