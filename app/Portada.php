<?php

namespace Konrad;

use Illuminate\Database\Eloquent\Model;

class Portada extends Model
{
 	protected $table = 'portada';
    protected $fillable = ['cover','info1title','info1','pic1title','pic1','pic1comment','audiotitle','audio','info2title','info2','pic2title','pic2','pic2comment','user_id'];
}


          