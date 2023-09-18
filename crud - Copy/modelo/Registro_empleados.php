<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registro_empleados extends Model
{
    protected $table = 'registro_empleados';
    protected $fillable = ['id','nro_empleado','fecha_creacion','status','cedula_empleado','nombre_empleado','tipo_nomina','frecuencia_nomina','monto_s1','monto_s2','monto_s3','monto_s4','monto_total','created_at','updated_at'];
 
}

