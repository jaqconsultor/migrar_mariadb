<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Radiologia_paciente extends Model
{
    protected $table = 'radiologia_paciente';
    protected $fillable = ['id','nrohistoria','nroconsulta','coderadio','nroopcion','created_at','updated_at'];
 
}

