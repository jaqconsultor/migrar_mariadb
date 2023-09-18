<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motivo_cita extends Model
{
    protected $table = 'motivo_cita';
    protected $fillable = ['id','codigo','tipo_atencion','created_at','updated_at'];
 
}

