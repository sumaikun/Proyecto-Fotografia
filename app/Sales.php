<?php

namespace Konrad;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
	protected $table = 'Sales';
    protected $fillable = ['archivo','titulo','usuario','codigo','estado','precio','comentario'];
}
