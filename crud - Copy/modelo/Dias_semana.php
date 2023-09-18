<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dias_semana extends Model
{
    protected $table = 'dias_semana';
    protected $fillable = ['id','fecha','dia_semana','semana','ano','descripcion','tipo_dia','created_at','updated_at'];
 
}

