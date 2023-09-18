<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motivos_consulta extends Model
{
    protected $table = 'motivos_consulta';
    protected $fillable = ['id','codemotivo','descripcion','tipo','created_at','updated_at'];
 
}

