<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motivo_factura_prov extends Model
{
    protected $table = 'motivo_factura_prov';
    protected $fillable = ['id','id_fac_prov','des_concepto','monto','created_at','updated_at'];
 
}

