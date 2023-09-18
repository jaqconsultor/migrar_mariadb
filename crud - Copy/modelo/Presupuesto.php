<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{
    protected $table = 'presupuesto';
    protected $fillable = ['id','cedula','nombre','direccion','telefono','nropresupuesto','fecha','cliente','nota','numhistoria','created_at','updated_at'];
 
}

