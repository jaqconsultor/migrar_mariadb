<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalles_factura_cliente extends Model
{
    protected $table = 'detalles_factura_cliente';
    protected $fillable = ['id','cod_inventario','numfactura','tipo_articulo','nombre','precio','descuento','cantidad','fecha_doc','tipo_precio','total_articulo','created_at','updated_at'];
 
}

