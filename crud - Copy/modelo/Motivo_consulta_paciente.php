<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motivo_consulta_paciente extends Model
{
    protected $table = 'motivo_consulta_paciente';
    protected $fillable = ['id','codemotivo','nrohistoria','nroconsulta','created_at','updated_at'];
 
}

