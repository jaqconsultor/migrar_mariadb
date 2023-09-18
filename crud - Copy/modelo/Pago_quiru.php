<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pago_quiru extends Model
{
    protected $table = 'pago_quiru';
    protected $fillable = ['id','cod_pagos','consecuti','fecha','monto_total','abono','resta','pago','hora_pago','created_at','updated_at'];
 
}

