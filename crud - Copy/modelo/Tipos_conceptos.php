<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipos_conceptos extends Model
{
    protected $table = 'tipos_conceptos';
    protected $fillable = ['id','id_tipo_concepto','des_concepto','created_at','updated_at'];
 
}

