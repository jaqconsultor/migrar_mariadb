<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emision_pagos extends Model
{
    protected $table = 'emision_pagos';
    protected $fillable = ['id','nro_emision','fecha_emision','descripcion','cod_banco','estado','monto_pagar','created_at','updated_at'];
 
}

