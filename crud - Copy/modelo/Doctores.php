<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctores extends Model
{
    protected $table = 'doctores';
    protected $fillable = ['id','cedula','apellidos','nombres','clinica','direccion','telefono','ciudad','nota','codeespecial','created_at','updated_at'];
 
}

