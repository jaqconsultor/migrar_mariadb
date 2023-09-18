<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registro_empleados_eje_detalle extends Model
{
    protected $table = 'registro_empleados_eje_detalle';
    protected $fillable = ['id','nro_nomina','nro_empleado','nro_cxp','monto_empleado','created_at','updated_at'];
 
}

