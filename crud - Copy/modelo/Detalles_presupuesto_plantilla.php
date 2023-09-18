<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalles_presupuesto_plantilla extends Model
{
    protected $table = 'detalles_presupuesto_plantilla';
    protected $fillable = ['id','cod_inventario','consecutivo','tipo_articulo','nombre','precio','descuento','cantidad','fecha_doc','tipo_documento','total_articulo','created_at','updated_at'];
 
}

