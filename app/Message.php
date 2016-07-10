<?php

namespace Konrad;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
   protected $table = 'Messages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title','message', 'send_id', 'get_id' ,'state'];
}
