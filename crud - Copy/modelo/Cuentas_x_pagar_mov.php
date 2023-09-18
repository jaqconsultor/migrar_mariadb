<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuentas_x_pagar_mov extends Model
{
    protected $table = 'cuentas_x_pagar_mov';
    protected $fillable = ['id','nro_registro','nro_cxp','nro_mov','fecha_emision','nro_documento','tip_documento','monto_pagar','created_at','updated_at'];
 
}

