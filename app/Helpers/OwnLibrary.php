<?php

namespace Konrad\Helpers;

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

}