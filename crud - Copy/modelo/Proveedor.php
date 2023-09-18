<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedor';
    protected $fillable = ['id','cod_prov','proveedor','rif','direccion','telefono','contacto','celular','created_at','updated_at'];
 
}

