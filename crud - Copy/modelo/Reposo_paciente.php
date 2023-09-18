<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reposo_paciente extends Model
{
    protected $table = 'reposo_paciente';
    protected $fillable = ['id','nrohistoria','nroconsulta','codereposo','fdesde','numdias','obser_reposo','created_at','updated_at'];
 
}

