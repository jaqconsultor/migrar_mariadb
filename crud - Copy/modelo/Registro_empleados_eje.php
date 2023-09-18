<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registro_empleados_eje extends Model
{
    protected $table = 'registro_empleados_eje';
    protected $fillable = ['id','nro_nomina','descripcion','fecha_aplicacion','status','tipo_nomina','frecuencia_nomina','monto_total','created_at','updated_at'];
 
}

