<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagen_pacientes extends Model
{
    protected $table = 'imagen_pacientes';
    protected $fillable = ['id','nrohistoria','imagen','created_at','updated_at'];
 
}

