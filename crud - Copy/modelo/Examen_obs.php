<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Examen_obs extends Model
{
    protected $table = 'examen_obs';
    protected $fillable = ['id','numhistoria','numconsulta','observacion','created_at','updated_at'];
 
}

