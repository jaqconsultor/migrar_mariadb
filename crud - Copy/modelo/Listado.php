<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listado extends Model
{
    protected $table = 'listado';
    protected $fillable = ['id','tipo','descripcion_tipo','segundo','created_at','updated_at'];
 
}

