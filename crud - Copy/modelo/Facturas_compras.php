<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facturas_compras extends Model
{
    protected $table = 'facturas_compras';
    protected $fillable = ['id','id_factura_compra','cod_prov','id_tipo_concepto','fecha','estado','nro_seniat','nro_factura','mto_neto','mto_porc_iva','mto_iva','mto_porc_ret_iva','mto_ret_iva','mto_porc_ret_isrl','mto_ret_isrl','mto_total_general','nro_cxp','mto_total','created_at','updated_at'];
 
}

