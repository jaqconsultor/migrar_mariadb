<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura_cliente extends Model
{
    protected $table = 'factura_cliente';
    protected $fillable = ['id','numfactura','cedu_rif','fecha_factura','fecha_vence_fact','fecha_cance_fact','cliente','status_factura','tipo_factura','paciente','nom_paciente','tipo_precio','nro_orden','total_costo','total_neto','total_bruto','total_final','total_descuento','descuento_linea','notas','hora_documento','monto_pac','monto_emp','numero_consulta','numero_historia','tipo_doc','medico','nro_cxp','created_at','updated_at'];
 
}

