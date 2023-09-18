<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class His_con_pre_factura extends Model
{
    protected $table = 'his_con_pre_factura';
    protected $fillable = ['id','id_registro','numhistoria','nroconsulta','codigo','descripcion','cantidad','monto','created_at','updated_at'];
 
}

