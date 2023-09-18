<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Antece_paciente extends Model
{
    protected $table = 'antece_paciente';
    protected $fillable = ['id','numhistoria','codeantecedente','detalles','descripcion','tipo','tipo2','created_at','updated_at'];
 
}

