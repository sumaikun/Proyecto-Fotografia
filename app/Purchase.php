<?php

namespace Konrad;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
       protected $table = 'purchases';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'credit_card', 'zip' , 'user_id' , 'sale_id'];
}
