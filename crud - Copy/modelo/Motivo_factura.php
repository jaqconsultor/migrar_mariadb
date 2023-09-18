<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motivo_factura extends Model
{
    protected $table = 'motivo_factura';
    protected $fillable = ['id','codigo','descripcion','monto','monto_seg','tipo','created_at','updated_at'];
 
}

