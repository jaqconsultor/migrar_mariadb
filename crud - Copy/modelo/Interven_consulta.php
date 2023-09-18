<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interven_consulta extends Model
{
    protected $table = 'interven_consulta';
    protected $fillable = ['id','historia','consulta','codigo_inter','detalle','descripcion','created_at','updated_at'];
 
}

