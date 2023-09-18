<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facturas_compras_detalle extends Model
{
    protected $table = 'facturas_compras_detalle';
    protected $fillable = ['id','id_registro','id_fac_prov','des_concepto','cantidad','monto','monto_total','id_factura_compra','created_at','updated_at'];
 
}

