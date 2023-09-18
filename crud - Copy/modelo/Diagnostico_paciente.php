<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnostico_paciente extends Model
{
    protected $table = 'diagnostico_paciente';
    protected $fillable = ['id','nrohistoria','nroconsulta','codediagnostico','orden','created_at','updated_at'];
 
}

