<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagen_consulta extends Model
{
    protected $table = 'imagen_consulta';
    protected $fillable = ['id','nrohistoria','nroconsulta','observacion','imagen','orden','tipo','created_at','updated_at'];
 
}

