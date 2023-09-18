<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente_no_regi extends Model
{
    protected $table = 'paciente_no_regi';
    protected $fillable = ['id','registro','apellidos','nombres','celular','motivo','fecha','medico','registrado','hora','created_at','updated_at'];
 
}

