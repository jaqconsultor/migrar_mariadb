<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Examen_paciente extends Model
{
    protected $table = 'examen_paciente';
    protected $fillable = ['id','nrohistoria','nroconsulta','codeexamen','resultado','vinculante','created_at','updated_at'];
 
}

