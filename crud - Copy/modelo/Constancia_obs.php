<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Constancia_obs extends Model
{
    protected $table = 'constancia_obs';
    protected $fillable = ['id','numhistoria','numconsulta','observacion','titulo','observacion01','created_at','updated_at'];
 
}

