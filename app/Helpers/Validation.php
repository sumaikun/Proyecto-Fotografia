<?php

namespace Konrad\Helpers;

class Validation

{

    function __construc(){}

   public static function purchase_validation($table,$property,$property2,$property3,$property4,$argument,$argument2,$argument3,$argument4)
   {
       $query=$table::Where($property,'=',$argument)->Where($property2,'=',$argument2)->Where($property3,'Like','%'.$argument3.'%')->Where($property4,'=',$argument4)->count();

       if($query==1){
            return 'allow';
       }
       else{
            return 'deny';
       }

   }

}